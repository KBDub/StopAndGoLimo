<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-sunburst pl-5">Product image carousel</h2>
        <p class="text-charcoal-light mb-10 pl-5">Desktop: vertical thumbnail strip + main image with hover-to-zoom (250% magnification). Mobile: horizontal swipe carousel with dot indicators.</p>

        <div class="max-w-2xl mx-auto">
            <x-ui.carousel-product
                :images="[]"
                alt="Custom crew neck t-shirt"
            />
        </div>

        <div class="mt-12 bg-white rounded-xl p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Vertical thumbnail strip (desktop)</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover-to-zoom at 250% magnification</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Arrow navigation buttons</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Horizontal swipe on mobile</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Dot indicators with active state</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Graceful empty state placeholder</li>
                </ul>
            </div>
            <p class="text-sm text-charcoal-light mt-4 italic">Note: The carousel currently shows the empty state placeholder. Once Spatie Media Library is integrated, product images will populate automatically.</p>
        </div>
    </div>
</section>
