@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Naperville, IL",
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
    "areaServed": { "@@type": "City", "name": "Naperville", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Naperville, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Naperville Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Naperville, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Naperville, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Naperville"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Naperville, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/downtown-naperville-aerial.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        body="Stop & Go offers dependable transportation services throughout Naperville. It provides a professional 24/7 Naperville airport shuttle to O'Hare and Midway."
        buttonText="Book Naperville Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/downtown-naperville-aerial.jpg"
        imageAlt="Aerial view of downtown Naperville, Illinois — Stop and Go Airport Shuttle"
        imagePosition="left"
        :inverted="true"
    />

    <x-sections.info-strip
        headingPrefix="Reliable & On-Time"
        headingBold="Every Trip"
        heading=""
        body="Stop & Go provides Naperville with 24/7 airport shuttle service to O'Hare and Midway, limousine service for weddings and events, and party bus rentals for celebrations. Serving downtown, North Naperville, and surrounding areas, our professional chauffeurs deliver reliable, comfortable transportation for every occasion."
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
                'body'   => 'Once confirmed, your luxury Naperville ride is locked in. All that\'s left is to sit back and enjoy the experience.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/naperville-fiq.jpg"
        imageAlt="Aerial view of Naperville, Illinois — Stop and Go Airport Shuttle Service"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why Choose Us?"
        descSubheading="Complete Transportation Solutions for Naperville Residents"
        descBody="As Naperville's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services:"
        :descBullets="[
            'Naperville airport shuttle for timely arrivals and departures',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate transportation for business meetings and executive travel',
            'Wedding vehicles to make your special day seamless',
        ]"
        descClosing="Our intimate knowledge of Naperville, from the Riverwalk to downtown, from Route 59 to I-88, ensures efficient and reliable transportation throughout the community."
        descImage="/images/sections/naperville-fiq.jpg"
        descImageAlt="Aerial view of Naperville, Illinois — Stop and Go Airport Shuttle Service"
        :descImageTop="true"
    />

    <x-sections.travel-in-style
        heading="Naperville Airport"
        headingBold="Shuttle Service"
        body="Our Naperville airport shuttle provides 24/7 service to O'Hare and Midway with guaranteed on-time pickups. Serving downtown Naperville, North Naperville, and areas along Route 59, our Naperville airport shuttle ensures stress-free travel with luggage assistance, flight monitoring, and expert navigation for efficient Naperville to O'Hare and Naperville to Midway trips."
        buttonText="Book Naperville Shuttle"
        buttonHref="/bookings-reservations"
        image="/images/sections/naperville-limo-service.jpg"
        imageAlt="Luxury limousine service in Naperville, Illinois — Stop and Go Airport Shuttle"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.our-services />

    <x-sections.city-info-grid :boxes="[
        ['heading' => 'North Naperville',   'items' => ['Tall Grass', 'Winding Creek', 'White Eagle', 'Ashwood Park', 'Timber Ridge']],
        ['heading' => 'South Naperville',   'items' => ['South Naperville neighborhoods', 'East side Naperville', 'Route 53 corridor', 'Mound Road areas', 'South Route 59 corridor']],
        ['heading' => 'West Naperville',    'items' => ['Green Trails', 'Cress Creek', 'Brookdale', 'Meadow Glens', 'River Run']],
        ['heading' => 'Downtown Naperville','items' => ['Downtown Naperville (Riverwalk area)', 'Historic District', 'Jefferson Hill neighborhood', 'Hobson West', 'Springbrook Prairie']],
        ['heading' => 'Near Major Roads',   'items' => ['Central Naperville', 'Washington Street area', 'Naper Boulevard corridor', 'Naperville Station area', 'Fort Hill neighborhood']],
        ['heading' => 'Central Naperville', 'items' => ['Royal Melbourne', 'Glenmeade', 'Whispering Meadows', 'Eagle Pointe', 'Western Springs neighborhood']],
    ]" />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation Solutions"
        headingBold="for Naperville Residents"
        body="As Naperville's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services including Naperville airport shuttle, Naperville limo service, Naperville party bus, corporate transportation, and wedding vehicles. Our intimate knowledge of Naperville, from downtown Riverwalk to North Naperville and South & West neighborhoods, from Route 59 corridor to I-88 and I-355 access, ensures efficient, reliable transportation throughout the community and for Naperville to O'Hare trips."
        buttonText="Contact"
        buttonHref="/get-a-quote"
        directions="• Downtown Naperville to O'Hare: 35 to 50 minutes via I-88 East • West Naperville to O'Hare: 40 to 55 minutes • Naperville to Midway Airport: 30 to 45 minutes via I-55 North • Naperville I-88 corridor to both airports"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
