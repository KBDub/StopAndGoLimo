@props([
    'title' => '',
    'description' => '',
    'price' => '',
    'image' => null,
])

<div {{ $attributes->merge(['class' => 'relative rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1']) }}>
    <div class="absolute inset-0 rounded-xl bg-gold-gradient-dark"
         style="-webkit-mask:
            radial-gradient(circle at 100% 0%, black 0%, transparent 70%) top right / 50% 50% no-repeat,
            radial-gradient(circle at 0% 100%, black 0%, transparent 70%) bottom left / 50% 50% no-repeat;
         mask:
            radial-gradient(circle at 100% 0%, black 0%, transparent 70%) top right / 50% 50% no-repeat,
            radial-gradient(circle at 0% 100%, black 0%, transparent 70%) bottom left / 50% 50% no-repeat;">
    </div>
    <div class="relative bg-white rounded-xl m-[3px] p-6">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-56 object-cover rounded-lg mb-4">
        @else
            <div class="w-full h-56 bg-linen rounded-lg mb-4"></div>
        @endif
        <h3 class="font-semibold mb-2 text-olive underline decoration-olive underline-offset-4">{{ $title }}</h3>
        @if($slot->isNotEmpty())
            {{ $slot }}
        @else
            <p class="text-sm text-charcoal-light mb-3">{{ $description }}</p>
        @endif
        @if($price)
            <p class="font-bold text-charcoal">{{ $price }}</p>
        @endif
    </div>
</div>
