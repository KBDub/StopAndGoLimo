@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Graphic Design Services in Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Professional graphic design services in Joliet, IL. Logo design, layout design for print, free online design tool, and design catalogs for custom shirts, signs, and promotional products."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Design Services", "item": "https://www.top5pct.com/design-services" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Graphic Design Services in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/design-services",
    "description": "Professional graphic design services in Joliet, IL. Logo design, layout design for print, free online design tool, and design catalogs for custom shirts, signs, and promotional products."
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Design Services | Joliet, IL"
    metaDescription="Professional design services in Joliet, IL. Logo design, graphic design, free online designer, and design catalogs for custom shirts, signs, and decals."
    currentPage="design-services"
    ogImage="/images/og-tags/top5pct-og-design-services.jpg"
    ogImageAlt="Design Services in Joliet, IL, Logo Design, Graphic Design, Top 5 Percent">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Design"
        headingAccent="Services"
        description="Top 5 Percent offers professional design support from concept to print-ready file. Logo design, layout and graphic design, free online design tools, and inspiration catalogs, all available in-house at our Joliet shop. No design experience required."
        primaryButtonText="Browse Design Services"
        primaryButtonHref="#design-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="design-services" displayServiceType="Design Services" />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg',          'alt' => 'Custom designed and printed banners for businesses in Joliet, Shorewood, and Crest Hill Illinois'],
            ['src' => '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'alt' => 'Custom designed shirts and apparel printed in Joliet Illinois'],
            ['src' => '/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg',     'alt' => 'Custom designed business signs in Joliet, Plainfield, and Shorewood Illinois'],
            ['src' => '/images/vehicle-magnets/top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg',       'alt' => 'Custom designed vehicle magnets in Joliet, Shorewood, and Crest Hill Illinois'],
        ]"
        visible=3
    />

    <x-ui.banner-testimonial
        quote="They did an outstanding job on my custom shirts. I shared my concept and it was brought to life with precision and creativity. Excellent quality, great communication, and fast turnaround. I highly recommend!"
        name="Brittany Harvey"
    />

    <x-sections.lp-category-banners
        id="design-categories"
        :banners="[
        [
            'image' => '/images/banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg',
            'alt'   => 'Professional logo design services for businesses in Joliet Illinois',
            'title' => 'Logo Design',
            'href'  => '/design-services/logo-design',
        ],
        [
            'image' => '/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg',
            'alt'   => 'Professional graphic design and layout services for print in Joliet Illinois',
            'title' => 'Graphic Design',
            'href'  => '/design-services/graphic-design',
        ],
    ]" />

    <x-sections.card-image-with-text
        image="/images/banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg"
        alt="Professional design services for custom print products in Joliet Illinois"
        title="From Concept to Print, We Handle the Design"
    >
        <p class="mb-4">Great design is what turns a custom product into a brand statement. At <a href="/" class="link-notification">Top 5 Percent</a>, we believe every business and organization in Joliet and throughout Will and DuPage County deserves access to professional design help, not just the ones with dedicated marketing teams or large budgets, and our design team regularly supports everything from a quick <a href="/custom-apparel" class="link-notification">custom apparel</a> layout to a full multi-piece <a href="/signs" class="link-notification">sign package</a> for a grand opening. That is why we offer free design assistance with every single order we produce. You do not need a design background, you do not need to know what vector files are, and you do not need to come in with a finished artwork file. Just tell us what you want to communicate, and our team will build it.</p>
        <p class="mb-4">Our in-house design services go far beyond basic layout adjustments. We offer full logo creation from scratch, comprehensive graphic design for signs, banners, apparel, promotional products, and any other print application, and for businesses that need a full brand identity package our <a href="/design-services/logo-design" class="link-notification">logo design</a> service delivers the foundational artwork that goes on every product we produce. We also maintain a free online designer tool that lets you create and preview your own design from a browser, and we offer curated design catalogs filled with thousands of ready-to-customize templates so you can get inspired before you come in.</p>
        <p class="mb-4">Every product we design is also produced in-house. <a href="/custom-apparel" class="link-notification">Custom apparel</a>, <a href="/signs" class="link-notification">business signs</a>, <a href="/stickers" class="link-notification">stickers and decals</a>, and <a href="/promotional-items" class="link-notification">promotional items</a>, we design and print all of it at our Joliet shop, so your finished products look exactly as designed every time.</p>
        <p>Every design we produce is built to production specifications from the start, correct bleed, proper resolution, accurate color profiles. When your file goes to press, it comes out exactly as designed. Call us at <a href="tel:+18153498600" class="link-notification">(815) 349-8600</a> or stop by 121 Springfield Avenue in Joliet to talk about your design project today.</p>
    </x-sections.card-image-with-text>

    <x-ui.banner-cta-artwork-dropzone />
    <x-sections.cta-quadruple-button-banner />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg', 'alt' => 'Professionally designed business signs in Joliet, Shorewood, and Crest Hill Illinois'],
            ['src' => '/images/custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg',            'alt' => 'Professionally designed custom vinyl shirts in Joliet Illinois'],
            ['src' => '/images/stickers-decals/top5pct-stickers-decals-joliet-beer-brewery.jpg',       'alt' => 'Professionally designed stickers and labels for a brewery in Joliet Illinois'],
            ['src' => '/images/banners/top5pct-team-banners-joliet-shorewood-crest-hill.jpg',          'alt' => 'Professionally designed team banners for organizations in Joliet, Shorewood, and Crest Hill'],
        ]"
        visible=2
    />

    <x-ui.card-banner-slide-in
        image="/images/banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg"
        alt="Free design help for every custom print order at Top 5 Percent in Joliet Illinois"
        title="Free Design Help for Every Order"
        href="/contact"
        direction="left"
    />
    <x-ui.card-banner-slide-in
        image="/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg"
        alt="Custom business signs and print design services from Top 5 Percent in Joliet Illinois"
        title="From Logo to Finished Product, All Under One Roof"
        href="/contact"
        direction="right"
    />

    <x-sections.product-grid collectionSlug="design-services" />

    <x-ui.banner-testimonial
        quote="Great experience. Ezra had me come in on the same day and explained all the different ways of printing on specific fabrics. He gave great prices and tips on how I would like my design printed. He had them ready two business days. Great quality and print and would be sure to recommend this service to family and friends."
        name="Abdul Jirreh"
    />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Great Products Start With Great Design"
        label="Graphic Design Services in Joliet, IL"
        subheading="Every print, sign, and garment starts with the right design. See how the Top 5 Percent design team creates logos, marketing materials, and print-ready artwork for businesses in Joliet, Illinois."
    />
    @php
    $pageFaqs = [
            ['q' => 'Do you charge extra for design help with my order?', 'a' => 'No. Free design assistance is included with every order we produce. We will build the layout, adjust your existing design, or create artwork from scratch at no additional charge.'],
            ['q' => 'Can you create a logo from scratch for my business?', 'a' => 'Yes. We offer full logo design services including concept development, multiple revision rounds, and delivery of print-ready vector files you can use across all your marketing materials.'],
            ['q' => 'What file formats do you accept for print-ready artwork?', 'a' => 'We prefer AI, EPS, and PDF files with outlined text for vector artwork. We also accept high-resolution JPG, PNG, and PSD files at 300 DPI or higher. We will let you know if your file needs adjustments before we go to print.'],
            ['q' => 'Do you have a free online design tool?', 'a' => 'Yes. Our free online designer lets you create and preview custom designs for shirts, signs, and other products directly in your browser without any software or design experience required.'],
            ['q' => 'How long does a custom logo design take?', 'a' => 'Most logo projects are completed within two to five business days after an initial consultation. Rush turnaround is available. Contact us to discuss your timeline and scope.'],
            ['q' => 'Can I see a design proof before my order goes to print?', 'a' => 'Yes. We provide a design proof for your approval before production begins on any custom order. We do not go to press until you confirm the design is exactly what you want.'],
        ];
    @endphp
    <x-sections.faq
        heading="Design Services FAQs"
        label="Graphic Design in Joliet, IL"
        :faqs="$pageFaqs"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
