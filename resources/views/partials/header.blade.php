<header class="bg-base-100 fixed top-0 z-20 w-full shadow">
    <div class="navbar container gap-4">
        <div class="flex-none">
            <a
                href="{{ route('menu') }}"
                class="block"
                aria-label="На главную"
            >
                <img
                    class="h-10 w-auto"
                    src="{{ Vite::asset('resources/images/logo.svg') }}"
                    alt="Логотип {{ config('app.name') }}"
                >
            </a>
        </div>

        <div class="ms-8 flex-1">
            <form
                class="max-w-md"
                action="#"
                method="GET"
            >
                <input
                    type="search"
                    name="q"
                    class="input input-bordered w-65"
                    placeholder="Поиск по меню"
                    aria-label="Поиск по меню"
                />
            </form>
        </div>

        <div class="flex flex-none items-center gap-2">
            <x-language-switcher />

            <x-cart-dropdown
                :count="8"
                :total="1000"
            />
        </div>
    </div>
</header>
