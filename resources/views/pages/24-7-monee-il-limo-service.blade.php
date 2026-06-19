@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Monee, IL",
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
    "areaServed": { "@@type": "City", "name": "Monee", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Monee, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Monee Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Monee, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Monee, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Monee"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Monee, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/monee-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Monee IL"
        headingBold="Limo Service"
        subheading="for All Occasions"
        body="Travel with ease and style using our 24/7 Monee IL limo service. Whether you need an airport shuttle in Monee IL, a wedding limo in Monee IL for a special occasion, or professional transportation for any event, we provide clean vehicles, experienced drivers, and on-time service. Book now and enjoy a stress-free ride today."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/monee-event-transport.png"
        imageAlt="Event transportation in Monee, Illinois — Stop and Go Airport Shuttle"
        imagePosition="left"
        :inverted="true"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        descHeading="Why choose us?"
        descSubheading="Planning a special day? Our Wedding limo in Monee IL ensures elegant, comfortable, and stress-free transportation while we handle all the details."
        descBody="From weddings and private events to business travel and special occasions, our event transportation in Monee IL and chauffeur service in Monee IL provide reliable, comfortable, and on-time rides. We focus on safety, punctuality, and a smooth experience so every trip feels effortless from start to finish. Request your ride today using our quick contact form and secure your transportation promptly."
        descImage="/images/sections/monee-wedding-events.png"
        descImageAlt="Wedding and event transportation in Monee, Illinois — Stop and Go Airport Shuttle"
        :descImageTop="true"
        :inverted="true"
    />

    <x-sections.image-info-card
        id="image-info-card-sophisticated"
        heading="Experience Sophisticated Travel Throughout"
        headingBold="the Monee Area"
        body="Whether you are commuting for a corporate meeting at one of the major local distribution centers or arriving at a hotel for a well-deserved vacation, the quality of your transportation defines your entire experience. Our premier Monee IL limo service provides a dedicated professional driver who manages every detail of the local traffic while you enjoy a quiet, high-end cabin. By choosing a specialized Monee executive car service, you skip the common hassles of navigation and parking to focus entirely on your personal priorities. Our modern fleet delivers a sophisticated travel solution for clients who value safety, absolute punctuality, and high-end service standards."
        image="/images/sections/monee-sophisticated-travel.png"
        imageAlt="Sophisticated travel in Monee, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
