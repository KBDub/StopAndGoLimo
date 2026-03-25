<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Rotating image carousel</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Auto-rotating carousel showing 1, 2, or 3 images at a time. In 3-image mode the center image is highlighted with a sunburst border and full opacity while the flanking images are dimmed. Pauses on hover, resumes on mouse leave. Arrow buttons and dot indicators for manual control.</p>
        </div>

        @php
        $carouselImages = [
            ['src' => '/images/custom-shirts/top5pct-custom-t-shirts-main.jpg',                     'alt' => 'Custom t-shirts in Joliet'],
            ['src' => '/images/custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg', 'alt' => 'Rhinestone shirts, caps, and hoodies'],
            ['src' => '/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',   'alt' => 'Glitter shirts, caps, and hoodies'],
            ['src' => '/images/custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg',         'alt' => 'Vinyl shirts, caps, and hoodies'],
            ['src' => '/images/spirit-wear/top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg', 'alt' => 'Spirit wear and fan wear Joliet'],
            ['src' => '/images/corporate-wear/toptpct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg', 'alt' => 'Custom polo shirts Joliet'],
            ['src' => '/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg',   'alt' => 'Foil shirts, hoodies, and caps'],
            ['src' => '/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg', 'alt' => 'Holographic shirts, hoodies, and caps'],
        ];
        @endphp

        <div class="space-y-12">

            <div>
                <p class="text-sm text-charcoal-light mb-4 font-semibold">3 visible — center highlighted (default)</p>
                <x-ui.carousel-rotating-images :images="$carouselImages" :visible="3" :interval="3500" />
            </div>

            <div>
                <p class="text-sm text-charcoal-light mb-4 font-semibold">2 visible</p>
                <x-ui.carousel-rotating-images :images="$carouselImages" :visible="2" :interval="4000" />
            </div>

            <div>
                <p class="text-sm text-charcoal-light mb-4 font-semibold">1 visible</p>
                <x-ui.carousel-rotating-images :images="$carouselImages" :visible="1" :interval="2500" />
            </div>

        </div>

        <div class="mt-10 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> 1, 2, or 3 images visible at once via <code>visible</code> prop</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Center image highlighted — sunburst ring, full opacity</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Side images dimmed to 60% opacity</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Accepts any number of images</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Auto-rotates — configurable interval via <code>interval</code> prop</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Pauses on hover, resumes on mouse leave</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Prev/next arrows — hover turns sunburst gold</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Dot indicators — click any to jump directly</li>
                </ul>
            </div>
        </div>

    </div>
</section>
