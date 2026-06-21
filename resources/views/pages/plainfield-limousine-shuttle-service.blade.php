@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Plainfield, IL",
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
    "areaServed": { "@@type": "City", "name": "Plainfield", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Plainfield, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Plainfield Limo"
    metaDescription="24/7 limo and airport shuttle service in Plainfield, IL. Transfers to O'Hare and Midway, corporate travel, weddings, and events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Plainfield, Illinois"
>
    <x-sections.category-hero
        heading="Plainfield Airport Shuttle,"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="false"
        subtitle="Private transportation for every Plainfield occasion"
        subtitleIn="serving Plainfield, Illinois"
        description="Stop & Go Airport Shuttle Service, Inc. provides private airport shuttle, limousine, and party bus service throughout Plainfield, Illinois. Flat-rate transfers to O'Hare (ORD) and Midway (MDW) with real-time flight tracking, available 24 hours a day. We also serve Plainfield with wedding limousines, prom party buses for Plainfield North and South, birthday and bachelorette celebrations, quinceañera transportation, and corporate car service along the Route 59 corridor. Every driver is background-checked, uniformed, and trained. Plainfield is one of the fastest-growing communities in Illinois and we are proud to serve it. Flat-rate pricing. Call us or reserve online."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/plainfield-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        subtitle="Driven by certified drivers you can trust"
        body="Stop & Go provides reliable transportation throughout Plainfield. We offer a professional 24/7 Plainfield airport shuttle to O'Hare and Midway."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/plainfield-limo.jpg"
        imageAlt="Limousine service in Plainfield, Illinois — Stop and Go Airport Shuttle"
        imagePosition="left"
    />

    <x-sections.info-strip
        headingPrefix="Reliable & Stylish"
        headingBold="Plainfield Transportation"
        heading=""
        body="Stop & Go provides transportation throughout Plainfield with reliable airport shuttle service to O'Hare and Midway, elegant limo service for weddings and events, and party bus rentals. Serving all neighborhoods, our professional team ensures comfort and reliability with easy access to both Chicago airports."
    />

    <x-sections.three-steps
        :inverted="true"
        :steps="[
            [
                'number' => 'Step 1',
                'title'  => 'Submit Your Request',
                'body'   => 'Fill out our simple online form with your contact info, event type, and preferred booking date.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'Confirm the Details',
                'body'   => 'Our team will reach out to confirm availability, pricing, and answer any questions you have.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Travel With Confidence',
                'body'   => 'Once confirmed, your luxury Plainfield ride is locked in. All that\'s left is to sit back and enjoy the experience.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/plainfield-fiq.jpg"
        imageAlt="Airport transfer vehicle interior — Stop and Go Airport Shuttle, Plainfield Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why Choose Us?"
        descSubheading="Complete Plainfield Transportation Services"
        descBody="As Plainfield's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services:"
        :descBullets="[
            'Plainfield airport shuttle for timely arrivals and departures',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate transportation for business meetings and executive travel',
            'Wedding vehicles to make your special day seamless',
        ]"
        descClosing="Our intimate knowledge of Plainfield, from downtown to Wynstone, Settlers' Park, and Whispering Meadows, from Route 59 to Route 126 and I-55 access, ensures efficient and reliable transportation throughout this thriving Will County community."
        descImage="/images/sections/plainfield-fiq.jpg"
        descImageAlt="Airport transfer vehicle interior — Stop and Go Airport Shuttle, Plainfield Illinois"
        :descImageTop="true"
    />

    <x-sections.travel-in-style
        heading="24/7 Plainfield Airport Shuttle to"
        headingBold="O'Hare & Midway"
        body="Our Plainfield airport shuttle provides round-the-clock service to O'Hare and Midway with on-time pickups from anywhere in Plainfield. Serving downtown, Wynstone, Settlers' Park, Whispering Meadows, and other neighborhoods, we ensure stress-free travel with flight monitoring, luggage assistance, and expert I-55 navigation for efficient Plainfield to O'Hare and Plainfield to Midway trips."
        buttonText="Book Airport Shuttle"
        buttonHref="/bookings-reservations"
        image="/images/sections/plainfield-shuttle.jpg"
        imageAlt="Airport shuttle service in Plainfield, Illinois — Stop and Go Airport Shuttle"
        imagePosition="right"
    />

    <x-sections.our-services />

    <x-sections.city-info-grid
        :boxes="[
            [
                'heading' => 'North Plainfield',
                'items'   => [
                    'Wynstone',
                    'Settlers\' Park',
                    'Whispering Meadows',
                    'North subdivisions',
                    '135th Street areas',
                ],
            ],
            [
                'heading' => 'South Plainfield',
                'items'   => [
                    'South Plainfield neighborhoods',
                    'Eastern Creek area',
                    'Route 126 corridor',
                    'Local parks & recreation areas',
                    'Countryside residential neighborhoods',
                ],
            ],
            [
                'heading' => 'West Plainfield',
                'items'   => [
                    'West Plainfield neighborhoods',
                    'Near Romeoville border',
                    'Near Joliet border',
                    'Modern subdivisions',
                    'Industrial & commercial areas',
                ],
            ],
            [
                'heading' => 'Downtown & Central Plainfield',
                'items'   => [
                    'Downtown Plainfield',
                    'Historic downtown area',
                    'Village Links Golf Course area',
                    'Central business district',
                    'Plainfield Road corridor',
                ],
            ],
            [
                'heading' => 'Major Roads & Access',
                'items'   => [
                    'Route 59 corridor',
                    'Route 126 corridor',
                    'I-55 access points',
                    'Historic Route 66 areas',
                    'Local connector roads',
                ],
            ],
            [
                'heading' => 'Plainfield High Schools',
                'items'   => [
                    'Plainfield North High School area',
                    'Plainfield South High School area',
                    'Plainfield East High School area',
                    'Plainfield Central High School area',
                    'Nearby school facilities & parks',
                ],
            ],
        ]"
    />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation Solutions Throughout"
        headingBold="Plainfield"
        body="As Plainfield's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services including Plainfield airport shuttle, corporate transportation, wedding vehicles, and other services. Our intimate knowledge of Plainfield, from downtown to Wynstone, Settlers' Park, and Whispering Meadows, with easy access to Route 59 and I-55, ensures efficient, reliable transportation throughout this vibrant Will County community."
        buttonText="Contact Us"
        buttonHref="/get-a-quote"
        directions="• Downtown Plainfield to O'Hare: 50–65 minutes via I-55 North • West Plainfield to O'Hare: 55–70 minutes • Plainfield to Midway Airport: 45–55 minutes via I-55 North • Plainfield I-80/I-55 corridor to both airports"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
