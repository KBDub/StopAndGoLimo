@props([
    'title' => '',
    'description' => '',
    'price' => '',
    'image' => null,
])

<div {{ $attributes->merge(['class' => 'p-[3px] rounded-xl bg-gold-gradient-dark shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1']) }}>
    <div class="bg-white rounded-[10px] p-6">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-40 object-cover rounded-lg mb-4">
        @else
            <div class="w-full h-40 bg-linen rounded-lg mb-4"></div>
        @endif
        <h3 class="font-semibold mb-2 text-olive">{{ $title }}</h3>
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
