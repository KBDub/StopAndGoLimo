@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "LimousineService"],
    "@id": "https://newlenoxlimoservice.com",
    "name": "Stop & Go Airport Shuttle Service, Inc.",
    "alternateName": "Stop & Go Limo",
    "url": "https://newlenoxlimoservice.com",
@endverbatim
    "telephone": "{!! $clientConfig->phone_raw !!}",
@verbatim
    "priceRange": "$$",
    "image": "https://newlenoxlimoservice.com/images/heroes/best-limo-services-hero.png",
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
        { "@type": "City", "name": "Aurora",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Joliet",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Mokena",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Oswego",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Chicago",     "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Minooka",     "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Lockport",    "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Frankfort",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "New Lenox",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Oak Brook",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Shorewood",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Crest Hill",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Homer Glen",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Naperville",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Plainfield",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Romeoville",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Bolingbrook", "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Orland Park", "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Tinley Park", "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Manhattan",   "addressRegion": "IL", "addressCountry": "US" }
    ]
}
</script>
@endverbatim
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "https://newlenoxlimoservice.com/core-services/limousine-service#service",
    "name": "Luxury Limousine Service",
    "serviceType": "Limousine Service",
    "description": "Luxury limousine service for weddings, quinceañeras, proms, milestone celebrations, concerts, bachelorette parties, and corporate events across New Lenox, Joliet, Naperville, and all of Will County and Chicagoland. Stretch limousines, background-checked chauffeurs, flat-rate all-inclusive pricing, 24/7/365 dispatch.",
    "provider": {
        "@type": "LocalBusiness",
        "@id": "https://newlenoxlimoservice.com"
    },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Limousine Services",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Stretch Limousine Rental" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Limousine Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Quinceañera Limousine Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Prom Limousine Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bachelorette Party Limousine" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Concert Limousine Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Milestone Birthday Limousine" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Group Event Limousine" } }
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
    "name": "Luxury Limousine Services — Stop & Go Airport Shuttle Service, Inc.",
    "description": "Full list of luxury limousine services offered by Stop & Go Airport Shuttle Service, Inc. from New Lenox, Illinois.",
    "itemListElement": [
        {
            "@type": "ListItem", "position": 1,
            "item": {
                "@type": "Product",
                "name": "Stretch Limousine Rental",
                "description": "Stretch limousine rentals for 8 to 16 passengers across Will County and Chicagoland. Plush leather seating, ambient LED lighting, premium audio, privacy partition, and a background-checked chauffeur. Flat-rate, all-inclusive pricing.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 2,
            "item": {
                "@type": "Product",
                "name": "Wedding Limousine Service",
                "description": "Wedding limousine service for the bridal party, newlywed getaway, and guest shuttles across Will County. Formally attired chauffeur, red carpet arrival, multi-stop coordination. Book 6 to 12 months ahead.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 3,
            "item": {
                "@type": "Product",
                "name": "Quinceañera Limousine Service",
                "description": "Quinceañera limousine service across New Lenox, Joliet, and Will County. Carries the quinceañera and her entire court from the home gathering through the church and reception. Multi-stop itinerary coordination.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 4,
            "item": {
                "@type": "Product",
                "name": "Prom Limousine Service",
                "description": "Prom and homecoming limousine service for Lincoln-Way and Joliet Township students. Background-checked chauffeur, group travel, confirmed pickup and drop-off details for parents. Book 2 to 3 months ahead.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 5,
            "item": {
                "@type": "Product",
                "name": "Bachelorette and Night-Out Limousine",
                "description": "Bachelorette party and group night-out limousine service across Chicagoland. Multi-stop bar and venue routing, ambient lighting, premium audio, built-in coolers. Flat-rate pricing with no surge at the end of the night.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 6,
            "item": {
                "@type": "Product",
                "name": "Concert Limousine Service",
                "description": "Concert limousine service to the United Center, Soldier Field, Allstate Arena, Wrigley Field, and Northerly Island. Curbside drop-off, no parking, guaranteed return pickup at a price set in advance.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
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
        { "@@type": "ListItem", "position": 1, "name": "Home",               "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services",      "item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "Limousine Service",  "item": "{{ request()->url() }}" }
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
            "name": "How many passengers does a stretch limousine hold?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our stretch limousines typically seat 8 to 16 passengers comfortably. Group size, luggage, and the nature of the event all factor into vehicle selection. Contact us with your headcount and itinerary and we will recommend the right vehicle and confirm availability for your date."
            }
        },
        {
            "@type": "Question",
            "name": "How far in advance should I book a limousine?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Weddings and quinceañeras should book 6 to 12 months ahead, as Saturday vehicles in peak season fill quickly. Prom season in the Lincoln-Way area books 2 to 3 months out. Bachelorette parties, concerts, and milestone events typically need 2 to 4 weeks. When in doubt, earlier is always better."
            }
        },
        {
            "@type": "Question",
            "name": "Is the limousine rental price all-inclusive?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. limousine pricing is flat-rate and all-inclusive. The quote you receive covers the vehicle, the chauffeur, fuel, tolls, and the duration of your rental. There is no surge pricing and no hidden fees added on the day of your event."
            }
        },
        {
            "@type": "Question",
            "name": "Can we make multiple stops with a limousine?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. Multi-stop itineraries are built into most limousine bookings. Whether you are moving a wedding party between a ceremony, photo locations, and a reception, or taking a group on a multi-venue night out, we map every stop in advance and confirm the timing so nothing is improvised on the day."
            }
        },
        {
            "@type": "Question",
            "name": "What areas do you serve for limousine service?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We serve all of Will County and Chicagoland, including New Lenox, Joliet, Frankfort, Mokena, Naperville, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, and the city of Chicago. We have a second location in Naperville for DuPage County clients."
            }
        },
        {
            "@type": "Question",
            "name": "Are beverages allowed in the limousine?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Guests 21 and over are welcome to bring their own beverages for adult celebrations. Most of our limousines include built-in coolers and ice. Non-alcoholic beverages are welcome for all events. Let us know at booking if you have specific requests and we will confirm what is available for your vehicle."
            }
        }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Luxury Limousine Service | Will County &amp; Chicagoland | Stop &amp; Go Airport Shuttle Service, Inc."
    metaDescription="Luxury stretch limousine service for weddings, quinceañeras, proms, concerts, and milestone celebrations across New Lenox, Joliet, Naperville, and all of Will County. Flat-rate pricing."
    currentPage="our-services"
    ogImage="/images/heroes/best-limo-services-hero.png"
    ogImageAlt="Stop & Go Airport Shuttle Service, Inc. luxury stretch limousine service for celebrations across Will County and Chicagoland"
>

    <x-sections.category-hero
        heading="Luxury Limousine"
        headingBold="Service"
        :headingTwoLines="false"
        subtitle="The whole group. A stretch limousine. One celebration."
        description="Stop & Go Airport Shuttle Service, Inc. has been delivering luxury limousine service across New Lenox, Joliet, Frankfort, Mokena, and all of Will County since 2015. We are headquartered at 400 E Lincoln Hwy in New Lenox, with a second location in Naperville, and our stretch limousines serve every occasion that deserves more than an ordinary ride. We cover weddings, quinceañeras, proms and homecoming dances, sweet sixteen and milestone birthday celebrations, bachelorette and bachelor parties, concert nights at Chicago's major venues, anniversary dinners, and group nights out across Chicagoland. Every limousine booking comes with a background-checked, professionally attired chauffeur, a meticulously maintained and pre-inspected vehicle, and a flat-rate, all-inclusive price locked at booking with no surge pricing. Our 24/7/365 dispatch coordinates multi-stop itineraries, early-evening pickups, and late-night returns any day of the year. Whether you are moving a bridal party of fourteen between venues in Frankfort or celebrating a landmark birthday with ten friends downtown, we right-size the vehicle and tailor the evening to the occasion."
        buttonText="Get a Limo Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/best-limo-services-hero.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="The Celebration Starts"
        headingBold="the Moment the Door Opens"
        subtitle=""
        body="A stretch limousine does something an ordinary car cannot: it makes the ride part of the event. The moment your group steps inside, the atmosphere shifts. Wrap-around plush leather seating keeps everyone together and facing each other. Color-shifting ambient LED lighting sets the tone before the first stop. Premium audio fills the cabin. Built-in coolers keep drinks cold between venues. And a background-checked, professionally attired chauffeur handles every mile so no one in the group has to think about parking, timing, or getting home. For weddings and quinceañeras, that means the bridal party or the court of honor arrives relaxed, on schedule, and photo-ready. For concerts and nights out, it means the energy is already built by the time the group walks through the door. For proms and school dances, it means parents know exactly who is behind the wheel and where the group is headed. Stop & Go Airport Shuttle Service, Inc. has been building those moments across Will County since 2015, and the limousine experience we deliver is the same whether it is a weeknight anniversary dinner or a peak-season Saturday wedding."
        buttonText="Get a Limo Quote"
        buttonHref="/get-a-quote"
        image="/images/sections/limousine-services-tis.png"
        imageAlt="Interior of a Stop &amp; Go Airport Shuttle Service, Inc. luxury stretch limousine with ambient lighting and plush seating"
        :inverted="false"
    />

    <x-sections.info-strip
        headingBold="Flat-Rate Pricing."
        heading="Locked at Booking. No Surprises."
        body="Limousine pricing that changes on the day of your event adds stress to a day that already has enough of it. Stop & Go Airport Shuttle Service, Inc. flat-rate pricing works differently: the quote you receive before your event is the figure on your receipt after it. Fuel, tolls, the chauffeur, and the full duration of your booking are all covered in that single number. There is no meter running while you are inside the venue, no surge pricing when the concert ends and every rideshare app doubles its rates, and no extra charges added because your event ran long. The rate locks at booking and stays locked, so your event budget stays intact."
    />

    <x-sections.limo-services-grid
        id="limousine-services"
        heading="Limousine Services"
        headingBold="for Every Celebration"
        subheading="Every Occasion We Serve in a Stretch Limousine"
        intro="Stop & Go Airport Shuttle Service, Inc. has been delivering luxury limousine service across Will County and Chicagoland since 2015. Here is a look at the celebrations and occasions our clients book most often, and what each limousine rental typically includes."
        :cards="[
            [
                'service' => 'Stretch Limousine Rental',
                'copy'    => 'Our stretch limousines seat 8 to 16 passengers in wrap-around plush leather comfort, with color-shifting ambient LED lighting, premium Bluetooth audio, built-in coolers, and a privacy partition. Every vehicle is meticulously maintained and detailed before your rental date. Your background-checked, formally attired chauffeur manages the full itinerary while the group enjoys the ride, from the first pickup to the last drop-off.',
            ],
            [
                'service' => 'Wedding Limousine Service',
                'copy'    => 'A wedding day runs on timing, and Stop & Go Airport Shuttle Service, Inc. wedding limousine service is built around that reality. Your chauffeur arrives in formal attire, rolls out a red carpet, and coordinates every leg from getting-ready photos through the reception exit. We have worked at venues across Will County, including the Jacob Henry Mansion in Joliet, CD &amp; ME in Frankfort, and Prestwick Country Club, and we keep backup options in reserve so your day stays on track no matter what.',
            ],
            [
                'service' => 'Quinceañera Limousine Service',
                'copy'    => 'A quinceañera carries the quinceañera and her full court of honor through a multi-stop day: home gathering, church arrival, photo stops, and the grand reception entrance. Stop & Go Airport Shuttle Service, Inc. quinceañera limousines are sized for the whole court, with ambient lighting, premium audio, and a stocked soft bar with sparkling cider. We have coordinated quinceañera celebrations across New Lenox, Joliet, and Will County since 2015, and we know how to keep a full itinerary on schedule.',
            ],
            [
                'service' => 'Prom and School Dance Limousine',
                'copy'    => 'Stop & Go Airport Shuttle Service, Inc. prom limousines serve the Lincoln-Way and Joliet Township communities of New Lenox, Frankfort, Mokena, and Will County. Every chauffeur is background-checked and professionally trained, every vehicle is licensed and insured, and pickup and drop-off details are confirmed in advance so parents know exactly who is behind the wheel and where the group is headed. The whole group travels together in plush leather comfort with ambient lighting and premium audio.',
            ],
            [
                'service' => 'Bachelorette and Night-Out Limousine',
                'copy'    => 'Stop & Go Airport Shuttle Service, Inc. bachelorette and group night-out limousines keep the entire group together for bar crawls, dinner-and-drinks evenings, and multi-stop nights across Chicagoland. The ride starts the moment the doors close: color-shifting ambient lighting, premium Bluetooth audio, and built-in coolers make the limousine part of the celebration. Your rate is set in advance with no surge pricing at the end of the night, and every chauffeur is background-checked and professionally trained.',
            ],
            [
                'service' => 'Concert Limousine Service',
                'copy'    => 'Stop & Go Airport Shuttle Service, Inc. concert limousines run from New Lenox, Joliet, and across Will County to Chicago\'s major venues: the United Center, Soldier Field, Allstate Arena, Wrigley Field, and Huntington Bank Pavilion at Northerly Island. Your chauffeur knows the venue drop-off lanes so you arrive together without circling for a spot. Your return pickup is confirmed at a rate locked before the show, with no surge pricing when the crowd empties out.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-process-steps
        id="limousine-process"
        heading="Six Steps That Happen Before"
        headingBold="Your Limousine Arrives"
        intro="A great limousine experience is built on preparation. Here is every step Stop & Go Airport Shuttle Service, Inc. takes from the moment you inquire to the moment your chauffeur pulls up to the door."
        :steps="[
            [
                'num'   => '01',
                'title' => 'You share your occasion and group size',
                'body'  => 'A quick call or online form is all it takes. Tell us the occasion, your pickup date and time, the number of passengers, and a rough itinerary. We confirm availability, recommend the right vehicle, and provide a flat-rate quote for the complete rental. No commitment required at this stage.',
            ],
            [
                'num'   => '02',
                'title' => 'Your itinerary is built stop by stop',
                'body'  => 'Once you confirm, we map every pickup address, intermediate stop, and drop-off location in sequence. For weddings and quinceañeras, we coordinate with your planner and venue contacts. Every stop is timed and confirmed in writing before the rental date so nothing depends on a phone call on the day.',
            ],
            [
                'num'   => '03',
                'title' => 'The vehicle is matched and reserved for your date',
                'body'  => 'Your limousine is matched to your headcount and held for your date. Putting the right-sized vehicle with your group matters: enough room for everyone to be comfortable, enough space for gowns and garment bags on wedding and prom nights, and the right amenities for your specific occasion.',
            ],
            [
                'num'   => '04',
                'title' => 'The vehicle is detailed and pre-inspected',
                'body'  => 'Before your rental date, your assigned limousine goes through a full mechanical pre-trip inspection and a complete interior detail. Every surface is clean, every amenity is stocked, and every light and sound system is confirmed working. No one should step into a limousine that looks like it just came from another event.',
            ],
            [
                'num'   => '05',
                'title' => 'Your chauffeur is briefed and departs early',
                'body'  => 'Your chauffeur receives the full itinerary, reviews every stop and timing requirement, and is staged at the first pickup address before your scheduled time. For wedding and quinceañera mornings, that means the vehicle is in position and the chauffeur is in formal attire before the first photo.',
            ],
            [
                'num'   => '06',
                'title' => 'The group rides together, the celebration runs on schedule',
                'body'  => 'From the first pickup to the final drop-off, your chauffeur manages every mile, every stop, and every timing adjustment. The group stays together, the itinerary stays on track, and your rate stays exactly as quoted. The celebration is yours to enjoy from start to finish.',
            ],
        ]"
    />

    <x-sections.party-bus-occasions
        id="limousine-occasions"
        heading="Every Celebration That Belongs"
        headingBold="in a Limousine"
        subheading="Who Books Our Luxury Limousines Most Often"
        intro="Luxury limousine service fits more occasions than people expect. Here is a look at the events and milestones Stop & Go Airport Shuttle Service, Inc. serves most often, and what each limousine booking typically includes."
        :occasions="[
            [
                'occasion' => 'Weddings and Bridal Parties',
                'copy'     => 'Wedding limousine service from Stop & Go Airport Shuttle Service, Inc. covers the full day, from getting-ready pickups to the newlyweds\' getaway and optional guest shuttles between hotel and venue. A formally attired chauffeur, a red carpet arrival, and meticulous timing coordination make the transportation match the day it is serving. Peak spring and summer Saturday dates book 6 to 12 months in advance.',
            ],
            [
                'occasion' => 'Quinceañeras and Court of Honor',
                'copy'     => 'The quinceañera and her damas and chambelanes travel together through every stop of the day. Stop & Go Airport Shuttle Service, Inc. quinceañera limousines are sized for the full court and designed around a multi-stop itinerary that covers the home, the church, the photo locations, and the reception. Parents appreciate the confirmed logistics and the peace of mind that comes with a licensed, insured, background-checked chauffeur.',
            ],
            [
                'occasion' => 'Proms, Homecoming, and School Dances',
                'copy'     => 'Prom night in a stretch limousine keeps the whole group together, removes the designated driver problem entirely, and gives parents a professional, accountable operator at the wheel. Stop & Go Airport Shuttle Service, Inc. serves the Lincoln-Way and Joliet Township communities with a prom limousine experience that is as fun for the students as it is reassuring for the families. Prom season books 2 to 3 months ahead.',
            ],
            [
                'occasion' => 'Sweet 16 and Milestone Birthdays',
                'copy'     => 'A milestone birthday deserves an arrival that matches the moment. Stop & Go Airport Shuttle Service, Inc. birthday limousines cover sweet sixteens, 21st birthdays, and landmark 30th, 40th, 50th, and beyond celebrations with a group-sized vehicle, ambient lighting, and a chauffeur who handles the route while the group focuses on the occasion. Every stop, from dinner to the surprise venue, is part of the plan.',
            ],
            [
                'occasion' => 'Bachelorette and Bachelor Parties',
                'copy'     => 'A bachelorette or bachelor party night built around one limousine is simpler, safer, and more fun than splitting the group across separate rideshare pickups. Stop & Go Airport Shuttle Service, Inc. bachelorette and bachelor limousines handle the multi-stop route while the group handles the celebration. The rate is set before the night starts with no surge pricing at the end, and everyone rides home in the same vehicle.',
            ],
            [
                'occasion' => 'Anniversaries and Romantic Evenings',
                'copy'     => 'An anniversary dinner or milestone date night is elevated when neither person has to think about the drive, the parking, or the timing. Stop & Go Airport Shuttle Service, Inc. anniversary limousine service provides a quiet, elegant vehicle for two with a chauffeur who manages the evening entirely. Ambient lighting, plush seating, and a professional driver make the occasion feel as special as it is.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.party-bus-advantage
        id="limousine-advantage"
        heading="Why a Stretch Limousine"
        headingBold="Over Every Other Option"
        intro="Rideshare apps split a group across multiple vehicles and reprice the moment demand spikes. Renting multiple cars means someone has to drive. A stop & go stretch limousine keeps the whole group together in one vehicle, at a rate locked before the evening begins, with a professional chauffeur managing every mile."
        leftHeading="The Limousine Advantage"
        :checklist="[
            [
                'feature' => 'The whole group rides together',
                'detail'  => 'Splitting a group of 10 across three rideshare pickups means three different arrival times, three different fares, and three chances for someone to get lost or left behind. One limousine keeps everyone synchronized, from the first pickup to the last drop-off.',
            ],
            [
                'feature' => 'Flat rate locked at booking, no surge pricing',
                'detail'  => 'Rideshare apps reprice when a concert ends or a venue closes and every car in the area gets requested at once. Stop & Go Airport Shuttle Service, Inc. locks your rate when you confirm the booking. The quote you receive is the receipt you sign after the event.',
            ],
            [
                'feature' => 'The ride becomes part of the celebration',
                'detail'  => 'A stretch limousine with ambient lighting, premium audio, and built-in coolers is not just transportation — it is the event between venues. For birthdays, bachelorette parties, and concert nights, the limousine ride is often a highlight of the evening on its own.',
            ],
            [
                'feature' => 'Background-checked chauffeur on every booking',
                'detail'  => 'Every Stop & Go Airport Shuttle Service, Inc. chauffeur is background-checked, professionally trained, and formally attired. For proms, school dances, and celebrations involving minors, that accountability is not optional. Parents know who is driving and where the group is headed before the first pickup.',
            ],
        ]"
        rightHeading="Will County's Limousine Company Since 2015"
        :rightParagraphs="[
            'Stop & Go Airport Shuttle Service, Inc. has been delivering luxury limousine service across Will County since 2015. Our chauffeurs know the venue access roads at the Jacob Henry Mansion in Joliet, the church parking sequences for large quinceañera celebrations in New Lenox and Frankfort, the concert drop-off protocols at the United Center and Soldier Field, and the quickest routes to every banquet hall and country club in the region. That local knowledge keeps multi-stop itineraries on schedule when a single wrong turn would cost 20 minutes.',
            'We serve New Lenox, Joliet, Frankfort, Mokena, Naperville, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, Aurora, and all of Chicagoland from our Lincoln Highway headquarters, with a second location in Naperville for DuPage County celebrations. Whatever the occasion and wherever it takes you, the limousine standard is the same.',
            'For weddings and large-scale events with multiple vehicles and complex logistics, Stop & Go Airport Shuttle Service, Inc. provides a single dispatch contact who coordinates the full fleet. Your planner works with one person, every vehicle is accounted for, and every arrival is timed to the minute. It is the same professional organization behind every booking, whether it is one limousine for an anniversary dinner or four vehicles for a 200-person wedding.',
        ]"
        ctaHeading="Ready to book your limousine?"
        ctaBody="Get your flat-rate quote in minutes. We serve all of Will County and Chicagoland and are available 24 hours a day, 365 days a year."
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-booking-timeline
        id="limousine-timeline"
        heading="Limousine Service"
        headingBold="Booking Lead Times"
        intro="Peak-season Saturday limousines fill faster than any other booking type in our fleet. Here is the booking window that gives you the best vehicle selection and the most flexibility for each type of limousine rental."
        :items="[
            [
                'occasion' => 'Wedding Limousine',
                'timing'   => '6 to 12 months ahead',
                'detail'   => 'Saturday limousine availability from May through October fills faster than any other date in our calendar. Weddings at popular Will County and Chicagoland venues often compete for the same vehicles. Six to twelve months ahead is the standard lead time for wedding limousines.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Quinceañera Limousine',
                'timing'   => '4 to 6 months ahead',
                'detail'   => 'Quinceañeras require multi-stop coordination in addition to vehicle availability. Four to six months ahead gives us time to plan the full itinerary, confirm venue protocols, and secure the right vehicle for the court of honor.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Prom and Homecoming Limousine',
                'timing'   => '2 to 3 months ahead',
                'detail'   => 'Prom season in the Lincoln-Way area runs from late March through May. Homecoming falls in September and October. Both windows fill quickly. Booking 2 to 3 months ahead secures your preferred vehicle and date before the rush.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Holiday Party and New Year\'s Eve',
                'timing'   => '2 to 3 months ahead',
                'detail'   => 'New Year\'s Eve and holiday party season are among the highest-demand windows of the year. Limousines for the last two weeks of December book out well in advance. Early October is the recommended booking window for these dates.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Bachelorette and Bachelor Party',
                'timing'   => '3 to 6 weeks ahead',
                'detail'   => 'Weekend bachelorette and bachelor party limousines typically need 3 to 6 weeks of lead time. Peak spring and fall weekends fill faster. If your date is a holiday weekend, treat it like a wedding and book further ahead.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Concert, Birthday, and Night Out',
                'timing'   => '1 to 3 weeks ahead',
                'detail'   => 'Concert nights and milestone birthday limousines are often more flexible, with 1 to 3 weeks usually sufficient on weekdays and most weekends. Sold-out event nights and holiday weekends narrow that window considerably, so book sooner for those dates.',
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
                'title'  => 'Share Your Occasion and Group Size',
                'body'   => 'Call our 24/7 dispatch or complete the quick online form. Tell us the occasion, date, number of passengers, and a rough itinerary. We confirm availability, recommend the right limousine, and provide a flat-rate quote within minutes.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'We Build the Itinerary and Hold the Date',
                'body'   => 'We map every stop, confirm venue timing, and coordinate with your planner if needed. Your limousine is reserved and your itinerary is confirmed in writing. Nothing about your event day depends on a phone call or last-minute decision.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Your Chauffeur Arrives. The Celebration Begins.',
                'body'   => 'Your formally attired, background-checked chauffeur is staged and ready before the first pickup. The vehicle is detailed, stocked, and inspected. From pickup to final drop-off, the rate stays exactly as quoted and the celebration stays exactly on schedule.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Ready to book your"
        headingBold="luxury limousine?"
        headingTail=""
        image="/images/sections/limousine-comfort.jpg"
        imageAlt="Luxury limousine interior with plush leather seating and ambient lighting for a Stop &amp; Go Airport Shuttle Service, Inc. celebration"
        imageAspect="16/9"
        imageObjectPosition="center center"
        rightVariant="description"
        descHeading="What Every Limousine Rental Includes"
        descSubheading="The same standard on every booking, every celebration"
        descBody="Whether you are booking a wedding limousine for 14 or a concert night for 8, here is what every Stop &amp; Go Airport Shuttle Service, Inc. limousine rental includes:"
        :descBullets="[
            'Background-checked, formally attired chauffeur on every rental, arriving before the first pickup',
            'Stretch limousine detailed and mechanically inspected before your rental date',
            'Wrap-around plush leather seating, color-shifting ambient LED lighting, and premium Bluetooth audio',
            'Flat-rate, all-inclusive pricing: tolls, fuel, and chauffeur all covered at the quoted rate',
            'No surge pricing, ever: your return pickup is locked at the same rate as your departure',
            'Multi-stop itinerary confirmed in writing before your rental date, no improvisation on the day',
            '24/7/365 dispatch: early evening pickups, late-night returns, and holiday rentals all covered',
            'Service across all of Will County and Chicagoland, including DuPage County from our Naperville location',
        ]"
        descClosing="Call or get a free quote online. We serve all of Will County and Chicagoland, any hour of the day."
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" :schema="false" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
