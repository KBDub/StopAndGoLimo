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
    "image": "https://newlenoxlimoservice.com/images/heroes/hero-special-event.jpg",
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
    "@id": "https://newlenoxlimoservice.com/core-services/transportation-escort#service",
    "name": "Transportation Escort Service",
    "serviceType": "Escorted Transportation",
    "description": "Professional escorted transportation service for individuals, families, and groups across New Lenox, Joliet, Naperville, and all of Will County and Chicagoland. Dedicated chauffeur accompanies clients door-to-door for airport transfers, anniversaries, birthdays, city tours, school dances, corporate services, and private charters. Background-checked drivers, flat-rate pricing, 24/7/365 dispatch.",
    "provider": {
        "@type": "LocalBusiness",
        "@id": "https://newlenoxlimoservice.com"
    },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Transportation Escort Services",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Airport Escort Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Corporate Escort Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Private Charter Escort" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "School Dance Escort Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "City Tour Escort Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Anniversary and Occasion Escort" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Shopping Escort Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "VIP Escort Transportation" } }
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
    "name": "Transportation Escort Services — Stop & Go Airport Shuttle Service, Inc.",
    "description": "Full list of escorted transportation services offered by Stop & Go Airport Shuttle Service, Inc. from New Lenox, Illinois.",
    "itemListElement": [
        {
            "@type": "ListItem", "position": 1,
            "item": {
                "@type": "Product",
                "name": "Airport Escort Transportation",
                "description": "Door-to-door escorted airport transportation to O'Hare, Midway, and Chicago Executive Airport. Real-time flight tracking, curbside or inside-terminal meet-and-greet, luggage assistance. Chauffeur accompanies from pickup through terminal arrival.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 500, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 2,
            "item": {
                "@type": "Product",
                "name": "Corporate Escort Transportation",
                "description": "Discreet executive escort transportation for client visits, roadshows, and multi-stop corporate schedules. Chauffeur accompanies throughout the full business day, managing route and timing across Chicagoland.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 500, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 3,
            "item": {
                "@type": "Product",
                "name": "Private Charter Escort",
                "description": "Private escorted charters for groups of any size across New Lenox, Joliet, and all of Will County. Dedicated chauffeur accompanies the group from first pickup to final drop-off, handling every stop and timing detail.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 500, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 4,
            "item": {
                "@type": "Product",
                "name": "School Dance Escort Transportation",
                "description": "Parent-trusted escort transportation for proms and school dances across New Lenox, Frankfort, Mokena, and Will County. Background-checked chauffeur, confirmed pickup and drop-off details, on-time return.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 500, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 5,
            "item": {
                "@type": "Product",
                "name": "City Tour Escort Service",
                "description": "Private escorted city tours of Chicago from New Lenox and across the Southwest Suburbs. Chauffeur guides clients between landmarks at their own pace, handling driving and parking throughout the day.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 500, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 6,
            "item": {
                "@type": "Product",
                "name": "Anniversary and Occasion Escort",
                "description": "Escorted luxury transportation for anniversaries, romantic evenings, and personal celebrations across New Lenox and Will County. Professional chauffeur accompanies the couple for the full evening, handling all logistics.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 500, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
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
        { "@@type": "ListItem", "position": 1, "name": "Home",                        "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services",               "item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "Transportation Escort Service", "item": "{{ request()->url() }}" }
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
            "name": "What is an escorted transportation service?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "An escorted transportation service means a dedicated, professional chauffeur accompanies you door-to-door for the entire trip or event — not just a driver who drops you off and leaves. The chauffeur manages the route, the timing, the parking, and any multi-stop logistics, staying with you throughout the booking so you never have to coordinate a return pickup or worry about the next leg."
            }
        },
        {
            "@type": "Question",
            "name": "How does escorted airport transportation work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For departures, your chauffeur arrives at your door, handles luggage, and escorts you to your terminal at O'Hare, Midway, or Chicago Executive Airport. For arrivals, your chauffeur is positioned inside the terminal at baggage claim with a name sign, escorts you to the vehicle, handles your luggage, and returns you directly to your door. Real-time flight tracking means the chauffeur is there regardless of delays."
            }
        },
        {
            "@type": "Question",
            "name": "Can I book an escort for a full day with multiple stops?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our hourly escort service keeps a dedicated chauffeur and vehicle with you for as long as you need, across as many stops as your day requires. Corporate roadshows, shopping trips, city tours, and multi-venue celebrations are all common full-day escort bookings. The chauffeur waits between stops and adapts as your plans evolve."
            }
        },
        {
            "@type": "Question",
            "name": "Is escorted transportation available for seniors and medical appointments?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. provides attentive, door-through-door escorted transportation for seniors and clients traveling to medical appointments at Silver Cross Hospital and facilities across Will County and Chicagoland. Our chauffeurs assist at every step, from the front door through the appointment arrival and back home."
            }
        },
        {
            "@type": "Question",
            "name": "Do you provide escorted transportation for school dances?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. provides parent-trusted escorted transportation for proms, homecoming dances, and school formals across the Lincoln-Way and Joliet Township communities. A background-checked, professionally trained chauffeur accompanies the group, no student has to drive, and pickup and drop-off details are confirmed in advance so families always know the plan."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between an escort service and a standard transfer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A standard transfer is a point-to-point trip: pickup at one address, drop-off at another. An escorted transportation service means the chauffeur stays with you for the full engagement, managing multi-stop itineraries, waiting between venues, assisting throughout, and returning you home at the end. It is a dedicated, accompanied experience rather than a one-leg transfer."
            }
        }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Transportation Escort Service | Accompanied Travel | Stop &amp; Go Airport Shuttle Service, Inc."
    metaDescription="Professional escorted transportation service across New Lenox, Joliet, Naperville, and all of Will County. Dedicated chauffeur for airport transfers, city tours, corporate travel, school dances, and personal occasions."
    currentPage="our-services"
    ogImage="/images/heroes/hero-special-event.jpg"
    ogImageAlt="Stop & Go Airport Shuttle Service, Inc. professional transportation escort service for events and personal occasions across Will County"
>

    <x-sections.category-hero
        heading="Transportation Escort"
        headingBold="Service"
        :headingTwoLines="false"
        subtitle="A dedicated chauffeur with you from start to finish."
        description="Stop & Go Airport Shuttle Service, Inc. has been providing professional escorted transportation across New Lenox, Joliet, Naperville, Frankfort, and all of Will County since 2015. An escorted transportation service is different from a standard transfer: a dedicated, background-checked chauffeur accompanies you door-to-door for the entire engagement, managing the route, the timing, the parking, and every stop along the way. We are headquartered at 400 E Lincoln Hwy in New Lenox, with a second location in Naperville, and our escort transportation serves a wide range of clients and occasions: airport transfers with inside-terminal accompaniment, corporate executive escorts for client visits and roadshows, school dance and prom escorts for families who value accountability, private group charters, personal occasion escorts for anniversaries and milestone evenings, city tour escort service for visiting guests, shopping escorts, and attentive door-through-door service for seniors and medical appointments. Every escort booking comes with a professionally trained chauffeur, a meticulously maintained vehicle, and a flat rate covering the full engagement."
        buttonText="Book an Escort"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-special-event.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="One Chauffeur."
        headingBold="The Whole Trip Handled."
        subtitle=""
        body="The difference between escorted transportation and a standard car service is the difference between a concierge and a delivery. With a standard transfer, a driver drops you off and leaves. With Stop & Go Airport Shuttle Service, Inc. escorted transportation, your chauffeur is with you from the moment you leave your door to the moment you return home. They manage every mile, every stop, every wait, and every timing adjustment in between. For airport travel, that means the chauffeur carries your bags from the front door, guides you through check-in, and is inside the terminal at baggage claim with your name sign when you land. For a corporate roadshow, it means a professionally attired driver who waits between meetings, adapts to a shifting schedule, and keeps the whole business day moving. For a school dance, it means parents have a professional, background-checked adult behind the wheel the entire evening, with confirmed pickup and drop-off details communicated in advance. For an anniversary or city tour, it means your whole evening is handled, end to end, while you focus on the occasion. Stop & Go Airport Shuttle Service, Inc. has been building that experience across Will County since 2015, and the escort standard is the same on every booking."
        buttonText="Book an Escort"
        buttonHref="/get-a-quote"
        image="/images/sections/special-event-limo.png"
        imageAlt="Stop &amp; Go Airport Shuttle Service, Inc. professional chauffeur escorting client to a luxury vehicle for door-to-door service"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Flat-Rate Pricing."
        heading="The Full Escort, One Clear Quote."
        body="Escorted transportation that reprices midway through the engagement undermines the entire value of the service. Stop & Go Airport Shuttle Service, Inc. escort transportation is flat-rate or hourly, confirmed in writing before the booking begins, with no adjustments for traffic, waiting time within the agreed engagement, or time of day. The quote covers the chauffeur, the vehicle, fuel, and tolls for the full escort. For multi-stop and full-day engagements, the hourly rate is confirmed upfront and the total is calculable before your chauffeur arrives at the door. There is no meter running, no surge pricing, and no surprise total at the end."
    />

    <x-sections.limo-services-grid
        id="escort-services"
        heading="Transportation Escort"
        headingBold="Services We Provide"
        subheading="Every Type of Escorted Transportation We Handle"
        intro="Stop & Go Airport Shuttle Service, Inc. provides professional escort transportation for a wide range of clients and occasions across Will County and Chicagoland. Here is a look at the escort bookings our clients rely on most and what each engagement typically includes."
        :cards="[
            [
                'service' => 'Airport Escort Transportation',
                'copy'    => 'Stop & Go Airport Shuttle Service, Inc. airport escort service accompanies you door-to-door from your home to your terminal and from your arrival gate back to your front door. Your chauffeur carries luggage at both ends, monitors your flight in real time, and is inside the terminal at baggage claim with your name sign before your bags reach the belt. For departures, they are at your door before your scheduled pickup and deliver you to the terminal with time to spare. This covers O\'Hare, Midway, and Chicago Executive Airport.',
            ],
            [
                'service' => 'Corporate Escort Transportation',
                'copy'    => 'Executive escort transportation for client visits, roadshows, and multi-stop business days across the I-80 and I-88 corridors. Your chauffeur accompanies your team or your client throughout the full engagement: between meetings, between offices, between airports and hotels, and between any combination of stops the schedule requires. The cabin provides plush seating, climate control, a quiet ride, and a privacy partition for calls and preparation between stops.',
            ],
            [
                'service' => 'School Dance and Prom Escort',
                'copy'    => 'Stop & Go Airport Shuttle Service, Inc. school dance escorts are designed as much for the parents as the students. A professional, background-checked chauffeur accompanies the group from the first pickup through dinner and the dance, then delivers every student home on schedule. Pickup and drop-off details are confirmed in advance, no student is behind the wheel, and the group stays together the entire evening. Families across the Lincoln-Way and Joliet Township communities have trusted Stop & Go Airport Shuttle Service, Inc. with their students since 2015.',
            ],
            [
                'service' => 'Private Group Charter Escort',
                'copy'    => 'A private escorted charter keeps any group together with one dedicated chauffeur managing the full route from start to finish. Whether it is a corporate outing, a family event, a celebration, or a group day trip across Chicagoland, Stop & Go Airport Shuttle Service, Inc. private charter escorts handle every stop and every timing detail. No one drives. No one gets separated. The organizer has a single dispatch contact for the entire engagement.',
            ],
            [
                'service' => 'Chicago City Tour Escort',
                'copy'    => 'Stop & Go Airport Shuttle Service, Inc. city tour escorts provide a private, accompanied exploration of Chicago for visiting guests, families, and groups departing from New Lenox and across the Southwest Suburbs. Your chauffeur guides the day between landmarks at your pace: the Magnificent Mile, Navy Pier, Millennium Park, the Riverwalk, and beyond. Driving and parking are fully managed, and the itinerary can be adjusted on the fly. It is the relaxed, comfortable way to experience the city.',
            ],
            [
                'service' => 'Anniversary and Personal Occasion Escort',
                'copy'    => 'A special evening is better when neither person has to manage the logistics. Stop & Go Airport Shuttle Service, Inc. anniversary and occasion escorts provide a professional chauffeur for the full evening: from your door to dinner, between venues, and back home at the end of the night. The chauffeur manages the route and the timing so you remain completely present for the occasion. Plush seating, ambient lighting, and a quiet cabin create the right atmosphere for a milestone evening.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-process-steps
        id="escort-process"
        heading="Six Ways Your Escort"
        headingBold="Chauffeur Shows Up Prepared"
        intro="An escorted transportation engagement requires more preparation than a point-to-point transfer. Here is how Stop & Go Airport Shuttle Service, Inc. builds every escort booking before your chauffeur arrives."
        :steps="[
            [
                'num'   => '01',
                'title' => 'You describe the occasion and the full itinerary',
                'body'  => 'Tell us the nature of the escort, the number of clients, every location involved, the total duration, and any special requirements. Airport escorts include your flight details. Corporate escorts include your stop-by-stop schedule. School dance escorts include confirmed pickup and drop-off addresses for every student. We build the engagement around the full picture.',
            ],
            [
                'num'   => '02',
                'title' => 'Your escort plan is written and confirmed',
                'body'  => 'Every detail of your engagement is documented in writing: pickup sequence, timing at each stop, wait protocols, and drop-off confirmation. For school dances, parent contacts are confirmed. For airport escorts, your flight enters real-time tracking. For city tours, the route is discussed and agreed. Nothing about the day is improvised.',
            ],
            [
                'num'   => '03',
                'title' => 'The right vehicle is matched to your engagement',
                'body'  => 'A solo executive airport escort uses a different vehicle than a group of 12 attending a school dance. We match the vehicle to the headcount, the occasion, and any specific requirements. Wheelchair-accessible configurations and child seat installations are confirmed in advance on bookings that require them.',
            ],
            [
                'num'   => '04',
                'title' => 'The vehicle is detailed and inspected before pickup',
                'body'  => 'Your escort vehicle is fully detailed and mechanically pre-inspected before the engagement date. Climate is pre-set. Amenities are confirmed. For airport escorts, flight tracking is active. For school dance and prom escorts, parent contacts are in the chauffeur\'s briefing.',
            ],
            [
                'num'   => '05',
                'title' => 'Your chauffeur departs early and is positioned first',
                'body'  => 'Our standard is to have the chauffeur at the first pickup address before your scheduled time. For airport arrivals, the chauffeur is positioned inside the terminal before your gate opens. For school dances, the vehicle is staged before the first student is ready. Earliness is the standard, not the exception.',
            ],
            [
                'num'   => '06',
                'title' => 'Your chauffeur accompanies you through the full engagement',
                'body'  => 'Unlike a standard transfer, your escort chauffeur stays with you from beginning to end. They manage every stop, wait between venues, adapt to schedule changes, assist throughout the engagement, and deliver you home at the conclusion. The rate stays exactly as agreed from the start.',
            ],
        ]"
    />

    <x-sections.party-bus-occasions
        id="escort-occasions"
        heading="Every Client Who Benefits"
        headingBold="from Escorted Transportation"
        subheading="Who Books Our Transportation Escort Service"
        intro="Escorted transportation serves a broader range of clients than most people expect. Here is a look at who books Stop & Go Airport Shuttle Service, Inc. escort service most often and why the accompanied model fits their specific needs."
        :occasions="[
            [
                'occasion' => 'Business Executives and Corporate Clients',
                'copy'     => 'An executive roadshow with four meetings across the Chicago metro has no room for a driver who disappears between stops. Stop & Go Airport Shuttle Service, Inc. corporate escort transportation keeps a dedicated chauffeur with the executive or client team for the full business day, managing multi-stop schedules, adapting to shifting timing, and maintaining the quiet, professional cabin that business travel demands. Corporate escorts include centralized billing and a single dispatch contact.',
            ],
            [
                'occasion' => 'VIP and Distinguished Guests',
                'copy'     => 'VIP guests and distinguished visitors arriving at O\'Hare or Midway receive a qualitatively different experience from a standard transfer. Stop & Go Airport Shuttle Service, Inc. VIP escort service begins inside the terminal at baggage claim, continues through a discreet, professionally appointed vehicle, and ends at the hotel or venue with luggage handled at both ends. The chauffeur manages every detail between the gate and the destination.',
            ],
            [
                'occasion' => 'Students Attending Proms and School Dances',
                'copy'     => 'A Stop & Go Airport Shuttle Service, Inc. school dance escort is structured specifically around parent accountability. The chauffeur is background-checked and professionally trained, every student is listed in the booking, pickup and drop-off details are confirmed with parents before the evening begins, and the group travels together in one vehicle. Students enjoy a memorable, celebratory ride. Parents know exactly who is behind the wheel and where their student is throughout the night.',
            ],
            [
                'occasion' => 'Seniors and Clients with Medical Appointments',
                'copy'     => 'Door-through-door escort service is especially valuable for seniors and clients traveling to medical appointments at Silver Cross Hospital and healthcare facilities across Will County and Chicagoland. Your chauffeur assists from the front door, manages the vehicle, assists through the arrival at the facility, and waits to escort you back home at the conclusion. No parking, no navigation, and no relying on family members for an appointment day.',
            ],
            [
                'occasion' => 'Families Hosting Visiting Guests',
                'copy'     => 'When out-of-town guests arrive from O\'Hare or Midway, a Stop & Go Airport Shuttle Service, Inc. airport escort turns the arrival into a welcoming experience rather than a logistics problem. Your guest is met inside the terminal with a name sign, escorted to a clean and comfortable vehicle, and delivered directly to your door or their hotel. For visiting families across multiple days, day-hire escort service keeps guests comfortable and oriented without anyone needing to drive.',
            ],
            [
                'occasion' => 'Couples and Individuals on Personal Occasions',
                'copy'     => 'An anniversary dinner, a romantic evening out, or a personal milestone is better when the logistics are invisible. Stop & Go Airport Shuttle Service, Inc. occasion escorts provide a professional chauffeur for the full evening, managing the route and timing so you stay fully present for whatever the occasion means to you. Shopping escorts give you the full day: a chauffeur who drives, parks, and carries bags between the Magnificent Mile, Oak Brook, or wherever the day takes you.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.party-bus-advantage
        id="escort-advantage"
        heading="Why Escorted Transportation"
        headingBold="Is Not the Same as a Transfer"
        intro="A standard transfer gets you from point A to point B. Escorted transportation handles point A to point B to point C and back home again, with a professional chauffeur managing everything in between. For clients who need accountability, continuity, and a single professional responsible for the full engagement, the escort model is the right answer."
        leftHeading="What Escorted Transportation Provides"
        :checklist="[
            [
                'feature' => 'One dedicated chauffeur for the full engagement',
                'detail'  => 'There is no rebooking between stops, no waiting on a new driver, and no transition between vehicles mid-day. Your escort chauffeur is assigned to you from first pickup to final drop-off, and they manage every leg of the engagement from start to finish.',
            ],
            [
                'feature' => 'Confirmed accountability for every client',
                'detail'  => 'For school dances, corporate clients, and VIP guests, the escort model provides a documented chain of accountability. Who is driving, who is in the vehicle, where they are going, and when they will arrive back — all of this is confirmed before the engagement begins and managed throughout.',
            ],
            [
                'feature' => 'Adaptable to a shifting itinerary',
                'detail'  => 'Escorted transportation adapts when plans change. A meeting runs long, a flight is delayed, or an additional stop gets added. Your chauffeur is already there, briefed on the flexibility that comes with an hourly escort engagement, and ready to adjust without a new booking or a renegotiated fare.',
            ],
            [
                'feature' => 'Full-service assistance throughout',
                'detail'  => 'Luggage at airports, navigation assistance for visiting guests, wait assistance for seniors at medical appointments: an escort chauffeur provides hands-on assistance throughout the engagement, not just the driving. That distinction matters most for the clients who need it most.',
            ],
        ]"
        rightHeading="Serving Will County and Chicagoland Since 2015"
        :rightParagraphs="[
            'Stop & Go Airport Shuttle Service, Inc. has been providing professional escort transportation across Will County since 2015. We know the terminal layouts at O\'Hare and Midway, the school dance venues across the Lincoln-Way communities, the medical campuses in New Lenox and Joliet, the corporate office corridors along I-80 and I-88, and the Chicago landmark routes that visiting guests most want to see. That local knowledge supports the escort model in ways that a generic transportation company cannot.',
            'For families booking school dance escorts, we provide a direct line of communication to the chauffeur throughout the evening on request. For corporate clients, we coordinate directly with executive assistants and travel managers so the principal never has to manage the logistics. For seniors and medical clients, we brief the chauffeur on any specific assistance requirements in advance of the pickup.',
            'Every Stop & Go Airport Shuttle Service, Inc. escort booking is backed by 24/7/365 dispatch, fully licensed and insured operation, a background-checked and professionally trained chauffeur, and flat-rate or hourly pricing confirmed before the engagement begins. The figure agreed upon at booking is the figure on your receipt.',
        ]"
        ctaHeading="Ready to book your escort?"
        ctaBody="Get your flat-rate or hourly quote in minutes. We serve all of Will County and Chicagoland and are available 24 hours a day, 365 days a year."
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-booking-timeline
        id="escort-timeline"
        heading="Escort Transportation"
        headingBold="Booking Lead Times"
        intro="Some escort engagements are flexible and can be arranged on short notice. Others, particularly school dances, VIP visits, and peak-season events, require advance planning. Here is the booking lead time that works best for each type of escort engagement."
        :items="[
            [
                'occasion' => 'Prom and Homecoming Escort',
                'timing'   => '6 to 10 weeks ahead',
                'detail'   => 'Prom season in the Lincoln-Way area runs from late March through May. Homecoming falls in September and October. Because school dance escorts involve confirmed student lists and parent communications, earlier booking is better. Reserve 6 to 10 weeks ahead to secure your group\'s vehicle and date.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'VIP and Distinguished Guest Escort',
                'timing'   => '1 to 2 weeks ahead',
                'detail'   => 'VIP and distinguished guest escort engagements, particularly those involving airport arrivals and multi-stop hosting, benefit from 1 to 2 weeks of advance coordination. This gives us time to confirm flight details, align the vehicle and chauffeur to the guest\'s profile, and pre-brief on any specific requirements.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Corporate Roadshow or Full-Day Executive Escort',
                'timing'   => '1 to 2 weeks ahead',
                'detail'   => 'Corporate escort engagements with multiple stops and an executive or client team benefit from 1 to 2 weeks of planning time. This allows us to map the full stop-by-stop schedule, confirm vehicle and chauffeur assignment, and coordinate with your travel manager before the day begins.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'City Tour and Personal Occasion Escort',
                'timing'   => '48 to 72 hours ahead',
                'detail'   => 'City tour escorts and personal occasion escorts for couples and individuals are among our most flexible bookings. 48 to 72 hours ahead is typically sufficient to confirm availability, plan the itinerary, and brief the chauffeur. Weekend dates fill faster during peak months.',
                'urgency'  => 'low',
            ],
            [
                'occasion' => 'Airport Escort Transportation',
                'timing'   => '24 to 48 hours ahead',
                'detail'   => 'Airport escort bookings can typically be arranged 24 to 48 hours in advance. Same-day airport escorts are possible when you call our dispatch directly We always recommend booking at least the night before for pre-dawn departures.',
                'urgency'  => 'low',
            ],
            [
                'occasion' => 'Senior and Medical Escort',
                'timing'   => '24 to 48 hours ahead',
                'detail'   => 'Senior and medical appointment escorts are available with 24 to 48 hours notice in most cases. For recurring appointments, Stop & Go Airport Shuttle Service, Inc. can set up a standing schedule so the same chauffeur provides consistent, familiar service each visit.',
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
                'title'  => 'Tell Us About Your Escort Engagement',
                'body'   => 'Call our 24/7 dispatch or complete the quick online form. Share the nature of the escort, the number of clients, every location involved, the duration, and any specific requirements. We confirm availability and provide a flat-rate or hourly quote.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'We Plan Every Detail and Confirm in Writing',
                'body'   => 'Your escort plan is mapped stop by stop and confirmed in writing before the engagement date. For school dances, student and parent details are confirmed. For airport escorts, flight tracking is activated. For corporate escorts, the stop-by-stop business schedule is documented.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Your Chauffeur Is There from Start to Finish',
                'body'   => 'Your background-checked, professionally trained chauffeur is positioned before the first pickup and stays with you through the final drop-off. Every stop, every wait, every adjustment is managed. The rate stays exactly as agreed, and you stay entirely focused on the occasion.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Ready to book your"
        headingBold="escort transportation?"
        headingTail=""
        image="/images/sections/limousine-professional.jpg"
        imageAlt="Stop &amp; Go Airport Shuttle Service, Inc. professional chauffeur ready to escort clients across Will County and Chicagoland"
        imageAspect="16/9"
        imageObjectPosition="center center"
        rightVariant="description"
        descHeading="What Every Escort Booking Includes"
        descSubheading="The same professional standard from first pickup to final drop-off"
        descBody="Whether you are booking an airport escort for a solo traveler or a school dance escort for a group of ten, here is what every Stop &amp; Go Airport Shuttle Service, Inc. escort engagement provides:"
        :descBullets="[
            'Background-checked, professionally trained chauffeur dedicated to your engagement from start to finish',
            'One chauffeur stays with you through every stop, every wait, and the final drop-off home',
            'Meticulously maintained and pre-inspected vehicle, detailed before every engagement',
            'Flat-rate or hourly pricing confirmed in writing before the engagement begins, no surprises',
            'No surge pricing, ever: the agreed rate applies at any hour and any day of the year',
            'Real-time flight tracking and inside-terminal accompaniment on all airport escort bookings',
            'Parent-confirmed pickup and drop-off details on all school dance and prom escort engagements',
            '24/7/365 dispatch: pre-dawn airport escorts, late-night event returns, and senior appointment transport all covered',
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
