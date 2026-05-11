@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Ezra",
    "jobTitle": "Owner & Founder",
    "worksFor": { "@id": "https://www.top5pct.com" },
    "description": "Veteran and founder of Top 5 Percent, LLC in Joliet, IL. Serving Will County businesses with custom signage, apparel, and promotional products since 2017.",
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
    "name": "About Our Company — Top 5 Percent Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Top 5 Percent, LLC is a veteran-owned custom signage and apparel shop in Joliet, Illinois, proudly serving Will County since 2017 with custom shirts, signs, decals, and vehicle graphics."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Company", "item": "https://www.top5pct.com/company" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "About Our Company — Top 5 Percent Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/company",
    "description": "Top 5 Percent, LLC is a veteran-owned custom signage and apparel shop in Joliet, Illinois, proudly serving Will County since 2017 with custom shirts, signs, decals, and vehicle graphics."
}
</script>
@endpush

<x-layouts.page
    title="About Us | Veteran Owned Signage & Apparel in Joliet IL"
    metaDescription="Top 5 Percent is a veteran owned custom signage and apparel business in Joliet, IL. Serving Will County since 2017 with custom signs, shirts, stickers, and"
    currentPage="about">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Our Company"
        headingAccent="Who We Are"
        description="We are a veteran-owned custom signage and apparel shop in Joliet, Illinois. Founded in 2017, we have spent nearly a decade building long-term relationships with the businesses, teams, and organizations of Will County."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/about-preview.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.about-preview />

    <section class="py-16 bg-linen">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-charcoal font-bold text-h2 mb-3">Proudly Serving Will County Since 2017</h2>
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
                    <p class="text-charcoal-light text-body-sm">Joliet is not just where we work — it is our home. We chose this city because of its strong community spirit and its support for local businesses. We invest in the Joliet community because it has invested in us, and we believe local businesses thrive when they support each other.</p>
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
                    <p class="text-charcoal-light text-body-sm">Signs, shirts, stickers, embroidery, promotional products, vehicle decals, table runners, banners — we do it all in one shop. That means consistent quality across every product type, and it means your brand is always being handled by a team that knows your standards and your goals.</p>
                </div>
                <div class="bg-white p-8 shadow-sm">
                    <h3 class="text-h3 font-bold text-charcoal mb-3">In-House Design Support</h3>
                    <p class="text-charcoal-light text-body-sm">We have in-house graphic design expertise with over two decades of professional experience. If you have artwork, we can use it. If you need something created from scratch, we can do that too. Your production and your design come from the same place, which means fewer errors and a better result.</p>
                </div>
            </div>
        </div>
    </section>

    <x-ui.banner-testimonial
        quote="The owner Ezra was extremely knowledgeable and helpful. He gave great marketing ideas for my stickers. The quality of my product was top of the line. I would recommend Top 5 Percent to any business or organization that needs print services."
        name="Eric Murff"
    />
    <x-ui.banner-cta-artwork-dropzone position="right" />
    <x-ui.banner-thin-sunburst />
    <x-ui.banner-thin-azure />
    <x-sections.cta-quadruple-button-banner />
    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Built Different. Built Better."
        label="The Top 5 Percent Company"
        subheading="Top 5 Percent is more than a print shop. See the story behind the veteran-owned business that has been serving Joliet and the Chicago area with custom apparel, signs, and promotional products."
    />
    <x-sections.faq
        heading="Company FAQs"
        label="Our Company — Top 5 Percent"
        :faqs="[
            ['q' => 'Who owns Top 5 Percent?', 'a' => 'Top 5 Percent, LLC is owned and operated by a US veteran. The shop was founded in Joliet, IL in 2017 and has grown through relationships built with businesses, schools, teams, and organizations across Will County.'],
            ['q' => 'What is the company mission of Top 5 Percent?', 'a' => 'Our mission is to help businesses and individuals in Joliet and Will County make a lasting impression through professional custom signage, apparel, and promotional products — all backed by veteran integrity and craftsmanship.'],
            ['q' => 'What communities does Top 5 Percent serve?', 'a' => 'We serve all of Will County including Joliet, Shorewood, Plainfield, Romeoville, Crest Hill, Lockport, New Lenox, and Channahon. We also ship and serve customers across the greater Chicagoland region.'],
            ['q' => 'Do you offer military or veteran discounts?', 'a' => 'Yes. We offer a 10% discount to active military, veterans, and first responders. Mention your status when you place your order.'],
            ['q' => 'What industries do you work with?', 'a' => 'We work with small businesses, restaurants, churches, schools, nonprofits, sports teams, construction companies, trucking companies, event planners, and individuals throughout Will County and the Chicago area.'],
            ['q' => 'Is there parking at your Joliet location?', 'a' => 'Yes. Our shop at 121 Springfield Avenue in Joliet has on-site parking available. Call us at (815) 349-8600 with any questions before your visit.'],
        ]"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
