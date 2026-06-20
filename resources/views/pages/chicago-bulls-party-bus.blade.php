@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicago Bulls Party Bus — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Group rides to the United Center for Bulls games from New Lenox, Plainfield, and the Southwest suburbs. Chicago Bulls party bus. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",          "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Chicago Bulls Party Bus", "item": "https://www.newlenoxlimoservice.com/chicago-bulls-party-bus" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicago Bulls Party Bus | Stop and Go Limo — New Lenox, IL"
    metaDescription="Group rides to the United Center for Bulls games from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-chicago-bulls-party-bus.jpg"
    ogImageAlt="Chicago Bulls party bus from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Chicago Bulls Party Bus"
        headingBold="to the United Center"
        :headingTwoLines="false"
        subtitle="Ride together, cheer together, celebrate together"
        description="Stop & Go Airport Shuttle Service, Inc. brings your group to Chicago Bulls games at the United Center in style. We serve communities throughout Chicagoland, including the southwest, west, north, and northwest suburbs, with party bus service designed for groups who want to make the whole evening part of the celebration. Skip the parking and the postgame gridlock. Our chauffeurs handle every detail of the trip so your crew can focus on the fun. Our party buses are loaded with premium sound, LED cabin lighting, and comfortable seating for 20 to 40-plus guests. Whether you are organizing a work outing, a birthday party, a group of longtime season ticket holders, or a special night out, we set the right tone from the moment the doors open. Every trip is flat-rate. You know the total cost before you book. Our professional, background-checked drivers have experience navigating game-night Chicago so nothing interrupts your night. Book your Bulls party bus today and give your group a ride that matches the energy of the game."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-chicago-bulls-party-bus.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Ride the Chicago Bulls"
        headingBold="Party Bus"
        heading="and Arrive in Style at the United Center"
        body="For NBA enthusiasts and Chicago Bulls fans, Stop & Go offers United Center Party Buses, including the Bulls Party Bus. Ride in style with our Chicago Bulls Party Bus and enjoy a luxurious, stress-free trip to the game. Arrive ready to cheer on your team at the iconic United Center, home to legends like Michael Jordan and host to thrilling rivalries and major events."
    />

    <x-sections.free-instant-quote
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-chicago-bulls-fiq.png"
        imageAlt="Chicago Bulls game day party bus at the United Center"
        imageAspect="4/3"
        heading="Elevate Your Chicago Bulls"
        headingBold="Game Day"
        headingTail="with Our Buses"
        bodyHtml="Experience Chicago&#8217;s United Center at its finest! Rent a Stop &amp; Go Party Bus and ride in style and comfort with a Chicago Bulls Party Bus.<br><br><a href='/rates/' style='color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;'>View our Bulls Party Bus Packages</a> and enjoy stress-free Stop &amp; Go Bulls Transportation to the game, celebrate post-game victories, and party on a luxurious Party Bus to the Bulls Game, where legends like Michael Jordan made this arena iconic!"
    />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />
        
</x-layouts.page>
