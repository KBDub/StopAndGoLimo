@props([
    'preHeading'          => 'New Lenox &nbsp;&middot;&nbsp; Naperville &nbsp;&middot;&nbsp; Chicago',
    'heading'             => 'Premium Airport Shuttle',
    'headingAccent'       => '& Limousine Service',
    'description'         => 'Professional airport transfers, corporate travel, and special event transportation. Serving O\'Hare, Midway, and all of Illinois since 2009.',
    'primaryButtonText'   => 'Book a Ride',
    'primaryButtonHref'   => '/booking',
    'secondaryButtonText' => 'Get a Free Quote',
    'secondaryButtonHref' => '/contact',
    'image'               => '/images/stopngo-banner.jpg',
    'compactButtons'      => false,
])

@php
    $primaryIsModal   = $primaryButtonHref  === '/contact' || $primaryButtonHref  === '/booking';
    $secondaryIsModal = $secondaryButtonHref === '/contact' || $secondaryButtonHref === '/booking';
    $btnClass         = $compactButtons ? '!px-5 !py-2.5 !text-sm' : '';
@endphp

<section class="relative min-h-[32rem] md:min-h-[36rem] lg:min-h-[40rem] flex items-center py-10 overflow-hidden isolate">
    <div class="absolute inset-0">
        <img
            src="{{ $image }}"
            alt="Stop & Go Limo airport shuttle service"
            class="w-full h-full object-cover"
            style="object-position: center 60%;"
        >
        <div class="absolute inset-0 bg-navy-dark/70"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
        <div class="max-w-2xl">
            <h5 class="text-champagne font-head font-semibold tracking-wide mb-4">
                {!! $preHeading !!}
            </h5>
            <div class="inline-block mb-6">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-2 font-head">
                    {{ $heading }}
                    <span class="block text-champagne">{{ $headingAccent }}</span>
                </h1>
                <div class="h-1 bg-champagne"></div>
            </div>
            <p class="text-lg md:text-2xl text-cloud mb-8 max-w-3xl">
                {{ $description }}
            </p>
            <div class="{{ $compactButtons ? 'flex flex-row gap-3' : 'flex flex-col sm:flex-row gap-4' }}">
                @if($primaryIsModal)
                    <x-ui.button-champagne-solid
                        onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                        class="{{ $btnClass }}"
                    >{{ $primaryButtonText }}</x-ui.button-champagne-solid>
                @else
                    <x-ui.button-champagne-solid
                        href="{{ $primaryButtonHref }}"
                        class="{{ $btnClass }}"
                    >{{ $primaryButtonText }}</x-ui.button-champagne-solid>
                @endif
                @if($secondaryIsModal)
                    <x-ui.button-outline-champagne
                        onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                        class="{{ $btnClass }}"
                    >{{ $secondaryButtonText }}</x-ui.button-outline-champagne>
                @else
                    <x-ui.button-outline-champagne
                        href="{{ $secondaryButtonHref }}"
                        class="{{ $btnClass }}"
                    >{{ $secondaryButtonText }}</x-ui.button-outline-champagne>
                @endif
            </div>
        </div>
    </div>
</section>
