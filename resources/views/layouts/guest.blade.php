<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans gold-bg antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 gold-bg">
            <h6 class="text-brown flex sm:justify-center text-center items-center"><strong>Ikonopisna radionica - Andjel Šević</strong></h6>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 dark-bg dark:dark-bg shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
