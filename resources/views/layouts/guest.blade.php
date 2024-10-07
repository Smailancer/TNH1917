<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Title -->
    <title>{{ config('app.name', 'The National Home 1917') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Additional Head Content -->
    @stack('head')
</head>
<body class="font-sans text-gray-900 antialiased">
    <!-- Navigation -->
    @include('layouts.navigation')
    
    <!-- Alert Messages -->
    @if(session('message'))
        <x-alert-message :type="session('messageType')" :message="session('message')" />
    @endif
    
    <!-- Main Content -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <!-- Application Logo -->
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>
        
        <!-- Enhanced Message Design -->
        <div class="mt-4 text-center bg-gradient-to-r from-green-100 to-blue-100 p-6 rounded-lg shadow-lg">
        
            <h2 class="text-2xl font-bold text-gray-800 mb-2">
                Welcome, Arthur Balfour
            </h2>
            <p class="text-gray-700 text-lg">
                As you log in, you take on his role. Please decide carfully the future of the Zionist entity.
            </p>
        </div>
        
        <!-- Slot for Login/Register Forms -->
        <div class="w-full sm:max-w-md my-3 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    
    <!-- Footer -->
    @include('layouts.footer')
    
    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
