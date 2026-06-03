@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Signs & Apparel in Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Veteran-owned custom signs, apparel, stickers, vehicle graphics, and promotional products serving Joliet, Shorewood, Plainfield, and Will and DuPage County, IL."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Signs & Apparel in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/",
    "description": "Veteran-owned custom signs, apparel, stickers, vehicle graphics, and promotional products serving Joliet, Shorewood, Plainfield, and Will and DuPage County, IL."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Custom Signage & Apparel"
    metaDescription="Premium custom signage and apparel in Joliet, IL. Veteran-owned business specializing in custom shirts, signs, decals, and vehicle graphics."
    currentPage="home"
    ogImage="/images/og-tags/top5pct-og-home.jpg"
    ogImageAlt="Top 5 Percent, Custom Signs & Apparel in Joliet, IL"
>
    <x-sections.category-hero
        description="Top 5 Percent is a veteran-owned custom printing shop in Joliet, IL. We make custom shirts, signs, stickers, vehicle graphics, and promotional products for businesses, teams, and individuals throughout Will and DuPage County and the greater Chicagoland area."
    />
    <x-ui.banner-thin-charcoal />
    <x-ui.banner-medium-sunburst />

    <x-sections.about-preview />
    <x-ui.banner-medium-charcoal />

    <x-sections.featured-products />

    {{-- @livewire('catalog.featured-products') --}}

    <x-ui.banner-thin-charcoal />

    <x-ui.banner-testimonial />
    <x-sections.cta-quadruple-button-banner />
    <x-ui.banner-thin-charcoal />

    <x-sections.our-services />
    <x-sections.cta-design-your-own-banner />

    <x-sections.design-it-yourself />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="j0vslNa91gU"
        heading="See Our Craft in Action"
        label="Custom Apparel & Signs in Joliet, IL"
        subheading="From design to finished product, watch how Top 5 Percent produces custom shirts, signs, vehicle graphics, and promotional products for businesses across Joliet and the Chicagoland area."
    />

    <x-sections.home-page-services-accordion />

    @php
    $homeFaqs = [
        ['q' => 'Do you offer same-day custom shirts in Joliet?', 'a' => 'Yes. <a href="/custom-apparel" class="link-notification">Same-day custom shirt printing</a> is available on many of our apparel products. Call us at <a href="tel:+18153498600" class="link-notification">(815) 349-8600</a> before coming in to confirm availability for your specific order.'],
        ['q' => 'Is there a minimum order for custom apparel or signs?', 'a' => 'No. We have no minimum order requirement on any of our products. You can order a single custom shirt, one banner, or one sticker and receive the same quality and care as a large bulk order.'],
        ['q' => 'Are you a veteran-owned business?', 'a' => 'Yes. Top 5 Percent, LLC is veteran-owned and operated. We offer a 10% discount to all <a href="/about" class="link-notification">active military, veterans, and first responders</a> as a thank-you for their service.'],
        ['q' => 'What areas of Illinois do you serve?', 'a' => 'We are based at 121 Springfield Avenue in Joliet and serve all of Will and DuPage County including Shorewood, Plainfield, Romeoville, Crest Hill, Lockport, and New Lenox. We also ship to Aurora, Naperville, Chicago, and communities across the Chicagoland region.'],
        ['q' => 'How fast can I get a custom banner printed?', 'a' => 'Many of our <a href="/signs/business-signs/banners" class="link-notification">vinyl banners</a> can be printed the same day. Bring or email your design and call ahead to confirm. We have printed rush banners for customers within a few hours when needed.'],
        ['q' => 'Do you offer free design help with every order?', 'a' => 'Yes. <a href="/design-services" class="link-notification">Free design assistance</a> is included with every order we produce. You do not need to arrive with finished artwork. Our team will build the layout for you based on your description, logo, or reference images.'],
    ];
    @endphp
    <x-sections.faq
        heading="Frequently Asked Questions"
        label="Top 5 Percent, Joliet, IL"
        :faqs="$homeFaqs"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
