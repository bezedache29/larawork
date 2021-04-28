<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            [x-cloak] { display: none; }
        </style>

        <title>Upwork</title>
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    </head>
    <body>
        <div class="container px-4 mx-auto">

            @include('partials.navbar')

            @livewire('message')

            @yield('content')

        </div>
        @livewireScripts
    </body>
</html>