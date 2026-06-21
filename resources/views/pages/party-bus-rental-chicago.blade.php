@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Party Bus Rental — Chicago, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Chicago", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Luxury party bus and limo rental serving Chicago and the surrounding suburbs. Perfect for weddings, proms, birthdays, and every celebration. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",                "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Party Bus Chicago",       "item": "https://www.newlenoxlimoservice.com/party-bus-rental-chicago" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicago Party Bus"
    metaDescription="Luxury party bus rental in Chicago and Chicagoland. Perfect for birthdays, bachelorettes, proms, and group celebrations. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-party-bus-chicago.webp"
    ogImageAlt="Party bus rental serving Chicago, Illinois"
>
    <x-sections.category-hero
        heading="Party Bus and Limo Rental"
        headingBold="in Chicago and the Suburbs"
        :headingTwoLines="false"
        subtitle="Every occasion, every group, one trusted transportation company"
        description="Stop & Go Airport Shuttle Service, Inc. delivers luxury party bus and limousine transportation throughout Chicago and all of Chicagoland. Bachelorette parties, birthday nights, weddings, quinceañera celebrations, proms, concerts, and sporting events all welcome. Our fleet includes stretch limousines, luxury SUVs, Mercedes Sprinter vans, party buses, and coach buses. Every driver is professional, background-checked, and experienced in Chicago and the suburbs. Pickup and drop-off throughout all of Chicagoland. Flat-rate pricing, no surprise charges. Request a free quote online or call to reserve. We book fast on weekends."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-party-bus-chicago.webp"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        subtitle="Driven by certified drivers you can trust"
        body="Stop & Go delivers luxury party bus experiences for weddings, proms, birthdays, and every celebration."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/heroes/hero-party-bus-interior.png"
        imageAlt="Vibrant party bus interior with luxury seating, colorful lights, and entertainment system"
        inverted=true
        slideIn="left"
    />

    <x-sections.info-strip
        headingPrefix=""
        headingBold="Reliable & Stylish"
        heading="Party Bus and Limo Transportation"
        body="Stop & Go Party Bus Rental Chicago offers luxury limo party buses for weddings, proms, birthdays, and nights out. With sound systems, LED lights, full bars, and seating for 10–40, we provide unforgettable transportation from Joliet, Plainfield, New Lenox, Naperville, Aurora, and Chicago suburbs."
    />

    <x-sections.three-steps
        :inverted="true"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        descHeading="Why Choose Us?"
        descSubheading="Our Chicago Party Bus Turns Any Night into an Unforgettable Celebration"
        :descBullets="[
            'Luxury interiors and premium sound systems: The fun starts the moment you step onboard. Great music, great vibes, every time.',
            'Room for your whole crew: Our buses hold large groups so nobody gets left behind.',
            'Professional, friendly drivers: We handle the driving so you stay focused on the celebration.',
            'Flexible rental packages: We match your schedule, group size, and party style.',
            'Fully licensed and insured: Your safety matters as much as your good time.',
        ]"
        descClosing="Chicago locals trust us for unforgettable nights and easy planning. Our buses book fast, so lock in your date before it is gone."
    />

    <x-sections.travel-in-style
        heading="Party Bus Rental"
        headingBold="Chicago"
        subtitle="for Every Occasion"
        body="Our Chicago party bus rental offers luxury transportation for weddings, proms, birthdays, and parties. Serving Naperville, Aurora, Joliet, Plainfield, New Lenox, Bolingbrook, Romeoville, and all Chicago suburbs, we provide unforgettable celebrations with professional drivers, sound systems, LED lights, full bars, and seating for 10 to 40 passengers."
        buttonText="Book Party Bus"
        buttonHref="/bookings-reservations"
        image="/images/heroes/party-bus-rental-chicago.png"
        imageAlt="Luxury party bus exterior serving Chicago and the surrounding suburbs"
        :imagePosition="'right'"
        inverted=true
    />

    <x-sections.our-services />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation"
        headingBold="Solutions"
        buttonText="Contact Us"
        buttonHref="/get-a-quote"
        directions="Trusted Chicago party bus company · Reliable service for any celebration · Custom trips for any group or event · Serving all Chicago neighborhoods and suburbs · Perfect for birthdays, bachelor and bachelorette parties, concerts, and special events · Chicago party bus rental available"
    >As a trusted Chicago party bus provider, Stop &amp; Go offers complete luxury transportation services including wedding party buses, prom limo buses, birthday party buses, bachelor and bachelorette shuttles, and concert and sporting event transportation. Our expert chauffeurs and modern fleet ensure safe, comfortable, and reliable service throughout Naperville, Aurora, Joliet, and all Chicago suburbs, with easy access to I-88, I-355, and I-55 for stress-free transportation to downtown Chicago, O&rsquo;Hare, and Midway.
    </x-sections.text-block-slide-in>

    <x-sections.city-info-grid
        :boxes="[
            [
                'heading' => 'Naperville Party Bus',
                'items'   => [
                    'Wedding party transportation',
                    'Prom and school event rides',
                    'Birthday celebrations',
                    'Concert and sports trips',
                    'Nightlife and group outings',
                ],
            ],
            [
                'heading' => 'Aurora Party Bus',
                'items'   => [
                    'Luxury wedding shuttles',
                    'Prom limo packages',
                    'Birthday party rentals',
                    'Sporting event rides',
                    'Night out party trips',
                ],
            ],
            [
                'heading' => 'Joliet Party Bus',
                'items'   => [
                    'Elegant wedding buses',
                    'Safe prom transport',
                    'Birthday party buses',
                    'Concert and event trips',
                    'Group night out rides',
                ],
            ],
            [
                'heading' => 'Plainfield Party Bus',
                'items'   => [
                    'Wedding guest shuttles',
                    'Prom night transport',
                    'Birthday limo rentals',
                    'Sports and concert trips',
                    'Evening group outings',
                ],
            ],
            [
                'heading' => 'Bolingbrook Party Bus',
                'items'   => [
                    'Wedding celebration rides',
                    'Prom limousine service',
                    'Birthday group trips',
                    'Concert and game day rides',
                    'Nightlife shuttle service',
                ],
            ],
            [
                'heading' => 'Romeoville Party Bus',
                'items'   => [
                    'Wedding party transport',
                    'Prom and school events',
                    'Birthday party transportation',
                    'Concert and sports shuttles',
                    'Night out with friends',
                ],
            ],
        ]"
    />


    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
