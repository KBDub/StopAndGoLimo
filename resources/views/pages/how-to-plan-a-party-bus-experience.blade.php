@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "How to Plan a Party Bus Experience in Chicagoland",
    "publisher": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "(815) 585-6922",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451"
        }
    },
    "description": "A practical guide to planning a party bus experience in the Chicago southwest suburbs. Choose the right vehicle, learn what amenities to expect, and get pricing context for New Lenox, Naperville, Joliet, and all of Chicagoland.",
    "about": {
        "@@type": "Service",
        "name": "Party Bus Rental",
        "areaServed": "Chicagoland, IL"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",      "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Party Bus", "item": "https://newlenoxlimoservice.com/party-bus-rental-chicago" },
        { "@@type": "ListItem", "position": 3, "name": "How to Plan a Party Bus Experience", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="How to Plan a Party Bus Experience in Chicagoland"
    metaDescription="Wondering how to plan the perfect party bus experience near New Lenox, Naperville, or Joliet IL? Stop & Go covers how to choose the right bus, what amenities to expect, and what it costs."
    currentPage="our-services"
    ogImage="/images/heroes/hero-party-bus-interior.png"
    ogImageAlt="Luxury party bus interior, Stop and Go Airport Shuttle Service Inc., New Lenox IL"
>
    <x-sections.category-hero
        heading="How to Plan a"
        headingBold="Party Bus Experience"
        :headingTwoLines="false"
        subtitle="Everything your group needs to know before you book in Chicagoland"
        description="Planning a party bus in the Chicago southwest suburbs does not have to be complicated. Stop & Go Airport Shuttle Service, Inc. has been moving groups across New Lenox, Naperville, Joliet, Aurora, Frankfort, Mokena, and all of Chicagoland since 2009. Whether you are organizing a bachelorette, a milestone birthday, a prom, a wedding party send-off, a concert run to the United Center, or a tailgate at Soldier Field, the right party bus turns your group ride into part of the celebration itself. This guide answers the questions we hear most often: what size bus do we need, what amenities come standard, and what does it cost? Our chauffeurs are background-checked, uniformed, and professionally trained. Every vehicle in our fleet is inspected and maintained to strict safety standards. We also handle airport group transfers from O'Hare and Midway for groups traveling in together. Call us anytime or book online. We are available 24 hours a day, every day of the year."
        buttonText="Get a Free Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-party-bus-interior.png"
        imagePosition="center center"
    />

    {{-- ═══════════════════════════════════════════════════
         Section 1 — Vehicle Match Guide
         Answers: "What size party bus do I need?" and
         "What occasions are best for a party bus near me?"
    ══════════════════════════════════════════════════════ --}}
    <section id="vehicle-match" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

            <div class="max-w-3xl mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                    How to Choose the Right Party Bus for Your Group
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.7;">
                    The most common question we hear is: "What size bus do we need?" Start with your headcount. A bus that is too small cramps the experience, and one that is too large feels hollow. Once you know how many people are coming, match the vehicle to the mood of the event. A bachelorette party and a corporate outing call for different atmospheres even if the guest count is the same.
                </p>
            </div>

            {{-- Size guide cards --}}
            <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                Party Bus Size Guide
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-16">
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

            {{-- Occasions grid --}}
            <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-4">
                Popular Party Bus Occasions Across Chicagoland
            </h3>
            <p style="font-family: var(--font-body); font-size: 1.1rem; color: var(--slate); line-height: 1.7; max-width: 3xl;" class="mb-8">
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

            <div style="background: var(--navy); padding: 1.5rem 2rem;">
                <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--cloud); line-height: 1.7;">
                    <strong style="color: var(--champagne);">Pricing in Chicagoland:</strong>
                    Party bus rates in the New Lenox and Chicago suburban market typically run from $100 to $300 per hour, depending on the vehicle, amenities, and the time of year. Summer weekends and spring prom season book up earliest. We offer flat-rate pricing with no hidden charges. Call <a href="tel:+18155856922" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">(815) 585-6922</a> or use our online quote form to get your rate in minutes.
                </p>
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════
         Section 2 — On-Board Experience + Trust Signals
         Answers: "What amenities come on a party bus?"
         and "Why book with Stop & Go?"
    ══════════════════════════════════════════════════════ --}}
    <section id="on-board-experience" style="background: var(--navy); scroll-margin-top: 80px;">
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

                {{-- Amenities list --}}
                <div>
                    <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--champagne); font-weight: 600; letter-spacing: 0.01em;" class="mb-6">
                        Amenities That Come Standard
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach([
                            ['feature' => 'Premium sound system',          'detail' => 'Bluetooth-connected, concert-quality audio so your playlist drives the night.'],
                            ['feature' => 'LED and fiber-optic lighting',   'detail' => 'Color-adjustable cabin lighting that sets any mood, from mellow to full party mode.'],
                            ['feature' => 'Spacious leather seating',       'detail' => 'Comfortable seats with room to stand, move, and actually enjoy the ride together.'],
                            ['feature' => 'Climate control',                'detail' => 'Year-round cabin comfort whether you are heading to a July concert or a January prom.'],
                            ['feature' => 'USB charging at every seat',     'detail' => 'Keep phones charged all night. Every photo, every video, no dead batteries.'],
                            ['feature' => 'Cooler and bar setup',           'detail' => 'Beverage cooler included. BYOB where permitted. We will confirm the details when you book.'],
                            ['feature' => 'Uniformed, professional chauffeur', 'detail' => 'Background-checked, licensed, punctual, and focused on your group the entire time.'],
                        ] as $item)
                        <li style="padding: 1rem 0; border-bottom: 1px solid rgba(255,255,255,0.08); display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="color: var(--champagne); font-weight: 700; font-size: 1.1rem; flex-shrink: 0; margin-top: 0.1rem;">✓</span>
                            <div>
                                <p style="font-family: var(--font-head); font-weight: 600; color: var(--white); font-size: 0.95rem; margin-bottom: 0.2rem;">{{ $item['feature'] }}</p>
                                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.55;">{{ $item['detail'] }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Group logistics + trust copy --}}
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
                        <a href="/get-a-quote"
                           style="display: inline-block; background: var(--champagne); color: var(--navy); font-family: var(--font-head); font-weight: 700; font-size: 1rem; padding: 0.9rem 2rem; letter-spacing: 0.04em; text-decoration: none;">
                            Get a Free Instant Quote
                        </a>
                        <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.85rem; line-height: 1.5;" class="mt-3">
                            or call <a href="tel:+18155856922" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">(815) 585-6922</a> anytime, 24 hours a day
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-sections.three-steps />

    <x-sections.free-instant-quote
        heading="Ready to book your"
        headingBold="party bus experience?"
        headingTail=""
        image="/images/heroes/hero-party-bus-chicago.webp"
        imageAlt="Luxury party bus serving New Lenox, Naperville, and all of Chicagoland"
        imageAspect="4/3"
        imageObjectPosition="center center"
        rightVariant="description"
        descHeading="We Serve All of Chicagoland"
        descSubheading="Party buses for every group, every occasion"
        descBody="From the southwest suburbs to downtown Chicago and everything in between, Stop &amp; Go gets your group there together and on time."
        :descBullets="[
            'New Lenox, Frankfort, Mokena, Joliet, Lockport',
            'Naperville, Aurora, Bolingbrook, Plainfield',
            'Orland Park, Tinley Park, Homer Glen, Lemont',
            'Chicago, River North, Wicker Park, West Loop',
            'O\'Hare and Midway airport group pickups available',
        ]"
        descClosing="Call (815) 585-6922 or fill out the form. We are available 24 hours a day."
        descImage="/images/heroes/hero-party-bus-chicago.webp"
        descImageAlt="Party bus exterior, Stop and Go Airport Shuttle Service Inc."
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="party-bus" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
