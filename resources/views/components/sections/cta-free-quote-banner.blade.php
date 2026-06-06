@props([
    'heading'    => 'Get a Free Instant Quote',
    'subheading' => 'Book your ride in minutes. No hidden fees.',
    'buttonText' => 'Get My Free Quote',
    'buttonHref' => '/booking',
])

<section style="background: var(--navy); padding: 3rem 1.5rem; text-align: center;">
    <h2 class="font-head" style="font-size: clamp(1.5rem, 3vw, 2.25rem); font-weight: 700; color: var(--cloud-light); margin: 0 0 0.75rem;">
        {{ $heading }}
    </h2>
    <p style="font-family: var(--font-body); font-size: 1rem; color: var(--cloud); margin: 0 0 1.75rem;">
        {{ $subheading }}
    </p>
    <a href="{{ $buttonHref }}"
       style="display: inline-block; background: var(--champagne); color: var(--navy-dark); font-family: var(--font-head); font-size: 0.95rem; font-weight: 700; padding: 0.75rem 2.25rem; text-decoration: none; letter-spacing: 0.04em;">
        {{ $buttonText }}
    </a>
</section>
