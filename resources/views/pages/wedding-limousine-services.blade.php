@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Wedding Limousine Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Elegant wedding limousine service in New Lenox, Plainfield, and the Southwest suburbs. Make your special day unforgettable with a luxury limo."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",              "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",          "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Wedding Limousine", "item": "https://www.newlenoxlimoservice.com/wedding-limousine-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Wedding Limos"
    metaDescription="Arrive in style on your wedding day with a luxury limo in Chicagoland. Elegant vehicles and professional chauffeurs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Wedding limousine service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Wedding Limousine Service"
        headingBold="in the Chicago Suburbs"
        :headingTwoLines="false"
        subtitle="Elegant chauffeured transportation for your perfect day"
        description="Stop & Go Airport Shuttle Service, Inc. provides luxury wedding limousine service throughout the Chicago suburbs. Our wedding fleet includes stretch limousines for the bridal party, luxury SUVs for the couple, and Mercedes Sprinter vans or coach buses for guest shuttles. We serve venues throughout the southwest suburbs, western suburbs, north suburbs, and all of Chicago. Chauffeurs arrive early, coordinate with your planner, and ensure a seamless experience. Every vehicle is impeccably clean. Flat-rate pricing, no surprises. We recommend booking 6 to 12 months in advance for spring and summer weekends. Contact us today to reserve."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/sections/wedding-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Your"
        headingBold="Dream Wedding Ride"
        heading="Starts Here"
        body="Our diverse fleet of luxury vehicles is dedicated to providing exceptional transportation solutions for your wedding day. Whether you're envisioning an intimate ride or a grand procession, we offer a range of options to suit every preference."
    />

    <x-sections.free-instant-quote
        heading="Your"
        headingBold="Private Sanctuary"
        headingTail=""
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/sections/wedding-limo-fleet.jpg"
        descImageAlt="Luxury wedding limousine interior with leather seating and ambient lighting"
        descHeading="Your Private Sanctuary"
        descSubheading="Complete Wedding Transportation"
        descBody="As your trusted wedding transportation partner, Stop & Go Airport Shuttle Service, Inc. provides elegant, flawless service for your most important day:"
        :descBullets="[
            'Bridal party and groomsmen transportation in luxury limousines',
            'Wedding ceremony and reception transfers, perfectly timed',
            'Guest shuttle service between venues and hotels',
            'Engagement parties, rehearsal dinners, and day-after brunches',
            'Stretch limousines, SUVs, and party buses for every wedding size',
        ]"
        descClosing="Serving couples throughout New Lenox, Plainfield, Naperville, Joliet, Aurora, and all of Chicagoland, our professional chauffeurs make every moment seamless."
        formAction="/get-a-quote"
        submitLabel="Send Message"
    />

    <x-sections.why-choose-us />

    <x-sections.banner-image
        headingPrefix="Celebrate in"
        headingBold="Style"
        body="Every detail of your ride is thoughtfully planned to ensure a smooth and enjoyable experience. From the moment you step into our limousines, our professional chauffeurs are dedicated to providing attentive service, ensuring timely arrivals, and accommodating your needs, allowing you to focus on celebrating your special day."
        image="/images/sections/wedding-couple.jpg"
        imageAlt="Couple after their wedding using Stop and Go Limo transportation"
        imageAspect="730/460"
    />

    <x-sections.review-slider />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
