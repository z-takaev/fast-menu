@extends('layouts.menu')

@section('content')
    @include('partials.header')

    @include('partials.slider')

    <div class="container">
        <div class="flex items-start">
            <div class="sticky top-[100px] me-8 w-[240px] rounded-[10px] bg-white shadow">
                @foreach (range(1, 3) as $item)
                    @foreach (['Бургеры', 'Роллы', 'Напитки'] as $category)
                        <a
                            href="#"
                            class="flex items-center p-2"
                        >
                            <img
                                class="me-4 w-[48px]"
                                src="{{ Vite::asset('resources/images/categories/' . $loop->index + 1 . '.png') }}"
                                alt=""
                            >
                            <span class="bold text-md font-bold">
                                {{ $category }}
                            </span>
                        </a>
                    @endforeach
                @endforeach
            </div>

            <div>
                @foreach (['Бургеры', 'Роллы', 'Напитки'] as $category)
                    <div class="mb-10">
                        <h1 class="font-title mb-8 text-2xl font-bold md:text-3xl lg:text-5xl">
                            {{ $category }}
                        </h1>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
                            @foreach (range(1, 2) as $card)
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
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
