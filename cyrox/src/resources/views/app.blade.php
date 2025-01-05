<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles') <!-- Pushing additional styles if needed -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet"> <!-- Consider upgrading Tailwind if needed -->
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">

<!-- Main content -->
<div>
    @yield('content') <!-- This is where the main content of the page will go -->
</div>

<!-- Chatbot Section -->
<section>
    @yield('Chatbot') <!-- Yielding the chatbot section to be inserted in different Blade views -->
</section>

<!-- Scripts -->
@stack('scripts') <!-- Pushing additional scripts when needed -->

</body>
</html>
