@props([
    'heading'    => 'Get a Free Instant Quote',
    'subheading' => 'Book your ride in minutes. No hidden fees.',
    'buttonText' => 'Get My Free Quote',
    'buttonHref' => '/booking',
])

{{-- CTA strip: compact padding is intentional — this is an action strip, not a standard content section --}}
<section style="background: var(--navy); padding: 3rem 1.5rem; text-align: center;">

    <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 700; color: var(--cloud-light); line-height: 1.2; letter-spacing: 0.5px; margin: 0 0 0.75rem;">
        {{ $heading }}
    </h2>

    <p class="font-body" style="font-size: 1.25rem; line-height: 1.5; color: var(--cloud); margin: 0 0 1.75rem;">
        {{ $subheading }}
    </p>

    <x-ui.button-champagne-solid href="{{ $buttonHref }}" radius="square">
        {{ $buttonText }}
    </x-ui.button-champagne-solid>

</section>
