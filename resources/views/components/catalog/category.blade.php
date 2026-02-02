@props(['id', 'name'])

<section
    id="{{ $id }}"
    class="mb-16 scroll-mt-24"
>
    <h2 class="font-title mb-8 text-2xl font-bold md:text-3xl lg:text-5xl">
        {{ $name }}
    </h2>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
        {{ $slot }}
    </div>
</section>
