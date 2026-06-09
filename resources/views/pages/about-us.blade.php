@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "About Us | Stop and Go Limo — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/about-us",
    "description": "Learn about Stop and Go Airport Shuttle Service Inc. Professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs since 2009."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",     "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "About Us", "item": "https://www.newlenoxlimoservice.com/about-us" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="About Us | Stop and Go Limo — New Lenox, IL"
    metaDescription="Learn about Stop and Go Airport Shuttle Service Inc. Professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs since 2009."
    currentPage="about"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional chauffeurs at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="About"
        headingBold="Us"
        :headingTwoLines="false"
        subtitle="The Most Convenient Shuttle Service"
        subtitleIn="in Plainfield, Illinois"
        description="At Stop & Go Airport Shuttle Service Inc., we recognize the challenges of finding a reliable transportation provider. That's why we go the extra mile to offer exceptional services, ensuring clean vehicles, prompt customer support, and a commitment to treating every customer with the utmost respect. Our goal is to deliver a seamless, stress-free travel experience that exceeds your expectations."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/stopngolimo-about-us.jpg"
        imagePosition="center center"
    />

    <x-sections.our-story />

    <x-sections.who-are-we />

    <x-sections.free-instant-quote
        image="/images/sections/vincent-in-limo.jpg"
        imageAlt="Vincent Rover, founder of Stop & Go Airport Shuttle Service Inc., inside a luxury limousine"
        imageAspect="2/3"
        heading=""
        body=""
    />

    <x-sections.travel-in-style
        heading="Read"
        headingBold="our Blog"
        body="Stay updated with expert tips, insider deals, and travel inspiration you won't want to miss. Get behind-the-scenes insights, local highlights, and everything you need to make your next ride smooth, safe, and unforgettable."
        buttonText="Click Here"
        buttonHref="/blog"
        image="/images/sections/blog-promo.jpg"
        imageAlt="Luxury limousine interior, Stop and Go Airport Shuttle Service"
        imagePosition="left"
        background="cloud"
    />
</x-layouts.page>
