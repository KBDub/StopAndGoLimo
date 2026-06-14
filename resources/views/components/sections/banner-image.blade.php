@props([
    'headingPrefix'       => '',
    'headingBold'         => '',
    'body'                => '',
    'image'               => '',
    'imageAlt'            => '',
    'imageAspect'         => '16/10',
    'imageObjectPosition' => 'center',
    'imagePosition'       => 'left',
    'inverted'            => false,
])

@php
    $bgStyle      = $inverted ? 'background: var(--navy);'        : 'background: var(--cloud-light);';
    $headingColor = $inverted ? 'color: var(--cloud-light);'      : 'color: var(--navy);';
    $boldColor    = $inverted ? 'color: var(--champagne);'        : 'color: var(--navy);';
    $bodyColor    = $inverted ? 'color: var(--cloud-light);'      : 'color: var(--slate);';
    $ruleColor    = 'background: var(--champagne);';
    $imgOrder     = $imagePosition === 'left' ? 'order: 0;' : 'order: 1;';
    $textOrder    = $imagePosition === 'left' ? 'order: 1;' : 'order: 0;';
@endphp

<section id="banner-image" style="{{ $bgStyle }} scroll-margin-top: 80px;" class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image column --}}
            <div class="w-full" style="{{ $imgOrder }}">
                <div class="w-full overflow-hidden" style="aspect-ratio: {{ $imageAspect }};">
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
            <div class="w-full" style="{{ $textOrder }}">

                {{-- Heading + champagne rule --}}
                @if($headingPrefix || $headingBold)
                    <div style="width: fit-content; margin-bottom: 1.75rem;">
                        <h2 class="font-head" style="font-size: clamp(1.5rem, 3vw, 2.25rem); font-weight: 400; line-height: 1.2; letter-spacing: 0.25px; {{ $headingColor }}">
                            @if($headingPrefix)<span>{{ $headingPrefix }} </span>@endif<strong style="font-weight: 700; {{ $boldColor }}">{{ $headingBold }}</strong>
                        </h2>
                        <div style="height: 3px; {{ $ruleColor }} width: 116%; margin-top: 0.85rem;"></div>
                    </div>
                @endif

                {{-- Body --}}
                @if($body)
                    <p class="font-body" style="font-size: 1.0625rem; font-weight: 400; line-height: 1.65; {{ $bodyColor }}">
                        {{ $body }}
                    </p>
                @endif

            </div>

        </div>

    </div>
</section>
