<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-4">
            <header class="container mx-auto">
                <img src="/images/logo.svg" alt="Tweety">
            </header>

            @if (session('message'))
                <div class=" mb-8 w-44 p-1 rounded bg-green-100 border border-green-500 text-green-900 flex fixed text-xs items-center">
                    <p class="">{{ session('message') }}</p>
                    <p class="float-right">X</p>
                </div>
            @endif

        </section>

        {{ $slot }}
    </div>

    <script src="http://unpkg.com/turbolinks"></script>
</body>
</html>