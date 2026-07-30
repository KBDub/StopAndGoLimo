@props([
    'id'          => 'travel-in-style-cta',
    'heading'     => 'From Your Driveway',
    'headingBold' => 'to Your Destination',
    'subtitle'    => 'Pickup from every corner of Chicagoland',
    'body'        => '',
    'note'        => '',
    'image'       => '/images/sections/travel-in-style.jpg',
    'imageAlt'    => 'Chauffeured transportation by Stop & Go Airport Shuttle Service, Inc.',
])

{{--
    x-sections.travel-in-style-cta
    ─────────────────────────────────────────────────────────────────────────────
    Cloud-light background. Full-width centered H2 + champagne underbar row above
    a two-column grid. Left column: image. Right column: H3 (subtitle), body
    paragraph, H4 (note), and two standard CTAs (Call Us + Get a Free Quote).

    Modelled after x-sections.travel-in-style but:
      • H2 is full-width centered above both columns (not inside the text column)
      • CTA is always the standard Call Us + Get a Free Quote pair
      • note renders as H4 below the body paragraph

    H2  — $heading (regular) + $headingBold (bold champagne)  [full-width row]
    H3  — $subtitle (right column)
    H4  — $note (right column, if present)
    CTAs — Call Us (tel) + Get a Free Quote (modal)

    Props
      id          string   Section anchor. Defaults to 'travel-in-style-cta'.
      heading     string   H2 regular portion.
      headingBold string   H2 bold champagne portion.
      subtitle    string   H3 in right column. Optional.
      body        string   Body paragraph in right column. Optional.
      note        string   H4 advisory note below body. Optional.
      image       string   Left column image src.
      imageAlt    string   Left column image alt text.
--}}

<section id="{{ $id }}" style="background: var(--cloud-light); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Full-width H2 row --}}
        <div class="flex justify-center mb-10 lg:mb-14">
            <div style="width: fit-content;">
                <h2 class="font-head" style="font-size: var(--font-size-h2); line-height: 1.2; letter-spacing: var(--letter-spacing-h2); color: var(--navy); font-weight: 400;">
                    {{ $heading }} <strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; max-width: calc(100vw - 3rem); margin-top: 0.85rem;"></div>
            </div>
        </div>

        {{-- Two-column grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Left: image --}}
            <div class="w-full order-first lg:order-first">
                <div class="overflow-hidden w-full aspect-[4/3]" style="background: var(--navy-dark); box-shadow: var(--shadow-card);">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        width="800" height="600"
                        loading="lazy"
                    >
                </div>
            </div>

            {{-- Right: H3, body, H4 (note), CTAs --}}
            <div class="w-full order-last lg:order-last">

                @if($subtitle)
                <h3 class="font-head mb-4" style="font-size: var(--font-size-h3); font-weight: 600; line-height: 1.3; letter-spacing: 0.01em; color: var(--navy);">
                    {{ $subtitle }}
                </h3>
                @endif

                @if($body)
                <p class="font-body mb-6" style="font-size: 1.15rem; line-height: 1.75; color: var(--slate);">
                    {{ $body }}
                </p>
                @endif

                @if($note)
                <h4 class="font-head mb-8" style="font-size: 1rem; font-weight: 700; color: var(--navy); letter-spacing: 0.02em; line-height: 1.4;">
                    {{ $note }}
                </h4>
                @endif

                <div class="flex flex-wrap gap-4">
                    <x-ui.button-champagne-gradient href="tel:+17083154445" size="md" radius="soft">
                        Call Us
                    </x-ui.button-champagne-gradient>
                    <x-ui.button-navy-gold
                        size="md"
                        radius="soft"
                        onclick="window.dispatchEvent(new CustomEvent('open-modal-quote'))"
                    >Get a Free Quote</x-ui.button-navy-gold>
                </div>

            </div>

        </div>
    </div>
</section>
