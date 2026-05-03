@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Ezra",
    "jobTitle": "Owner & Founder",
    "worksFor": { "@id": "https://www.top5pct.com" },
    "description": "Veteran and founder of Top 5 Percent, LLC — a custom signage and apparel business in Joliet, IL serving Will County since 2017.",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Joliet",
        "addressRegion": "IL",
        "addressCountry": "US"
    }
}
</script>
@endpush
@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "About Top 5 Percent — Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Top 5 Percent, LLC is a veteran-owned custom signage and apparel business in Joliet, IL, serving Will County since 2017 with custom shirts, signs, stickers, vehicle graphics, and promotional products."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "About", "item": "https://www.top5pct.com/about" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "About Top 5 Percent — Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/about",
    "description": "Top 5 Percent, LLC is a veteran-owned custom signage and apparel business in Joliet, IL, serving Will County since 2017 with custom shirts, signs, stickers, vehicle graphics, and promotional products."
}
</script>
@endpush

<x-layouts.page title="About Us" metaDescription="Learn about Top 5 Percent - Veteran-owned custom signage and apparel business in Joliet, IL" currentPage="about">
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="About"
        headingAccent="Top 5 Percent"
        description="Veteran-owned and proudly serving Joliet, IL since 2017. We specialize in custom signage, apparel, and promotional products with same day service."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="about" displayServiceType="Custom Signage & Apparel" />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Veteran-Owned. Community Trusted."
        label="About Top 5 Percent"
        subheading="Top 5 Percent was built on integrity, craftsmanship, and a commitment to serving Joliet and the surrounding community. Learn more about who we are, how we work, and why customers keep coming back."
    />
    <x-sections.faq
        heading="About Us FAQs"
        label="About Top 5 Percent"
        :faqs="[
            ['q' => 'Is Top 5 Percent veteran owned?', 'a' => 'Yes. Top 5 Percent, LLC is veteran-owned and operated. We offer a 10% discount to active military, veterans, and first responders as a thank-you for their service.'],
            ['q' => 'Where is Top 5 Percent located?', 'a' => 'We are located at 121 Springfield Avenue in Joliet, Illinois. We serve all of Will County and the greater Chicagoland area.'],
            ['q' => 'How long has Top 5 Percent been in business?', 'a' => 'Top 5 Percent was founded in 2017 and has been serving businesses, schools, sports teams, and organizations throughout Will County for nearly a decade.'],
            ['q' => 'What products and services do you offer?', 'a' => 'We specialize in custom apparel (shirts, hoodies, hats), custom signs and banners, vehicle graphics and wraps, stickers and decals, and promotional products. Design services are included with every order.'],
            ['q' => 'Do you offer free design help?', 'a' => 'Yes. Free design assistance is included with every order we produce. You do not need to arrive with finished artwork — our team will build the layout for you.'],
            ['q' => 'How can I contact Top 5 Percent?', 'a' => 'Call us at (815) 349-8600, stop by 121 Springfield Avenue in Joliet, or use the contact form on our website. We are available seven days a week.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
