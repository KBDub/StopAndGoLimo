@props([
    'title' => '',
    'description' => '',
    'price' => '',
    'image' => null,
    'href' => null,
])

<div {{ $attributes->merge(['class' => 'relative shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1 h-full']) }}>
    <div class="absolute inset-0 bg-gold-gradient-dark"
         style="-webkit-mask: radial-gradient(circle at 100% 0%, black 0%, transparent 70%) top right / 50% 50% no-repeat;
                mask: radial-gradient(circle at 100% 0%, black 0%, transparent 70%) top right / 50% 50% no-repeat;">
    </div>
    <div class="absolute inset-0 bg-gold-gradient-dark"
         style="-webkit-mask: radial-gradient(circle at 0% 100%, black 0%, transparent 70%) bottom left / 50% 50% no-repeat;
                mask: radial-gradient(circle at 0% 100%, black 0%, transparent 70%) bottom left / 50% 50% no-repeat;">
    </div>
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
