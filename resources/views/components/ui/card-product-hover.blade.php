@props([
    'title' => '',
    'price' => '',
    'originalPrice' => null,
    'image' => null,
    'href' => '#',
    'badge' => null,
    'badgeType' => 'best-seller',
    'swatches' => [],
    'variantCount' => null,
    'quickAdd' => false,
])

<div {{ $attributes->merge(['class' => 'group relative flex flex-col w-full']) }}>
    <a href="{{ $href }}" class="block">
        <div class="relative w-full aspect-[3/4] overflow-hidden bg-linen rounded-xl">
            @if($image)
                <img
                    src="{{ $image }}"
                    alt="{{ $title }}"
                    loading="lazy"
                    class="absolute inset-0 w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                >
            @else
                <div class="absolute inset-0 w-full h-full flex flex-col items-center justify-center text-charcoal-lighter">
                    <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm">Product image coming soon</span>
                </div>
            @endif

            @if($badge)
                <div class="absolute top-3 left-3 z-10">
                    @if($badgeType === 'new')
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-white bg-azure rounded-full shadow-sm">
                            {{ $badge }}
                        </span>
                    @elseif($badgeType === 'best-seller')
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-charcoal bg-sunburst rounded-full shadow-sm">
                            {{ $badge }}
                        </span>
                    @elseif($badgeType === 'sale')
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-white bg-error rounded-full shadow-sm">
                            {{ $badge }}
                        </span>
                    @else
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-charcoal bg-linen rounded-full shadow-sm">
                            {{ $badge }}
                        </span>
                    @endif
                </div>
            @endif

            <div class="absolute inset-0 bg-charcoal/0 group-hover:bg-charcoal/10 transition-colors duration-300"></div>

            @if($quickAdd)
                <div class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out">
                    <button
                        type="button"
                        class="w-full py-3 bg-charcoal/90 text-white text-sm font-semibold hover:bg-charcoal transition-colors backdrop-blur-sm"
                    >
                        Quick add
                    </button>
                </div>
            @endif
        </div>
    </a>

    @if(count($swatches) > 0)
        <div class="flex items-center gap-1.5 mt-3">
            @foreach(array_slice($swatches, 0, 5) as $swatch)
                <span
                    class="w-4 h-4 rounded-full border border-charcoal-lighter/50 hover:border-charcoal cursor-pointer transition-colors"
                    style="background-color: {{ $swatch }}"
                    title="{{ $swatch }}"
                ></span>
            @endforeach
            @if(count($swatches) > 5)
                <span class="text-xs text-charcoal-light">+{{ count($swatches) - 5 }}</span>
            @endif
        </div>
    @endif

    <div class="mt-3">
        <a href="{{ $href }}" class="block">
            <h3 class="text-sm font-semibold text-charcoal group-hover:text-azure transition-colors line-clamp-2">{{ $title }}</h3>
        </a>
        <div class="flex items-center gap-2 mt-1">
            <span class="text-base font-bold text-charcoal">{{ $price }}</span>
            @if($originalPrice)
                <span class="text-sm text-charcoal-light line-through">{{ $originalPrice }}</span>
            @endif
        </div>
        @if($variantCount)
            <p class="text-xs text-charcoal-light mt-1">{{ $variantCount }} options</p>
        @endif
    </div>
</div>
