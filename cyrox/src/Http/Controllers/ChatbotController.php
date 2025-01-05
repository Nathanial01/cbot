<?php

namespace Cyrox\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Cyrox\Http\Models\ChatHistory;

class ChatbotController extends BaseController
{
    /**
     * Display the chatbot interface.
     */
    public function index()
    {
        return view('cyrox::chatbot'); // Use the namespace defined in ServiceProvider
    }

    /**
     * Generate a chatbot response and save the conversation in the chat history.
     */
    public function generateResponse(Request $request): JsonResponse
    {
        try {
            // Validate the user input
            $request->validate([
                'prompt' => 'required|string|max:1000',
            ]);

            $prompt = $request->input('prompt');
            $userId = auth()->check() ? auth()->id() : null;

            // Retrieve recent conversation context
            $context = ChatHistory::where('user_id', $userId)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get(['message', 'sender'])
                ->map(fn($msg) => [
                    'role' => $msg['sender'] === 'bot' ? 'assistant' : 'user',
                    'content' => $msg['message'],
                ])
                ->toArray();

            // Add system message for context
            $messages = array_merge(
                [['role' => 'system', 'content' => 'You are an e-commerce assistant.']],
                $context,
                [['role' => 'user', 'content' => $prompt]]
            );

            // Generate chatbot response via OpenAI
            $response = OpenAI::chat()->create([
                'model' => 'gpt-4-turbo',
                'messages' => $messages,
                'max_tokens' => 500,
            ]);

            $botResponse = $response['choices'][0]['message']['content'];

            // Save the conversation history
            return $this->saveAndRespond($userId, $prompt, $botResponse);

        } catch (\Exception $e) {
            \Log::error('Chatbot Error', [
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
            ]);

            return response()->json(['error' => 'An internal error occurred. Please try again later.'], 500);
        }
    }

    /**
     * Save the user and bot messages to the database and return the bot's response.
     */
    private function saveAndRespond($userId, $prompt, $responseText): JsonResponse
    {
        // Save user message
        ChatHistory::create([
            'user_id' => $userId,
            'message' => $prompt,
            'sender' => 'user',
        ]);

        // Save bot response
        ChatHistory::create([
            'user_id' => $userId,
            'message' => $responseText,
            'sender' => 'bot',
        ]);

        return response()->json(['response' => $responseText]);
    }
}
