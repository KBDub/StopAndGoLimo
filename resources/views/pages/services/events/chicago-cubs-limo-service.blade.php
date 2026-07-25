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
    "name": "Chicago Cubs Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",       "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",    "addressRegion": "IL" },
        { "@type": "City", "name": "Aurora",        "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",    "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",      "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",   "addressRegion": "IL" },
        { "@type": "City", "name": "Tinley Park",   "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",     "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Wrigley Field for Cubs games from anywhere in Chicagoland. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Chicago Cubs Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to Wrigley Field from anywhere in Chicagoland. Flat-rate pricing. Book your Cubs game day ride today."
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
        { "@type": "ListItem", "position": 4, "name": "Chicago Cubs Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to Wrigley Field from anywhere in Chicagoland. No parking search. No surge-priced car. No scrambling for a ride home after extra innings. We pick up your group at your door in Naperville, Schaumburg, Evanston, or Orland Park, and we deliver you to the Friendly Confines on time, every time. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group. Every chauffeur is background-checked, uniformed, and trained on the Kennedy Expressway and Lakeview routing that matters on game day. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'Wrigley Field has stood at Clark and Addison since 1914, earning National Historic Landmark status and a place as one of the most iconic ballparks in American sports. The ivy-covered outfield walls and the hand-operated scoreboard are not decorations. They are a living record of more than a century of Chicago baseball. Arriving at the Friendly Confines by chauffeured vehicle sets the tone before the first pitch is even thrown.',
    'Wrigleyville is the dense, walkable North Side neighborhood that grew up around the rhythm of home games. Clark Street and Sheffield Avenue are packed with sports bars, restaurants, and rooftop clubs that face the outfield from across the street. The pregame ritual in Wrigleyville is as much a Cubs tradition as the seventh-inning stretch, and a chauffeur means your group is part of the celebration rather than circling the block for parking.',
    'Just east of Wrigleyville, Lincoln Park and the Chicago lakefront extend along Lake Michigan with some of the most recognizable views in the city. Many of our Cubs clients build a lakefront drive or a Lincoln Park stop into their itinerary. We coordinate the timing so the ballgame and the broader Chicago experience belong to the same seamless day.',
];

$eventFeaturesRightItems = [
    ['service' => 'Weddings',                        'description' => 'Elegant stretch limousines for Chicagoland ceremonies, receptions, and bridal party transportation across the region.'],
    ['service' => 'Concerts and Live Events',        'description' => 'Gallagher Way, Wintrust Arena, United Center, and every major Chicago venue served with the same reliability as a game day ride.'],
    ['service' => 'Corporate Outings',               'description' => 'Client entertainment at Wrigley suites, company events, and executive group transportation throughout Chicagoland.'],
    ['service' => 'Prom and Homecoming',             'description' => 'Safe, professional party bus service for Illinois high school students across all of Chicagoland.'],
    ['service' => 'Bachelor and Bachelorette Parties', 'description' => 'Multi-stop Wrigleyville and North Side bar crawls designed around your group\'s night.'],
    ['service' => 'Airport Transfers',               'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Game day energy from the first pickup',       'why' => 'Dimmable LED lighting sets the mood before the first pitch and keeps the energy high on the way home, win or lose.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your ride',                    'why' => 'Bluetooth audio throughout the cabin means your group controls the music from Naperville to Addison Street.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your crew',          'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one is squeezed into a back seat.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold, hands free, all ride long',      'why' => 'Keep the celebration going between stops. Coolers are stocked and ready before your pickup.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in April or August',              'why' => 'Chicago game day weather runs from 40 degrees to 90. Our climate control keeps your group comfortable through all of it.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time',  'why' => 'Every chauffeur is vetted, trained on Lakeview and Wrigleyville routing, and focused on getting your group there and back safely.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody has to be the designated driver', 'detail' => 'Your whole group celebrates, drinks responsibly, and enjoys the game without anyone drawing the short straw for the ride home.'],
    ['feature' => 'Skip the $60 parking lot',              'detail' => 'Game-day parking near Wrigley Field can cost more than some tickets. We drop your group right at the gates. No walking. No parking fees.'],
    ['feature' => 'The party starts before first pitch',   'detail' => 'Premium sound, LED lighting, and room to move means the celebration starts the moment you leave your driveway, not when you find your seat.'],
    ['feature' => 'Post-game pickup is already arranged',  'detail' => 'No waiting 30 minutes for a surge-priced car home. Your chauffeur stages at a pre-arranged meeting point near the park and is ready when the final out lands.'],
];

$detailsParagraphs = [
    'Wrigleyville is built for exactly the kind of night your group is planning. Clark Street and Sheffield Avenue have some of the best sports bars in Chicago, and the rooftop clubs across from the outfield are a Cubs tradition unto themselves. Our chauffeurs know where post-game pickups pile up and where to stage instead so your group is rolling while others are still staring at their phones.',
    'A Cubs game day with us typically looks like this: pickup at your door, a pre-game stop at a Wrigleyville bar or restaurant, the game itself, and then whatever your group decides after the final out. A bar on Clark Street. A late dinner in Lincoln Park. Or straight home if it is a school night. We build the schedule around your plans.',
    'We serve groups from every suburb in Chicagoland: Naperville, Aurora, Wheaton, Downers Grove, Schaumburg, Arlington Heights, Evanston, Wilmette, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. Multi-city pickups and multi-stop itineraries are something we handle every weekend.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                    'detail' => 'Cubs game day pricing, confirmed',                      'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the game and any stops you have planned. No surge pricing. No adjustments for traffic or game-time changes.'],
    ['num' => '02', 'title' => 'We confirm your game-day details',                'detail' => 'First pitch time, pickup route, group size',             'body' => 'The day before your game, our team reviews your pickup address, timing, group size, and any stops on your itinerary. We pull up your game time and build the departure window around it.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded', 'detail' => 'Wrigleyville drop-off and post-game staging pre-planned', 'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the Kennedy Expressway routing and the specific Wrigleyville drop-off and post-game staging point for your group.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                    'detail' => '10 to 15 minutes ahead of your departure time',           'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                  'detail' => 'Pre-game stop, the game, and post-game. Your call.',      'body' => 'Your chauffeur handles the route, the traffic, and any timing adjustments. Pre-game bar stop on Clark Street, straight to the gates, or a stop on the way home. We adapt to what your group wants.'],
    ['num' => '06', 'title' => 'Post-game pickup, everyone home safe',             'detail' => 'Pre-staged away from Addison Street congestion',         'body' => 'After the final out, your chauffeur is at the pre-arranged meeting point, away from the surge of congestion on Addison Street. Your group is rolling while others are still waiting.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',    'timing' => 'Any group, any vehicle',          'urgency' => 'high',   'detail' => 'Our fleet includes stretch limousines, executive SUVs, luxury sprinter vans, and party buses. No matter your group size, we have the right vehicle for your Cubs outing. Tell us your headcount and we will recommend the best match.',                                                              'note' => 'Tell us your headcount when you request a quote. We will match you to the right vehicle.'],
    ['occasion' => 'Pickup Routing',        'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Naperville, Aurora, Wheaton, Schaumburg, Arlington Heights, Evanston, Wilmette, Winnetka, Highland Park, Orland Park, New Lenox, downtown Chicago, and every suburb in between. Multi-city pickups with stops at multiple addresses are handled regularly.',             'note' => null],
    ['occasion' => 'Wrigleyville Drop-Off', 'timing' => 'Right at the gates',             'urgency' => 'high',   'detail' => 'Our chauffeurs know the game-day drop-off lanes near Clark and Addison. We stage away from congestion and communicate the exact meeting point to your group leader before departure.',                                                                                                              'note' => 'Drop-off and pickup points are confirmed with your group leader the day before the game.'],
    ['occasion' => 'Pre-Game Stops',        'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A stop at a Wrigleyville bar or restaurant before the game is one of our most common requests. We build pre-game stop timing into the schedule so you make it to your seats before first pitch.',                                                                                                  'note' => null],
    ['occasion' => 'Post-Game Pickup',      'timing' => 'Staged and ready at final out',  'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage at the pre-arranged meeting point and monitor the game. When the final out is recorded, they are ready to move before the lot traffic builds.',                                                                                          'note' => 'Extra-inning games are not a problem. Your rate does not change based on game length.'],
    ['occasion' => 'Flat-Rate Pricing',     'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for Kennedy traffic or a packed Wrigleyville. No surprise fees at the end of the night. Gratuity is not included but is always appreciated.',                                                                          'note' => null],
];
@endphp

<x-layouts.page
    title="Chicago Cubs Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to Wrigley Field from anywhere in Chicagoland. Flat-rate pricing. Book your Cubs game day ride today."
    currentPage="services"
    ogImage="/images/heroes/hero-cubs-limo.jpg"
    ogImageAlt="Luxury party bus for Chicago Cubs game day transportation, Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Chicago Cubs"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your Wrigley Field trip starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/heroes/hero-cubs-limo.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Parking Search,"
        headingBold="Ride to the Friendly Confines"
        heading=""
        body="Wrigley Field has stood at Clark and Addison since 1914, earning National Historic Landmark status and a place among the most iconic ballparks in American sports. For Cubs fans across Chicagoland, the trip to the North Side is a ritual as important as the game itself. We handle the Kennedy Expressway, the Lakeview parking maze, and the post-game pickup so your group focuses on the game, the beers on Sheffield Avenue, and the tradition, not the logistics."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to Wrigley Field"
        subtitle="Pickup from every corner of Chicagoland"
        body="The moment your group boards, the game day begins. Wrap-around leather seating, premium sound, and climate-controlled comfort carry you from your door straight to Clark and Addison, whether you are starting from River North, Evanston, the western suburbs, or anywhere else in Chicagoland. Our chauffeurs know Wrigleyville's game-day drop-off lanes, which side streets clear fastest after the final out, and the timing that gets your group to Sheffield Avenue with time to spare. You arrive relaxed, in style, and ready for everything the North Side has to offer. No parking search. No surge pricing. No driving home after the Cubby Bear closes."
        note="No matter your group size, we have a vehicle for your Cubs outing. Call us and we will match you to the right one."
        image="/images/sections/cubs-wrigleyville.jpg"
        imageAlt="Wrigleyville neighborhood at Clark and Addison Streets, Wrigley Field, Chicago, Illinois"
    />

    <x-sections.event-features
        heading="The Wrigleyville Experience,"
        headingBold="Start to Finish"
        intro="A Cubs game day is a full Chicago story. Wrigley Field, the North Side neighborhood around it, and the city beyond the outfield walls are all part of what makes this one of the great live sports experiences in America."
        leftHeading="Wrigley Field, Wrigleyville, and the Chicago Lakefront"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for Cubs Games"
        intro="Getting to Wrigley Field in your own car means fighting the Kennedy, paying $50 to $70 for a parking spot six blocks from the gate, and hoping everyone makes it back to the same pickup point after the game. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Wrigley Field Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Cubs game day ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach Wrigley Field"
        intro="A great game day ride does not happen by accident. Here is everything that happens on our end from the moment you book to the moment we drop you at the Friendly Confines."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on"
        headingBold="Cubs Game Day"
        intro="These are the six things our clients care most about when booking a game day ride to Wrigley Field. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="chicago-cubs" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Cubs Game Day Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable game day. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
