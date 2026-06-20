@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Six Flags Party Bus — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Group party bus rides to Six Flags Great America from New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",              "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",    "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Six Flags Party Bus","item": "https://www.newlenoxlimoservice.com/six-flags-party-bus" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Six Flags Party Bus | Stop and Go Limo — New Lenox, IL"
    metaDescription="Group party bus rides to Six Flags Great America from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-six-flags-party-bus.jpg"
    ogImageAlt="Six Flags party bus from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Six Flags"
        headingBold="Party Bus"
        :headingTwoLines="false"
        subtitle="Discover the Joy of Seamless Journeys"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-six-flags-party-bus.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Travel in Style to"
        headingBold="Six Flags"
        heading="with Our Party Bus Service"
        body="Book a Six Flags Party Bus with Stop & Go Airport Shuttle Service for a stylish and comfortable journey. Enjoy reliable Six Flags transportation for family, friends, or corporate groups, and make your trip hassle-free with a party bus to Six Flags Great America in Chicago that ensures everyone arrives on time and in style."
    />

    <x-sections.free-instant-quote
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-six-flags-coaster.jpg"
        imageAlt="Riders on a roller coaster at Six Flags Great America, Chicago"
        imageAspect="4/3"
        heading="Enjoy a Hassle-Free Journey to"
        headingBold="Six Flags"
        headingTail="with Our Chicago Party Bus"
        bodyHtml='<a href="/bookings-reservations" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">Our Six Flags Party Bus</a> provides the perfect transportation solution for groups heading to and from <a href="/rates" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">Six Flags Great America in Chicago</a>. Whether you are planning a school trip, corporate outing, or family adventure, Stop &amp; Go Airport Shuttle Service makes it easy to travel together in comfort. Choose from our Chicago Six Flags party bus rental options, or get a <a href="/get-a-quote" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">luxury Six Flags party bus</a> quote and skip the hassle of parking while enjoying a fun, stress-free ride to the park.'
    />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />
        
</x-layouts.page>
