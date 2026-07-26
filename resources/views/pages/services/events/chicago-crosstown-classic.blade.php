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
    "name": "Chicago Crosstown Classic Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",       "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",      "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",    "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",    "addressRegion": "IL" },
        { "@type": "City", "name": "Aurora",        "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",   "addressRegion": "IL" },
        { "@type": "City", "name": "Tinley Park",   "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",     "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to both Wrigley Field and Rate Field for Chicago Crosstown Classic games from anywhere in Chicagoland. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Chicago Crosstown Classic Limo & Party Bus | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/chicago-crosstown-classic",
    "description": "Luxury limo, party bus, and sprinter van service to Wrigley Field and Rate Field for the Chicago Crosstown Classic from anywhere in Chicagoland. Flat-rate pricing. Book your Crosstown Classic ride today."
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
        { "@type": "ListItem", "position": 4, "name": "Chicago Crosstown Classic Limo & Party Bus", "item": "https://www.newlenoxlimoservice.com/services/events/chicago-crosstown-classic" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'The Crosstown Classic is the one series every summer when the whole city of Chicago watches the same games with something personal at stake. Stop & Go Airport Shuttle Service, Inc. serves both sides of Chicago for every game in the series, whether it lands at Wrigley Field on the North Side or Rate Field on the South Side. No parking hassles at either ballpark. No surge pricing. No scrambling for a ride home after a rivalry walk-off. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans. Flat-rate pricing locked at booking. Call us or request a free quote to get started.';

$infoStripBody = 'The Crosstown Classic is the annual showdown between the Chicago Cubs and the Chicago White Sox, a series that splits games between Wrigley Field on the North Side and Rate Field on the South Side and turns the entire city into one long argument about which team owns Chicago. The Cubs bring the ivy, the rooftop clubs on Sheffield Avenue, and more than a century of National League tradition. The White Sox bring the exploding scoreboard at 35th and Shields, Bridgeport pride, and the grit of three World Series championships. Whether the series is at Clark and Addison or at 35th and Shields this week, Stop & Go Airport Shuttle Service, Inc. picks your group up at the door and delivers you to either ballpark in comfort and on time.';

$eventFeaturesLeftParagraphs = [
    'The Crosstown Classic is one of professional sports\' most uniquely urban rivalries, built not on geography but on a single city carrying two baseball identities at once. Cubs fans and White Sox fans have lived side by side for generations, argued across family tables, and worn their colors to work. Every summer, when the two teams meet in interleague play, those loyalties move off the barstools and onto the field. For Chicagoans who care about either team, the Crosstown Classic is the one series each year when every game feels personal, and every inning gets watched.',
    'The two ballparks at the center of this rivalry are as different from each other as the neighborhoods they anchor. Wrigley Field, built in 1914 at Clark and Addison, earned National Historic Landmark status and draws fans from around the world to see the ivy-covered outfield walls, the hand-operated scoreboard, and the rooftop clubs facing the outfield from Sheffield Avenue. Rate Field, built in 1991 at 35th and Shields, carries the unmistakable identity of a South Side neighborhood that has supported this franchise through more than a century of baseball, with Bridgeport\'s deep-rooted restaurants and bars as part of the game day tradition. Experiencing both in the same summer series is a Chicago sports experience unlike anything else.',
    'Stop & Go Airport Shuttle Service, Inc. covers both venues and both neighborhoods for every Crosstown Classic game. Our chauffeurs know the Kennedy Expressway and the Wrigleyville drop-off lanes. They know the Dan Ryan Expressway and the Bridgeport staging areas around Rate Field. No matter which side of the city the series lands on any given night, we have the routing, the timing, and the experience to get your group to the gates and bring everyone home after the final out. We are proud to offer what we believe is the best chauffeured transportation service available for the Crosstown Classic in all of Chicagoland.',
];

$eventFeaturesRightItems = [
    ['service' => 'Chicago Cubs Game Day',             'description' => 'Dedicated Wrigley Field transportation from anywhere in Chicagoland. Clark and Addison drop-off, post-game staging, and Wrigleyville pre-game stops all included.'],
    ['service' => 'Chicago White Sox Game Day',        'description' => 'Dedicated Rate Field transportation from anywhere in Chicagoland. Bridgeport drop-off, post-game staging, and Dan Ryan routing all handled by experienced chauffeurs.'],
    ['service' => 'Weddings',                          'description' => 'Elegant stretch limousines for Chicagoland ceremonies, receptions, and bridal party transportation across the full metro area.'],
    ['service' => 'Concerts and Live Events',          'description' => 'Wintrust Arena, United Center, Ravinia Festival, and every major Chicago venue served with the same Crosstown reliability.'],
    ['service' => 'Corporate Group Outings',           'description' => 'Client entertainment at Wrigley suites or Rate Field suites, company events, and executive group transportation across all of Chicagoland.'],
    ['service' => 'Airport Transfers',                 'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and flat-rate pricing confirmed at booking.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Game day energy from the first pickup',         'why' => 'Dimmable LED lighting sets the mood before first pitch, whether you\'re heading to the North Side or the South Side, and keeps the celebration going all the way home.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your rivalry, your ride',        'why' => 'Bluetooth audio throughout the cabin means your group controls the music from your front door all the way to the ballpark, whichever park it is tonight.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your crew',            'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one is squeezed into a back seat on a Crosstown Classic night.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold, hands free, all ride long',        'why' => 'Keep the rivalry celebration going between stops. Coolers are stocked and ready before your pickup, North Side or South Side.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in April or August',                'why' => 'Chicago game day weather runs from 40 degrees to 95 over the course of a season. Our climate control keeps your group comfortable through all of it.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time',    'why' => 'Every chauffeur is vetted and trained on both the Kennedy Expressway and the Dan Ryan, so Wrigley and Rate Field are equally familiar territory.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody draws the short straw for driving',   'detail' => 'Your whole group celebrates, drinks responsibly, and enjoys the rivalry without anyone sitting out the fun as the designated driver.'],
    ['feature' => 'Skip parking at two different ballparks',    'detail' => 'Wrigley Field and Rate Field both have congested, expensive game-day parking situations. We drop your group at the gates at either park. No fees. No walking six blocks.'],
    ['feature' => 'The rivalry starts before first pitch',      'detail' => 'Premium sound, LED lighting, and room to celebrate means the Crosstown energy starts the moment you board, not when you find your seat.'],
    ['feature' => 'Post-game pickup is already arranged',       'detail' => 'No waiting in a gridlocked lot while Addison Street or the Dan Ryan backs up. Your chauffeur stages at a pre-arranged meeting point and is ready to move at the final out.'],
];

$detailsParagraphs = [
    'The Crosstown Classic runs games at both Wrigley Field and Rate Field in the same series, which means if your group is attending multiple games, you are navigating two completely different ballpark neighborhoods on the same trip. Wrigleyville and Bridgeport each have their own game-day parking reality, their own congestion patterns, and their own post-game traffic flow. Having a chauffeur who knows both removes every variable that makes a multi-game series more complicated than it needs to be.',
    'A Crosstown Classic game day with us typically looks like this: pickup at your door anywhere in Chicagoland, an optional pre-game stop in Wrigleyville or Bridgeport depending on which park is hosting tonight, the game itself, and wherever your group decides to go after the final out. A bar in the neighborhood, a late dinner somewhere else in the city, or straight home. We build the schedule around your group.',
    'We serve both sides of the Chicago sports divide and every corner of Chicagoland for Crosstown Classic transportation: Evanston, Highland Park, Wilmette, and Waukegan on the North Shore; Naperville, Aurora, Schaumburg, and Arlington Heights in the west and northwest suburbs; Orland Park, Tinley Park, New Lenox, and Joliet in the southwest; and every city neighborhood from Hyde Park to Logan Square to Andersonville.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                    'detail' => 'Crosstown Classic pricing, confirmed',                            'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the game and any stops on your itinerary. No surge pricing. No adjustments based on which ballpark is hosting.'],
    ['num' => '02', 'title' => 'We confirm your game-day details',                'detail' => 'Which park, first pitch time, pickup route',                      'body' => 'The day before the game, our team confirms your pickup address, timing, group size, and any stops. We build your departure window around the first pitch time with buffer for the Kennedy or the Dan Ryan, depending on tonight\'s venue.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded', 'detail' => 'Drop-off and post-game staging pre-planned at the right park',   'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the correct expressway routing and the specific drop-off and post-game staging point for whichever ballpark is hosting tonight.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                    'detail' => '10 to 15 minutes ahead of your departure time',                    'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                  'detail' => 'Wrigleyville bar, Bridgeport dinner, the game. Your call.',        'body' => 'Your chauffeur handles the route, the traffic, and any timing adjustments. A Wrigleyville bar stop on Clark Street or a Bridgeport dinner stop before the game, straight to the gates, or a stop on the way home. We adapt to what your group wants.'],
    ['num' => '06', 'title' => 'Post-game pickup, everyone home safe',             'detail' => 'Pre-staged away from the worst congestion at either park',        'body' => 'After the final out, your chauffeur is at the pre-arranged meeting point, away from the worst congestion on Addison Street or near the Dan Ryan lots. Your group is rolling while others are still waiting.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',        'timing' => 'No matter your group size',         'urgency' => 'high',   'detail' => 'No matter how many are in your group, we have the right vehicle for your Crosstown Classic outing. Our fleet includes stretch limousines, executive SUVs, luxury sprinter vans, and party buses. Tell us your headcount and we will match you to the right fit.',                                                                                 'note' => 'Tell us your headcount when you request a quote. We will match you to the right vehicle.'],
    ['occasion' => 'Pickup Routing',            'timing' => 'Anywhere in Chicagoland',           'urgency' => 'medium', 'detail' => 'We pick up from Evanston, Wilmette, Winnetka, Highland Park, Waukegan, Arlington Heights, Schaumburg, Naperville, Aurora, downtown Chicago, Hyde Park, Orland Park, Tinley Park, New Lenox, Joliet, and Northwest Indiana. Multi-address pickups from several locations are handled regularly.',                                          'note' => null],
    ['occasion' => 'Both Ballparks Covered',    'timing' => 'Wrigley Field or Rate Field',       'urgency' => 'high',   'detail' => 'We serve both venues for the Crosstown Classic series. Our chauffeurs know the drop-off lanes and post-game staging for Wrigley Field at Clark and Addison and for Rate Field at 35th and Shields. The exact meeting point is confirmed with your group leader before departure.',                                                             'note' => 'Drop-off and pickup points are confirmed with your group leader the day before the game.'],
    ['occasion' => 'Pre-Game Stops',            'timing' => 'Built into your itinerary',         'urgency' => 'medium', 'detail' => 'A Wrigleyville bar on Clark Street before a Cubs home game or a Bridgeport restaurant stop before a White Sox home game are among our most popular additions to a Crosstown Classic booking. We build the timing so you are in your seats before first pitch.',                                                                             'note' => null],
    ['occasion' => 'Post-Game Pickup',          'timing' => 'Staged and ready at final out',     'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage near the park and monitor the game. When the final out is recorded, they are ready to move before the worst of the post-game lot traffic builds, at either ballpark.',                                                                                                              'note' => 'Extra-inning games are not a problem. Your rate does not change based on game length.'],
    ['occasion' => 'Flat-Rate Pricing',         'timing' => 'Locked at booking',                 'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book, whether the game is at Wrigley Field or Rate Field. No meter running. No surge pricing. No surprise fees. The same flat rate applies to any Crosstown Classic game in the series. Gratuity is not included but is always appreciated.',                                                                 'note' => null],
];
@endphp

<x-layouts.page
    title="Chicago Crosstown Classic Limo & Party Bus | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to Wrigley Field and Rate Field for the Chicago Crosstown Classic from anywhere in Chicagoland. Flat-rate pricing. Book your Crosstown Classic ride today."
    currentPage="services"
    ogImage="/images/special-events/cubs/stopngolimo-chicacgo-cubs-wrigley-field.jpg"
    ogImageAlt="Wrigley Field, home of the Chicago Cubs, one of two venues served by Stop & Go Airport Shuttle Service, Inc. for the Crosstown Classic."
>

    <x-sections.category-hero
        heading="Chicago Crosstown Classic"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="North Side or South Side, we deliver you to the game"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/crosstown-classic/stopngolimo-cross-town-classic-rivals.webp"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="One City. Two Ballparks."
        headingBold="One Legendary Rivalry."
        heading=""
        :body="$infoStripBody"
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to Any Side of the City"
        subtitle="The best Crosstown Classic ride, North Side or South Side"
        body="The Crosstown Classic is the one event that asks you to show up for your team at two different ballparks in the same series, and Stop & Go Airport Shuttle Service, Inc. is built for exactly that. Step into climate-controlled leather seating and let a professional chauffeur handle the logistics, whether tonight's game is at Clark and Addison in Wrigleyville or at 35th and Shields in Bridgeport. Our chauffeurs know the Kennedy Expressway and the Dan Ryan equally well, and they know the drop-off lanes, staging areas, and post-game exit routes at both parks. No parking search at Wrigley. No Dan Ryan gridlock after Rate Field. Premium Bluetooth sound and coolers stocked before departure make the ride part of the Crosstown experience, not just the transportation. Whether your group is coming from Evanston on the North Shore, Orland Park on the southwest side, or anywhere else across the Chicago metro, we pick up at your door and deliver you to the gates in comfort. We believe Stop & Go Airport Shuttle Service, Inc. offers the best chauffeured transportation available for the Crosstown Classic, and every game day we have the chance to prove it."
        note="No matter your group size, call us and we will match you to the right vehicle."
        image="/images/special-events/crosstown-classic/stopngolimo-cross-town-classic-group-fans.gif"
        imageAlt="A group of baseball fans on game day in Chicago, served by Stop & Go Airport Shuttle Service, Inc. for the Crosstown Classic"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Crosstown Classic"
        headingTail="Ride"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/crosstown-classic/stopngolimo-cross-town-classic-happy-clients.jpg"
        descImageAlt="Aerial view of Wrigley Field and the North Side of Chicago, one of two venues covered by Stop & Go Airport Shuttle Service, Inc. for the Crosstown Classic"
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best Crosstown Classic Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with more than two decades of experience getting groups to both Wrigley Field and Rate Field safely and on time:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Drop-off and post-game staging at both Wrigley Field and Rate Field',
            'Multi-address pickup from any Chicagoland suburb or neighborhood',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland from the North Shore to the southwest suburbs, our professional chauffeurs are ready to get your group to the Crosstown Classic at either ballpark, and back home after the final out."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Chicago Crosstown Classic Limo"
    />

    <x-sections.event-features
        heading="A City Divided,"
        headingBold="One Great Ride"
        intro="The Crosstown Classic is a full Chicago story. Two teams, two ballparks, two neighborhoods, and one city that takes all of it seriously. Stop & Go Airport Shuttle Service, Inc. is the transportation company that serves both sides."
        leftHeading="The Crosstown Classic: Chicago's Greatest Baseball Rivalry"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for the Crosstown Classic"
        intro="When the Crosstown Classic runs games at both Wrigley Field and Rate Field in the same series, you are navigating two different ballpark neighborhoods on the same trip. A party bus solves every logistics problem before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Crosstown Classic Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Crosstown Classic ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Both ballparks covered. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach the Ballpark"
        intro="A great Crosstown Classic ride does not happen by accident. Here is everything we handle from the moment you book to the moment we drop you at the gates, whichever side of the city that is tonight."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on"
        headingBold="Crosstown Classic Game Day"
        intro="These are the six things our clients care most about when booking a Crosstown Classic ride. Here is how we handle each one, at both Wrigley Field and Rate Field."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="chicago-crosstown-classic" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Crosstown Classic Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for the biggest baseball series of the Chicago summer. These are the features your group rides with, North Side or South Side."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
