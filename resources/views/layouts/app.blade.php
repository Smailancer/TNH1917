<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'The National Home') }}</title>

        {{-- <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}" type="image/jpeg"> --}}


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            @if(session('message'))
            <x-alert-message :type="session('messageType')" :message="session('message')" />

            {{-- <x-alert-message type="success" message="This is a hardcoded success message!" />
            <x-alert-message type="success" message="This is a success message!" />
            <x-alert-message type="error" message="This is an error message!" /> --}}

            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @include('layouts.footer')

        
        @livewireScripts
        @vite(['resources/js/app.js'])

    </body>
</html>
