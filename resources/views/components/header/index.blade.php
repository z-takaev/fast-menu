<header class="bg-base-100 fixed top-0 z-20 w-full shadow">
    <x-layout.container class="navbar gap-4">
        <div class="flex-none">
            <x-header.logo image="{{ Vite::asset('resources/images/logo.svg') }}" />
        </div>

        <div class="ms-8 flex-1">
            <x-header.search />
        </div>

        <div class="flex flex-none items-center gap-2">
            <x-header.languages />

            <x-header.cart :count="8" />
        </div>
    </x-layout.container>
</header>
