<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Landing page banner images</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Two-up banner grid linking to sub-category pages. Hover reveals the category name centered over a transparent charcoal overlay with olive text. Odd last banner centers itself in a half-width column. Demo shows 3 banners (Custom Apparel sub-categories in nav order).</p>
        </div>

        <x-ui.card-lp-banner-images :banners="[
            [
                'image' => '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg',
                'alt'   => 'Custom shirts, hoodies, and caps in Joliet',
                'title' => 'Custom Shirts',
                'href'  => '/custom-apparel/custom-shirts',
            ],
            [
                'image' => '/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',
                'alt'   => 'DTF transfers printing in Joliet',
                'title' => 'DTF Transfers',
                'href'  => '/custom-apparel/dtf-transfers',
            ],
            [
                'image' => '/images/reunion-shirts/toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg',
                'alt'   => 'Family and class reunion shirts in Joliet and Shorewood',
                'title' => 'Reunion Shirts',
                'href'  => '/custom-apparel/reunion-shirts',
            ],
        ]" />

        <div class="mt-10 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> 16:7 landscape banner ratio</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Two-up grid, full-width on mobile</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Odd last banner centers at half width</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover: transparent charcoal overlay</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover: olive category name + sunburst underbar, centered</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Image subtle zoom on hover (scale 1.05)</li>
                </ul>
            </div>
        </div>

    </div>
</section>
