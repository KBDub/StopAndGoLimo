@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ImageObject",
    "name": "Custom T-Shirts & Apparel, Top 5 Percent Portfolio",
    "description": "Custom printed t-shirts, hoodies, and caps produced by Top 5 Percent in Joliet, IL for businesses, teams, and events across Will and DuPage County and the greater Chicagoland area.",
    "contentUrl": "https://www.top5pct.com/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg",
    "url": "https://www.top5pct.com/portfolio",
    "license": "https://www.top5pct.com",
    "acquireLicensePage": "https://www.top5pct.com/contact",
    "creator": { "@id": "https://www.top5pct.com" },
    "copyrightHolder": { "@id": "https://www.top5pct.com" }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ImageObject",
    "name": "Custom Signs & Banners, Top 5 Percent Portfolio",
    "description": "Custom vinyl banners, business signs, and storefront graphics produced by Top 5 Percent in Joliet, IL for businesses throughout Will and DuPage County and the greater Chicagoland area.",
    "contentUrl": "https://www.top5pct.com/images/banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg",
    "url": "https://www.top5pct.com/portfolio",
    "license": "https://www.top5pct.com",
    "acquireLicensePage": "https://www.top5pct.com/contact",
    "creator": { "@id": "https://www.top5pct.com" },
    "copyrightHolder": { "@id": "https://www.top5pct.com" }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ImageObject",
    "name": "Vehicle Graphics & Wraps, Top 5 Percent Portfolio",
    "description": "Custom vehicle graphics, car wraps, and vinyl lettering installed by Top 5 Percent in Joliet and Shorewood, IL for local businesses.",
    "contentUrl": "https://www.top5pct.com/images/automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg",
    "url": "https://www.top5pct.com/portfolio",
    "license": "https://www.top5pct.com",
    "acquireLicensePage": "https://www.top5pct.com/contact",
    "creator": { "@id": "https://www.top5pct.com" },
    "copyrightHolder": { "@id": "https://www.top5pct.com" }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ImageObject",
    "name": "Custom Stickers & Decals, Top 5 Percent Portfolio",
    "description": "Custom stickers, die-cut decals, and product labels printed by Top 5 Percent in Joliet, IL for businesses and brands in Will and DuPage County and the greater Chicagoland area.",
    "contentUrl": "https://www.top5pct.com/images/stickers-decals/top5pct-banner-stickers-decals-joliet.jpg",
    "url": "https://www.top5pct.com/portfolio",
    "license": "https://www.top5pct.com",
    "acquireLicensePage": "https://www.top5pct.com/contact",
    "creator": { "@id": "https://www.top5pct.com" },
    "copyrightHolder": { "@id": "https://www.top5pct.com" }
}
</script>
@endpush
@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Our Portfolio, Top 5 Percent Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Browse the portfolio of Top 5 Percent, LLC in Joliet, IL. Custom shirts, signs, vehicle graphics, stickers, and promotional products produced for businesses and organizations in Will and DuPage County and the greater Chicagoland area."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Portfolio", "item": "https://www.top5pct.com/portfolio" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Our Portfolio, Top 5 Percent Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/portfolio",
    "description": "Browse the portfolio of Top 5 Percent, LLC in Joliet, IL. Custom shirts, signs, vehicle graphics, stickers, and promotional products produced for businesses and organizations in Will and DuPage County and the greater Chicagoland area."
}
</script>
@endpush

<x-layouts.page title="Our Portfolio" metaDescription="See Top 5 Percent's portfolio of custom shirts, signs, vehicle wraps, and promotional products in Joliet, IL." currentPage="portfolio">
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Our Portfolio"
        headingAccent="See Our Work"
        description="Browse the Top 5 Percent project gallery featuring custom shirts, signs, vehicle wraps, and promotional products. See the quality and craftsmanship behind every order."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="portfolio" displayServiceType="Custom Projects" />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="See What We've Built"
        label="Our Work Portfolio"
        subheading="Every project in our portfolio represents a real business, a real brand, and a real relationship. Browse custom apparel, signage, and promotional work produced by Top 5 Percent right here in Joliet, Illinois."
    />
    <x-sections.faq
        heading="Portfolio FAQs"
        label="Custom Print Portfolio, Top 5 Percent"
        :faqs="[
            ['q' => 'What types of projects are in your portfolio?', 'a' => 'Our portfolio includes custom t-shirts and apparel, vinyl signs and banners, vehicle wraps and graphics, custom stickers and decals, and promotional products produced for businesses, sports teams, schools, and events throughout Will and DuPage County.'],
            ['q' => 'Can I see samples of your work before ordering?', 'a' => 'Yes. Stop by our shop at 121 Springfield Avenue in Joliet to see physical samples and our portfolio, or browse our photo gallery online to view completed projects.'],
            ['q' => 'Do you share customer project photos on social media?', 'a' => 'Yes. We share customer projects (with permission) on our social media channels. Follow us to see our latest work and get ideas for your own custom project.'],
            ['q' => 'How do I know what quality to expect from Top 5 Percent?', 'a' => 'Browse our portfolio, read our hundreds of five-star reviews, and stop in to see samples in person. We are confident in the quality we produce and welcome you to evaluate our work before placing an order. Ready to start your own project? Get a quote online or call us directly. Learn about us, veteran-owned and serving Joliet since 2017. See what customers are saying, browse our reviews from across Will and DuPage County.'],
            ['q' => 'Can I bring in a reference image for my project?', 'a' => 'Yes. Bring a photo, sketch, or example of a project you like and we will use it as a reference to develop your custom design. The more specific your reference, the more accurately we can match your vision.'],
            ['q' => 'Do you have a physical showroom in Joliet?', 'a' => 'Yes. Visit us at 121 Springfield Avenue in Joliet, IL to see our equipment, review physical product samples, and discuss your project with our team in person.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
