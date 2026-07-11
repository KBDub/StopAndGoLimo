@props(['id' => 'on-board-experience'])

{{--
    x-sections.on-board-experience
    ─────────────────────────────────────────────────────────────────────────────
    Two-column trust and amenities section on a navy background.

    H2  — "What You Get on Every Stop & Go Party Bus"
      H3 — Amenities That Come Standard (7-item checklist, left column)
      H3 — One Vehicle. One Group. One Fixed Price. (logistics copy, right column)
        H4 — How far in advance should you book?
             Centered CTA button (radius="soft") + phone number

    Voice-search SEO: answers "what amenities come on a party bus?" and
    "why book with Stop & Go?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section id attribute. Defaults to 'on-board-experience'.
--}}

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                What You Get on Every Stop &amp; Go Party Bus
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                Every vehicle in our fleet is inspected before each booking. Every chauffeur is background-checked, licensed, insured, and in uniform when they arrive at your door. We are licensed and insured in Illinois, and we operate under a strict on-time guarantee. When you book with Stop &amp; Go, you are not booking a ride. You are booking a professional transportation experience with a company that has served the southwest suburbs since 2009.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- ── Left: Amenities checklist ────────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    Amenities That Come Standard
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach([
                        ['feature' => 'Premium sound system',             'detail' => 'Bluetooth-connected, concert-quality audio so your playlist drives the night.'],
                        ['feature' => 'LED and fiber-optic lighting',      'detail' => 'Color-adjustable cabin lighting that sets any mood, from mellow to full party mode.'],
                        ['feature' => 'Spacious leather seating',          'detail' => 'Comfortable seats with room to stand, move, and actually enjoy the ride together.'],
                        ['feature' => 'Climate control',                   'detail' => 'Year-round cabin comfort whether you are heading to a July concert or a January prom.'],
                        ['feature' => 'USB charging at every seat',        'detail' => 'Keep phones charged all night. Every photo, every video, no dead batteries.'],
                        ['feature' => 'Cooler and bar setup',              'detail' => 'Beverage cooler included. BYOB where permitted. We will confirm the details when you book.'],
                        ['feature' => 'Uniformed, professional chauffeur', 'detail' => 'Background-checked, licensed, punctual, and focused on your group the entire time.'],
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

            {{-- ── Right: Group logistics + CTA ───────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    One Vehicle. One Group. One Fixed Price.
                </h3>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    The biggest advantage of a party bus over a fleet of cars is simple: your whole group stays together the entire night. There is no splitting up, no coordinating meetups at the next stop, and no one stuck waiting for a pickup that never arrives. Your chauffeur manages the routing. Your group manages the fun.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    We handle multi-stop itineraries across Chicagoland every weekend. Tell us your starting point, your stops, and your end time. We will build a route around it and give you a flat rate before you commit. No mileage surprises, no surge pricing, no hidden fees.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-8">
                    If your group has guests flying in for the event, we also handle airport pickups from O'Hare and Midway. We track flights in real time and adjust pickup timing automatically. Your out-of-town guests get the same professional experience as everyone else, from the moment they land.
                </p>

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-4">
                        How far in advance should you book?
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        For weekend dates, we recommend booking four to six weeks out. Spring prom weekends and peak summer dates fill three to four months ahead. If you have a specific date in mind, call us now to check availability. Securing your vehicle early also gives you time to lock in your route and any custom requests.
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
