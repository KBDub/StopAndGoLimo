<x-layouts.page
    title="Custom Signs & Banners Joliet IL | Yard Signs, Posters, Business Signs | Top 5 Percent"
    metaDescription="We print custom signs, banners, posters, yard signs, sidewalk signs, and business signs in Joliet, Shorewood, Plainfield, and Will County. Veteran owned sign shop with same day service."
    currentPage="signs">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Custom Signs"
        headingAccent="& Banners"
        description="We print professional custom signs, banners, posters, and displays for businesses and events throughout Joliet, Shorewood, Plainfield, and all of Will County. Indoor and outdoor options with premium materials and fast turnaround. Veteran owned and same day service available."
        primaryButtonText="Browse All Signs"
        primaryButtonHref="#sign-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/posters/top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="signs" displayServiceType="Custom Signs" />

    <section id="sign-categories" class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="inline-block mb-4">
                    <h2 class="text-charcoal font-bold text-h2 mb-2">Signs for Every Need</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-charcoal-light text-body max-w-3xl mx-auto">We offer a wide range of custom sign products for businesses, events, and organizations across the Chicagoland area. Whether you need a single yard sign or a full set of banners for your storefront, we have the right solution at the right price.</p>
            </div>
        </div>
    </section>

    <x-sections.lp-category-banners :banners="[
        [
            'image' => '/images/yard-signs/top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg',
            'alt'   => 'Custom yard signs and lawn signs in Joliet, Shorewood, and Crest Hill',
            'title' => 'Yard Signs',
            'href'  => '/signs/yard-signs',
        ],
        [
            'image' => '/images/sidewalk-signs/top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg',
            'alt'   => 'A frame sidewalk signs for businesses in Joliet and Romeoville',
            'title' => 'Sidewalk Signs',
            'href'  => '/signs/sidewalk-signs',
        ],
        [
            'image' => '/images/banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg',
            'alt'   => 'Custom vinyl banners for businesses in Joliet, Shorewood, and Crest Hill',
            'title' => 'Banners',
            'href'  => '/signs/banners',
        ],
        [
            'image' => '/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg',
            'alt'   => 'Custom business signs in Joliet, Plainfield, and Shorewood',
            'title' => 'Business Signs',
            'href'  => '/signs/business-signs',
        ],
        [
            'image' => '/images/posters/top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg',
            'alt'   => 'Poster printing services in Joliet, Shorewood, and Romeoville',
            'title' => 'Posters',
            'href'  => '/signs/posters',
        ],
        [
            'image' => '/images/table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg',
            'alt'   => 'Custom table cloths and table runners in Joliet Illinois',
            'title' => 'Table Runners',
            'href'  => '/signs/table-runners',
        ],
    ]" />

    <x-sections.product-grid collectionSlug="signs" />
    <x-ui.banner-testimonial
        quote="Professional business man. I am so pleased with the banners and signs he made for my church and I will definitely continue to support his business."
        name="Anita Estella"
    />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
