@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Limo Service",
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
    "description": "Professional limo service throughout Chicagoland. Airport transfers, weddings, corporate travel, prom, and special events. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Our Services", "item": "https://newlenoxlimoservice.com/our-services" },
        { "@@type": "ListItem", "position": 3, "name": "Limo Service", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Limo Service"
    metaDescription="Professional limo service throughout Chicagoland. Airport transfers to O'Hare and Midway, weddings, corporate travel, prom, and special events. Call (815) 585-6922."
    currentPage="our-services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional limo service, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="Professional"
        headingBold="Limo Service"
        :headingTwoLines="false"
        subtitle="Your ride for every occasion, available 24 hours a day"
        description="Stop & Go Airport Shuttle Service, Inc. is Chicagoland's trusted provider of professional limo service for every type of occasion. We serve New Lenox, Naperville, Aurora, Joliet, and communities across the southwest, west, and northwest suburbs. Whether you need a single executive sedan for a corporate meeting or a full fleet of vehicles for a wedding party, we have the right solution. Our team of uniformed, background-checked chauffeurs provides flat-rate airport transfers to O'Hare and Midway, luxury limousine service for weddings and special events, party bus rentals for groups of all sizes, and corporate transportation for businesses throughout the region. We also serve prom and graduation groups, quinceañera celebrations, bachelorette and birthday parties, concert-goers, and sports fans heading to games in Chicago. Every vehicle in our fleet is professionally maintained. Booking is easy online or over the phone. We are available 24 hours a day, every day of the year. Call (815) 585-6922 to get started."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Limo Service for"
        headingBold="Every Occasion"
        subtitle="One call covers every transportation need"
        body="From a solo airport run to a full wedding party convoy, Stop & Go handles every type of chauffeured transportation. Our fleet includes executive sedans, luxury SUVs, stretch limousines, and coach buses. Every vehicle is clean, maintained, and driven by a professional. We serve the entire Chicagoland area from our New Lenox base, 24 hours a day."
        buttonText="View Rates"
        buttonHref="/rates"
        image="/images/sections/corporate-limo.jpg"
        imageAlt="Professional limo service available throughout Chicagoland"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="No Surge Pricing."
        heading="No Surprises. Just a Great Ride."
        body="Every trip with Stop & Go is a flat rate. You see the price when you book and that is the price you pay. No meter running. No surge fees during storms or peak hours. No mystery charges on your invoice. Just professional transportation at a fair, transparent price. We have been earning the trust of Chicagoland riders since 2009."
    />

    <section id="service-menu" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    Every Service, <strong>One Provider</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Stop & Go covers every ground transportation need across Chicagoland.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Airport Transfers',        'desc' => 'Flat-rate rides to O\'Hare and Midway with real-time flight tracking and meet-and-greet service.',       'href' => '/airport-shuttle-ohare-midway'],
                    ['title' => 'Wedding Limousine',        'desc' => 'Elegant limousine service for brides, grooms, and wedding parties on your most important day.',           'href' => '/wedding-limousine-services'],
                    ['title' => 'Corporate Travel',         'desc' => 'Professional executive transportation for meetings, conferences, and client entertainment.',                'href' => '/corporate-car-services'],
                    ['title' => 'Party Bus Rental',         'desc' => 'Spacious, fully equipped party buses for birthdays, bachelorettes, proms, and group celebrations.',       'href' => '/party-bus-rental-chicago'],
                    ['title' => 'Special Events',           'desc' => 'Concert transportation, sporting events, galas, quinceañeras, and any occasion worth celebrating.',       'href' => '/special-event-limousine'],
                    ['title' => 'Prom and Graduation',      'desc' => 'Safe, stylish transportation for prom groups and graduation celebrations throughout Illinois.',            'href' => '/prom-party-bus-rental-illinois'],
                ] as $svc)
                <a href="{{ $svc['href'] }}" style="text-decoration: none;">
                    <div style="background: var(--navy); padding: 1.75rem; height: 100%; transition: background 0.2s;" onmouseover="this.style.background='var(--navy-light)'" onmouseout="this.style.background='var(--navy)'">
                        <h3 style="font-family: var(--font-head); font-size: 1.2rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">{{ $svc['title'] }}</h3>
                        <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;">{{ $svc['desc'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/driver-classy.jpg"
        imageAlt="Professional chauffeur ready to serve throughout Chicagoland"
        imageAspect="16/9"
        imageObjectPosition="center top"
        rightVariant="description"
        descHeading="The Stop & Go Standard"
        descSubheading="Every ride, every time"
        descBody="We built our reputation one ride at a time. Here is what every customer gets:"
        :descBullets="[
            'Flat-rate pricing locked in at booking, no surprises',
            'Uniformed, background-checked chauffeurs',
            'Professionally maintained vehicles, inspected regularly',
            'On-time pickups guaranteed',
            'Available 24 hours a day, 365 days a year',
            'Local Chicagoland expertise since 2009',
        ]"
        descClosing="Ready to book? Call (815) 585-6922 or reserve online in minutes."
        descImage="/images/sections/driver-classy.jpg"
        descImageAlt="Professional chauffeur with luxury vehicle"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.our-services />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
