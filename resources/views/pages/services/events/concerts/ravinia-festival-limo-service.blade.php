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
    "name": "Ravinia Festival Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",          "addressRegion": "IL" },
        { "@type": "City", "name": "Highland Park",    "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",         "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",       "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",       "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",      "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",        "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Ravinia Festival in Highland Park from anywhere in Chicagoland. Picnic-ready vehicles. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Ravinia Festival Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/ravinia-festival-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to Ravinia Festival in Highland Park from anywhere in Chicagoland. Picnic-ready vehicles. Flat-rate pricing. Book your Ravinia ride today."
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
        { "@type": "ListItem", "position": 4, "name": "Ravinia Festival Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/ravinia-festival-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to Ravinia Festival in Highland Park from anywhere in Chicagoland. No Edens Expressway stress. No festival parking search. No carrying coolers and blankets from a distant lot. We load your picnic setup, your group, and your evening plans, and deliver you to the North Shore lawn in total comfort. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group size. Every chauffeur is background-checked, uniformed, and trained on the Edens routing that matters on a Ravinia evening. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'Ravinia Festival has been the cultural centerpiece of the North Shore since 1904, making it the oldest outdoor music festival in the United States. The Martin Theatre, the Bennett Gordon Hall, and the iconic lawn combine to create an experience unlike any other summer venue in the country. The Chicago Symphony Orchestra has performed here every summer for more than a century, drawing audiences from across the region for evenings that blend world-class music with the quiet beauty of a wooded Highland Park park.',
    'The lawn culture at Ravinia is a tradition unto itself. Families and groups arrive hours before the first note with elaborate picnic spreads, wine, and fine food, spreading blankets across the grass as the sun goes down over the pavilion. The experience is as much about the picnic and the company as it is about the performance on stage. A chauffeured vehicle means your group arrives ready to enjoy all of it, with someone else handling the cooler, the parking, and the drive home.',
    'Highland Park and the North Shore communities surrounding Ravinia offer some of the most distinctive dining and shopping in the Chicago area. Many of our Ravinia clients build a dinner stop at a North Shore restaurant into the evening before the show, turning a concert into a full summer night. Our chauffeurs time the itinerary so your group is on the lawn with time to settle in before the first note.',
];

$eventFeaturesRightItems = [
    ['service' => 'CSO Season Subscriber Packages',   'description' => 'Recurring summer transportation for Chicago Symphony Orchestra subscribers and Ravinia season ticket holders across all of Chicagoland.'],
    ['service' => 'Concert and Live Music Events',    'description' => 'United Center, Soldier Field, House of Blues, Aragon Ballroom, and every major Chicago venue served with the same care as a Ravinia evening.'],
    ['service' => 'Corporate Client Entertainment',   'description' => 'North Shore client entertainment nights, executive group outings, and company summer events with professional chauffeurs who represent your brand.'],
    ['service' => 'Weddings and Milestone Events',    'description' => 'Elegant stretch limousines for ceremonies, receptions, and anniversary celebrations across Chicagoland and the North Shore.'],
    ['service' => 'Bachelor and Bachelorette Parties','description' => 'Multi-stop celebration rides designed around your group\'s night, from Highland Park to River North and everywhere in between.'],
    ['service' => 'Airport Transfers',                'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'Cargo Space for Picnic Gear',     'benefit' => 'Coolers, blankets, chairs — all loaded',       'why' => 'Ravinia picnics require real setup. Our vehicles have the cargo space to handle full picnic setups without anyone leaving anything behind at home.'],
    ['feature' => 'Premium Sound System',             'benefit' => 'Your playlist, your North Shore ride',         'why' => 'Bluetooth audio throughout the cabin keeps the mood going from your driveway to the Highland Park lawn and all the way home.'],
    ['feature' => 'Wrap-Around Leather Seating',      'benefit' => 'Room for every member of your group',         'why' => 'Comfortable lounge-style seating with room for the full group. No one is squeezed in or left without a seat on the North Shore drive.'],
    ['feature' => 'Beverage Coolers',                 'benefit' => 'Drinks cold for the full evening',             'why' => 'Keep the celebration going on both legs of the trip. Coolers are stocked and ready before your pickup for the drive up and the drive home.'],
    ['feature' => 'Climate Control',                  'benefit' => 'Comfortable on any summer night',              'why' => 'North Shore summer evenings range from perfect to humid. Our climate control keeps your group comfortable on every leg of the trip, including the post-show ride home.'],
    ['feature' => 'Professional Chauffeur',           'benefit' => 'Background-checked, uniformed, and on time',   'why' => 'Every chauffeur is vetted, trained on Edens Expressway routing and Highland Park staging, and focused on getting your group to the lawn and back safely.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody has to drive back on the Edens', 'detail' => 'The post-show Edens Expressway traffic after a sold-out CSO night is the reason most people wish they had booked a ride. Your group celebrates freely, and we handle every mile.'],
    ['feature' => 'Skip the festival parking search',      'detail' => 'Ravinia parking fills early and the walk from distant lots to the lawn is longer than it looks on a summer night. We drop your group close and pick up from a staged location after the show.'],
    ['feature' => 'Picnic setup arrives intact',           'detail' => 'Our vehicles have the cargo space to handle a full Ravinia picnic without anyone sitting on the cooler. Everything loads at your door and arrives on the lawn ready to spread out.'],
    ['feature' => 'Post-show pickup is already arranged',  'detail' => 'No rideshare wait in a Highland Park lot after the encore. Your chauffeur stages and monitors the concert end time so your group is moving while others are still packing up their blankets.'],
];

$detailsParagraphs = [
    'Ravinia evenings reward the groups who show up with a plan. The North Shore dining scene in Highland Park, Glencoe, and Northbrook offers excellent options for a pre-show dinner, and many of our clients build a restaurant stop into the itinerary before heading to the festival grounds. Our chauffeurs know the area and time the dinner stop so the group arrives at the lawn with room to find a great spot before the performance begins.',
    'A Ravinia evening with us typically looks like this: pickup at your door anywhere in Chicagoland, a pre-show North Shore dinner stop if your group wants it, arrival at the Ravinia grounds, the concert itself, and then a relaxed ride home while your group settles in after a full summer evening. The schedule is built around your plans, including any post-show stops your group decides to add.',
    'We serve groups from every corner of Chicagoland for Ravinia transportation: Naperville, Aurora, Wheaton, Downers Grove, Schaumburg, Arlington Heights, Evanston, Wilmette, Winnetka, Glencoe, Highland Park, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. CSO season subscribers and multi-show summer groups book us for the entire Ravinia season.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'Ravinia evening pricing, confirmed',                          'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the evening and any stops you have planned. No surge pricing. No adjustments for Edens traffic or concert length.'],
    ['num' => '02', 'title' => 'We confirm your Ravinia evening details',           'detail' => 'Show time, pickup route, group size, picnic setup',            'body' => 'The day before your show, our team reviews your pickup address, timing, group size, and picnic gear. We confirm your show time and build the departure window around it, including buffer for the Edens Expressway.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'Highland Park drop-off and post-show staging pre-planned',    'body' => 'The assigned vehicle is detailed, inspected, and cargo-ready before your pickup. Your chauffeur pre-loads the Edens routing and the Ravinia drop-off and post-show staging point for your group.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',               'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still loading the cooler and the blankets, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'Dinner stop, the concert, post-show. Your call.',             'body' => 'Your chauffeur handles the Edens routing, the timing, and any adjustments. North Shore dinner stop, straight to the festival grounds, or a post-show stop in Highland Park. We adapt to what your group wants.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged away from the worst Ravinia exit congestion',      'body' => 'After the final note, your chauffeur is at the pre-arranged meeting point away from the post-show crowd. Your group is rolling south while others are still loading their cars in the Highland Park lots.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',    'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet includes stretch limousines, executive SUVs, luxury sprinter vans, and party buses. No matter your group size, we have the right vehicle for your Ravinia evening. Tell us your headcount and we will recommend the best match.',                          'note' => 'Tell us your headcount and picnic setup when you request a quote. We will match you to the right vehicle.'],
    ['occasion' => 'Pickup Routing',        'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Chicago, Evanston, Wilmette, Winnetka, Glencoe, Naperville, Schaumburg, Orland Park, New Lenox, and every suburb in between. Multi-city pickups with stops at multiple addresses for CSO season groups are handled regularly.',              'note' => null],
    ['occasion' => 'Highland Park Drop-Off','timing' => 'Right at the Ravinia entrance',  'urgency' => 'high',   'detail' => 'Our chauffeurs know the Ravinia Festival drop-off lanes and coordinate a staging point that gets your group to the lawn without a long walk. The exact meeting point is confirmed with your group leader the day before the show.',                              'note' => 'Drop-off and pickup points are confirmed with your group leader the day before your show.'],
    ['occasion' => 'Pre-Show Dinner Stops', 'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A North Shore dinner stop before the concert is one of our most popular additions to a Ravinia booking. We build the dinner timing into the schedule so your group arrives at the lawn with a great spot before the performance begins.',                     'note' => null],
    ['occasion' => 'Post-Show Pickup',      'timing' => 'Staged and ready at final note', 'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage and monitor the concert end time. When the final note sounds, they are ready to move before the lot traffic builds on the Edens.',                                                                  'note' => 'Extended encores and late finishes are not a problem. Your rate does not change based on show length.'],
    ['occasion' => 'Flat-Rate Pricing',     'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for Edens traffic or a late finish. No surprise fees at the end of the evening. Gratuity is not included but is always appreciated.',                                             'note' => null],
];
@endphp

<x-layouts.page
    title="Ravinia Festival Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to Ravinia Festival in Highland Park from anywhere in Chicagoland. Picnic-ready vehicles. Flat-rate pricing. Book your Ravinia ride today."
    currentPage="services"
    ogImage="/images/special-events/concerts/ravinia-concert-lawn.jpg"
    ogImageAlt="Ravinia Festival lawn and pavilion in Highland Park, served by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Ravinia Festival"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your Ravinia evening starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/ravinia-concert-lawn.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Edens and the Parking,"
        headingBold="Arrive at the Ravinia Lawn in Style"
        heading=""
        body="Ravinia Festival has anchored summer on the North Shore since 1904, making it the oldest outdoor music festival in the United States. For music lovers across Chicagoland, the trip north to Highland Park is a ritual as important as the performance itself. We handle the Edens Expressway, the festival parking search, and the post-show exit so your group focuses on the music, the picnic, and the summer evening, not the commute."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to the Ravinia Lawn"
        subtitle="Pickup from every corner of Chicagoland"
        body="The moment your group boards, the Ravinia evening begins. Our vehicles have the cargo space to handle a full picnic setup, coolers, chairs, and blankets. Our chauffeurs know the Edens Expressway routing, the Highland Park drop-off lanes, and which exit routes clear first after a sold-out CSO night. Whether you are starting from the western suburbs, the South Side, or downtown Chicago, we have run the North Shore route many times. You arrive at the lawn relaxed, picnic ready, and in time for a great spot."
        note="No matter your group size, we have a vehicle for your Ravinia evening. Call us and we will match you to the right one."
        image="/images/special-events/concerts/ravinia-festival-cta.jpg"
        imageAlt="Ravinia Festival lawn crowd enjoying a summer concert in Highland Park, Illinois"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Ravinia Festival"
        headingTail="Ride"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/ravinia-festival-fiq.jpg"
        descImageAlt="Ravinia Festival pavilion and lawn, Highland Park, Illinois, served by Stop & Go Airport Shuttle Service, Inc."
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best Ravinia Festival Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with years of experience getting groups to Ravinia Festival from across the region:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Cargo space for coolers, blankets, chairs, and full picnic setups',
            'Multi-address pickup from any Chicagoland suburb',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our professional chauffeurs are ready to get your group to the Ravinia lawn and back, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Ravinia Festival Limo"
    />

    <x-sections.event-features
        heading="The Ravinia Experience,"
        headingBold="Start to Finish"
        intro="A Ravinia evening is a full North Shore story. The festival grounds, the Highland Park neighborhood, and the summer culture of the Chicago lakefront all contribute to one of the great live music experiences in the country."
        leftHeading="Ravinia Festival, the North Shore, and a Century of Summer Music"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for Ravinia"
        intro="Getting to Ravinia in your own car means fighting the Edens, circling for parking in a lot that fills hours before the show, and carrying your entire picnic setup from wherever you end up parked. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Ravinia Evening"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Ravinia ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach the Ravinia Lawn"
        intro="A great Ravinia evening does not happen by accident. Here is everything that happens on our end from the moment you book to the moment we drop you at the festival gates."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="Ravinia Festival Night"
        intro="These are the six things our clients care most about when booking a Ravinia ride. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="ravinia-concert" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Ravinia Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable Ravinia evening. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
