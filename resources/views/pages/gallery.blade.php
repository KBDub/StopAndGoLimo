@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Gallery | Stop & Go Airport Shuttle Service, Inc. — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/gallery",
    "description": "Browse our luxury fleet of limousines, party buses, and shuttle vehicles. Serving New Lenox, Plainfield, and the Southwest suburbs."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Gallery", "item": "https://www.newlenoxlimoservice.com/gallery" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Fleet Gallery"
    metaDescription="Browse our luxury fleet of limousines, party buses, coach buses, and shuttle vehicles serving Chicagoland. Pristine vehicles for every occasion."
    currentPage="gallery"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury fleet gallery at Stop and Go Airport Shuttle Service Inc."
>

    {{-- ── 1. Hero ──────────────────────────────────────────────────── --}}
    <x-sections.category-hero
        heading="Our"
        headingBold="Fleet and Service Gallery"
        :headingTwoLines="false"
        subtitle="See every vehicle we offer, inside and out"
        description="Stop & Go Airport Shuttle Service, Inc. operates one of the most well-maintained private transportation fleets in the Chicago metropolitan area. Browse executive sedans and full-size luxury SUVs for airport and corporate travel, Mercedes Sprinter vans for wedding guests and teams, stretch limousines for proms and quinceañeras, and party buses and coach buses for large group celebrations. Every vehicle in our gallery is inspected and detailed before every trip. Our uniformed chauffeurs take pride in presenting a vehicle that reflects the quality of our service. Browse our fleet and find the right match for your next occasion."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/gallery/fleet-chevy-suburban-black-front-driveway.jpg"
        imagePosition="center center"
    />

    {{-- ── 2. slideIn-L — Our Fleet ────────────────────────────────── --}}
    <x-ui.card-banner-slide-in
        image="/images/gallery/fleet-cadillac-escalade-stretch-white-street.jpg"
        alt="Cadillac Escalade stretch limousine on the street"
        title="Our Fleet"
        href="#our-fleet"
        direction="left"
    />

    {{-- ── 3. slideIn-R — Weddings and Chauffeur ───────────────────── --}}
    <x-ui.card-banner-slide-in
        image="/images/gallery/clients-wedding-couple-outside-suv-trees.jpg"
        alt="Wedding couple outside a luxury SUV surrounded by trees"
        title="Weddings and Chauffeur"
        href="#weddings"
        direction="right"
    />

    <x-ui.banner-thin-champagne />


    {{-- ── 4. Sticky section-index strip ──────────────────────────── --}}
    <div style="background: var(--navy); border-top: 1px solid rgba(255,255,255,0.07); border-bottom: 1px solid rgba(255,255,255,0.07); position: sticky; top: 80px; z-index: 40;">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap justify-center">
                <x-ui.service-thin-rect-card :horizontal="true" label="Our Fleet"              href="#our-fleet" />
                <x-ui.service-thin-rect-card :horizontal="true" label="Weddings"               href="#weddings" />
                <x-ui.service-thin-rect-card :horizontal="true" label="Professional Chauffeur" href="#chauffeur" />
                <x-ui.service-thin-rect-card :horizontal="true" label="Our Clients"            href="#our-clients" />
                <x-ui.service-thin-rect-card :horizontal="true" label="Our Story"              href="#our-story" />
            </div>
        </div>
    </div>

    <div style="height: 3.5rem; background: var(--navy-dark);"></div>

    {{-- ── 5. Mini About Us — 2 pics, 1 row, no carousel ──────────── --}}
    <section id="about-us-mini" style="background: var(--navy-dark); scroll-margin-top: 80px;" class="py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <img
                    src="/images/gallery/about-vincent-new-lenox-ribbon-cutting-award.jpg"
                    alt="Owner Vincent with Emily Johnson at the New Lenox Chamber ribbon cutting"
                    class="w-full object-cover"
                    style="aspect-ratio: 4/3;"
                    loading="lazy"
                >
                <img
                    src="/images/gallery/clients-womens-group-inside-party-bus-daytime.jpg"
                    alt="Group of women celebrating inside a Stop and Go party bus"
                    class="w-full object-cover"
                    style="aspect-ratio: 4/3;"
                    loading="lazy"
                >
            </div>
        </div>
    </section>

    {{-- ── 6. Our Fleet ─────────────────────────────────────────────── --}}
    @php
    $fleetRowA = [
        ['src' => '/images/gallery/fleet-mercedes-sprinter-black-chicago-skyline.jpg', 'alt' => 'Mercedes Sprinter van against the Chicago skyline'],
        ['src' => '/images/gallery/fleet-chevy-suburban-black-front-driveway.jpg',     'alt' => 'Chevrolet Suburban luxury SUV in driveway'],
        ['src' => '/images/gallery/fleet-lincoln-mkx-suv-black-promo.jpg',             'alt' => 'Lincoln MKX luxury SUV promo shot'],
        ['src' => '/images/gallery/fleet-cadillac-xt5-white-front-driveway.jpg',       'alt' => 'Cadillac XT5 white luxury SUV in driveway'],
    ];
    $fleetRowB = [
        ['src' => '/images/gallery/interior-party-bus-bar-blue-lighting.jpg',           'alt' => 'Party bus bar with blue LED lighting'],
        ['src' => '/images/gallery/interior-party-bus-bar-blue-lighting-2.jpg',         'alt' => 'Party bus interior bar area with blue lighting'],
        ['src' => '/images/gallery/interior-escalade-stretch-black-leather-sunroof.jpg','alt' => 'Escalade stretch interior with black leather seating and sunroof'],
    ];
    $fleetRowD = [
        ['src' => '/images/gallery/fleet-sprinter-vans-suv-sedan-lineup-building.jpg',  'alt' => 'Full lineup of Sprinter vans, SUV, and sedan at building'],
        ['src' => '/images/gallery/fleet-lincoln-mkt-transit-van-pair-black.jpg',        'alt' => 'Pair of Lincoln MKT transit vans in black'],
        ['src' => '/images/gallery/fleet-sprinter-van-black-studio-shot.jpg',            'alt' => 'Mercedes Sprinter van black studio shot'],
        ['src' => '/images/gallery/fleet-sprinter-van-pair-black-parking.jpg',           'alt' => 'Pair of black Sprinter vans in parking lot'],
        ['src' => '/images/gallery/fleet-mercedes-sprinter-black-door-open-grass.jpg',   'alt' => 'Mercedes Sprinter black with door open on grass'],
    ];
    $fleetRowE = [
        ['src' => '/images/gallery/interior-party-bus-black-leather-bench-speakers.jpg', 'alt' => 'Party bus interior with black leather bench seating and speakers'],
        ['src' => '/images/gallery/interior-lincoln-navigator-rear-seat-black.jpg',       'alt' => 'Lincoln Navigator rear seat black leather interior'],
        ['src' => '/images/gallery/interior-lincoln-navigator-rear-seat-black-2.jpg',     'alt' => 'Lincoln Navigator rear seat alternate view'],
        ['src' => '/images/gallery/interior-lincoln-navigator-front-console-wood.jpg',    'alt' => 'Lincoln Navigator front console with wood trim'],
    ];
    $fleetRowF = [
        ['src' => '/images/gallery/interior-ford-transit-passenger-rows-gray.jpg',       'alt' => 'Ford Transit passenger rows gray interior'],
        ['src' => '/images/gallery/interior-sprinter-van-passenger-rows.jpg',            'alt' => 'Sprinter van passenger rows interior'],
        ['src' => '/images/gallery/interior-sprinter-van-front-cab-seats.jpg',           'alt' => 'Sprinter van front cab and seats'],
        ['src' => '/images/gallery/interior-stretch-limo-door-open-entry.jpg',           'alt' => 'Stretch limousine door open entry view'],
        ['src' => '/images/gallery/fleet-cadillac-xt5-white-front-2.jpg',               'alt' => 'Cadillac XT5 white luxury SUV alternate view'],
        ['src' => '/images/gallery/fleet-chevy-suburban-black-rear-street.jpg',         'alt' => 'Chevrolet Suburban black rear view on street'],
    ];
    @endphp

    <section id="our-fleet" style="background: var(--navy); scroll-margin-top: 80px;" class="py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div style="width: fit-content; margin-bottom: 1.5rem;">
                <h2 class="font-head" style="font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 400; color: var(--cloud-light); line-height: 1.15; letter-spacing: 0.3px;">
                    Our <strong style="font-weight: 700; color: var(--champagne);">Fleet</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
            </div>
            <p class="font-body" style="font-size: 1.125rem; color: var(--cloud); line-height: 1.7; max-width: 62ch; margin-bottom: 2rem;">
                Every vehicle in our fleet is maintained to the highest standard. From executive sedans and full-size SUVs to Mercedes Sprinter vans, stretch limousines, and party buses, we have the right ride for every occasion. Serving greater Chicagoland with a fleet built for luxury, comfort, and professionalism.
            </p>

            <div class="space-y-8">
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$fleetRowA" :visible="3" :interval="3800" />
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$fleetRowB" :visible="2" :interval="4000" />

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <img
                        src="/images/gallery/fleet-full-lineup-parking-lot-mixed.jpg"
                        alt="Full lineup of Stop and Go fleet vehicles in parking lot"
                        class="w-full object-cover"
                        style="aspect-ratio: 16/9;"
                        loading="lazy"
                    >
                    <img
                        src="/images/gallery/fleet-party-bus-chicago-skyline-night.jpg"
                        alt="Stop and Go party bus against the Chicago skyline at night"
                        class="w-full object-cover"
                        style="aspect-ratio: 16/9;"
                        loading="lazy"
                    >
                </div>

                <x-ui.carousel-rotating-images :chip-nav="true" :images="$fleetRowD" :visible="3" :interval="3600" />
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$fleetRowE" :visible="3" :interval="4200" />
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$fleetRowF" :visible="3" :interval="3500" />
            </div>

        </div>
    </section>

    {{-- ── 7. Weddings ──────────────────────────────────────────────── --}}
    @php
    $weddingRowA = [
        ['src' => '/images/gallery/clients-wedding-couple-outside-suv-trees.jpg',        'alt' => 'Wedding couple outside luxury SUV surrounded by trees'],
        ['src' => '/images/gallery/clients-wedding-couple-outside-transit-van.jpg',      'alt' => 'Wedding couple outside black transit van'],
        ['src' => '/images/gallery/clients-wedding-couple-party-bus-entry.jpg',          'alt' => 'Wedding couple at party bus entry'],
        ['src' => '/images/gallery/clients-wedding-couple-limo-interior-dance-floor.jpg','alt' => 'Wedding couple inside limousine with dance floor'],
        ['src' => '/images/gallery/clients-wedding-bride-sprinter-doorway.jpg',          'alt' => 'Bride in Sprinter van doorway'],
        ['src' => '/images/gallery/promo-wedding-chauffeur-service-collage.jpg',         'alt' => 'Wedding chauffeur service collage'],
    ];
    $weddingRowB = [
        ['src' => '/images/gallery/clients-wedding-bridesmaids-green-dresses-inside-bus.jpg',   'alt' => 'Bridesmaids in green dresses inside party bus'],
        ['src' => '/images/gallery/clients-wedding-bridesmaids-green-dresses-inside-bus-2.jpg', 'alt' => 'Bridesmaids in green dresses inside bus alternate view'],
        ['src' => '/images/gallery/clients-wedding-bridesmaids-inside-limo.jpg',                'alt' => 'Bridesmaids inside stretch limousine'],
        ['src' => '/images/gallery/clients-bridal-party-inside-sprinter.jpg',                   'alt' => 'Bridal party inside Mercedes Sprinter'],
        ['src' => '/images/gallery/clients-bridal-party-outside-sprinter.jpg',                  'alt' => 'Bridal party outside Mercedes Sprinter'],
    ];
    @endphp

    <section id="weddings" style="background: var(--navy-dark); scroll-margin-top: 80px;" class="py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div style="width: fit-content; margin-bottom: 1.5rem;">
                <h2 class="font-head" style="font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 400; color: var(--cloud-light); line-height: 1.15; letter-spacing: 0.3px;">
                    Wedding <strong style="font-weight: 700; color: var(--champagne);">Transportation</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
            </div>
            <p class="font-body" style="font-size: 1.125rem; color: var(--cloud); line-height: 1.7; max-width: 62ch; margin-bottom: 2rem;">
                Your wedding day deserves a ride that matches the moment. We handle airport pickup for out-of-town guests, transportation for the wedding party, and a grand exit for the newlyweds. From the rehearsal dinner to the day after, we are with you every step of the way.
            </p>

            <div class="space-y-8">
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$weddingRowA" :visible="3" :interval="3800" />
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$weddingRowB" :visible="2" :interval="4000" />

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <img
                        src="/images/gallery/clients-bride-exiting-sprinter-van.jpg"
                        alt="Bride exiting a Stop and Go Sprinter van on her wedding day"
                        class="w-full object-cover"
                        style="aspect-ratio: 4/3;"
                        loading="lazy"
                    >
                    <img
                        src="/images/gallery/clients-bride-seated-limo-bouquet.png"
                        alt="Bride seated inside stretch limousine holding wedding bouquet"
                        class="w-full object-cover"
                        style="aspect-ratio: 4/3;"
                        loading="lazy"
                    >
                </div>
            </div>

        </div>
    </section>

    {{-- ── 8. Professional Chauffeur ────────────────────────────────── --}}
    @php
    $chauffeurRowA = [
        ['src' => '/images/gallery/promo-airport-transfer-passengers-private-jet.jpg',  'alt' => 'Airport transfer passengers beside private jet'],
        ['src' => '/images/gallery/promo-private-jet-sedan-tarmac-render.jpg',          'alt' => 'Private jet and luxury sedan on tarmac'],
        ['src' => '/images/gallery/fleet-lincoln-mkx-black-grille-closeup.jpg',         'alt' => 'Lincoln MKX black grille closeup'],
        ['src' => '/images/gallery/fleet-chevy-suburban-black-promo-graphic.jpg',       'alt' => 'Chevrolet Suburban black promo graphic'],
        ['src' => '/images/gallery/fleet-lincoln-mkt-sedan-front-white.jpg',            'alt' => 'Lincoln MKT white executive sedan front view'],
    ];
    $chauffeurRowB = [
        ['src' => '/images/gallery/clients-prom-couple-outside-black-suv.jpg',          'alt' => 'Prom couple outside black luxury SUV'],
        ['src' => '/images/gallery/clients-prom-group-inside-transit-van.jpg',          'alt' => 'Prom group inside transit van'],
        ['src' => '/images/gallery/clients-casual-group-outside-black-transit-van.jpg', 'alt' => 'Group of guests outside black transit van'],
        ['src' => '/images/gallery/about-owner-vincent-rover-transit-van.jpg',          'alt' => 'Owner Vincent beside a Stop and Go transit van'],
    ];
    @endphp

    <section id="chauffeur" style="background: var(--navy); scroll-margin-top: 80px;" class="py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div style="width: fit-content; margin-bottom: 1.5rem;">
                <h2 class="font-head" style="font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 400; color: var(--cloud-light); line-height: 1.15; letter-spacing: 0.3px;">
                    Professional <strong style="font-weight: 700; color: var(--champagne);">Chauffeur Service</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
            </div>
            <p class="font-body" style="font-size: 1.125rem; color: var(--cloud); line-height: 1.7; max-width: 62ch; margin-bottom: 2rem;">
                On time, every time. Our uniformed chauffeurs are trained professionals who take pride in safe, private, and discreet service. Whether you need a private airport transfer, a corporate car for an executive, or a town car for a special evening, we deliver a flawless experience from the moment you book.
            </p>

            <div class="space-y-8">
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$chauffeurRowA" :visible="3" :interval="4000" />
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$chauffeurRowB" :visible="2" :interval="3700" />
            </div>

        </div>
    </section>

    {{-- ── 9. Our Clients ───────────────────────────────────────────── --}}
    @php
    $clientsRowA = [
        ['src' => '/images/gallery/clients-anniversary-party-group-inside-bus.jpg',        'alt' => 'Anniversary party group inside luxury bus'],
        ['src' => '/images/gallery/clients-anniversary-party-group-sprinter-exterior.jpg', 'alt' => 'Anniversary party group outside Sprinter van'],
        ['src' => '/images/gallery/clients-anniversary-party-group-sprinter-exterior-2.jpg','alt'=> 'Anniversary party group outside Sprinter alternate view'],
        ['src' => '/images/gallery/clients-quinceanera-blue-gown-crown-sprinter-exterior.jpg','alt'=>'Quinceañera guest in blue gown and crown outside Sprinter'],
        ['src' => '/images/gallery/clients-quinceanera-group-sprinter-exterior.jpg',       'alt' => 'Quinceañera group outside Sprinter van'],
        ['src' => '/images/gallery/clients-bolingbrook-chamber-group-sprinter.jpg',        'alt' => 'Bolingbrook Chamber of Commerce group outside Sprinter'],
    ];
    $clientsRowB = [
        ['src' => '/images/gallery/clients-family-group-inside-party-bus.jpg',             'alt' => 'Family group inside Stop and Go party bus'],
        ['src' => '/images/gallery/clients-womens-group-inside-party-bus-daytime.jpg',     'alt' => "Women's group inside party bus during daytime"],
        ['src' => '/images/gallery/clients-prom-couple-outside-black-suv.jpg',             'alt' => 'Prom couple outside black luxury SUV'],
        ['src' => '/images/gallery/clients-prom-group-inside-transit-van.jpg',             'alt' => 'Prom group inside transit van'],
    ];
    $clientsRowC = [
        ['src' => '/images/gallery/clients-casual-group-outside-black-transit-van.jpg',      'alt' => 'Casual group of guests outside black transit van'],
        ['src' => '/images/gallery/about-new-lenox-ribbon-cutting-ceremony-village-hall.jpg','alt' => 'New Lenox ribbon cutting ceremony at village hall'],
        ['src' => '/images/gallery/about-joliet-chamber-ribbon-cutting.jpg',                 'alt' => 'Joliet Chamber of Commerce ribbon cutting event'],
    ];
    @endphp

    <section id="our-clients" style="background: var(--navy-dark); scroll-margin-top: 80px;" class="py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div style="width: fit-content; margin-bottom: 1.5rem;">
                <h2 class="font-head" style="font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 400; color: var(--cloud-light); line-height: 1.15; letter-spacing: 0.3px;">
                    Our <strong style="font-weight: 700; color: var(--champagne);">Clients</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
            </div>
            <p class="font-body" style="font-size: 1.125rem; color: var(--cloud); line-height: 1.7; max-width: 62ch; margin-bottom: 2rem;">
                From prom nights and quinceañeras to anniversary parties and corporate events, our clients come from all walks of life across Chicagoland. Their smiles say it all. We are proud to be part of so many special moments.
            </p>

            <div class="space-y-8">
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$clientsRowA" :visible="3" :interval="3800" />
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$clientsRowB" :visible="2" :interval="4200" />
                <x-ui.carousel-rotating-images :chip-nav="true" :images="$clientsRowC" :visible="3" :interval="3600" />
            </div>

        </div>
    </section>

    {{-- ── 10. Our Story ────────────────────────────────────────────── --}}
    <section id="our-story" style="background: var(--navy); scroll-margin-top: 80px;" class="py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div style="width: fit-content; margin-bottom: 1.5rem;">
                <h2 class="font-head" style="font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 400; color: var(--cloud-light); line-height: 1.15; letter-spacing: 0.3px;">
                    Our <strong style="font-weight: 700; color: var(--champagne);">Story</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
            </div>
            <p class="font-body" style="font-size: 1.125rem; color: var(--cloud); line-height: 1.7; max-width: 62ch; margin-bottom: 2rem;">
                Stop and Go Airport Shuttle Service, Inc. was founded on a simple idea: everyone deserves a comfortable, reliable, and professional ride. Based in New Lenox, Illinois, we have grown into a trusted transportation partner for families, businesses, and event planners across the Chicago metropolitan area. We are proud members of the New Lenox and Bolingbrook Chambers of Commerce.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <img
                    src="/images/gallery/about-new-lenox-chamber-ribbon-cutting-certificate-2024.jpg"
                    alt="New Lenox Chamber of Commerce ribbon cutting certificate 2024"
                    class="w-full object-cover"
                    style="aspect-ratio: 4/3;"
                    loading="lazy"
                >
                <img
                    src="/images/gallery/about-vincent-new-lenox-ribbon-cutting-award.jpg"
                    alt="Owner Vincent with Emily Johnson at New Lenox Chamber ribbon cutting award ceremony"
                    class="w-full object-cover"
                    style="aspect-ratio: 4/3;"
                    loading="lazy"
                >
                <img
                    src="/images/gallery/about-bolingbrook-chamber-member-plaque-2024.jpg"
                    alt="Bolingbrook Chamber of Commerce member plaque 2024"
                    class="w-full object-cover"
                    style="aspect-ratio: 4/3;"
                    loading="lazy"
                >
                <img
                    src="/images/gallery/clients-womens-group-inside-party-bus-daytime.jpg"
                    alt="Group of women celebrating inside a Stop and Go party bus"
                    class="w-full object-cover"
                    style="aspect-ratio: 4/3;"
                    loading="lazy"
                >
            </div>

        </div>
    </section>

    {{-- ── Footer stack ─────────────────────────────────────────────── --}}
    <x-sections.review-slider />
    <x-sections.areas-we-serve />
    <x-sections.faq />
    <x-sections.map-contact-section />
    <x-sections.base-footer />

</x-layouts.page>
