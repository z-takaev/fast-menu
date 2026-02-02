<div class="dropdown dropdown-end">
    <button
        class="btn btn-ghost btn-sm gap-1"
        aria-label="Выбрать язык"
        aria-haspopup="true"
    >
        {{ strtoupper(app()->getLocale()) }}
        <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
            />
        </svg>
    </button>

    <ul class="dropdown-content menu bg-base-100 rounded-box z-10 w-32 p-2 shadow-lg">
        <li><a href="#">Русский</a></li>
        <li><a href="#">English</a></li>
    </ul>
</div>
