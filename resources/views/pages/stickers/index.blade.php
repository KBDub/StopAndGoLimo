<x-layouts.page
    title="Custom Stickers Joliet IL | Standard & Custom Shaped Stickers | Top 5 Percent"
    metaDescription="We print custom stickers in Joliet, Shorewood, Plainfield, and Will County. Standard stickers, die cut custom shapes, weatherproof vinyl. No minimums. Veteran owned."
    currentPage="stickers">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Custom Stickers"
        headingAccent="Any Shape, Any Size"
        description="We print premium custom stickers for businesses, events, sports teams, and personal use throughout Joliet, Shorewood, Plainfield, and Will County. Standard sizes and fully custom die-cut shapes available. No minimums, full color, weatherproof vinyl, and same day service available."
        primaryButtonText="Browse Stickers"
        primaryButtonHref="#sticker-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/stickers-decals/top5pct-banner-stickers-decals-joliet.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="stickers" displayServiceType="Custom Stickers" />

    <section id="sticker-categories" class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="inline-block mb-4">
                    <h2 class="text-charcoal font-bold text-h2 mb-2">Stickers for Every Need</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-charcoal-light text-body max-w-4xl mx-auto">From simple round and rectangular labels to fully custom die-cut shapes, we have the right sticker for your brand, event, or organization.</p>
            </div>
        </div>
    </section>

    <x-sections.lp-category-banners :banners="[
        [
            'image' => '/images/stickers-decals/top5pct-stickers-decals-joliet-beer-brewery.jpg',
            'alt'   => 'Standard custom stickers printed for businesses in Joliet Illinois',
            'title' => 'Standard Stickers',
            'href'  => '/stickers/standard-stickers',
        ],
        [
            'image' => '/images/stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg',
            'alt'   => 'Custom shaped die cut stickers printed in Joliet Illinois',
            'title' => 'Custom Shaped Stickers',
            'href'  => '/stickers/custom-shaped-stickers',
        ],
    ]" />

    <x-sections.product-grid collectionSlug="stickers" />

    <x-ui.banner-testimonial
        quote="The owner Ezra was extremely knowledgeable and helpful. He gave great marketing ideas for my stickers. The quality of my product was top of the line. I would recommend Top 5 Percent to any business or organization that needs print services."
        name="Eric Murff"
    />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
