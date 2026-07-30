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
    "image": "https://newlenoxlimoservice.com/images/heroes/bus-rentals-for-wedding.png",
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
    "@id": "https://newlenoxlimoservice.com/core-services/wedding-service#service",
    "name": "Wedding Transportation Service",
    "serviceType": "Wedding Transportation",
    "description": "Full-day wedding transportation service across New Lenox, Joliet, Naperville, Frankfort, and all of Will County and Chicagoland. Wedding limousines, bridal party transportation, wedding party buses, guest shuttles, getaway cars, rehearsal dinner transport, airport transfers for honeymoon and out-of-town guests, and full-day coordination under one dispatch contact. Flat-rate pricing, backup vehicles in reserve, 24/7/365 dispatch.",
    "provider": {
        "@type": "LocalBusiness",
        "@id": "https://newlenoxlimoservice.com"
    },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Wedding Transportation Services",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Limousine Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bridal Party Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Party Bus" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Guest Shuttle" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Getaway Car" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wedding Airport Transport" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Rehearsal Dinner Transportation" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Full-Day Wedding Package" } }
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
    "name": "Wedding Transportation Services — Stop & Go Airport Shuttle Service, Inc.",
    "description": "Full list of wedding transportation services offered by Stop & Go Airport Shuttle Service, Inc. from New Lenox, Illinois.",
    "itemListElement": [
        {
            "@type": "ListItem", "position": 1,
            "item": {
                "@type": "Product",
                "name": "Wedding Limousine Service",
                "description": "Luxury stretch limousine for the bridal party across Will County and Chicagoland. Formally attired chauffeur, red carpet arrival, climate-controlled interior, multi-stop coordination. Book 6 to 12 months ahead for peak Saturdays.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 95, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 2,
            "item": {
                "@type": "Product",
                "name": "Bridal Party Transportation",
                "description": "Spacious, elegant transportation for the full bridal party from getting-ready through ceremony, photos, and reception. Keeps the party together and on the timeline all day.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 95, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 3,
            "item": {
                "@type": "Product",
                "name": "Wedding Party Bus",
                "description": "Luxury party bus for larger wedding parties who want to travel together and celebrate between venues. Plush wrap-around seating, premium audio, club lighting, and a background-checked chauffeur.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 95, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 4,
            "item": {
                "@type": "Product",
                "name": "Wedding Guest Shuttle",
                "description": "Guest shuttle service between hotel, ceremony, and reception for wedding guests across Will County. Timed loops, venue staging, and a single dispatch contact coordinating the full guest transportation plan.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 95, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 5,
            "item": {
                "@type": "Product",
                "name": "Wedding Getaway Car",
                "description": "Luxury getaway car staged at the reception for a grand exit. Red carpet departure, professionally attired chauffeur, and seamless coordination with the full day's transportation plan.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 95, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
            }
        },
        {
            "@type": "ListItem", "position": 6,
            "item": {
                "@type": "Product",
                "name": "Wedding Airport Transport",
                "description": "Airport transfers for the couple's honeymoon departure and for out-of-town guests arriving at O'Hare and Midway. Real-time flight tracking, meet-and-greet, luggage assistance, and 24/7/365 dispatch.",
                "brand": { "@type": "Brand", "name": "Stop & Go Airport Shuttle Service, Inc." },
                "offers": { "@type": "AggregateOffer", "offerCount": 5, "lowPrice": 95, "highPrice": 5000, "priceCurrency": "USD", "availability": "https://schema.org/InStock" }
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
        { "@@type": "ListItem", "position": 1, "name": "Home",                      "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services",             "item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "Wedding Service",           "item": "{{ request()->url() }}" }
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
            "name": "How far in advance should I book wedding transportation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We recommend booking 6 to 12 months ahead for weddings, especially for peak spring and summer Saturdays. Saturday vehicles in May through October fill faster than any other dates in our calendar. Couples at popular Will County venues often find that waiting past six months limits their vehicle selection. The sooner you book, the more flexibility you have in vehicle type and itinerary planning."
            }
        },
        {
            "@type": "Question",
            "name": "Can you handle all wedding transportation under one booking?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. can coordinate every vehicle of your wedding day under a single dispatch contact: the bridal party limousine or party bus, the newlyweds' getaway car, guest shuttles between hotel and venue, and airport transfers for out-of-town guests arriving at O'Hare or Midway. Your planner deals with one team and one bill for the full wedding transportation plan."
            }
        },
        {
            "@type": "Question",
            "name": "Do you have backup vehicles in case of a breakdown?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. maintains backup vehicles in reserve for wedding day bookings. A wedding day cannot absorb a late or unavailable vehicle, and we plan for contingencies. Our 24/7/365 dispatch manages the schedule in real time and can deploy a backup vehicle when necessary."
            }
        },
        {
            "@type": "Question",
            "name": "What venues in Will County have you worked with?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stop & Go Airport Shuttle Service, Inc. has coordinated wedding transportation at venues across Will County and Chicagoland since 2015, including the Jacob Henry Mansion in Joliet, CD & ME in Frankfort, Prestwick Country Club, Odyssey Country Club, and banquet halls and country clubs throughout New Lenox, Mokena, Tinley Park, and Orland Park. Our chauffeurs know the venue access roads, ceremony timing protocols, and quickest routes between locations."
            }
        },
        {
            "@type": "Question",
            "name": "Do you provide transportation for bachelorette parties?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. bachelorette party transportation provides a luxury limousine or party bus for the bride tribe, with multi-stop bar and venue routing across Chicagoland. The rate is set before the night starts with no surge pricing at the end, and guests 21 and over are welcome to bring their own beverages on board."
            }
        },
        {
            "@type": "Question",
            "name": "Can you pick up out-of-town guests from O'Hare or Midway?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Stop & Go Airport Shuttle Service, Inc. provides airport transportation for out-of-town wedding guests arriving at O'Hare, Midway, and Chicago Executive Airport. We track inbound flights in real time, meet guests with a name sign inside the terminal, assist with luggage, and deliver them to their hotel or venue. Multiple arrivals can be coordinated under a single dispatch contact."
            }
        }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Wedding Transportation Service | Will County &amp; Chicagoland | Stop &amp; Go Airport Shuttle Service, Inc."
    metaDescription="Full-day wedding transportation across New Lenox, Joliet, Naperville, and Will County. Wedding limousines, party buses, guest shuttles, getaway cars, and airport transfers. Coordinated under one team."
    currentPage="our-services"
    ogImage="/images/heroes/bus-rentals-for-wedding.png"
    ogImageAlt="Stop & Go Airport Shuttle Service, Inc. wedding transportation service for bridal parties and guests across Will County and Chicagoland"
>

    <x-sections.category-hero
        heading="Wedding Transportation"
        headingBold="Service"
        :headingTwoLines="false"
        subtitle="Every vehicle of your day. One team. One timeline."
        description="Stop & Go Airport Shuttle Service, Inc. has been coordinating wedding transportation across New Lenox, Joliet, Frankfort, Mokena, Naperville, and all of Will County since 2015. We are headquartered at 400 E Lincoln Hwy in New Lenox, and our wedding transportation covers every vehicle your day requires: the bridal party limousine or party bus, the newlyweds' getaway car staged at the reception for the grand exit, guest shuttles between hotel and venue, rehearsal dinner transportation the night before, airport transfers for the honeymoon departure and for out-of-town guests arriving at O'Hare and Midway, and bachelorette party transportation for the weekend before. Every wedding booking is managed by a single dispatch contact so your planner coordinates with one team, not six vendors. Every chauffeur arrives in formal attire, treats your timeline as the priority it is, and operates a meticulously maintained, fully licensed and insured vehicle. Backup vehicles are kept in reserve because a wedding day cannot absorb a late arrival. Flat-rate, all-inclusive pricing with no surge pricing keeps your wedding budget intact from booking to receipt."
        buttonText="Plan Your Wedding Transport"
        buttonHref="/get-a-quote"
        image="/images/heroes/bus-rentals-for-wedding.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="A Wedding Day Runs"
        headingBold="on the Transportation"
        subtitle=""
        body="Every wedding coordinator knows the truth: the ceremony does not start until the bridal party arrives. The reception entrance does not land the way it should unless the vehicle is staged. The guests who drove separately are late to the cocktail hour. The couple's getaway is rushed because no one confirmed where the car was parked. Stop & Go Airport Shuttle Service, Inc. wedding transportation is built around the premise that logistics handled in advance are logistics that never become problems on the day. We plan every pickup, every stop, every venue arrival, and every timing window in writing before your wedding date. Your chauffeur is briefed on the full itinerary and arrives in formal attire before the first stop. For multi-vehicle weddings, every driver is coordinated through a single dispatch contact so your planner makes one call to manage the entire transportation operation. We have worked at venues across Will County, including the Jacob Henry Mansion in Joliet, CD and ME in Frankfort, and Prestwick Country Club, and we keep backup vehicles in reserve because the one thing a wedding day cannot absorb is a vehicle that does not show up."
        buttonText="Plan Your Wedding Transport"
        buttonHref="/get-a-quote"
        image="/images/sections/wedding-limo-fleet.jpg"
        imageAlt="Stop &amp; Go Airport Shuttle Service, Inc. wedding limousine fleet ready for bridal party transportation across Will County"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="One Team."
        heading="Every Vehicle of Your Day. One Flat Rate."
        body="Coordinating wedding transportation across five different vendors means five different contracts, five different pickup confirmations, and five different phone calls if anything shifts on the day. Stop & Go Airport Shuttle Service, Inc. manages every vehicle of your wedding under a single dispatch contact, from the morning bridal party pickup through the last guest shuttle return. Pricing is flat-rate and all-inclusive across every service: the bridal party limousine, the getaway car, the guest shuttles, the airport transfers, and the rehearsal dinner run all carry one clear quote with no surge pricing, no hidden fees, and no adjustment on the wedding day."
    />

    <x-sections.limo-services-grid
        id="wedding-services"
        heading="Wedding Transportation"
        headingBold="Services We Coordinate"
        subheading="Every Vehicle Your Wedding Day Requires"
        intro="Stop & Go Airport Shuttle Service, Inc. has been coordinating wedding transportation at venues across Will County and Chicagoland since 2015. Here is a look at every wedding transportation service we provide and how each fits into a seamless day."
        :cards="[
            [
                'service' => 'Bridal Party Limousine',
                'copy'    => 'The bridal party limousine is the anchor of wedding day transportation. Stop & Go Airport Shuttle Service, Inc. wedding limousines carry the couple and their party in plush, climate-controlled comfort with ambient LED lighting and premium sound, keeping gowns and formalwear crease-free from getting-ready photos through the ceremony and beyond. Your formally attired chauffeur arrives early, rolls out a red carpet, and manages every leg of the itinerary. We have coordinated bridal party limousines at venues across Will County since 2015.',
            ],
            [
                'service' => 'Wedding Party Bus',
                'copy'    => 'For larger bridal parties who want to travel together and keep the energy high between venues, a wedding party bus is the right vehicle. Stop & Go Airport Shuttle Service, Inc. wedding party buses seat groups of all sizes in wrap-around plush seating with club-style lighting, premium audio, and room to move, turning the transitions between ceremony, photos, and reception into part of the celebration. Your background-checked chauffeur manages the full multi-stop itinerary while the party enjoys the ride.',
            ],
            [
                'service' => 'Wedding Guest Shuttle',
                'copy'    => 'A guest shuttle keeps your attendees together, eliminates parking logistics at the venue, and ensures every arrival lands on time. Stop & Go Airport Shuttle Service, Inc. wedding guest shuttles coordinate hotel loading zones, venue staging, and timed loops with a single dispatch contact. Your chauffeurs know the venue access roads and the quickest routes between hotel blocks and ceremony and reception sites across Will County. Guest shuttles pair seamlessly with bridal party and getaway car bookings under one plan.',
            ],
            [
                'service' => 'Wedding Getaway Car',
                'copy'    => 'The grand exit is the last impression of your wedding day, and the getaway car needs to be exactly right. Stop & Go Airport Shuttle Service, Inc. getaway car service stages a spotless, climate-controlled luxury vehicle at your reception for the moment you are introduced as newlyweds. Your formally attired chauffeur manages the red-carpet send-off, coordinates the timing with your venue and photographer, and takes the two of you wherever the night leads, in comfort and at a flat rate locked at booking.',
            ],
            [
                'service' => 'Rehearsal Dinner Transportation',
                'copy'    => 'The rehearsal dinner sets the tone for the wedding weekend, and Stop & Go Airport Shuttle Service, Inc. rehearsal dinner transportation keeps the wedding party and family together from the rehearsal to the dinner venue and back. No caravan, no one getting lost, and a relaxed start to the festivities. Your chauffeur arrives in professional attire, manages the full group, and keeps every arrival on time. Rehearsal dinner transportation folds naturally into a full weekend wedding transportation plan.',
            ],
            [
                'service' => 'Wedding Airport Transport',
                'copy'    => 'Out-of-town guests deserve the same professional welcome as every other part of your wedding. Stop & Go Airport Shuttle Service, Inc. wedding airport transport meets arriving guests at O\'Hare, Midway, and Chicago Executive Airport with a name sign and luggage assistance, and delivers them to their hotel or venue. Real-time flight tracking adjusts automatically to delays with no extra charge. For the couple\'s honeymoon departure, we provide door-to-terminal service at the flat rate locked when you planned the full wedding transportation.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-process-steps
        id="wedding-process"
        heading="Six Steps Toward a"
        headingBold="Flawless Wedding Day"
        intro="Wedding transportation planning starts months before the ceremony. Here is how Stop & Go Airport Shuttle Service, Inc. builds and manages every vehicle of your wedding day, from the first planning call to the final drop-off."
        :steps="[
            [
                'num'   => '01',
                'title' => 'We learn about your full wedding day',
                'body'  => 'The first call covers the big picture: your wedding date, your venue or venues, the number of vehicles you need, your approximate bridal party size, your guest count for shuttles, and any airport transfers for the honeymoon or out-of-town guests. We confirm availability for your date and recommend the right vehicle mix for the day.',
            ],
            [
                'num'   => '02',
                'title' => 'We build the vehicle plan together',
                'body'  => 'We right-size each vehicle to its role: the bridal party limousine or party bus for the wedding party, the getaway car for the couple, and the appropriate shuttle vehicle for guest count. Multi-vehicle weddings are coordinated under one dispatch contact. Every vehicle is reserved for your date and held exclusively for your booking.',
            ],
            [
                'num'   => '03',
                'title' => 'The full itinerary is built stop by stop',
                'body'  => 'Every pickup address, every venue, every timing window, and every drop-off location is documented in a confirmed written itinerary. We coordinate with your planner and venue contacts to align our timing with your ceremony and reception schedule. For guest shuttles, we map the hotel pickup sequence and venue loop.',
            ],
            [
                'num'   => '04',
                'title' => 'We confirm the full plan in the week before',
                'body'  => 'The week before your wedding, we run a full review of every vehicle, every chauffeur assignment, and every timing detail. Final headcounts are confirmed. Any late itinerary changes are incorporated. Backup vehicles are staged. Every chauffeur is briefed on their specific vehicle\'s role in the day.',
            ],
            [
                'num'   => '05',
                'title' => 'Every chauffeur arrives early in formal attire',
                'body'  => 'Our standard on wedding mornings is for every vehicle to be staged before the first pickup. The bridal party limousine is at the getting-ready location before the first photos. The guest shuttle is at the hotel loading zone before the first guests begin to gather. No one rushes because we planned to be early.',
            ],
            [
                'num'   => '06',
                'title' => 'The day runs on the plan, not improvisation',
                'body'  => 'Your single dispatch contact manages every vehicle in real time throughout the day. If the ceremony runs five minutes long, your dispatch adjusts the shuttle timing. If the couple\'s grand exit is moved up, the getaway car is ready. You plan the wedding. We manage the transportation that keeps it on time.',
            ],
        ]"
    />

    <x-sections.party-bus-occasions
        id="wedding-occasions"
        heading="Every Wedding Transportation"
        headingBold="Scenario We Handle"
        subheading="Every Occasion in the Wedding Weekend"
        intro="Stop & Go Airport Shuttle Service, Inc. wedding transportation serves every occasion from the engagement party through the honeymoon send-off. Here is a look at the wedding weekend scenarios we manage most often and what each typically includes."
        :occasions="[
            [
                'occasion' => 'The Full Wedding Day, All Vehicles',
                'copy'     => 'The most complete wedding transportation plan covers every vehicle under one dispatch contact: the morning bridal party pickup, the ceremony arrival, the photo location run, the reception entrance, the guest shuttle loops, and the getaway car send-off. Your planner coordinates with one team. Your guests experience seamless arrivals. The couple never thinks about transportation once the morning begins.',
            ],
            [
                'occasion' => 'Large Bridal Parties Moving Together',
                'copy'     => 'A bridal party of 12 or 16 needs a vehicle sized for the group. Stop & Go Airport Shuttle Service, Inc. wedding party buses and stretch limousines accommodate large parties together, eliminating the multiple-car problem that causes late arrivals and schedule gaps. The whole party loads, travels, and arrives as one, which is how the getting-ready energy carries through to the ceremony entrance.',
            ],
            [
                'occasion' => 'Out-of-Town Guests at Chicago Airports',
                'copy'     => 'Out-of-town guests arriving at O\'Hare or Midway appreciate a professional pickup the moment they land. Stop & Go Airport Shuttle Service, Inc. airport pickup for wedding guests includes name-sign meet-and-greet at baggage claim, luggage assistance, and a comfortable ride to the hotel or venue. Multiple arrivals on the same day can be coordinated and timed to minimize vehicle trips. Real-time flight tracking handles every delay automatically.',
            ],
            [
                'occasion' => 'The Rehearsal Dinner and Welcome Event',
                'copy'     => 'The night before the wedding sets the tone for the weekend. Stop & Go Airport Shuttle Service, Inc. rehearsal dinner transportation keeps the wedding party and immediate family together for the rehearsal at the ceremony site and the dinner venue afterward, arriving as a group and returning the same way. No one has to worry about driving or parking, and the night stays relaxed for everyone involved.',
            ],
            [
                'occasion' => 'The Bachelorette Weekend',
                'copy'     => 'Stop & Go Airport Shuttle Service, Inc. bachelorette transportation provides a luxury limousine or party bus for the bride tribe, with multi-stop routing across Chicago bars, restaurants, and venues. The rate is set before the night starts with no surge pricing at the end of the evening, and guests 21 and over are welcome to bring their own beverages on board. Every chauffeur is background-checked and every vehicle is meticulously maintained, so the group celebrates safely.',
            ],
            [
                'occasion' => 'The Honeymoon Airport Send-Off',
                'copy'     => 'The honeymoon departure is one last chance for everything to go exactly right. Stop & Go Airport Shuttle Service, Inc. honeymoon airport transportation provides door-to-terminal service at O\'Hare or Midway with the couple\'s bags handled from the front door through the check-in drop-off. The couple arrives at the airport relaxed, on time, and with every bag accounted for, ready for the first trip they are taking together as a married couple.',
            ],
        ]"
        ctaHref="/get-a-quote"
    />

    <x-sections.party-bus-advantage
        id="wedding-advantage"
        heading="Why One Transportation Team"
        headingBold="Beats Multiple Vendors"
        intro="Coordinating wedding transportation across three or four different vendors means three or four contracts, three or four pickup confirmations, and three or four phone calls to manage if something changes on the day. Stop & Go Airport Shuttle Service, Inc. manages every vehicle of your wedding under one dispatch contact, so your planner has one team and the couple has zero transportation concerns from morning through send-off."
        leftHeading="The One-Team Advantage"
        :checklist="[
            [
                'feature' => 'Every vehicle coordinated under one contact',
                'detail'  => 'Your planner calls one number to manage the bridal party limousine, the guest shuttles, the getaway car, and the airport runs. When the ceremony timeline shifts by ten minutes, one call adjusts every vehicle in the plan. Multiple vendors mean multiple calls and multiple chances for a timing gap.',
            ],
            [
                'feature' => 'Backup vehicles in reserve on your wedding date',
                'detail'  => 'Stop & Go Airport Shuttle Service, Inc. maintains backup vehicles for wedding day bookings. A mechanical issue that grounds a limousine on your wedding morning is not a crisis with a backup staged and ready. It is a logistic we handle before you ever find out about it.',
            ],
            [
                'feature' => 'Formally attired chauffeurs who know the venues',
                'detail'  => 'Our chauffeurs have worked at venues across Will County, including the Jacob Henry Mansion in Joliet, CD and ME in Frankfort, and Prestwick Country Club. They know the access roads, the vendor staging areas, and the quickest routes between getting-ready locations, ceremony sites, and reception venues.',
            ],
            [
                'feature' => 'Flat-rate pricing across every wedding vehicle',
                'detail'  => 'Every vehicle in your wedding transportation plan is priced flat-rate and all-inclusive. The bridal party limousine, the guest shuttles, the getaway car, and the airport runs all carry one clear quote with no surge pricing, no hidden fees, and no adjustment on the wedding day. Your transportation budget stays exactly as planned.',
            ],
        ]"
        rightHeading="A Decade of Will County Weddings"
        :rightParagraphs="[
            'Stop & Go Airport Shuttle Service, Inc. has been coordinating wedding transportation across Will County since 2015. We have worked with couples and planners at venues from the Jacob Henry Mansion in Joliet to country clubs in Frankfort, Mokena, and Tinley Park, and at banquet halls and event spaces across New Lenox, Orland Park, and the Lincoln-Way communities. That decade of local wedding experience means we arrive knowing the venue layout, the ceremony protocols, and the quickest routes without needing a GPS recalculation on the day.',
            'For couples planning larger weddings with multiple vehicles, Stop & Go Airport Shuttle Service, Inc. provides a single dispatch contact who manages the full transportation operation in real time throughout the day. Your planner receives a confirmed itinerary for every vehicle before the wedding date and a direct line to dispatch for any day-of adjustments. The couple\'s focus stays on each other. The logistics stay with us.',
            'Every Stop & Go Airport Shuttle Service, Inc. wedding booking is backed by our fully licensed and insured operation, a background-checked and formally attired chauffeur on every vehicle, and our 24/7/365 dispatch managing the schedule from the first morning pickup through the last guest shuttle. Peak spring and summer Saturdays book 6 to 12 months in advance. When in doubt, lock your date early.',
        ]"
        ctaHeading="Ready to plan your wedding transportation?"
        ctaBody="Get your flat-rate quote and check date availability. We serve all of Will County and Chicagoland and are available 24 hours a day, 365 days a year."
        ctaHref="/get-a-quote"
    />

    <x-sections.limo-booking-timeline
        id="wedding-timeline"
        heading="Wedding Transportation"
        headingBold="Booking Lead Times"
        intro="Wedding transportation books out further than any other service type because peak-season Saturdays are limited and couples compete for the same vehicles. Here is the lead time that gives you the best selection and the most flexibility for every wedding transportation need."
        :items="[
            [
                'occasion' => 'Full Wedding Day Transportation',
                'timing'   => '6 to 12 months ahead',
                'detail'   => 'Peak spring and summer Saturdays are the first to fill. Couples booking a full wedding transportation plan — bridal party, guest shuttles, getaway car, and airport transfers — should book 6 to 12 months ahead to secure every vehicle and give us time to build the full itinerary.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Bridal Party Limousine or Party Bus',
                'timing'   => '6 to 12 months ahead',
                'detail'   => 'Saturday stretch limousines and wedding party buses fill faster than any other vehicles in our fleet. If your wedding is on a Saturday in May, June, September, or October, booking 6 months ahead is the minimum recommended lead time. Many couples in peak venues book 10 to 12 months out.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Wedding Guest Shuttles',
                'timing'   => '4 to 6 months ahead',
                'detail'   => 'Guest shuttle vehicles require coordination with your hotel block and your venue, which takes time to plan properly. Booking 4 to 6 months ahead gives us time to map the hotel pickup sequence, set the timed loops, and confirm the vehicle sizing against your expected guest count.',
                'urgency'  => 'high',
            ],
            [
                'occasion' => 'Bachelorette Party Transportation',
                'timing'   => '4 to 8 weeks ahead',
                'detail'   => 'Bachelorette party limousines and party buses are most often booked 4 to 8 weeks in advance. Spring and early summer bachelorette weekends are more competitive. If your bachelorette falls on a holiday weekend or during peak prom season, book closer to 8 weeks out.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Rehearsal Dinner Transportation',
                'timing'   => '2 to 4 months ahead',
                'detail'   => 'Rehearsal dinner transportation is often booked as part of a full wedding weekend plan. If you are booking it separately, 2 to 4 months ahead is sufficient for most dates. If your rehearsal falls the Friday before a peak-season Saturday wedding, coordinate it at the same time as the wedding transportation.',
                'urgency'  => 'medium',
            ],
            [
                'occasion' => 'Wedding Airport Transport',
                'timing'   => '2 to 4 weeks ahead',
                'detail'   => 'Airport transfers for the honeymoon or for arriving guests can typically be arranged 2 to 4 weeks ahead. If multiple guests are arriving on the same day with staggered flight schedules, more coordination time is helpful. Real-time flight tracking handles delays automatically.',
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
                'title'  => 'Tell Us About Your Wedding Day',
                'body'   => 'Call our dispatch or complete the online quote form. Share your wedding date, venue or venues, estimated bridal party size, guest shuttle needs, and any airport transfers. We confirm availability and begin building your transportation plan.',
            ],
            [
                'number' => 'Step 2',
                'title'  => 'We Build the Full Day in Writing',
                'body'   => 'Every vehicle is matched and reserved. Every stop is timed. Every pickup address and venue is documented in a confirmed itinerary shared with you and your planner. The week before your wedding, we run a final review across every vehicle and every chauffeur.',
            ],
            [
                'number' => 'Step 3',
                'title'  => 'Your Team Shows Up. Your Day Runs.',
                'body'   => 'Every chauffeur is in formal attire and staged before the first pickup. Backup vehicles are in reserve. A single dispatch contact manages every vehicle in real time. You focus entirely on each other. We handle everything else.',
            ],
        ]"
    />

    <x-sections.free-instant-quote
        heading="Ready to plan your"
        headingBold="wedding transportation?"
        headingTail=""
        image="/images/sections/wedding-party-bus.jpg"
        imageAlt="Stop &amp; Go Airport Shuttle Service, Inc. wedding party bus ready for bridal party transportation across Will County and Chicagoland"
        imageAspect="16/9"
        imageObjectPosition="center center"
        rightVariant="description"
        descHeading="What Every Wedding Transportation Booking Includes"
        descSubheading="The same professional standard across every vehicle of your day"
        descBody="Whether you are booking a single bridal party limousine or coordinating every vehicle of a 200-person wedding, here is what every Stop &amp; Go Airport Shuttle Service, Inc. wedding transportation booking includes:"
        :descBullets="[
            'Formally attired, background-checked chauffeur on every vehicle, arriving before the first pickup',
            'Backup vehicles in reserve on your wedding date — a late vehicle is never something you find out about on the day',
            'Single dispatch contact coordinating every vehicle across the full wedding day',
            'Full itinerary built stop by stop and confirmed in writing before your wedding date',
            'Flat-rate, all-inclusive pricing: no surge pricing, no hidden fees, rate locked at booking',
            'Meticulously maintained and pre-inspected vehicles, detailed before your wedding morning',
            '24/7/365 dispatch managing every vehicle in real time from first pickup to final drop-off',
            'Airport transfers for out-of-town guests and honeymoon departures with real-time flight tracking',
        ]"
        descClosing="Call or get a free quote online. Peak-season Saturdays fill 6 to 12 months ahead. Lock your date early."
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" :schema="false" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
