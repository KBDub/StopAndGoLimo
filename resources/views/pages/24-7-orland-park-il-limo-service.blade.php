@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Orland Park, IL",
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
    "areaServed": { "@@type": "City", "name": "Orland Park", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Orland Park, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Orland Park Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Orland Park, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Orland Park, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Orland Park"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Orland Park, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/orland-park-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Orland Park IL"
        headingBold="Limo Service"
        subheading="for All Occasions"
        body="Travel through Orland Park with confidence using our 24/7 Orland Park IL limo service, built for comfort, reliability, and perfect timing. Whether you are celebrating with a party bus rental in Orland Park IL or arriving in style with a wedding limo in Orland Park IL, we deliver safe, comfortable, and on-time transportation for every occasion. Our professional drivers make every ride smooth, stress-free, and easy from start to finish."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/orland-park-limo.png"
        imageAlt="Comfortable limousine service in Orland Park, Illinois — Stop and Go Airport Shuttle"
        imagePosition="left"
        :inverted="true"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        descHeading="Why choose us?"
        descSubheading="Our Party Bus Rental in Orland Park IL and shuttle service make group travel easy, safe, and on time for any occasion."
        descBody="From weddings and private events to business travel, our event transportation in Orland Park IL and chauffeur service in Orland Park IL deliver reliable, comfortable, and on-time rides. Backed by our 24/7 Orland Park IL limo service, we make every trip smooth, stress-free, and professionally managed from start to finish."
        descImage="/images/sections/orland-park-transportation.png"
        descImageAlt="Orland Park limousine transportation — Stop and Go Airport Shuttle"
        :descImageTop="true"
        :inverted="true"
    />

    <x-sections.image-info-card
        id="image-info-card-confidence"
        heading="Travel with Total Luxury to"
        headingBold="Every Local Destination"
        body="Whether you are planning a high-end shopping excursion at Orland Square Mall or heading to an important corporate dinner, the quality of your ride defines your entire experience. Our premier Orland Park IL limo service provides a dedicated professional driver who manages every detail of the local traffic while you relax in a quiet, high-end cabin. By choosing a specialized Orland Park black car service, you skip the common frustrations of navigating crowded parking lots and busy intersections to focus entirely on your personal priorities. Our local fleet delivers a sophisticated travel solution for clients who value safety, absolute punctuality, and superior service standards."
        image="/images/sections/orland-park-confidence.png"
        imageAlt="Travel with confidence in Orland Park, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.image-info-card
        id="image-info-card-flexible"
        heading="Flexible Transportation Options Built for"
        headingBold="Modern Residents"
        body="For passengers who need a high level of versatility during their travels, our hourly chauffeur rentals provide the perfect answer for a demanding daily itinerary. This flexible service allows you to visit multiple local destinations, from Centennial Park to the various dining districts, at your own speed with a private driver standing by for your departure. Our reliable Orland Park to Midway airport transfer ensures that you arrive at your terminal on time without the unpredictable wait times often associated with standard ride-sharing applications. Whether you are attending several corporate appointments or exploring the local area, having a private vehicle at your disposal helps you maintain a truly fluid schedule."
        image="/images/sections/orland-park-flexible.png"
        imageAlt="Flexible transportation options in Orland Park, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="left"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
