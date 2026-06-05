@props([
    'heading'       => 'Travel in',
    'headingBold'   => 'Style',
    'body'          => '',
    'buttonText'    => 'About Us',
    'buttonHref'    => '/about-us',
    'image'         => '/images/sections/travel-in-style.jpg',
    'imageAlt'      => 'Guests enjoying a luxury limo ride with Stop and Go Airport Shuttle',
    'imagePosition' => 'left',
    'background'    => 'navy',
])

@php
    $bgStyle   = $background === 'cloud' ? 'background: var(--cloud-light);' : 'background: var(--navy);';
    $textColor = $background === 'cloud' ? 'color: var(--navy);'             : 'color: #ffffff;';
    $bodyColor = $background === 'cloud' ? 'color: var(--slate);'            : 'color: var(--cloud);';

    // On mobile image is always on top. On desktop, imagePosition drives column order.
    $imgOrder = $imagePosition === 'right' ? 'order-first lg:order-last' : 'order-first lg:order-first';
    $txtOrder = $imagePosition === 'right' ? 'order-last lg:order-first' : 'order-last lg:order-last';
@endphp

<section style="{{ $bgStyle }}" class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image column --}}
            <div class="{{ $imgOrder }} w-full">
                <div class="overflow-hidden w-full aspect-[4/3]" style="background: var(--navy-dark);">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    >
                </div>
            </div>

            {{-- Text column --}}
            <div class="{{ $txtOrder }} w-full">

                {{-- H2 --}}
                <h2 class="font-head mb-5 leading-tight" style="font-size: clamp(1.75rem, 4vw, 2.375rem); line-height: 1.2; {{ $textColor }}">
                    <span style="font-weight: 400;">{{ $heading }} </span><span style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</span>
                </h2>

                {{-- Body --}}
                @if($body)
                    <p class="font-body mb-7" style="font-size: 1.0625rem; line-height: 1.7; {{ $bodyColor }}">
                        {{ $body }}
                    </p>
                @endif

                {{-- CTA --}}
                @if($buttonHref && $buttonText)
                    <div class="mb-6">
                        @if($background === 'cloud')
                            <x-ui.button-champagne-solid href="{{ $buttonHref }}">
                                {{ $buttonText }}
                            </x-ui.button-champagne-solid>
                        @else
                            <x-ui.button-outline-champagne href="{{ $buttonHref }}">
                                {{ $buttonText }}
                            </x-ui.button-outline-champagne>
                        @endif
                    </div>
                @endif

                {{-- Decorative rule --}}
                <x-ui.banner-thin-champagne />

            </div>

        </div>
    </div>
</section>
