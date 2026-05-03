@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Picture Shirts in Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Custom photo and picture shirts in Joliet, IL. Print your photo, face, or graphic on t-shirts and apparel using DTF or dye sublimation. No minimums, same day available. Veteran owned."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Custom Apparel", "item": "https://www.top5pct.com/custom-apparel" },
        { "@type": "ListItem", "position": 3, "name": "Picture Shirts", "item": "https://www.top5pct.com/custom-apparel/picture-shirts" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Picture Shirts in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/custom-apparel/picture-shirts",
    "description": "Custom photo and picture shirts in Joliet, IL. Print your photo, face, or graphic on t-shirts and apparel using DTF or dye sublimation. No minimums, same day available. Veteran owned."
}
</script>
@endpush

<x-layouts.page
    title="Custom Picture Shirts Joliet IL | Photo Print T-Shirts"
    metaDescription="Custom photo print shirts in Joliet, IL. Full-color pictures, portraits, pets, and artwork printed directly on your shirt. No minimums. Veteran-owned."
    currentPage="custom-apparel">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Picture Shirts"
        headingAccent="Wear Your Memories"
        description="Full-color photo prints directly on your shirt — your memories, your pet, your portrait, your artwork. If you can photograph it, we can put it on a shirt. A truly personal keepsake."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="picture-shirts" displayServiceType="Picture Shirts" />
    <x-ui.banner-testimonial
        quote="Great service, good customer service, excellent work. Very satisfied."
        name="Arleen Van Hook"
    />
    <x-sections.product-grid collectionSlug="custom-shirts" parentSlug="custom-apparel" />
    <x-ui.banner-testimonial
        quote="Great quality work, professional and efficient. If you're looking for custom apparel, from shirts to hoodies to hats they do it all. Ezra and his team are awesome! 5 stars, reach out to them today!"
        name="Gerardo Munoz Jr"
    />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Print Any Image on a Shirt"
        label="Custom Photo & Picture Shirts"
        subheading="Picture shirts turn your photo, artwork, or graphic into wearable custom apparel. Watch how Top 5 Percent produces high-resolution, photo-quality prints on shirts and hoodies in Joliet, IL."
    />
    <x-sections.faq
        heading="Custom Picture Shirt FAQs"
        label="Picture Shirts in Joliet, IL"
        :faqs="[
            ['q' => 'Can you print a photo or picture on a shirt?', 'a' => 'Yes. We print full-color photos and images on shirts using DTF transfers or dye sublimation. Both processes produce photographic-quality output including faces, landscapes, and detailed artwork.'],
            ['q' => 'What photo quality do I need for a picture shirt?', 'a' => 'For best results, use a photo that is at least 300 DPI at the intended print size. High-resolution phone photos and professional images both work well. We will review your file before printing.'],
            ['q' => 'Is there a minimum order for picture shirts?', 'a' => 'No. You can order a single photo shirt for a gift or dozens for a group event.'],
            ['q' => 'What is the best printing technique for picture shirts?', 'a' => 'DTF transfers work on any fabric and are best for small runs. Dye sublimation is best for all-over full-coverage photo prints on polyester garments.'],
            ['q' => 'How long does a picture shirt order take?', 'a' => 'Many picture shirt orders are ready same day or within 24 hours. Call (815) 349-8600 to confirm turnaround for your order.'],
            ['q' => 'Do you offer picture shirts as gifts?', 'a' => 'Yes. Custom photo shirts are popular as personalized gifts for birthdays, memorials, anniversaries, and graduations. We can help you design a layout that makes the photo shine.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
