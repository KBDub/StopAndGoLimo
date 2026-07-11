@props([
    'id'              => 'party-bus-advantage',
    'heading'         => 'Why One Bus Beats a Caravan of Cars',
    'headingBold'     => '',
    'intro'           => null,
    'leftHeading'     => 'The Group Stays Together',
    'checklist'       => null,
    'rightHeading'    => 'Flexible Scheduling for Any Evening',
    'rightParagraphs' => null,
    'ctaHeading'      => 'Ready to book your party bus limo bus?',
    'ctaBody'         => 'Get your flat-rate quote in minutes. We serve all of Chicagoland and are available 24 hours a day.',
    'ctaHref'         => '/get-a-quote',
])

{{--
    x-sections.party-bus-advantage
    ─────────────────────────────────────────────────────────────────────────────
    Two-column group-travel advantage section on a navy background.

    Default: party bus advantage content for /party-bus-limo-bus page.
    Pass all props to adapt for any pillar page (e.g. airport-shuttle).

    Left column  — $leftHeading + $checklist (4-item checklist)
    Right column — $rightHeading + $rightParagraphs (array of paragraphs) + CTA
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id              string  Section anchor. Defaults to 'party-bus-advantage'.
      heading         string  H2 main text.
      headingBold     string  H2 bold champagne suffix. Empty = omit.
      intro           string  Paragraph below the H2. Null = use default.
      leftHeading     string  Left column H3.
      checklist       array   [{feature, detail}, ...]. Null = use defaults.
      rightHeading    string  Right column H3.
      rightParagraphs array   Array of paragraph strings. Null = use defaults.
      ctaHeading      string  CTA block H4.
      ctaBody         string  CTA block body paragraph.
      ctaHref         string  CTA button href.
--}}

@php
$resolvedIntro = $intro ?? 'Splitting a group into separate vehicles is where events fall apart. Someone gets left behind, two cars end up at different bars, and the energy dies every time the group has to regroup. A party bus limo bus solves all of it. The celebration does not pause between stops. It continues, on wheels, the entire night.';

$resolvedChecklist = $checklist ?? [
    [
        'feature' => 'No designated driver drama',
        'detail'  => 'One vehicle means no one has to stay sober. The chauffeur is the designated driver for the entire group, from first pickup to last drop-off.',
    ],
    [
        'feature' => 'Multi-stop itineraries handled for you',
        'detail'  => 'Tell us your stops. We build the route, monitor timing, and keep the group moving without the chaos of coordinating rides at midnight.',
    ],
    [
        'feature' => 'The ride becomes part of the event',
        'detail'  => 'Music, lights, drinks, and good company continue the moment the bus rolls. Every transition between venues is part of the celebration, not a break in it.',
    ],
    [
        'feature' => 'One flat rate, no per-person variables',
        'detail'  => 'A single price covers the whole group for the whole night. No surge charges, no parallel fare apps running on six phones at once.',
    ],
];

$resolvedRightParagraphs = $rightParagraphs ?? [
    'Every group runs on its own timeline. Some nights have a strict schedule. Others grow organically as the evening unfolds. Our party bus limo bus rentals are built to handle both. We offer hourly bookings, event-based flat rates, and multi-stop packages. If the night runs long, just call us.',
    'We serve groups from New Lenox, Frankfort, Mokena, Orland Park, Tinley Park, Joliet, Naperville, Aurora, and all of Chicagoland. Whether you are heading to a downtown Chicago venue, a suburban restaurant strip, or a stadium event, we know the routes and we know how to keep a group on schedule without killing the fun.',
    'We recommend booking as early as possible for weekend dates, especially during spring prom season and summer. Peak dates fill up months in advance. If you have a date in mind, call us today to confirm availability and lock in your rate.',
];
@endphp

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                {{ $heading }}@if($headingBold) <strong style="color: var(--champagne);">{{ $headingBold }}</strong>@endif
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                {{ $resolvedIntro }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- Left: checklist ─────────────────────────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    {{ $leftHeading }}
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($resolvedChecklist as $item)
                    <li style="padding: 1rem 0; border-bottom: 1px solid rgba(255,255,255,0.08); display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="color: var(--champagne); font-weight: 700; font-size: 1.1rem; flex-shrink: 0; margin-top: 0.1rem;">&#10003;</span>
                        <div>
                            <p style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">{{ $item['feature'] }}</p>
                            <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.55;">{{ $item['detail'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Right: prose + CTA ──────────────────────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    {{ $rightHeading }}
                </h3>

                @foreach($resolvedRightParagraphs as $para)
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    {{ $para }}
                </p>
                @endforeach

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-4">
                        {{ $ctaHeading }}
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        {{ $ctaBody }}
                    </p>
                    <div class="text-center">
                        <x-ui.button-champagne-gradient href="{{ $ctaHref }}" size="md" radius="soft">
                            Get a Free Instant Quote
                        </x-ui.button-champagne-gradient>
                        <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.85rem; line-height: 1.5;" class="mt-3">
                            or call <a href="tel:+17083154445" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;"></a> anytime, 24 hours a day
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
