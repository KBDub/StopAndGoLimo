@props([
    'imageLeft' => null,
    'imageRight' => null,
    'altLeft' => '',
    'altRight' => '',
    'title' => null,
    'subtitle' => null,
    'ctaText' => null,
    'ctaHref' => '#',
    'height' => '500px',
    'splitRatio' => '1/2',
])

@php
    $leftClass = match($splitRatio) {
        '3/5' => 'w-full md:w-[60%]',
        '2/5' => 'w-full md:w-[40%]',
        '2/3' => 'w-full md:w-[66.666%]',
        '1/3' => 'w-full md:w-[33.333%]',
        default => 'w-full md:w-1/2',
    };
    $rightClass = match($splitRatio) {
        '3/5' => 'w-full md:w-[40%]',
        '2/5' => 'w-full md:w-[60%]',
        '2/3' => 'w-full md:w-[33.333%]',
        '1/3' => 'w-full md:w-[66.666%]',
        default => 'w-full md:w-1/2',
    };
@endphp

<section {{ $attributes->merge(['class' => 'w-full overflow-hidden']) }}>
    <div class="flex flex-col md:flex-row w-full" style="height: auto;">
        <div class="{{ $leftClass }} relative" style="min-height: {{ $height }};">
            @if($imageLeft)
                <img
                    src="{{ $imageLeft }}"
                    alt="{{ $altLeft }}"
                    class="absolute inset-0 w-full h-full object-cover object-center"
                    loading="lazy"
                >
            @else
                <div class="absolute inset-0 w-full h-full bg-charcoal"></div>
            @endif

            @if($title || $subtitle || $ctaText)
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal-dark/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 z-10">
                    @if($title)
                        <h3 class="text-lg md:text-xl font-bold text-white mb-1">{{ $title }}</h3>
                    @endif
                    @if($subtitle)
                        <p class="text-sm text-white/80 mb-3 max-w-md">{{ $subtitle }}</p>
                    @endif
                    @if($ctaText)
                        <a href="{{ $ctaHref }}" class="inline-block text-sm font-semibold text-white underline underline-offset-4 hover:text-sunburst transition-colors">{{ $ctaText }}</a>
                    @endif
                </div>
            @endif
        </div>

        <div class="{{ $rightClass }} relative" style="min-height: {{ $height }};">
            @if($imageRight)
                <img
                    src="{{ $imageRight }}"
                    alt="{{ $altRight }}"
                    class="absolute inset-0 w-full h-full object-cover object-center"
                    loading="lazy"
                >
            @else
                <div class="absolute inset-0 w-full h-full bg-charcoal-light"></div>
            @endif
        </div>
    </div>
</section>
