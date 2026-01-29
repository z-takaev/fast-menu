<div class="bg-base-100 mb-10 shadow-sm">
    <div class="navbar container">
        <div class="flex">
            <a class="btn btn-ghost text-xl">FastMenu</a>
        </div>

        <div class="ms-auto flex">
            <input
                type="text"
                class="input input-bordered w-3xs"
                placeholder="Поиск по меню"
            />
        </div>

        <div class="ms-5 flex items-center">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                        <summary>RU</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a>RU</a></li>
                            <li><a>EN</a></li>
                        </ul>
                    </details>
                </li>
            </ul>

            <div class="dropdown dropdown-end">
                <div
                    class="btn btn-ghost btn-circle"
                    tabindex="0"
                    role="button"
                >
                    <div class="indicator">
                        <svg
                            class="h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                            />
                        </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </div>
                <div
                    class="card card-compact dropdown-content bg-base-100 z-1 mt-3 w-52 shadow"
                    tabindex="0"
                >
                    <div class="card-body">
                        <span class="text-lg font-bold">8 товаров</span>
                        <span class="text-info">Сумма: 1 000 руб.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
