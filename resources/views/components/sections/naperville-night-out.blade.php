@props(['id' => 'naperville-night-out'])

{{--
    x-sections.naperville-night-out
    ─────────────────────────────────────────────────────────────────────────────
    Navy two-column section. City-specific party bus planning content for
    Naperville IL. Matches the aurora-night-out visual pattern.

    H2  — "Where Naperville Groups Go"
      H3 — "Four Common Naperville Party Bus Routes" (4-item checklist, left)
      H3 — "Planning Your Naperville Night" (venue/planning prose + CTA, right)

    Local SEO: Naperville Riverwalk, Main Street, Ribfest, Naperville North/
    Central/Neuqua Valley/Waubonsie prom, Chicago concert runs, DuPage loop.
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor. Defaults to 'naperville-night-out'.
--}}

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                Where Naperville Groups Go
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                A Naperville party bus is not just a ride — it is the logistics solution that lets your group focus on the night instead of the driving. Our chauffeurs know DuPage County, the Fox Valley, and Chicago routes, so you tell us where you want to go and we handle everything else.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- ── Left: Common Naperville routes ───────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    Four Common Naperville Party Bus Routes
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach([
                        [
                            'route'  => 'Downtown Naperville night out',
                            'detail' => 'Main Street, the Riverwalk corridor, and the Benton Avenue bar and restaurant district. We drop your group at the start of the night and pick you up when you are ready to head home.',
                        ],
                        [
                            'route'  => 'Prom and homecoming season',
                            'detail' => 'Naperville North, Naperville Central, Neuqua Valley, and Waubonsie Valley — our prom party buses run all four high schools. Safe, stylish, and on time every spring.',
                        ],
                        [
                            'route'  => 'Chicago concert and event runs',
                            'detail' => 'United Center, Wintrust Arena, Soldier Field, Guaranteed Rate Field — groups from Naperville make this trip every weekend. No parking, no traffic, no one missing the opening act.',
                        ],
                        [
                            'route'  => 'DuPage suburb loop',
                            'detail' => 'Lisle, Downers Grove, Bolingbrook, Woodridge, and Romeoville — our buses connect the surrounding communities for group events, bar crawls, winery trips, and everything in between.',
                        ],
                    ] as $item)
                    <li style="padding: 1rem 0; border-bottom: 1px solid rgba(255,255,255,0.08); display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="color: var(--champagne); font-weight: 700; font-size: 1.1rem; flex-shrink: 0; margin-top: 0.1rem;">&#10003;</span>
                        <div>
                            <p style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">{{ $item['route'] }}</p>
                            <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.55;">{{ $item['detail'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Right: Planning prose + CTA ─────────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    Planning Your Naperville Night
                </h3>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-5">
                    Most Naperville nights out follow a simple pattern: dinner somewhere on Main Street or in the Riverwalk area, then a few stops along the bar district, and a late ride home at the end of the evening. Our chauffeurs know the parking situation, the timing, and the best drop-off spots for every venue in the area, so you do not have to think about any of it.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-5">
                    If your group is heading to a summer event like Ribfest or Last Fling, book early. Those weekends fill fast across all of Chicagoland. The same applies to prom season: Naperville-area schools run in April and May, and availability narrows quickly once the school calendars are set.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-8">
                    Multi-stop routes, extended hours, and custom itineraries are all handled at the time of booking. There is no extra coordination on your end. Call us, tell us your plan, and we will confirm everything before the night arrives.
                </p>

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-4">
                        Ready to book your Naperville party bus?
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        Get a flat-rate quote in minutes. We serve all of Naperville and the DuPage area, 24 hours a day.
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
