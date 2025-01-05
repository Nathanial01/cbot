<?php
use Illuminate\Support\Facades\Route;
use Cyrox\Http\Controllers\ChatbotController;

Route::group([
    'prefix' => 'chatbot',
    'as' => 'chatbot.',
    'middleware' => ['web'], // Add any middleware if needed
], function () {
    Route::get('/', [ChatbotController::class, 'index'])->name('index');
    Route::post('/generate-response', [ChatbotController::class, 'generateResponse'])->name('generate');
});
