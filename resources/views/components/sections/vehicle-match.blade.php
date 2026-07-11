@props(['id' => 'vehicle-match'])

{{--
    x-sections.vehicle-match
    ─────────────────────────────────────────────────────────────────────────────
    Two-part guide section on a cloud-light background.

    H2  — "How to Choose the Right Party Bus for Your Group"
      H3 — Party Bus Size Guide (4 size cards)
      H3 — Popular Party Bus Occasions Across Chicagoland (6 occasion cards)
    Pricing callout strip in navy at bottom.

    Voice-search SEO: answers "what size party bus do I need?" and
    "what occasions are best for a party bus near me?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section id attribute. Defaults to 'vehicle-match'.
--}}

<section id="{{ $id }}" style="background: var(--cloud-light); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                How to Choose the Right Party Bus for Your Group
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.7;">
                The most common question we hear is: "What size bus do we need?" Start with your headcount. A bus that is too small cramps the experience, and one that is too large feels hollow. Once you know how many people are coming, match the vehicle to the mood of the event. A bachelorette party and a corporate outing call for different atmospheres even if the guest count is the same.
            </p>
        </div>

        {{-- ── Size guide ──────────────────────────────────────────────── --}}
        <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
            Party Bus Size Guide
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-24">
            @foreach([
                [
                    'range'   => '10 to 15 guests',
                    'vehicle' => 'Stretch limousine or small party bus',
                    'note'    => 'Perfect for a bachelorette, birthday dinner, or prom group. Intimate setting with full amenities.',
                ],
                [
                    'range'   => '16 to 24 guests',
                    'vehicle' => 'Mid-size party bus',
                    'note'    => 'Ideal for wedding parties, bachelor groups, or a night out with a larger crew. Plenty of room to stand and move.',
                ],
                [
                    'range'   => '25 to 40 guests',
                    'vehicle' => 'Large party bus or limo bus',
                    'note'    => 'Great for corporate outings, sweet 16s, quinceañera courts, or group concert runs to Chicago.',
                ],
                [
                    'range'   => '40 or more guests',
                    'vehicle' => 'Luxury coach bus',
                    'note'    => 'Best for large wedding shuttles, company events, or multi-group tailgates. Ask us about multi-vehicle coordination.',
                ],
            ] as $card)
            <div style="background: var(--white); border-top: 3px solid var(--champagne); padding: 1.75rem;">
                <p style="font-family: var(--font-head); font-weight: 700; color: var(--champagne); font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase;" class="mb-2">{{ $card['range'] }}</p>
                <p style="font-family: var(--font-head); font-weight: 600; color: var(--navy); font-size: 1.05rem; line-height: 1.3;" class="mb-3">{{ $card['vehicle'] }}</p>
                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.6;">{{ $card['note'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- ── Occasions grid ──────────────────────────────────────────── --}}
        <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-4">
            Popular Party Bus Occasions Across Chicagoland
        </h3>
        <p style="font-family: var(--font-body); font-size: 1.1rem; color: var(--slate); line-height: 1.7;" class="mb-8">
            We serve groups throughout New Lenox, Naperville, Joliet, Aurora, Frankfort, Mokena, Orland Park, Tinley Park, Bolingbrook, and the wider Chicagoland area. Here are the occasions we handle most often, and what makes each one different.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
            @foreach([
                [
                    'occasion' => 'Bachelorette Party',
                    'icon'     => '♛',
                    'copy'     => 'Keep the bride tribe together for a full night out. We route groups through River North, Wicker Park, the West Loop, or suburban bars and restaurants. Multi-stop itineraries are our specialty. One vehicle, one group, zero parking stress.',
                ],
                [
                    'occasion' => 'Birthday Celebration',
                    'icon'     => '✦',
                    'copy'     => 'Whether it is a 21st, a 30th, or a milestone 50th, we make the night feel as big as the occasion. Groups from New Lenox, Frankfort, and Mokena regularly book us for dinner runs into Chicago or multi-stop suburb nights.',
                ],
                [
                    'occasion' => 'Prom Night',
                    'icon'     => '✦',
                    'copy'     => 'We serve prom groups from New Lenox, Joliet, and the southwest suburbs every spring. Our chauffeurs are punctual, professional, and focused on keeping your group safe from pickup through drop-off.',
                ],
                [
                    'occasion' => 'Wedding Party',
                    'icon'     => '♛',
                    'copy'     => 'We coordinate bridal party transportation, guest shuttles, and getaway vehicles for weddings across Will County and DuPage County. Tell us your venue and timeline and we handle the rest.',
                ],
                [
                    'occasion' => 'Concert or Sporting Event',
                    'icon'     => '✦',
                    'copy'     => 'United Center, Wrigley Field, Soldier Field, Guaranteed Rate Field, and Allstate Arena are all in our regular routing. We drop your group at the gate and pick you up curbside after the final buzzer, no surge pricing.',
                ],
                [
                    'occasion' => 'Quinceañera Court',
                    'icon'     => '♛',
                    'copy'     => 'A quinceañera deserves a grand entrance. We transport the birthday girl, her court of honor, damas, and chambelanes in style. Multi-stop coordination from home to church to photo shoot to reception is something we do often.',
                ],
            ] as $occ)
            <div style="background: var(--white); padding: 1.75rem; border-left: 3px solid var(--champagne);">
                <div class="flex items-center gap-3 mb-3">
                    <span style="color: var(--champagne); font-size: 1.2rem;">{{ $occ['icon'] }}</span>
                    <h4 style="font-family: var(--font-head); font-weight: 700; color: var(--navy); font-size: 1rem; letter-spacing: 0.02em;">{{ $occ['occasion'] }}</h4>
                </div>
                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.65;">{{ $occ['copy'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- ── Pricing callout ─────────────────────────────────────────── --}}
        <div style="background: var(--navy); padding: 1.5rem 2rem;">
            <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.7;">
                <strong style="color: var(--champagne);">Pricing in Chicagoland:</strong>
                Party bus rates in the New Lenox and Chicago suburban market typically run from $100 to $300 per hour, depending on the vehicle, amenities, and the time of year. Summer weekends and spring prom season book up earliest. We offer flat-rate pricing with no hidden charges. Call <a href="tel:+17083154445" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;"></a> or use our online quote form to get your rate in minutes.
            </p>
        </div>

    </div>
</section>
