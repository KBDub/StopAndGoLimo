@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Party Bus Rentals Naperville IL",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        }
    },
    "areaServed": { "@@type": "City", "name": "Naperville", "addressRegion": "IL" },
    "description": "Party bus rentals in Naperville, IL for birthdays, bachelorettes, proms, weddings, and corporate events. Professional chauffeurs."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",          "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://newlenoxlimoservice.com/service-areas" },
        { "@@type": "ListItem", "position": 3, "name": "Naperville IL Party Bus Rentals", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Party Bus Rentals in Naperville IL"
    metaDescription="Party bus rentals in Naperville, IL for birthdays, bachelorettes, proms, weddings, and corporate events. Professional chauffeurs, flat-rate pricing."
    currentPage="service-areas"
    ogImage="/images/heroes/naperville-party-bus-services.png"
    ogImageAlt="Party bus rentals in Naperville IL, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="Naperville IL"
        headingBold="Party Bus Rentals"
        :headingTwoLines="false"
        subtitle="Premium group transportation for every occasion in the Naperville area"
        description="Stop & Go Airport Shuttle Service, Inc. provides Naperville's most reliable party bus rentals for birthdays, bachelorette parties, proms, weddings, corporate events, and night out transportation throughout the Fox Valley and Chicagoland. We have been serving Naperville and surrounding communities since 2015 with a fleet of well-maintained party buses and uniformed, background-checked chauffeurs. Our party buses are equipped with premium sound systems, LED lighting, leather seating, and room for your entire group to relax and enjoy the ride together. No one has to drive and no one has to coordinate pickups. We pick your group up, take you where you want to go, and bring you home safely at the end of the night. We also provide flat-rate airport transfers to O'Hare and Midway for Naperville travelers. Corporate executives, wedding parties, prom groups, quinceañera celebrations, and sports fans all count on us for dependable group transportation. or book online today."
        buttonText="Book a Party Bus"
        buttonHref="/get-a-quote"
        image="/images/heroes/naperville-party-bus-services.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Naperville Nights,"
        headingBold="Covered"
        subtitle="From downtown Naperville to Chicago and everywhere in between"
        body="Stop & Go has been serving the Naperville area with professional group transportation since 2015. Whether your group is heading to downtown Naperville for dinner and a night out, going to a concert at Ribfest or another local event, or making a trip into Chicago for a Bears game or show, our party buses keep everyone together and on time. Our chauffeurs know DuPage and Will County roads and plan around traffic before it becomes a problem."
        buttonText="View Our Services"
        buttonHref="/naperville-airport-shuttle-limo-service"
        image="/images/sections/naperville-limo-service.jpg"
        imageAlt="Party bus rental in Naperville, Illinois with Stop and Go"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Every Occasion in"
        heading="Naperville, Covered"
        body="Our Naperville party bus rentals serve birthdays, bachelorette parties, bachelor parties, prom and homecoming nights, weddings and rehearsal dinners, quinceañeras, corporate team events, concerts at Chicago-area venues, and sporting events. We serve Naperville, Lisle, Downers Grove, Bolingbrook, Woodridge, and surrounding communities."
    />

    <section id="naperville-occasions" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    What Every Naperville Party Bus <strong>Includes</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Every vehicle in our fleet comes fully equipped and ready for your group.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Premium Sound System',  'desc' => 'Bluetooth audio so your group controls the playlist all night from their phones.'],
                    ['title' => 'LED Lighting',          'desc' => 'Color-changing cabin lights that create the right atmosphere for any occasion.'],
                    ['title' => 'Leather Seating',       'desc' => 'Spacious, comfortable seating with room to move, socialize, and enjoy the ride.'],
                    ['title' => 'Climate Control',       'desc' => 'Stay comfortable in any season, whether it is a summer birthday or a winter holiday party.'],
                    ['title' => 'Beverage Setup',        'desc' => 'Built-in cooler and bar area to keep drinks cold and within reach throughout the trip.'],
                    ['title' => 'Uniformed Chauffeur',   'desc' => 'Background-checked, professionally dressed driver for a safe, on-time experience.'],
                ] as $item)
                <div style="background: var(--navy); padding: 1.75rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">{{ $item['title'] }}</h3>
                    <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.naperville-night-out />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Plan your"
        headingBold="Naperville party bus"
        headingTail="today"
        image="/images/sections/naperville-fiq.jpg"
        imageAlt="Party bus rental in Naperville, Illinois"
        imageAspect="4/3"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Serving Naperville and the DuPage Area"
        descSubheading="Professional transportation since 2015"
        descBody="We serve Naperville and the surrounding area for every type of group event. Every rental includes:"
        :descBullets="[
            'Door-to-door pickup and drop-off anywhere in the Naperville area',
            'Flat-rate pricing with no surprise fees at the end of the night',
            'Professional chauffeur with local knowledge of Naperville and Chicagoland',
            'Group sizes from 10 to 55 passengers',
            'Airport transfers to O\'Hare and Midway available as part of any trip',
            'Available 24 hours a day, 7 days a week',
        ]"
        descClosing="Call or book online to reserve your Naperville party bus today."
        descImage="/images/sections/naperville-fiq.jpg"
        descImageAlt="Party bus service in Naperville, Illinois"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="naperville" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
