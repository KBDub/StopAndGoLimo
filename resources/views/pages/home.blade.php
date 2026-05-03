@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Signs & Apparel in Joliet, IL",
    "provider": { "@type": "LocalBusiness", "name": "Top 5 Percent, LLC", "url": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Veteran-owned custom signs, apparel, stickers, vehicle graphics, and promotional products serving Joliet, Shorewood, Plainfield, and Will County, IL."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Signs & Apparel in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/",
    "description": "Veteran-owned custom signs, apparel, stickers, vehicle graphics, and promotional products serving Joliet, Shorewood, Plainfield, and Will County, IL."
}
</script>
@endpush

<x-layouts.page
    title="Custom Signage & Apparel"
    metaDescription="Premium custom signage and apparel in Joliet, IL. Veteran-owned business specializing in custom shirts, signs, decals, and vehicle graphics."
    currentPage="home"
    ogImage="/images/og-tags/top5pct-og-home.jpg"
    ogImageAlt="Top 5 Percent — Custom Signs & Apparel in Joliet, IL"
>
    <x-sections.category-hero />
    <x-ui.banner-thin-charcoal />
    <x-ui.banner-medium-sunburst />

    <x-sections.about-preview />
    <x-ui.banner-medium-charcoal />

    <x-sections.featured-products />

    {{-- @livewire('catalog.featured-products') --}}

    <x-ui.banner-thin-charcoal />

    <x-ui.banner-testimonial />
    <x-ui.banner-thin-charcoal />

    <x-sections.our-services />
    <x-sections.cta-design-your-own-banner />

    <x-sections.design-it-yourself />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="See Our Craft in Action"
        label="Custom Apparel & Signs in Joliet, IL"
        subheading="From design to finished product, watch how Top 5 Percent produces custom shirts, signs, vehicle graphics, and promotional products for businesses across Joliet and the Chicagoland area."
    />

    <x-sections.home-page-services-accordion />

    <x-sections.faq
        heading="Frequently Asked Questions"
        label="Top 5 Percent — Joliet, IL"
        :faqs="[
            ['q' => 'Do you offer same-day custom shirts in Joliet?', 'a' => 'Yes. Same-day custom shirt printing is available on many of our apparel products. Call us at (815) 349-8600 before coming in to confirm availability for your specific order.'],
            ['q' => 'Is there a minimum order for custom apparel or signs?', 'a' => 'No. We have no minimum order requirement on any of our products. You can order a single custom shirt, one banner, or one sticker and receive the same quality and care as a large bulk order.'],
            ['q' => 'Are you a veteran-owned business?', 'a' => 'Yes. Top 5 Percent, LLC is veteran-owned and operated. We offer a 10% discount to all active military, veterans, and first responders as a thank-you for their service.'],
            ['q' => 'What areas of Illinois do you serve?', 'a' => 'We are based at 121 Springfield Avenue in Joliet and serve all of Will County including Shorewood, Plainfield, Romeoville, Crest Hill, Lockport, and New Lenox. We also ship to Aurora, Naperville, Chicago, and communities across the Chicagoland region.'],
            ['q' => 'How fast can I get a custom banner printed?', 'a' => 'Many of our vinyl banners can be printed the same day. Bring or email your design and call ahead to confirm. We have printed rush banners for customers within a few hours when needed.'],
            ['q' => 'Do you offer free design help with every order?', 'a' => 'Yes. Free design assistance is included with every order we produce. You do not need to arrive with finished artwork. Our team will build the layout for you based on your description, logo, or reference images.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
