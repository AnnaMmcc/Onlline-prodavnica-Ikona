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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased ">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 brown-bg">
    <h6 class="h1 flex sm:justify-center text-center items-center text-white mb-4">
        <strong>Иконописна радионица - Анђел Шевић</strong>
    </h6>
    <div class="w-full sm:max-w-md mt-6 px-6 py-8 shadow-lg rounded-3 bg-white login-container">

        {{ $slot }}
    </div>
</div>
</body>

</html>

