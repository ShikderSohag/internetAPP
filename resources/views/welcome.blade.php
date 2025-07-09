<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta name="author" content="{{ env('APP_AUTHOR') }}">
    <meta name="version" content="{{ env('APP_VERSION') }}">
    <meta name="keywords" content="ShikderBD, WiFi, Service, Internet, Laravel, Application">
    <meta name="theme-color" content="#4a90e2">

</head>

<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <img src="https://cdn-icons-png.flaticon.com/512/93/93158.png" alt="" class="w-24 h-24 mb-4">
    <h2 class="text-2xl font-bold text-center">{{ env('APP_DESCRIPTION') }}</h2>
    <p class="text-center">{{ env('APP_SLOGAN') }} by <a href="{{ env('AUTHOR_URI') }}"
            class="text-blue-500 hover:underline">{{ env('APP_AUTHOR') }}</a></p>
</body>

</html>
