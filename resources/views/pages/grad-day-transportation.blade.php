@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Grad Day Transportation — Illinois",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Safe, on-time graduation day transportation in New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                  "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",              "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Grad Day Transportation","item": "https://www.newlenoxlimoservice.com/grad-day-transportation" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Grad Day Bus"
    metaDescription="On-time graduation day transportation for groups and families across Chicagoland. Limos, party buses, and shuttle service. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Graduation day transportation in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Grad Day Transportation"
        headingBold="Service in Illinois"
        :headingTwoLines="false"
        subtitle="Your celebration starts the moment you step on board"
        description="Stop & Go Airport Shuttle Service, Inc. provides safe Grad Day transportation for students throughout Illinois. We pick up your group, keep everyone together all day, and make sure everyone gets home safely. Our party buses and Mercedes Sprinter vans feature comfortable seating, LED lighting, and premium sound. Every chauffeur is background-checked and trained to make the day memorable and worry-free for students and parents. We serve high schools throughout Chicagoland across all metro counties. Flat-rate, all-inclusive pricing with clear quotes before you book. Grad Day buses fill fast, so reserve early."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/sections/graduation-day-hats-in-air.png"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Celebrate Your Big Day"
        headingBold="With Stylish Grad Party Transportation"
        heading=""
        body="Celebrate your graduation in style with safe, comfortable, and memorable Grad Party transportation for you and your loved ones. Our rides ensure everyone enjoys the day with ease and excitement, creating lasting memories for both students and family. Arrive together, celebrate your achievement, and make this milestone a moment you will cherish forever."
    />

    <x-sections.three-steps
        :inverted="true"
        :steps="[
            [
                'number' => 'Step 1',
                'title'  => 'Book Your Grad Day Ride',
                'body'   => 'Tell us your graduation date, pickup location, and how many guests are celebrating with you.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'Confirm the Details',
                'body'   => 'Our team will confirm your vehicle, arrival time, and any special requests to make the day perfect.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Arrive in Style',
                'body'   => 'Your chauffeur arrives on time so you and your group can celebrate from the very first moment.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Make your Graduation Day"
        headingBold="Epic!"
        headingTail=""
        image="/images/sections/celebrate-your-big-event.png"
        imageAlt="Happy graduates celebrating on graduation day — Stop and Go Airport Shuttle, New Lenox, Illinois"
        imageAspect="4/3"
        imageObjectPosition="center top"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultVehicle="Limousine Service"
        rightVariant="description"
        descHeading="Make your Graduation Day Epic!"
        descSubheading="Features & Safety"
        :descBullets="[
            'LED & Ambient Lighting: Bright, stylish lighting to create a fun, celebratory mood for your graduation ride.',
            'Premium Sound Systems & Screens: Enjoy your favorite playlists and videos with high-quality audio and entertainment throughout the vehicle.',
            'Comfortable Seating for Socializing: Spacious seating for students and family to relax and celebrate together.',
            'Refreshment Areas & Ice Chests: Convenient storage keeps drinks and refreshments easily accessible.',
            'Passenger Capacity: Vehicles available for small family groups or larger friend circles.',
            'Professional & Family-Focused Drivers: All drivers complete professional training, background checks, and safety briefings for a secure, worry-free graduation day.',
        ]"
        descImage="/images/sections/celebrate-your-big-event.png"
        descImageAlt="Happy graduates celebrating on graduation day — Stop and Go Airport Shuttle, New Lenox, Illinois"
        :descImageTop="true"
    />

    <x-sections.our-services />

    <x-sections.travel-in-style
        heading="Celebrate Grad Day"
        headingBold="in Style"
        body="Your graduation is a milestone worth celebrating in comfort and class. Stop and Go provides safe, spacious, and stylish transportation for students and families across Chicagoland. Our professional chauffeurs make sure everyone arrives together, on time, and ready to enjoy every moment. From New Lenox to Naperville, your Grad Day ride will be as memorable as the day itself."
        buttonText="Book Your Grad Day Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/smiling-on-graduation-day.jpg"
        imageAlt="Smiling graduates celebrating on graduation day with Stop and Go Limo"
        imagePosition="right"
    />

    <x-sections.review-slider :inverted="true" />
        
    <x-sections.text-block-slide-in
        headingPrefix="Trusted Grad Day"
        headingBold="Transportation"
        body="As a trusted transportation provider for over 15 years, Stop & Go offers luxury Grad Day transportation, including group rides and school celebration trips. Our professional, family-focused drivers and spacious, fully equipped vehicles make every ride safe, fun, and unforgettable. Celebrate your achievement with friends and loved ones and make your Grad Day truly memorable."
        buttonText="Book Your Grad Day Ride"
        buttonHref="/bookings-reservations"
    />

    <x-sections.faq preset="graduation" />

    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />
    
</x-layouts.page>
