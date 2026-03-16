<x-layouts.page title="Custom Apparel" metaDescription="Premium custom apparel in Joliet, IL. Custom t-shirts, DTF transfers, screen printing, embroidery, corporate uniforms, spirit wear, and reunion shirts. Veteran owned, no minimums, same day service." currentPage="custom-apparel">
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Custom Apparel"
        headingAccent="Made Your Way"
        description="From custom t-shirts to corporate uniforms, we create premium apparel that represents your brand. DTF transfers, screen printing, embroidery, and more. No minimums, fast turnaround."
        primaryButtonText="Shop Now"
        primaryButtonHref="#all-products"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="custom-apparel" displayServiceType="Custom Apparel" />

    <x-sections.lp-category-banners :banners="[
        [
            'image' => '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg',
            'alt'   => 'Custom shirts, hoodies, and caps in Joliet',
            'title' => 'Custom Shirts',
            'href'  => '/custom-apparel/custom-shirts',
        ],
        [
            'image' => '/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',
            'alt'   => 'DTF transfers printing in Joliet',
            'title' => 'DTF Transfers',
            'href'  => '/custom-apparel/dtf-transfers',
        ],
        [
            'image' => '/images/reunion-shirts/toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg',
            'alt'   => 'Family and class reunion shirts in Joliet and Shorewood',
            'title' => 'Reunion Shirts',
            'href'  => '/custom-apparel/reunion-shirts',
        ],
        [
            'image' => '/images/corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg',
            'alt'   => 'Corporate shirts and uniforms in Joliet and Shorewood',
            'title' => 'Corporate Wear',
            'href'  => '/custom-apparel/corporate-wear',
        ],
        [
            'image' => '/images/spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg',
            'alt'   => 'Fan wear, spirit wear, and uniforms in Joliet and Shorewood',
            'title' => 'Spirit Wear',
            'href'  => '/custom-apparel/spirit-wear',
        ],
    ]" />
    <x-sections.product-grid collectionSlug="custom-apparel" />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
