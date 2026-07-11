@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Party Bus Rental Chicagoland",
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
    "areaServed": "Illinois",
    "description": "Party bus rentals throughout Chicagoland. Birthdays, bachelorettes, weddings, proms, corporate events, and concerts."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Our Services", "item": "https://newlenoxlimoservice.com/our-services" },
        { "@@type": "ListItem", "position": 3, "name": "Rent the Party Bus of Your Dreams", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Rent the Party Bus of Your Dreams"
    metaDescription="Rent a luxury party bus in Chicagoland for birthdays, bachelorettes, weddings, proms, and more. Professional chauffeurs, flat-rate pricing."
    currentPage="our-services"
    ogImage="/images/heroes/party-bus-dreams-hero.png"
    ogImageAlt="Luxury party bus rental, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="Rent the Party Bus"
        headingBold="of Your Dreams"
        :headingTwoLines="false"
        subtitle="Luxury group transportation for any occasion, anywhere in Chicagoland"
        description="Stop & Go Airport Shuttle Service, Inc. makes it easy to rent the party bus you have been imagining. We serve New Lenox, Aurora, Naperville, Joliet, and communities across Chicagoland with a fleet of luxury party buses for every type of occasion. Birthday celebrations, bachelorette parties, prom nights, wedding parties, corporate outings, concert trips, and sporting events all come alive when your group rides together on a professionally driven party bus. Our vehicles come equipped with premium sound systems, LED lighting, leather seating, and ample space to socialize and enjoy the ride. Every chauffeur is background-checked, uniformed, and committed to a smooth, safe, on-time experience. We also provide flat-rate airport transfers to O'Hare and Midway for groups arriving together. Pricing is straightforward with no hidden fees. Booking is easy online or over the phone. The party starts the moment you step on board. or book online today."
        buttonText="Book Your Party Bus"
        buttonHref="/get-a-quote"
        image="/images/heroes/party-bus-dreams-hero.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="When the Ride Becomes"
        headingBold="the Celebration"
        subtitle="Everyone together, nobody driving"
        body="The right party bus does not just get your group from Point A to Point B. It becomes part of the memory. Music playing, lights set just right, everyone laughing and together from the very first pickup. Stop & Go provides the vehicle, the chauffeur, and the experience. Your group provides the occasion. We will handle everything else."
        buttonText="View Our Fleet"
        buttonHref="/our-services"
        image="/images/sections/party-smile-limo.jpg"
        imageAlt="Group enjoying a luxury party bus with Stop and Go"
        :inverted="false"
    />

    <x-sections.info-strip
        headingBold="Built for Every"
        heading="Group and Every Occasion"
        body="Our party buses serve groups from 10 to 55 passengers across every type of event. Birthdays, bachelorette parties, bachelor parties, prom and homecoming nights, weddings and rehearsal dinners, concerts at Chicago and suburban venues, Bears and Cubs game trips, corporate team events, quinceañeras, holiday parties, and more. Whatever brings your group together, we get you there in style."
    />

    <section id="occasions" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    Your Occasion, <strong>Our Bus</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    We match the right vehicle and setup to your specific event and group size.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['occasion' => 'Birthday Parties',          'desc' => 'Milestone or surprise, we make sure the birthday person and their crew arrive in style.'],
                    ['occasion' => 'Bachelorette Parties',      'desc' => 'The bride deserves a send-off to remember. Our party buses keep the whole group together all night.'],
                    ['occasion' => 'Proms and Dances',          'desc' => 'Safe, stylish, and unforgettable for students and peace of mind for parents.'],
                    ['occasion' => 'Weddings',                  'desc' => 'Bridal party transportation that keeps everyone on time, comfortable, and ready to celebrate.'],
                    ['occasion' => 'Corporate Events',          'desc' => 'Polished group transportation for conferences, client entertainment, and team outings.'],
                    ['occasion' => 'Concerts and Sporting Events','desc' => 'Skip the parking. Travel together. Arrive energized and leave without the lot hassle.'],
                ] as $o)
                <div style="background: var(--navy); padding: 1.75rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">{{ $o['occasion'] }}</h3>
                    <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;">{{ $o['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.party-bus-niche-occasions />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Reserve your"
        headingBold="party bus"
        headingTail="today"
        image="/images/sections/party-bus-dreams-interior.jpg"
        imageAlt="Luxury party bus interior with neon LED lighting, Stop and Go"
        imageAspect="4/3"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="What Every Rental Includes"
        descSubheading="Straightforward pricing. No surprises."
        descBody="Every party bus rental with Stop & Go includes:"
        :descBullets="[
            'Door-to-door pickup and drop-off at locations you choose',
            'Flat-rate pricing locked in at the time of booking',
            'Background-checked, uniformed professional chauffeur',
            'Fully equipped vehicle with sound, lighting, and seating ready',
            'On-time guarantee on every reservation',
            'Available 24 hours a day, 7 days a week',
        ]"
        descClosing="We serve New Lenox, Aurora, Naperville, Joliet, and all of Chicagoland. or book online anytime."
        descImage="/images/sections/party-bus-dreams-interior.jpg"
        descImageAlt="Party bus interior with LED lighting and premium seating"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
