@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Special Event Limousine — Party Limousine Rental in New Lenox and Plainfield, Illinois",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "New Lenox", "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Plainfield", "addressRegion": "IL", "addressCountry": "US" }
    ],
    "description": "Stop and Go Limo provides party limousine rentals for weddings, proms, birthdays, and all special events in New Lenox and Plainfield, Illinois. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Special Event Limousine | Party Limo Rental — New Lenox and Plainfield, IL",
    "url": "https://www.newlenoxlimoservice.com/special-event-limousine",
    "description": "Party limousine rental in New Lenox and Plainfield, Illinois. Weddings, proms, birthdays, and special events. On-time, every time. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Our Services", "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Special Event Limousine", "item": "https://www.newlenoxlimoservice.com/special-event-limousine" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Special Events"
    metaDescription="Make your event unforgettable with a party limousine in Chicagoland. Weddings, proms, birthdays, and celebrations of all kinds. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-special-event.jpg"
    ogImageAlt="Special event limousine rental in New Lenox and Plainfield, Illinois"
>
    <x-sections.category-hero
        heading="Special Event"
        headingBold="Limousine Service"
        :headingTwoLines="false"
        subtitle="For every milestone, every celebration, every occasion"
        description="Stop & Go Airport Shuttle Service, Inc. provides special event limousine service for every occasion. We serve weddings, proms, quinceañera celebrations, birthday parties, bachelorette nights, corporate galas, graduation celebrations, sports events, and concerts. Our fleet includes stretch limousines, luxury SUVs, Mercedes Sprinter vans, and full-size party buses. Every chauffeur is professional, uniformed, and background-checked. We cover all of Chicagoland, from the southwest suburbs through Aurora and Schaumburg, north to Waukegan, and into every Chicago neighborhood. Flat-rate pricing, no hidden fees. Call us or request a quote online to start planning."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-special-event.jpg"
        imagePosition="center 50%"
    />

    <x-sections.info-strip
        headingPrefix="Enjoy a"
        headingBold="Ride Full of Luxury"
        heading=""
        body="Custom limousine services are designed specifically for special events, providing a touch of luxury and sophistication."
    />

    <x-sections.party-limo-image
        heading="Party Limousine Services for"
        headingBold="Special Events"
        body="Celebrate in style with our spacious, fully equipped party limousines. We keep the energy high from pickup to drop off. Whether it's a birthday bash, prom night, bachelor or bachelorette party, or a night out with friends, our limos bring the perfect mix of comfort, fun, and head-turning appeal to every special occasion."
        image="/images/sections/limousine-comfort.jpg"
        imageAlt="Group enjoying a party limousine, Stop and Go Airport Shuttle in New Lenox, Illinois"
        imageAspect="4/3"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Special Event Limo"
        headingTail="Today"
        body="Planning a special event? Tell us your group size, destination, and date. Our team will match you with the perfect vehicle and get back to you fast."
        image="/images/sections/classy-limo.jpg"
        imageAlt="Elegant white limousine ready for a special event, Stop and Go Airport Shuttle in New Lenox, Illinois"
        imageAspect="4/3"
        imageObjectPosition="center"
        formAction="/get-a-quote"
        submitLabel="Send Message"
    />

    {{-- standard sections for all --}}
    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
