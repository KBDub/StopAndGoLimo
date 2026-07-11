@props(['id' => 'airport-chauffeur-detail'])

{{--
    x-sections.airport-chauffeur-detail
    ─────────────────────────────────────────────────────────────────────────────
    Two-column trust section on a navy background.
    Matches the on-board-experience visual pattern.

    H2  — "What Sets a Stop & Go Airport Shuttle Service, Inc. Chauffeur Apart"
      H3 — "What Every Airport Pickup Includes" (4-item checklist, left)
      H3 — "The Real Cost of Driving Yourself" (cost comparison prose, right)
        H4 — CTA block with button + phone

    Voice-search SEO: answers "what does a chauffeur do at the airport?" and
    "is a limo cheaper than airport parking?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section id attribute. Defaults to 'airport-chauffeur-detail'.
--}}

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                What Sets a Stop &amp; Go Airport Shuttle Service, Inc. Chauffeur Apart
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                A scheduled airport transfer is only as good as the chauffeur behind it. Our drivers are not gig-economy workers picking up rides between other jobs. They are professional, trained chauffeurs who know Will County roads, know the terminals at O'Hare and Midway, and know exactly what to do when a flight lands 40 minutes early or two hours late.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- ── Left: Service checklist ──────────────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    What Every Airport Pickup Includes
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach([
                        [
                            'feature' => 'Real-time flight tracking',
                            'detail'  => 'We monitor your flight from the moment you book. Early arrival, late arrival, gate change — we adjust your pickup automatically. You do not need to call us.',
                        ],
                        [
                            'feature' => 'Meet-and-greet at baggage claim',
                            'detail'  => 'Your chauffeur meets you inside the terminal with your name displayed, not curbside with a phone call from the parking lot. We walk you to the vehicle.',
                        ],
                        [
                            'feature' => 'Luggage assistance on every trip',
                            'detail'  => 'We load and unload every bag. After a long flight the last thing you need is wrestling a cart to the curb while watching for traffic.',
                        ],
                        [
                            'feature' => 'Flat rate in any weather, any hour',
                            'detail'  => 'Snowstorm at 3 a.m., I-80 backed up for miles, holiday surge — none of it changes your price. You pay what you booked, period.',
                        ],
                    ] as $item)
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

            {{-- ── Right: Cost comparison + CTA ────────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    The Real Cost of Driving Yourself
                </h3>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    Many people assume a professional limo service from New Lenox is far more expensive than driving to the airport. When you add up the real numbers, the gap closes fast.
                </p>

                <div style="overflow-x: auto; margin-bottom: 1.5rem;">
                    <table style="width: 100%; border-collapse: collapse; font-family: var(--font-body); font-size: 0.9rem;">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--champagne);">
                                <th style="text-align: left; padding: 0.75rem 0.5rem; color: var(--champagne); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem; letter-spacing: 0.04em;">Cost</th>
                                <th style="text-align: left; padding: 0.75rem 0.5rem; color: var(--champagne); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem; letter-spacing: 0.04em;">Driving Yourself</th>
                                <th style="text-align: left; padding: 0.75rem 0.5rem; color: var(--champagne); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem; letter-spacing: 0.04em;">Stop &amp; Go Airport Shuttle Service, Inc.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach([
                                ['cost' => 'Airport parking',  'driving' => 'Roughly $22–35 per day at O\'Hare',    'limo' => 'Not applicable'],
                                ['cost' => '7-day trip',       'driving' => 'Up to $245 in parking alone',          'limo' => 'One flat rate, booked in advance'],
                                ['cost' => 'Fuel and tolls',   'driving' => 'I-294 tolls plus gas both ways',       'limo' => 'Included in your flat rate'],
                                ['cost' => 'Stress factor',    'driving' => 'Find your car after a red-eye flight', 'limo' => 'Chauffeur waiting at baggage claim'],
                            ] as $i => $row)
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); {{ $i % 2 === 0 ? 'background: rgba(255,255,255,0.04);' : '' }}">
                                <td style="padding: 0.85rem 0.5rem; color: var(--white); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem;">{{ $row['cost'] }}</td>
                                <td style="padding: 0.85rem 0.5rem; color: var(--slate); line-height: 1.5;">{{ $row['driving'] }}</td>
                                <td style="padding: 0.85rem 0.5rem; color: var(--cloud); line-height: 1.5;">{{ $row['limo'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-8">
                    On a week-long trip, a professional limo transfer from New Lenox often costs the same as or less than parking, without the fuel, tolls, or the experience of dragging bags through a parking structure at midnight.
                </p>

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-4">
                        Ready to lock in your flat rate?
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        We serve O'Hare, Midway, Rockford, Milwaukee, and Gary airports. Get your price in minutes with no obligation.
                    </p>
                    <div class="text-center">
                        <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
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
