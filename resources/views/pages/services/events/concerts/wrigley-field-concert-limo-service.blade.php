@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "https://www.newlenoxlimoservice.com",
    "name": "Stop & Go Airport Shuttle Service, Inc.",
    "telephone": "+17083154445",
    "url": "https://www.newlenoxlimoservice.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Wrigley Field Concert Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",         "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",        "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",      "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",      "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",     "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",       "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Wrigley Field concerts from anywhere in Chicagoland. Expert Wrigleyville staging. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Wrigley Field Concert Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/wrigley-field-concert-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to Wrigley Field concerts from anywhere in Chicagoland. Expert Wrigleyville staging and post-show exit. Flat-rate pricing. Book today."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",           "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",       "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Special Events", "item": "https://www.newlenoxlimoservice.com/special-event-limousine" },
        { "@type": "ListItem", "position": 4, "name": "Wrigley Field Concert Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/wrigley-field-concert-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to Wrigley Field concerts from anywhere in Chicagoland. No Wrigleyville parking search. No residential street navigation on a sold-out night. No surge-priced car after the encore. We pick up your group at your door and deliver you to Clark and Addison in time for everything the Friendly Confines has to offer on a concert night. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group. Every chauffeur is background-checked, uniformed, and trained on Wrigleyville concert-specific staging. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'Rolling Stone has named Wrigley Field the best outdoor stadium concert venue in the United States. The ballpark, which opened in 1914 and earned National Historic Landmark status, brings a completely different energy to a concert than any purpose-built arena or amphitheatre. The ivy-covered outfield walls, the hand-operated scoreboard, and the intimate scale of the stadium create an experience that artists and audiences describe as unlike any other concert setting in the country. The limited summer concert calendar, typically only two to four shows per year, makes every date a genuinely special occasion.',
    'Wrigleyville, the dense North Side neighborhood that grew up around Wrigley Field, is one of Chicago\'s most celebrated entertainment districts. Clark Street and Sheffield Avenue are lined with iconic sports bars, restaurants, and rooftop clubs that face the outfield from across the street. Gallagher Way, the plaza just west of the main gate, hosts pre-concert events and gatherings before many shows. Our clients typically build a full Wrigleyville evening around the concert, and our chauffeurs know every stop on the block.',
    'Because Wrigley Field sits directly inside a residential neighborhood with no dedicated parking structure of its own, the post-show logistics are uniquely challenging. Concert-night street closures, crowd flow patterns, and rideshare staging differ from a Cubs game day, and our chauffeurs train specifically on the concert-night configuration. Your group arrives and departs exactly as planned, without any of the uncertainty that comes with trying to navigate Wrigleyville after 40,000 people have just left the same building.',
];

$eventFeaturesRightItems = [
    ['service' => 'Wrigley Field Concert Season Packages', 'description' => 'Dedicated transportation for the limited Wrigley Field concert calendar each summer, including multi-show season bookings for corporate clients.'],
    ['service' => 'Chicago Cubs Game Day Transportation',   'description' => 'Year-round Cubs game day limo and party bus service from anywhere in Chicagoland to Clark and Addison.'],
    ['service' => 'Concert and Live Music Events',          'description' => 'Ravinia Festival, United Center, Soldier Field, House of Blues, Aragon Ballroom, and every major Chicago venue served with the same reliable service.'],
    ['service' => 'Corporate Client Entertainment',         'description' => 'Wrigley Field concert packages for client entertainment, company outings, and executive group bookings on the limited summer concert calendar.'],
    ['service' => 'Bachelor and Bachelorette Parties',      'description' => 'Multi-stop Wrigleyville celebration rides built around a sold-out concert at the Friendly Confines.'],
    ['service' => 'Airport Transfers',                      'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Wrigleyville energy from the first pickup',  'why' => 'Dimmable LED lighting sets the tone before the first song and keeps the celebration going on the ride home after an unforgettable night at the Friendly Confines.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your North Side ride',        'why' => 'Bluetooth audio throughout the cabin means your group controls the music from their driveway all the way to Clark and Addison.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your group',        'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate on the way to one of the best concert venues in the country.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold for the full evening',           'why' => 'Keep the energy going on both legs of the trip. Coolers are stocked and ready before your pickup and available on the ride home after the show.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable on any summer concert night',    'why' => 'Wrigley Field concerts run through the Chicago summer. Our climate control keeps your group comfortable in any weather on the way there and the way home.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time', 'why' => 'Every chauffeur is vetted, trained on Wrigleyville concert-night routing, and focused on getting your group to the Friendly Confines and back safely.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody fights the Wrigleyville post-show grid', 'detail' => 'Concert-night Wrigleyville has its own crowd patterns and street closures that differ from a game day. Our chauffeurs train on the concert-specific configuration and have your group moving while others are still navigating the sidewalk.'],
    ['feature' => 'Skip the residential street parking search',    'detail' => 'Wrigley Field has no dedicated parking structure. Concert nights fill every nearby street and lot for blocks. We drop your group at the entrance and stage away from the main exit crowd.'],
    ['feature' => 'Full Wrigleyville evening built in',            'detail' => 'Clark Street, Sheffield Avenue, and Gallagher Way are part of the Wrigley Field concert experience. We build the timing so your group has a pre-show dinner, a Clark Street stop, or a Gallagher Way visit before the main event.'],
    ['feature' => 'Post-show pickup is already arranged',          'detail' => 'No competing for a rideshare on a blocked Addison Street after 40,000 people leave at once. Your chauffeur is staged at the pre-arranged meeting point and ready when your group walks out.'],
];

$detailsParagraphs = [
    'The fact that Wrigley Field hosts only a handful of concerts each summer is exactly what makes each one feel like an event within an event. Artists who have played here describe it as a different kind of concert experience, one where the venue itself becomes part of the performance. The limited calendar means groups who want to go book early, and groups who want to go by party bus book even earlier. Our availability on Wrigley concert dates typically fills 3 to 4 weeks ahead.',
    'A Wrigley Field concert with us typically looks like this: pickup at your door anywhere in Chicagoland, a pre-show Wrigleyville dinner stop or Clark Street bar visit, the concert itself, and then whatever your group decides after the final song. A rooftop bar. A late dinner in Lincoln Park. Or straight home if it is a weeknight. The schedule is built around your plans from start to finish.',
    'We serve groups from every corner of Chicagoland for Wrigley Field concert transportation: Naperville, Aurora, Schaumburg, Arlington Heights, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. For a bucket-list concert at one of the best outdoor venues in the country, the right ride is part of the experience.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'Wrigley Field concert pricing, confirmed',                      'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the evening and any stops you have planned. No surge pricing. No adjustments for Wrigleyville traffic or how long the show runs.'],
    ['num' => '02', 'title' => 'We confirm your concert night details',             'detail' => 'Show time, Wrigleyville stop, group size',                      'body' => 'The day before, our team reviews your pickup address, timing, group size, and any stops. We confirm the show time and build your departure window around it, with buffer for the Kennedy Expressway and Wrigleyville concert-night access.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'Wrigleyville concert drop-off and staging pre-planned',        'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the Kennedy routing and the specific Wrigley Field concert-night drop-off and post-show staging point.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',                'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'Clark Street stop, the concert, post-show. Your call.',        'body' => 'Your chauffeur handles the Kennedy Expressway, the Wrigleyville approach, and any timing adjustments. Pre-show bar stop, Gallagher Way, straight to the gates, or a post-show dinner stop. We adapt to what your group decides.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged away from Addison Street concert congestion',       'body' => 'After the final song, your chauffeur is at the pre-arranged meeting point, away from the main exit crowd on Addison Street. Your group is heading home while others are still trying to get a car.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',      'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines for smaller, more intimate concert groups. Luxury sprinter vans for mid-size groups. Party buses for larger groups. Tell us your headcount and we will match you to the right vehicle.',           'note' => 'Tell us your headcount when you request a quote.'],
    ['occasion' => 'Pickup Routing',          'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Naperville, Aurora, Schaumburg, Evanston, Orland Park, New Lenox, downtown Chicago, and every suburb in Chicagoland. Multi-address pickups for concert groups from different neighborhoods are handled regularly.',                  'note' => null],
    ['occasion' => 'Wrigleyville Drop-Off',   'timing' => 'Right at the gates',             'urgency' => 'high',   'detail' => 'Our chauffeurs know Wrigley Field concert-night drop-off and coordinate a staging point near Clark and Addison that accounts for the concert-specific street closures. The exact meeting point is confirmed with your group leader before departure.',   'note' => 'Drop-off and pickup points are confirmed the day before your show.'],
    ['occasion' => 'Wrigleyville Stops',      'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A Clark Street dinner, a Gallagher Way stop, or a pre-show rooftop visit before the concert is one of our most popular additions to a Wrigley Field booking. We build the timing so your group makes it inside before the first song.',               'note' => null],
    ['occasion' => 'Post-Show Pickup',        'timing' => 'Staged and ready at last song',  'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage at the pre-arranged meeting point and monitor the show. When the concert ends, they are ready to move before the Addison Street crowd builds.',                                               'note' => 'Your rate does not change based on show length.'],
    ['occasion' => 'Flat-Rate Pricing',       'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for Wrigleyville traffic or a sold-out night. No surprise fees. Gratuity is not included but is always appreciated.',                                                      'note' => null],
];
@endphp

<x-layouts.page
    title="Wrigley Field Concert Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to Wrigley Field concerts from anywhere in Chicagoland. Expert Wrigleyville staging and post-show exit. Flat-rate pricing. Book today."
    currentPage="services"
    ogImage="/images/special-events/concerts/wrigley-field-concert.jpg"
    ogImageAlt="Wrigley Field concert night at the Friendly Confines in Chicago, served by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Wrigley Field Concerts"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your Wrigley Field concert starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/wrigley-field-concert.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Wrigleyville Parking Search,"
        headingBold="Arrive at the Friendly Confines in Style"
        heading=""
        body="Wrigley Field hosts only a handful of concerts each summer, and Rolling Stone has named it the best outdoor stadium concert venue in the United States. For every group that has driven to Clark and Addison on a concert night, the residential street parking and the post-show exit are as memorable as the show itself. We handle both so your group focuses on an evening at one of the great live music settings in America."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to Clark and Addison"
        subtitle="Pickup from every corner of Chicagoland"
        body="Our chauffeurs know Wrigleyville on a concert night. They know the Kennedy Expressway timing, the concert-specific drop-off approach at Clark and Addison, and the post-show staging that gets your group moving before the crowd fills Addison Street. Whether you are starting from the suburbs, downtown, or another Chicago neighborhood, a Wrigley Field concert night is exactly the occasion where the right transportation becomes part of the experience itself."
        note="No matter your group size, we have a vehicle for your Wrigley Field concert. Call us and we will match you to the right one."
        image="/images/special-events/concerts/wrigley-concert-cta.jpg"
        imageAlt="Wrigley Field exterior at night lit up for a summer concert, Chicago, Illinois"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Wrigley Field Concert"
        headingTail="Ride"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/wrigley-field-fiq.jpg"
        descImageAlt="Wrigley Field concert night in Chicago, the Friendly Confines lit up for a summer show"
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best Wrigley Field Concert Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with years of experience getting groups to Wrigley Field for both game day and concert-night bookings:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Concert-specific Wrigleyville staging and post-show exit planning',
            'Multi-address pickup from any Chicagoland suburb',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our chauffeurs are ready to get your group to Clark and Addison and back, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Wrigley Field Concert Limo"
    />

    <x-sections.event-features
        heading="The Wrigley Field Concert Experience,"
        headingBold="Start to Finish"
        intro="A Wrigley Field concert night is a full North Side story. The ballpark, the Wrigleyville neighborhood surrounding it, Clark Street, Sheffield Avenue, and the Chicago lakefront just to the east are all part of what makes a show here one of the most sought-after concert experiences in the country."
        leftHeading="Wrigley Field, Wrigleyville, and the Best Outdoor Concert Venue in America"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for Wrigley Field Concerts"
        intro="Getting to a Wrigley Field concert on your own means navigating the Kennedy, finding street parking in a residential neighborhood with no dedicated lots, and competing with 40,000 people for the same exit routes after the show. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Wrigley Field Concert Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Wrigley Field concert ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach the Friendly Confines"
        intro="A great Wrigley Field concert night does not happen by accident. Here is everything we handle from the moment you book to the moment we drop you at Clark and Addison."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="Wrigley Field Concert Night"
        intro="These are the six things our clients care most about when booking a Wrigley Field concert ride. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="wrigley-field-concert" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Wrigley Field Concert Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable night at the Friendly Confines. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
