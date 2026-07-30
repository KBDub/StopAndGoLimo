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
    "name": "United Center Concert Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",      "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",   "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",   "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",     "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",  "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",    "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to United Center concerts and events from anywhere in Chicagoland. West Loop dinner included. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "United Center Concert Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/united-center-concert-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to United Center concerts from anywhere in Chicagoland. West Loop dinner stops. Flat-rate pricing. Book your United Center night today."
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
        { "@type": "ListItem", "position": 4, "name": "United Center Concert Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/united-center-concert-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to United Center concerts and events from anywhere in Chicagoland. No Near West Side parking maze. No Eisenhower Expressway stress. No surge-priced car home after the encore. We pick up your group at your door in Naperville, Schaumburg, Evanston, or Orland Park, and deliver you to the Madhouse on Madison on time for every event on the calendar. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group. Every chauffeur is background-checked, uniformed, and trained on Near West Side routing and United Center staging. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'The United Center is the largest arena in the United States by seating capacity, and it sits at the center of one of Chicago\'s most compelling cultural corridors. Home to the Chicago Bulls and Chicago Blackhawks, and a permanent stop on virtually every major global concert tour, the arena at Madison and Damen draws millions of visitors a year from every corner of Chicagoland and beyond. Arriving by chauffeured vehicle means your group skips the Eisenhower Expressway backup, the Near West Side parking structure maze, and the post-event rideshare queue on Madison Street.',
    'Just east of the United Center, the West Loop and Fulton Market District have transformed into one of Chicago\'s premier dining destinations. Restaurant Row on Randolph Street, the Fulton Market corridor, and the surrounding blocks are packed with Michelin-starred restaurants and beloved neighborhood spots. Most of our United Center clients build a West Loop dinner into the evening before the show, and our chauffeurs time the stop so your group arrives at the arena relaxed and ready.',
    'The Near West Side neighborhood surrounding the arena has a deep history in Chicago sports and city life. Greek Town sits along Halsted just north of the arena. The United Center itself was built on land that had been part of the old Chicago Stadium neighborhood. Corporate suite clients, season ticket holders, and first-time arena visitors all share the same logistics challenge: getting in and out without the traffic. We solve that challenge every event.',
];

$eventFeaturesRightItems = [
    ['service' => 'Bulls and Blackhawks Season Packages',  'description' => 'Recurring transportation for United Center season ticket holders and suite clients throughout the NBA and NHL seasons.'],
    ['service' => 'Concert and Live Music Events',          'description' => 'Ravinia Festival, Soldier Field, House of Blues, Aragon Ballroom, and every major Chicago venue covered with the same reliable service.'],
    ['service' => 'Corporate Client Entertainment',         'description' => 'Suite-level client entertainment, company event transportation, and executive group coordination for any United Center occasion.'],
    ['service' => 'Bachelor and Bachelorette Parties',      'description' => 'Multi-stop West Loop and Near West Side celebration rides built around a United Center concert or event night.'],
    ['service' => 'Weddings and Milestone Events',          'description' => 'Elegant stretch limousines for ceremonies, receptions, and anniversary celebrations across all of Chicagoland.'],
    ['service' => 'Airport Transfers',                      'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Arena energy from the first pickup',        'why' => 'Dimmable LED lighting sets the tone before the first note and keeps the celebration going on the way home after the show.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your Chicago ride',          'why' => 'Bluetooth audio throughout the cabin means your group controls the music from the suburbs to Madison and Damen and back.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your group',       'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one squeezed in for a long drive from the suburbs.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold for the full evening',          'why' => 'Keep the celebration going between stops. Coolers are stocked and ready before your pickup and on for the ride home after the show.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in any Chicago season',         'why' => 'United Center events run year-round. Our climate control keeps your group comfortable whether it is a July concert or a February Blackhawks night.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time','why' => 'Every chauffeur is vetted, trained on Near West Side routing and United Center staging, and focused on your group\'s safe, comfortable night.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody fights the Eisenhower home',     'detail' => 'I-290 after a United Center event is one of Chicago\'s least enjoyable experiences. Your group enjoys the full evening and we handle every mile of the drive, there and back.'],
    ['feature' => 'West Loop dinner is part of the plan',  'detail' => 'Fulton Market and Randolph Street Restaurant Row are minutes from the arena. We build the timing so dinner ends and the show begins without any rushing.'],
    ['feature' => 'The party starts on the bus',           'detail' => 'Premium sound, LED lighting, and room to move means the energy begins at your door. By the time you reach the Near West Side, your group is already in full event mode.'],
    ['feature' => 'Post-show pickup is already arranged',  'detail' => 'No waiting in a rideshare queue on Madison Street. Your chauffeur stages at a pre-arranged meeting point and is ready when your group walks out.'],
];

$detailsParagraphs = [
    'The United Center hosts more than 200 events per year, including global concert tours that fill every one of its 20,000 seats. The Near West Side neighborhood that surrounds the arena on event nights is a logistical challenge: limited street parking, expensive garage options, and a Madison Street corridor that backs up after every major event. A party bus removes all three problems from your evening before you leave your driveway.',
    'A United Center night with us typically looks like this: pickup at your door anywhere in Chicagoland, a West Loop or Fulton Market dinner stop at your favorite restaurant, arrival at the arena in time to settle in before the show, and then a comfortable ride home as soon as your group is ready. The schedule is built around your plans, including any post-show stops your group decides to add.',
    'We serve groups from every corner of Chicagoland for United Center transportation: Naperville, Aurora, Schaumburg, Arlington Heights, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. Suite clients, corporate groups, and season ticket holders book us for the full Bulls and Blackhawks calendar.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'United Center concert pricing, confirmed',                     'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the evening and any stops you have planned. No surge pricing. No adjustments for Eisenhower traffic or event length.'],
    ['num' => '02', 'title' => 'We confirm your event night details',               'detail' => 'Show time, West Loop dinner stop, group size',                  'body' => 'The day before, our team reviews your pickup address, timing, group size, and any stops. We confirm the event start time and build your departure window around it, including buffer for the Eisenhower and Near West Side traffic.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'Near West Side drop-off and post-show staging pre-planned',    'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the routing and the specific United Center drop-off and post-event staging point.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',                'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'West Loop dinner, the show, post-show. Your call.',            'body' => 'Your chauffeur handles the routing, the Eisenhower, and any timing adjustments. West Loop dinner stop, straight to the arena, or a stop on the way home. We adapt to what your group wants.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged away from Madison Street congestion',               'body' => 'After the final note, your chauffeur is at the pre-arranged meeting point, away from the rideshare queue on Madison Street. Your group is moving while others are still waiting on the sidewalk.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',      'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines and executive SUVs for smaller outings. Luxury sprinter vans for mid-size groups. Party buses and limo coaches for larger groups. Tell us your headcount and we will match you to the right vehicle.',  'note' => 'Tell us your headcount when you request a quote.'],
    ['occasion' => 'Pickup Routing',          'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Naperville, Aurora, Schaumburg, Arlington Heights, Evanston, Orland Park, New Lenox, downtown Chicago, and every suburb in between. Multi-address pickups for corporate groups and suite clients are handled regularly.',                   'note' => null],
    ['occasion' => 'Near West Side Drop-Off', 'timing' => 'Right at the arena',             'urgency' => 'high',   'detail' => 'Our chauffeurs know the United Center drop-off approach and coordinate a staging point that avoids the worst of the Near West Side post-event congestion. The exact meeting point is confirmed with your group leader the day before.',                      'note' => 'Drop-off and pickup points are confirmed the day before your event.'],
    ['occasion' => 'West Loop Dinner Stops',  'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A Fulton Market or Randolph Street dinner stop before the show is our most popular addition to a United Center booking. We build the timing so dinner ends well before the event starts.',                                                                  'note' => null],
    ['occasion' => 'Post-Show Pickup',        'timing' => 'Staged and ready at last note',  'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage at the pre-arranged meeting point and monitor the event. When it ends, they are ready to move before the Madison Street congestion builds.',                                                     'note' => 'Your rate does not change based on event length.'],
    ['occasion' => 'Flat-Rate Pricing',       'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for Eisenhower traffic or a sold-out night. No surprise fees. Gratuity is not included but is always appreciated.',                                                              'note' => null],
];
@endphp

<x-layouts.page
    title="United Center Concert Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to United Center concerts from anywhere in Chicagoland. West Loop dinner stops. Flat-rate pricing. Book your United Center night today."
    currentPage="services"
    ogImage="/images/special-events/concerts/united-center-concert-crowd.jpg"
    ogImageAlt="United Center arena concert in Chicago, served by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="United Center"
        headingBold="Concert Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your United Center night starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/united-center-concert-crowd.jpg"
        imagePosition="center top"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Eisenhower and the Parking Maze,"
        headingBold="Arrive at the Madhouse in Style"
        heading=""
        body="The United Center is the largest arena in the United States and one of the most visited event venues in the world. Every major global concert tour stops here, and every concertgoer who has driven to the Near West Side knows the I-290 backup and the parking structure search that come with a sold-out night. We handle the routing, the staging, and the post-event exit so your group focuses on the show, not the commute."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to the United Center"
        subtitle="Pickup from every corner of Chicagoland"
        body="Our chauffeurs know the Near West Side. They know the Eisenhower Expressway timing on a concert night, the designated drop-off approach at the United Center, and which exit routes clear first after 20,000 people walk out onto Madison Street. Whether you are starting from the western suburbs, the North Shore, or downtown Chicago, we have covered this arena more times than we can count. You focus on the evening. We handle everything from your driveway to the last drop-off."
        note="No matter your group size, we have a vehicle for your United Center night. Call us and we will match you to the right one."
        image="/images/special-events/concerts/united-center-cta.jpg"
        imageAlt="Concert crowd at the United Center arena in Chicago, Illinois"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="United Center"
        headingTail="Night"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/united-center-fiq.jpg"
        descImageAlt="United Center arena concert in Chicago, Illinois, served by Stop & Go Airport Shuttle Service, Inc."
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best United Center Concert Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with years of experience getting groups to United Center events safely and on time:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Near West Side drop-off and post-show staging included',
            'West Loop dinner stop coordination available for every booking',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our chauffeurs are ready to get your group to Madison and Damen and back, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="United Center Concert Limo"
    />

    <x-sections.event-features
        heading="The United Center Experience,"
        headingBold="Start to Finish"
        intro="A United Center night is a full Chicago story. The arena, the West Loop dining scene around it, and the Near West Side neighborhood that has grown up around one of the world's premier event venues are all part of the evening."
        leftHeading="United Center, the Near West Side, and Chicago's Premier Arena District"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for United Center Concerts"
        intro="Getting to the United Center in your own car means fighting the Eisenhower, paying for a Near West Side parking structure, and hoping everyone finds the same pickup point after 20,000 people leave at once. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your United Center Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your United Center night?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach the United Center"
        intro="A great arena night does not happen by accident. Here is everything we handle from the moment you book to the moment we drop you at the United Center."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="United Center Night"
        intro="These are the six things our clients care most about when booking a United Center ride. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="united-center-concert" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your United Center Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable arena night. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
