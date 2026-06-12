@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Party Bus Rental — Naperville, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Naperville", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Party bus rental in Naperville, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",               "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",           "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Party Bus Naperville","item": "https://www.newlenoxlimoservice.com/party-bus-rental-naperville" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Party Bus Rental Naperville, IL | Stop and Go Limo"
    metaDescription="Party bus rental in Naperville, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-party-bus-naperville.jpg"
    ogImageAlt="Party bus rental in Naperville, Illinois"
>
    <x-sections.category-hero
        heading=""
        headingBold="Party Bus Naperville"
        subtitle="Your local party bus experts for birthdays, bachelorette parties, and group celebrations"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-party-bus-naperville.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="The Party Starts the Moment"
        headingBold="You Step Onboard"
        heading=""
        body="Looking for the ultimate way to celebrate in Naperville? Our party bus service brings the celebration to you with luxury seating, booming music, and dazzling lights. From birthdays to bachelorette parties, every ride is an energy-filled experience your friends will talk about for years."
    />

    <x-sections.three-steps
        :invertBg="true"
        :steps="[
            [
                'number' => 'Step 1',
                'title'  => 'Fill Out Our Booking Form',
                'body'   => 'Share your event date, group size, and destination. Our simple online form takes less than two minutes to complete.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'We Confirm Your Reservation',
                'body'   => 'Our team will reach out to lock in your date, answer any questions, and make sure every detail is set before your ride.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Board and Celebrate',
                'body'   => 'Your driver arrives on time and ready to go. Sit back, turn up the music, and let the celebration begin.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        descHeading="Why Choose Us?"
        descSubheading="Our Naperville Party Bus Turns Any Night into an Unforgettable Celebration"
        :descBullets="[
            'Luxury interiors and premium sound systems: The fun starts the moment you step onboard. Great music, great vibes, every time.',
            'Room for your whole crew: Our buses hold large groups so nobody gets left behind.',
            'Professional, friendly drivers: We handle the driving so you stay focused on the celebration.',
            'Flexible rental packages: We match your schedule, group size, and party style.',
            'Fully licensed and insured: Your safety matters as much as your good time.',
        ]"
        descClosing="Naperville locals trust us for unforgettable nights and easy planning. Our buses book fast, so lock in your date before it's gone."
    />

    <x-sections.travel-in-style
        heading="Where the Party"
        headingBold="Never Stops"
        body="Our Naperville party bus puts you and your crew at the heart of the celebration. Step onboard with booming sound systems, dazzling lights, and plush seating, and let the party take over. Every ride is packed with energy, laughs, and memories that last. Naperville locals count on us for safe, exciting nights out that turn ordinary evenings into legendary celebrations."
        buttonText="Book Your Party Bus"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-party-bus-naperville.jpg"
        imageAlt="Guests celebrating on a Stop and Go party bus in Naperville, Illinois"
        imagePosition="right"
        background="navy"
    />

    <x-sections.our-mission
        image="/images/heroes/hero-party-bus-naperville.jpg"
        imageAlt="Guests celebrating on a Stop and Go party bus in Naperville, Illinois"
    />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation"
        headingBold="Solutions"
        buttonText="Contact Us"
        buttonHref="/contact"
        directions="Trusted Naperville party bus company · Reliable service for any celebration · Custom trips for any group or event · Serving all Naperville neighborhoods · Perfect for birthdays, bachelor and bachelorette parties, concerts, and special events · Naperville party bus rental available"
    >As a trusted <a href="https://reviews.birdeye.com/stop-go-airport-shuttle-service-inc-156042976679034?utm_source=chatgpt.com" target="_blank" rel="noopener noreferrer" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">Naperville party</a> bus company, Stop &amp; Go provides full-service luxury transportation including wedding party buses, prom limo buses, birthday and celebration buses, bachelor and bachelorette shuttles, and concert and sporting event transfers. Our professional drivers and modern fleet deliver safe, comfortable, and reliable service throughout Naperville, Aurora, Joliet, and all Chicago suburbs, with convenient access to I-88, I-355, and I-55 for smooth transportation to downtown Naperville, O&rsquo;Hare, and Midway.
    </x-sections.text-block-slide-in>

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
