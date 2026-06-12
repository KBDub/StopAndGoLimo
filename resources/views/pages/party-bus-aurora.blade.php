@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Party Bus Rental — Aurora, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Aurora", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Fun, safe party bus rental in Aurora, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",            "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",        "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Party Bus Aurora","item": "https://www.newlenoxlimoservice.com/party-bus-aurora" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Party Bus Rental Aurora, IL | Stop and Go Limo"
    metaDescription="Fun, safe party bus rental in Aurora, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Party bus rental in Aurora, Illinois"
>
    <x-sections.category-hero
        heading=""
        headingBold="Party Bus Aurora"
        subtitle="your local Party Buses for every occasion"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-party-bus-aurora.png"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="The"
        headingBold="Ultimate Party Bus"
        heading="Experience in Aurora"
        body="Looking for the ultimate way to party in Aurora? Stop settling for ordinary nights. Our party bus Aurora service brings the celebration to you with luxury, booming music, dazzling lights, and an energy-filled ride your friends will talk about for years."
    />

    <x-sections.three-steps :invertBg="true" />

    <x-sections.free-instant-quote
        rightVariant="description"
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        descHeading="Why Choose Us?"
        descSubheading="Our Aurora Party Bus Will Turn Any Night into an Epic Celebration"
        :descBullets="[
            'Luxury interiors and premium sound systems: You feel the energy the moment you step onboard. Great music, great vibes, great ride.',
            'Room for your whole crew: Our buses hold large groups so nobody gets left behind.',
            'Professional, friendly drivers: We handle the driving so you can stay focused on the fun.',
            'Flexible rental packages: We match your schedule, group size, and party style.',
            'Fully licensed and insured: Your safety matters as much as your good time.',
        ]"
        descClosing="Aurora locals trust us for unforgettable nights and easy planning. Our buses book fast, so don't wait to lock in your date."
    />

    <x-sections.travel-in-style
        heading="Where the Fun"
        headingBold="Never Ends"
        body="Ready to celebrate in style? Climb into our fully loaded party bus and feel the energy the moment you step on. Booming music, vibrant lights, plush seating, and nonstop fun from start to finish. Your friends will talk about this night for years."
        buttonText="Book Your Party Bus"
        buttonHref="/bookings-reservations"
        image="/images/sections/party-bus-aurora.jpg"
        imageAlt="Guests celebrating on a party bus in Aurora, Illinois"
        imagePosition="right"
        background="navy"
    />

    <x-sections.our-mission
        image="/images/heroes/hero-party-bus-aurora.png"
        imageAlt="Guests celebrating on a Stop and Go party bus in Aurora, Illinois"
    />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation"
        headingBold="Solutions"
        body="Stop and Go is a trusted party bus company serving Aurora and the surrounding area. We offer full-service rides for weddings, proms, birthdays, bachelorette parties, concerts, and any night you want to celebrate. Our professional drivers and well-maintained fleet keep every ride safe, comfortable, and full of energy. We turn ordinary nights into celebrations your friends will talk about for years."
        buttonText="Contact Us"
        buttonHref="/contact"
        directions="Serving Aurora, Naperville, and all of Chicagoland · Perfect for birthdays, bachelorette parties, concerts, and special events · Party bus rental available 24/7"
    />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />    

</x-layouts.page>
