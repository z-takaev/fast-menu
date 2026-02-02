<div class="flex items-start gap-10">
    <aside class="bg-base-100 sticky top-24 hidden w-60 rounded-lg shadow lg:block">
        {{ $nav }}
    </aside>

    <main class="flex-1">
        {{ $slot }}
    </main>
</div>
