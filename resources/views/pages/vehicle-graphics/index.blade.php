<x-layouts.page
    title="Vehicle Graphics & Wraps Joliet IL | Car Wraps, Truck Lettering, Vehicle Magnets, DOT Decals | Top 5 Percent"
    metaDescription="We design and install custom vehicle graphics, car wraps, vinyl lettering, vehicle magnets, and DOT compliance decals in Joliet, Shorewood, Channahon, and all of Will County. Veteran owned."
    currentPage="vehicle-graphics">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Vehicle Graphics"
        headingAccent="& Wraps"
        description="We design and install custom vehicle graphics, car wraps, vinyl lettering, vehicle magnets, and DOT compliance decals for businesses and individuals throughout Joliet, Shorewood, Channahon, Rockdale, and all of Will County. Turn your vehicle into a mobile billboard today."
        primaryButtonText="Browse Vehicle Graphics"
        primaryButtonHref="#vehicle-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="vehicle-graphics" displayServiceType="Vehicle Graphics" />

    <section id="vehicle-categories" class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="inline-block mb-4">
                    <h2 class="text-charcoal font-bold text-h2 mb-2">Graphics for Every Vehicle</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-charcoal-light text-body max-w-3xl mx-auto">We produce vehicle graphics for cars, vans, trucks, trailers, boats, and commercial fleets throughout the Chicagoland area. Whether you need a full wrap, simple vinyl lettering, removable magnetic signs, or DOT compliance decals, we have the equipment and the experience to get it done right.</p>
            </div>
        </div>
    </section>

    <x-sections.lp-category-banners :banners="[
        [
            'image' => '/images/automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg',
            'alt'   => 'Custom car wraps and vinyl lettering for vehicles in Joliet Illinois',
            'title' => 'Automobile Graphics',
            'href'  => '/vehicle-graphics/automobile-graphics',
        ],
        [
            'image' => '/images/vehicle-magnets/top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg',
            'alt'   => 'Custom vehicle magnets and car magnets in Joliet, Shorewood, and Crest Hill Illinois',
            'title' => 'Vehicle Magnets',
            'href'  => '/vehicle-graphics/vehicle-magnets',
        ],
        [
            'image' => '/images/dot-decals/top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg',
            'alt'   => 'DOT stickers and USDOT compliance decals for trucks in Joliet, Shorewood, and Channahon Illinois',
            'title' => 'DOT Decals',
            'href'  => '/vehicle-graphics/dot-decals',
        ],
    ]" />

    <x-sections.product-grid collectionSlug="vehicle-graphics" />
    <x-ui.banner-testimonial
        quote="Top 5 Percent did an awesome job for us. First they created and produced two door magnets for our car and then they created, produced and installed decals on our business truck. They do very nice work, have very fair pricing and communicate well! I will definitely be back."
        name="Ken McCafferty"
    />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
