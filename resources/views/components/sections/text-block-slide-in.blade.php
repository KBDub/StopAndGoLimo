@props([
    'headingPrefix' => '',
    'headingBold'   => '',
    'body'          => '',
    'bulletLabel'   => '',
    'bullets'       => [],
    'buttonText'    => '',
    'buttonHref'    => '#',
    'directions'    => '',
    'background'    => 'navy',
])

@php
    $bgStyle = $background === 'cloud'
        ? 'background: var(--cloud-light);'
        : 'background: var(--navy);';
@endphp

<section style="{{ $bgStyle }}" class="py-12 lg:py-[6.25rem] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Single block: heading + rule + body card + button + directions — slides in as one unit --}}
        <div
            class="sg-text-slide-in"
            style="opacity: 0; transform: translateX(4rem); transition: opacity 0.7s ease, transform 0.7s ease; background: var(--navy-dark); padding: 2.5rem 3rem;"
        >

            {{-- Heading: two-part branding --}}
            @if($headingPrefix || $headingBold)
                <div style="width: fit-content; margin: 0 auto 2rem; text-align: center;">
                    <h2 class="font-head" style="font-size: clamp(1.5rem, 3.5vw, 2.25rem); font-weight: 400; line-height: 1.2; letter-spacing: 0.5px; color: var(--cloud-light);">
                        @if($headingPrefix){{ $headingPrefix }} @endif<strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>
                    </h2>
                    <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 0.85rem;"></div>
                </div>
            @endif

            {{-- White body card --}}
            @if($body || !empty($bullets))
                <div style="background: var(--white); padding: 2rem 2.5rem; margin-bottom: 2rem;">

                    @if($body)
                        <p class="font-body" style="font-size: 1.0625rem; font-weight: 400; line-height: 1.6; color: var(--slate); text-align: center; margin: 0 0 {{ !empty($bullets) ? '1.5rem' : '0' }};">
                            {{ $body }}
                        </p>
                    @endif

                    @if(!empty($bullets))
                        @if($bulletLabel)
                            <p class="font-head" style="font-size: 0.8125rem; font-weight: 600; letter-spacing: 0.08em; color: var(--champagne); margin-bottom: 0.75rem; text-align: center;">
                                {{ $bulletLabel }}
                            </p>
                        @endif
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            @foreach($bullets as $bullet)
                                <li class="font-body" style="font-size: 1rem; font-weight: 600; color: var(--navy); line-height: 1.6; padding: 0.4rem 0 0.4rem 1.5rem; position: relative; {{ !$loop->last ? 'border-bottom: 1px solid var(--cloud-dark);' : '' }}">
                                    <span style="position: absolute; left: 0; top: 0.5rem; color: var(--champagne); font-size: 0.8rem;">&#9679;</span>
                                    {{ $bullet }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            @endif

            {{-- CTA button — centered --}}
            @if($buttonHref && $buttonText)
                <div style="text-align: center; margin-bottom: 1.75rem;">
                    <x-ui.button-outline-champagne :href="$buttonHref" radius="soft" size="md">
                        {{ $buttonText }}
                    </x-ui.button-outline-champagne>
                </div>
            @endif

            {{-- Directions row --}}
            @if($directions)
                <p class="font-body" style="font-size: 0.9375rem; font-weight: 400; line-height: 1.6; color: var(--cloud-light); text-align: center; margin: 0;">
                    {{ $directions }}
                </p>
            @endif

        </div>

    </div>
</section>

{{-- Intersection Observer: fires slide-in when section enters viewport --}}
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

    document.querySelectorAll('.sg-text-slide-in').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
