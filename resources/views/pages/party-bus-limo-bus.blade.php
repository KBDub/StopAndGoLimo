@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Party Bus Limo Bus",
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
    "areaServed": "Illinois",
    "description": "Party bus limo bus rentals for groups throughout Chicagoland. Birthdays, weddings, proms, concerts, and corporate events."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Our Services", "item": "https://newlenoxlimoservice.com/our-services" },
        { "@@type": "ListItem", "position": 3, "name": "Party Bus Limo Bus", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Party Bus Limo Bus"
    metaDescription="Party bus limo bus rentals for groups throughout Chicagoland. Birthdays, weddings, proms, concerts, and corporate events. Professional chauffeurs."
    currentPage="our-services"
    ogImage="/images/heroes/hero-party-bus-chicago.webp"
    ogImageAlt="Party bus limo bus, Stop & Go Airport Shuttle Service, Inc."
>
    <x-sections.category-hero
        heading="Party Bus"
        headingBold="Limo Bus"
        :headingTwoLines="false"
        subtitle="The luxury of a limousine with the space of a group bus"
        description="A party bus limo bus is the best of both worlds: the spacious interior of a group bus combined with the luxury finishes of a limousine. Stop & Go Airport Shuttle Service, Inc. operates a fleet of party bus limo buses serving New Lenox, Aurora, Naperville, Joliet, and all of Chicagoland. Whether you are celebrating a birthday, planning a bachelorette night, organizing a prom group, heading to a concert, or gathering a corporate team, our party bus limo buses keep everyone together in comfort and style. Premium sound systems, LED lighting, plush leather seating, and climate control come standard. Every vehicle is maintained to strict safety standards and every chauffeur is background-checked and uniformed. No one has to drive. No one has to coordinate pickups. The party starts the moment your group steps on board and does not stop until we drop you off at the end of the night. Call us or book online anytime."
        buttonText="Get a Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-party-bus-interior.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="The Party Starts"
        headingBold="on the Bus"
        subtitle="Everyone rides together. Nobody drives."
        body="Group events are more fun when nobody splits up. A party bus limo bus eliminates parking headaches, designated driver stress, and the problem of half the group getting separated on the way to the venue. Your group loads up together, enjoys premium amenities during the ride, and arrives as one at every stop on your itinerary. Our professional chauffeurs handle everything else."
        buttonText="View Our Fleet"
        buttonHref="/our-services"
        image="/images/sections/women-celebrating-limo.jpg"
        imageAlt="Group celebrating on a party bus limo bus with Stop & Go Airport Shuttle Service, Inc."
        :inverted="false"
    />

    <x-sections.info-strip
        headingBold="Ideal for Any"
        heading="Group Occasion"
        body="Our party bus limo buses are a great fit for birthdays, bachelorette parties, bachelor parties, proms and school dances, weddings and rehearsal dinners, concerts and sporting events, corporate outings, quinceañera celebrations, and holiday parties. No matter the occasion, the ride itself becomes part of the memory."
    />

    <x-sections.party-bus-occasions />

    <section id="amenities" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    What Comes <strong>Standard</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Every party bus limo bus in our fleet comes fully equipped for a great group experience.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Premium Sound System',     'desc' => 'Bluetooth-connected audio so your group controls the playlist from their phones.'],
                    ['title' => 'LED Party Lighting',       'desc' => 'Color-changing cabin lighting that sets the mood for any type of celebration.'],
                    ['title' => 'Leather Seating',          'desc' => 'Plush, comfortable seating with room to move around and socialize throughout the ride.'],
                    ['title' => 'Climate Control',          'desc' => 'Independent heating and cooling so your group stays comfortable in any season.'],
                    ['title' => 'Beverage Setup',           'desc' => 'Built-in cooler and bar area to keep drinks cold and accessible during the trip.'],
                    ['title' => 'Professional Chauffeur',   'desc' => 'Background-checked, uniformed driver focused entirely on a safe, on-time experience.'],
                ] as $a)
                <div style="background: var(--navy); padding: 1.75rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">{{ $a['title'] }}</h3>
                    <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;">{{ $a['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.party-bus-advantage />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Book your"
        headingBold="party bus"
        headingTail="today"
        image="/images/sections/luxurious-party-bus.png"
        imageAlt="Luxurious party bus limo bus interior, Stop & Go Airport Shuttle Service, Inc."
        imageAspect="4/3"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Group Travel Made Simple"
        descSubheading="We handle the logistics. You enjoy the night."
        descBody="Here is what every party bus limo bus rental includes:"
        :descBullets="[
            'Door-to-door pickup and drop-off at your chosen locations',
            'Flat-rate pricing with no hidden fees',
            'Background-checked, uniformed professional chauffeur',
            'Fully equipped vehicle ready at your pickup time',
            'On-time guarantee on every booking',
            'Available 24 hours a day for any occasion',
        ]"
        descClosing="Ready to plan your group event? or get a free quote online. We serve all of Chicagoland."
        descImage="/images/sections/luxurious-party-bus.png"
        descImageAlt="Luxurious party bus limo bus interior, Stop & Go Airport Shuttle Service, Inc."
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
