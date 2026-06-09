@props([
    'headingBold' => 'Comfort & Style',
    'heading'     => 'in Every Ride',
    'body'        => 'We offer a diverse selection of limousines to suit your needs. Choose from our standard limos or stretch limousines, all maintained to the highest standards to ensure a comfortable and stylish ride. Whether you\'re planning a celebration or need reliable airport transportation, our fleet is ready to accommodate you.',
])

<section style="background: var(--navy);" class="py-10 lg:py-16">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--cloud-light); line-height: 1.2; letter-spacing: 0.5px; margin-bottom: 1rem;">
            <strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong> {{ $heading }}
        </h2>

        {{-- Champagne rule --}}
        <div style="height: 3px; background: var(--champagne); width: 14rem; margin-bottom: 1.75rem;"></div>

        {{-- Body --}}
        <p class="font-body" style="font-size: 1.25rem; font-weight: 400; color: var(--cloud-light); line-height: 1.5; max-width: 56rem;">
            {{ $body }}
        </p>

    </div>
</section>
