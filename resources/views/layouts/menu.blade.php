<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >

        <title>{{ config('app.name') }}</title>

        <link
            href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
            rel="stylesheet"
        />

        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="pt-[100px]">
        @yield('content')
    </body>

</html>
