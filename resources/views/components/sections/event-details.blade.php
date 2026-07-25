@props([
    'id'              => 'event-details',
    'heading'         => 'Why Groups Choose a Party Bus',
    'intro'           => 'A party bus keeps the whole group together, handles the driving, and turns every mile between stops into part of the celebration.',
    'leftHeading'     => 'Four Reasons It Works Better Than Driving',
    'checklist'       => [],
    'rightHeading'    => 'Planning Your Night',
    'rightParagraphs' => [],
    'ctaHeading'      => 'Ready to book your ride?',
    'ctaBody'         => 'Get a flat-rate quote in minutes. Available 24 hours a day, serving all of Chicagoland.',
])

{{--
    x-sections.event-details
    ─────────────────────────────────────────────────────────────────────────────
    Prop-driven replacement for x-sections.aurora-night-out.
    Navy background. H2 + intro above. Two-column grid below.

    Left column  — H3 (leftHeading) + checklist [{feature, detail}, ...]
                   Each item: champagne checkmark, bold feature title (H4), detail body.
    Right column — H3 (rightHeading) + paragraphs array + CTA block.

    H2   — $heading (bold, white)
    H3   — $leftHeading / $rightHeading (champagne)
    H4   — per checklist item $feature (white, small)
    CTA  — H4 ctaHeading + ctaBody + Call Us + Get a Free Quote buttons

    Props
      id              string   Section anchor. Defaults to 'event-details'.
      heading         string   H2 text. Full sentence, no HTML tags.
      intro           string   Paragraph below H2.
      leftHeading     string   H3 for the checklist column.
      checklist       array    [{feature, detail}, ...]. Falls back to 4 generic items.
      rightHeading    string   H3 for the prose column.
      rightParagraphs array    [string, ...]. Falls back to 2 generic paragraphs.
      ctaHeading      string   H4 inside the CTA box.
      ctaBody         string   Small paragraph inside the CTA box.
--}}

@php
$resolvedChecklist = count($checklist) ? $checklist : [
    ['feature' => 'All-in-one convenience',   'detail' => 'No splitting up the group, no coordinating pickups, no one stuck waiting for a ride that never shows. One bus, one pickup, everyone together all night.'],
    ['feature' => 'Nobody has to drive',       'detail' => 'Our professional chauffeurs handle every mile. Your group focuses on having fun while we manage the route, the timing, and the drop-offs.'],
    ['feature' => 'The party starts on board', 'detail' => 'LED lighting, premium sound, leather seating, and a beverage setup mean the energy does not wait until you reach the venue.'],
    ['feature' => 'Fits any group and occasion','detail' => 'Birthdays, bachelorette parties, sporting events, corporate outings — our fleet adapts to every size group and every type of event.'],
];

$resolvedParagraphs = count($rightParagraphs) ? $rightParagraphs : [
    'Our chauffeurs know the routes, the timing, and the logistics that make a night out work. A typical outing might start with dinner or a pre-game stop, followed by the main event, and a late stop wherever your group decides to land.',
    'Multi-city routes and multi-stop itineraries are something we handle every weekend. The more advance notice you give us, the better your options. Popular dates fill fast — if you have a date in mind, call us to check availability.',
];
@endphp

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        {{-- Section header --}}
        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                {{ $heading }}
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                {{ $intro }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- Left: checklist --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    {{ $leftHeading }}
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($resolvedChecklist as $item)
                    <li style="padding: 1rem 0; border-bottom: 1px solid rgba(255,255,255,0.08); display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="color: var(--champagne); font-weight: 700; font-size: 1.1rem; flex-shrink: 0; margin-top: 0.15rem;">&#10003;</span>
                        <div>
                            <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 0.95rem; margin-bottom: 0.25rem;">
                                {{ $item['feature'] }}
                            </h4>
                            <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.55;">
                                {{ $item['detail'] }}
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Right: prose + CTA --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    {{ $rightHeading }}
                </h3>

                @foreach($resolvedParagraphs as $para)
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    {{ $para }}
                </p>
                @endforeach

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-3">
                        {{ $ctaHeading }}
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        {{ $ctaBody }}
                    </p>
                    <div class="flex flex-wrap gap-4 justify-center">
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
    </div>
</section>
