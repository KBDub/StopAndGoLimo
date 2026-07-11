@props(['id' => 'why-chauffeured'])

{{--
    x-sections.why-chauffeured
    ─────────────────────────────────────────────────────────────────────────────
    Two-column trust section on a navy background.

    H2  — "Why Chauffeured Transportation Beats Driving Yourself"
      H3 — "9 Reasons New Lenox Chooses Professional Limo Service" (checklist, left)
      H3 — "Private Limo vs. Standard Car Service" (comparison table, right)
        H4 — "Ready to book your New Lenox limo service?"
             CTA button (radius="soft") + phone number

    Voice-search SEO: answers "why hire a limo instead of driving?" and
    "what is the difference between a limo and a regular car service?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section id attribute. Defaults to 'why-chauffeured'.
--}}

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                Why Chauffeured Transportation Beats Driving Yourself
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                When your event matters, the ride should match. Whether you are heading to a wedding at a Will County venue, a corporate meeting downtown, or a concert at the United Center, hiring a professional chauffeur removes every logistical headache so you can focus on what you actually came to do.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- ── Left: 9-point checklist ──────────────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    9 Reasons New Lenox Chooses Professional Limo Service
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach([
                        ['feature' => 'Luxury and comfort',            'detail' => 'Premium interiors, plush seating, and a smooth ride that makes every mile enjoyable.'],
                        ['feature' => 'Professional chauffeurs',       'detail' => 'Background-checked, uniformed, and trained to provide safe, courteous service every time.'],
                        ['feature' => 'No parking, no traffic stress', 'detail' => 'Skip the garage fees, circling the block, and city traffic. Your chauffeur handles all of it.'],
                        ['feature' => 'Arrive in style',               'detail' => 'Pull up in a vehicle that fits the occasion. First impressions are lasting ones.'],
                        ['feature' => 'Fully customizable',            'detail' => 'Choose the vehicle, amenities, pickup points, and schedule that match your event exactly.'],
                        ['feature' => 'Safety and reliability',        'detail' => 'Every vehicle is inspected before each trip. Every chauffeur holds an active Illinois license and insurance.'],
                        ['feature' => 'Group convenience',             'detail' => 'One vehicle keeps everyone together. No splitting into multiple cars, no coordinating meetups mid-night.'],
                        ['feature' => 'Flexible pricing plans',        'detail' => 'Flat-rate airport transfers, hourly bookings, or event-based packages. No surge pricing, no hidden charges.'],
                        ['feature' => 'More memorable events',         'detail' => 'Weddings, proms, corporate events, and concerts all feel more special when the ride is part of the experience.'],
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

            {{-- ── Right: Comparison table + CTA ───────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    Private Limo vs. Standard Car Service
                </h3>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    Not all car services are the same. Here is how a professional limo service compares to a standard car booking so you know exactly what you are getting when you choose Stop &amp; Go.
                </p>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; font-family: var(--font-body); font-size: 0.9rem;">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--champagne);">
                                <th style="text-align: left; padding: 0.75rem 0.5rem; color: var(--champagne); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem; letter-spacing: 0.04em;">Feature</th>
                                <th style="text-align: left; padding: 0.75rem 0.5rem; color: var(--champagne); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem; letter-spacing: 0.04em;">Stop &amp; Go Limo</th>
                                <th style="text-align: left; padding: 0.75rem 0.5rem; color: var(--champagne); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem; letter-spacing: 0.04em;">Standard Car Service</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach([
                                ['feature' => 'Booking',         'ours' => 'Pre-reserved online or by phone',   'theirs' => 'On-demand, often no advance option'],
                                ['feature' => 'Pricing',         'ours' => 'Fixed flat rate, no hidden fees',   'theirs' => 'Variable, metered, or surge-priced'],
                                ['feature' => 'Vehicle',         'ours' => 'Luxury sedans, SUVs, limo buses',   'theirs' => 'Standard or economy vehicles'],
                                ['feature' => 'Chauffeur',       'ours' => 'Vetted, trained, uniformed',        'theirs' => 'Variable licensing and training'],
                                ['feature' => 'Airport service', 'ours' => 'Meet-and-greet, flight tracking',   'theirs' => 'Curbside pickup only'],
                            ] as $i => $row)
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); {{ $i % 2 === 0 ? 'background: rgba(255,255,255,0.04);' : '' }}">
                                <td style="padding: 0.85rem 0.5rem; color: var(--white); font-family: var(--font-head); font-weight: 600; font-size: 0.85rem;">{{ $row['feature'] }}</td>
                                <td style="padding: 0.85rem 0.5rem; color: var(--cloud); line-height: 1.5;">{{ $row['ours'] }}</td>
                                <td style="padding: 0.85rem 0.5rem; color: var(--slate); line-height: 1.5;">{{ $row['theirs'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;" class="mt-8">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-4">
                        Ready to book your New Lenox limo service?
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        We are available 24 hours a day, every day of the year. Airport pickups, weddings, proms, and corporate runs are all welcome. Get your flat-rate quote in minutes.
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
