@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "LimousineService"],
    "@id": "https://newlenoxlimoservice.com/#business",
    "name": "Stop & Go Airport Shuttle Service, Inc.",
    "alternateName": "Stop & Go Limo",
    "url": "https://newlenoxlimoservice.com",
    "telephone": "",
    "priceRange": "$$",
    "image": "https://newlenoxlimoservice.com/images/heroes/hero-chicago-concert-party-bus.jpg",
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
    "@id": "https://newlenoxlimoservice.com/core-services/special-events#service",
    "name": "Special Event Transportation Service",
    "serviceType": "Special Event Transportation",
    "description": "Luxury transportation for every special event across New Lenox, Joliet, Naperville, and all of Will County and Chicagoland. Galas, concerts, sporting events, holiday parties, corporate events, milestone celebrations, reunions, graduations, engagement parties, and more. Background-checked chauffeurs, flat-rate pricing, no surge, 24/7/365 dispatch since 2015.",
    "provider": {
        "@type": "LocalBusiness",
        "@id": "https://newlenoxlimoservice.com/#business"
    },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Special Event Transportation Services",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Gala and Formal Event Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Concert and Sporting Event Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Holiday Party and Corporate Event Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Milestone Birthday and Anniversary Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Group Reunion and Outing Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Graduation and Achievement Celebration Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Engagement Party and Proposal Limousine" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Charity Fundraiser and Benefit Transportation" } }
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
    "name": "Special Event Transportation Services — Stop & Go Airport Shuttle Service, Inc.",
    "description": "Special event transportation services offered by Stop & Go Airport Shuttle Service, Inc. across Will County and Chicagoland.",
    "itemListElement": [
        {
            "@type": "ListItem", "position": 1,
            "item": {
                "@type": "Product",
                "name": "Gala and Formal Event Transportation",
                "description": "Luxury transportation to galas, black-tie dinners, award ceremonies, and formal fundraisers across Chicagoland. Professionally attired chauffeur, spotless vehicle, confirmed arrival and departure timing.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 2,
            "item": {
                "@type": "Product",
                "name": "Concert and Sporting Event Transportation",
                "description": "Group transportation to concerts and games at the United Center, Soldier Field, Wrigley Field, Allstate Arena, and Northerly Island. Curbside drop-off and confirmed return pickup at a flat rate, no surge when the event ends.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 3,
            "item": {
                "@type": "Product",
                "name": "Holiday Party and Corporate Event Transportation",
                "description": "Group transportation for holiday parties, end-of-year celebrations, and company events across Will County and the I-80 corridor. Multi-stop coordination, centralized billing, and flat-rate pricing for the whole group.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 4,
            "item": {
                "@type": "Product",
                "name": "Milestone Birthday and Anniversary Transportation",
                "description": "Limousine and group transportation for landmark birthdays, anniversaries, and milestone celebrations across Will County and Chicagoland. Multi-stop evening itinerary, ambient lighting, and a rate locked before the night begins.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 5,
            "item": {
                "@type": "Product",
                "name": "Group Reunion and Outing Transportation",
                "description": "Private group charter transportation for family reunions, alumni outings, club events, and day trips across Chicagoland. One dedicated vehicle, one chauffeur, and one flat rate for the whole group.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 6,
            "item": {
                "@type": "Product",
                "name": "Graduation and Achievement Celebration Transportation",
                "description": "Graduation and achievement celebration transportation for high school, college, and professional milestones across Will County. Group arrival in one vehicle, multi-stop celebration itinerary, and flat-rate all-inclusive pricing.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 250, "highPrice": 8000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
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
        { "@@type": "ListItem", "position": 1, "name": "Home",              "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services",     "item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "Special Events",    "item": "{{ request()->url() }}" }
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
            "name": "What types of special events do you provide transportation for?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stop & Go Airport Shuttle Service, Inc. provides luxury transportation for the full range of special events across Will County and Chicagoland: galas and black-tie dinners, concerts and sporting events at Chicago's major venues, holiday parties and corporate celebrations, milestone birthdays and anniversaries, family and alumni reunions, graduation parties, engagement celebrations and proposals, charity fundraisers, retirement parties, and any occasion where a group wants to arrive together in comfort and style."
            }
        },
        {
            "@type": "Question",
            "name": "Do you offer transportation to Chicago concerts and sporting events?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. provides group transportation from New Lenox, Joliet, and across Will County to the United Center, Soldier Field, Wrigley Field, Allstate Arena, Huntington Bank Pavilion at Northerly Island, and suburban amphitheaters. Your chauffeur knows the venue drop-off protocols. Your return pickup is confirmed at a flat rate before the event, with no surge pricing when the crowd empties out."
            }
        },
        {
            "@type": "Question",
            "name": "Can you transport a large group to a special event?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. right-sizes the vehicle to your group: a limousine for a smaller celebration, a party bus or mini-coach for a mid-sized group, and charter bus options for larger gatherings. Every booking keeps the whole group together in one vehicle with one chauffeur managing the route and timing, rather than splitting across multiple vehicles."
            }
        },
        {
            "@type": "Question",
            "name": "Is there surge pricing for late-night event pickups?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Stop & Go Airport Shuttle Service, Inc. never applies surge pricing. The return pickup rate for any special event is locked at the same flat rate confirmed when you booked. A concert that runs long, a gala that ends at midnight, or a party that stays until last call are all covered at the agreed rate."
            }
        },
        {
            "@type": "Question",
            "name": "How far in advance should I book special event transportation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most special event transportation can be arranged 1 to 3 weeks ahead on weekdays and standard weekends. Peak dates require more lead time: New Year's Eve and major holiday weekends book 2 to 3 months ahead, sold-out concert nights and popular event dates fill faster than average, and any Saturday in spring or fall benefits from booking earlier rather than later. When in doubt, earlier is always better."
            }
        },
        {
            "@type": "Question",
            "name": "Do you handle multi-stop special event itineraries?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Multi-stop itineraries are standard practice for special event bookings. Pre-dinner cocktails at one venue, the main event at a second, and an after-party at a third are all mapped and confirmed in writing before your event date. Your chauffeur manages every stop and every transition while the group stays together and the evening stays on schedule."
            }
        }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Special Event Transportation | Will County &amp; Chicagoland | Stop &amp; Go Airport Shuttle Service, Inc."
    metaDescription="Luxury special event transportation across New Lenox, Joliet, Naperville, and all of Will County. Galas, concerts, holiday parties, milestone celebrations, reunions, and graduations. Flat-rate pricing, no surge."
    currentPage="our-services"
    ogImage="/images/heroes/hero-chicago-concert-party-bus.jpg"
    ogImageAlt="Stop & Go Airport Shuttle Service, Inc. special event transportation for groups across Will County and Chicagoland"
>

    <x-sections.category-hero
        heading="Special Event"
        headingBold="Transportation"
        :headingTwoLines="false"
        subtitle="Every occasion. Every group. One vehicle, one flat rate."
        description="Stop & Go Airport Shuttle Service, Inc. has been providing luxury special event transportation across New Lenox, Joliet, Naperville, Frankfort, Mokena, and all of Will County since 2015. We are headquartered at 400 E Lincoln Hwy in New Lenox, and our fleet covers the full range of events and celebrations that bring groups together: galas and black-tie dinners, concerts and sporting events at Chicago's major venues, holiday parties and corporate celebrations, landmark birthdays and milestone anniversaries, family and alumni reunions, graduation parties, engagement celebrations and proposal nights, charity fundraisers and benefit dinners, retirement parties, and any special occasion where a group deserves to arrive together in luxury and leave without logistics. Every special event booking comes with a background-checked, professionally trained chauffeur, a meticulously maintained vehicle, and a flat-rate, all-inclusive price locked at booking with no surge pricing on the return. Our 24/7/365 dispatch manages multi-stop itineraries, late-night event pickups, and holiday dates every day of the year."
        buttonText="Get an Event Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-chicago-concert-party-bus.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="The Event Starts the Moment"
        headingBold="the Group Gets In"
        subtitle=""
        body="A great special event should feel effortless from the moment you leave home to the moment you return. Stop & Go Airport Shuttle Service, Inc. special event transportation is built around that idea. Your group boards together, the ambient lighting comes on, the music starts, and the celebration begins before the first venue opens its doors. A professionally attired chauffeur handles the route, the parking, and every stop on the itinerary so no one in the group has to think about driving or directions. On the return, the vehicle is there at the rate set before the night began, no surge pricing because the event let out at midnight and every rideshare app in the city doubled its fares at the same moment. Multi-stop evenings are what Stop & Go Airport Shuttle Service, Inc. does best: cocktails at one restaurant, the main event at the gala or arena, a late stop afterward. Every leg is mapped in advance and confirmed in writing before the evening begins. For galas and formal events, your chauffeur arrives in formal attire with a spotless vehicle. For concert and game nights, they know the venue drop-off lanes. For holiday parties and corporate celebrations, a single dispatch contact manages the group pickup and the return. Whatever the occasion, the transportation matches it."
        buttonText="Get an Event Quote"
        buttonHref="/get-a-quote"
        image="/images/sections/celebrate-your-big-event.png"
        imageAlt="Group celebrating at a special event with Stop &amp; Go Airport Shuttle Service, Inc. luxury transportation across Will County"
        :inverted="false"
    />

    <x-sections.info-strip
        headingBold="Flat Rate. Locked Before the Night Starts."
        heading="No Surge When the Event Ends."
        body="Concert nights, gala send-offs, and holiday parties all share one common problem with on-demand rideshare apps: when the event ends and everyone leaves at the same moment, prices spike. Stop & Go Airport Shuttle Service, Inc. eliminates that entirely. The return pickup rate for any special event is the same flat rate locked when you booked, confirmed in writing before the evening begins. Your group climbs in, the chauffeur heads home, and no one pulls out a phone to see what the fare came to. There is nothing to check. The figure was agreed upon at booking and that is the figure on the receipt."
    />

    <x-sections.limo-services-grid
        id="special-event-services"
        heading="Special Event Transportation"
        headingBold="for Every Occasion"
        subheading="Every Type of Event We Serve"
        intro="Stop & Go Airport Shuttle Service, Inc. has been providing luxury special event transportation across Will County and Chicagoland since 2015. Here is a look at the events and occasions our clients book most often and what each engagement typically includes."
        :cards="[
            [
                'service' => 'Gala and Formal Event Transportation',
                'copy'    => 'Galas, black-tie dinners, award ceremonies, and charity benefit nights deserve transportation that matches the occasion. Stop & Go Airport Shuttle Service, Inc. gala transportation provides a formally attired chauffeur, a spotless and meticulously maintained vehicle, and confirmed curbside arrival and departure timing so your entrance is composed and your exit is effortless. We serve Chicago\'s major hotel ballrooms, the Drury Lane Theatre in Oakbrook Terrace, Driehaus Museum events, and formal venues across Will County and the North Shore.',
            ],
            [
                'service' => 'Concert and Sporting Event Transportation',
                'copy'    => 'Stop & Go Airport Shuttle Service, Inc. concert and game transportation runs from New Lenox, Joliet, and across Will County to every major Chicago venue: the United Center for Bulls and Blackhawks events, Soldier Field for Bears games and large concerts, Wrigley Field and Guaranteed Rate Field, Allstate Arena in Rosemont, and Huntington Bank Pavilion at Northerly Island. Your chauffeur knows the dedicated drop-off lanes and load-out zones at each venue. Your return pickup is confirmed at the flat rate locked before the show.',
            ],
            [
                'service' => 'Holiday Party and Corporate Event Transportation',
                'copy'    => 'End-of-year holiday parties and corporate celebrations often involve groups of 8 to 30 employees or clients who need to move between a workplace, a dinner venue, and sometimes an after-event stop without anyone behind the wheel. Stop & Go Airport Shuttle Service, Inc. holiday and corporate event transportation provides the right vehicle for the headcount, a chauffeur who manages the pickup sequence and the multi-stop route, and centralized billing that simplifies the administrative side for event planners and travel managers.',
            ],
            [
                'service' => 'Milestone Birthday and Anniversary Transportation',
                'copy'    => 'A landmark 40th, 50th, or 60th birthday deserves an evening where the guest of honor never thinks about logistics. A 25th or 50th anniversary deserves a return to the city with a chauffeur handling every detail. Stop & Go Airport Shuttle Service, Inc. milestone celebration transportation keeps the whole group together in one vehicle, covers a multi-stop evening from dinner through the celebration venue and any stops in between, and returns everyone home at a rate set before the first pickup.',
            ],
            [
                'service' => 'Reunion and Group Outing Transportation',
                'copy'    => 'Family reunions, high school and college alumni outings, club and organization events, and group day trips into the city all share the same logistical challenge: getting everyone there and back without a caravan of separate cars. Stop & Go Airport Shuttle Service, Inc. reunion and group outing transportation keeps the whole group in one vehicle with one dedicated chauffeur managing the full itinerary. No one drives. No one gets separated. The organizer has a single point of contact for every mile.',
            ],
            [
                'service' => 'Graduation and Achievement Celebration',
                'copy'    => 'A graduation from Lincoln-Way or a Joliet Township high school, a college commencement, a professional certification, or a retirement after a long career all mark the kind of moment that calls for a proper celebration. Stop & Go Airport Shuttle Service, Inc. graduation and achievement transportation covers the ceremony arrival, the group photo stop, and the celebration venue in one coordinated booking. The whole family or friend group rides together, and the graduate or retiree arrives at every stop as the center of the occasion.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-process-steps
        id="special-event-process"
        heading="How We Plan Every"
        headingBold="Special Event from Start to Finish"
        intro="A special event is often a once-a-year or once-in-a-lifetime occasion. Here is what Stop & Go Airport Shuttle Service, Inc. does before your chauffeur arrives to make sure the transportation matches the moment."
        :steps="[
            [
                'num'   => '01',
                'title' => 'You share the event details',
                'body'  => 'One call or online form is all it takes. Tell us the type of event, the date and time, the pickup location, the venue or venues, and the number of passengers. We confirm vehicle availability for your date and recommend the right vehicle for the group size and the occasion.',
            ],
            [
                'num'   => '02',
                'title' => 'The right vehicle is matched to your event',
                'body'  => 'A formal gala for 6 calls for a different vehicle than a concert for 14 or a holiday party for 22. We right-size the vehicle to your headcount and the tone of the occasion, from a luxury sedan or stretch limousine for smaller formal events to a party bus or mini-coach for larger groups. Every vehicle option is fully detailed, licensed, and insured.',
            ],
            [
                'num'   => '03',
                'title' => 'Your full itinerary is built and confirmed',
                'body'  => 'Every stop is mapped in sequence: pickup addresses, the event venue, any intermediate stops, and the drop-off plan at the end of the night. For multi-stop evenings, timing at each leg is confirmed in writing. For concert and gala nights, the return pickup window is confirmed so every passenger knows the plan before the evening begins.',
            ],
            [
                'num'   => '04',
                'title' => 'The vehicle is detailed and pre-inspected',
                'body'  => 'Your event vehicle is mechanically inspected and fully detailed before the engagement. The interior is clean, the amenities are confirmed, and the climate is pre-set for the weather. For formal events, the chauffeur\'s attire is matched to the occasion. Nothing about the vehicle on event day should feel like it just came from another booking.',
            ],
            [
                'num'   => '05',
                'title' => 'Your chauffeur arrives before the first pickup',
                'body'  => 'Stop & Go Airport Shuttle Service, Inc. standard is to have the chauffeur staged at the first pickup address before the scheduled time. For gala evenings, the vehicle is positioned and the chauffeur is in place before the first passenger is ready. For concert nights, the vehicle is staged at the venue load-out zone before the headliner finishes. Earliness is the standard.',
            ],
            [
                'num'   => '06',
                'title' => 'The whole evening runs at your pace',
                'body'  => 'Your chauffeur manages every mile and every stop from first pickup to final drop-off. If the event runs long, the vehicle waits. If the group decides to add a late stop, the chauffeur adapts. The flat rate was locked at booking, so there is no meter calculating overtime and no negotiation at the end of the night.',
            ],
        ]"
    />

    <x-sections.party-bus-occasions
        id="special-event-occasions"
        heading="Every Occasion That Belongs"
        headingBold="in a Luxury Vehicle"
        subheading="Every Event Type We Serve Across Will County"
        intro="Special event transportation covers more occasions than most clients expect. Here is a look at the full range of events Stop & Go Airport Shuttle Service, Inc. serves across Will County and Chicagoland."
        :occasions="[
            [
                'occasion' => 'Galas, Benefits, and Black-Tie Events',
                'copy'     => 'Arriving at a black-tie gala in a luxury vehicle with a formally attired chauffeur sets the tone before you walk through the door. Stop & Go Airport Shuttle Service, Inc. gala transportation serves formal events across the Chicago metro with a chauffeur who knows how to handle a red-carpet drop-off, a valet staging area, and the transition from the event to the late dinner that often follows. The vehicle and the chauffeur match the formality of the occasion every time.',
            ],
            [
                'occasion' => 'Chicago Concerts and Major Sporting Events',
                'copy'     => 'A group of 10 heading downtown for a sold-out concert is better in one vehicle than split across rideshare pickups that arrive at staggered times with staggered fares. Stop & Go Airport Shuttle Service, Inc. concert and game transportation keeps the group together from Will County to the venue and back, with a chauffeur who knows the venue traffic flow and a return pickup confirmed at the flat rate set before you left home, regardless of how late the show runs.',
            ],
            [
                'occasion' => 'Holiday and End-of-Year Parties',
                'copy'     => 'Holiday parties are among the most common special event bookings Stop & Go Airport Shuttle Service, Inc. handles each November and December. Whether it is a company holiday dinner for 15 employees, a neighborhood party where no one wants to drive, or a family gathering with guests from multiple suburbs, we right-size the vehicle and manage the pickup sequence so the organizer spends the evening celebrating rather than coordinating.',
            ],
            [
                'occasion' => 'Milestone Birthdays and Landmark Anniversaries',
                'copy'     => 'A 50th birthday dinner for 12 friends. A 30th anniversary return to the downtown restaurant where the couple had their first date. A retirement celebration that ends with a group night out. Stop & Go Airport Shuttle Service, Inc. milestone event transportation turns these evenings into smooth, celebratory experiences by removing every logistical decision from the guest of honor. The vehicle, the itinerary, and the rate are all handled. The occasion is theirs.',
            ],
            [
                'occasion' => 'Graduations, Retirements, and Career Milestones',
                'copy'     => 'A high school graduation from a Lincoln-Way school, a college commencement at Lewis University or Governors State, a law school or medical school graduation, or a retirement after 30 years with a company all mark moments worth celebrating in the right way. Stop & Go Airport Shuttle Service, Inc. graduation and retirement transportation gives the honoree a proper arrival and keeps the celebrating group together for the dinner and the evening after.',
            ],
            [
                'occasion' => 'Proposals, Engagements, and Romantic Evenings',
                'copy'     => 'A proposal at a scenic Chicago rooftop or lakefront location. An engagement party for family and close friends. A romantic anniversary dinner that the other person does not have to plan a single detail of. Stop & Go Airport Shuttle Service, Inc. proposal and engagement transportation provides a luxury limousine for intimate occasions, with a chauffeur who knows the timing, keeps the cabin quiet and private, and stages the vehicle exactly where and when the moment calls for it.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.party-bus-advantage
        id="special-event-advantage"
        heading="Why Rideshare Cannot Replace"
        headingBold="a Flat-Rate Event Chauffeur"
        intro="On-demand rideshare apps are designed for individuals. Special events involve groups, multi-stop itineraries, late-night pickups, and confirmed vehicle availability hours ahead of time. Stop & Go Airport Shuttle Service, Inc. is built for exactly that, with none of the variables that rideshare apps cannot control."
        leftHeading="What Makes Stop & Go Airport Shuttle Service, Inc. Different"
        :checklist="[
            [
                'feature' => 'The group rides together, every leg',
                'detail'  => 'Splitting 12 people across three rideshare pickups after a concert means three different departure times, three different costs, and the near certainty that someone\'s car takes 20 minutes to arrive. One Stop & Go Airport Shuttle Service, Inc. vehicle, one chauffeur, and one departure keeps the group synchronized from the first pickup to the final drop-off.',
            ],
            [
                'feature' => 'No surge pricing when everyone leaves at once',
                'detail'  => 'When a gala ends, a concert empties, or a holiday party wraps up at midnight, on-demand apps respond to peak demand by doubling or tripling fares. Stop & Go Airport Shuttle Service, Inc. locks the return pickup rate at the same flat rate confirmed when you booked, any hour of the night, any level of outside demand.',
            ],
            [
                'feature' => 'The vehicle and chauffeur match the occasion',
                'detail'  => 'A rideshare driver arriving in whatever personal vehicle is nearby is not the same as a formally attired Stop & Go Airport Shuttle Service, Inc. chauffeur in a spotless, meticulously maintained luxury vehicle. For galas, milestone celebrations, and any occasion where the transportation is part of the impression, those details matter.',
            ],
            [
                'feature' => 'Multi-stop evenings planned in advance',
                'detail'  => 'On-demand apps handle one trip at a time. Stop & Go Airport Shuttle Service, Inc. confirms the full evening in writing before it begins: every stop, every timing window, every transition between venues. When the group is ready to move, the chauffeur is already staged and the next leg is part of a plan that was documented days ago.',
            ],
        ]"
        rightHeading="Ten Years of Special Events in Will County"
        :rightParagraphs="[
            'Stop & Go Airport Shuttle Service, Inc. has been handling special event transportation across Will County since 2015. We have driven groups to opening night galas at the Rialto Square Theatre in Joliet, Bears games at Soldier Field, sold-out concerts at the United Center and Wrigley Field, milestone anniversary dinners in the city, and graduation celebrations at Lewis University and Governors State. That decade of event experience means our chauffeurs know the venues, the venue load-out protocols, and the routing decisions that keep a multi-stop evening on schedule.',
            'We serve New Lenox, Joliet, Frankfort, Mokena, Naperville, Orland Park, Tinley Park, Plainfield, Bolingbrook, Romeoville, Aurora, and all of Chicagoland from our Lincoln Highway headquarters, with a second location in Naperville. Whatever the event and wherever it takes your group, the standard is the same: background-checked chauffeur, meticulously maintained vehicle, flat rate locked at booking.',
            'For companies and event planners who book group transportation regularly, Stop & Go Airport Shuttle Service, Inc. provides a single dispatch contact for all bookings and centralized billing that keeps the administrative side simple. Your team or your clients get the same professional vehicle and chauffeur standard on every booking, whether it is a quarterly board dinner or an annual gala.',
        ]"
        ctaHeading="Ready to book your event transportation?"
        ctaBody="Get your flat-rate quote in minutes. We serve all of Will County and Chicagoland and are available 24 hours a day, 365 days a year."
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-booking-timeline
        id="special-event-timeline"
        heading="Special Event Transportation"
        headingBold="Booking Lead Times"
        intro="Most special event transportation can be arranged in a matter of days. A handful of high-demand dates require planning well ahead. Here is the booking window that works best for each type of special event."
        :items="[
            [
                'occasion' => 'New Year\'s Eve and Major Holiday Events',
                'timing'   => '2 to 3 months ahead',
                'detail'   => 'New Year\'s Eve is the single highest-demand night of the year for special event transportation. Vehicles for December 31 book out by October. Thanksgiving weekend, July 4th, and other major holiday event dates fill on a similar timeline. These are the only special event dates that require the same advance planning as weddings.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Gala Season and Formal Benefit Events',
                'timing'   => '3 to 6 weeks ahead',
                'detail'   => 'Gala season in the Chicago area peaks in the fall and spring. Popular formal event dates and charity benefit weekends fill the same vehicles that serve weddings, so earlier booking is better. Three to six weeks ahead gives us time to confirm the right vehicle, brief the chauffeur on formal attire requirements, and plan staging at the venue.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Sold-Out Concerts and Major Sporting Events',
                'timing'   => '1 to 3 weeks ahead',
                'detail'   => 'Sold-out concerts and playoff or marquee game nights generate higher transportation demand than regular events. For United Center playoff games, Wrigley Field sellouts, and headliner concerts announced months in advance, booking 2 to 3 weeks ahead secures the right vehicle while availability is still strong.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Holiday Parties and Corporate Events',
                'timing'   => '2 to 4 weeks ahead',
                'detail'   => 'November and December are competitive for group event transportation. Holiday parties and company dinners often fall on the same Friday or Saturday nights. Booking 2 to 4 weeks ahead gives you the vehicle type you need and gives us time to plan the pickup sequence for a multi-address group.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Milestone Celebrations and Reunions',
                'timing'   => '1 to 3 weeks ahead',
                'detail'   => 'Milestone birthday dinners, anniversary evenings, graduation celebrations, and group reunions can typically be arranged 1 to 3 weeks ahead. Weekend evenings in peak months fill faster, particularly for vehicles that seat 10 or more. A little extra lead time is always better for larger groups.',
                'urgency'  => 'low',
            ],
            [
                'occasion' => 'Regular Concerts and Personal Occasion Evenings',
                'timing'   => '48 hours to 1 week ahead',
                'detail'   => 'Standard concert nights, personal occasion evenings, and smaller group special events can often be arranged with 48 hours to a week of notice. For smaller groups and weeknight events, same-day or next-day bookings are possible by calling dispatch directly',
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
                'title'  => 'Tell Us About Your Event',
                'body'   => 'Call our 24/7 dispatch or complete the quick online form. Share the event type, date and time, venue, number of passengers, and any multi-stop needs. We confirm availability and provide a flat-rate quote for the full evening.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'We Plan Every Stop in Advance',
                'body'   => 'Every leg of your evening is mapped and confirmed in writing before the event date. Pickup addresses, venue arrival timing, wait windows, and the return pickup plan are all documented. On event night, nothing depends on a last-minute call.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Your Chauffeur Is There Before You Are',
                'body'   => 'Your background-checked, formally attired chauffeur is staged before the first pickup. The vehicle is detailed and ready. The return rate is the same flat rate from booking. You focus on the event. We handle everything else.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Ready to book your"
        headingBold="event transportation?"
        headingTail=""
        image="/images/sections/women-celebrating-limo.jpg"
        imageAlt="Group celebrating a special event in a Stop &amp; Go Airport Shuttle Service, Inc. luxury vehicle across Will County and Chicagoland"
        imageAspect="16/9"
        imageObjectPosition="center center"
        rightVariant="description"
        descHeading="What Every Special Event Booking Includes"
        descSubheading="The same professional standard from first pickup to final drop-off"
        descBody="Whether you are booking a gala for 6 or a group concert night for 18, here is what every Stop &amp; Go Airport Shuttle Service, Inc. special event transportation booking includes:"
        :descBullets="[
            'Background-checked, professionally trained chauffeur on every booking, arriving before the first pickup',
            'Meticulously maintained and pre-inspected vehicle, detailed and ready for your event',
            'Flat-rate, all-inclusive pricing: taxes, tolls, and the chauffeur all covered at the quoted rate',
            'No surge pricing, ever: the return pickup rate is identical to the rate locked at booking',
            'Multi-stop evening itinerary confirmed in writing before your event date',
            '24/7/365 dispatch: late-night event returns, New Year\'s Eve, sold-out concert nights all covered',
            'Vehicle right-sized to your group: sedan or limousine for smaller events, party bus or mini-coach for larger groups',
            'Service across all of Will County and Chicagoland, with a second location in Naperville for DuPage County clients',
        ]"
        descClosing="Call or get a free quote online. We serve all of Will County and Chicagoland, any hour of the day."
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
