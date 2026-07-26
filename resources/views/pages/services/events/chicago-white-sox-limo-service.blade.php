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
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to Rate Field from anywhere in Chicagoland. No Dan Ryan traffic stress. No parking lot search. No waiting for a surge-priced car home after a South Side walk-off win. We pick up your group at your door in Orland Park, Tinley Park, New Lenox, Joliet, Beverly, Hyde Park, or anywhere across the city and suburbs, and we deliver you to the gates on time, every time. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans. Every chauffeur is background-checked, uniformed, and trained on Dan Ryan routing and Bridgeport-area staging. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$infoStripBody = 'Rate Field sits at 35th and Shields in Armour Square, home to more than a century of South Side baseball history and the franchise that brought the 2005 World Series championship to Chicago. Whether you still call it Comiskey Park, the Cell, or Rate Field, the tradition is the same, and Stop & Go Airport Shuttle Service, Inc. has you covered for all of it. We handle I-294, the Dan Ryan merge, and the post-game lot gridlock so your group focuses on the game, the exploding scoreboard, and the South Side pride, not the commute.';

$eventFeaturesLeftParagraphs = [
    'The White Sox have played South Side baseball for more than a century. Charles Comiskey opened his Baseball Palace of the World at 35th and Shields in 1910, and that original Comiskey Park stood for 81 seasons before the team moved across the street in 1991. The new park has since carried several names, including U.S. Cellular Field, Guaranteed Rate Field, and now Rate Field, but the corner, the neighborhood, and the identity never changed. The 2005 World Series championship, ending an 88-year drought, is the signature moment in modern South Side history and the reason a trip to 35th Street still means something for lifelong Sox families across Chicagoland.',
    'The South Side extends well beyond Bridgeport in every direction, and Stop & Go Airport Shuttle Service, Inc. builds itineraries that take full advantage of it. Hyde Park, home to the University of Chicago and Jackson Park with the Museum of Science and Industry, sits just southeast of the ballpark along the lakefront. Stony Island Avenue runs through the South Side residential neighborhoods connecting Hyde Park to South Shore, where the South Shore Cultural Center and its lakefront beach offer one of the most scenic and underrated spots in the entire city. Chinatown, immediately north of Rate Field along the Dan Ryan, is one of Chicago\'s most vibrant dining neighborhoods and a natural pre-game stop.',
    'Groups coming from the Loop or the Near West Side often ask us to route through Little Italy on Taylor Street before heading south to the ballpark. The Italian restaurants along Taylor Street have fed Chicago for generations, and a pre-game dinner there pairs naturally with a night at Rate Field. Beyond game day, Stop & Go Airport Shuttle Service, Inc. serves the same South Side and Chicagoland clients for weddings, concerts at the United Center and Wintrust Arena, corporate group outings, and airport transfers to O\'Hare and Midway. The same licensed, insured chauffeurs who know 35th Street also know every venue in Chicago.',
];

$eventFeaturesRightItems = [
    ['service' => 'Weddings',                          'description' => 'Elegant stretch limousines for South Side and Chicagoland ceremonies, receptions, and bridal party transportation across the full metro area.'],
    ['service' => 'Concerts and Live Events',          'description' => 'Wintrust Arena, United Center, Ravinia Festival, and every major Chicagoland venue served with the same South Side reliability your game day ride delivers.'],
    ['service' => 'Corporate Group Outings',           'description' => 'Client entertainment at Rate Field suites, company celebrations, and executive group transportation for Chicagoland businesses of every size.'],
    ['service' => 'Prom and Homecoming',               'description' => 'Safe, professional party bus service for Illinois high school students from Chicago\'s South Side and every community across Chicagoland.'],
    ['service' => 'Bachelor and Bachelorette Parties', 'description' => 'Multi-stop Bridgeport, South Side, and city-wide outings planned around your group\'s night, from Taylor Street dinner to post-game bar crawl.'],
    ['service' => 'Airport Transfers',                 'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and flat-rate pricing confirmed at booking.'],
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
    ['num' => '05', 'title' => 'The ride runs on your schedule',                  'detail' => 'Bridgeport dinner, the game, post-game. Your call.',             'body' => 'Your chauffeur handles the route, the traffic, and any timing adjustments. A pre-game Bridgeport stop, straight to the gates, or a stop on the way home. We adapt to what your group wants.'],
    ['num' => '06', 'title' => 'Post-game pickup, everyone home safe',             'detail' => 'Pre-staged away from the worst Dan Ryan lot congestion',         'body' => 'After the final out, your chauffeur is at the pre-arranged meeting point, away from the gridlocked parking lots and the Dan Ryan backup. Your group is rolling while others are still sitting in traffic.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',       'timing' => 'No matter your group size',         'urgency' => 'high',   'detail' => 'No matter how many are in your group, we have the right vehicle for your White Sox outing. Our fleet includes stretch limousines, executive SUVs, luxury sprinter vans, and party buses. Tell us your headcount and we will match you to the right fit.',                                                                               'note' => 'Tell us your headcount when you request a quote. We will match you to the right vehicle.'],
    ['occasion' => 'Pickup Routing',           'timing' => 'Anywhere in Chicagoland',           'urgency' => 'medium', 'detail' => 'We pick up from Orland Park, Tinley Park, New Lenox, Joliet, Beverly, Oak Lawn, Hyde Park, downtown Chicago, Evanston, Highland Park, Waukegan, Arlington Heights, and Northwest Indiana. Multi-address pickups from several locations in the same group are handled regularly.',                                                'note' => null],
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
        :body="$infoStripBody"
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to Rate Field"
        subtitle="Pickup from anywhere in Chicago or the suburbs"
        body="Step into climate-controlled, wrap-around leather seating and let a professional chauffeur take the South Side completely off your hands. Whether your group starts from Hyde Park along Stony Island Avenue, Evanston on the North Shore, Beverly on the southwest side, or anywhere across the city or suburbs, we build the pickup around your address and your schedule. Groups picking up near Jackson Park often ask us to swing by the Museum of Science and Industry so out-of-town guests catch a look before heading north to the ballpark. Summer game days sometimes begin with a stop at the South Shore Cultural Center beach before an evening first pitch. The ride itself is part of the experience: premium Bluetooth sound, coolers stocked before departure, and a driver who knows every South Side route without a second thought. No parking search. No meter running. No stress on the Dan Ryan in or the Bishop Ford on the way home. You enjoy the city. We take care of everything from your door to the Rate Field gates and back again after the final out."
        note="No matter your group size, call us and we will match you to the right vehicle."
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
        heading="South Side Chicago,"
        headingBold="Beyond the Ballpark"
        intro="A White Sox game day is a full Chicago story. The history, the neighborhoods, the lakefront, and the city wrapped around 35th Street are all part of what makes this one of the great live sports experiences in America."
        leftHeading="White Sox Baseball, the South Side, and the City Around It"
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
