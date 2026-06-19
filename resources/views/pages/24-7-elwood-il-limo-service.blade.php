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

    <x-sections.image-info-card
        id="image-info-card-dynamic"
        heading="Dynamic Transportation Solutions for Modern"
        headingBold="Illinois Residents"
        body="For passengers who need a high level of versatility during their travels, our hourly chauffeur rentals provide the perfect answer for a demanding daily itinerary. This flexible service allows you to visit multiple destinations, from the local business parks to the scenic Midewin National Tallgrass Prairie, at your own speed with a private driver standing by for your departure. Our reliable Elwood to O'Hare airport shuttle guarantees that you arrive at your terminal on time without the unpredictable wait times often associated with standard ride-sharing applications. Having a private vehicle at your disposal helps you maintain a truly productive and efficient schedule."
        image="/images/sections/elwood-dynamic-transport.png"
        imageAlt="Dynamic transportation in Elwood, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="left"
    />

    <x-sections.image-info-card
        id="image-info-card-memorable"
        heading="Creating Memorable Arrivals for Your"
        headingBold="Special Occasions"
        body="A high-end limousine adds a layer of elegance to the most significant milestones on your social calendar, ranging from rustic farm ceremonies to formal graduations. We provide specialized transport for prom nights, milestone birthdays, and professional sporting events, ensuring your entire party travels together in total luxury. Our team understands the specific logistics required for large-scale events at unique venues like the Children's Garden or nearby banquet halls and works diligently to provide a seamless experience for every guest in your group. From your first pickup until the final drop-off of the night, we manage your transportation with the highest level of care."
        image="/images/sections/elwood-memorable-travel.png"
        imageAlt="Memorable travel in Elwood, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        :inverted="true"
        :descImageTop="true"
        descHeading="Why choose us?"
        descSubheading="With our Party Bus Rental in Elwood IL, you can travel with ease and enjoy a fun, spacious ride without worrying about transportation."
        descBody="From professional chauffeur service in Elwood IL to reliable event transportation in Elwood IL and premium limousine transportation in Elwood IL, we provide safe, comfortable, and on-time rides for any occasion. Our experienced team focuses on punctuality, safety, and customer satisfaction to make every trip effortless."
        descClosing="Book your ride today using our quick contact form and secure your transportation instantly."
        descImage="/images/sections/elwood-transportation.png"
        descImageAlt="Wedding and event transportation in Elwood, Illinois — Stop and Go Airport Shuttle"
    />

    <x-sections.our-services />

    <x-sections.faq />

    <x-sections.areas-we-serve background="dark" />

    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
