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
    "name": "Chicago Concert Night Out Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",      "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",   "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",   "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",     "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",  "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",    "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. builds custom concert night out transportation for any Chicago venue, any neighborhood, any occasion. One flat rate covers dinner, the show, and every stop in between."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Chicago Concert Night Out Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/chicago-concert-night-out",
    "description": "Custom concert night out transportation for any Chicago venue. Dinner, the show, and every stop in between. One flat rate, all of Chicagoland. Book your perfect Chicago night out today."
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
        { "@type": "ListItem", "position": 4, "name": "Chicago Concert Night Out", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/chicago-concert-night-out" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. builds custom Chicago concert nights around any venue, any neighborhood, and any itinerary. Tell us the show and the starting point. We handle the rest. Dinner before the concert, the show itself, a post-concert nightcap, and a comfortable ride home for every member of your group from anywhere in Chicagoland. One flat rate covers the full evening with no surge pricing, no parking, and no one designated to drive. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group. Every chauffeur is background-checked, uniformed, and trained on every major Chicago concert venue. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'Chicago\'s live music calendar is one of the most active and diverse in the world. In any given week, major touring acts play the United Center, Soldier Field, Wrigley Field, House of Blues, the Aragon Ballroom, Ravinia Festival, and dozens of smaller theaters and clubs across the city and suburbs. The variety of venue types, neighborhoods, and event formats means that a Chicago concert night can look completely different from one booking to the next. What stays consistent is the logistics challenge: parking, traffic, and post-show exit at every venue in the city.',
    'The neighborhoods around Chicago\'s concert venues each have their own dining and nightlife culture that can become part of the evening. The West Loop and Fulton Market around the United Center, Wrigleyville and Lincoln Park around Wrigley Field, River North around House of Blues, Uptown around the Aragon Ballroom, and the North Shore around Ravinia all offer pre-show and post-show options that turn a concert into a full evening. Our clients frequently build two or three stops around the main event, and we time every stop so the itinerary flows without rushing.',
    'Our chauffeurs know every major Chicago concert venue. They know the drop-off approach, the staging zones, the post-show exit routes, and the meeting point logistics at each one. Whether your group is going to a sold-out arena night, an intimate club show, or a summer festival, the same professionalism applies. You tell us the venue, the time, and the group size. We build the evening around it.',
];

$eventFeaturesRightItems = [
    ['service' => 'Any Chicago Concert Venue',           'description' => 'United Center, Wrigley Field, Soldier Field, Ravinia Festival, House of Blues, Aragon Ballroom, Riviera Theatre, and every other Chicagoland venue covered.'],
    ['service' => 'Multi-Stop Concert Night Itineraries', 'description' => 'Dinner before the show, the concert, a post-show nightcap, and a comfortable ride home. One flat rate covers the full evening, no matter how many stops.'],
    ['service' => 'Corporate Client Entertainment',       'description' => 'Client concert nights, company outings, and executive group transportation for any event on the Chicago calendar.'],
    ['service' => 'Bachelor and Bachelorette Parties',    'description' => 'Full celebration rides built around a Chicago concert night, from multi-address pickups across the suburbs to a late-night Chicago return.'],
    ['service' => 'Weddings and Milestone Events',        'description' => 'Elegant stretch limousines for ceremonies, receptions, and anniversary celebrations across all of Chicagoland.'],
    ['service' => 'Airport Transfers',                    'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Concert energy from your first pickup',      'why' => 'Dimmable LED lighting sets the mood for your Chicago night out from the moment your group boards, and keeps the energy going all the way home after the last song.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your Chicago ride',           'why' => 'Bluetooth audio throughout the cabin means your group controls the music from the suburbs to any Chicago concert venue and all the way back.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your group',        'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one squeezed in for the drive from the suburbs to downtown Chicago.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold for the full evening',           'why' => 'Keep the celebration going between every stop. Coolers are stocked and ready before your pickup and available on every leg of the evening.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in any Chicago season',          'why' => 'Chicago concert nights run year-round. Our climate control keeps your group comfortable whether it is a January show at the United Center or a July night at Ravinia.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time', 'why' => 'Every chauffeur is vetted, trained on every major Chicago concert venue, and focused on a smooth, safe, and seamless evening for your group.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody has to be the designated driver', 'detail' => 'Your whole group celebrates, drinks responsibly, and enjoys the full evening without anyone sitting out the fun for the drive home from Chicago.'],
    ['feature' => 'All venues, all neighborhoods covered',  'detail' => 'Our chauffeurs know the drop-off, staging, and exit logistics at every major Chicago concert venue. You do not have to navigate any of it. You show up and we handle the rest.'],
    ['feature' => 'Multi-stop evenings are our specialty',  'detail' => 'Dinner before the show, the concert, a post-show stop, and a comfortable ride home. One flat rate covers the full itinerary, no matter how many stops are on the list.'],
    ['feature' => 'Post-show pickup is already arranged',   'detail' => 'No scrambling for a rideshare after any Chicago concert. Your chauffeur stages at the pre-arranged meeting point for your specific venue and is ready when your group walks out.'],
];

$detailsParagraphs = [
    'A great Chicago concert night has a natural arc: the anticipation on the ride in, the pre-show dinner or drinks in the neighborhood, the show itself, and then the post-concert energy on the way home. The best nights are the ones where that arc is seamless, where no single moment is interrupted by a parking search, a traffic headache, or a rideshare wait. That is exactly what Stop & Go Airport Shuttle Service, Inc. delivers, for any Chicago concert venue, on any night of the year.',
    'A Chicago concert night with us typically looks like this: pickup at your door anywhere in Chicagoland, a pre-show dinner or drinks stop in the neighborhood around your venue, the concert itself, and then wherever your group wants to finish the evening. A post-show bar, a late-night dinner downtown, or straight home if the show ran late. The schedule is built entirely around your plans.',
    'We serve groups from every corner of Chicagoland: Naperville, Aurora, Wheaton, Downers Grove, Schaumburg, Arlington Heights, Evanston, Wilmette, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. For groups coming from different starting points, multi-address pickups are standard. One vehicle, one itinerary, one flat rate.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'Concert night pricing, confirmed',                              'body' => 'Online or by phone in about two minutes. Tell us the venue, the date, and the group size. The moment you confirm, your flat rate is locked for the full evening including all stops. No surge pricing. No adjustments later.'],
    ['num' => '02', 'title' => 'We confirm your full evening itinerary',            'detail' => 'Show time, dinner stop, all pickups, group size',               'body' => 'The day before your concert, our team reviews every detail: pickup addresses, timing, group size, pre-show stop, and venue. We build the departure time around the show and confirm the full itinerary with your group.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'Venue-specific drop-off and post-show staging pre-planned',    'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the routing and the drop-off and staging logistics specific to your concert venue.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',                'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'Dinner, the concert, post-show. Your call.',                   'body' => 'Your chauffeur handles all routing, all traffic, and any timing adjustments throughout the evening. Pre-show dinner, the show itself, a post-concert stop, and the ride home. We adapt to everything your group decides.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged at your specific venue, away from the worst congestion','body' => 'After the final song, your chauffeur is at the pre-arranged meeting point for your specific venue, away from the main rideshare crowd. Your group is moving while others are still waiting.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',      'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines for couples and smaller groups who want an elegant evening. Luxury sprinter vans for mid-size groups. Party buses for larger groups and celebrations. Tell us your headcount and we will match you to the right vehicle.',  'note' => 'Tell us your headcount when you request a quote.'],
    ['occasion' => 'Pickup Routing',          'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Naperville, Aurora, Schaumburg, Evanston, Orland Park, New Lenox, downtown Chicago, and every suburb in Chicagoland. Multi-address pickups for groups coming from different starting points are standard for our concert night bookings.',                     'note' => null],
    ['occasion' => 'Any Chicago Venue',       'timing' => 'Any concert venue on the map',   'urgency' => 'high',   'detail' => 'United Center, Wrigley Field, Soldier Field, Ravinia, House of Blues, Aragon Ballroom, Riviera Theatre, and every other Chicagoland venue. Our chauffeurs know the drop-off, staging, and exit logistics at each one.',                                                     'note' => 'Tell us the venue when you request a quote.'],
    ['occasion' => 'Pre-Show Dinner Stops',   'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A neighborhood dinner stop before the show is standard on most of our concert night bookings. We build the timing so your group arrives at the venue before the opener, no matter which neighborhood the concert is in.',                                                   'note' => null],
    ['occasion' => 'Post-Show Pickup',        'timing' => 'Staged and ready at last song',  'urgency' => 'high',   'detail' => 'Your chauffeur stages at the venue-specific pre-arranged meeting point and monitors the show. When the final song ends, they are ready to move before the post-show crowd builds around your specific venue.',                                                               'note' => 'Your rate does not change based on show length.'],
    ['occasion' => 'Flat-Rate Pricing',       'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book, covering the full evening including all stops. No meter running. No surge pricing for traffic or a late-ending show. No surprise fees. Gratuity is not included but is always appreciated.',                                         'note' => null],
];
@endphp

<x-layouts.page
    title="Chicago Concert Night Out Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Custom concert night out transportation for any Chicago venue. Dinner, the show, and every stop in between. One flat rate covers all of Chicagoland. Book your perfect Chicago night out today."
    currentPage="services"
    ogImage="/images/special-events/concerts/chicago-night-out.jpg"
    ogImageAlt="Chicago concert night out, luxury transportation by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Chicago Concert Night Out"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your perfect Chicago night starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/chicago-night-out.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Any Venue, Any Neighborhood,"
        headingBold="One Perfect Chicago Evening"
        heading=""
        body="Chicago's concert calendar runs 365 days a year across dozens of venues, and no two nights look the same. What stays consistent is the challenge: parking, traffic, and post-show logistics at every venue in the city. We handle all three for any concert, any neighborhood, and any group size in Chicagoland. You tell us the show. We build the evening."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to Any Chicago Concert Venue"
        subtitle="Pickup from every corner of Chicagoland"
        body="The moment your group boards, the evening begins. Our chauffeurs know the drop-off approach, staging zones, and post-show exit routes at every major Chicago concert venue. Dinner before the show in the neighborhood around your venue, the concert itself, and wherever your group wants to finish the night. One flat rate covers the full itinerary from the first pickup to the last drop-off. You focus on the evening. We handle all the logistics."
        note="No matter your group size, we have a vehicle for your Chicago night out. Call us and we will match you to the right one."
        image="/images/special-events/concerts/chicago-night-out-cta.jpg"
        imageAlt="Chicago concert night out, group dressed for an evening of live music and dining in Chicago"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Chicago Concert"
        headingTail="Night Out"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/chicago-night-out-fiq.jpg"
        descImageAlt="Chicago nightlife and concert night out transportation by Stop & Go Airport Shuttle Service, Inc."
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best Chicago Concert Night Out Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with years of experience building custom concert night itineraries for groups across the region:"
        :descBullets="[
            'Flat-rate pricing locked at booking, covers the full itinerary',
            'Any Chicago venue, any neighborhood, any night of the year',
            'Multi-address pickup from any Chicagoland suburb',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our professional chauffeurs are ready to build your perfect Chicago concert night from start to finish."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Chicago Concert Night Out Limo"
    />

    <x-sections.event-features
        heading="The Chicago Concert Night Out Experience,"
        headingBold="Start to Finish"
        intro="A Chicago concert night is whatever your group decides it should be. The show, the neighborhood around the venue, the dinner before, and the nightcap after are all part of an evening we handle from the first pickup to the last drop-off."
        leftHeading="Chicago's Concert Scene, Every Venue, Every Neighborhood"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for Chicago Concert Nights"
        intro="Getting to a Chicago concert on your own means coordinating parking, handling traffic at a venue you may not know well, and hoping the rideshare situation after the show is manageable. A party bus eliminates every one of those variables for every venue on the Chicago concert map."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Chicago Concert Night Out"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Chicago concert night?"
        ctaBody="Flat-rate pricing. Any venue. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before Your Chicago Concert Night"
        intro="A perfect Chicago evening does not happen by accident. Here is everything we handle from the moment you book to the moment we drop you at your first stop."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="Chicago Concert Night Out"
        intro="These are the six things our clients care most about when booking a Chicago concert night. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="chicago-night-out" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Chicago Concert Night Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable Chicago evening. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
