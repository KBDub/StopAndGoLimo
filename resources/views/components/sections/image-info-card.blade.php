@props([
    'id'                  => 'image-info-card',
    'heading'             => 'Travel with Confidence',
    'headingBold'         => 'and Sophistication',
    'headingTail'         => '',
    'body'                => '',
    'image'               => '/images/sections/travel-in-style.jpg',
    'imageAlt'            => 'Luxury transportation service — Stop and Go Airport Shuttle',
    'imageAspect'         => '4/3',
    'imageObjectPosition' => 'center',
    'imagePosition'       => 'right',
    'inverted'            => false,
])

@php
    $bgStyle   = $inverted ? 'background: var(--navy);'        : 'background: var(--white);';
    $headColor = $inverted ? 'color: var(--white);'            : 'color: var(--navy);';
    $bodyColor = $inverted ? 'color: var(--cloud);'            : 'color: var(--slate);';
    $barColor  = 'background: var(--champagne);';

    $imgOrder = $imagePosition === 'left' ? 'order-first lg:order-first' : 'order-first lg:order-last';
    $txtOrder = $imagePosition === 'left' ? 'order-last  lg:order-last'  : 'order-last  lg:order-first';
@endphp

<section id="{{ $id }}" style="{{ $bgStyle }} scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- H2 — full-width row, centered above the two columns --}}
        <div style="text-align: center; margin-bottom: 2rem;">
            <h2 class="font-head" style="font-size: var(--font-size-h2); font-weight: 400; line-height: 1.2; letter-spacing: var(--letter-spacing-h2); {{ $headColor }}">
                @if($heading)<span>{{ $heading }}</span> @endif<strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>@if($headingTail) <span>{{ $headingTail }}</span>@endif
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image column --}}
            <div class="w-full {{ $imgOrder }}">
                <div class="w-full overflow-hidden" style="aspect-ratio: {{ $imageAspect }}; box-shadow: var(--shadow-card);">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        style="object-position: {{ $imageObjectPosition }};"
                        loading="lazy"
                    >
                </div>
            </div>

            {{-- Text column --}}
            <div class="w-full {{ $txtOrder }}">

                {{-- Body --}}
                @if($body)
                    <p class="font-body" style="font-size: 1.25rem; font-weight: 400; line-height: 1.5; {{ $bodyColor }}">
                        {{ $body }}
                    </p>
                @endif

            </div>

        </div>
    </div>
</section>
