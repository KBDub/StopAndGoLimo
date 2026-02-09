@props([
    'title' => '',
    'description' => '',
    'price' => '',
    'image' => null,
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1 relative overflow-hidden']) }}>
    <div class="absolute top-0 right-0 w-16 h-16 bg-gold-gradient-dark rounded-bl-2xl"></div>
    <div class="absolute bottom-0 left-0 w-14 h-14 bg-gold-gradient-dark rounded-tr-2xl"></div>
    <div class="relative z-10 p-6">
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
