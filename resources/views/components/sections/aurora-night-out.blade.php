@props(['id' => 'aurora-night-out'])

{{--
    x-sections.aurora-night-out
    ─────────────────────────────────────────────────────────────────────────────
    Two-column Aurora-specific party bus section on a navy background.
    Matches the party-bus-advantage visual pattern.

    H2  — "Why Aurora Groups Choose a Party Bus"
      H3 — "Four Reasons It Beats Any Other Option" (4-item checklist, left)
      H3 — "Planning Your Night in Aurora" (venue/routing prose + CTA, right)
        H4 — CTA block with button + phone

    Voice-search SEO: answers "why rent a party bus in Aurora IL?" and
    "what are the best party bus routes in Aurora Illinois?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section id attribute. Defaults to 'aurora-night-out'.
--}}

<section id="{{ $id }}" style="background: var(--navy); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--white); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                Why Aurora Groups Choose a Party Bus
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--cloud); line-height: 1.7;">
                A night out in Aurora deserves better than coordinating three separate vehicles and hoping everyone ends up at the same place. A party bus keeps the whole group together, handles the driving, and turns every mile between stops into part of the celebration.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- ── Left: Why-party-bus checklist ───────────────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    Four Reasons It Beats Any Other Option
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach([
                        [
                            'feature' => 'All-in-one convenience',
                            'detail'  => 'No splitting up the group, no coordinating pickups across Aurora, no one stuck waiting for a ride that never shows. One bus, one pickup, everyone together all night.',
                        ],
                        [
                            'feature' => 'Nobody has to drive',
                            'detail'  => 'Our professional chauffeurs handle every mile. Your group focuses on having fun while we manage the route, the timing, and the drop-offs.',
                        ],
                        [
                            'feature' => 'The party starts on board',
                            'detail'  => 'LED lighting, premium sound, leather seating, and a beverage setup mean the energy does not wait until you reach the venue. The bus is the first stop of the night.',
                        ],
                        [
                            'feature' => 'Fits any occasion in Aurora',
                            'copy'    => '',
                            'detail'  => 'Birthdays, bachelorette parties, proms, concert runs to Chicago, Paramount Theatre shows, corporate outings — our fleet adapts to every size group and every type of event.',
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

            {{-- ── Right: Aurora night planning prose + CTA ─────────────────── --}}
            <div>
                <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                    Planning Your Night in Aurora
                </h3>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    Aurora has a strong nightlife scene, and our chauffeurs know it well. A typical night might start with dinner in downtown Aurora or the New York Street district, then move to the Fox Valley bar strip, and wrap up with a late stop wherever your group decides to land. If the plan includes a show at the Paramount Theatre or a concert run into Chicago, we build the route around your ticket time and get everyone back home on schedule.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-6">
                    We serve Aurora, North Aurora, Oswego, Montgomery, Sugar Grove, and the broader Fox Valley area. Groups from Naperville and Joliet join Aurora riders often for larger events. Multi-city routes and multi-stop itineraries are something we handle every weekend.
                </p>
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.75;" class="mb-8">
                    The more advance notice you give us, the better your options. Weekend evenings and spring prom season fill fast. If you have a date in mind, call us now to check availability before your first choice is gone.
                </p>

                <div style="border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.5rem;">
                    <h4 style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 1rem; letter-spacing: 0.03em;" class="mb-4">
                        Ready to book your Aurora party bus?
                    </h4>
                    <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--slate); line-height: 1.7;" class="mb-6">
                        Get a flat-rate quote in minutes. We are available 24 hours a day and serve all of the Fox Valley and Chicagoland.
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
