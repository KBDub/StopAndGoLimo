@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Lemont, IL",
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
    "areaServed": { "@@type": "City", "name": "Lemont", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Lemont, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Lemont Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Lemont, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Lemont, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Lemont"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Lemont, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/lemont-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Lemont IL"
        headingBold="Limo Service"
        body="Travel with confidence using our 24/7 Lemont IL limo service, designed for comfort, reliability, and on-time rides. Whether you need an airport shuttle in Lemont IL, a stylish wedding limo in Lemont IL, or professional transportation for any occasion, we provide clean vehicles, experienced drivers, and seamless service from start to finish. Book now and enjoy stress-free travel today."
        image="/images/sections/lemont-limo.png"
        imageAlt="Happy clients enjoying a limousine ride in Lemont, Illinois — Stop and Go Airport Shuttle"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.image-info-card
        id="image-info-card-sophisticated"
        heading="Travel with Confidence and Sophistication"
        headingBold="Across the Area"
        body="Whether you are planning an elegant ceremony at a historic local church or heading to a critical business engagement, the quality of your ride defines your entire day. Our premier Lemont IL limo service provides a dedicated professional driver who manages every logistical detail of local traffic while you relax in a quiet, high-end cabin. By choosing a specialized Lemont wedding estate limo, you bypass the typical stresses of event parking and navigation to focus entirely on your personal priorities. Our local fleet delivers a sophisticated travel solution for clients who value safety, absolute punctuality, and superior service standards."
        image="/images/sections/lemont-sophisticated-travel.png"
        imageAlt="Travel with confidence in Lemont, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        :inverted="true"
        :descImageTop="true"
        descHeading="Why choose us?"
        descBody="With our Party Bus Rental in Lemont IL, your group travels in comfort and style. Enjoy reliable, hassle-free transportation anytime."
        descImage="/images/sections/lemont-transportation.png"
        descImageAlt="Wedding transportation in Lemont, Illinois — Stop and Go Airport Shuttle"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
