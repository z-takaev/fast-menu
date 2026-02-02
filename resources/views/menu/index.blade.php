@extends('layouts.menu')

@section('content')
    <x-layout.container class="py-8">
        <x-banner>
            <x-banner.item image="{{ Vite::asset('resources/images/slider/2.webp') }}" />
            <x-banner.item image="{{ Vite::asset('resources/images/slider/1.webp') }}" />
        </x-banner>

        <x-catalog>
            <x-slot:nav>
                <x-catalog.nav />
            </x-slot:nav>

            @foreach (['Бургеры', 'Роллы', 'Напитки'] as $category)
                <x-catalog.category
                    :id="Str::slug($category)"
                    :name="$category"
                >
                    <x-catalog.item
                        title="Гранд Де Люкс Чипотл"
                        image="{{ Vite::asset('resources/images/1.webp') }}"
                        weight="295"
                        :price="250"
                        :isNew="true"
                    />
                    <x-catalog.item
                        title="Пара Вишневый Бамбл"
                        image="{{ Vite::asset('resources/images/2.webp') }}"
                        weight="800"
                        :price="425"
                        :isHit="true"
                    />
                    <x-catalog.item
                        title="Капкейк Солёная карамель"
                        image="{{ Vite::asset('resources/images/3.webp') }}"
                        weight="95"
                        :price="209"
                    />
                </x-catalog.category>
            @endforeach
        </x-catalog>

    </x-layout.container>
@endsection
