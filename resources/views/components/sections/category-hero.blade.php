@props([
    'heading'         => 'Elevate Your Travel Experience',
    'headingBold'     => 'With Luxury and Comfort',
    'headingTwoLines' => true,
    'subtitle'        => 'Discover the joy of seamless journeys',
    'subtitleIn'      => '',
    'description'     => '',
    'buttonText'      => 'Book a Ride',
    'buttonHref'      => '/contact',
    'buttonRadius'    => 'soft',
    'image'           => '/images/heroes/hero-home.jpg',
    'imagePosition'   => 'center center',
])

@php
    $isModal = $buttonHref === '/contact' || $buttonHref === '/booking';
@endphp

<section id="category-hero" class="relative flex items-center justify-center overflow-hidden isolate" style="min-height: 100svh; scroll-margin-top: 80px;">

    {{-- Background image + overlay --}}
    <div class="absolute inset-0">
        <img
            src="{{ $image }}"
            alt="Stop &amp; Go Limo airport shuttle service"
            class="w-full h-full object-cover"
            style="object-position: {{ $imagePosition }};"
            loading="eager"
        >
        <div class="absolute inset-0" style="background: var(--navy-dark); opacity: 0.2;"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 text-center">

        {{-- H1 --}}
        <h1 class="font-head text-white mb-4" style="font-size: clamp(2rem, 6vw, 3.5rem); line-height: 1.2; letter-spacing: -1px;">
            @if($headingTwoLines)
                <span class="block font-normal">{{ $heading }}</span>
                @if($headingBold)
                    <span class="block font-bold">{{ $headingBold }}</span>
                @endif
            @else
                <span class="font-normal">{{ $heading }}</span>
                @if($headingBold)
                    <strong class="font-bold"> {{ $headingBold }}</strong>
                @endif
            @endif
        </h1>

        {{-- Subtitle (Lead) --}}
        @if($subtitle)
            <p class="font-head text-white mb-5" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; line-height: 1.2; letter-spacing: 0.5px; opacity: 0.9; text-align: right;">
                <span class="block">{{ $subtitle }}</span>
                @if($subtitleIn)
                    <span class="block" style="font-weight: 700;">{{ $subtitleIn }}</span>
                @endif
            </p>
        @endif

        {{-- Optional body paragraph --}}
        @if($description)
            <p class="font-body font-bold text-white max-w-5xl mx-auto mb-7" style="font-size: 1.25rem; line-height: 1.5; letter-spacing: -0.4px; text-align: center; text-shadow: var(--text-shadow-subtle); opacity: 0.95;">
                {{ $description }}
            </p>
        @endif

        {{-- Single CTA --}}
        @if($isModal)
            <x-ui.button-outline-light
                radius="{{ $buttonRadius }}"
                onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
            >{{ $buttonText }}</x-ui.button-outline-light>
        @else
            <x-ui.button-outline-light href="{{ $buttonHref }}" radius="{{ $buttonRadius }}">
                {{ $buttonText }}
            </x-ui.button-outline-light>
        @endif

    </div>

</section>
