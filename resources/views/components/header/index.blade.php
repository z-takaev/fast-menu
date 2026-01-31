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
                <label class="input">
                    <svg
                        class="h-[1em] opacity-50"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <g
                            stroke-linejoin="round"
                            stroke-linecap="round"
                            stroke-width="2.5"
                            fill="none"
                            stroke="currentColor"
                        >
                            <circle
                                cx="11"
                                cy="11"
                                r="8"
                            ></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </g>
                    </svg>
                    <input
                        type="search"
                        placeholder="Поиск по меню"
                        aria-label="Поиск по меню"
                    />
                </label>
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
