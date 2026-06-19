@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Elwood, IL",
    "url": "{{ request()->url() }}",
    "telephone": "(815) 585-6922",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "areaServed": { "@@type": "City", "name": "Elwood", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Elwood, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Elwood Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Elwood, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Elwood, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Elwood"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Elwood, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/elwood-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Elwood IL"
        headingBold="Limo Service"
        body="Enjoy stress-free travel with our 24/7 Elwood IL limo service, built for comfort, reliability, and punctuality. Whether you need a wedding limo in Elwood IL, an airport shuttle in Elwood IL, or transportation for any special event, we provide professional drivers, clean vehicles, and on-time service to make every ride smooth and effortless."
        image="/images/sections/elwood-limo.png"
        imageAlt="Happy client in a Stop and Go limousine in Elwood, Illinois"
        :inverted="true"
    />

    <x-sections.image-info-card
        id="image-info-card-sophisticated"
        heading="Experience Sophisticated Travel"
        headingBold="Throughout the Elwood Region"
        body="Whether you are commuting for a corporate meeting at the massive intermodal center or arriving at a hotel for a well-deserved vacation, the quality of your transportation defines your entire experience. Our premier Elwood IL limo service provides a dedicated professional driver who manages every detail of the local heavy traffic while you relax in a quiet, high-end cabin. By choosing a specialized Elwood logistics car service, you skip the common hassles of navigating industrial routes and truck traffic to focus entirely on your personal priorities. Our modern fleet delivers a sophisticated travel solution for clients who value safety and punctuality above all else."
        image="/images/sections/elwood-comfort.png"
        imageAlt="Experience comfort and sophistication in Elwood, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        :inverted="true"
        :descImageTop="true"
        descHeading="Why choose us?"
        descBody="With our Party Bus Rental in Elwood IL, you can travel with ease and enjoy a fun, spacious ride without worrying about transportation."
        descImage="/images/sections/elwood-transportation.png"
        descImageAlt="Wedding and event transportation in Elwood, Illinois — Stop and Go Airport Shuttle"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
