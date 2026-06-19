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

    <x-sections.image-info-card
        id="image-info-card-flexible"
        heading="Flexible Transportation Options for Active"
        headingBold="Illinois Residents"
        body="For passengers who need a higher level of versatility during their travels, our hourly chauffeur rentals provide the perfect answer for a demanding daily schedule. This flexible service allows you to visit multiple local destinations at your own pace with a private driver standing by for your immediate departure. Our reliable Lemont to Midway airport shuttle guarantees that you arrive at your terminal without the unpredictable wait times often associated with standard ride-sharing applications. Whether you are attending several corporate appointments or touring regional landmarks, having a private vehicle at your disposal helps you maintain a truly fluid and efficient schedule."
        image="/images/sections/lemont-flexible-transport.png"
        imageAlt="Flexible transportation options in Lemont, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="left"
    />

    <x-sections.image-info-card
        id="image-info-card-occasions"
        heading="Creating Elegant Arrivals for Your"
        headingBold="Significant Milestones"
        body="A luxury limousine adds a vital layer of elegance to the most significant milestones on your social calendar, from traditional weddings to formal high school graduations. We specialize in providing high-end transport for prom nights, milestone birthdays, and professional sporting events, ensuring your entire party travels together in total luxury. Our team understands the specific logistics required for large-scale events at venues like Cog Hill or The Monte Bello Estate and works diligently to provide a seamless experience for every guest. From the initial pick up until the final drop-off of the night, we manage your transportation with the highest level of care."
        image="/images/sections/lemont-special-occasions.png"
        imageAlt="Party bus and special occasion transportation in Lemont, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
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
