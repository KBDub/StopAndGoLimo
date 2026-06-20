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
    title="Bus Rental | Stop and Go Limo — New Lenox, IL"
    metaDescription="Latest-model bus rental for any group occasion in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-new-bus-rental.jpg"
    ogImageAlt="Bus rental in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Party Bus Rental"
        headingBold="in New Lenox and Plainfield"
        :headingTwoLines="false"
        subtitle="Brand-new luxury buses for birthdays, proms, and every celebration"
        description="Stop & Go Airport Shuttle Service, Inc. offers party bus rental in New Lenox, Plainfield, and throughout all of Chicagoland. Our newest buses are the perfect way to celebrate any occasion in style. Whether you are planning a birthday night out, a bachelorette party, a prom send-off, a quinceañera arrival, a graduation celebration, or a group trip to a concert or sporting event in Chicago, our luxury party buses deliver a VIP experience from the moment you step on board. Expect premium interiors with LED lighting, top-of-the-line sound systems, comfortable seating, and the kind of energy that makes every ride an event in itself. Every bus comes with a professional, background-checked chauffeur who handles the driving, routing, and timing so your group can focus on celebrating. We serve New Lenox, Plainfield, Joliet, Frankfort, Mokena, Homer Glen, Orland Park, and all surrounding communities, as well as western, north, and northwest suburban communities throughout Chicagoland. Our pricing is flat-rate and all-inclusive. No surprise fees. Book early, because party buses for prom season and summer weekends fill fast."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
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

</x-layouts.page>
