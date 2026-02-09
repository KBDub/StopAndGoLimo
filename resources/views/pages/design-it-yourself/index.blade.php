<x-layouts.page title="Design It Yourself" metaDescription="Use our free online design tools to create custom shirts, signs, decals, and more. Browse design idea catalogs for inspiration. No design skills needed, preview your design online." currentPage="design-it-yourself">
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Design It"
        headingAccent="Yourself"
        description="Use our free online design tools and idea catalogs to create your perfect custom product. No design skills needed, no minimum order required."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="design-it-yourself" displayServiceType="Design It Yourself" />

    <x-sections.top-level-category-section
        heading="Design Tools"
        headingAccent="& Resources"
        description="Create your own custom products with our free online tools. No design experience required — preview your design before you order."
        :items="[
            [
                'title' => 'Online Designer',
                'description' => 'Our free online t-shirt designer lets you create your own shirt, sign, or decal right from your browser. Upload your logo, add text, choose fonts and colors, and preview your design online before ordering. No software needed, no minimum order.',
                'linkText' => 'Start designing now',
                'linkHref' => '/design-it-yourself/online-designer',
                'seoTitle' => 'Free Online Custom Clothing Creator',
                'seoDescription' => 'Create your own shirt with our DIY design tool. Upload your artwork or start from scratch with free design templates. Custom clothing creator with instant preview — design lab for t-shirts, signs, and promotional products in Joliet.',
            ],
            [
                'title' => 'Design Idea Catalogs',
                'description' => 'Browse thousands of design templates and ideas for custom shirts, signs, banners, and promotional products. Find inspiration for family reunions, corporate events, school spirit wear, sports teams, and more. Pick a design and make it your own.',
                'linkText' => 'Browse catalogs',
                'linkHref' => '/design-it-yourself/design-catalogs',
                'seoTitle' => 'Design Templates and Inspiration Gallery',
                'seoDescription' => 'Free design templates for custom apparel, business signage, and event merchandise. Browse curated design ideas by category — reunion shirts, team jerseys, corporate branding, and promotional items. No design skills needed to get started.',
            ],
        ]"
    />

    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.testimonial-banner />
    <x-sections.map-section />
</x-layouts.page>
