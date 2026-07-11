@props([
    'id'         => 'party-bus-occasions',
    'heading'    => 'One Bus for Every Type of Celebration',
    'headingBold'=> '',
    'subheading' => 'Popular Occasions We Cover',
    'intro'      => null,
    'occasions'  => null,
    'ctaHref'    => '/get-a-quote',
])

{{--
    x-sections.party-bus-occasions
    ─────────────────────────────────────────────────────────────────────────────
    Six-card occasion grid on a white background.
    Matches the limo-services-grid visual pattern: champagne left border,
    H4 occasion name, hyper-local Chicagoland copy in slate.

    Default: party bus occasion types for the /party-bus-limo-bus page.
    Pass all props to adapt for any service pillar page.

    H2  — $heading + optional $headingBold (champagne bold, shown when truthy)
      H3 — $subheading (optional, shown when truthy)
      6 cards: champagne left border, H4, body
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id          string  Section id. Defaults to 'party-bus-occasions'.
      heading     string  H2 text. Pass full heading when headingBold is empty.
      headingBold string  H2 bold champagne suffix. Pass empty string to omit.
      subheading  string  Optional H3 above the card grid.
      intro       string  Paragraph below the H2. Null = use default.
      occasions   array   [{occasion, copy}, ...]. Null = use defaults.
      ctaHref     string  CTA button href. Default /get-a-quote.
--}}

@php
$resolvedIntro = $intro ?? 'Stop & Go Airport Shuttle Service, Inc. party bus limo buses are booked for all kinds of occasions across Chicagoland every weekend. Here is a look at the events we cover most often, and what makes each one a great fit for group transportation.';

$resolvedOccasions = $occasions ?? [
    [
        'occasion' => 'Birthday Celebration',
        'copy'     => 'Whether it is a milestone 21st, a surprise 30th, or a big 50th, a party bus turns a regular night out into an event. We route groups from New Lenox, Frankfort, and the south suburbs into Chicago or to local bars and restaurants. Multi-stop birthday nights are our specialty.',
    ],
    [
        'occasion' => 'Bachelorette or Bachelor Party',
        'copy'     => 'Keep the entire crew together from the first stop to the last. We handle multi-stop routes through River North, Wicker Park, the West Loop, or wherever the night takes you. No caravan stress, no one stranded waiting for a pickup at midnight.',
    ],
    [
        'occasion' => 'Prom Night',
        'copy'     => 'We serve prom groups from Lincoln-Way, Joliet, Frankfort, and the south suburbs every spring. Our chauffeurs are punctual, professional, and focused on safety from the first pickup through the final drop-off. Parents appreciate that students arrive and leave as one group.',
    ],
    [
        'occasion' => 'Wedding Party',
        'copy'     => 'Keep the bridal party, groomsmen, and out-of-town guests together and on time. We coordinate transportation between venues, manage photo-shoot stops, and get the couple to the reception in style. Will County weddings are a weekly booking for us.',
    ],
    [
        'occasion' => 'Concert or Sporting Event',
        'copy'     => 'United Center, Wrigley Field, Soldier Field, Guaranteed Rate Field, Allstate Arena: we route to all of them. We drop the group at the gate and pick up curbside after the final buzzer. No surge pricing, no circling for parking, no one separated.',
    ],
    [
        'occasion' => 'Corporate Team Outing',
        'copy'     => 'Client entertainment, team building events, or an end-of-year celebration: a party bus limo bus delivers your group professionally. Everyone arrives together, the conversation starts on the bus, and your company looks organized from the first pickup.',
    ],
];
@endphp

<section id="{{ $id }}" style="background: var(--white); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                {{ $heading }}@if($headingBold) <strong style="color: var(--champagne);">{{ $headingBold }}</strong>@endif
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.7;">
                {{ $resolvedIntro }}
            </p>
        </div>

        @if($subheading)
        <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-8">
            {{ $subheading }}
        </h3>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($resolvedOccasions as $occ)
            <div style="background: var(--cloud-light); padding: 1.75rem; border-left: 3px solid var(--champagne);">
                <h4 style="font-family: var(--font-head); font-weight: 700; color: var(--navy); font-size: 1rem; letter-spacing: 0.02em;" class="mb-3">{{ $occ['occasion'] }}</h4>
                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.65;">{{ $occ['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <x-ui.button-champagne-gradient href="{{ $ctaHref }}" size="md" radius="soft">
                Get a Free Instant Quote
            </x-ui.button-champagne-gradient>
        </div>

    </div>
</section>
