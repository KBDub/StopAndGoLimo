@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Pattern Shirts in Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Custom patterned shirts in Joliet, IL. All-over pattern printing on t-shirts and apparel including camo, plaid, tie-dye, and custom repeating patterns. No minimums. Veteran owned."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Custom Apparel", "item": "https://www.top5pct.com/custom-apparel" },
        { "@type": "ListItem", "position": 3, "name": "Pattern Shirts", "item": "https://www.top5pct.com/custom-apparel/pattern-shirts" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Pattern Shirts in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/custom-apparel/pattern-shirts",
    "description": "Custom patterned shirts in Joliet, IL. All-over pattern printing on t-shirts and apparel including camo, plaid, tie-dye, and custom repeating patterns. No minimums. Veteran owned."
}
</script>
@endpush

<x-layouts.page
    title="Custom Pattern Shirts Joliet IL | All-Over Print T-Shirts"
    metaDescription="Custom pattern and all-over print shirts in Joliet, IL. Sports uniforms, branded team apparel, and custom pattern designs. No minimums. Veteran-owned."
    currentPage="custom-apparel">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Pattern Shirts"
        headingAccent="All-Over Custom Designs"
        description="Custom pattern printing for all-over designs, sports uniforms, sublimation, and branded team apparel. Consistent, vibrant, and professional — every shirt matched perfectly to your vision."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="pattern-shirts" displayServiceType="Pattern Shirts" />
    <x-ui.banner-testimonial
        quote="Great quality work, professional and efficient. If you're looking for custom apparel, from shirts to hoodies to hats they do it all. Ezra and his team are awesome! 5 stars, reach out to them today!"
        name="Gerardo Munoz Jr"
    />
    <x-sections.product-grid collectionSlug="custom-shirts" parentSlug="custom-apparel" />
    <x-ui.banner-testimonial
        quote="Great service, good customer service, excellent work. Very satisfied."
        name="Arleen Van Hook"
    />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="All-Over Patterns, Your Design"
        label="Custom Pattern Shirts"
        subheading="Pattern shirts let you cover every inch of fabric with your custom design or graphic. See how Top 5 Percent produces bold, all-over pattern apparel for teams and businesses in Joliet, IL."
    />
    <x-sections.faq
        heading="Custom Pattern Shirt FAQs"
        label="Pattern Shirts in Joliet, IL"
        :faqs="[
            ['q' => 'What are custom pattern shirts?', 'a' => 'Custom pattern shirts use dye sublimation or all-over printing to cover the entire garment with a repeating design. Popular patterns include camouflage, plaid, tie-dye, geometric, and fully custom artwork.'],
            ['q' => 'Is there a minimum order for pattern shirts?', 'a' => 'No. We have no minimum. One pattern shirt or a hundred are both welcome.'],
            ['q' => 'What garments can be printed with custom patterns?', 'a' => 'All-over patterns work best on 100% polyester or high-poly-blend garments due to the dye sublimation process. We also have other techniques for cotton-based fabrics.'],
            ['q' => 'Can I submit my own custom pattern?', 'a' => 'Yes. Provide your pattern file in a high-resolution format and we will prepare it for all-over printing. Our design team can also create a pattern for you from scratch.'],
            ['q' => 'How durable is all-over pattern printing?', 'a' => 'Dye sublimation patterns are bonded into the fabric and will not crack or peel. Colors remain vivid through years of regular washing.'],
            ['q' => 'How fast can I get pattern shirts in Joliet?', 'a' => 'Most pattern shirt orders are completed within one to two business days. Call (815) 349-8600 to confirm turnaround.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
