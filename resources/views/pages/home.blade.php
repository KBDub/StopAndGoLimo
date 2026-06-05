@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Luxury Limo Service in Joliet, IL serving Chicagoland",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": ""
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Luxury Limo Service in Joliet, IL | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/",
    "description": ""
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.newlenoxlimoservice.com" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Luxury Limo Service in Joliet, IL | Stop & Go Airport Shuttle Service, Inc."
    metaDescription=""
    currentPage="home"
    ogImage=""
    ogImageAlt="Luxury Limo Service in Joliet, IL serving Chicagoland"
>
    <x-sections.category-hero
        heading="Premium Airport"
        headingBold="Shuttle Service"
        subtitle="Serving O'Hare, Midway, and Chicagoland since 2009"
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-home.jpg"
    />


    {{-- sample FAQ --}}
    @php
    $homeFaqs = [
        ['q' => '', 'a' => 'Yes. <a href="/" class="link-notification">S</a> Call us at <a href="tel:+18153498600" class="link-notification">(815) 585-6922</a>'],
        ['q' => '', 'a' => ''],
        ['q' => '', 'a' => ''],
        ['q' => '', 'a' => ''],
        ['q' => '', 'a' => ''],
        ['q' => '', 'a' => ''],
    ];
    @endphp
    <x-sections.faq
        heading="Frequently Asked Questions"
        label=""
        :faqs="$homeFaqs"
    />
    
</x-layouts.page>
