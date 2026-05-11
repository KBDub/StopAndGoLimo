@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Apparel in Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Veteran-owned custom apparel shop in Joliet, IL offering DTF transfers, screen printing, embroidery, rhinestone, glitter, flock, foil, and specialty shirt printing with no minimums and same day service."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Custom Apparel", "item": "https://www.top5pct.com/custom-apparel" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Apparel in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/custom-apparel",
    "description": "Veteran-owned custom apparel shop in Joliet, IL offering DTF transfers, screen printing, embroidery, rhinestone, glitter, flock, foil, and specialty shirt printing with no minimums and same day service."
}
</script>
@endpush

<x-layouts.page
    title="Custom Apparel | Joliet, IL"
    metaDescription="Premium custom apparel in Joliet, IL. Custom t-shirts, DTF transfers, screen printing, embroidery, rhinestone, glitter, flock, and specialty shirts. Veteran"
    currentPage="custom-apparel"
    ogImage="/images/og-tags/top5pct-og-custom-apparel.jpg"
    ogImageAlt="Custom Apparel — T-Shirts, Hoodies & More in Joliet, IL">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Custom Apparel"
        headingAccent="Made Your Way"
        description="From custom t-shirts to corporate uniforms, we create premium apparel that represents your brand. DTF transfers, screen printing, embroidery, rhinestone, specialty inks, and more. No minimums, fast turnaround, free design help."
        primaryButtonText="Browse Apparel"
        primaryButtonHref="#apparel-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="custom-apparel" displayServiceType="Custom Apparel" />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'alt' => 'Custom shirts, hoodies, and caps printed in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg',                         'alt' => 'Custom brick textured shirts and hoodies in Joliet Illinois'],
            ['src' => '/images/reunion-shirts/toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg',          'alt' => 'Family and class reunion shirts in Joliet and Shorewood Illinois'],
            ['src' => '/images/spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg',             'alt' => 'Custom spirit wear, fan wear, and uniforms in Joliet Illinois'],
            ['src' => '/images/corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg',            'alt' => 'Corporate shirts and uniforms printed in Joliet and Shorewood Illinois'],
        ]"
        visible=3
    />

    <x-ui.banner-testimonial
        quote="They did an outstanding job on my custom shirts. I shared my concept and it was brought to life with precision and creativity. Excellent quality, great communication, and fast turnaround. I highly recommend!"
        name="Brittany Harvey"
    />
    <x-ui.banner-cta-artwork-dropzone position="right" />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.lp-category-banners
        id="apparel-categories"
        :banners="[
        [
            'image' => '/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',
            'alt'   => 'DTF transfer printing on shirts and apparel in Joliet Illinois',
            'title' => 'DTF Transfers',
            'href'  => '/custom-apparel/printing-options/dtf-printing',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg',
            'alt'   => 'Dye sublimation all-over print shirts and jerseys in Joliet Illinois',
            'title' => 'Dye Sublimation',
            'href'  => '/custom-apparel/printing-options/dye-sublimation-printing',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-shirts-with-pictures-joliet-shorewood.jpg',
            'alt'   => 'Custom screen printed shirts for groups and businesses in Joliet Illinois',
            'title' => 'Screen Printing',
            'href'  => '/custom-apparel/screen-printing',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',
            'alt'   => 'Custom embroidery for shirts, caps, and jackets in Joliet Illinois',
            'title' => 'Embroidery',
            'href'  => '/custom-apparel/embroidery',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg',
            'alt'   => 'Custom rhinestone shirts and bling apparel in Joliet Illinois',
            'title' => 'Rhinestone Shirts',
            'href'  => '/custom-apparel/rhinestone-apparel',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',
            'alt'   => 'Custom glitter print shirts and apparel in Joliet Illinois',
            'title' => 'Glitter Shirts',
            'href'  => '/custom-apparel/specialty-materials/glitter-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg',
            'alt'   => 'Custom puff print shirts with 3D raised texture in Joliet Illinois',
            'title' => 'Puff Print Shirts',
            'href'  => '/custom-apparel/specialty-materials/puff-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg',
            'alt'   => 'Custom glow in the dark shirts and apparel in Joliet Illinois',
            'title' => 'Glow In The Dark',
            'href'  => '/custom-apparel/specialty-materials/glow-in-the-dark-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg',
            'alt'   => 'Custom flock print shirts with velvet texture in Joliet Illinois',
            'title' => 'Flock Shirts',
            'href'  => '/custom-apparel/specialty-materials/flock-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg',
            'alt'   => 'Custom 3D brick textured shirts and hoodies in Joliet Illinois',
            'title' => 'Brick Shirts',
            'href'  => '/custom-apparel/specialty-materials/brick-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg',
            'alt'   => 'Custom holographic shirts with color-shifting prints in Joliet Illinois',
            'title' => 'Holographic Shirts',
            'href'  => '/custom-apparel/specialty-materials/holographic-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg',
            'alt'   => 'Custom foil print shirts and metallic apparel in Joliet Illinois',
            'title' => 'Foil Shirts',
            'href'  => '/custom-apparel/specialty-materials/foil-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg',
            'alt'   => 'Custom reflective shirts and high visibility apparel in Joliet Illinois',
            'title' => 'Reflective Shirts',
            'href'  => '/custom-apparel/specialty-materials/reflective-shirts',
        ],
        [
            'image' => '/images/reunion-shirts/toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg',
            'alt'   => 'Custom family and class reunion shirts in Joliet and Shorewood Illinois',
            'title' => 'Reunion Shirts',
            'href'  => '/custom-apparel/group-shirts/reunion-shirts',
        ],
        [
            'image' => '/images/spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg',
            'alt'   => 'Custom spirit wear, fan wear, and school uniforms in Joliet Illinois',
            'title' => 'Spirit Wear',
            'href'  => '/custom-apparel/group-shirts/spirit-wear-shirts',
        ],
        [
            'image' => '/images/corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg',
            'alt'   => 'Custom corporate shirts, polo shirts, and uniforms in Joliet Illinois',
            'title' => 'Corporate Wear',
            'href'  => '/custom-apparel/group-shirts/corporate-wear-shirts',
        ],
    ]" />

    <x-sections.card-image-with-text
        image="/images/custom-shirts/top5pct-custom-t-shirts-main.jpg"
        alt="Custom t-shirts and apparel printed at Top 5 Percent in Joliet Illinois"
        title="Your Custom Apparel Shop in Joliet, IL"
    >
        <p class="mb-4">Top 5 Percent is a veteran owned custom apparel shop serving Joliet, Shorewood, Plainfield, Crest Hill, Romeoville, and all of Will County. We offer one of the widest selections of custom decorating techniques in the Chicagoland area — from DTF transfers and screen printing to embroidery, rhinestone, glitter, flock, foil, holographic, reflective, puff, glow in the dark, and brick-style printing. Whether you need one shirt or a thousand, we can produce it with the technique that best fits your design and your budget.</p>
        <p class="mb-4">We have no minimums on any of our custom apparel services. You can order a single shirt, a small run for your team, or a large bulk order for your organization and you will receive the same level of care and quality at every quantity. Our in-house design team has over 20 years of experience and will work with you from concept to finished product at no extra charge. You do not need to arrive with a finished artwork file — just tell us what you want and we will make it happen.</p>
        <p>Same-day service is available on many of our products, making us the go-to custom apparel shop for businesses, schools, sports teams, churches, and families throughout Will County who need shirts in a hurry. Stop by our shop at 121 Springfield Avenue in Joliet or call us at (815) 349 8600 to get started today.</p>
    </x-sections.card-image-with-text>

    <x-sections.cta-quadruple-button-banner />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',       'alt' => 'Custom embroidered shirts and caps in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg',             'alt' => 'Custom vinyl shirts and heat transfer apparel in Joliet Illinois'],
            ['src' => '/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',                  'alt' => 'DTF transfer prints on shirts in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg',   'alt' => 'Custom holographic shirts in Joliet Illinois'],
        ]"
        visible=2
    />

    <x-ui.card-banner-slide-in
        image="/images/custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg"
        alt="Custom t-shirt printing at Top 5 Percent in Joliet Illinois"
        title="Same-Day Custom Shirts in Joliet"
        href="/contact"
        direction="left"
    />
    <x-ui.card-banner-slide-in
        image="/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg"
        alt="Custom embroidery and specialty apparel printing at Top 5 Percent in Joliet Illinois"
        title="Embroidery, Screen Print, DTF — We Do It All"
        href="/contact"
        direction="right"
    />

    <x-sections.product-grid collectionSlug="custom-apparel" />

    <x-ui.banner-testimonial
        quote="I was in the market for a printing company that could make shirts for my small business and Top 5 Percent, LLC was the highest rated locally when I started my search. It was a great decision as they were great to work with and did not disappoint! Ezra was very patient throughout the whole process and answered every question I had with great detail. Shirts came out great and I would use Top 5 Percent again for future orders."
        name="Ascendant Iron"
    />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Quality You Can See & Feel"
        label="Custom Apparel in Joliet, IL"
        subheading="From screen printing to embroidery, brick shirts to rhinestone designs — watch how Top 5 Percent brings your custom apparel vision to life, right here in Joliet, Illinois."
    />
    <x-sections.faq
        heading="Custom Apparel FAQs"
        label="Custom Shirts & Apparel in Joliet, IL"
        :faqs="[
            ['q' => 'What custom apparel printing techniques do you offer?', 'a' => 'We offer DTF transfers, screen printing, embroidery, dye sublimation, rhinestone, glitter, flock, foil, holographic, reflective, puff print, glow in the dark, and brick-style printing — one of the widest selections in the Chicagoland area.'],
            ['q' => 'Is there a minimum order for custom shirts?', 'a' => 'No. We have no minimum order on any custom apparel service. You can order a single shirt or a thousand and receive the same professional quality.'],
            ['q' => 'How long does it take to get custom shirts in Joliet?', 'a' => 'Many custom shirt orders are available same day or within 24 hours. Turnaround depends on quantity and technique. Call us at (815) 349-8600 to confirm availability for your order.'],
            ['q' => 'Can you print on hoodies, hats, jackets, and other garments?', 'a' => 'Yes. We print on t-shirts, hoodies, crewnecks, polo shirts, jackets, caps, and many other garments. Bring in your item or choose from our in-stock blanks.'],
            ['q' => 'What is the difference between DTF printing and screen printing?', 'a' => 'DTF (direct-to-film) transfers produce full-color photographic prints on any fabric with no setup fees, ideal for small runs. Screen printing uses stenciled ink layers and is more cost-effective for high-volume single-color designs.'],
            ['q' => 'Do you offer bulk pricing for large custom apparel orders?', 'a' => 'Yes. We offer quantity discounts on larger orders. Contact us for a custom quote based on your quantity, garment type, and printing technique.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
