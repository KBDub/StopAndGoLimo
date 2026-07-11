@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "New Lenox Limo Service",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        }
    },
    "areaServed": { "@@type": "City", "name": "New Lenox", "addressRegion": "IL" },
    "description": "Professional limo service in New Lenox, IL. Airport transfers to O'Hare and Midway, weddings, proms, corporate travel, and more."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",          "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://newlenoxlimoservice.com/service-areas" },
        { "@@type": "ListItem", "position": 3, "name": "New Lenox Limo Service", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="New Lenox Limo Service"
    metaDescription="Professional limo service in New Lenox, IL. Airport transfers to O'Hare and Midway, weddings, proms, corporate travel, and more."
    currentPage="service-areas"
    ogImage="/images/sections/limousine-professional.jpg"
    ogImageAlt="Luxury limo service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="New Lenox"
        headingBold="Limo Service"
        :headingTwoLines="false"
        subtitle="Premium chauffeured transportation, available 24 hours a day"
        description="Stop & Go Airport Shuttle Service, Inc. has been serving New Lenox with professional limo service since 2009. We are based at 400 E Lincoln Hwy, right in the heart of the community, and we are ready around the clock every day of the year. Whether you need a flat-rate airport transfer to O'Hare or Midway, a stretch limousine for your wedding, a party bus for prom night, or a town car for a corporate meeting, we have the right vehicle for you. Our fleet includes executive sedans, luxury SUVs, stretch limousines, and spacious coach buses. Every vehicle is professionally maintained and every chauffeur is background-checked and uniformed. We serve all of New Lenox and surrounding Will County communities, including Frankfort, Mokena, Joliet, and Homer Glen. Corporate executives, wedding couples, prom groups, quinceañera celebrations, bachelorette parties, sports fans, and concert-goers all count on us every day. Book online or call us anytime."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/limousine-professional.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        subtitle="Driven by professional chauffeurs you can trust"
        body="Stop & Go provides reliable transportation throughout New Lenox and all of Chicagoland. From flat-rate airport runs to O'Hare and Midway, to limousine service for weddings and special events, to party bus rentals for groups of all sizes, we handle every type of trip with care and professionalism. Our team has been earning the trust of Will County residents and businesses since 2009."
        buttonText="View Our Services"
        buttonHref="/our-services"
        image="/images/sections/classy-limo.jpg"
        imageAlt="Luxury limousine for hire in New Lenox, Illinois"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Your Complete"
        heading="New Lenox Transportation Solution"
        body="From a solo airport run to a full wedding party convoy, Stop & Go has you covered. Our New Lenox limo service includes airport transfers, corporate travel, wedding limousines, prom party buses, and special event transportation. We serve all of New Lenox including downtown, Spencer Crossing, Fox Hill, and the Route 30 corridor. Our chauffeurs know Will County roads and are always on time."
    />

    <x-sections.limo-services-grid />

    <section id="vehicle-types" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    The Right Vehicle for <strong>Every Trip</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Choose from our fleet of professionally maintained luxury vehicles. Every option comes with a uniformed, background-checked chauffeur.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['title' => 'Executive Sedan',    'capacity' => '1 to 3 passengers',  'use' => 'Airport transfers and corporate meetings'],
                    ['title' => 'Luxury SUV',         'capacity' => '4 to 6 passengers',  'use' => 'Small groups and extra luggage runs'],
                    ['title' => 'Stretch Limousine',  'capacity' => '6 to 10 passengers', 'use' => 'Weddings, proms, and celebrations'],
                    ['title' => 'Van and Coach Bus',  'capacity' => '7 to 55 passengers', 'use' => 'Corporate shuttles and large groups'],
                ] as $v)
                <div style="background: var(--white); border: 1px solid var(--cloud); padding: 1.5rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.25rem; font-weight: 600; color: var(--navy); line-height: 1.3;" class="mb-2">{{ $v['title'] }}</h3>
                    <p style="font-family: var(--font-head); color: var(--champagne); font-weight: 600; font-size: 0.9rem;" class="mb-2">{{ $v['capacity'] }}</p>
                    <p style="font-family: var(--font-body); color: var(--slate); font-size: 1rem; line-height: 1.5;">{{ $v['use'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.why-chauffeured />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/blog-limo.jpg"
        imageAlt="Professional limo service in New Lenox, Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why New Lenox Chooses Stop & Go"
        descSubheading="Locally based since 2009"
        descBody="We are more than a transportation company. We are your New Lenox neighbors. Here is what sets us apart:"
        :descBullets="[
            'Flat-rate pricing with no hidden fees or surge charges',
            'Real-time flight tracking for every airport pickup',
            'Background-checked, uniformed chauffeurs on every ride',
            'On-time guarantee, every time',
            'Available 24 hours a day, every day of the year',
            'Serving New Lenox since 2009 with thousands of satisfied rides',
        ]"
        descClosing="Whether it is your first ride with us or your fiftieth, you get the same professional service every time."
        descImage="/images/sections/blog-limo.jpg"
        descImageAlt="Professional limo ready for service in New Lenox, Illinois"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.our-services />

    <x-sections.faq preset="new-lenox" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
