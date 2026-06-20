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
        :headingTwoLines="false"
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

    <x-sections.image-info-card
        id="image-info-card-dynamic"
        heading="Dynamic Transportation Solutions for"
        headingBold="Modern Illinois Residents"
        body="For passengers who need a high level of versatility during their travels, our hourly chauffeur rentals provide the perfect answer for a demanding daily itinerary. This flexible service allows you to visit multiple destinations, from the local parks to the historic village hall area, at your own speed with a private driver standing by for your departure. Our reliable Montgomery to O'Hare airport shuttle guarantees that you arrive at your terminal on time without the unpredictable wait times often associated with standard ride-sharing applications. Having a private vehicle at your disposal helps you maintain a truly productive and fluid schedule."
        image="/images/sections/montgomery-dynamic-transport.png"
        imageAlt="Dynamic transportation options in Montgomery, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="left"
    />

    <x-sections.image-info-card
        id="image-info-card-occasions"
        heading="Creating Memorable Arrivals for Your"
        headingBold="Special Occasions"
        body="A high-end limousine adds a layer of elegance to the most significant milestones on your social calendar, ranging from riverside weddings to formal graduations. We provide specialized transport for prom nights, milestone birthdays, and professional sporting events, ensuring your entire party travels together in total luxury. Our team understands the specific logistics required for large-scale events at unique venues like Jennifer's Garden or nearby country clubs and works diligently to provide a seamless experience for every guest in your group. From your first pickup until the final drop-off of the night, we manage your transportation with the highest level of care."
        image="/images/sections/montgomery-special-occasions.png"
        imageAlt="Transportation to events and special occasions in Montgomery, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
    />

    <x-sections.our-services
        heading="What we"
        headingBold="offer"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
