<?php

namespace Cyrox\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class ChatbotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        // Load package migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');

        // Publish migrations for modification by the host application
        $this->publishes([
            __DIR__ . '/../Database/migrations' => database_path('migrations'),
        ], 'chatbot-migrations');

        // Publish public assets (e.g., JS, CSS, images) if the directory exists
        if (File::isDirectory(__DIR__ . '/../public')) {
            $this->publishes([
                __DIR__ . '/../../public' => public_path('vendor/cyrox'),
            ], 'cyrox-chatbot-assets');
        }

        // Load views and allow publishing to the application's views/vendor directory
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'cyrox');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/cyrox'),
        ], 'chatbot-views');

        // Ensure the configuration file is published to the application's config directory
        $this->publishes([
            __DIR__ . '/../config/chatbot.php' => config_path('chatbot.php'),
        ], 'chatbot-config');

        // Load package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Register any package services.
     */
    public function register()
    {
        // Merge the package's configuration with the application's configuration
        $this->mergeConfigFrom(
            __DIR__ . '/../config/chatbot.php', // Ensure this path is correct
            'chatbot'
        );
    }
}
