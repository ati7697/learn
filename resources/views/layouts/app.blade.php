<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Fonts -->


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navFont{
            font-family: MV Boli, serif;
            font-size: medium;
        }
    </style>
</head>
<body>
        <header class="">
            @include('layouts.header')
        </header>
        <div class="">
            @yield('content')
        </div>

        <footer class="">
            @include('layouts.footer')
        </footer>

</body>
</html>
