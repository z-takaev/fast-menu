@props(['title', 'image', 'weight', 'price', 'isNew' => false, 'isHit' => false])

<div class="card bg-base-100 max-w-80 shadow-sm">
    <figure>
        <img
            src="{{ $image }}"
            alt="{{ $title }}"
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
            <div class="text-sm text-gray-500">{{ $weight }} г</div>
            <div class="text-lg font-bold">{{ $price }}</div>
        </div>
    </div>
</div>
