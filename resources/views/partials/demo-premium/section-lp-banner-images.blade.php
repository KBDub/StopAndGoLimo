<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Landing page banner images</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Two-up banner grid linking to sub-category pages. Hover reveals the category name centered over a transparent charcoal overlay with olive text. Odd last banner centers itself in a half-width column. Demo shows 3 banners (Stop &amp; Go Airport Shuttle Service, Inc. fleet service categories).</p>
        </div>

        <x-ui.card-lp-banner-images :banners="[
            [
                'image' => '/images/gallery/fleet-cadillac-escalade-stretch-white-street.jpg',
                'alt'   => 'Stretch limousines for weddings and special events',
                'title' => 'Stretch Limousines',
                'href'  => '/services/stretch-limousines',
            ],
            [
                'image' => '/images/gallery/fleet-chevy-suburban-black-front-driveway.jpg',
                'alt'   => 'Executive SUV airport transfers',
                'title' => 'Executive SUVs',
                'href'  => '/services/executive-suv',
            ],
            [
                'image' => '/images/gallery/fleet-mercedes-sprinter-black-chicago-skyline.jpg',
                'alt'   => 'Sprinter van group transportation Chicago',
                'title' => 'Sprinter Vans',
                'href'  => '/services/sprinter-vans',
            ],
        ]" />

        <div class="mt-10 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-1">Component</h3>
            <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.card-lp-banner-images &mdash; resources/views/components/ui/card-lp-banner-images.blade.php</p>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Full usage example</h3>
            <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto mb-6"><code>&lt;x-ui.card-lp-banner-images :banners="[
    [
        'image' =&gt; '/images/gallery/fleet-cadillac-escalade-stretch-white-street.jpg',
        'alt'   =&gt; 'Stretch limousines for weddings and special events',
        'title' =&gt; 'Stretch Limousines',
        'href'  =&gt; '/services/stretch-limousines',
    ],
    [
        'image' =&gt; '/images/gallery/fleet-chevy-suburban-black-front-driveway.jpg',
        'alt'   =&gt; 'Executive SUV airport transfers',
        'title' =&gt; 'Executive SUVs',
        'href'  =&gt; '/services/executive-suv',
    ],
]" /&gt;
{{-- Aspect ratio: 16:7 (full width per banner) --}}
{{-- Odd last banner auto-centers at half width --}}</code></pre>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Aspect ratio: 16:7 per banner</li>
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
