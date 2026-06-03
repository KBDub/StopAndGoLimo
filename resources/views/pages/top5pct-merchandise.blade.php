<x-layouts.page
    title="Top 5% Merchandise"
    metaDescription="Shop Top 5 Percent branded merchandise. Premium t-shirts, hoodies, hats, and accessories representing the Top 5% lifestyle. Veteran owned, Joliet IL."
    currentPage="store">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Top 5% Merchandise"
        headingAccent="Rep the Brand"
        description="Shop the exclusive Top 5 Percent merchandise collection. Premium t-shirts, hoodies, hats, and accessories that represent the standard of excellence our brand is built on."
        primaryButtonText="Shop Now"
        primaryButtonHref="#all-products"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/custom-shirts/top5pct-custom-t-shirts-main.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="merchandise" displayServiceType="Merchandise" />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/custom-shirts/top5pct-custom-t-shirts-main.jpg',                                          'alt' => 'Top 5 Percent branded t-shirts and apparel'],
            ['src' => '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'alt' => 'Custom branded shirts, hoodies, and caps representing the Top 5% lifestyle'],
            ['src' => '/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg',                        'alt' => 'Premium foil print shirts from Top 5 Percent in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg',                    'alt' => 'Premium holographic shirts from Top 5 Percent in Joliet Illinois'],
        ]"
        visible=3
    />

    <x-ui.banner-testimonial
        quote="Amazing service and quality! Will definitely be doing more business in the future."
        name="Jonathan Young"
    />
    <x-ui.banner-cta-artwork-dropzone />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.card-image-with-text
        image="/images/custom-shirts/top5pct-custom-t-shirts-main.jpg"
        alt="Top 5 Percent branded merchandise and apparel representing the 5% lifestyle"
        title="Wear the 5% Standard"
    >
        <p class="mb-4">Top 5% Merchandise is our exclusive line of branded apparel and accessories for people who live by the standard of excellence. The concept behind <a href="/" class="link-notification">Top 5 Percent</a> has always been simple, only the top five percent of people commit to the level of quality, consistency, and craftsmanship that separates great work from good enough. Our merchandise is a physical expression of that standard. Every piece in the collection is produced with the same attention to detail we put into every custom order that leaves our shop.</p>
        <p class="mb-4">Our branded apparel includes premium-quality t-shirts, hoodies, caps, and accessories printed and decorated in-house at our Joliet location using the same techniques we use for our custom client orders, DTF transfers, screen printing, embroidery, and specialty inks. We do not outsource production or cut corners on materials. When you wear a Top 5% piece, you are wearing something we made by hand right here in Joliet, Illinois.</p>
        <p>All Top 5% merchandise is available in limited quantities. If you see something you want, grab it, we produce items in small batches to keep the collection exclusive. Visit us at 121 Springfield Avenue in Joliet or call <a href="tel:+18153498600" class="link-notification">(815) 349-8600</a> for current availability.</p>
    </x-sections.card-image-with-text>

    <x-sections.cta-quadruple-button-banner />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg', 'alt' => 'Premium rhinestone apparel from Top 5 Percent in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',    'alt' => 'Premium glitter print merchandise from Top 5 Percent in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',    'alt' => 'Premium embroidered merchandise from Top 5 Percent in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg',               'alt' => 'Top 5 Percent branded merchandise made in Joliet Illinois'],
        ]"
        visible=2
    />

    <x-ui.card-banner-slide-in
        image="/images/custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg"
        alt="Top 5 Percent branded merchandise and apparel in Joliet Illinois"
        title="Represent the 5% Lifestyle"
        href="#all-products"
        direction="right"
    />
    <x-ui.card-banner-slide-in
        image="/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg"
        alt="Custom holographic and specialty apparel at Top 5 Percent in Joliet Illinois"
        title="Step Up Your Brand, Custom Prints From Top 5 Percent"
        href="/contact"
        direction="left"
    />

    <x-sections.product-grid :alwaysShow="true" />

    <x-ui.banner-testimonial
        quote="Good customer service and you met my expectations! Keep up the good work and I'll definitely be sending people your way."
        name="Gerardo Zavala"
    />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Rep the Brand. Look the Part."
        label="Top 5 Percent Merchandise"
        subheading="Top 5 Percent branded merchandise lets you wear the mission. Browse shirts, hats, and accessories that represent veteran-owned, locally-made quality from Joliet, Illinois."
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
