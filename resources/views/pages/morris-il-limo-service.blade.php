@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Morris, IL",
    "url": "{{ request()->url() }}",
    "telephone": "(815) 585-6922",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "areaServed": { "@@type": "City", "name": "Morris", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Morris, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Morris Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Morris, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Morris, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Morris"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Morris, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/morris-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        body="Reliable and on-time transportation for airport trips, events, and corporate travel. Get a fast Morris IL limo quote or book a Morris Illinois party bus rental today."
        image="/images/sections/morris-limo.png"
        imageAlt="White limousine in Morris, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Reliable & On-Time"
        heading="Every Trip"
        body="Stop & Go provides Morris with 24/7 airport shuttle service to O'Hare and Midway, limousine service for weddings and events, and party bus rentals for celebrations. Serving downtown Morris, Grundy County, and surrounding areas, our professional chauffeurs deliver reliable, comfortable transportation for every occasion."
    />

    <x-sections.three-steps :inverted="true" />

    <x-sections.party-limo-image
        heading="Complete Transportation Solutions for"
        headingBold="Morris Residents"
        body="As Morris's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services including Morris airport shuttle for timely arrivals and departures, limousine service for weddings and special occasions, party bus rental for celebrations and group travel, corporate transportation for business meetings, and wedding vehicles to make your special day seamless. Our intimate knowledge of Morris, from the Illinois River to downtown, ensures efficient and reliable transportation throughout the community."
        image="/images/sections/morris-airport.png"
        imageAlt="Morris Municipal Airport, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
    />

    <x-sections.travel-in-style
        heading="Morris Airport"
        headingBold="Shuttle Service"
        body="Our Morris airport shuttle provides 24/7 service to O'Hare and Midway with guaranteed on-time pickups. Serving Downtown Morris, Rockwell Estates, West Acres, Saratoga Estates, and Nettle Creek Country Club, our Morris airport shuttle ensures stress-free travel with luggage assistance, flight monitoring, and expert navigation for efficient Morris to O'Hare and Morris to Midway trips."
        image="/images/sections/morris-family-center.png"
        imageAlt="Morris Illinois Family Center — Stop and Go Airport Shuttle"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
