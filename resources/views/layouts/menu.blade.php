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

        <button
            id="scrollToTop"
            class="invisible fixed bottom-8 right-8 rounded-full bg-blue-600 p-4 text-white opacity-0 shadow-lg transition-all duration-300 hover:bg-blue-700"
            aria-label="Наверх"
        >
            <svg
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 10l7-7m0 0l7 7m-7-7v18"
                />
            </svg>
        </button>
    </body>

</html>
