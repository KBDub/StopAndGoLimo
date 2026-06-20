@props([
    'heading'     => 'Travel in',
    'headingBold' => 'Style',
    'subtitle'    => '',
    'body'        => '',
    'bodyHtml'    => '',
    'note'        => '',
    'buttonText'  => 'About Us',
    'buttonHref'  => '/about-us',
    'image'       => '/images/sections/travel-in-style.jpg',
    'imageAlt'    => 'Guests enjoying a luxury limo ride with Stop and Go Airport Shuttle',
    'imagePosition' => 'left',
    'inverted'    => false,
    'slideIn'     => '',
])

@php
    // inverted=false → cloud-light bg, navy text (default / light variant)
    // inverted=true  → navy bg, white text (dark variant)
    $bgStyle   = $inverted ? 'background: var(--navy);'               : 'background: var(--cloud-light);';
    $textColor = $inverted ? 'color: var(--white);'                   : 'color: var(--navy);';
    $bodyColor = $inverted ? 'color: var(--cloud);'                   : 'color: var(--slate);';
    $panelBg   = $inverted ? 'background: var(--navy); padding: 2.5rem;' : '';

    // imagePosition='left'  → image on left, text on right (default)
    // imagePosition='right' → image on right, text on left
    $imgOrder = $imagePosition === 'left' ? 'order-first lg:order-first' : 'order-first lg:order-last';
    $txtOrder = $imagePosition === 'left' ? 'order-last lg:order-last'   : 'order-last lg:order-first';

    // Slide-in variant — mirrors the sg-slide-in pattern from image-slide-in.blade.php
    $doSlide       = $slideIn === 'left';
    $sectionExtra  = $doSlide ? ' overflow-hidden' : '';
    $imgSlideClass = $doSlide ? ' sg-tis-slide-in' : '';
    $imgSlideStyle = $doSlide ? 'opacity: 0; transform: translateX(-4rem); transition: opacity 0.7s ease, transform 0.7s ease;' : '';
    $txtSlideClass = $doSlide ? ' sg-tis-slide-in' : '';
    $txtSlideStyle = $doSlide ? 'opacity: 0; transform: translateX(-4rem); transition: opacity 0.7s ease 150ms, transform 0.7s ease 150ms;' : '';
@endphp

<section id="travel-in-style" style="{{ $bgStyle }}; scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]{{ $sectionExtra }}">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image column --}}
            <div class="{{ $imgOrder }} w-full{{ $imgSlideClass }}" style="{{ $imgSlideStyle }}">
                <div class="overflow-hidden w-full aspect-[4/3]" style="background: var(--navy-dark); box-shadow: var(--shadow-card);">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    >
                </div>
            </div>

            {{-- Text column --}}
            <div class="{{ $txtOrder }} w-full{{ $txtSlideClass }}" style="{{ $panelBg }}{{ $txtSlideStyle ? ' ' . $txtSlideStyle : '' }}">

                {{-- H2 --}}
                <h2 class="font-head mb-5" style="font-size: var(--font-size-h2); line-height: 1.2; letter-spacing: var(--letter-spacing-h2); {{ $textColor }}">
                    <span style="font-weight: 400;">{{ $heading }} </span><span style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</span>
                </h2>

                {{-- Optional subtitle --}}
                @if($subtitle)
                    <p class="font-head mb-4" style="font-size: 1.25rem; font-weight: 600; line-height: 1.4; {{ $textColor }}">
                        {{ $subtitle }}
                    </p>
                @endif

                {{-- Body --}}
                @if($bodyHtml)
                    <p class="font-body mb-5" style="font-size: 1.25rem; line-height: 1.5; {{ $bodyColor }}">
                        {!! $bodyHtml !!}
                    </p>
                @elseif($body)
                    <p class="font-body mb-5" style="font-size: 1.25rem; line-height: 1.5; {{ $bodyColor }}">
                        {{ $body }}
                    </p>
                @endif

                {{-- Optional note --}}
                @if($note)
                    <p class="font-body mb-7" style="font-size: 0.9375rem; font-weight: 600; {{ $textColor }}">
                        {{ $note }}
                    </p>
                @endif

                {{-- CTA --}}
                @if($buttonHref && $buttonText)
                    <div class="mb-6">
                        @if(!$inverted)
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

@if($doSlide)
<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateX(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.sg-tis-slide-in').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
@endif
