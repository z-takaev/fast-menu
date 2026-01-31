<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >

        <title>{{ config('app.name') }}</title>

        <meta
            property="og:title"
            content="{{ config('app.name') }}"
        >
        <meta
            property="og:description"
            content="{{ 'Описание организации' }}"
        >
        <meta
            property="og:type"
            content="website"
        >
        <meta
            property="og:url"
            content="{{ url()->current() }}"
        >

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="pt-24">
        <x-header />

        <x-banner />

        <main>
            @yield('content')
        </main>

        <x-scroll-to-top />

        <x-footer />
    </body>

</html>
