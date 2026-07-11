@props(['id' => 'why-stop-and-go'])

{{--
    x-sections.core-services-differentiator-band
    ─────────────────────────────────────────────────────────────────────────────
    Full-width credibility section: "Why choose Stop & Go Airport Shuttle Service, Inc. across all 7 services?"
    Used exclusively on /core-services landing page, below the pillar grid.

    Layout: white bg, two columns desktop / single column mobile.
      Left:  4 champagne-bordered credibility cards (cloud-light bg)
      Right: H3, 3 prose paragraphs (100-120w each), CTA block
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor. Defaults to 'why-stop-and-go'.
--}}

<section id="{{ $id }}" style="background: var(--white); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        {{-- Section heading with champagne underbar --}}
        <div style="width: fit-content; margin-bottom: 3.5rem;">
            <h2 class="font-head" style="font-size: var(--font-size-h2); line-height: 1.2; letter-spacing: var(--letter-spacing-h2); color: var(--navy);">
                <span style="font-weight: 400;">Why Every Client Chooses </span><span style="font-weight: 700; color: var(--champagne);">Stop &amp; Go Airport Shuttle Service, Inc.</span>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- ── Left: 4 credibility cards ─────────────────────────────── --}}
            <div class="grid grid-cols-1 gap-5">
                @foreach([
                    [
                        'title' => 'Background-Checked on Every Ride',
                        'body'  => 'Every chauffeur across all seven service categories goes through FBI fingerprint screening, motor vehicle record review, drug testing, and annual re-certification before they are ever behind the wheel for a Stop &amp; Go Airport Shuttle Service, Inc. client. The same standard applies whether you are booking an airport sedan or a 50-passenger charter bus. There is no two-tier system. Every driver meets the same bar.',
                    ],
                    [
                        'title' => 'Real-Time Flight Tracking on Every Airport Run',
                        'body'  => 'Dispatch monitors radar-level flight data, not just the airline app. If your flight shifts by 20 minutes, your pickup shifts by 20 minutes automatically. Your chauffeur is at the correct terminal before your wheels touch the runway, not when the app shows the flight has "arrived." You never need to call us to report a delay. The system already knows.',
                    ],
                    [
                        'title' => 'Flat-Rate Pricing. No Surge. Ever.',
                        'body'  => 'The rate we quote before you book is the rate on your receipt after the ride. Traffic adds nothing. A peak-demand Friday night adds nothing. A holiday adds nothing. Taxes and tolls are included in every quote. Your fare is locked the moment you confirm, across every service category and every vehicle in our fleet. No recalculations at drop-off.',
                    ],
                    [
                        'title' => '24/7/365 Dispatch: A Real Person Answers',
                        'body'  => 'A dispatcher picks up at 3 a.m. Pre-dawn airport runs are a standard part of our operation. Holiday coverage never lapses. Late-night group returns have a guaranteed ride home waiting. We do not have a voicemail box handling overnight calls. A real person manages your pickup at any hour, any day of the year, 365 days a year without exception.',
                    ],
                ] as $card)
                <div style="padding: 1.5rem 1.75rem; border-left: 3px solid var(--champagne); background: var(--cloud-light);">
                    <h3 style="font-family: var(--font-head); font-weight: 700; color: var(--navy); font-size: 1rem; letter-spacing: 0.02em; margin-bottom: 0.5rem;">{{ $card['title'] }}</h3>
                    <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.7; margin: 0;">{!! $card['body'] !!}</p>
                </div>
                @endforeach
            </div>

            {{-- ── Right: prose paragraphs + CTA ──────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    The Same Standard Across Every Booking
                </h3>

                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--slate); line-height: 1.8;" class="mb-5">
                    Every Stop &amp; Go Airport Shuttle Service, Inc. booking, regardless of which of the seven service categories you choose, runs through the same pre-trip checklist. The vehicle is detailed and inspected before your pickup. The route is planned in advance with current traffic factored in. The chauffeur is briefed on your schedule, your stops, and any special instructions. The flat rate is locked. For corporate accounts that book different vehicle types on different days of the week, this consistency is what makes us the preferred single vendor across all their ground transportation needs in Will County and along the I-88 corridor.
                </p>

                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--slate); line-height: 1.8;" class="mb-5">
                    We are based in New Lenox at 400 E Lincoln Hwy, which puts us within practical distance of every major corridor in Chicagoland. Our chauffeurs know the fastest routes to O'Hare from every Will County community. They know Midway's pickup and drop-off protocols, the Naperville Route 59 corridor, the Aurora Fox Valley entertainment venues, the I-88 Innovation Corridor's corporate campuses in Oak Brook and Downers Grove, and the South Loop and River North districts in Chicago. That local knowledge is not something you can buy from a national booking platform. It is built through a decade of daily runs across the same roads.
                </p>

                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--slate); line-height: 1.8;" class="mb-8">
                    The industries that rely on us reflect the full range of what we do. Legal and financial firms along the I-88 corridor book recurring executive ground accounts. Healthcare systems in Joliet and the southwest suburbs, including staff from Silver Cross Hospital, travel through us. Logistics and manufacturing companies near CenterPoint Intermodal in Elwood use us for executive and vendor airport runs. Wedding planners coordinating 200 guests across four vehicle types on a Will County Saturday trust us to be the one transportation vendor who shows up exactly as agreed. We handle all of it under one roof, with one phone number, and one standard.
                </p>

                <div style="border-top: 2px solid var(--champagne); padding-top: 1.5rem;">
                    <p style="font-family: var(--font-body); font-size: 1rem; color: var(--slate); line-height: 1.7;" class="mb-4">
                        Select a service category above, or get a free flat-rate quote right now. We serve all of Will County and Chicagoland, 24 hours a day.
                    </p>
                    <div class="flex flex-wrap gap-4 items-center">
                        <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
                            Get a Free Instant Quote
                        </x-ui.button-champagne-gradient>
                        <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.5; margin: 0;">
                            or call <a href="tel:+17083154445" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;"></a> anytime
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
