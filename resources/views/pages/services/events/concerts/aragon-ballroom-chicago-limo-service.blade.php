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
    "name": "Aragon Ballroom Chicago Limo & Party Bus Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",      "addressRegion": "IL" },
        { "@type": "City", "name": "Evanston",     "addressRegion": "IL" },
        { "@type": "City", "name": "Naperville",   "addressRegion": "IL" },
        { "@type": "City", "name": "Schaumburg",   "addressRegion": "IL" },
        { "@type": "City", "name": "Orland Park",  "addressRegion": "IL" },
        { "@type": "City", "name": "New Lenox",    "addressRegion": "IL" }
    ],
    "description": "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to the Aragon Ballroom in Uptown Chicago from anywhere in Chicagoland. Skip the Uptown parking hunt. Flat-rate pricing."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Aragon Ballroom Chicago Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/concerts/aragon-ballroom-chicago-limo-service",
    "description": "Luxury limo, party bus, and sprinter van service to the Aragon Ballroom in Uptown Chicago from anywhere in Chicagoland. Skip the Uptown parking hunt. Flat-rate pricing. Book today."
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
        { "@type": "ListItem", "position": 4, "name": "Aragon Ballroom Chicago Limo & Party Bus Service", "item": "https://www.newlenoxlimoservice.com/services/events/concerts/aragon-ballroom-chicago-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

@php
$heroDescription = 'Stop & Go Airport Shuttle Service, Inc. takes your group to the Aragon Ballroom in Uptown Chicago from anywhere in Chicagoland. No Uptown parking hunt. No Lawrence Avenue post-show rideshare wait. No driving home after a late night at one of the most architecturally remarkable concert halls in the United States. We pick up your group at your door and deliver you to the century-old Moorish ballroom in time to enjoy everything the Uptown neighborhood has to offer before the first note. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.';

$eventFeaturesLeftParagraphs = [
    'The Aragon Ballroom opened in 1926 and remains one of the most visually stunning music venues in the United States. The interior was designed to evoke a Spanish courtyard under an open sky, with the ornate plasterwork ceiling painted in deep blues and purples to resemble the night sky above a Moorish courtyard. The atmospheric lighting, the balcony overlooking the main floor, and the sheer architectural ambition of the space make it unlike any other concert venue in Chicago. Arriving by chauffeured vehicle means your group walks in with the energy to appreciate all of it.',
    'The Uptown neighborhood surrounding the Aragon has its own culture and history that extends well beyond the ballroom. The Green Mill cocktail lounge, one of the most famous jazz clubs in Chicago and a Prohibition-era Al Capone haunt, sits just blocks away on Lawrence Avenue. The Riviera Theatre is around the corner. Uptown\'s stretch of Lawrence Avenue is one of Chicago\'s great neighborhood entertainment corridors, and our clients frequently build a pre-show Green Mill stop or dinner into the evening.',
    'The Aragon holds approximately 5,000 people for a general admission standing-room concert, which creates a unique post-show situation: thousands of people emptying onto Lawrence and Broadway at once, competing for the same rideshare pickups in a residential neighborhood with limited street parking. Our clients bypass all of that entirely. Their chauffeur is staged and ready at the pre-arranged meeting point before the encore ends.',
];

$eventFeaturesRightItems = [
    ['service' => 'Uptown Historic Neighborhood Nights', 'description' => 'Full Uptown evening packages built around the Aragon Ballroom, the Green Mill, and the Lawrence Avenue entertainment corridor.'],
    ['service' => 'Concert and Live Music Events',        'description' => 'Ravinia Festival, United Center, Soldier Field, House of Blues, and every major Chicago venue served with the same reliable service.'],
    ['service' => 'Corporate Client Entertainment',       'description' => 'Private Aragon event transportation, company night-out coordination, and executive group bookings for any group size.'],
    ['service' => 'Bachelor and Bachelorette Parties',    'description' => 'Multi-stop Uptown celebration rides built around a sold-out Aragon night and a Green Mill pre-show stop.'],
    ['service' => 'Weddings and Milestone Events',        'description' => 'Elegant stretch limousines for ceremonies, receptions, and anniversary celebrations throughout Chicagoland.'],
    ['service' => 'Airport Transfers',                    'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking and door-to-door service.'],
];

$standardFeatureCards = [
    ['feature' => 'LED Lighting Throughout',     'benefit' => 'Uptown energy from the first pickup',       'why' => 'Dimmable LED lighting sets the mood before the first song and matches the energy your group will find inside one of Chicago\'s most atmospheric concert halls.'],
    ['feature' => 'Premium Sound System',        'benefit' => 'Your playlist, your North Side ride',       'why' => 'Bluetooth audio throughout the cabin means your group controls the music from their door all the way to Lawrence and Broadway.'],
    ['feature' => 'Wrap-Around Leather Seating', 'benefit' => 'Room for every member of your group',       'why' => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one squeezed in for the North Side drive to Uptown.'],
    ['feature' => 'Beverage Coolers',            'benefit' => 'Drinks cold for the full evening',          'why' => 'Keep the celebration going on both legs of the trip. Coolers are stocked and ready before your pickup and available for the ride home.'],
    ['feature' => 'Climate Control',             'benefit' => 'Comfortable in any Chicago season',         'why' => 'The Aragon hosts shows year-round. Our climate control keeps your group comfortable in any season for both the drive there and the late-night ride home.'],
    ['feature' => 'Professional Chauffeur',      'benefit' => 'Background-checked, uniformed, and on time','why' => 'Every chauffeur is vetted, trained on Uptown Chicago routing, and focused on getting your group to Lawrence and Broadway and back safely.'],
];

$detailsChecklist = [
    ['feature' => 'Nobody waits in the post-show rideshare crowd', 'detail' => 'Five thousand people emptying onto Lawrence Avenue at once creates one of the most concentrated rideshare bottlenecks on the North Side. Your chauffeur is staged and ready before the encore ends.'],
    ['feature' => 'Skip the Uptown parking hunt',                  'detail' => 'Street parking near the Aragon fills early on a sold-out night. We drop your group at the entrance and pick up from a pre-arranged staging point so nobody pays for parking or searches the side streets.'],
    ['feature' => 'Green Mill stop is easy to add',                'detail' => 'The historic Green Mill jazz club is blocks from the Aragon. We build the timing so your group can enjoy a pre-show cocktail at one of Chicago\'s most iconic bars and still make the opener.'],
    ['feature' => 'Post-show pickup is already arranged',          'detail' => 'No standing on Lawrence Avenue competing with thousands of other concertgoers for a rideshare. Your chauffeur is at the pre-arranged meeting point and ready to move the moment you walk out.'],
];

$detailsParagraphs = [
    'The Aragon Ballroom has hosted iconic performances since the Big Band era, and the venue has earned a devoted following across generations of Chicago music fans. Shows here tend to sell out, and the energy inside the ornate ballroom is unlike anything in a modern arena. The challenge has always been what happens after: thousands of people, a residential Uptown neighborhood, and a Lawrence Avenue street grid not designed for mass post-show egress. Professional transportation is the most direct solution.',
    'An Aragon night with us typically looks like this: pickup at your door anywhere in Chicagoland, a pre-show stop at the Green Mill or a neighborhood restaurant on Lawrence Avenue, the concert at the Aragon, and then a comfortable ride home as soon as your group is ready. The schedule is built around your plans, including any post-show stops your group decides to add.',
    'We serve groups from every corner of Chicagoland for Aragon Ballroom transportation: Naperville, Aurora, Schaumburg, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. For sold-out shows with groups coming from different parts of the city, multi-address pickups are a standard part of our Aragon bookings.',
];

$processSteps = [
    ['num' => '01', 'title' => 'You book and your rate locks',                     'detail' => 'Aragon Ballroom concert pricing, confirmed',                    'body' => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the evening. No surge pricing. No adjustments for North Side traffic or how late the show runs.'],
    ['num' => '02', 'title' => 'We confirm your concert night details',             'detail' => 'Show time, Green Mill stop, group size',                        'body' => 'The day before, our team reviews your pickup address, timing, group size, and any stops. We confirm the show time and build your departure window around it, including time for a Green Mill stop if your group wants one.'],
    ['num' => '03', 'title' => 'Your vehicle is prepared and the route is loaded',  'detail' => 'Uptown drop-off and post-show staging pre-planned',            'body' => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the North Side routing and the specific Aragon drop-off and post-show staging point near Lawrence and Broadway.'],
    ['num' => '04', 'title' => 'Your chauffeur arrives early',                      'detail' => '10 to 15 minutes ahead of your departure time',                'body' => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.'],
    ['num' => '05', 'title' => 'The ride runs on your schedule',                    'detail' => 'Green Mill, the show, post-show. Your call.',                  'body' => 'Your chauffeur handles the routing, the North Side traffic, and any timing adjustments. Green Mill stop, straight to the Aragon, or a post-show Uptown stop. We adapt to what your group wants.'],
    ['num' => '06', 'title' => 'Post-show pickup, everyone home safe',              'detail' => 'Pre-staged away from the Lawrence Avenue rideshare crowd',     'body' => 'After the final song, your chauffeur is at the pre-arranged meeting point away from the main Lawrence and Broadway crowd. Your group is moving while others are still waiting for a car on the sidewalk.'],
];

$fulfillmentItems = [
    ['occasion' => 'Group Size Options',      'timing' => 'Any group, any vehicle',         'urgency' => 'high',   'detail' => 'Our fleet covers every group size. Stretch limousines for smaller, more intimate concert groups. Luxury sprinter vans for mid-size groups. Party buses for larger groups. Tell us your headcount and we will match you to the right vehicle.',         'note' => 'Tell us your headcount when you request a quote.'],
    ['occasion' => 'Pickup Routing',          'timing' => 'Anywhere in Chicagoland',        'urgency' => 'medium', 'detail' => 'We pick up from Naperville, Aurora, Schaumburg, Evanston, Orland Park, New Lenox, downtown Chicago, and every suburb in Chicagoland. Multi-address pickups for groups coming from different neighborhoods are handled regularly for Aragon shows.',  'note' => null],
    ['occasion' => 'Uptown Drop-Off',         'timing' => 'Right at the Aragon entrance',   'urgency' => 'high',   'detail' => 'Our chauffeurs know the Aragon Ballroom drop-off approach and coordinate a staging point near Lawrence and Broadway that avoids the worst street parking congestion. The meeting point is confirmed with your group leader before departure.',     'note' => 'Drop-off and pickup points are confirmed the day before your show.'],
    ['occasion' => 'Green Mill Stops',        'timing' => 'Built into your itinerary',      'urgency' => 'medium', 'detail' => 'A pre-show stop at the Green Mill jazz club or a Lawrence Avenue restaurant is one of our most popular additions to an Aragon booking. We time the stop so your group makes it to the ballroom before the opener.',                                'note' => null],
    ['occasion' => 'Post-Show Pickup',        'timing' => 'Staged and ready at last song',  'urgency' => 'high',   'detail' => 'Your chauffeur does not leave after drop-off. They stage at the pre-arranged meeting point and monitor the show. When the final song ends, they are ready to move before the Lawrence Avenue crowd builds.',                                          'note' => 'Your rate does not change based on show length.'],
    ['occasion' => 'Flat-Rate Pricing',       'timing' => 'Locked at booking',              'urgency' => 'low',    'detail' => 'Your rate is confirmed when you book. No meter running. No surge pricing for North Side traffic or a late-ending show. No surprise fees. Gratuity is not included but is always appreciated.',                                                    'note' => null],
];
@endphp

<x-layouts.page
    title="Aragon Ballroom Chicago Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Luxury limo, party bus, and sprinter van service to the Aragon Ballroom in Uptown Chicago from anywhere in Chicagoland. Skip the Uptown parking hunt. Flat-rate pricing. Book today."
    currentPage="services"
    ogImage="/images/special-events/concerts/aragon-ballroom-concert-crowd.jpg"
    ogImageAlt="Aragon Ballroom Chicago concert crowd in the historic Uptown venue, served by Stop & Go Airport Shuttle Service, Inc."
>

    <x-sections.category-hero
        heading="Aragon Ballroom"
        headingBold="Chicago Limo & Party Bus Service"
        :headingTwoLines="true"
        subtitle="Your Aragon night starts the moment you step on board"
        :description="$heroDescription"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/special-events/concerts/aragon-ballroom-concert-crowd.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Skip the Uptown Parking Hunt,"
        headingBold="Arrive at the Aragon in Style"
        heading=""
        body="The Aragon Ballroom has been one of Chicago's most beloved concert halls since 1926, and every concertgoer who has driven to an Aragon sold-out show knows what Lawrence and Broadway looks like after the encore. We handle the Uptown routing, the drop-off at the entrance, and the post-show exit so your group focuses on the music, the historic atmosphere, and the Uptown neighborhood around it."
    />

    <x-sections.travel-in-style-cta
        heading="From Your Driveway"
        headingBold="to the Aragon Ballroom"
        subtitle="Pickup from every corner of Chicagoland"
        body="Our chauffeurs know Uptown Chicago. They know the Lawrence and Broadway approach on a sold-out night, the side streets that clear first after the show, and where to stage away from the post-show rideshare crowd. Whether you are starting from the suburbs, downtown, or another Chicago neighborhood, we have covered this venue many times. You arrive at one of the most architecturally stunning concert halls in the country in full celebration mode, with the logistics entirely handled."
        note="No matter your group size, we have a vehicle for your Aragon night. Call us and we will match you to the right one."
        image="/images/special-events/concerts/aragon-ballroom-cta.jpg"
        imageAlt="Aragon Ballroom exterior in Uptown Chicago, historic concert hall on Lawrence Avenue"
    />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Aragon Ballroom"
        headingTail="Night"
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/special-events/concerts/aragon-ballroom-concert-crowd.jpg"
        descImageAlt="Aragon Ballroom concert crowd in the historic Moorish ballroom in Uptown Chicago"
        descHeading="Why Choose Us?"
        descSubheading="We Have the Best Aragon Ballroom Transportation"
        descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with years of experience getting groups to the Aragon Ballroom from across the region:"
        :descBullets="[
            'Flat-rate pricing locked at booking, no surge fees',
            'Uptown drop-off and post-show staging away from the Lawrence Avenue crowd',
            'Green Mill pre-show stop coordination included on request',
            'All vehicles cleaned, inspected, and climate-set before pickup',
            'Licensed, background-checked chauffeurs available 24/7',
        ]"
        descClosing="Serving all of Chicagoland, our chauffeurs are ready to get your group to Lawrence and Broadway and back, no matter where you are starting from."
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="Aragon Ballroom Limo"
    />

    <x-sections.event-features
        heading="The Aragon Ballroom Experience,"
        headingBold="Start to Finish"
        intro="An Aragon night is a full Uptown story. The historic ballroom, the Green Mill down the street, and the North Side neighborhood surrounding one of America's most beloved concert halls are all part of what makes a show here unlike any other."
        leftHeading="The Aragon Ballroom, Uptown Chicago, and a Century of Live Music"
        :leftParagraphs="$eventFeaturesLeftParagraphs"
        rightHeading="Stop & Go Serves Every Chicago Occasion"
        :rightItems="$eventFeaturesRightItems"
    />

    <x-sections.event-details
        heading="Why Chicagoland Groups Choose a Party Bus for the Aragon Ballroom"
        intro="Getting to the Aragon on your own means finding street parking in a residential Uptown neighborhood, and leaving means competing with 5,000 other concertgoers for the same rideshare pickups on Lawrence Avenue. A party bus solves both problems before you leave your driveway."
        leftHeading="Four Reasons It Works Better Than Driving"
        :checklist="$detailsChecklist"
        rightHeading="Planning Your Aragon Ballroom Night"
        :rightParagraphs="$detailsParagraphs"
        ctaHeading="Ready to book your Aragon Ballroom ride?"
        ctaBody="Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day."
    />

    <x-sections.limo-process-steps
        heading="Six Things That Happen"
        headingBold="Before You Reach the Aragon"
        intro="A great Aragon night does not happen by accident. Here is everything we handle from the moment you book to the moment we drop you at the Lawrence Avenue entrance."
        :steps="$processSteps"
    />

    <x-sections.limo-booking-timeline
        heading="What We Cover on Your"
        headingBold="Aragon Ballroom Night"
        intro="These are the six things our clients care most about when booking an Aragon Ballroom ride. Here is how we handle each one."
        :items="$fulfillmentItems"
        legend="Champagne border = book early, high demand. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.review-slider />

    <x-sections.faq preset="aragon-ballroom-concert" />

    <x-sections.share-your-experience />

    <x-sections.standard-features
        heading="What Your Aragon Ballroom Ride <strong>Includes</strong>"
        intro="Every vehicle in our fleet comes fully equipped for an unforgettable Uptown night. These are the features your group rides with."
        :cards="$standardFeatureCards"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
