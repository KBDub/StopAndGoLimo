@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Manhattan, IL",
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
    "areaServed": { "@@type": "City", "name": "Manhattan", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Manhattan, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Manhattan Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Manhattan, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Manhattan, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Manhattan"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Manhattan, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/manhattan-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Manhattan"
        headingBold="Limo Service"
        subheading="for All Occasions"
        body="Ride with confidence using our 24/7 Manhattan IL limo service, built for travelers who expect reliability and comfort. Whether you need a dependable airport shuttle in Manhattan IL, a stylish wedding limo in Manhattan IL, or a fun Party Bus Rental in Manhattan IL, we deliver on-time pickups, spotless vehicles, and professional service every step of the way. Book today and enjoy transportation that works around your schedule, not the other way around."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/manhattan-limo.png"
        imageAlt="Airport transportation in Manhattan, Illinois — Stop and Go Airport Shuttle"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        descHeading="Why choose us?"
        descSubheading="Our chauffeur service in Manhattan offers professional drivers and reliable rides without the stress."
        descBody="From a dependable airport shuttle in Manhattan to an elegant wedding limo in Manhattan and an exciting Party Bus Rental in Manhattan, our 24/7 Manhattan limo service is built for every occasion. With professional drivers, spotless vehicles, and on-time pickups, we handle all the details so you can focus on what matters most."
        descImage="/images/sections/manhattan-transportation.png"
        descImageAlt="Fleet car interior in Manhattan, Illinois — Stop and Go Airport Shuttle"
        :descImageTop="true"
        :inverted="true"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
