@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Wedding Party Bus Rental",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "(815) 585-6922",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        }
    },
    "areaServed": "Illinois",
    "description": "Wedding party bus rental throughout Chicagoland. Transport your bridal party and guests in comfort and style. Flat-rate pricing. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",              "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Wedding Limousine", "item": "https://newlenoxlimoservice.com/wedding-limousine-services" },
        { "@@type": "ListItem", "position": 3, "name": "Wedding Party Bus Rental", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Wedding Party Bus Rental for Your Big Day"
    metaDescription="Wedding party bus rental throughout Chicagoland. Transport your bridal party and guests in comfort and style. Professional chauffeurs, flat-rate pricing. Call (815) 585-6922."
    currentPage="our-services"
    ogImage="/images/heroes/bus-rentals-for-wedding.png"
    ogImageAlt="Wedding party bus rental, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="Wedding"
        headingBold="Party Bus Rental"
        :headingTwoLines="false"
        subtitle="Keep your wedding party together, on time, and stress-free"
        description="Your wedding day should be perfect from start to finish, and that includes the transportation. Stop & Go Airport Shuttle Service, Inc. provides professional wedding party bus rental service throughout Chicagoland. We transport bridal parties, groomsmen, and wedding guests with elegance and punctuality. Our wedding party buses are spacious enough to keep the entire wedding party together, fully equipped with sound systems and mood lighting, and driven by uniformed, background-checked chauffeurs who understand the importance of timing on your big day. We serve wedding venues across New Lenox, Naperville, Aurora, Joliet, and the greater Chicago area. In addition to wedding day transportation, we also provide airport transfers to O'Hare and Midway for out-of-town guests. Our flat-rate pricing means no surprises on your invoice. Booking is simple and our team walks you through every detail before your wedding day. Corporate clients, quinceañera groups, prom parties, and concert-goers also rely on us throughout the year. Call (815) 585-6922 to plan your wedding transportation today."
        buttonText="Plan Wedding Transport"
        buttonHref="/get-a-quote"
        image="/images/heroes/bus-rentals-for-wedding.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Your Whole Wedding Party,"
        headingBold="One Beautiful Ride"
        subtitle="Elegant, spacious, and always on time"
        body="A wedding party bus keeps everyone together from the ceremony to the reception and every stop in between. No scrambling for directions. No guests arriving late. No cars blocking the venue parking lot. Your entire bridal party rolls in together, looking great and ready to celebrate. Our chauffeurs coordinate timing directly with your wedding planner or venue so every pickup and arrival is seamless."
        buttonText="View Wedding Services"
        buttonHref="/wedding-limousine-services"
        image="/images/sections/wedding-party-bus.jpg"
        imageAlt="Wedding party bus rental with Stop and Go Airport Shuttle Service"
        :inverted="false"
    />

    <x-sections.info-strip
        headingBold="Every Detail"
        heading="Handled Before the Big Day"
        body="We work with you in advance to map out every pickup location, timing window, and drop-off point. Our chauffeurs confirm the itinerary the night before your wedding and arrive early on the day. If your schedule shifts, we adapt. You have enough to think about on your wedding day. Transportation should not be one of them."
    />

    <section id="wedding-packages" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    What a Wedding Party Bus <strong>Includes</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Every vehicle is prepared specifically for your wedding day itinerary.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Spacious Interiors',           'desc' => 'Room for the entire bridal party to ride comfortably without feeling crowded.'],
                    ['title' => 'Mood Lighting',                'desc' => 'Elegant LED cabin lighting that sets the right tone for a wedding celebration.'],
                    ['title' => 'Premium Sound System',         'desc' => 'Play your playlist on the way from ceremony to reception, or just enjoy the moment.'],
                    ['title' => 'Climate Control',              'desc' => 'Stay comfortable whether your wedding is in June or December.'],
                    ['title' => 'Uniformed Chauffeur',          'desc' => 'Background-checked, professionally dressed driver who treats your day with the care it deserves.'],
                    ['title' => 'Pre-Confirmed Itinerary',      'desc' => 'We review every pickup, stop, and drop-off with you before the wedding day.'],
                ] as $w)
                <div style="background: var(--navy); padding: 1.75rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">{{ $w['title'] }}</h3>
                    <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;">{{ $w['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.wedding-transport-guide />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Plan your"
        headingBold="wedding transportation"
        headingTail="today"
        image="/images/sections/wedding-party-bus-rental.png"
        imageAlt="Wedding party bus rental with Stop and Go Airport Shuttle Service"
        imageAspect="4/3"
        imageObjectPosition="center top"
        rightVariant="description"
        descHeading="We Also Serve Your Wedding Guests"
        descSubheading="Airport transfers for out-of-town guests"
        descBody="Out-of-town family and friends flying in for your wedding deserve the same professional experience. We provide:"
        :descBullets="[
            'Airport transfers from O\'Hare and Midway to your venue or hotel',
            'Guest shuttle service between hotel and ceremony or reception',
            'Stretch limousine service for the couple',
            'Multi-vehicle coordination for large wedding parties',
            'Flat-rate pricing with no hidden charges',
            'Available 24 hours a day including early morning airport pickups',
        ]"
        descClosing="Contact us early to secure your wedding date. Popular weekends book up months in advance. Call (815) 585-6922."
        descImage="/images/sections/wedding-party-bus-rental.png"
        descImageAlt="Wedding transportation service throughout Chicagoland"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
