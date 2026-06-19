@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Mokena, IL",
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
    "areaServed": { "@@type": "City", "name": "Mokena", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Mokena, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Mokena Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Mokena, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Mokena, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Mokena"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Mokena, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/mokena-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Mokena IL"
        headingBold="Limo Service"
        subheading="for All Occasions"
        body="Enjoy worry-free travel with our 24/7 Mokena IL limo service, designed for comfort, reliability, and perfect timing. Whether you are planning a special celebration or arriving in style with a wedding limo in Mokena IL, we deliver professional service, clean vehicles, and on-time pickups that make every ride effortless from start to finish."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/mokena-limo.png"
        imageAlt="Business traveler in a limousine in Mokena, Illinois — Stop and Go Airport Shuttle"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        descHeading="Why choose us?"
        descSubheading="Planning a group outing? Our Party Bus Rental in Mokena IL gives you a fun, spacious, and stress-free way to travel while we handle the driving."
        descBody="From weddings and private events to business travel and special occasions, our event transportation in Mokena IL and chauffeur service in Mokena IL deliver reliable, comfortable, and on-time rides. Backed by our 24/7 Mokena IL limo service, we focus on safety, punctuality, and a smooth experience so every trip feels effortless from start to finish. Request your ride today using our quick contact form and we will confirm the details promptly."
        descImage="/images/sections/mokena-transportation.png"
        descImageAlt="Professional chauffeur in Mokena, Illinois — Stop and Go Airport Shuttle"
        :descImageTop="true"
        :inverted="true"
    />

    <x-sections.image-info-card
        id="image-info-card-sophisticated"
        heading="Travel with Confidence and Sophistication"
        headingBold="Across the Town"
        body="Whether you are planning a special evening at a local estate or heading to a critical business engagement, the quality of your ride defines your entire day. Our premier Mokena IL limo service provides a dedicated professional driver who manages every logistical detail of local traffic while you relax in a quiet, high-end cabin. By choosing a specialized Mokena corporate car service, you bypass the typical stresses of event parking and navigation to focus entirely on your personal priorities. Our local fleet delivers a sophisticated travel solution for clients who value safety, absolute punctuality, and superior service standards."
        image="/images/sections/mokena-sophisticated-travel.png"
        imageAlt="Sophisticated travel in Mokena, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
