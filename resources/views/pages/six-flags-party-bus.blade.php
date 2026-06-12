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
        rightVariant="description"
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        descHeading="Why Choose Us?"
        descSubheading="Your Six Flags Adventure Starts the Moment You Step Onboard"
        :descBullets="[
            'Door-to-door group pickup: We collect your whole crew so no one drives, parks, or gets separated.',
            'Premium sound systems and LED lighting: The party starts on the way there, not when you arrive.',
            'Professional, licensed drivers: We handle the route so your group stays safe and on schedule.',
            'Flexible packages for any group size: Family trips, school groups, birthday parties, and corporate outings all welcome.',
            'Fully insured and permitted: Ride with confidence knowing every detail is handled.',
        ]"
        descClosing="Six Flags trips book fast on peak weekends. Lock in your date early and leave the driving to us."
    />

</x-layouts.page>
