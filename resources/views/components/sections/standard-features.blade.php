@props([
    'id'      => 'standard-features',
    'heading' => 'What Your Party Bus <strong>Includes</strong>',
    'intro'   => 'Every vehicle in our fleet comes fully equipped for an unforgettable event. These are the features your group rides with.',
    'cards'   => [],
])

{{--
    x-sections.standard-features
    ─────────────────────────────────────────────────────────────────────────────
    Cloud-light background, centered H2 + champagne underbar, 3-col navy card grid.
    Displays vehicle amenity features (LED lights, sound system, seating, etc.).

    H2  — $heading (allows HTML, e.g. "What Your Ride <strong>Includes</strong>")
      3-col card grid: navy card, champagne H3 (feature), white H4 (benefit), cloud body (why)

    Props
      id      string   Section id attribute. Defaults to 'standard-features'.
      heading string   H2 text. Allows {!! !!} HTML (use <strong> for bold word).
      intro   string   Intro paragraph below the H2. Plain text.
      cards   array    [{feature, benefit?, why}, ...]. Falls back to 6 generic defaults.
--}}

@php
$resolvedCards = count($cards) ? $cards : [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Electric atmosphere from pickup to drop-off', 'why' => 'Dimmable LED lighting keeps the energy high from the moment you board.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your ride',                   'why' => 'Bluetooth audio throughout the cabin means your group controls the music all night.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your crew',         'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold, hands free, all ride long',     'why' => 'Coolers are stocked and ready before your pickup so nobody has to stop the fun.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in any season',                  'why' => 'Dual-zone climate control keeps your group comfortable year-round.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked and uniformed',           'why' => 'Every chauffeur is vetted and focused on getting your group there and back safely.'],
];
@endphp

<section id="{{ $id }}" style="background: var(--cloud-light); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">

        <div class="flex justify-center mb-12">
            <div style="width: fit-content;">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;">
                    {!! $heading !!}
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; max-width: calc(100vw - 3rem); margin-top: 0.85rem;"></div>
            </div>
        </div>
        <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5; text-align: center;" class="max-w-2xl mx-auto mb-12">
            {{ $intro }}
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($resolvedCards as $card)
            <div style="background: var(--navy); padding: 1.75rem;">
                <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-2">
                    {{ $card['feature'] }}
                </h3>
                @if(!empty($card['benefit']))
                <h4 style="font-family: var(--font-head); font-size: 0.875rem; font-weight: 600; color: var(--white); letter-spacing: 0.02em; line-height: 1.3;" class="mb-3">
                    {{ $card['benefit'] }}
                </h4>
                @endif
                <p style="font-family: var(--font-body); color: var(--cloud); font-size: 0.975rem; line-height: 1.55;">
                    {{ $card['why'] }}
                </p>
            </div>
            @endforeach
        </div>

    </div>
</section>
