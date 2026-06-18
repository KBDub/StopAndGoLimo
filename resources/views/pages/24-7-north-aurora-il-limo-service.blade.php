@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — North Aurora, IL",
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
    "areaServed": { "@@type": "City", "name": "North Aurora", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in North Aurora, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="North Aurora Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in North Aurora, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in North Aurora, Illinois"
>
    <x-sections.category-hero
        heading="24/7 North Aurora"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving North Aurora, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/north-aurora-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Reliable North Aurora Limo"
        headingBold="and Shuttle Service"
        subtitle="for All Occasions"
        body="Travel around North Aurora with confidence and style using our 24/7 North Aurora, IL limo service. Whether you need a timely airport shuttle, a luxurious wedding limo, or reliable transportation for any special occasion, we provide professional drivers, clean vehicles, and on-time service to make every ride smooth and stress-free. Book now and experience worry-free travel today!"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/north-aurora-happy-clients.png"
        imageAlt="Happy clients in a North Aurora limousine — Stop and Go Airport Shuttle"
        imagePosition="left"
        :inverted="true"
    />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/north-aurora-city-of-aurora.png"
        imageAlt="City of Aurora, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why Choose Us?"
        descSubheading="Complete North Aurora Transportation Services"
        descBody="As North Aurora's trusted transportation provider, our North Aurora limo service offers complete luxury transportation services:"
        :descBullets="[
            'Stylish wedding limo for unforgettable ceremonies and receptions',
            'On-time airport shuttle for stress-free arrivals and departures',
            'Fun party bus rental for celebrations and group travel',
            'Reliable chauffeur service for executive and personal trips',
            'Seamless event transportation to keep your special occasions smooth',
            'Professional limousine transportation for premium comfort and style',
        ]"
        descClosing="Our team focuses on punctuality, safety, and your satisfaction, ensuring every ride is safe, comfortable, and dependable. Book your ride now using our quick contact form."
        descImage="/images/sections/north-aurora-city-of-aurora.png"
        descImageAlt="City of Aurora, Illinois — Stop and Go Airport Shuttle"
        :descImageTop="true"
        :inverted="true"
    />

    <x-sections.travel-in-style
        heading="North Aurora Airport Shuttle to"
        headingBold="O'Hare & Midway"
        body="Our airport shuttle provides reliable service to O'Hare and Midway with guaranteed on-time pickups. Serving North Aurora, downtown, West neighborhoods, and the Fox Valley area, our shuttle ensures stress-free travel with luggage assistance, flight monitoring, and expert navigation for efficient trips to O'Hare and Midway."
        buttonText="Book Airport Shuttle"
        buttonHref="/bookings-reservations"
        image="/images/sections/north-aurora-airport.png"
        imageAlt="Airport transportation in North Aurora, Illinois — Stop and Go Airport Shuttle"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.our-services
        heading="Our"
        headingBold="Services"
    />

    <x-sections.city-info-grid :boxes="[
        ['heading' => 'North Aurora',              'items' => ['North Aurora', 'Fox Valley Mall area', 'Orchard Road corridor', 'West Galena Boulevard neighborhoods', 'North Aurora residential areas']],
        ['heading' => 'South Aurora',              'items' => ['South Aurora neighborhoods', 'Eola Road corridor', 'Route 59 access areas', 'New York Street neighborhoods', 'Aurora East Side residential areas']],
        ['heading' => 'West Aurora',               'items' => ['West Aurora neighborhoods', 'Boulder Hill area', 'Orchard Road vicinity', 'I-88 corridor businesses', 'Montgomery Road access areas']],
        ['heading' => 'Central & Downtown Aurora', 'items' => ['Downtown Aurora', 'Historic Downtown Aurora', 'Fox Riverfront area', 'Aurora City Hall vicinity', 'Two Rivers neighborhood']],
        ['heading' => 'Nearby Suburbs',            'items' => ['Montgomery', 'Sugar Grove', 'Oswego', 'Batavia', 'Yorkville']],
        ['heading' => 'Wedding Venues',            'items' => ['Ballydoyle event center', 'Gaslite Manor', 'Naperville IL Banquets near Aurora', 'Hollywood Casino Aurora', 'Area churches and reception halls']],
    ]" />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
