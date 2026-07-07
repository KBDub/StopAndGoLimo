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
    "image": "https://newlenoxlimoservice.com/images/heroes/hero-services.jpg",
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
    "@id": "https://newlenoxlimoservice.com/core-services/transportation-service#service",
    "name": "Luxury Transportation Service",
    "serviceType": "Transportation Service",
    "description": "Professional luxury transportation service for every occasion across New Lenox, Joliet, Naperville, and all of Will County and Chicagoland. Airport transfers, corporate transportation, special events, group and private charters, limousine service, and city tours. Background-checked chauffeurs, flat-rate pricing, 24/7/365 dispatch since 2015.",
    "provider": {
        "@type": "LocalBusiness",
        "@id": "https://newlenoxlimoservice.com/#business"
    },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Transportation Services",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Airport Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Corporate Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Special Event Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Private Charter Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Luxury Limousine Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "City Tour Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "School Dance Transportation" } }
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
    "name": "Transportation Services — Stop & Go",
    "description": "Full list of professional transportation services offered by Stop & Go Airport Shuttle Service Inc. from New Lenox, Illinois.",
    "itemListElement": [
        {
            "@type": "ListItem", "position": 1,
            "item": {
                "@type": "Product",
                "name": "Airport Transportation",
                "description": "Flat-rate airport transportation to O'Hare, Midway, and Chicago Executive Airport from New Lenox, Joliet, and all of Will County. Real-time flight tracking, meet-and-greet, luggage assistance, and 24/7/365 dispatch.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 75, "highPrice": 2000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 2,
            "item": {
                "@type": "Product",
                "name": "Corporate Transportation",
                "description": "Professional corporate transportation for executives, clients, and business events across the I-80 and I-88 corridors. Centralized billing, digital receipts, quiet cabin, and privacy partition.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 75, "highPrice": 2000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 3,
            "item": {
                "@type": "Product",
                "name": "Special Event Transportation",
                "description": "Luxury transportation for galas, concerts, celebrations, and events across Chicagoland. Group-sized vehicles, no surge pricing on the return, and guaranteed pickup at a rate set in advance.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 75, "highPrice": 2000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 4,
            "item": {
                "@type": "Product",
                "name": "Private Charter Transportation",
                "description": "Private charter transportation for groups of any size across Will County and Chicagoland. Dedicated vehicle and chauffeur, multi-stop itinerary coordination, and flat-rate pricing for the whole group.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 75, "highPrice": 2000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 5,
            "item": {
                "@type": "Product",
                "name": "Luxury Limousine Transportation",
                "description": "Stretch limousine transportation for weddings, quinceañeras, proms, and celebrations. Ambient lighting, plush leather seating, premium audio, and background-checked chauffeur on every rental.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 75, "highPrice": 2000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 6,
            "item": {
                "@type": "Product",
                "name": "City Tour and Leisure Transportation",
                "description": "Private city tour and leisure transportation for individuals and groups departing from New Lenox and across the Southwest Suburbs. Customized Chicago itineraries, hourly hire, and no parking.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 75, "highPrice": 2000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
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
        { "@@type": "ListItem", "position": 1, "name": "Home",                    "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services",           "item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "Transportation Service",  "item": "{{ request()->url() }}" }
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
            "name": "What types of transportation does Stop & Go provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stop & Go provides a full range of professional transportation services across Will County and Chicagoland: airport transfers to O'Hare, Midway, and Chicago Executive Airport; corporate and executive transportation; special event and gala transportation; private charter service for groups; luxury stretch limousine rentals for weddings, quinceañeras, and celebrations; city tours; school dance and prom transportation; and personal occasion service for anniversaries, birthdays, and nights out."
            }
        },
        {
            "@type": "Question",
            "name": "Do you serve areas outside New Lenox?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go serves all of Will County and Chicagoland, including Joliet, Frankfort, Mokena, Naperville, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, Aurora, and the city of Chicago. We have a second location in Naperville for DuPage County clients and the I-88 corridor."
            }
        },
        {
            "@type": "Question",
            "name": "Is Stop & Go transportation flat-rate or metered?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "All Stop & Go transportation is flat-rate. The quote you receive before your booking is the figure on your receipt after the trip. Taxes and tolls are included. There is no meter running during stops, no surge pricing based on demand or time of day, and no adjustments on the day of service."
            }
        },
        {
            "@type": "Question",
            "name": "Are your drivers background-checked?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Every Stop & Go chauffeur is background-checked and professionally trained before their first booking. We are a fully licensed and insured operator and can provide credentials on request. All vehicles are meticulously maintained and regularly inspected."
            }
        },
        {
            "@type": "Question",
            "name": "Is Stop & Go available for early morning and late night transportation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go operates 24 hours a day, 7 days a week, 365 days a year. Our dispatch line is staffed around the clock for pre-dawn airport departures, late-night event pickups, and overnight engagements. The rate does not change based on the time of day."
            }
        },
        {
            "@type": "Question",
            "name": "How do I book transportation with Stop & Go?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can book by completing our quick online quote form or by calling our 24/7 dispatch line at (815) 585-6922. We confirm availability and provide a flat-rate quote within minutes. For large events and multi-vehicle bookings, we recommend calling directly so we can plan the full itinerary with you."
            }
        }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Luxury Transportation Service | New Lenox &amp; Will County | Stop &amp; Go"
    metaDescription="Professional luxury transportation service for every occasion across New Lenox, Joliet, Naperville, and all of Will County. Airport transfers, corporate, events, group charters, and limousines. Flat-rate pricing. Call (815) 585-6922."
    currentPage="our-services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Stop and Go luxury transportation service for every occasion across Will County and Chicagoland"
>

    <x-sections.category-hero
        heading="Luxury Transportation"
        headingBold="Service"
        :headingTwoLines="false"
        subtitle="Every occasion. Every group size. One trusted team."
        description="Stop & Go Airport Shuttle Service, Inc. has been providing professional luxury transportation across New Lenox, Joliet, Naperville, Frankfort, Mokena, and all of Will County since 2015. We are headquartered at 400 E Lincoln Hwy in New Lenox, with a second location in Naperville, and our fleet serves the full spectrum of transportation needs: flat-rate airport transfers to O'Hare, Midway, and Chicago Executive Airport with real-time flight tracking; corporate and executive transportation along the I-80 and I-88 corridors; special event and gala transportation across Chicagoland; private group charters for corporate outings, celebrations, and reunions; stretch limousine rentals for weddings, quinceañeras, proms, and milestone events; school dance and prom transportation; city tours for visiting guests; and personal occasion service for anniversaries, birthdays, and nights out. Every booking comes with a background-checked, professionally trained chauffeur, a meticulously maintained vehicle, and a flat-rate, all-inclusive price locked at the time of booking. Our 24/7/365 dispatch is staffed around the clock every day of the year."
        buttonText="Get a Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="One Company for Every"
        headingBold="Transportation Need"
        subtitle=""
        body="Most transportation companies specialize in one or two service types and refer everything else elsewhere. Stop & Go was built to cover the full range of occasions that Will County and Chicagoland families, businesses, and event planners actually face, so the same trusted team handles your weekly executive airport run, your daughter's quinceañera, and the corporate retreat shuttle — all at the same flat-rate, all-inclusive standard with the same background-checked chauffeurs and the same meticulously maintained fleet. That consistency matters. When a corporate travel manager books for an executive on Monday and for a client gala on Friday, the experience is identical. When a family books a prom limousine in April and a reunion charter bus in July, the chauffeur standard and the dispatch reliability are exactly the same. Stop & Go has been building that consistency across Will County since 2015, and it is why clients across the Southwest Suburbs call us for every occasion rather than searching for a new provider each time."
        buttonText="Get a Quote"
        buttonHref="/get-a-quote"
        image="/images/sections/limousine-arrival.jpg"
        imageAlt="Stop &amp; Go luxury transportation vehicle arriving for a professional client engagement in Will County"
        :inverted="false"
    />

    <x-sections.info-strip
        headingBold="Flat-Rate Pricing."
        heading="Every Service. Every Occasion."
        body="The rate we quote before your booking is the rate on your receipt after it, regardless of the service type, the time of day, or the hour your event ends. Airport transfers, corporate roadshows, concert nights, group charters, and limousine rentals all operate on the same flat-rate, all-inclusive principle: taxes and tolls included, surge pricing never applied, and the chauffeur covered in the quote. Whether you are booking a 20-minute point-to-point transfer or a full-day multi-stop corporate engagement, the figure you agree to at booking is the only figure that matters."
    />

    <x-sections.limo-services-grid
        id="transportation-services"
        heading="Transportation Services"
        headingBold="for Every Occasion"
        subheading="The Full Range of Transportation We Provide"
        intro="Stop & Go has been delivering professional luxury transportation across Will County and Chicagoland since 2015. Here is a look at every category of transportation service our clients book most often and what each engagement typically includes."
        :cards="[
            [
                'service' => 'Airport Transportation',
                'copy'    => 'Stop & Go airport transportation covers O\'Hare International, Midway International, Chicago Executive Airport, Gary/Chicago International, DuPage Airport, and all regional FBO terminals. Every transfer includes real-time flight tracking that adjusts your pickup automatically, curbside or inside-terminal meet-and-greet with luggage assistance at both ends, and a flat rate covering all taxes and tolls. Our 24/7/365 dispatch handles pre-dawn departures and midnight arrivals any day of the year.',
            ],
            [
                'service' => 'Corporate Transportation',
                'copy'    => 'Stop & Go corporate transportation serves executives, client pickups, roadshows, and company events along the I-80 and I-88 corridors and across the Chicago metro. A quiet, climate-controlled cabin with plush leather seating and a privacy partition supports the workday between stops. Centralized billing and digital receipts simplify the administrative side for travel managers, and our 24/7/365 dispatch keeps multi-stop schedules airtight from first pickup to final drop-off.',
            ],
            [
                'service' => 'Special Event Transportation',
                'copy'    => 'Stop & Go special event transportation covers galas, award ceremonies, concerts, sporting events, and every occasion where a group needs to arrive together and leave without hassle. We serve Chicago\'s major venues, including the United Center, Soldier Field, Allstate Arena, and Wrigley Field, with dedicated drop-off coordination and a return pickup confirmed at a rate set before the event, no surge pricing when the venue empties.',
            ],
            [
                'service' => 'Private Charter Transportation',
                'copy'    => 'Stop & Go private charter transportation keeps groups of every size together in one vehicle with a dedicated chauffeur handling the route, the stops, and the timing. Corporate outings, family reunions, holiday parties, winery tours, and group airport transfers are all common charter bookings across Will County. We right-size the vehicle to the group, confirm every stop in writing, and back the engagement with flat-rate, all-inclusive pricing.',
            ],
            [
                'service' => 'Luxury Limousine Transportation',
                'copy'    => 'Stop & Go stretch limousines serve weddings, quinceañeras, proms, sweet sixteens, bachelorette parties, concert nights, and milestone celebrations with wrap-around plush leather seating, color-shifting ambient LED lighting, premium Bluetooth audio, and built-in coolers. Every limousine rental includes a formally attired, background-checked chauffeur who manages the full multi-stop itinerary. Peak-season Saturday limousines book 6 to 12 months ahead.',
            ],
            [
                'service' => 'City Tour and Personal Occasion Transportation',
                'copy'    => 'Stop & Go city tour and personal occasion transportation provides private, chauffeured Chicago experiences for visiting guests, families, and individuals departing from the Southwest Suburbs. Your chauffeur navigates the Magnificent Mile, Navy Pier, the Riverwalk, and any combination of landmarks at your pace, handling driving and parking entirely. Hourly service keeps the itinerary flexible. Anniversary dinners, birthday evenings, and romantic nights out are all common personal occasion bookings.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-process-steps
        id="transportation-process"
        heading="Six Things That Happen"
        headingBold="Before Every Booking"
        intro="Professional transportation requires preparation. Here is what Stop & Go does on every booking, regardless of service type, from the moment you confirm to the moment your chauffeur arrives."
        :steps="[
            [
                'num'   => '01',
                'title' => 'You book and your flat rate locks',
                'body'  => 'Online form or one phone call. We collect your service type, pickup address, destination, date, time, and group size. The moment you confirm, your flat rate is locked and your booking is in the system. No meter, no surge pricing, and no rate adjustment on the day of service.',
            ],
            [
                'num'   => '02',
                'title' => 'The right vehicle is matched to your engagement',
                'body'  => 'A solo executive airport transfer, a group concert charter, and a wedding limousine all call for different vehicles. We match your booking to the right vehicle for your headcount, your occasion, and any specific needs. For airport runs, your flight number enters our real-time tracking system at this stage.',
            ],
            [
                'num'   => '03',
                'title' => 'Your itinerary is confirmed in writing',
                'body'  => 'Multi-stop bookings, event charters, and hourly engagements all receive a confirmed itinerary before the service date. Every pickup address, intermediate stop, wait time, and drop-off location is documented and sent to you. Nothing on the day of service depends on a phone call or a last-minute decision.',
            ],
            [
                'num'   => '04',
                'title' => 'Your vehicle is detailed and pre-inspected',
                'body'  => 'Before your service date, your assigned vehicle goes through a full mechanical pre-trip inspection and a complete interior detail. Climate is set. Amenities are confirmed. Your chauffeur is briefed on the itinerary, any client preferences, and any special requirements. The vehicle leaves our lot ready for every detail of your booking.',
            ],
            [
                'num'   => '05',
                'title' => 'Your chauffeur departs early',
                'body'  => 'Our standard across every service type is to have the chauffeur at the first pickup address before your scheduled time. For airport arrivals, the chauffeur is at the terminal before your flight lands. For events, the vehicle is staged and ready before the first passenger needs to board.',
            ],
            [
                'num'   => '06',
                'title' => 'The service runs exactly as planned',
                'body'  => 'Your chauffeur manages every mile and every stop. For airport runs, flight tracking adjusts the timing automatically. For multi-stop charters, the itinerary runs stop by stop. For hourly engagements, the chauffeur adapts as your plans evolve. Your rate stays exactly as quoted from booking to receipt.',
            ],
        ]"
    />

    <x-sections.party-bus-occasions
        id="transportation-occasions"
        heading="Every Client and Occasion"
        headingBold="We Serve"
        subheading="Who Books Stop & Go Transportation Most Often"
        intro="Professional luxury transportation serves a wider range of clients and occasions than most people expect. Here is a look at the clients and situations Stop & Go serves most often across Will County and Chicagoland."
        :occasions="[
            [
                'occasion' => 'Business Executives and Corporate Teams',
                'copy'     => 'Executives and corporate teams across the I-80 and I-88 corridors book Stop & Go for airport runs, client pickups, multi-stop roadshows, and company event transportation. The consistency matters: the same professional chauffeur standard, the same quiet cabin, and the same flat-rate reliability every time. Corporate accounts receive centralized billing and a single dispatch contact.',
            ],
            [
                'occasion' => 'Families Celebrating Milestones',
                'copy'     => 'Weddings, quinceañeras, proms, sweet sixteen birthdays, and landmark anniversaries all call for transportation that matches the occasion. Stop & Go serves Will County families with luxury limousines for celebrations, party buses for larger groups, and coordinated multi-stop itineraries that keep everyone together and every arrival on time.',
            ],
            [
                'occasion' => 'Groups Heading to Chicago Events',
                'copy'     => 'Concert nights, Cubs and Bears games, gala events, and downtown dinners are all better when the group rides together in one vehicle rather than splitting across multiple rideshare pickups. Stop & Go group transportation to Chicago venues locks in the rate before the event and guarantees the return pickup at the same flat rate, no surge pricing when the crowd pours out.',
            ],
            [
                'occasion' => 'Travelers Arriving and Departing by Air',
                'copy'     => 'Business travelers, vacationing families, medical travelers, and VIP guests all use Stop & Go for airport transportation from Will County to O\'Hare, Midway, and Chicago Executive Airport. Real-time flight tracking means the chauffeur adjusts automatically to delays. Meet-and-greet service at baggage claim means arriving passengers step off the plane into professional hands.',
            ],
            [
                'occasion' => 'Students Attending School Dances and Proms',
                'copy'     => 'Stop & Go school dance and prom transportation is designed for parent accountability as much as student experience. A background-checked chauffeur, confirmed pickup and drop-off details, and group travel in a single vehicle give families a professional, dependable option for prom nights and school formals across the Lincoln-Way and Joliet Township communities.',
            ],
            [
                'occasion' => 'Seniors and Clients with Appointment Travel Needs',
                'copy'     => 'Seniors and clients traveling to Silver Cross Hospital and medical facilities across Will County and Chicagoland use Stop & Go for attentive, door-through-door transportation. Your chauffeur assists at every step of the engagement, manages the timing, and returns you home at the conclusion. No parking, no navigation in unfamiliar areas, and no relying on family members for every appointment.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.party-bus-advantage
        id="transportation-advantage"
        heading="Why Stop & Go Over Every"
        headingBold="Other Transportation Option"
        intro="On-demand rideshare apps offer convenience at the cost of consistency. You cannot predict who shows up, what vehicle arrives, or what the fare will be when your event ends. Stop & Go provides all of the convenience with none of those variables, across every service type and every occasion."
        leftHeading="The Stop & Go Difference"
        :checklist="[
            [
                'feature' => 'Flat rate locked at booking, always',
                'detail'  => 'Every service type, every occasion, every time of day. The rate you receive when you confirm is the rate on your receipt. No surge pricing, no adjustment for event demand, and no meter running during stops. You plan your transportation budget once and it stays exactly that.',
            ],
            [
                'feature' => 'Background-checked chauffeur on every booking',
                'detail'  => 'Stop & Go chauffeurs are background-checked, professionally trained, and formally attired. On-demand apps cannot guarantee who arrives or what their record looks like. For corporate clients, VIP guests, families with minors, and seniors, that accountability is not a preference — it is a requirement.',
            ],
            [
                'feature' => 'Meticulously maintained fleet, every vehicle',
                'detail'  => 'Every Stop & Go vehicle is mechanically inspected and fully detailed before each service engagement. You are not riding in a personal vehicle pressed into service. The condition of the vehicle is professional and consistent, whether it is a stretch limousine, an executive sedan, or a charter bus.',
            ],
            [
                'feature' => '24/7/365 dispatch, any hour, any occasion',
                'detail'  => 'Pre-dawn airport departures, late-night event returns, holiday travel, and overnight engagements all require a dispatch operation that does not go offline. Stop & Go runs year-round so your transportation is confirmed and managed regardless of when the occasion falls.',
            ],
        ]"
        rightHeading="Ten Years Serving Will County"
        :rightParagraphs="[
            'Stop & Go has been providing professional transportation across Will County since 2015. Our chauffeurs know the I-80 and I-55 corridors to O\'Hare, the I-355 connector to Midway, the venue access roads at the Jacob Henry Mansion in Joliet and the country clubs in Frankfort, the corporate campus protocols along the I-88 Innovation Corridor, and the Chicago venue drop-off lanes at the United Center and Soldier Field. That local knowledge is not something a new provider or an app-dispatched driver brings to your booking.',
            'We serve New Lenox, Joliet, Frankfort, Mokena, Naperville, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, Aurora, and all of Chicagoland from our Lincoln Highway headquarters, with a second location in Naperville for DuPage County and I-88 corridor clients. Every service type receives the same chauffeur standard and the same flat-rate commitment regardless of where in the region the pickup originates.',
            'For businesses and event planners who need a single transportation partner across multiple service categories, Stop & Go provides a single dispatch contact for all bookings. Your travel manager, event planner, or executive assistant deals with one team, one billing contact, and one consistent standard across airport runs, corporate transportation, event charters, and limousine rentals.',
        ]"
        ctaHeading="Ready to book your transportation?"
        ctaBody="Get your flat-rate quote in minutes. We serve all of Will County and Chicagoland and are available 24 hours a day, 365 days a year."
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-booking-timeline
        id="transportation-timeline"
        heading="Transportation Service"
        headingBold="Booking Lead Times"
        intro="Lead time requirements vary significantly by service type. Some transportation engagements can be confirmed the same day. Others, particularly wedding and event transportation, require planning months ahead. Here is the booking window that works best for each type."
        :items="[
            [
                'occasion' => 'Wedding and Quinceañera Transportation',
                'timing'   => '6 to 12 months ahead',
                'detail'   => 'Saturday vehicle availability in peak wedding season fills faster than any other transportation type. Couples booking 6 to 12 months ahead have the best selection of vehicle types and the most flexibility in itinerary planning. Peak spring and fall Saturdays are the first to fill.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Holiday Party and New Year\'s Eve',
                'timing'   => '2 to 3 months ahead',
                'detail'   => 'November and December are among the highest-demand months for group and event transportation. Holiday parties, New Year\'s Eve events, and company celebrations compete for the same vehicles. Booking by October secures the date and vehicle type you need.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Prom and School Dance Transportation',
                'timing'   => '2 to 3 months ahead',
                'detail'   => 'Prom season runs March through May in the Lincoln-Way area. Homecoming falls in September and October. Both windows fill quickly as multiple schools compete for the same dates. Book 2 to 3 months ahead to secure your vehicle and date.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Corporate and Event Transportation',
                'timing'   => '1 to 4 weeks ahead',
                'detail'   => 'Most corporate transportation and special event bookings can be arranged 1 to 4 weeks in advance, with weekdays more flexible than peak-season Saturdays. Multi-vehicle corporate events and large group charters benefit from longer lead time for itinerary planning.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Group and Private Charter',
                'timing'   => '1 to 2 weeks ahead',
                'detail'   => 'Private group charters for 5 or more passengers benefit from 1 to 2 weeks of lead time to confirm the right vehicle, build the stop-by-stop route, and ensure luggage capacity. Weekday charters and smaller groups can often be arranged with shorter notice.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Airport Transfer and Personal Occasion',
                'timing'   => '24 to 48 hours ahead',
                'detail'   => 'Standard airport transfers and personal occasion transportation can typically be arranged 24 to 48 hours in advance. Same-day airport bookings are possible when you call our dispatch at (815) 585-6922. We always recommend booking the night before for pre-dawn departures.',
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
                'title'  => 'Tell Us What You Need',
                'body'   => 'Call our 24/7 dispatch at (815) 585-6922 or complete the quick online quote form. Share your service type, date, group size, pickup location, and destination. We confirm availability and provide a flat-rate quote within minutes for any transportation type.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'We Plan Every Detail',
                'body'   => 'We match the right vehicle, assign a chauffeur, and confirm your itinerary in writing. For airport runs, your flight enters real-time tracking. For multi-stop charters and events, every stop is documented before the service date. Nothing is improvised.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Your Chauffeur Is There Before You Are',
                'body'   => 'Your background-checked, professionally trained chauffeur is at the pickup address before your scheduled time on every service type. The vehicle is detailed, inspected, and ready. Your rate stays exactly as quoted from booking to receipt.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Ready to book your"
        headingBold="transportation?"
        headingTail=""
        image="/images/sections/corporate-limo.jpg"
        imageAlt="Stop &amp; Go professional transportation service vehicle ready for a client engagement across Will County"
        imageAspect="16/9"
        imageObjectPosition="center center"
        rightVariant="description"
        descHeading="What Every Stop & Go Booking Includes"
        descSubheading="The same professional standard across every service type"
        descBody="Whether you are booking an airport transfer, a corporate roadshow, a limousine for a celebration, or a group charter across Chicagoland, every Stop &amp; Go transportation booking includes:"
        :descBullets="[
            'Background-checked, professionally trained chauffeur on every booking, arriving before your scheduled pickup',
            'Meticulously maintained and pre-inspected vehicle, detailed before every service engagement',
            'Flat-rate, all-inclusive pricing: taxes, tolls, and the chauffeur all covered at the quoted rate',
            'No surge pricing, ever: the agreed rate applies at any hour and any day of the year',
            '24/7/365 dispatch staffed around the clock, including holidays, pre-dawn departures, and late-night returns',
            'Real-time flight tracking on all airport transfers, adjusting your pickup automatically to delays',
            'Multi-stop itinerary confirmed in writing before your service date for charter and event bookings',
            'Service across all of Will County and Chicagoland, with a second location in Naperville for DuPage County',
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
