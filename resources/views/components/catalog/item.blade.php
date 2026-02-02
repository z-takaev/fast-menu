@props(['title', 'image', 'weight', 'price', 'isNew' => false, 'isHit' => false])

<div class="card bg-base-100 w-full shadow">
    <figure>
        <img
            class="h-auto w-full"
            src="{{ $image }}"
            alt="{{ $title }}"
            loading="lazy"
        />
    </figure>
    <div class="card-body">
        <h2 class="card-title">
            {{ $title }}

            @if ($isNew)
                <div class="badge badge-soft badge-secondary">Новинка</div>
            @endif

            @if ($isHit)
                <div class="badge badge-soft badge-accent">Хит</div>
            @endif
        </h2>

        <div>
            <div class="text-base-content/60 text-sm">{{ $weight }} г</div>
            <div class="text-lg font-bold">{{ $price }} ₽</div>
        </div>
    </div>
</div>
