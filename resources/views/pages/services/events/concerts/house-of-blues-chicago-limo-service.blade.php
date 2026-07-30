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
    "name": "House of Blues Chicago Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",      "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",   "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",     "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",  "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",   "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",    "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to House of Blues Chicago in River North from anywhere in Chicagoland. Gospel Brunch group bookings. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "House of Blues Chicago Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/house-of-blues-chicago-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to House of Blues Chicago in River North from anywhere in Chicagoland. Gospel Brunch group bookings. Flat-rate pricing. Book today."
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
        { "@type": "ListItem", "position": 4, "name": "House of Blues Chicago Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/house-of-blues-chicago-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to House of Blues Chicago in River North from anywhere in Chicagoland. No downtown parking garage. No River North traffic headache. No surge-priced car home after a late show. We pick up your group at your door and deliver you to Marina City in time for whatever is on the calendar, from a sold-out touring act to the legendary Sunday Gospel Brunch. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for any group. Every chauffeur is background-checked, uniformed, and trained on downtown River North routing. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'House of Blues Chicago opened in 1996 inside Marina City, one of the most recognizable architectural landmarks on the Chicago River. The 55,000-square-foot venue spans multiple levels and includes the main concert hall, the Foundation Room, and the private event spaces that have made it a premier destination for concerts, corporate events, and celebrations across the city. Its location at State and Ohio places it at the center of one of Chicago\'s most active entertainment districts, with River North and Streeterville stretching out in every direction.',
    'The Sunday Gospel Brunch at House of Blues has become one of Chicago\'s most beloved weekend traditions, drawing groups for birthday celebrations, bachelorette weekends, mother-daughter outings, and anniversary brunches from across the region. The combination of live gospel music, a full Southern brunch spread, and the distinctive House of Blues atmosphere makes it a morning experience unlike anything else in the city. Our chauffeurs coordinate timing around the seating schedule and pick up your group directly at your door.',
    'River North is one of Chicago\'s most concentrated dining and nightlife districts, with restaurants, cocktail bars, and entertainment venues packed into the blocks around Marina City. Most of our House of Blues clients build a dinner stop into the evening before the concert, and some add a post-show nightcap in River North before heading home. Our chauffeurs know every route in and out of the downtown grid and time each stop so your group never feels rushed.',
];

$eventFeaturesRightItems = [
    ['service' => 'Sunday Gospel Brunch Group Bookings', 'description' => 'Coordinated transportation for birthday parties, bachelorette weekends, family celebrations, and corporate groups attending the House of Blues Sunday Gospel Brunch.'],
    ['service' => 'Concert and Live Music Events',        'description' => 'Ravinia Festival, United Center, Soldier Field, Aragon Ballroom, and every major Chicago venue served with the same reliable service.'],
    ['service' => 'Corporate Client Entertainment',       'description' => 'River North client entertainment nights, Foundation Room private events, and corporate group transportation for any group size.'],
    ['service' => 'Bachelor and Bachelorette Parties',    'description' => 'Multi-stop River North celebration rides built around a House of Blues concert, Gospel Brunch, or private event night.'],
    ['service' => 'Weddings and Milestone Events',        'description' => 'Elegant stretch limousines for ceremonies, receptions, and anniversary celebrations throughout Chicagoland.'],
    ['service' => 'Airport Transfers',                    'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'River North energy from the first pickup',   'why' => 'Dimmable LED lighting sets the mood before the first song and keeps the celebration going on the drive home after the show or brunch.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your downtown ride',          'why' => 'Bluetooth audio throughout the cabin means your group controls the music from their door all the way to the Marina City entrance.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your group',        'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one squeezed into a backseat for the downtown drive.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold for the full evening',           'why' => 'Keep the celebration going on both legs of the trip. Coolers are stocked and ready before your pickup and available on the ride home.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in any Chicago season',          'why' => 'House of Blues hosts year-round. Whether it is a January Gospel Brunch or a July late-night show, our climate control keeps your group comfortable.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time', 'why' => 'Every chauffeur is vetted, trained on River North and downtown Chicago routing, and focused on a smooth, safe evening for your group.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody fights the downtown parking garage', 'detail' => 'River North parking on a busy weekend night is expensive and limited. Our group arrives by door-to-door chauffeured service and never pays for a single parking spot.'],
    ['feature' => 'Gospel Brunch timing is handled',           'detail' => 'The Sunday Gospel Brunch has specific seating windows. We build the pickup time around your seating and make sure your group arrives at Marina City with room to check in before the music starts.'],
    ['feature' => 'The party starts before you arrive',        'detail' => 'Premium sound, LED lighting, and room to move means the energy begins the moment your group boards. By the time you reach River North, the mood is already set.'],
    ['feature' => 'Post-show pickup is already arranged',      'detail' => 'No waiting in a River North rideshare queue after a late show. Your chauffeur stages at a pre-arranged meeting point near Marina City and is ready when your group walks out.'],
];

$detailsParagraphs = [
    'House of Blues Chicago draws audiences from across Chicagoland and the broader Midwest for a calendar that runs year-round, spanning every genre and format from intimate acoustic sets to sold-out arena-level touring acts in an indoor venue. The Sunday Gospel Brunch has become an institution unto itself, with groups booking months ahead for birthdays and celebrations. Whatever brings your group to Marina City, the logistics of getting downtown and back are where we add the most value to the evening.',
    'A House of Blues night with us typically looks like this: pickup at your door anywhere in Chicagoland, an optional River North dinner stop before the show, arrival at the venue in time to check in comfortably, and then a post-show ride home or a stop at a nearby River North cocktail bar if your group wants to extend the night. The schedule is built around your plans.',
    'We serve groups from every corner of Chicagoland for House of Blues transportation: Naperville, Aurora, Schaumburg, Arlington Heights, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. Gospel Brunch groups coming from the suburbs frequently book multi-address pickups so the whole party boards together in one vehicle.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'House of Blues pricing, confirmed',                             'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the evening and any stops you have planned. No surge pricing. No adjustments for downtown traffic or show length.'],
    ['num' => '02', 'title' => 'We confirm your event night details',               'detail' => 'Show time or brunch seating, pickup route, group size',         'body' => 'The day before, our team reviews your pickup address, timing, group size, and any stops. We confirm the event start time or Gospel Brunch seating window and build your departure around it, with buffer for downtown Chicago traffic.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'River North drop-off and post-show staging pre-planned',       'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the downtown routing and the specific House of Blues drop-off and post-show staging point near Marina City.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',                'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'River North dinner, the show, post-show. Your call.',          'body' => 'Your chauffeur handles the routing, the downtown grid, and any timing adjustments. River North dinner stop, straight to the venue, or a post-show bar stop. We adapt to what your group decides.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged away from the River North rideshare crowd',         'body' => 'After the show ends, your chauffeur is at the pre-arranged meeting point near Marina City, away from the main rideshare congestion on State Street. Your group is moving while others are still waiting.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',      'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines for smaller, more intimate outings. Luxury sprinter vans for mid-size groups. Party buses for larger groups. Tell us your headcount and we will match you to the right vehicle.',                   'note' => 'Tell us your headcount when you request a quote.'],
    ['occasion' => 'Pickup Routing',          'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Naperville, Aurora, Schaumburg, Evanston, Orland Park, New Lenox, downtown Chicago, and every suburb in Chicagoland. Multi-address pickups for Gospel Brunch groups coming from different suburbs are handled regularly.',              'note' => null],
    ['occasion' => 'River North Drop-Off',    'timing' => 'Right at Marina City',           'urgency' => 'high',   'detail' => 'Our chauffeurs know the Marina City drop-off approach and coordinate a staging point that avoids the worst of the downtown River North traffic. The exact meeting point is confirmed with your group leader before departure.',                          'note' => 'Drop-off and pickup points are confirmed the day before your event.'],
    ['occasion' => 'Pre-Show Dinner Stops',   'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A River North restaurant stop before the show is our most popular addition to a House of Blues booking. We time the dinner so your group arrives at Marina City before the doors open.',                                                               'note' => null],
    ['occasion' => 'Post-Show Pickup',        'timing' => 'Staged and ready after the show','urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage near Marina City and monitor the show end time. When the concert finishes, they are ready to move before the State Street rideshare crowd builds.',                                          'note' => 'Your rate does not change based on show length.'],
    ['occasion' => 'Flat-Rate Pricing',       'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for downtown traffic or a sold-out night. No surprise fees. Gratuity is not included but is always appreciated.',                                                         'note' => null],
];
@endphp

<x-layouts.page
    title="House of Blues Chicago Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to House of Blues Chicago in River North from anywhere in Chicagoland. Gospel Brunch group bookings. Flat-rate pricing. Book today."
    currentPage="services"
    ogImage="/images/special-events/concerts/house-of-blues-concert-crowd.jpg"
    ogImageAlt="House of Blues Chicago concert crowd at Marina City in River North, served by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="House of Blues Chicago"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your House of Blues night starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/house-of-blues-concert-crowd.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Downtown Parking Garage,"
        headingBold="Arrive at Marina City in Style"
        heading=""
        body="House of Blues Chicago has been one of the city's premier live music venues since 1996, hosting everything from intimate touring acts to sold-out nights that draw thousands of fans from across the region. For every group that has driven downtown for a show or the Sunday Gospel Brunch, the River North parking garage and the post-show State Street rideshare wait are equally familiar. We handle both so your group focuses on the music, the celebration, and the distinctive House of Blues experience."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to Marina City"
        subtitle="Pickup from every corner of Chicagoland"
        body="The moment your group boards, the River North evening begins. Our chauffeurs know the downtown grid, the Marina City approach, and which routes clear fastest after a late-night show on State Street. Whether you are coming from the western suburbs, the North Shore, the southwest suburbs, or anywhere else in Chicagoland, we have covered this venue many times. You focus on the show or the brunch. We handle everything from your driveway to the last drop-off."
        note="No matter your group size, we have a vehicle for your House of Blues night. Call us and we will match you to the right one."
        image="/images/special-events/concerts/house-of-blues-cta.jpg"
        imageAlt="House of Blues Chicago venue exterior at Marina City in River North"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="House of Blues"
        headingTail="Night"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/house-of-blues-fiq.jpg"
        descImageAlt="House of Blues Chicago concert crowd in the main hall at Marina City, River North"
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best House of Blues Chicago Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with years of experience getting groups to House of Blues Chicago from across the region:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'River North drop-off and post-show staging at Marina City included',
            'Gospel Brunch seating-window timing coordination included',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our chauffeurs are ready to get your group to Marina City and back, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="House of Blues Chicago Limo"
    />

    <x-sections.event-features
        heading="The House of Blues Experience,"
        headingBold="Start to Finish"
        intro="A House of Blues night is a full River North story. The venue, the Gospel Brunch tradition, the Marina City landmark, and the dining and nightlife district surrounding it are all part of what makes this one of Chicago's most distinctive live event destinations."
        leftHeading="House of Blues Chicago, Marina City, and the River North Entertainment District"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for House of Blues"
        intro="Getting to House of Blues on your own means fighting downtown River North traffic, paying for an expensive parking garage near Marina City, and hoping everyone can find a rideshare at the same time after a late show. A party bus solves every one of those problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your House of Blues Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your House of Blues night?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach Marina City"
        intro="A great House of Blues night does not happen by accident. Here is everything we handle from the moment you book to the moment we drop you at the venue."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="House of Blues Night"
        intro="These are the six things our clients care most about when booking a House of Blues ride. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="house-of-blues-concert" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your House of Blues Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable River North night. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
