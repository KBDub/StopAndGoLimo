@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicago Golf Party Bus — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Tee off in style with a chauffeured golf group bus from New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",             "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",   "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Golfing Party Bus","item": "https://www.newlenoxlimoservice.com/chicago-golf-party-bus" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Golfing Party Bus Chicago | Stop and Go Limo — New Lenox, IL"
    metaDescription="Tee off in style with a chauffeured golf group bus from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-chicago-golf-party-bus.jpg"
    ogImageAlt="Golf party bus from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Chicago Golf"
        headingBold="Party Bus"
        :headingTwoLines="false"
        subtitle="Discover the Joy of Seamless Journeys"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-chicago-golf-party-bus.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Premier"
        headingBold="Golf Party Bus"
        heading="Services in Chicago Area"
        body="Relax on the green with a round of golf using our Golf Party Bus Rental in Chicago for stylish transportation. Enjoy a Chicago golf outing party bus with spacious interiors, ample storage, and comfortable seating. Perfect for groups, our party bus rental for golf groups in Chicago ensures everyone travels together in comfort. Make your experience even better with a Chicago Golf Party Bus, combining convenience and luxury to make your golf outing memorable."
    />
        
    <x-sections.free-instant-quote
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-chicago-golf-fiq.jpg"
        imageAlt="Golf group arriving at a Chicago area golf course in a party bus"
        imageAspect="4/3"
        heading="Rent a Golf Outing"
        headingBold="Party Bus in Chicago"
        headingTail="Today"
        body="Whether it is a corporate golf outing or a group of friends heading to various Chicago area golf courses and tournaments, Stop & Go Airport Shuttle Service has the perfect limo for you. Our fleet is the preferred choice for Chicago golf outing party bus, offering exceptional customer service, spacious party buses, ample storage for golf equipment, and onboard bathrooms to ensure you have everything needed for an outstanding experience. Choose a party bus rental for golf groups in Chicago or a luxury golf party bus in Chicago to travel in comfort and style. Make your next trip even more memorable with a Chicago Golf Party Bus and call us today to make your golf outing a success."
    />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />
        
</x-layouts.page>
