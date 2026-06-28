@props(['id' => 'pillar-grid'])

{{--
    x-sections.core-services-pillar-grid
    ─────────────────────────────────────────────────────────────────────────────
    7-tile clickable rectangular grid linking to each Core Service Pillar page.
    Used exclusively on /core-services landing page.

    Desktop: 2-column grid. Mobile: 1-column stack.
    Each tile is a full <a> tag: navy bg, champagne number, H3 name, short
    description, champagne right-arrow. Hover: champagne 4px left border.
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor. Defaults to 'pillar-grid'.
--}}

@php
$pillars = [
    [
        'number'      => '01',
        'name'        => 'Airport Shuttle Service',
        'description' => "Flat-rate transfers to O'Hare and Midway with real-time flight tracking, 24/7 dispatch, and meet-and-greet at baggage claim. We serve Chicago Executive, Gary/Chicago, and regional FBO terminals too.",
        'href'        => '/core-services/airport-shuttle',
    ],
    [
        'number'      => '02',
        'name'        => 'Bus Charter',
        'description' => 'Right-sized charter buses for weddings, corporate events, church trips, concerts, quinceañera courts, and celebrations of all sizes across Chicagoland.',
        'href'        => '/core-services/bus-charter',
    ],
    [
        'number'      => '03',
        'name'        => 'Chauffeur Service',
        'description' => 'Background-checked, professionally attired chauffeurs for executive travel, C-suite commutes, VIP client entertainment, medical appointments, and private transfers of any kind.',
        'href'        => '/core-services/chauffeur-service',
    ],
    [
        'number'      => '04',
        'name'        => 'Limousine Service',
        'description' => 'Stretch limousines, luxury SUVs, and executive sedans for weddings, proms, quinceañeras, galas, milestone birthdays, FBO arrivals, and every occasion worth celebrating.',
        'href'        => '/core-services/limousine-service',
    ],
    [
        'number'      => '05',
        'name'        => 'Transportation Escort',
        'description' => 'Multi-vehicle coordination and discreet escort service for VIP clients, executive convoys, wedding vehicle fleets, dignitary arrivals, and senior group transportation.',
        'href'        => '/core-services/transportation-escort',
    ],
    [
        'number'      => '06',
        'name'        => 'Transportation Service',
        'description' => 'Full-service private ground transportation for families, seniors, corporations, medical appointments, hotel-to-venue shuttle loops, and B2B recurring accounts across Will County.',
        'href'        => '/core-services/transportation-service',
    ],
    [
        'number'      => '07',
        'name'        => 'Wedding Service',
        'description' => 'Complete wedding weekend transportation: bridal party, guest shuttles, getaway cars, rehearsal dinners, airport pickups for out-of-town guests, and day-after brunches, all in a single booking.',
        'href'        => '/core-services/wedding-service',
    ],
];
@endphp

<section id="{{ $id }}" style="background: var(--cloud-light); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                Explore Every Service We Offer
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.7;">
                Select a service category below to read the full details: what is included, which vehicles we use, what a typical booking looks like, and how to get a flat-rate quote for your specific need.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
            @foreach($pillars as $pillar)
            <a href="{{ $pillar['href'] }}" class="group block" style="text-decoration: none;">
                <div
                    class="sg-pillar-tile flex items-start gap-5"
                    style="background: var(--navy); padding: 1.75rem 2rem; border-left: 4px solid transparent; transition: border-color 0.2s ease, background 0.2s ease; height: 100%;"
                    onmouseover="this.style.borderLeftColor='var(--champagne)'; this.style.background='#0c1d3a';"
                    onmouseout="this.style.borderLeftColor='transparent'; this.style.background='var(--navy)';"
                >
                    {{-- Pillar number --}}
                    <div style="flex-shrink: 0; padding-top: 0.15rem;">
                        <span style="font-family: var(--font-head); font-size: 1.4rem; font-weight: 700; color: var(--champagne); line-height: 1;">{{ $pillar['number'] }}</span>
                    </div>

                    {{-- Text --}}
                    <div style="flex: 1; min-width: 0;">
                        <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 700; color: var(--white); line-height: 1.3; margin-bottom: 0.45rem;">
                            {{ $pillar['name'] }}
                        </h3>
                        <p style="font-family: var(--font-body); font-size: 0.875rem; color: var(--cloud); line-height: 1.65; margin: 0;">
                            {{ $pillar['description'] }}
                        </p>
                    </div>

                    {{-- Chevron --}}
                    <div style="flex-shrink: 0; align-self: center; padding-left: 0.5rem;">
                        <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="var(--champagne)" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</section>
