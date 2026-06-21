@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Joliet, IL",
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
    "areaServed": { "@@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Joliet, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Joliet Limo"
    metaDescription="24/7 limo and airport shuttle service in Joliet, IL. Transfers to O'Hare and Midway, corporate travel, weddings, and events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Joliet, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Joliet"
        headingBold="Limo & Airport Shuttle"
        :headingTwoLines="false"
        subtitle="Will County's most trusted private transportation company"
        subtitleIn="serving Joliet, Illinois"
        description="Stop & Go Airport Shuttle Service, Inc. provides 24-hour limousine and airport shuttle service throughout Joliet, Illinois, the seat of Will County. We offer flat-rate, door-to-door transfers to O'Hare (ORD) and Midway (MDW) with real-time flight tracking, available every hour of the day. Beyond airport travel, we serve Joliet with wedding limousines, prom and grad day buses, birthday and bachelorette transportation, quinceañera celebrations, corporate car service, and entertainment shuttles to Harrah's and Hollywood Casino. Background-checked, uniformed chauffeurs. We serve Plainfield, Bolingbrook, New Lenox, Romeoville, and Lockport. Flat-rate pricing. Book online or call."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/joliet-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        body="Stop & Go offers dependable transportation services throughout Joliet. We provide a professional 24/7 Joliet airport shuttle to O'Hare and Midway, limousine service for weddings and special events, and party bus rentals for group celebrations — all backed by experienced chauffeurs and a commitment to on-time service."
        image="/images/sections/joliet-limo.jpg"
        imageAlt="Rialto Square Theatre in Joliet, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />


    <x-sections.info-strip
        headingBold="Reliable & Stylish"
        heading="Joliet Transportation"
        body="Stop & Go offers 24/7 Joliet airport shuttle service, limousine service for weddings and events, and party bus rentals for celebrations. Serving all Joliet neighborhoods, our professional chauffeurs provide reliable, comfortable transportation to O'Hare, Midway, and throughout the Chicago area."
    />
    
    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        rightVariant="description"
        :inverted="true"
        :descImageTop="true"
        descHeading="Why choose us?"
        descSubheading="Complete Joliet Transportation Services"
        descBody="As Joliet's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services:"
        :descBullets="['Joliet airport shuttle for timely arrivals and departures', 'Limousine service for weddings, events, and special occasions', 'Party bus rental for celebrations and group travel', 'Corporate transportation for business meetings and executive travel', 'Wedding vehicles to make your special day seamless']"
        descClosing="Our intimate knowledge of Joliet, from downtown Historic District to I-80 corridor, from Route 59 to I-55 access, ensures efficient and reliable transportation throughout this vibrant Will County community."
        descImage="/images/sections/joliet-transportation.png"
        descImageAlt="Wedding and event transportation in Joliet, Illinois — Stop and Go Airport Shuttle"
    />

    <x-sections.review-slider :inverted="true" />

    <x-sections.travel-in-style
        heading="24/7 Joliet Airport Shuttle to"
        headingBold="O'Hare & Midway"
        body="Our Joliet airport shuttle provides 24/7 service to O'Hare and Midway with guaranteed on-time pickups. Serving downtown Joliet, West Joliet, and the I-80 corridor, our Joliet airport shuttle ensures stress-free travel with luggage assistance, flight monitoring, and expert navigation for efficient Joliet to O'Hare and Joliet to Midway trips."
        image="/images/sections/joliet-airport-shuttle.webp"
        imageAlt="Chicago O'Hare International Airport tower — Stop and Go Airport Shuttle serving Joliet"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.our-services :inverted="true" />

    <x-sections.city-info-grid :boxes="[
        [
            'heading' => 'North Joliet',
            'items'   => ['Historic District', 'Cathedral Area', 'Joliet City Center', 'Rialto Square Theatre area', 'Pilcher Park area'],
        ],
        [
            'heading' => 'South Joliet',
            'items'   => ['South Joliet neighborhoods', 'East side Joliet', 'Route 53 corridor', 'Mound Road areas', 'Ruby Street corridor'],
        ],
        [
            'heading' => 'West Joliet',
            'items'   => ['Rockdale', 'Crest Hill (border)', 'I-80 corridor businesses', 'Route 30 areas', 'Plainfield Road corridor'],
        ],
        [
            'heading' => 'Downtown & Central Joliet',
            'items'   => ['Historic District', 'Cathedral Area', 'Joliet City Center', 'Rialto Square Theatre area', 'Pilcher Park area'],
        ],
        [
            'heading' => 'Industrial & Business Corridors',
            'items'   => ['Renwick Road area', 'Joliet Township', 'I-55 North neighborhoods', 'Bolingbrook border area', 'North Crest Hill'],
        ],
        [
            'heading' => 'Nearby Suburbs & Communities',
            'items'   => ['Shorewood', 'Plainfield border', 'Aurora border areas', 'Naperville border areas', 'Joliet Slammers area'],
        ],
    ]" />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation Solutions for"
        headingBold="Joliet Residents"
        body="As Joliet's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services including Joliet airport shuttle, Joliet limo service, Joliet party bus, corporate transportation, and wedding vehicles. Our intimate knowledge of Joliet, from the downtown Historic District to the I-80 corridor, from Route 59 to I-55 access, ensures efficient and reliable transportation throughout this vibrant Will County community."
    />

    <x-sections.faq preset="joliet" />

    <x-sections.areas-we-serve background="dark" />

    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
