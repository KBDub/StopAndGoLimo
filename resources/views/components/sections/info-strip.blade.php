@props([
    'headingPrefix' => '',
    'headingBold'   => 'Comfort & Style',
    'heading'       => 'in Every Ride',
    'body'          => 'We offer a diverse selection of limousines to suit your needs. Choose from our standard limos or stretch limousines, all maintained to the highest standards to ensure a comfortable and stylish ride. Whether you\'re planning a celebration or need reliable airport transportation, our fleet is ready to accommodate you.',
])

<section id="info-strip" style="background: var(--navy); scroll-margin-top: 80px;" class="py-10 lg:py-16">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + champagne rule (canonical width: fit-content wrapper) --}}
        <div style="width: fit-content; margin-bottom: 2rem;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--cloud-light); line-height: 1.2; letter-spacing: 0.5px;">
                @if($headingPrefix){{ $headingPrefix }} @endif<strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>@if($heading) {{ $heading }}@endif
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Body --}}
        <div class="w-full max-w-7xl mx-auto">
            <p class="font-body text-left" style="font-size: 1.25rem; font-weight: 400; color: var(--cloud-light); line-height: 1.5;">
                {{ $body }}
            </p>
        </div>

    </div>
</section>
