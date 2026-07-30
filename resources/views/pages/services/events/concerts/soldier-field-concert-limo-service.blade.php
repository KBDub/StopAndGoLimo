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
    "name": "Soldier Field Concert Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",      "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",   "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",     "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",  "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",    "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",   "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Soldier Field concerts from anywhere in Chicagoland. Skip the Museum Campus parking and Lake Shore Drive traffic. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Soldier Field Concert Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/soldier-field-concert-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to Soldier Field concerts from anywhere in Chicagoland. Skip Museum Campus parking and Lake Shore Drive traffic. Flat-rate pricing. Book today."
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
        { "@type": "ListItem", "position": 4, "name": "Soldier Field Concert Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/soldier-field-concert-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to Soldier Field concerts from anywhere in Chicagoland. No Museum Campus parking search. No Lake Shore Drive stress. No surge-priced car home after a three-hour stadium show. We pick up your group at your door and deliver you to the lakefront colonnades on time for every concert on the Soldier Field calendar. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group. Every chauffeur is background-checked, uniformed, and trained on Lake Shore Drive routing and Museum Campus staging. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'Soldier Field is one of the most iconic outdoor stadiums in the United States. Built in 1924 and renovated in 2003, it sits on the Chicago lakefront between the Museum Campus and the South Loop, with Lake Michigan visible from the upper deck and the Chicago skyline rising to the north. It is home to the Chicago Bears and host to some of the largest concert events in the country, drawing audiences of more than 60,000 for major touring acts. Arriving by chauffeured vehicle means your group experiences the approach the way it is meant to be seen.',
    'The Museum Campus surrounding Soldier Field is home to three of Chicago\'s most beloved cultural institutions: the Field Museum, the Shedd Aquarium, and the Adler Planetarium. Many of our Soldier Field concert clients build a South Loop or Museum Campus dinner into the evening, and some add a lakefront drive as part of the return trip. Our chauffeurs know the campus layout and time each stop so the broader Chicago experience becomes part of your concert night.',
    'The South Loop and Chinatown neighborhoods just south of the Museum Campus offer some of Chicago\'s most distinctive dining. North along the lakefront, the Grant Park cultural corridor connects the stadium to the Loop and Millennium Park. Whatever your group wants to build around the main event, our chauffeurs have covered it. The logistics of getting in and out of this venue cleanly are where we earn our reputation most consistently.',
];

$eventFeaturesRightItems = [
    ['service' => 'Stadium Concert Tour Packages',  'description' => 'Dedicated transportation for major touring acts at Soldier Field, including Bears season packages and Chicago Fire match night transportation.'],
    ['service' => 'Concert and Live Music Events',   'description' => 'United Center, Ravinia Festival, House of Blues, Aragon Ballroom, and every major Chicago venue served with the same reliable service.'],
    ['service' => 'Corporate Client Entertainment',  'description' => 'Suite-level Soldier Field client entertainment, company concert outings, and executive group transportation for any group size.'],
    ['service' => 'Bachelor and Bachelorette Parties','description' => 'Multi-stop South Loop and lakefront celebration rides built around a Soldier Field concert or Bears game night.'],
    ['service' => 'Weddings and Milestone Events',   'description' => 'Elegant stretch limousines for ceremonies, receptions, and anniversary celebrations throughout Chicagoland.'],
    ['service' => 'Airport Transfers',               'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Stadium energy from the first pickup',      'why' => 'Dimmable LED lighting sets the mood on the way to the lakefront and keeps the celebration going on the ride home after the final song.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your lakefront ride',        'why' => 'Bluetooth audio throughout the cabin means your group controls the music from their door all the way to the Soldier Field colonnades.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your group',       'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one is squeezed in for the Lake Shore Drive run.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold for the full evening',          'why' => 'Keep the energy going on both legs of the trip. Coolers are stocked and ready before your pickup and cold all the way home after the show.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in any lakefront weather',      'why' => 'Soldier Field concerts run from spring through fall. The lakefront has its own weather. Our climate control keeps your group comfortable in any condition.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time','why' => 'Every chauffeur is vetted, trained on Lake Shore Drive routing and Museum Campus staging, and focused on getting your group to the lakefront and back safely.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody fights Lake Shore Drive home',   'detail' => 'Lake Shore Drive after a 60,000-person concert is one of Chicago\'s most reliably difficult drives. Your group enjoys the show in full and we handle every mile there and back.'],
    ['feature' => 'Skip the Museum Campus parking search', 'detail' => 'Soldier Field parking fills completely on sold-out concert nights, and options closer to the stadium cost significantly. We drop your group at the colonnades and stage for post-show pickup.'],
    ['feature' => 'The party starts on the bus',           'detail' => 'Premium sound, LED lighting, and room to move means the energy begins at your door. The lakefront approach to Soldier Field is even better when your group has already been celebrating since pickup.'],
    ['feature' => 'Post-show pickup is already arranged',  'detail' => 'No waiting in a Museum Campus rideshare queue. Your chauffeur stages at a pre-arranged meeting point near the colonnades and is ready when your group walks out.'],
];

$detailsParagraphs = [
    'Soldier Field is one of a small number of stadiums in the country where the venue itself is part of the experience. The lakefront setting, the colonnades, and the view of the Chicago skyline from the south end of Grant Park make it worth arriving with time to take it in before the show starts. Our chauffeurs build the itinerary so your group has exactly that: a comfortable approach to the stadium, a pre-arranged drop-off near the entrance, and no parking stress from the moment you leave your door.',
    'A Soldier Field concert with us typically looks like this: pickup at your door anywhere in Chicagoland, an optional South Loop or Museum Campus dinner stop, arrival at the stadium in time to settle in before the show, and then a smooth post-show exit as soon as your group is ready. The schedule is built around your plans, including any post-concert stops your group decides to add.',
    'We serve groups from every corner of Chicagoland for Soldier Field transportation: Naperville, Aurora, Schaumburg, Arlington Heights, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. Major concert tours, Bears season packages, and first-time Soldier Field visitors all receive the same reliable service.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'Soldier Field concert pricing, confirmed',                      'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the evening and any stops you have planned. No surge pricing. No adjustments for Lake Shore Drive traffic or show length.'],
    ['num' => '02', 'title' => 'We confirm your concert night details',             'detail' => 'Show time, dinner stop, group size',                            'body' => 'The day before, our team reviews your pickup address, timing, group size, and any stops. We confirm the show time and build your departure window around it, including buffer for Lake Shore Drive and Museum Campus access.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'Museum Campus drop-off and post-show staging pre-planned',     'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the Lake Shore Drive routing and the specific Soldier Field drop-off and post-show staging point.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',                'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'South Loop dinner, the concert, post-show. Your call.',        'body' => 'Your chauffeur handles the routing, the lakefront approach, and any timing adjustments. South Loop dinner, straight to the stadium, or a stop on the way home. We adapt to what your group decides.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged away from the worst Museum Campus congestion',      'body' => 'After the final song, your chauffeur is at the pre-arranged meeting point away from the Museum Campus rideshare crowd. Your group is on Lake Shore Drive while others are still looking for their car.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',        'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines for smaller outings. Luxury sprinter vans for mid-size groups. Party buses and limo coaches for larger groups. Tell us your headcount and we will match you to the right vehicle.',               'note' => 'Tell us your headcount when you request a quote.'],
    ['occasion' => 'Pickup Routing',            'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Naperville, Aurora, Schaumburg, Evanston, Orland Park, New Lenox, downtown Chicago, and every suburb in Chicagoland. Multi-address pickups for large groups and corporate clients are handled regularly.',                          'note' => null],
    ['occasion' => 'Lakefront Drop-Off',        'timing' => 'Right at the colonnades',        'urgency' => 'high',   'detail' => 'Our chauffeurs know the Soldier Field drop-off approach and coordinate a staging point that avoids the worst of the Museum Campus post-show congestion. The exact meeting point is confirmed with your group leader before departure.',               'note' => 'Drop-off and pickup points are confirmed the day before your show.'],
    ['occasion' => 'South Loop Dinner Stops',   'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A South Loop or Museum Campus restaurant stop before the concert is a popular addition to a Soldier Field booking. We time the dinner stop so your group arrives at the stadium before the opener.',                                                'note' => null],
    ['occasion' => 'Post-Show Pickup',          'timing' => 'Staged and ready at last song',  'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage at the pre-arranged meeting point and monitor the show. When it ends, they are ready to move before the Lake Shore Drive backup builds.',                                                  'note' => 'Your rate does not change based on show length.'],
    ['occasion' => 'Flat-Rate Pricing',         'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for Lake Shore Drive traffic or a sold-out stadium night. No surprise fees. Gratuity is not included but is always appreciated.',                                       'note' => null],
];
@endphp

<x-layouts.page
    title="Soldier Field Concert Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to Soldier Field concerts from anywhere in Chicagoland. Skip Museum Campus parking and Lake Shore Drive traffic. Flat-rate pricing. Book today."
    currentPage="services"
    ogImage="/images/special-events/concerts/soldier-field-concert.jpg"
    ogImageAlt="Soldier Field concert at the iconic Chicago lakefront stadium, served by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Soldier Field"
        headingBold="Concert Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your Soldier Field concert starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/soldier-field-concert.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Museum Campus Parking,"
        headingBold="Arrive at the Lakefront in Style"
        heading=""
        body="Soldier Field has stood on the Chicago lakefront since 1924, hosting everything from college football to the largest concert tours in the world. For every group that has driven to a sold-out Soldier Field event, the Museum Campus parking search and the Lake Shore Drive backup going home are equally familiar. We handle both so your group focuses on the show, the skyline, and the experience of one of America's great outdoor stadiums."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to the Soldier Field Colonnades"
        subtitle="Pickup from every corner of Chicagoland"
        body="Our chauffeurs know the lakefront. They know the Lake Shore Drive timing on a concert night, the designated drop-off approach at Soldier Field, and the routes that get your group moving while others are still waiting in the Museum Campus gridlock. Whether you are starting from the western suburbs, the North Shore, or downtown Chicago, we have covered this stadium many times. You focus on the concert. We handle everything from your driveway to the last drop-off."
        note="No matter your group size, we have a vehicle for your Soldier Field concert. Call us and we will match you to the right one."
        image="/images/special-events/concerts/soldier-field-cta.jpg"
        imageAlt="Soldier Field concert on the Chicago lakefront, aerial view of the iconic stadium"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Soldier Field Concert"
        headingTail="Ride"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/soldier-field-fiq.jpg"
        descImageAlt="Soldier Field Chicago lakefront concert stadium, served by Stop & Go Airport Shuttle Service, Inc."
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best Soldier Field Concert Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with years of experience getting groups to Soldier Field from across the region:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Museum Campus drop-off and post-show staging included',
            'Multi-address pickup from any Chicagoland suburb',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our chauffeurs are ready to get your group to the Soldier Field colonnades and back, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Soldier Field Concert Limo"
    />

    <x-sections.event-features
        heading="The Soldier Field Experience,"
        headingBold="Start to Finish"
        intro="A Soldier Field concert is a full Chicago lakefront story. The stadium, the Museum Campus surrounding it, the Grant Park cultural corridor, and the Chicago skyline are all part of what makes this one of the great live music settings in the country."
        leftHeading="Soldier Field, the Museum Campus, and Chicago's Iconic Lakefront Stadium"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for Soldier Field Concerts"
        intro="Getting to Soldier Field in your own car means fighting Lake Shore Drive, paying for a Museum Campus parking spot, and hoping everyone finds the same pickup point after 60,000 people leave at once. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Soldier Field Concert Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Soldier Field concert ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach Soldier Field"
        intro="A great stadium concert night does not happen by accident. Here is everything we handle from the moment you book to the moment we drop you at the lakefront colonnades."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="Soldier Field Concert Night"
        intro="These are the six things our clients care most about when booking a Soldier Field ride. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="soldier-field-concert" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Soldier Field Concert Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable stadium night. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
