<?php
namespace Cyrox\Chatbot\Database\migrations;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatHistoriesTable extends Migration
{
    public function up(): void
    {
        Schema::create('chat_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('message');
            $table->enum('sender', ['user', 'bot']);
            $table->timestamps();

            // Adding foreign key constraint
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null'); // Optional: Set user_id to null if user is deleted
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chat_histories');
    }
}
