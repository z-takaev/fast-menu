@extends('layouts.menu')

@section('content')
    @include('partials.header')

    <div class="container relative">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img
                        src="{{ Vite::asset('resources/images/slider/1.webp') }}"
                        alt=""
                    >
                </div>

                <div class="swiper-slide">
                    <img
                        class="w-full"
                        src="{{ Vite::asset('resources/images/slider/2.webp') }}"
                        alt=""
                    >
                </div>
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>


    <div class="container py-20">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <x-card
                title="Гранд Де Люкс Чипотл"
                image="{{ Vite::asset('resources/images/1.webp') }}"
                weight="295"
                price="250 ₽"
                isNew
            />

            <x-card
                title="Пара Вишневый Бамбл"
                image="{{ Vite::asset('resources/images/2.webp') }}"
                weight="800"
                price="425 ₽"
                isHit
            />

            <x-card
                title="Капкейк Солёная карамель"
                image="{{ Vite::asset('resources/images/3.webp') }}"
                weight="95"
                price="209 ₽"
            />
        </div>
    </div>

    @include('partials.footer')
@endsection
