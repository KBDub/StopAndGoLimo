@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Party Bus Rental Aurora IL Night Out",
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
    "areaServed": { "@@type": "City", "name": "Aurora", "addressRegion": "IL" },
    "description": "Party bus rental in Aurora, IL for a night out. Professional chauffeurs, LED lighting, premium sound, and flat-rate pricing. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Service Areas","item": "https://newlenoxlimoservice.com/service-areas" },
        { "@@type": "ListItem", "position": 3, "name": "Aurora IL Party Bus Night Out", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Party Bus Rental in Aurora IL for a Night Out"
    metaDescription="Party bus rental in Aurora, IL for a night out your crew will never forget. Professional chauffeurs, LED lighting, premium sound, and flat-rate pricing. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/party-bus-aurora-il.png"
    ogImageAlt="Party bus rental in Aurora IL, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="Aurora IL"
        headingBold="Party Bus Rental"
        :headingTwoLines="false"
        subtitle="Your night out in Aurora starts the moment you step on board"
        description="Aurora, Illinois has no shortage of great nights out, and Stop & Go Airport Shuttle Service, Inc. makes sure your group arrives in style for every one of them. Our Aurora party bus rental service takes the stress out of planning a night on the town. No one has to drive. No one has to worry about parking downtown or getting home safely. We pick up your group, take you where you want to go, and bring you back when you are ready. Our party buses come equipped with premium sound systems, LED lighting, leather seating, and room for your whole crew to move around and celebrate. We serve birthdays, bachelorette parties, prom groups, concerts, sporting events, and any other occasion worth celebrating in Aurora and the surrounding Fox Valley area. Every chauffeur is background-checked, uniformed, and trained to provide a safe and professional experience. We also serve airport transfers to O'Hare and Midway. Call us or book online anytime."
        buttonText="Book a Party Bus"
        buttonHref="/get-a-quote"
        image="/images/heroes/party-bus-aurora-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Aurora Nights,"
        headingBold="Done Right"
        subtitle="From Fox Valley to downtown Chicago, we take your group anywhere"
        body="Stop & Go has been serving the Aurora area with professional group transportation since 2009. Whether your night starts in Aurora and ends in Chicago, or you are making a full evening loop through the Fox Valley, our chauffeurs know the routes and the timing. Your group rolls together, stays together, and gets home safely together."
        buttonText="View Our Services"
        buttonHref="/our-services"
        image="/images/sections/party-bus-aurora.jpg"
        imageAlt="Party bus in Aurora, Illinois with Stop and Go"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Perfect for Any"
        heading="Aurora Occasion"
        body="Our Aurora party bus rentals cover birthdays, bachelorette parties, bachelor parties, prom and homecoming nights, weddings and rehearsal dinners, concerts at Limelight Event Center or Paramount Theatre, sporting events, and corporate team outings. If your group is heading out together, we are the right call."
    />

    <section id="party-bus-features" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    What Your Aurora Party Bus <strong>Includes</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Every vehicle in our fleet comes fully equipped for an unforgettable night.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['feature' => 'LED Lighting Throughout',     'why' => 'Creates an electric atmosphere that keeps the energy high from pickup to drop-off.'],
                    ['feature' => 'Premium Sound System',        'why' => 'Bluetooth audio so your group controls the playlist all night long.'],
                    ['feature' => 'Wrap-Around Leather Seating', 'why' => 'Comfortable and spacious, with room to stand up, move, and socialize.'],
                    ['feature' => 'Beverage Coolers',            'why' => 'Keeps drinks cold and accessible so nobody has to stop the fun.'],
                    ['feature' => 'Climate Control',             'why' => 'Stay comfortable in any season, from a July birthday to a December holiday party.'],
                    ['feature' => 'Professional Chauffeur',      'why' => 'Background-checked, uniformed driver so your whole group rides home safely.'],
                ] as $f)
                <div style="background: var(--navy); padding: 1.75rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">{{ $f['feature'] }}</h3>
                    <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;">{{ $f['why'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.aurora-night-out />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Plan your"
        headingBold="Aurora night out"
        headingTail="today"
        image="/images/sections/party-bus-aurora-illinois.png"
        imageAlt="Party bus rental in Aurora, Illinois"
        imageAspect="4/3"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Serving Aurora and the Fox Valley"
        descSubheading="Every occasion. Every group size."
        descBody="We serve Aurora, North Aurora, Oswego, Montgomery, Sugar Grove, and surrounding Fox Valley communities. Here is what every rental includes:"
        :descBullets="[
            'Door-to-door pickup and drop-off anywhere in the Aurora area',
            'Flat-rate pricing with no surprise charges at the end of the night',
            'Professional chauffeur with local knowledge of Aurora and Chicagoland',
            'Fully equipped party bus ready at your start time',
            'Group sizes from 10 to 55 passengers',
            'Available 24 hours a day, 7 days a week',
        ]"
        descClosing="Call (815) 585-6922 or book online to reserve your Aurora party bus today."
        descImage="/images/sections/party-bus-aurora-illinois.png"
        descImageAlt="Aurora IL party bus rental with Stop and Go"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
