@props([
    'title' => '',
    'description' => '',
    'price' => '',
    'image' => null,
    'href' => null,
])

<div {{ $attributes->merge(['class' => 'relative shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1 h-full']) }}>
    <div class="absolute top-0 right-0 w-1/2 h-1/2 pointer-events-none" style="border-top: 3px solid #FFC20E; border-right: 3px solid #FFC20E;"></div>
    <div class="absolute bottom-0 left-0 w-1/2 h-1/2 pointer-events-none" style="border-bottom: 3px solid #FFC20E; border-left: 3px solid #FFC20E;"></div>
    <div class="relative bg-white m-[3px] p-6 flex flex-col h-full">
        @if($href)
            <a href="{{ $href }}" class="block overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out mb-4">
                @if($image)
                    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-56 object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out">
                @else
                    <div class="w-full h-56 bg-linen"></div>
                @endif
            </a>
        @else
            @if($image)
                <div class="overflow-hidden shadow-gold mb-4">
                    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-56 object-cover">
                </div>
            @else
                <div class="w-full h-56 bg-linen mb-4"></div>
            @endif
        @endif

        <h3 class="font-semibold mb-2 text-center">
            @if($href)
                <a href="{{ $href }}" class="text-olive hover:text-azure transition-colors underline decoration-olive underline-offset-4">{{ $title }}</a>
            @else
                <span class="text-olive underline decoration-olive underline-offset-4">{{ $title }}</span>
            @endif
        </h3>

        <div class="flex-1">
            @if($slot->isNotEmpty())
                {{ $slot }}
            @else
                <p class="text-sm text-charcoal-light mb-3">{{ $description }}</p>
            @endif
        </div>

        @if($price)
            <p class="font-bold text-charcoal mt-2">{{ $price }}</p>
        @endif
    </div>
</div>
