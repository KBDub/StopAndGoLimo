@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Montgomery, IL",
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
    "areaServed": { "@@type": "City", "name": "Montgomery", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Montgomery, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Montgomery Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Montgomery, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Montgomery, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Montgomery"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Montgomery, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/montgomery-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Montgomery IL"
        headingBold="Limo Service"
        subheading="for All Occasions"
        body="Travel with confidence using our 24/7 Montgomery IL limo service. Whether you need a prompt airport shuttle in Montgomery IL, a stylish wedding limo in Montgomery IL, or reliable transportation for any occasion, we provide clean vehicles, professional drivers, and seamless service from start to finish. Book now and enjoy stress-free, comfortable rides."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/montgomery-wedding-transport.png"
        imageAlt="Wedding and event transportation in Montgomery, Illinois — Stop and Go Airport Shuttle"
        imagePosition="left"
        :inverted="true"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        descHeading="Why choose us?"
        descSubheading="Our Chauffeur service in Montgomery IL makes every ride easy, comfortable, and stress-free."
        descBody="From stylish wedding rides to reliable airport shuttle in Montgomery IL, exciting Party Bus Rental in Montgomery IL, seamless event transportation in Montgomery IL, and professional limousine transportation in Montgomery IL, we provide safe, comfortable, and punctual service every time. Our team prioritizes safety, timeliness, and customer satisfaction to make every trip effortless. Book your ride now using our quick contact form and secure your transportation today!"
        descImage="/images/sections/montgomery-limo-service.png"
        descImageAlt="Limousine service in Montgomery, Illinois — Stop and Go Airport Shuttle"
        :descImageTop="true"
        :inverted="true"
    />

    <x-sections.image-info-card
        id="image-info-card-sophisticated"
        heading="Experience Sophisticated Travel Throughout"
        headingBold="the Montgomery Area"
        body="Whether you are planning a corporate retreat at a local business park or arriving at a hotel for a well-deserved vacation, the quality of your transportation defines your entire experience. Our premier Montgomery IL limo service provides a dedicated professional driver who manages every detail of the local traffic while you relax in a quiet, high-end cabin. By choosing a specialized Montgomery banquet hall limo, you skip the common hassles of navigation and parking to focus entirely on your personal priorities. Our modern fleet delivers a sophisticated travel solution for clients who value safety, absolute punctuality, and high-end service standards."
        image="/images/sections/montgomery-comfortable-travel.png"
        imageAlt="Comfortable travel in Montgomery, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
