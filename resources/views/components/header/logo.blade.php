@props(['image'])

<a
    href="{{ route('menu') }}"
    class="block"
    aria-label="На главную"
>
    <img
        class="h-10 w-auto"
        src="{{ $image }}"
        alt="Логотип {{ config('app.name') }}"
    >
</a>
