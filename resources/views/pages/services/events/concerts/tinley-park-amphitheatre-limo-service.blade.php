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
    "name": "Credit Union 1 Amphitheatre Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",       "addressRegion": "IL" },
        { "@type": "City", "name": "Tinley Park",   "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",   "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",     "addressRegion": "IL" },
        { "@type": "City", "name": "Joliet",        "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",    "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Credit Union 1 Amphitheatre in Tinley Park from anywhere in Chicagoland. Skip the post-show lot. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Credit Union 1 Amphitheatre Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/tinley-park-amphitheatre-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to Credit Union 1 Amphitheatre in Tinley Park from anywhere in Chicagoland. Skip the infamous post-show lot. Flat-rate pricing. Book today."
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
        { "@type": "ListItem", "position": 4, "name": "Credit Union 1 Amphitheatre Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/tinley-park-amphitheatre-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to Credit Union 1 Amphitheatre in Tinley Park from anywhere in Chicagoland. No post-show lot gridlock. No I-57 stress. No surge-priced car home after a three-hour set. We pick up your group at your door and deliver you to one of the largest outdoor amphitheatres in the country, on time and ready to enjoy the show. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group. Every chauffeur is background-checked, uniformed, and trained on southwest-suburban routing and Tinley Park staging. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'Credit Union 1 Amphitheatre, formerly Tinley Park Amphitheatre and known to generations of Chicagoland concertgoers simply as "the World Music Theatre," has hosted some of the biggest names in music since it opened in 1990. With a covered pavilion and a massive lawn, it is one of the premier large-format outdoor concert venues in the Midwest, drawing audiences from across Chicagoland and Northwest Indiana for summer tours that stretch from country to rock to hip-hop.',
    'The amphitheatre sits in the heart of the southwest suburbs, making it uniquely accessible for groups coming from Orland Park, New Lenox, Joliet, Frankfort, and the broader I-57 and I-80 corridor. It also draws significant crowds from downtown Chicago, the North Shore, and the western suburbs, all of whom face the same challenge on the way home: a parking lot that can take over an hour to clear after a sold-out show. A party bus is the most direct solution to that challenge.',
    'Tinley Park and the surrounding southwest suburbs have grown into a major dining and entertainment destination over the past two decades. Many of our clients build a local dinner stop into their concert itinerary before heading to the amphitheatre, and some add a post-show stop in Orland Park or Mokena on the way home. Our chauffeurs know every route in the southwest suburbs and time each stop so your group never feels rushed.',
];

$eventFeaturesRightItems = [
    ['service' => 'Southwest Suburb Concert Packages', 'description' => 'Dedicated transportation for Credit Union 1 Amphitheatre, Tinley Park, and the broader I-57 and I-80 corridor for every summer touring season.'],
    ['service' => 'Concert and Live Music Events',     'description' => 'Ravinia Festival, United Center, Soldier Field, House of Blues, Aragon Ballroom, and every major Chicago venue served with the same reliable service.'],
    ['service' => 'Corporate Client Entertainment',    'description' => 'Company concert outings, client entertainment nights, and executive group transportation for any group size across Chicagoland.'],
    ['service' => 'Bachelor and Bachelorette Parties', 'description' => 'Multi-stop celebration rides designed around your group\'s night, from Tinley Park to downtown Chicago and everywhere in between.'],
    ['service' => 'Weddings and Milestone Events',     'description' => 'Elegant stretch limousines for ceremonies, receptions, and anniversary celebrations throughout the southwest suburbs and all of Chicagoland.'],
    ['service' => 'Airport Transfers',                 'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Concert energy from the first pickup',       'why' => 'Dimmable LED lighting sets the mood before the first song and keeps the celebration going on the drive home, no matter how the set ended.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your southwest-suburb ride',  'why' => 'Bluetooth audio throughout the cabin means your group controls the music from Joliet to the amphitheatre gates and all the way back.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your crew',        'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one is squeezed into a back seat on the way to Tinley Park.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold, hands free, all ride long',    'why' => 'Keep the celebration going between stops. Coolers are stocked and ready before your pickup and cold all the way home after the show.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable on any summer night',           'why' => 'Tinley Park summers run from comfortable to humid. Our climate control keeps your group cool on the way there and comfortable on the ride home.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time','why' => 'Every chauffeur is vetted, trained on southwest-suburban routing and Tinley Park amphitheatre staging, and focused on your group\'s safety all night.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody has to sit in the post-show lot', 'detail' => 'The Credit Union 1 Amphitheatre parking lot is one of the most notorious post-show bottlenecks in the region. Our clients are rolling while the lot is still at a standstill.'],
    ['feature' => 'Skip the I-57 concert-night backup',     'detail' => 'Our chauffeurs use exit routes and staging strategies that get your group onto I-57 before the worst of the post-show surge. The difference can be 45 minutes or more.'],
    ['feature' => 'The party starts on the bus',            'detail' => 'Premium sound, LED lighting, and room to move means the energy begins in the driveway. By the time you reach the venue, your group is already in full concert mode.'],
    ['feature' => 'Post-show pickup is already arranged',   'detail' => 'No waiting in a gridlocked lot. Your chauffeur stages at a pre-arranged meeting point and monitors the show end time so your group is first out of the lot.'],
];

$detailsParagraphs = [
    'The Credit Union 1 Amphitheatre draws some of the biggest summer touring acts in the country, and the southwest suburbs have their own culture around these shows. Groups from Orland Park, New Lenox, Joliet, and Mokena book us season after season because the logistics at this venue are uniquely challenging. The lot is large, it fills completely on sold-out nights, and the exit onto I-57 backs up for miles. A party bus is not just a convenience here. It is the only option that guarantees your group gets home without spending an hour in traffic.',
    'A Tinley Park concert with us typically looks like this: pickup at your door anywhere in Chicagoland, an optional pre-show dinner stop in the southwest suburbs, the concert itself, and a comfortable ride home as soon as your group is ready to leave. Our chauffeur stages away from the main lot congestion and has your vehicle ready the moment you walk out.',
    'We serve groups from every part of Chicagoland for Credit Union 1 Amphitheatre transportation: downtown Chicago, the North Shore, the western suburbs, Joliet, New Lenox, Orland Park, Tinley Park, Palos Heights, and every community in between. Multi-city pickups from multiple addresses are standard for us on summer tour nights.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'Tinley Park concert pricing, confirmed',                       'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the evening. No surge pricing. No adjustments for I-57 traffic or how long the encore runs.'],
    ['num' => '02', 'title' => 'We confirm your concert night details',             'detail' => 'Show time, pickup route, group size',                          'body' => 'The day before, our team reviews your pickup address, timing, group size, and any stops. We confirm the show start time and build your departure window around it, including buffer for southwest-suburban traffic.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'Tinley Park drop-off and post-show staging pre-planned',       'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the routing and the specific drop-off and post-show staging point at the amphitheatre.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',                'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'Pre-show stop, the concert, post-show. Your call.',            'body' => 'Your chauffeur handles the route, the traffic, and any timing adjustments. Dinner before the show, straight to the gates, or a post-show stop on the way home. We adapt to what your group decides.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged away from the worst lot congestion',                'body' => 'After the final song, your chauffeur is at the pre-arranged meeting point away from the main lot exit. Your group is on I-57 while the rest of the crowd is still sitting at the parking lot bottleneck.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',      'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines and executive SUVs for smaller outings. Luxury sprinter vans for mid-size groups. Party buses and limo coaches for larger groups. Tell us your headcount and we will match you to the right vehicle.',  'note' => 'Tell us your headcount when you request a quote.'],
    ['occasion' => 'Pickup Routing',          'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from downtown Chicago, the North Shore, Naperville, Aurora, Orland Park, New Lenox, Joliet, Frankfort, and every community in the southwest suburbs and broader Chicagoland region. Multi-address pickups for large groups are handled regularly.',   'note' => null],
    ['occasion' => 'Amphitheatre Drop-Off',   'timing' => 'Right at the gates',             'urgency' => 'high',   'detail' => 'Our chauffeurs know the Tinley Park amphitheatre drop-off approach and coordinate a staging point that avoids the main lot congestion. The exact meeting point is confirmed with your group leader before departure.',                                               'note' => 'Drop-off and pickup points are confirmed the day before your show.'],
    ['occasion' => 'Pre-Show Dinner Stops',   'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A southwest-suburb dinner stop before the show is one of our most common additions to a Tinley Park booking. We time the stop so your group makes it to your seats before the opener.',                                                                            'note' => null],
    ['occasion' => 'Post-Show Pickup',        'timing' => 'Staged and ready at last song',  'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage at the pre-arranged meeting point and monitor the show. When the final song ends, they are ready to move before the main lot clears onto I-57.',                                                         'note' => 'Extended sets are not a problem. Your rate does not change based on show length.'],
    ['occasion' => 'Flat-Rate Pricing',       'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for I-57 traffic or a sold-out night. No surprise fees. Gratuity is not included but is always appreciated.',                                                                          'note' => null],
];
@endphp

<x-layouts.page
    title="Credit Union 1 Amphitheatre Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to Credit Union 1 Amphitheatre in Tinley Park from anywhere in Chicagoland. Skip the infamous post-show lot. Flat-rate pricing. Book today."
    currentPage="services"
    ogImage="/images/special-events/concerts/tinley-park-concert-crowd.jpg"
    ogImageAlt="Credit Union 1 Amphitheatre concert in Tinley Park, served by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Credit Union 1 Amphitheatre"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Skip the infamous post-show lot — your ride home is already waiting"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/tinley-park-concert-crowd.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the I-57 Backup,"
        headingBold="Ride to Tinley Park in Style"
        heading=""
        body="Credit Union 1 Amphitheatre has hosted some of the biggest summer touring acts in the country for more than three decades, and every Chicagoland concertgoer knows what that parking lot looks like after a sold-out show. We handle the I-57 routing, the amphitheatre staging, and the post-show exit so your group focuses on the music and the celebration, not the commute."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to the Amphitheatre Gates"
        subtitle="Pickup from every corner of Chicagoland"
        body="The moment your group boards, the concert night begins. Our chauffeurs know the southwest-suburban routes, the amphitheatre staging area, and the post-show exit strategies that get your group moving before the main lot backs up onto I-57. Whether you are coming from downtown Chicago, the North Shore, Joliet, or Orland Park, we have covered this venue more times than we can count. You focus on the show. We handle everything from your driveway to the last drop-off."
        note="No matter your group size, we have a vehicle for your Tinley Park concert. Call us and we will match you to the right one."
        image="/images/special-events/concerts/tinley-park-cta.jpg"
        imageAlt="Outdoor concert crowd at Credit Union 1 Amphitheatre in Tinley Park, Illinois"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Tinley Park Concert"
        headingTail="Ride"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/tinley-park-fiq.jpg"
        descImageAlt="Concert crowd at Credit Union 1 Amphitheatre in Tinley Park, Illinois"
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best Tinley Park Concert Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier that has been getting groups to and from Credit Union 1 Amphitheatre for years:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Post-show staging away from the worst lot congestion',
            'Multi-address pickup from any Chicagoland suburb',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our chauffeurs are ready to get your group to Tinley Park and home again, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Tinley Park Concert Limo"
    />

    <x-sections.event-features
        heading="The Credit Union 1 Amphitheatre Experience,"
        headingBold="Start to Finish"
        intro="A Tinley Park concert is a full evening. The show, the southwest-suburban scene around it, and the Chicagoland culture that turns a summer tour night into a group tradition are all part of the story."
        leftHeading="Credit Union 1 Amphitheatre, the Southwest Suburbs, and Three Decades of Summer Music"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for Tinley Park Concerts"
        intro="Getting to Credit Union 1 Amphitheatre on your own means fighting southwest-suburban traffic, paying for parking in a lot that takes over an hour to exit, and hoping everyone makes it to the same pickup point after the encore. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Tinley Park Concert Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Tinley Park concert ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach the Amphitheatre"
        intro="A great concert night does not happen by accident. Here is everything that happens on our end from the moment you book to the moment we drop you at the gates."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="Tinley Park Concert Night"
        intro="These are the six things our clients care most about when booking a ride to Credit Union 1 Amphitheatre. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="tinley-park-concert" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Tinley Park Concert Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable concert night. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
