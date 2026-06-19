@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Frankfort, IL",
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
    "areaServed": { "@@type": "City", "name": "Frankfort", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Frankfort, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Frankfort Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Frankfort, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Frankfort, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Frankfort"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Frankfort, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/frankfort-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Frankfort IL"
        headingBold="Limo Service"
        body="Travel through Frankfort in comfort and confidence with our 24/7 Frankfort IL limo service. Whether you are planning a memorable celebration with a Party Bus Rental in Frankfort IL or arriving in style with a wedding limo in Frankfort IL, we deliver dependable, comfortable, and on-time transportation. Our experienced drivers focus on safety, punctuality, and premium service so every ride feels effortless from start to finish."
        image="/images/sections/frankfort-limo.png"
        imageAlt="Happy clients in a limousine in Frankfort, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />

    <x-sections.image-info-card
        id="image-info-card-sophisticated"
        heading="Travel with Confidence and Sophistication"
        headingBold="Across the Village"
        body="Whether you are planning a special evening in the historic downtown district or heading to a critical business engagement, the quality of your ride defines your entire day. Our premier Frankfort IL limo service provides a dedicated professional driver who manages every logistical detail of local traffic while you relax in a quiet, high-end cabin. By choosing a specialized Frankfort wedding transportation service, you bypass the typical stresses of event parking and navigation to focus entirely on your personal priorities. Our local fleet delivers a sophisticated travel solution for clients who value safety, absolute punctuality, and superior service standards."
        image="/images/sections/frankfort-sophisticated-travel.png"
        imageAlt="Travel with confidence in Frankfort, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        :inverted="true"
        :descImageTop="true"
        descHeading="Why choose us?"
        descBody="Enjoy stress-free group travel with our Party Bus Rental in Frankfort IL. Safe, spacious, and reliable rides for any celebration."
        descImage="/images/sections/frankfort-transportation.png"
        descImageAlt="Fleet of vehicles in Frankfort, Illinois — Stop and Go Airport Shuttle"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
