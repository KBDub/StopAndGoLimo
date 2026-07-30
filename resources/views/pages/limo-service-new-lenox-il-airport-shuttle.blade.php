@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "New Lenox IL Limo Service and Airport Shuttle",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service, Inc.",
        "telephone": "{!! $clientConfig->phone_raw !!}",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        }
    },
    "areaServed": { "@@type": "City", "name": "New Lenox", "addressRegion": "IL" },
    "description": "24/7 limo service and airport shuttle from New Lenox, IL to O'Hare and Midway. Flat-rate pricing, flight tracking, and guaranteed on-time pickups."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",          "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://newlenoxlimoservice.com/service-areas" },
        { "@@type": "ListItem", "position": 3, "name": "New Lenox Limo and Airport Shuttle", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="New Lenox IL Limo Service & Airport Shuttle"
    metaDescription="24/7 limo service and airport shuttle from New Lenox IL to O'Hare and Midway. Flat-rate pricing, real-time flight tracking, and guaranteed on-time pickups."
    currentPage="service-areas"
    ogImage="/images/heroes/airport-ohare-midway.jpg"
    ogImageAlt="O'Hare International Airport, served by Stop & Go Airport Shuttle Service, Inc. limo service from New Lenox IL"
>
    <x-sections.category-hero
        heading="New Lenox IL Limo Service"
        headingBold="& Airport Shuttle"
        :headingTwoLines="false"
        subtitle="Stress-free transfers to O'Hare and Midway, 24 hours a day"
        description="Stop & Go Airport Shuttle Service, Inc. takes the stress out of airport travel for New Lenox and Will County residents. Our limo and shuttle service runs 24 hours a day to O'Hare and Midway, with flat-rate pricing and no hidden fees. We know the routes. We know the timing. We know how I-80 and I-55 behave during rush hour, during a snowstorm, and during construction season. A rideshare app cannot promise you a driver will show up. We can. Every pickup is a scheduled commitment, not a guess. Our chauffeurs arrive early, track your flight in real time, and wait if your plane is delayed. We serve the entire 60451 zip code and surrounding communities including Frankfort, Mokena, Joliet, and Homer Glen. Corporate travelers, families heading on vacation, wedding guests, and first-time flyers all trust us with their airport runs every day. Book your next trip online or call anytime."
        buttonText="Book Airport Shuttle"
        buttonHref="/bookings-reservations"
        image="/images/heroes/airport-ohare-midway.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Your Airport Run,"
        headingBold="Handled"
        subtitle="Local expertise you can count on every single time"
        body="Stop & Go Airport Shuttle Service, Inc. has been running airport transfers from New Lenox to O'Hare and Midway since 2015. We know I-80 at 5 a.m. We know Tri-State construction season. We know what it looks like when a flight lands 30 minutes early and the passenger is already at baggage claim. Our dispatchers monitor every flight in real time so your chauffeur is there when you land, not when the app says you should land."
        buttonText="View All Services"
        buttonHref="/our-services"
        image="/images/sections/ohare-international-airport.jpg"
        imageAlt="O'Hare International Airport, served by Stop & Go Airport Shuttle Service, Inc. from New Lenox, Illinois"
        :inverted="false"
    />

    <x-sections.info-strip
        headingBold="Flat-Rate Pricing,"
        heading="No Surprises"
        body="Every airport transfer is a flat rate. No surge pricing when a storm rolls in. No meter ticking while you wait for your bags. No extra charge because rush hour added 20 minutes to the route. You see the price when you book and that is the price you pay. We serve O'Hare, Midway, Rockford, Milwaukee, and Gary airports from New Lenox and all surrounding communities."
    />

    <x-sections.airport-vehicle-guide />

    <x-sections.airport-chauffeur-detail />

    <section id="airport-logistics" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    Know Your <strong>Airport Route</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Our chauffeurs plan every trip around real conditions, not estimated drive times.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div style="background: var(--navy); padding: 2rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.5rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-4">
                        O'Hare International (ORD)
                    </h3>
                    <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1.05rem; line-height: 1.6;" class="mb-4">
                        Approximately 45 miles from New Lenox via I-80 East to I-294 North. Standard drive time is 55 to 70 minutes. During morning rush hour or active construction on the Tri-State Tollway, allow 90 minutes or more. We recommend booking your pickup at least 3.5 hours before your departure time.
                    </p>
                    <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.5;">
                        We track your return flight and adjust pickup timing if your arrival gate changes.
                    </p>
                </div>
                <div style="background: var(--navy); padding: 2rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.5rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-4">
                        Midway International (MDW)
                    </h3>
                    <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1.05rem; line-height: 1.6;" class="mb-4">
                        Approximately 36 miles from New Lenox via I-80 East to I-55 North. Standard drive time is 45 to 60 minutes, though I-55 traffic between Joliet and Chicago can be unpredictable. We recommend booking your pickup at least three hours before departure.
                    </p>
                    <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.5;">
                        Our chauffeurs meet you inside the terminal at the designated pickup area, not at the curb.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/new-lenox-airport.png"
        imageAlt="Airport transportation from New Lenox, Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="What Every Pickup Includes"
        descSubheading="No add-ons. No surprises."
        descBody="Every airport transfer with Stop & Go Airport Shuttle Service, Inc. comes with the following as standard:"
        :descBullets="[
            'Real-time flight tracking from booking through landing',
            'Professional meet-and-greet inside the terminal',
            'Luggage assistance to and from the vehicle',
            'Flat-rate pricing locked in at time of booking',
            'On-time guarantee with a backup plan if traffic changes',
            'Uniformed, background-checked chauffeur on every trip',
        ]"
        descClosing="We serve O'Hare, Midway, Rockford, Milwaukee, and Gary airports. Call us or book online 24 hours a day."
        descImage="/images/sections/new-lenox-airport.png"
        descImageAlt="Airport pickup service from New Lenox, Illinois"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="new-lenox" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
