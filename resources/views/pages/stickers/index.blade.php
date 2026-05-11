@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Stickers in Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Veteran-owned sticker printing in Joliet, IL. Standard stickers, die-cut custom shapes, weatherproof vinyl, product labels, and business decals with no minimums and same day service."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Stickers", "item": "https://www.top5pct.com/stickers" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Stickers in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/stickers",
    "description": "Veteran-owned sticker printing in Joliet, IL. Standard stickers, die-cut custom shapes, weatherproof vinyl, product labels, and business decals with no minimums and same day service."
}
</script>
@endpush

<x-layouts.page
    title="Custom Stickers | Joliet, IL"
    metaDescription="We print custom stickers in Joliet, Shorewood, Plainfield, and Will County. Standard stickers, die cut custom shapes, weatherproof vinyl. No minimums. Veteran"
    currentPage="stickers"
    ogImage="/images/og-tags/top5pct-og-stickers.jpg"
    ogImageAlt="Custom Stickers & Decals in Joliet, IL — Top 5 Percent">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Custom Stickers"
        headingAccent="Any Shape, Any Size"
        description="We print premium custom stickers for businesses, events, sports teams, and personal use throughout Joliet, Shorewood, Plainfield, and Will County. Standard sizes and fully custom die-cut shapes available. No minimums, full color, weatherproof vinyl, and same day service available."
        primaryButtonText="Browse Stickers"
        primaryButtonHref="#sticker-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/stickers-decals/top5pct-banner-stickers-decals-joliet.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="stickers" displayServiceType="Custom Stickers" />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/stickers-decals/top5pct-banner-stickers-decals-joliet.jpg',       'alt' => 'Custom stickers and decals printed in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-beer-brewery.jpg', 'alt' => 'Custom stickers for a beer brewery in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg','alt' => 'Custom stickers and decals for sports and fitness in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-volleyball-team.jpg','alt' => 'Custom stickers for a volleyball team in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-labels.jpg',       'alt' => 'Custom product labels and business stickers in Joliet Illinois'],
        ]"
        visible=3
    />

    <x-ui.banner-testimonial
        quote="The owner Ezra was extremely knowledgeable and helpful. He gave great marketing ideas for my stickers. The quality of my product was top of the line. I would recommend Top 5 Percent to any business or organization that needs print services."
        name="Eric Murff"
    />

    <x-sections.lp-category-banners
        id="sticker-categories"
        :banners="[
        [
            'image' => '/images/stickers-decals/top5pct-stickers-decals-joliet-beer-brewery.jpg',
            'alt'   => 'Standard custom stickers printed for businesses in Joliet Illinois',
            'title' => 'Standard Stickers',
            'href'  => '/stickers/standard-stickers-decals',
        ],
        [
            'image' => '/images/stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg',
            'alt'   => 'Custom shaped die cut stickers printed in Joliet Illinois',
            'title' => 'Custom Shaped Stickers',
            'href'  => '/stickers/custom-shaped-stickers-decals',
        ],
    ]" />

    <x-sections.card-image-with-text
        image="/images/stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg"
        alt="Custom stickers and decals for businesses and events in Joliet Illinois"
        title="Custom Stickers for Business, Events, and Personal Use"
    >
        <p class="mb-4">Top 5 Percent prints custom stickers and decals for businesses, sports teams, organizations, and individuals throughout Joliet, Shorewood, Plainfield, and Will County. A well-designed custom sticker is one of the most versatile and cost-effective branding tools available. You can stick them on product packaging, hand them out at events, include them in order shipments, apply them to storefront windows, or give them away to build community around your brand. Breweries, restaurants, retail stores, gyms, and service businesses across Will County use our stickers to put their brand in the hands of their customers every day.</p>
        <p class="mb-4">We print on premium adhesive vinyl with crisp, full-color output that is weatherproof, fade-resistant, and durable. Standard rectangular, square, circle, and oval stickers are available, as well as fully custom die-cut shapes that cut directly around the outline of your design. Die-cut stickers make your brand look polished and professional, and they work on any smooth surface — laptops, water bottles, vehicle windows, packaging, and anywhere else your customers carry them.</p>
        <p>No minimums means you can order exactly what you need, whether that is five stickers for a small event or five thousand labels for a product launch. Same-day service is available on many sticker orders. Call us at (815) 349 8600 or stop by 121 Springfield Avenue in Joliet to place your order today.</p>
    </x-sections.card-image-with-text>

    <x-sections.cta-quadruple-button-banner />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg', 'alt' => 'Custom stickers for a BBQ restaurant in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-article-buy-stickers-decals-joliet.jpg',     'alt' => 'Buy custom stickers and decals in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-labels.jpg',          'alt' => 'Custom product labels and stickers in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg',   'alt' => 'Sports stickers and custom decals for gyms in Joliet Illinois'],
        ]"
        visible=2
    />

    <x-ui.card-banner-slide-in
        image="/images/stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg"
        alt="Custom stickers and decals printed at Top 5 Percent in Joliet Illinois"
        title="Custom Stickers Any Shape in Joliet"
        href="/contact"
        direction="right"
    />
    <x-ui.card-banner-slide-in
        image="/images/stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg"
        alt="Custom die cut stickers and labels printed by Top 5 Percent in Joliet Illinois"
        title="Die Cut Stickers for Businesses and Creators"
        href="/contact"
        direction="left"
    />

    <x-sections.product-grid collectionSlug="stickers" />

    <x-ui.banner-testimonial
        quote="I've done business with these guys several times and I've always been very pleased. They do great work."
        name="Jermaine"
    />

    <x-sections.why-choose-us />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Stickers for Every Surface"
        label="Custom Stickers in Joliet, IL"
        subheading="From product labels to promotional stickers and laptop decals — see how Top 5 Percent produces high-quality custom stickers for businesses, brands, and events in Joliet, Illinois."
    />
    <x-sections.faq
        heading="Custom Stickers FAQs"
        label="Custom Stickers in Joliet, IL"
        :faqs="[
            ['q' => 'What is the difference between standard stickers and die-cut stickers?', 'a' => 'Standard stickers are cut into a rectangle, square, circle, or oval around your design. Die-cut stickers are cut to follow the exact outline of your artwork, giving them a premium, polished look with no border.'],
            ['q' => 'Are your custom stickers weatherproof and waterproof?', 'a' => 'Yes. We print on premium adhesive vinyl with UV-resistant, waterproof inks. Our stickers hold up on outdoor surfaces, vehicles, water bottles, and anywhere else they are exposed to the elements.'],
            ['q' => 'Is there a minimum order for custom stickers?', 'a' => 'No. We have no minimum order. You can order as few as one sticker or as many as several thousand labels for a product launch, all at the same professional quality.'],
            ['q' => 'Can you print custom product labels for my business?', 'a' => 'Yes. We print full-color product labels on adhesive vinyl for food and beverage, cosmetics, retail products, and any other labeling application. Bring your design or let us create one for you.'],
            ['q' => 'How fast can I get custom stickers printed in Joliet?', 'a' => 'Many sticker orders are available same day. Call us at (815) 349-8600 with your size, quantity, and design so we can confirm turnaround before you come in.'],
            ['q' => 'What file format do you need for custom sticker orders?', 'a' => 'We prefer vector files (AI, EPS, PDF with outlined text) for the sharpest results. We also accept high-resolution JPG and PNG files at 300 DPI or higher. If you do not have a file, our design team can create or recreate your artwork.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
