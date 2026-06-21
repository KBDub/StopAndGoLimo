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
    title="Manhattan IL Limo"
    metaDescription="24/7 limo and airport shuttle service in Manhattan, IL. Transfers to O'Hare and Midway, corporate travel, weddings, and events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Manhattan, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Manhattan"
        headingBold="Limo & Airport Shuttle"
        :headingTwoLines="false"
        subtitle="South Will County's go-to private transportation service"
        subtitleIn="serving Manhattan, Illinois"
        description="Stop & Go Airport Shuttle Service, Inc. provides 24-hour limousine and airport shuttle service throughout Manhattan, Illinois. Located along Route 52 near I-57 and I-80, Manhattan is well-positioned for airport access to O'Hare (ORD) and Midway (MDW). We offer flat-rate, door-to-door transfers with real-time flight tracking, available every day of the year. We also provide wedding limousines, birthday and bachelorette party buses, quinceañera transportation, and prom group buses from Lincoln-Way West and area schools. Background-checked, uniformed chauffeurs. We serve Frankfort, Joliet, and New Lenox. Flat-rate, all-inclusive pricing. Book online or call us any time."
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

    <x-sections.image-info-card
        id="image-info-card-sophisticated"
        heading="Experience Unmatched Comfort with"
        headingBold="Every Local Trip"
        body="Whether you are planning an elegant rustic wedding at a local farm venue or heading to an important corporate engagement, the quality of your ride defines your entire day. Our premier Manhattan IL limo service provides a dedicated professional driver who manages every detail of the local traffic while you relax in a quiet, high-end cabin. By choosing a specialized Manhattan farm wedding limo, you skip the common hassles of navigation and parking to focus entirely on your personal celebrations. Our modern fleet delivers a sophisticated travel solution for clients who value safety, absolute punctuality, and superior service standards across Will County."
        image="/images/sections/manhattan-sophisticated-travel.png"
        imageAlt="Sophisticated travel in Manhattan, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.image-info-card
        id="image-info-card-flexible"
        heading="Flexible Transportation Options Built for"
        headingBold="Modern Residents"
        body="For passengers who need a high level of versatility during their travels, our hourly chauffeur rentals provide the perfect answer for a demanding daily itinerary. This flexible service allows you to visit multiple local destinations, from the business parks to the regional golf courses, at your own speed with a private driver standing by for your departure. Our reliable Manhattan IL to O'Hare car service ensures that you arrive at your terminal on time without the unpredictable wait times often associated with standard ride-sharing applications. Whether you are attending several business appointments or touring local landmarks, having a private vehicle at your disposal helps you maintain a truly fluid schedule."
        image="/images/sections/manhattan-flexible-transport.png"
        imageAlt="Flexible transportation options in Manhattan, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="left"
    />

    <x-sections.image-info-card
        id="image-info-card-occasions"
        heading="Creating Memorable Arrivals for Your"
        headingBold="Special Occasions"
        body="A high-end limousine adds a layer of elegance to the most significant milestones on your social calendar, ranging from traditional ceremonies to formal high school graduations. We provide specialized transport for prom nights, milestone birthdays, and professional sporting events, ensuring your entire party travels together in total luxury. Our team understands the specific logistics required for large-scale events at venues like DeLair's Country Farm or Prairie Bluff and works diligently to provide a seamless experience for every guest in your group. From your first pickup until the final drop-off of the night, we manage your transportation with the highest level of care."
        image="/images/sections/manhattan-special-occasions.png"
        imageAlt="Special occasion transportation in Manhattan, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
    />

    <x-sections.our-services />

    <x-sections.faq preset="manhattan" />
    <x-sections.areas-we-serve background="dark"/>
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
