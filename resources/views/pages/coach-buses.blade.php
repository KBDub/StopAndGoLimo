@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Coach Bus Charters — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Large-group coach bus charters for Illinois and beyond. Serving New Lenox, Plainfield, Joliet, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",        "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",    "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Coach Buses", "item": "https://www.newlenoxlimoservice.com/coach-buses" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Coach Bus Rentals | Stop and Go Limo — New Lenox, IL"
    metaDescription="Charter coach bus rentals for groups of all sizes in New Lenox, Plainfield, and the Southwest suburbs. Professional drivers, pristine vehicles. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/coach-buses-hero.jpg"
    ogImageAlt="Charter coach bus available for group rentals at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Arrive in Unforgettable Style with"
        headingBold="Our Professional Chauffeurs"
        subtitle="Coach Buses"
        description="Spacious, comfortable charter coach buses for corporate events, sports teams, weddings, and group travel throughout the Southwest suburbs."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/coach-buses-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Rent a"
        headingBold="Charter Bus"
        subtitle="From Stop & Go Airport Shuttle Service Inc."
        body="We provide charter bus rentals to clients in New Lenox, Plainfield, and across the greater Chicago area. Our professional chauffeurs are committed to getting your group to the destination and back safely and on time. We welcome wedding parties, school groups, sports teams, vacationing groups, and anyone who wants reliable, stylish transportation without the stress of driving."
        note="A $200 deposit is required."
        image="/images/sections/party-smile-limo.jpg"
        imageAlt="Happy group smiling inside a limo with Stop and Go Airport Shuttle Service Inc."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        inverted=true
    />

    <x-sections.travel-in-style
        heading="Charter Bus for"
        headingBold="Sports Teams"
        body="Renting a coach bus is a great choice for sports teams. Traveling together helps the whole team stay connected and build camaraderie on the road. Players can focus and talk strategy on the way there, then relax on the way home. No one has to worry about driving, parking, or arranging rides. Our spacious charter buses give athletes plenty of room to stretch out and arrive comfortable and ready to perform."
        image="/images/sections/sports-teams-bus.jpg"
        imageAlt="Sports team members joining hands together before a game"
        :imageLeft="false"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
    />

    <x-sections.travel-in-style
        heading="Charter Bus for"
        headingBold="Wedding Parties"
        body="A charter bus makes wedding day travel easy and fun for everyone. The whole wedding party rides together to and from the venue, so no one gets lost and everyone arrives on time. Guests can skip the stress of finding parking, navigating unfamiliar routes, or arranging their own rides. Everyone sits back, relaxes, and keeps the celebration going. The couple can feel confident that reliable transportation is handled, while their bachelors, bachelorettes, and guests enjoy every mile."
        image="/images/sections/wedding-party-bus.jpg"
        imageAlt="Joyful wedding party celebrating outside the venue"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
    />

    <x-sections.travel-in-style
        heading="Charter Bus for"
        headingBold="Corporate Events"
        body="A charter bus removes the headache of coordinating individual rides and parking at corporate events. Everyone arrives together and on time. The ride also gives your team a chance to connect, review the agenda, and walk in ready. No logistics stress, just a smooth, professional arrival."
        image="/images/sections/comfort-event-bus.jpg"
        imageAlt="Comfortable charter bus ready for corporate event transportation"
        :imageLeft="false"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
    />

    <x-sections.travel-in-style
        heading="Charter Bus for"
        headingBold="Group Vacations"
        body="Group trips are exciting but can be hard to coordinate. A charter bus solves that. Everyone travels together in one vehicle, so no one gets left behind or lost. The shared ride gives your group more time to enjoy each other without the stress of traffic or unfamiliar routes. It is also more cost-efficient. One bus price covers everyone, instead of separate costs for gas, tolls, and parking. Sit back, relax, and let our professional drivers handle the road."
        image="/images/sections/women-celebrating-limo.jpg"
        imageAlt="Three women laughing and celebrating on a group trip with Stop and Go Limo"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
    />

    <x-sections.travel-in-style
        heading=""
        headingBold="Chicagoland Attractions"
        body="Chicago is packed with great places to visit. Spend time outdoors at Navy Pier, Lake Michigan, the Chicago Riverwalk, and Millennium Park. Skydeck Chicago offers some of the best views in the city. For science and art, visit the Shedd Aquarium, Lincoln Park Zoo, Field Museum, and Art Institute of Chicago. Sports fans can catch a game at Soldier Field, Wrigley Field, or the United Center. And no trip to Chicago is complete without authentic deep-dish pizza."
        image="/images/sections/chicago-skyline.jpg"
        imageAlt="Chicago skyline viewed from Lake Michigan"
        :imageLeft="false"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Charter Bus"
        headingTail="Today"
        body="Get a free instant quote for your next group trip. Whether you need a coach bus for a corporate outing, wedding, sports team, or group vacation, our professional drivers are ready to get your group there safely and on time."
        image="/images/sections/coach-bus-quote.jpg"
        imageAlt="Luxury coach bus ready for group charter service in New Lenox, Illinois"
        imageAspect="3/2"
        rightVariant="image"
    />

</x-layouts.page>
