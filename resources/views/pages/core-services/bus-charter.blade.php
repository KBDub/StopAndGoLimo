@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "LimousineService"],
    "@id": "https://newlenoxlimoservice.com/#business",
    "name": "Stop & Go Airport Shuttle Service Inc.",
    "alternateName": "Stop & Go Limo",
    "url": "https://newlenoxlimoservice.com",
    "telephone": "(815) 585-6922",
    "priceRange": "$$",
    "image": "https://newlenoxlimoservice.com/images/heroes/hero-new-bus-rental.jpg",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 41.5126,
        "longitude": -87.9756
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
    },
    "areaServed": [
        { "@type": "City", "name": "New Lenox" },
        { "@type": "City", "name": "Joliet" },
        { "@type": "City", "name": "Naperville" },
        { "@type": "City", "name": "Frankfort" },
        { "@type": "City", "name": "Mokena" },
        { "@type": "City", "name": "Orland Park" },
        { "@type": "City", "name": "Tinley Park" },
        { "@type": "City", "name": "Plainfield" },
        { "@type": "City", "name": "Bolingbrook" },
        { "@type": "City", "name": "Romeoville" },
        { "@type": "AdministrativeArea", "name": "Will County" },
        { "@type": "State", "name": "Illinois" }
    ]
}
</script>
@endverbatim
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "https://newlenoxlimoservice.com/core-services/bus-charter#service",
    "name": "Charter Bus Service",
    "serviceType": "Group Transportation",
    "description": "Charter bus and party bus service for groups across Chicagoland. Corporate shuttles, wedding party buses, airport group transfers, quinceañera buses, concert transportation, and winery tour buses. Flat-rate, all-inclusive pricing with 24/7 dispatch.",
    "provider": {
        "@type": "LocalBusiness",
        "@id": "https://newlenoxlimoservice.com/#business"
    },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Charter Bus Services",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Corporate Shuttle Bus" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Party Bus Shuttle" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Airport Group Charter Bus" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Concert and Event Charter Bus" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Quinceañera Charter Bus" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Winery and Brewery Tour Bus" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "School and Church Group Charter" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Family Reunion Bus" } }
        ]
    }
}
</script>
@endverbatim
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Charter Bus Services — Stop & Go",
    "description": "Full list of charter bus and group transportation services offered by Stop & Go Airport Shuttle Service Inc. from New Lenox, Illinois.",
    "itemListElement": [
        {
            "@type": "ListItem", "position": 1,
            "item": {
                "@type": "Product",
                "name": "Corporate Shuttle Bus",
                "description": "Professional shuttle buses for corporate teams, conferences, and business events across Chicagoland and the I-80 and I-88 corridors. Flat-rate pricing, centralized billing, and 24/7 dispatch.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "Offer", "priceCurrency": "USD", "availability": "https://schema.org/InStock", "description": "Flat-rate — contact for quote" }
            }
        },
        {
            "@type": "ListItem", "position": 2,
            "item": {
                "@type": "Product",
                "name": "Wedding Party Bus Shuttle",
                "description": "Charter buses and party buses for wedding parties moving between venues across Will County. Keeps the whole bridal party together, on schedule, and celebrating.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "Offer", "priceCurrency": "USD", "availability": "https://schema.org/InStock", "description": "Flat-rate — contact for quote" }
            }
        },
        {
            "@type": "ListItem", "position": 3,
            "item": {
                "@type": "Product",
                "name": "Airport Group Charter Bus",
                "description": "Group charter bus transfers to O'Hare and Midway for corporate travel parties, wedding guests, and large families. One vehicle, ample luggage space, flat-rate pricing.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "Offer", "priceCurrency": "USD", "availability": "https://schema.org/InStock", "description": "Flat-rate — contact for quote" }
            }
        },
        {
            "@type": "ListItem", "position": 4,
            "item": {
                "@type": "Product",
                "name": "Concert and Event Charter Bus",
                "description": "Charter buses to Chicago's major venues: United Center, Soldier Field, Allstate Arena, Wrigley Field, and Northerly Island. No parking, no surge pricing, guaranteed pickup after the show.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "Offer", "priceCurrency": "USD", "availability": "https://schema.org/InStock", "description": "Flat-rate — contact for quote" }
            }
        },
        {
            "@type": "ListItem", "position": 5,
            "item": {
                "@type": "Product",
                "name": "Quinceañera Charter Bus",
                "description": "Spacious charter buses for quinceañera celebrations, keeping the quinceañera and her court of honor together from the ceremony to the reception.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "Offer", "priceCurrency": "USD", "availability": "https://schema.org/InStock", "description": "Flat-rate — contact for quote" }
            }
        },
        {
            "@type": "ListItem", "position": 6,
            "item": {
                "@type": "Product",
                "name": "Winery and Brewery Tour Bus",
                "description": "Illinois winery and brewery tour transportation for groups. Everyone rides together, no one drives, and the experience stays enjoyable from the first stop to the last.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "Offer", "priceCurrency": "USD", "availability": "https://schema.org/InStock", "description": "Flat-rate — contact for quote" }
            }
        }
    ]
}
</script>
@endverbatim
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",            "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services",   "item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "Bus Charter Service", "item": "{{ request()->url() }}" }
    ]
}
</script>
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How many passengers can your charter buses hold?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our fleet includes mini buses, standard charter buses, and full-size motorcoaches to accommodate groups of various sizes. Contact us with your headcount and we will recommend the right vehicle for your party. We right-size every charter so no one is cramped and no seats go empty."
            }
        },
        {
            "@type": "Question",
            "name": "How far in advance should I book a charter bus?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It depends on the occasion. Weddings and quinceañeras should book six to twelve months ahead because Saturday vehicles fill fast. Holiday party charters book out two to three months before peak season. Concerts and corporate trips typically need two to four weeks. When in doubt, the earlier you book, the better your vehicle selection."
            }
        },
        {
            "@type": "Question",
            "name": "Do you offer charter buses for airport group transfers?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We provide group charter buses to O'Hare and Midway for travel parties, corporate teams, and large families traveling together. One vehicle keeps everyone coordinated, provides ample luggage space, and locks in a flat rate for the whole group. We recommend booking at least one week in advance for group airport charters."
            }
        },
        {
            "@type": "Question",
            "name": "Is the charter bus rate all-inclusive?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our flat-rate charter pricing covers the vehicle, the professional driver, fuel, tolls, and our standard service. The rate we quote before you book is the rate you pay. There is no surge pricing, no hidden fees, and no meter running during stops."
            }
        },
        {
            "@type": "Question",
            "name": "Can we make multiple stops on a charter bus trip?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. Multi-stop itineraries are one of the most common reasons groups charter a bus. Whether you are moving a wedding party between a ceremony, photo location, and reception, or taking a corporate group to multiple meetings, we coordinate the route and timing for every stop in advance."
            }
        },
        {
            "@type": "Question",
            "name": "Do you serve areas outside New Lenox for charter buses?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We serve all of Will County and Chicagoland, including Joliet, Naperville, Frankfort, Mokena, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, Aurora, and the city of Chicago. Contact us with your pickup location and destination and we will confirm coverage and pricing."
            }
        }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Charter Bus Service | Group Transportation Chicagoland | Stop &amp; Go"
    metaDescription="Charter bus service for groups across Chicagoland. Corporate shuttles, wedding party buses, airport group charters, concert transportation, and quinceañera buses. Flat-rate pricing. Call (815) 585-6922."
    currentPage="our-services"
    ogImage="/images/heroes/hero-new-bus-rental.jpg"
    ogImageAlt="Stop and Go charter bus service vehicle for group transportation across Chicagoland"
>

    <x-sections.category-hero
        heading="Charter Bus"
        headingBold="Service"
        :headingTwoLines="false"
        subtitle="One vehicle. The whole group. Zero logistics headaches."
        description="Stop & Go Airport Shuttle Service, Inc. has been moving groups across Chicagoland since 2015. We are headquartered in New Lenox at 400 E Lincoln Hwy, and our drivers know the routes between every Will County community, every major Chicago venue, every airport, and every banquet hall and winery in the region. Our charter bus service covers corporate shuttles, wedding party buses, quinceañera charters, concert and event buses, airport group transfers, school and church outings, winery and brewery tours, and family reunions. We serve New Lenox, Joliet, Naperville, Frankfort, Mokena, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, Aurora, and all of Will County and Chicagoland. Every charter includes a professional, background-checked driver, a meticulously maintained and pre-inspected vehicle, and a flat rate that covers the whole group with no surge pricing and no hidden fees. Our 24/7/365 dispatch coordinates early departures and late-night returns every day of the year."
        buttonText="Get a Charter Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-new-bus-rental.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="One Bus Changes"
        headingBold="Everything About Group Travel"
        subtitle=""
        body="When a group splits across multiple cars, the logistics fall apart before the night begins. Someone always gets lost. Someone is always late. Someone ends up driving when they should not be. A single charter bus eliminates every one of those problems. Your group loads together, rides together, and arrives together, with a professional driver handling the route, the parking, and the timing while everyone inside enjoys the trip. No caravan. No designated driver. No one circling for street parking downtown. Multi-stop itineraries are built in advance so the driver knows every pickup and drop-off in sequence. Whether you are moving a wedding party between a ceremony and a reception, running a corporate group to a conference center, or taking friends to a sold-out show at the United Center, one well-sized bus makes the whole experience easier for the organizer and better for every person in the group."
        buttonText="Get a Charter Quote"
        buttonHref="/get-a-quote"
        image="/images/sections/sports-teams-bus.jpg"
        imageAlt="Stop &amp; Go charter bus ready for group transportation across Chicagoland"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="One Flat Rate."
        heading="Every Seat. No Surprise Fees."
        body="On-demand apps reprice when demand spikes, when an event ends and the crowd pours out, and when your group needs the most flexibility. Stop & Go does not. The rate we quote for your charter covers the entire group, every stop, and the full duration of your booking. Tolls and fuel are included. The driver is included. There is no meter running while you are inside the venue, and there is no surge price when you call for the pickup. Whether you are booking a 12-person corporate shuttle or a full motorcoach for a family reunion, the figure you receive before you sign is the figure on your receipt after the trip."
    />

    <x-sections.limo-services-grid
        id="charter-services"
        heading="Charter Bus Services"
        headingBold="for Every Group Occasion"
        subheading="Every Type of Group Charter We Handle"
        intro="Stop & Go has been coordinating group transportation across Chicagoland since 2015. From corporate shuttles to wedding party buses to concert charters, here is a look at the group bookings our clients rely on most."
        :cards="[
            [
                'service' => 'Corporate Shuttle Bus',
                'copy'    => 'Corporate teams traveling to conferences, conventions, and multi-venue meetings need transportation that runs like the workday: on schedule, professionally presented, and logistically invisible. Stop & Go corporate charters keep your team together, provide centralized billing for travel managers, and cover the I-80 and I-88 business corridors as well as downtown Chicago venues. One driver, one vehicle, one flat rate.',
            ],
            [
                'service' => 'Wedding Party Bus Shuttle',
                'copy'    => 'A wedding day built around a caravan of separate cars is a wedding day waiting for something to go wrong. Stop & Go wedding charters keep the entire bridal party together from getting-ready photos through the last dance. We coordinate every stop, manage the timeline with your planner, and deliver the party to each venue on schedule. Our drivers have worked at venues across Will County, including Frankfort, Mokena, and Joliet.',
            ],
            [
                'service' => 'Airport Group Charter',
                'copy'    => 'Moving five or more people to O\'Hare or Midway together is simplest in one coordinated vehicle. Stop & Go group airport charters provide ample luggage space, a flat group rate, and a driver who knows the terminal lanes and curbside drop-off protocols at both airports. Whether it is a corporate travel party, a family flying out together, or a sports team heading to a tournament, one bus gets everyone there without splitting the group.',
            ],
            [
                'service' => 'Concert and Event Charter Bus',
                'copy'    => 'Parking near the United Center, Soldier Field, Allstate Arena, or Wrigley Field costs as much as the tickets and adds 45 minutes each way. A Stop & Go concert charter solves that entirely. Your group loads up in New Lenox, Joliet, or anywhere across Will County, we handle venue traffic and dedicated drop-off lanes, and your return ride is staged at a price set in advance with no surge pricing when the crowd exits.',
            ],
            [
                'service' => 'Quinceañera Charter Bus',
                'copy'    => 'A quinceañera spans multiple locations across a full day, and the court of honor needs to stay together the entire time. Stop & Go quinceañera charters coordinate the home gathering, the church arrival, the photo stops, and the grand entrance at the reception in one vehicle, keeping the quinceañera and her damas and chambelanes on schedule and celebrating. We have coordinated celebrations at venues across New Lenox, Joliet, and Will County since 2015.',
            ],
            [
                'service' => 'Winery and Brewery Tour Bus',
                'copy'    => 'Illinois has a growing trail of wineries and craft breweries, and the best way to experience more than one in a day is with a driver who handles every mile. Stop & Go winery and brewery tour charters provide a comfortable, climate-controlled bus for groups exploring the region, with stops planned in advance and a return time that keeps the evening on track. No one drives. Everyone enjoys the full experience.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-process-steps
        id="charter-process"
        heading="Six Steps That Happen Before"
        headingBold="Your Group Boards the Bus"
        intro="A great charter bus experience starts well before pickup day. Here is every step Stop & Go takes from the moment you request a quote to the moment your driver opens the door."
        :steps="[
            [
                'num'   => '01',
                'title' => 'You tell us your group size and the date',
                'body'  => 'A quick call or online form is all it takes. Group size, pickup location, destination, number of stops, and your preferred date. We confirm availability and match you with the right vehicle for your headcount and luggage. Quotes are provided promptly.',
            ],
            [
                'num'   => '02',
                'title' => 'We right-size the vehicle for your party',
                'body'  => 'Putting a small group in a full motorcoach or cramming a large group into a mini bus are both mistakes. We match vehicle capacity to your actual headcount, accounting for luggage, equipment, or anything else the group is bringing along. The right vehicle matters as much as the right driver.',
            ],
            [
                'num'   => '03',
                'title' => 'Your route and every stop are locked in',
                'body'  => 'Multi-stop charters are built stop by stop before the trip begins. Pickup sequence, intermediate stops, venue addresses, wait times, and the final drop-off are all confirmed in writing. Your driver has the full itinerary before leaving our lot, so no stop is improvised on the day.',
            ],
            [
                'num'   => '04',
                'title' => 'The vehicle is detailed and pre-inspected',
                'body'  => 'Before your charter date, the assigned vehicle goes through a full mechanical pre-trip inspection and a complete interior detail. Climate is confirmed. Every seat is ready. For groups with specific needs, seating configurations and amenities are verified against your booking.',
            ],
            [
                'num'   => '05',
                'title' => 'Your driver departs early',
                'body'  => 'Our standard is to have the vehicle staged and ready before your scheduled pickup. For multi-stop charters, your driver runs the route mentally before the first pickup. By the time the group boards, every detail has already been worked out.',
            ],
            [
                'num'   => '06',
                'title' => 'Your group arrives together, on time',
                'body'  => 'The driver handles the route, the parking, and the timing. The group handles the occasion. Every stop lands on schedule, every venue arrival is on time, and everyone gets home at the end of the night. That is the complete charter experience.',
            ],
        ]"
    />

    <x-sections.party-bus-occasions
        id="charter-occasions"
        heading="Every Group That Benefits"
        headingBold="from a Charter Bus"
        subheading="Who Books Our Charter Buses Most Often"
        intro="Charter buses serve a wide range of groups across Chicagoland. Here is a look at the occasions and travel parties that book Stop & Go most often, and what each charter typically includes."
        :occasions="[
            [
                'occasion' => 'Corporate Teams and Conference Groups',
                'copy'     => 'Companies across the I-80 and I-88 corridors book charter buses for off-site meetings, conventions, and conference transportation. Keeping the team together avoids parking costs, reduces late arrivals, and makes the ride part of the professional experience. Centralized billing and digital receipts simplify the administrative side for travel managers.',
            ],
            [
                'occasion' => 'Wedding Parties Moving Between Venues',
                'copy'     => 'The bridal party, family members, and out-of-town guests all benefit from a single coordinated shuttle between the ceremony, photo locations, and reception. It eliminates the caravan problem entirely and keeps the timeline in control. Wedding charters are among our most frequently requested bookings across Will County.',
            ],
            [
                'occasion' => 'School and Church Group Outings',
                'copy'     => 'Day trips, community events, and group excursions for schools and faith communities need a driver who is professional, dependable, and easy to coordinate. Stop & Go school and church charters provide a fully licensed and insured vehicle with a background-checked driver for group outings across Chicagoland.',
            ],
            [
                'occasion' => 'Family Reunion Transportation',
                'copy'     => 'Large family reunions often span multiple generations and multiple vehicles, which means someone always gets lost or misses the timing. A Stop & Go family reunion charter puts everyone together, coordinates pick-ups across multiple addresses, and keeps the whole group moving from venue to venue without anyone left behind.',
            ],
            [
                'occasion' => 'Bachelor and Bachelorette Group Nights',
                'copy'     => 'A group night out in downtown Chicago or along the bar and venue circuits in Joliet and Naperville is far easier with one bus and a professional driver. The group stays together, the rate is set before the night starts, and there is no surge pricing on the way home. Everyone celebrates and everyone gets home safely.',
            ],
            [
                'occasion' => 'Holiday Party Groups Downtown',
                'copy'     => 'Company holiday parties at Chicago venues create a predictable transportation problem: everyone needs to get there, no one wants to drive, and Uber surge pricing at 11 p.m. on a Friday in December is not the answer. A Stop & Go holiday charter locks in the rate for the whole group before the party starts and stages the return pickup the moment the venue closes.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.party-bus-advantage
        id="charter-advantage"
        heading="Why Charter One Bus Instead"
        headingBold="of Carpooling the Group"
        intro="Carpooling looks like the simple option until someone is 20 minutes late and three cars are already on the highway. A charter bus is the simple option: one pickup sequence, one flat rate, one driver managing the timing while everyone else focuses on the occasion."
        leftHeading="The Charter Bus Advantage"
        :checklist="[
            [
                'feature' => 'Everyone arrives and leaves together',
                'detail'  => 'No one waits on a late car. No one misses the ceremony because they could not find parking. No one leaves the reception early to be the designated driver. Charter transportation keeps the whole group synchronized from the first pickup to the last drop-off.',
            ],
            [
                'feature' => 'One flat rate for the entire group',
                'detail'  => 'A charter bus divided across a group of 15 to 30 people is often less per person than a surge-priced rideshare for each individual. And the rate is locked before the trip begins, so there are no surprises when the event ends and demand is at its peak.',
            ],
            [
                'feature' => 'No parking, no parking fees',
                'detail'  => 'Event parking at major Chicago venues often runs $40 to $60 per car. Multiply that across the group and the parking cost alone exceeds the charter cost. A Stop & Go charter bus drops and picks up at the designated vehicle lanes and eliminates parking entirely.',
            ],
            [
                'feature' => 'Professional, licensed, and insured driver',
                'detail'  => 'Every Stop & Go driver is background-checked, professionally trained, and operating in a fully licensed and insured vehicle. For groups that include minors, seniors, or traveling clients, that accountability matters. We confirm pickup and drop-off details in advance so families and organizers always know the plan.',
            ],
        ]"
        rightHeading="Will County's Group Transportation Team Since 2015"
        :rightParagraphs="[
            'Stop & Go has been coordinating group transportation across Will County since 2015. Our drivers know the venue access roads at Joliet\'s Jacob Henry Mansion, the church parking sequences for large quinceañera celebrations in New Lenox and Frankfort, the dedicated drop-off lanes at the United Center and Soldier Field, and the airport curbside protocols at both O\'Hare and Midway. That local knowledge reduces timing friction for every charter.',
            'We serve New Lenox, Joliet, Frankfort, Mokena, Naperville, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, and all points across Will County and Chicagoland. Groups traveling from multiple pickup addresses are accommodated with a sequenced pickup run that minimizes total travel time before the first stop.',
            'For recurring corporate charters and large-scale event transportation, Stop & Go offers account coordination with a single dispatch contact. Your travel manager submits the group\'s schedule, we handle every run, and billing is centralized so there is no per-person credit card friction on the day of the trip.',
        ]"
        ctaHeading="Ready to book your group charter?"
        ctaBody="Get your flat-rate charter quote in minutes. We serve all of Will County and Chicagoland and are available 24 hours a day, 365 days a year."
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-booking-timeline
        id="charter-timeline"
        heading="Charter Bus"
        headingBold="Booking Lead Times"
        intro="Charter bus availability fills quickly for popular dates, particularly on weekends from May through December. Here is the booking window that works best for each type of group charter, including the periods when vehicles fill fastest."
        :items="[
            [
                'occasion' => 'Wedding Party Bus Shuttle',
                'timing'   => '6 to 12 months ahead',
                'detail'   => 'Saturday charter vehicles in May through October are the most requested in our entire fleet. Weddings at popular Will County venues frequently compete for the same dates. Booking six to twelve months out is strongly recommended to secure your date and vehicle.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Quinceañera Charter Bus',
                'timing'   => '4 to 6 months ahead',
                'detail'   => 'Quinceañera celebrations typically run four to six hours and require careful multi-stop coordination. Booking four to six months ahead ensures we have time to plan the full itinerary and secure a vehicle that fits the court of honor comfortably.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Holiday Party Charter',
                'timing'   => '2 to 3 months ahead',
                'detail'   => 'Company holiday parties concentrate in November and December, and charter vehicles in Will County book out fast. If your party is scheduled between Thanksgiving and New Year\'s, booking by October is the safest approach.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Corporate Shuttle Bus',
                'timing'   => '2 to 4 weeks ahead',
                'detail'   => 'Most corporate charters and conference shuttles can be arranged with two to four weeks of lead time on weekdays. For large conventions or multi-vehicle corporate events, book earlier to coordinate multiple vehicles and a single dispatch contact.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Concert and Event Charter',
                'timing'   => '2 to 4 weeks ahead',
                'detail'   => 'Concert and event charters to Chicago venues are popular on weekends and sell-out nights. Two to four weeks gives us time to secure the vehicle, plan the drop-off and pickup protocols, and confirm the return timing based on the show schedule.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Airport Group Charter (5+)',
                'timing'   => '1 week minimum',
                'detail'   => 'Group airport charters to O\'Hare or Midway for five or more travelers need at least one week of advance booking to secure the right vehicle and luggage capacity. Airport runs are more flexible than event charters, but early booking always guarantees better vehicle selection.',
                'urgency'  => 'low',
            ],
        ]"
        legend="Champagne border = book early. Blue = moderate lead time. Slate = flexible."
    />

    <x-sections.three-steps
        :inverted="true"
        :steps="[
            [
                'number' => 'Step 1',
                'title'  => 'Tell Us About Your Group',
                'body'   => 'Complete our quick online form with your group size, pickup location, destination, number of stops, and your preferred date. Or call our 24/7 dispatch at (815) 585-6922. We confirm availability and provide a flat-rate quote for the whole group.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'We Plan Every Detail in Advance',
                'body'   => 'We right-size the vehicle to your headcount, build the stop-by-stop route, confirm venue protocols, and lock in every timing detail before your charter date. You receive a written itinerary so the whole group knows what to expect.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Your Driver Handles Everything Else',
                'body'   => 'Your professional, background-checked driver is staged and ready before the first pickup. The route is already planned. The vehicle is detailed and inspected. Every stop lands on schedule, and the group arrives together, every time.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Ready to book your"
        headingBold="group charter bus?"
        headingTail=""
        image="/images/heroes/hero-new-bus-rental-fiq.jpg"
        imageAlt="Stop &amp; Go charter bus for group transportation across Will County and Chicagoland"
        imageAspect="16/9"
        imageObjectPosition="center center"
        rightVariant="description"
        descHeading="What Every Charter Bus Includes"
        descSubheading="The same professional standard on every group booking"
        descBody="Whether you are moving a wedding party across Frankfort or shuttling a corporate team to a downtown Chicago conference, here is what comes with every Stop & Go charter:"
        :descBullets="[
            'Professional, background-checked driver on every charter, arriving before the first pickup',
            'Vehicle right-sized to your group: mini bus, full-size charter bus, or motorcoach',
            'Multi-stop itinerary built and confirmed in writing before your charter date',
            'Flat-rate, all-inclusive pricing: tolls, fuel, and the driver all covered at the quoted rate',
            'No surge pricing at the end of an event — your return pickup is locked at the original rate',
            'Vehicle detailed and mechanically inspected before every charter departure',
            '24/7/365 dispatch: early morning departures, late-night returns, and holiday charters all covered',
            'Service across all of Will County and Chicagoland, including airport group charters to O\'Hare and Midway',
        ]"
        descClosing="Call (815) 585-6922 or get a free quote online. We serve all of Will County and Chicagoland, any hour of the day."
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
