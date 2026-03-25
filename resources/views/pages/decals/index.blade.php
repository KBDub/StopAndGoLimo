<x-layouts.page
    title="Custom Decals & Stickers Joliet IL | Window Decals, Wall Decals, Floor Decals | Top 5 Percent"
    metaDescription="We print custom decals, stickers, window decals, wall decals, and floor decals in Joliet, Shorewood, Plainfield, and Will County. Die cut shapes, full color, any size. Veteran owned."
    currentPage="decals">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Custom Decals"
        headingAccent="& Stickers"
        description="We print custom decals, stickers, window graphics, wall decals, and floor decals for businesses and personal use throughout Joliet, Shorewood, Plainfield, and all of Will County. Full color, any shape, any size. Veteran owned with same day service available."
        primaryButtonText="Browse All Decals"
        primaryButtonHref="#decal-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="decals" displayServiceType="Custom Decals" />

    <section id="decal-categories" class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="inline-block mb-4">
                    <h2 class="text-charcoal font-bold text-h2 mb-2">Decals for Every Surface</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-charcoal-light text-body max-w-3xl mx-auto">We offer a full range of adhesive decals and stickers for businesses, events, and personal use across the Chicagoland area. From window clings and wall vinyl to floor decals and die cut stickers, we have the right product for every surface and every need.</p>
            </div>
        </div>
    </section>

    <x-sections.lp-category-banners :banners="[
        [
            'image' => '/images/stickers-decals/top5pct-banner-stickers-decals-joliet.jpg',
            'alt'   => 'Custom stickers and decals printed in Joliet Illinois',
            'title' => 'Stickers & Decals',
            'href'  => '/decals/stickers',
        ],
        [
            'image' => '/images/window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg',
            'alt'   => 'Window, wall, and floor decals printed in Joliet Illinois',
            'title' => 'Window, Wall & Floor',
            'href'  => '/decals/window-wall-floor-decals',
        ],
        [
            'image' => '/images/corona-virus-signs/top5pct-banner-coronavirus-signs-stickers-joliet-shorewood.png',
            'alt'   => 'Coronavirus safety decals and stickers in Joliet and Shorewood Illinois',
            'title' => 'Safety Decals',
            'href'  => '/decals/coronavirus-decals',
        ],
    ]" />

    <x-sections.product-grid collectionSlug="decals" />
    <x-ui.banner-testimonial
        quote="Outstanding and excellent service. The quality of the decals are flawless. I will definitely be doing more business in the future."
        name="Chewy Orkwiszewski"
    />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
