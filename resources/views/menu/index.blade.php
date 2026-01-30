@extends('layouts.menu')

@section('content')
    @include('partials.header')

    @include('partials.slider')

    <div class="container py-8">
        <div class="flex items-start gap-10">

            <aside class="bg-base-100 sticky top-24 hidden w-60 rounded-lg shadow lg:block">
                <nav aria-label="Категории товаров">
                    @foreach (['Бургеры', 'Роллы', 'Напитки'] as $category)
                        <a
                            href="#{{ Str::slug($category) }}"
                            class="border-base-300 hover:bg-base-200 flex items-center border-b p-3 transition-colors last:border-b-0"
                        >
                            <img
                                class="mr-4 h-12 w-12 rounded object-cover"
                                src="{{ Vite::asset('resources/images/categories/' . ($loop->index + 1) . '.png') }}"
                                alt="Категория {{ $category }}"
                            >
                            <span class="text-base font-bold">
                                {{ $category }}
                            </span>
                        </a>
                    @endforeach
                </nav>
            </aside>

            <main class="flex-1">
                @foreach (['Бургеры', 'Роллы', 'Напитки'] as $category)
                    <section
                        id="{{ Str::slug($category) }}"
                        class="mb-16 scroll-mt-24"
                    >
                        <h2 class="font-title mb-8 text-2xl font-bold md:text-3xl lg:text-5xl">
                            {{ $category }}
                        </h2>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
                            @foreach (range(1, 3) as $card)
                                @if ($card === 1)
                                    <x-card
                                        title="Гранд Де Люкс Чипотл"
                                        image="{{ Vite::asset('resources/images/1.webp') }}"
                                        weight="295"
                                        :price="250"
                                        :isNew="true"
                                    />
                                @elseif ($card === 2)
                                    <x-card
                                        title="Пара Вишневый Бамбл"
                                        image="{{ Vite::asset('resources/images/2.webp') }}"
                                        weight="800"
                                        :price="425"
                                        :isHit="true"
                                    />
                                @else
                                    <x-card
                                        title="Капкейк Солёная карамель"
                                        image="{{ Vite::asset('resources/images/3.webp') }}"
                                        weight="95"
                                        :price="209"
                                    />
                                @endif
                            @endforeach
                        </div>
                    </section>
                @endforeach
            </main>
        </div>
    </div>

    @include('partials.footer')
@endsection
