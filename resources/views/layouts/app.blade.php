@props(['title' => ''])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }} | {{ config('app.name', 'Trip Craft') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Custom styles for text truncation */
            .line-clamp-3 {
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
            }
        </style>
    </head>
    
    <body class="bg-white text-primary-dark font-sans antialiased">
        <div class="min-h-screen flex flex-col">
            @include('layouts.navigation')
            @if (isset($header))
                <header class="bg-light-gray border-b border-gray-200">
                    <div class="container mx-auto py-8 px-4">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <main class="flex-1 bg-white">
                @if (session('message'))
                    <div class="fixed top-4 right-4 z-50 bg-green-500 text-white px-6 py-3 rounded-2xl shadow-lg transform transition-all duration-300" id="message">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-check-circle"></i>
                            <span>{{ session('message') }}</span>
                        </div>
                    </div>
                    <script>
                        setTimeout(function() {
                            const messageDiv = document.getElementById('message');
                            if (messageDiv) {
                                messageDiv.style.transform = 'translateX(100%)';
                                setTimeout(() => messageDiv.remove(), 300);
                            }
                        }, 3000);
                    </script>
                @endif
                {{ $slot }}
            </main>
            <x-footer/>
        </div>
    </body>
</html>
