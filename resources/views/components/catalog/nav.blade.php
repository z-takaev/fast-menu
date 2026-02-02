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
