@props(['title' => '', 'subtitle' => ''])

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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-[60%] h-[70%] grid grid-cols-2 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div style="background-image: url('{{ asset('assets/background.jpg') }}');" class="flex flex-col justify-center items-center gap-2 bg-cover">
                    <h3 class="text-white text-xl tracking-widest">{{ $subtitle }}</h3>
                    <h1 class="text-white text-5xl font-bold">{{ $title }}</h1>
                </div>
                <div class="flex justify-center items-center p-24">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
