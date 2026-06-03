@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Ezra",
    "jobTitle": "Owner & Founder",
    "worksFor": { "@id": "https://www.top5pct.com" },
    "description": "Veteran and founder of Top 5 Percent, LLC, a custom signage and apparel business in Joliet, IL serving Will and DuPage County since 2017.",
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
    "name": "About Top 5 Percent, Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Top 5 Percent, LLC is a veteran-owned custom signage and apparel business in Joliet, IL, serving Will and DuPage County since 2017 with custom shirts, signs, stickers, vehicle graphics, and promotional products."
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
    "name": "About Top 5 Percent, Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/about",
    "description": "Top 5 Percent, LLC is a veteran-owned custom signage and apparel business in Joliet, IL, serving Will and DuPage County since 2017 with custom shirts, signs, stickers, vehicle graphics, and promotional products."
}
</script>
@endpush

<x-layouts.page title="About Us" metaDescription="Learn about Top 5 Percent - Veteran-owned custom signage and apparel business in Joliet, IL" currentPage="about">
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="About"
        headingAccent="Top 5 Percent"
        description="Top 5 Percent is a veteran-owned custom printing shop in Joliet, IL, proudly serving the community since 2017. We specialize in custom signage, apparel, and promotional products with same day service available."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.about-preview />

    <section class="py-16 bg-linen">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-charcoal font-bold text-h2 mb-3">Proudly Serving Will and DuPage County Since 2017</h2>
                <div class="h-1 w-24 bg-sunburst mx-auto mb-6"></div>
                <p class="text-charcoal-light text-body max-w-3xl mx-auto">We have had the privilege of working with hundreds of businesses, schools, churches, sports teams, and community organizations throughout Joliet and the surrounding communities. Here is a look at the values that guide everything we do.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 shadow-sm">
                    <h3 class="text-h3 font-bold text-charcoal mb-3">Veteran Owned & Operated</h3>
                    <p class="text-charcoal-light text-body-sm">Top 5 Percent was founded by two U.S. military veterans who bring the discipline, dedication, and commitment to quality that their service instilled in them to every product they produce. We are proud of our veteran heritage and proud to serve our community.</p>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <h3 class="text-h3 font-bold text-charcoal mb-3">Community First</h3>
                    <p class="text-charcoal-light text-body-sm">Joliet is not just where we work, it is our home. We chose this city because of its strong community spirit and its support for local businesses. We invest in the Joliet community because it has invested in us, and we believe local businesses thrive when they support each other.</p>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <h3 class="text-h3 font-bold text-charcoal mb-3">No Compromises on Quality</h3>
                    <p class="text-charcoal-light text-body-sm">Every product that leaves our shop goes through a quality review before it is handed to a customer. We use professional-grade materials and equipment, and we stand behind every job we complete. If something is not right, we make it right.</p>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <h3 class="text-h3 font-bold text-charcoal mb-3">Same Day Service Available</h3>
                    <p class="text-charcoal-light text-body-sm">We understand that business moves fast and timelines get tight. We offer same day service on select products for customers who need their order quickly. Call us to discuss your timeline and we will do everything we can to meet it without compromising quality.</p>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <h3 class="text-h3 font-bold text-charcoal mb-3">One-Stop Shop</h3>
                    <p class="text-charcoal-light text-body-sm">Signs, shirts, stickers, embroidery, promotional products, vehicle decals, table runners, banners, we do it all in one shop. That means consistent quality across every product type, and it means your brand is always being handled by a team that knows your standards and your goals.</p>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <h3 class="text-h3 font-bold text-charcoal mb-3">In-House Design Support</h3>
                    <p class="text-charcoal-light text-body-sm">We have in-house graphic design expertise with over two decades of professional experience. If you have artwork, we can use it. If you need something created from scratch, we can do that too. Your production and your design come from the same place, which means fewer errors and a better result.</p>
                </div>
            </div>
        </div>
    </section>

    <x-sections.card-image-with-text
        image="/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg"
        alt="Custom signage and apparel produced by Top 5 Percent in Joliet Illinois"
        title="See Our Work and Hear From Our Customers"
    >
        <p class="mb-4">See our quality in the <a href="/portfolio" class="link-notification">portfolio</a>, real work produced for real local businesses, schools, sports teams, and organizations throughout Joliet, Will and DuPage County. Every project in that gallery was made here in our Joliet shop, from <a href="/custom-apparel" class="link-notification">custom apparel</a> and embroidery to full-color signs and vehicle graphics.</p>
        <p class="mb-4">Don't take our word for it, read our <a href="/reviews" class="link-notification">reviews</a> from customers across Will and DuPage County. Hundreds of verified five-star ratings from people who walked through our door or shipped their order from across the country.</p>
        <p>We serve Joliet and all surrounding communities across our <a href="/service-areas" class="link-notification">service areas</a> throughout Will and DuPage County and the greater Chicagoland area. If you are nearby, stop in. If not, we ship.</p>
    </x-sections.card-image-with-text>
    <x-sections.top5pct-same-day-service serviceType="about" displayServiceType="Custom Signage & Apparel" />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="j0vslNa91gU"
        heading="Veteran-Owned. Community Trusted."
        label="About Top 5 Percent"
        subheading="Top 5 Percent was built on integrity, craftsmanship, and a commitment to serving Joliet and the surrounding community. Learn more about who we are, how we work, and why customers keep coming back."
    />
    <x-sections.faq
        heading="About Us FAQs"
        label="About Top 5 Percent"
        :faqs="[
            ['q' => 'Is Top 5 Percent veteran owned?', 'a' => 'Yes. Top 5 Percent, LLC is veteran-owned and operated. We offer a 10% discount to active military, veterans, and first responders as a thank-you for their service.'],
            ['q' => 'Where is Top 5 Percent located?', 'a' => 'We are located at 121 Springfield Avenue in Joliet, Illinois. We serve all of Will and DuPage County and the greater Chicagoland area.'],
            ['q' => 'How long has Top 5 Percent been in business?', 'a' => 'Top 5 Percent was founded in 2017 and has been serving businesses, schools, sports teams, and organizations throughout Will and DuPage County for nearly a decade.'],
            ['q' => 'What products and services do you offer?', 'a' => 'We specialize in custom apparel (shirts, hoodies, hats), custom signs and banners, vehicle graphics and wraps, stickers and decals, and promotional products. Design services are included with every order.'],
            ['q' => 'Do you offer free design help?', 'a' => 'Yes. Free design assistance is included with every order we produce. You do not need to arrive with finished artwork, our team will build the layout for you.'],
            ['q' => 'How can I contact Top 5 Percent?', 'a' => 'Call us at (815) 349-8600, stop by 121 Springfield Avenue in Joliet, or use the contact form on our website. We are available seven days a week.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
