@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Bus Rental — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Latest-model bus rental for any group occasion in New Lenox, Plainfield, and the Southwest suburbs of Chicago, Illinois."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",       "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",   "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Bus Rental", "item": "https://www.newlenoxlimoservice.com/new-bus-rental" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Party Bus Rental"
    metaDescription="Rent the latest-model party and shuttle buses for any group occasion in Chicagoland. Weddings, events, airport runs, and more. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-new-bus-rental.jpg"
    ogImageAlt="Bus rental in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Party Bus Rental"
        headingBold="in New Lenox and Plainfield"
        :headingTwoLines="false"
        subtitle="Brand-new luxury buses for birthdays, proms, and every celebration"
        description="Stop & Go Airport Shuttle Service, Inc. offers party bus rental in New Lenox, Plainfield, and throughout all of Chicagoland. Our newest buses are ready for birthday nights, bachelorette parties, prom send-offs, quinceañera arrivals, graduation celebrations, and group trips to concerts or sporting events. Premium interiors with LED lighting, top-of-the-line sound, and comfortable seating. Every bus includes a professional, background-checked chauffeur. We serve New Lenox, Plainfield, Joliet, Frankfort, Mokena, and communities throughout Chicagoland. Flat-rate, all-inclusive pricing. Book early as prom season and summer weekends fill fast."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/heroes/hero-new-bus-rental.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Travel in"
        headingBold="Style"
        body="At Stop & Go Airport Shuttle Service Inc., we understand that celebrations are meant to be memorable and fun. That is why we offer premier party bus rental services in Plainfield, IL, designed to elevate your event to the next level of enjoyment and luxury. With our years of experience in providing high-end transportation solutions, you can trust us to deliver an unparalleled travel experience for any occasion."
    />

    <x-sections.free-instant-quote
        defaultVehicle="Chartered Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-new-bus-rental-fiq.jpg"
        imageAlt="Luxury bus rental in Plainfield and New Lenox, Illinois"
        imageAspect="4/3"
        heading="Book Your New Bus"
        headingBold="Rental Today"
        body="Stop & Go Airport Shuttle Service offers late-model buses for groups of all sizes in Plainfield, New Lenox, and the southwest suburbs of Chicago. Whether you are planning a corporate outing, a school trip, or a special celebration, our modern fleet delivers comfort, reliability, and style. Book early to secure your preferred date and enjoy a stress-free group travel experience with a professional chauffeur from start to finish."
    />

    <x-sections.why-choose-us />

    <x-sections.party-limo-image
        heading=""
        headingBold="Comfort"
        headingTail="You Can Count On"
        body="Our buses are climate-controlled, spacious, and designed with passenger comfort in mind. With clean interiors, smooth suspension, and ample legroom, every ride feels relaxed no matter the distance."
        image="/images/sections/new-bus-rental-comfort.jpg"
        imageAlt="Luxury bus interior with comfortable seating, Stop and Go Airport Shuttle in New Lenox, Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
    />

    <x-sections.review-slider />

    <x-sections.faq />

    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
