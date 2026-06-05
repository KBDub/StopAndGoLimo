@props([
    'heading'       => 'Premium Airport',
    'headingBold'   => 'Shuttle Service',
    'subtitle'      => "Serving O'Hare, Midway, and Chicagoland since 2009",
    'description'   => '',
    'buttonText'    => 'Book a Ride',
    'buttonHref'    => '/contact',
    'image'         => '/images/heroes/hero-home.jpg',
    'imagePosition' => 'center center',
])

@php
    $isModal = $buttonHref === '/contact' || $buttonHref === '/booking';
@endphp

<section class="relative flex items-center justify-center min-h-[28rem] sm:min-h-[36rem] lg:min-h-[560px] py-16 overflow-hidden isolate">

    {{-- Background image + overlay --}}
    <div class="absolute inset-0">
        <img
            src="{{ $image }}"
            alt="Stop &amp; Go Limo airport shuttle service"
            class="w-full h-full object-cover"
            style="object-position: {{ $imagePosition }};"
            loading="eager"
        >
        <div class="absolute inset-0" style="background: var(--navy-dark); opacity: 0.42;"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 w-full max-w-4xl mx-auto px-6 text-center">

        {{-- H1 --}}
        <h1 class="font-head text-white leading-tight mb-4" style="font-size: clamp(2rem, 5vw, 3.5rem); line-height: 1.15;">
            <span class="block font-normal">{{ $heading }}</span>
            @if($headingBold)
                <span class="block font-bold">{{ $headingBold }}</span>
            @endif
        </h1>

        {{-- Subtitle --}}
        @if($subtitle)
            <p class="font-head text-white mb-5" style="font-size: clamp(0.95rem, 2.2vw, 1.2rem); font-weight: 400; opacity: 0.9; letter-spacing: 0.01em;">
                {{ $subtitle }}
            </p>
        @endif

        {{-- Optional body paragraph --}}
        @if($description)
            <p class="font-body text-white mx-auto mb-7" style="font-size: 1.0625rem; line-height: 1.7; max-width: 680px; opacity: 0.85;">
                {{ $description }}
            </p>
        @endif

        {{-- Single CTA --}}
        @if($isModal)
            <x-ui.button-outline-light
                onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
            >{{ $buttonText }}</x-ui.button-outline-light>
        @else
            <x-ui.button-outline-light href="{{ $buttonHref }}">
                {{ $buttonText }}
            </x-ui.button-outline-light>
        @endif

    </div>

</section>
