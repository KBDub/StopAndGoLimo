@props(['id' => 'airport-vehicle-guide'])

{{--
    x-sections.airport-vehicle-guide
    ─────────────────────────────────────────────────────────────────────────────
    Four-card airport fleet selector on a cloud-light background.
    Matches the vehicle-match visual pattern: champagne top border, capacity
    label in champagne, vehicle name in navy, copy in slate.

    H2  — "Choose the Right Vehicle for Your Airport Run"
      H3 — "Airport Fleet Options" (4 cards, 4-col desktop)

    Voice-search SEO: answers "what size car do I need for the airport?" and
    "what vehicles does Stop & Go offer for airport transfers from New Lenox?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section id attribute. Defaults to 'airport-vehicle-guide'.
--}}

<section id="{{ $id }}" style="background: var(--cloud-light); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                Choose the Right Vehicle for Your Airport Run
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.7;">
                The most common mistake in airport travel is underestimating luggage space. Matching your vehicle to your group size and bag count keeps the trip comfortable and avoids last-minute scrambles. Our fleet covers everything from a solo executive run to a large family or corporate team heading out together.
            </p>
        </div>

        <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
            Airport Fleet Options
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                [
                    'range'   => '1 to 3 passengers',
                    'vehicle' => 'Luxury sedan',
                    'note'    => 'The right choice for a solo business traveler or a couple with carry-on bags. Quiet leather cabin and a direct route to O\'Hare or Midway. Our most popular vehicle for early-morning New Lenox departures.',
                ],
                [
                    'range'   => '4 to 6 passengers',
                    'vehicle' => 'Full-size luxury SUV',
                    'note'    => 'Built for families with strollers, golf bags, or a week of checked luggage for everyone. Extra cargo room handles it without cramming anyone in. A favorite for New Lenox families flying Southwest out of Midway.',
                ],
                [
                    'range'   => '7 to 14 passengers',
                    'vehicle' => 'Executive van or Sprinter',
                    'note'    => 'The best choice for corporate teams traveling together, large families, or groups with oversized gear. Everyone rides on one flat rate with no coordination required. We run Sprinter airport shuttles from New Lenox to O\'Hare daily.',
                ],
                [
                    'range'   => 'Special occasions',
                    'vehicle' => 'Stretch limousine',
                    'note'    => 'When the destination matters as much as the departure. Popular for honeymoon send-offs, milestone birthday trips, and prom-night airport runs. Your celebration starts the moment the door closes.',
                ],
            ] as $card)
            <div style="background: var(--white); border-top: 3px solid var(--champagne); padding: 1.75rem;">
                <p style="font-family: var(--font-head); font-weight: 700; color: var(--champagne); font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase;" class="mb-2">{{ $card['range'] }}</p>
                <p style="font-family: var(--font-head); font-weight: 600; color: var(--navy); font-size: 1.05rem; line-height: 1.3;" class="mb-3">{{ $card['vehicle'] }}</p>
                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.6;">{{ $card['note'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
                Get a Free Instant Quote
            </x-ui.button-champagne-gradient>
        </div>

    </div>
</section>
