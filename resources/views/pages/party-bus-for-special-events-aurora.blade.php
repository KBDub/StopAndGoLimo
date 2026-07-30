@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Party Bus for Special Events Aurora",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service, Inc.",
        "telephone": "{!! $clientConfig->phone_raw !!}",
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
    "description": "Party bus for special events in Aurora and Naperville. Festivals, galas, concerts, corporate outings, and more. Professional chauffeurs."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",          "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Special Events","item": "https://newlenoxlimoservice.com/special-event-limousine" },
        { "@@type": "ListItem", "position": 3, "name": "Party Bus for Special Events Aurora", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Party Bus for Special Events in Aurora"
    metaDescription="Party bus for special events in Aurora and Naperville. Festivals, galas, corporate outings, concerts, and quinceañeras. Professional chauffeurs."
    currentPage="our-services"
    ogImage="/images/heroes/hero-special-event.jpg"
    ogImageAlt="Party bus for special events in Aurora, Stop & Go Airport Shuttle Service, Inc."
>
    <x-sections.category-hero
        heading="Party Bus for"
        headingBold="Special Events"
        :headingTwoLines="false"
        subtitle="Because special occasions deserve exceptional transportation"
        description="Special events deserve exceptional transportation. Stop & Go Airport Shuttle Service, Inc. provides party bus service for special events throughout Aurora, Naperville, and all of Chicagoland. From festivals and galas to corporate outings and holiday parties, we make sure your group arrives together, on time, and in style. Our party buses are fully equipped with premium sound systems, LED lighting, comfortable leather seating, and climate control. No one has to drive, no one has to organize carpools, and no one has to search for parking at a crowded venue. We handle all of it so your group can focus on the event itself. Our chauffeurs are uniformed, background-checked professionals with years of experience navigating the Chicago suburbs. We serve events in Aurora, Naperville, Joliet, Chicago, and communities across the region. We also provide airport transfers to O'Hare and Midway for groups arriving from out of town. Book online or call anytime."
        buttonText="Book for Your Event"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-special-event.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="The Journey Becomes"
        headingBold="Part of the Event"
        subtitle="Your group together from start to finish"
        body="When your group travels together, the excitement builds before you even arrive. No splitting into multiple cars. No one getting lost on the way. No parking drama at a packed venue. Our party buses for special events let everyone relax, enjoy the ride, and walk into the event energized and on time. Our professional chauffeurs take care of the rest."
        buttonText="View Special Events"
        buttonHref="/special-event-limousine"
        image="/images/sections/celebrate-your-big-event.png"
        imageAlt="Group arriving at a special event on a party bus in Aurora"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Any Occasion,"
        heading="One Call Away"
        body="Stop & Go Airport Shuttle Service, Inc. handles party bus transportation for festivals, corporate galas, charity events, quinceañeras, holiday parties, prom and homecoming nights, concert trips, sporting events, and private celebrations of any kind. If your group is heading somewhere special together, we are the right call. We serve Aurora, Naperville, and all of Chicagoland."
    />

    <section id="event-types" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    Events We Serve <strong>Every Week</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Our party buses are a perfect fit for groups of all sizes heading to any type of event.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['event' => 'Festivals',             'desc' => 'Ribfest, Venetian Night, and other Aurora and Naperville festivals without the parking headache.'],
                    ['event' => 'Corporate Galas',       'desc' => 'Polished, professional group transportation for company events and client entertainment.'],
                    ['event' => 'Concerts',              'desc' => 'Paramount Theatre, Limelight, and Chicago venues, your group arrives together and leaves together.'],
                    ['event' => 'Quinceañeras',          'desc' => 'Elegant and spacious transportation for the quinceañera court and family guests.'],
                    ['event' => 'Holiday Parties',       'desc' => 'Office celebrations, neighborhood parties, and New Year\'s events served safely and stylishly.'],
                    ['event' => 'Sporting Events',       'desc' => 'Bears, Bulls, Blackhawks, White Sox, and Cubs games with group transportation from the Fox Valley.'],
                    ['event' => 'Charity Events',        'desc' => 'Galas, fundraisers, and award ceremonies with reliable group transportation.'],
                    ['event' => 'Private Celebrations',  'desc' => 'Milestone birthdays, anniversaries, retirements, and any occasion worth celebrating together.'],
                ] as $e)
                <div style="background: var(--white); border: 1px solid var(--cloud); padding: 1.5rem;">
                    <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--navy); line-height: 1.3;" class="mb-2">{{ $e['event'] }}</h3>
                    <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.5;">{{ $e['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Ready for your"
        headingBold="special event?"
        headingTail=""
        image="/images/sections/comfort-event-bus.jpg"
        imageAlt="Party bus for special events in Aurora and Naperville"
        imageAspect="4/3"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Serving Aurora, Naperville, and All of Chicagoland"
        descSubheading="Professional event transportation since 2015"
        descBody="Every special event rental includes:"
        :descBullets="[
            'Door-to-door pickup and drop-off at the venue',
            'Flat-rate pricing with no surprise charges',
            'Background-checked, uniformed professional chauffeur',
            'Fully equipped vehicle, ready on time for your event',
            'Group sizes from 10 to 55 passengers',
            'Available 24 hours a day for events of any kind',
        ]"
        descClosing="Plan your special event transportation today. or book a free quote online."
        descImage="/images/sections/comfort-event-bus.jpg"
        descImageAlt="Special event party bus in Aurora"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
