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
    title="About Us"
    metaDescription="Learn about Stop and Go Airport Shuttle Service Inc. Professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs since 2009."
    currentPage="about"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional chauffeurs at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="About"
        headingBold="Stop & Go Limo"
        :headingTwoLines="false"
        subtitle="Proudly serving Chicagoland since 2009"
        description="Stop & Go Airport Shuttle Service, Inc. was founded in 2009 with one goal: give Chicagoland a professional transportation company people can count on every time. Based in New Lenox and Naperville, we serve all of Chicagoland, from the southwest suburbs through the western communities of Elgin and Schaumburg, north to Arlington Heights, Waukegan, and the North Shore. We are IDOT licensed and fully insured. Our background-checked, uniformed chauffeurs are available around the clock. From airport runs to weddings, proms, and corporate travel, we are proud of the communities we serve and look forward to earning your trust."
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
        body="Stay updated with expert tips, insider deals, and travel inspiration you won't want to miss plus get behind-the-scenes insights, local highlights, and everything you need to make your next ride smooth, safe, and unforgettable."
        buttonText="Click Here"
        buttonHref="/about-us#"
        image="/images/sections/blog-limo.jpg"
        imageAlt="Guests celebrating inside a Stop & Go Airport Shuttle limousine"
        inverted=true
    />

    <x-sections.review-slider />

    <x-sections.faq />

    <x-sections.share-your-experience 
        :showSingleButton="true"
        singleButtonText="Leave a review"
        singleButtonHref="#"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />
</x-layouts.page>
