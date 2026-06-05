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
        heading="Elevate Your Travel Experience"
        headingBold="With Luxury and Comfort"
        subtitle="Discover the joy of seamless journeys"
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-home.jpg"
    />

    <x-sections.travel-in-style
        heading="Travel in"
        headingBold="Style"
        body="Stop & Go Airport Shuttle Service Inc. is your premier provider of luxury limo service in New Lenox, IL. With years of experience and a commitment to quality, we offer reliable rides for any occasion, from elegant weddings to special events like proms."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/travel-in-style.jpg"
        imageAlt="Friends celebrating inside a Stop and Go Limo"
        imagePosition="left"
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
