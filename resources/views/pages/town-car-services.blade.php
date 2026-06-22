@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Town Car Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Premium sedan and town car service for any occasion in New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",             "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",         "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Town Car Services","item": "https://www.newlenoxlimoservice.com/town-car-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Town Car Service"
    metaDescription="Stylish sedan and town car service for every occasion in Chicagoland. Professional drivers, flat rates, on-time pickup. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Town car service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Town Car and Executive Sedan"
        headingBold="Service in Chicagoland"
        :headingTwoLines="false"
        subtitle="Private, comfortable rides for airports, business, and special events"
        description="Stop & Go Airport Shuttle Service, Inc. provides premium town car and executive sedan service throughout the Chicago metropolitan area. Our luxury sedans are ideal for private airport transfers to O'Hare and Midway, solo corporate travel, client entertainment, and any occasion that calls for a clean, quiet, professional ride. Every chauffeur is background-checked, uniformed, and trained. Flat-rate pricing, no surge fees. We serve the southwest, western, north, and northwest suburbs and all Chicago neighborhoods. Available 24 hours a day, seven days a week. Book online or call us any time."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/driver-classy.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="More Than a Ride."
        headingBold="A Refined Journey"
        heading=""
        body="Our town car service offers an elegant blend of luxury, comfort, and professionalism for both personal and business travel. Slide into plush leather seats and enjoy climate-controlled interiors. Expect punctual, courteous chauffeurs who handle every detail, from luggage assistance to navigating traffic with local expertise."
    />

    <x-sections.free-instant-quote
        heading="Reserve Your"
        headingBold="Town Car"
        headingTail="Today"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/sections/elderly-relaxing-corporate.jpg"
        descImageAlt="Passenger relaxing in a luxury town car — Stop and Go Airport Shuttle, New Lenox, Illinois"
        descHeading="Why Choose Us?"
        descSubheading="Complete Town Car Services"
        descBody="As a trusted provider of town car service, Stop & Go Airport Shuttle Service, Inc. delivers an elegant blend of luxury, comfort, and professionalism for both personal and business travel:"
        :descBullets="[
            'Airport transfers to O\'Hare and Midway, available 24/7',
            'Corporate transportation for executives and business meetings',
            'Point-to-point town car service throughout Chicagoland',
            'Hourly chauffeur service for events, appointments, and errands',
            'Wedding and special occasion town car rentals',
        ]"
        descClosing="Serving New Lenox, Plainfield, Naperville, Joliet, Aurora, and the greater Chicagoland area, our professional chauffeurs are ready around the clock."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultVehicle="Limousine Service"
    />

    <x-sections.why-choose-us />

    <x-sections.party-limo-image
        heading="Rent a Town Car"
        headingBold="from Stop & Go"
        headingTail="Airport Shuttle Service, Inc."
        body="Stop & Go Airport Shuttle Service Inc. offers impeccably maintained charter buses and professional drivers to groups in New Lenox, Plainfield, and throughout the greater Chicago area. Whether you’re organizing a wedding, corporate event, school outing, sports team trip, or group vacation, we deliver reliable, stylish transportation, without the stress of driving."
        image="/images/sections/limousine-arrival.jpg"
        imageAlt="Luxury limousine arriving for a client pickup — Stop and Go Airport Shuttle, New Lenox, Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
        :inverted="true"
    />

    <x-sections.review-slider :inverted="true" />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
