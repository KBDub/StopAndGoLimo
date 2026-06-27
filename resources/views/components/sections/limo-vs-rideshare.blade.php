@props(['id' => 'limo-vs-rideshare'])

{{--
    x-sections.limo-vs-rideshare
    ─────────────────────────────────────────────────────────────────────────────
    Navy two-column section. Left: 5-item champagne checklist of what a
    professional limo service guarantees. Right: comparison prose (limo vs.
    rideshare apps) with a CTA block underneath.

    Matches the party-bus-advantage / aurora-night-out visual pattern.

    Target: "limo service near me" searchers who have also considered Uber/Lyft.
    Answers: "why not just use a rideshare?" and "what makes Stop & Go different?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor. Defaults to 'limo-vs-rideshare'.
--}}

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                Why a Professional Limo Service Beats a Rideshare App
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                Rideshare apps are convenient for a quick grocery run. For an airport transfer at 4 a.m., a wedding, a corporate pickup, or any ride where timing and appearance matter, a professional limo service is a different category entirely.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- ── Left: What a pro limo guarantees ────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    What Stop & Go Guarantees on Every Ride
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach([
                        [
                            'point'  => 'The exact vehicle you booked',
                            'detail' => 'No substitutions, no surprises. The vehicle confirmed at booking is the vehicle that shows up — inspected, detailed, and ready.',
                        ],
                        [
                            'point'  => 'A professional chauffeur, not a random driver',
                            'detail' => 'Every chauffeur is background-checked, professionally licensed, and uniformed. You know who is driving before they arrive.',
                        ],
                        [
                            'point'  => 'Flat-rate pricing, locked in at booking',
                            'detail' => 'No surge pricing. No algorithm deciding your fare at 4 a.m. on a Friday. The rate you see when you book is the rate you pay.',
                        ],
                        [
                            'point'  => 'Real-time flight tracking for airport rides',
                            'detail' => 'If your flight lands early or runs late, your chauffeur already knows. Your pickup adjusts automatically. No extra calls needed.',
                        ],
                        [
                            'point'  => 'A confirmed reservation with a real dispatcher',
                            'detail' => 'You are not matched to whoever is nearby. You have a confirmed booking, a confirmed driver, and a team reachable by phone 24 hours a day.',
                        ],
                    ] as $item)
                    <li style="padding: 1rem 0; border-bottom: 1px solid rgba(255,255,255,0.08); display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="color: var(--champagne); font-weight: 700; font-size: 1.1rem; flex-shrink: 0; margin-top: 0.1rem;">&#10003;</span>
                        <div>
                            <p style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">{{ $item['point'] }}</p>
                            <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.55;">{{ $item['detail'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Right: Comparison prose + CTA ───────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    The Difference Is the Standard
                </h3>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-5">
                    Rideshare apps work by matching you to whoever is available in the area. The vehicle varies. The driver's experience varies. The price varies based on demand at that exact moment. That is fine for low-stakes trips. It is not the right tool for a 5 a.m. O'Hare flight, a wedding morning, or a corporate client pickup.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-5">
                    Stop & Go has operated in Chicagoland since 2009. Our clients are business travelers who cannot miss a flight, couples who have one shot at a perfect wedding day, and families who need a safe and reliable ride home after a late night. For all of them, the answer is the same: a confirmed professional chauffeur in the right vehicle, at the agreed time, at the agreed price.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-8">
                    We serve all of Chicagoland from our New Lenox base: Will, DuPage, Kane, Cook, and Lake counties. Whether your pickup is in a south suburb, a north suburb, or downtown Chicago, we cover it with the same standard.
                </p>

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-4">
                        Ready for a real limo service?
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        Get a flat-rate quote in minutes. No obligation, no hidden fees.
                    </p>
                    <div class="text-center">
                        <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
                            Get a Free Instant Quote
                        </x-ui.button-champagne-gradient>
                        <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.85rem; line-height: 1.5;" class="mt-3">
                            or call <a href="tel:+18155856922" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">(815) 585-6922</a> anytime, 24 hours a day
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
