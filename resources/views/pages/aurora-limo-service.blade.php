@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Aurora, IL",
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
    "areaServed": { "@@type": "City", "name": "Aurora", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Aurora, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Aurora Limo"
    metaDescription="24/7 limo and airport shuttle service in Aurora, IL. Transfers to O'Hare and Midway, corporate travel, weddings, and events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Aurora, Illinois"
>
    <x-sections.category-hero
        heading="Aurora Airport Shuttle,"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="false"
        subtitle="Trusted private transportation throughout Aurora and the Fox Valley"
        description="Stop & Go Airport Shuttle Service, Inc. provides private airport shuttle, limousine, and party bus service throughout Aurora, Illinois. Flat-rate transfers to O'Hare (ORD) and Midway (MDW) with real-time flight tracking, available 24 hours a day. We serve the I-88 corridor and Fox Valley business community with executive car service, and provide birthday, bachelorette, quinceañera, prom, and wedding transportation. We serve North Aurora, Oswego, Naperville, Elgin, Geneva, and all surrounding Fox Valley communities. Every driver is background-checked, uniformed, and trained. Flat-rate, all-inclusive pricing. Book online or call us any time."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/aurora-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.party-limo-image
        heading="Aurora Limo Service for"
        headingBold="Weddings & Events"
        headingTail=""
        body="From elegant wedding arrivals to milestone celebrations, our Aurora limo service brings luxury and reliability to every occasion. Step into a professionally driven vehicle, relax in plush comfort, and arrive exactly on time. Our local Aurora chauffeurs know every venue, every route, and every detail that makes your event truly memorable."
        image="/images/sections/aurora-wedding-transport.jpg"
        imageAlt="Wedding transportation limousine in Aurora, Illinois — Stop and Go Airport Shuttle"
        imageAspect="4/3"
        imageObjectPosition="center"
    />

    <x-sections.info-strip
        headingPrefix="Reliable & Stylish"
        headingBold="Aurora Transportation"
        heading=""
        body="Stop & Go provides 24/7 airport shuttle service to O'Hare and Midway, luxury limo service for weddings and events, and party bus rentals. With professional drivers and modern vehicles, we ensure punctual, comfortable service for early morning airport rides, weddings, or parties throughout Chicago, Naperville, Aurora, Joliet, Plainfield, New Lenox, and surrounding suburbs."
    />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/aurora-city.jpg"
        imageAlt="City of Aurora, Illinois — Stop and Go Airport Shuttle Service"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why Choose Us?"
        descSubheading="Complete Aurora Transportation Services"
        descBody="As Aurora's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services:"
        :descBullets="[
            'Aurora airport shuttle for timely arrivals and departures',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate transportation for business meetings and executive travel',
            'Wedding vehicles to make your special day seamless',
        ]"
        descClosing="Our intimate knowledge of Aurora, from downtown to North and West Aurora, ensures efficient and reliable transportation throughout this vibrant city."
        descImage="/images/sections/aurora-city.jpg"
        descImageAlt="City of Aurora, Illinois — Stop and Go Airport Shuttle Service"
        :descImageTop="true"
    />

    <x-sections.review-slider />
            
    <x-sections.travel-in-style
        heading="Aurora Airport Shuttle to"
        headingBold="O'Hare & Midway"
        body="Our airport shuttle provides 24/7 service to O'Hare and Midway with guaranteed on-time pickups. Serving downtown, North and West neighborhoods, and the Fox Valley area, our shuttle ensures stress-free travel with luggage assistance, flight monitoring, and expert navigation for efficient trips to O'Hare and Midway."
        buttonText="Book Aurora Airport Shuttle"
        buttonHref="/bookings-reservations"
        image="/images/sections/aurora-airport.jpg"
        imageAlt="Airport transportation in Aurora, Illinois — Stop and Go Airport Shuttle"
        imagePosition="right"
    />

    <x-sections.our-services />

    <x-sections.city-info-grid :boxes="[
        ['heading' => 'North Aurora',             'items' => ['North Aurora', 'Fox Valley Mall area', 'Orchard Road corridor', 'West Galena Boulevard neighborhoods', 'North Aurora residential areas']],
        ['heading' => 'South Aurora',             'items' => ['South Aurora neighborhoods', 'Eola Road corridor', 'Route 59 access areas', 'New York Street neighborhoods', 'Aurora East Side residential areas']],
        ['heading' => 'West Aurora',              'items' => ['West Aurora neighborhoods', 'Boulder Hill area', 'Orchard Road vicinity', 'I-88 corridor businesses', 'Montgomery Road access areas']],
        ['heading' => 'Central & Downtown Aurora','items' => ['Downtown Aurora', 'Historic Downtown Aurora', 'Fox Riverfront area', 'Aurora City Hall vicinity', 'Two Rivers neighborhood']],
        ['heading' => 'Nearby Suburbs',           'items' => ['Montgomery', 'Sugar Grove', 'Oswego', 'Batavia', 'Yorkville']],
        ['heading' => 'Wedding Venues',           'items' => ['Ballydoyle event center', 'Gaslite Manor', 'Naperville IL Banquets near Aurora', 'Hollywood Casino Aurora', 'Area churches and reception halls']],
    ]" />

    <x-sections.faq preset="aurora" />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
