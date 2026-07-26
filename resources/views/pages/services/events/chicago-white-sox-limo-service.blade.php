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
    "name": "Chicago White Sox Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",         "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",     "addressRegion": "IL" },
        { "@type": "City", "name": "Tinley Park",     "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",       "addressRegion": "IL" },
        { "@type": "City", "name": "Joliet",          "addressRegion": "IL" },
        { "@type": "City", "name": "Oak Lawn",        "addressRegion": "IL" },
        { "@type": "City", "name": "Beverly",         "addressRegion": "IL" },
        { "@type": "City", "name": "Mount Greenwood", "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Rate Field for White Sox games from anywhere in Chicagoland. Groups of 13 or more. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Chicago White Sox Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/chicago-white-sox-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to Rate Field from anywhere in Chicagoland. Groups of 13 or more. Flat-rate pricing. Book your White Sox game day ride today."
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
        { "@type": "ListItem", "position": 4, "name": "Chicago White Sox Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/chicago-white-sox-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to Rate Field from anywhere in Chicagoland. No Dan Ryan traffic stress. No parking lot search. No waiting for a surge-priced car home after a South Side walk-off win. We pick up your group at your door in Orland Park, Tinley Park, New Lenox, Joliet, or Beverly, and we deliver you to the gates on time, every time. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for groups of 13 or more. Every chauffeur is background-checked, uniformed, and trained on Dan Ryan routing and Bridgeport-area staging. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'Rate Field sits at 35th and Shields in Armour Square, a South Side neighborhood built around the rhythms of White Sox baseball. The ballpark opened in 1991 and has established its own identity distinct from the North Side: broader, more open, and built for the kind of South Side crowd that takes the game seriously. The exploding scoreboard is an institution. Arriving at Rate Field in a chauffeured vehicle is how you set the tone for a South Side evening done right.',
    'Bridgeport, the dense neighborhood immediately north of Rate Field, has been the social center for White Sox fans before and after games for generations. The restaurants, bars, and local spots along 35th Street and Halsted are a pre-game tradition built into many of our bookings. Our chauffeurs know Bridgeport well, which stops stage cleanly for a group, and how to build the timing so a pre-game dinner stop still has your group at the gates before first pitch.',
    'South of Bridgeport, the broader South Side stretches through Beverly, Mount Greenwood, Morgan Park, and Hyde Park toward the lakefront. Many of our White Sox clients come from these neighborhoods, as well as from Orland Park, Tinley Park, Oak Lawn, and the southwest suburbs that have deep Sox roots. For visiting guests, the Museum Campus and the lakefront are easy additions to any post-game itinerary. We build the full South Side experience around your group.',
];

$eventFeaturesRightItems = [
    ['service' => 'Weddings',                          'description' => 'Elegant stretch limousines for Chicagoland ceremonies, receptions, and bridal party transportation across the full metro area.'],
    ['service' => 'Concerts and Live Events',          'description' => 'Wintrust Arena, United Center, Hollywood Casino Amphitheatre, and every major Chicagoland venue served with the same reliability as a game day ride.'],
    ['service' => 'Corporate Outings',                 'description' => 'Client entertainment at Rate Field suites, company events, and executive group transportation throughout all of Chicagoland.'],
    ['service' => 'Prom and Homecoming',               'description' => 'Safe, professional party bus service for Illinois high school students from every community across Chicagoland.'],
    ['service' => 'Bachelor and Bachelorette Parties', 'description' => 'Multi-stop South Side and city-wide bar crawls designed around your group\'s night, start to finish.'],
    ['service' => 'Airport Transfers',                 'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and flat-rate pricing.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'South Side energy from the first pickup',       'why' => 'Dimmable LED lighting sets the mood before the first pitch and keeps the celebration going long after the final out, win or lose.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your ride',                      'why' => 'Bluetooth audio throughout the cabin means your group controls the music from Orland Park all the way to 35th Street.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your crew',            'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one is squeezed into a back seat on a long southwest-suburb drive.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold, hands free, all ride long',        'why' => 'Keep the celebration going between stops. Coolers are stocked and ready before your pickup.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in April or August',                'why' => 'Chicago game day weather runs from 40 degrees to 95. Our climate control keeps your group comfortable through a hot July doubleheader or a chilly April opener.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time',    'why' => 'Every chauffeur is vetted, trained on Dan Ryan Expressway patterns and Bridgeport-area routing, and focused on getting your group to Rate Field and back safely.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody has to be the designated driver',  'detail' => 'Your whole group celebrates, drinks responsibly, and enjoys the game without anyone drawing the short straw for the drive home.'],
    ['feature' => 'Skip the South Side parking search',      'detail' => 'Game-day parking near Rate Field fills fast and clears slowly. We drop your group at the gates and pick up at a pre-staged spot, away from the worst lot congestion.'],
    ['feature' => 'The party starts before first pitch',     'detail' => 'Premium sound, LED lighting, and room to move means the South Side celebration starts the moment you leave your driveway, not when you find your seat.'],
    ['feature' => 'Post-game pickup is already arranged',    'detail' => 'No waiting in a gridlocked lot while the Dan Ryan backs up. Your chauffeur stages nearby and is ready to move when the final out lands.'],
];

$detailsParagraphs = [
    'The pregame atmosphere around Rate Field has its own character: more relaxed and neighborhood-driven than the North Side, built around tailgating, Bridgeport restaurant stops, and the kind of South Side pride that goes back generations. Our chauffeurs know the area well, where to stage, which routes clear first after a night game, and how to time the departure so your group is moving while the Dan Ryan lots are still gridlocked.',
    'A White Sox game day with us typically looks like this: pickup at your door, an optional pre-game Bridgeport dinner stop, the game itself, and wherever your group wants to go after the final out. A bar nearby, a downtown nightcap, the Museum Campus for visiting guests, or straight home. We build the schedule around your group.',
    'We serve clients from every corner of Chicagoland for White Sox game day transportation: Orland Park, Tinley Park, Oak Lawn, New Lenox, Joliet, Beverly, Mount Greenwood, Hyde Park, downtown Chicago, and the western and northwest suburbs. Multi-address pickups and multi-stop itineraries are standard for us.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                    'detail' => 'White Sox game day pricing, confirmed',                          'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the game and any stops on your itinerary. No surge pricing. No adjustments for Dan Ryan congestion or game-time changes.'],
    ['num' => '02', 'title' => 'We confirm your game-day details',                'detail' => 'First pitch time, pickup route, group size',                     'body' => 'The day before your game, our team reviews your pickup address, timing, group size, and any stops on your itinerary. We pull up the first pitch time and build your departure window around it, with buffer time for I-294 and the Dan Ryan.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded', 'detail' => 'Bridgeport drop-off and post-game staging pre-planned',          'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the Dan Ryan routing and the specific Rate Field drop-off and post-game staging point for your group.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                    'detail' => '10 to 15 minutes ahead of your departure time',                  'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                  'detail' => 'Bridgeport dinner, the game, post-game. Your call.',             'body' => 'Your chauffeur handles the route, the traffic, and any timing adjustments. A pre-game Bridgeport stop, straight to the gates, or a stop on the way home — we adapt to what your group wants.'],
    ['num' => '06', 'title' => 'Post-game pickup, everyone home safe',             'detail' => 'Pre-staged away from the worst Dan Ryan lot congestion',         'body' => 'After the final out, your chauffeur is at the pre-arranged meeting point, away from the gridlocked parking lots and the Dan Ryan backup. Your group is rolling while others are still sitting in traffic.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',       'timing' => 'Groups of 13 or more',             'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines and executive SUVs work well for smaller outings. Sprinter vans and party buses handle larger crowds. Tell us your headcount and we will match you to the right vehicle.',                                                                                                          'note' => 'Tell us your headcount when you request a quote. We will match you to the right vehicle.'],
    ['occasion' => 'Pickup Routing',           'timing' => 'Anywhere in Chicagoland',           'urgency' => 'medium', 'detail' => 'We pick up from Orland Park, Tinley Park, New Lenox, Joliet, Beverly, Mount Greenwood, Oak Lawn, northwest suburbs, downtown Chicago, and Northwest Indiana. Multi-address pickups from several locations in the same group are handled regularly.',                                                                         'note' => null],
    ['occasion' => 'Rate Field Drop-Off',      'timing' => 'Right at the gates',                'urgency' => 'high',   'detail' => 'Our chauffeurs know the game-day staging near 35th and Shields. We avoid the worst lot and Dan Ryan congestion and communicate the exact meeting point to your group leader before departure.',                                                                                                                                  'note' => 'Drop-off and pickup points are confirmed with your group leader the day before the game.'],
    ['occasion' => 'Pre-Game Stops',           'timing' => 'Built into your itinerary',         'urgency' => 'medium', 'detail' => 'A Bridgeport dinner stop before the game is one of our most popular additions to a White Sox game day booking. We build pre-game stop timing into the schedule so you make it to your seats before first pitch.',                                                                                                              'note' => null],
    ['occasion' => 'Post-Game Pickup',         'timing' => 'Staged and ready at final out',     'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage near the park and monitor the game. When the final out is recorded, they are ready to move before the Dan Ryan lots back up onto the streets.',                                                                                                                        'note' => 'Extra-inning games are not a problem. Your rate does not change based on game length.'],
    ['occasion' => 'Flat-Rate Pricing',        'timing' => 'Locked at booking',                 'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for Dan Ryan traffic or a packed game night. No surprise fees at the end of the evening. Gratuity is not included but is always appreciated.',                                                                                                         'note' => null],
];
@endphp

<x-layouts.page
    title="Chicago White Sox Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to Rate Field from anywhere in Chicagoland. Groups of 13 or more. Flat-rate pricing. Book your White Sox game day ride today."
    currentPage="services"
    ogImage="/images/heroes/hero-special-event.jpg"
    ogImageAlt="Luxury party bus for Chicago White Sox game day transportation, Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Chicago White Sox"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your Rate Field trip starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/heroes/hero-special-event.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Dan Ryan Traffic,"
        headingBold="Ride to Rate Field"
        heading=""
        body="We handle I-294, the Dan Ryan merge, and the post-game lot gridlock so your group focuses on the game, the exploding scoreboard, and the South Side tradition, not the commute."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to Rate Field"
        subtitle="Pickup from every corner of Chicagoland"
        body="Our chauffeurs know the South Side. They know where to stage near 35th and Shields, how to route around the Dan Ryan after a sold-out night game, and how to build the right buffer for I-294 and the Bishop Ford so your group arrives relaxed. Whether you are coming from the southwest suburbs, Northwest Indiana, or downtown Chicago, we have run this route many times. You focus on your pre-game plans. We handle everything from your driveway to the Rate Field gates."
        note="Groups of 13 or more passengers. Call us for exact availability by group size."
        image="/images/heroes/hero-chicago-bears-party-bus.jpg"
        imageAlt="Luxury party bus exterior, available for Chicago White Sox game day transportation from anywhere in Chicagoland"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="White Sox Game Day"
        headingTail="Ride"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/heroes/hero-chicago-bears-fiq.jpg"
        descImageAlt="Rate Field at 35th and Shields, home of the Chicago White Sox, served by Stop & Go Airport Shuttle Service, Inc."
        descHeading="Why Choose Us?"
        descSubheading="White Sox Game Day Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with more than two decades of experience getting groups to Rate Field safely and on time:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Rate Field drop-off and post-game pickup staging included',
            'Multi-address pickup from any Chicagoland suburb or neighborhood',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our professional chauffeurs are ready to get your group to 35th and Shields and back, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Chicago White Sox Game Day Limo"
    />

    <x-sections.event-features
        heading="The Rate Field Experience,"
        headingBold="Start to Finish"
        intro="A White Sox game day is a full South Side story. Rate Field, the Bridgeport neighborhood around it, and the city stretching south toward the lakefront are all part of what makes this one of the great live sports experiences in Chicago."
        leftHeading="Rate Field, Bridgeport, and the South Side"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for White Sox Games"
        intro="Getting to Rate Field on your own means fighting the Dan Ryan, paying for parking in a lot that clears slowly, and hoping everyone makes it to the same pickup point after extra innings. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Rate Field Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your White Sox game day ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach Rate Field"
        intro="A smooth South Side game day starts well before first pitch. Here is everything we handle from the moment you book to the moment we drop you at the gates."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on"
        headingBold="White Sox Game Day"
        intro="These are the six things our clients care most about when booking a ride to Rate Field. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="chicago-white-sox" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your White Sox Game Day Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for a South Side game day. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
