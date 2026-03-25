<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Product image carousel</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Desktop: vertical thumbnail strip + main image with hover-to-zoom (250% magnification). Mobile: horizontal swipe carousel with dot indicators.</p>
        </div>

        <div class="max-w-2xl mx-auto">
            <x-ui.carousel-product
                :images="[]"
                alt="Custom crew neck t-shirt"
            />
        </div>

        <div class="mt-10 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-1">Component</h3>
            <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.carousel-product &mdash; resources/views/components/ui/carousel-product.blade.php</p>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Full usage example</h3>
            <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto mb-6"><code>&lt;x-ui.carousel-product
    :images="[
        ['src' =&gt; '/images/product-photo-1.jpg', 'alt' =&gt; 'Product front view'],
        ['src' =&gt; '/images/product-photo-2.jpg', 'alt' =&gt; 'Product back view'],
        ['src' =&gt; '/images/product-photo-3.jpg', 'alt' =&gt; 'Product detail view'],
    ]"
    alt="Custom crew neck t-shirt"
/&gt;
{{-- Main image: fills available container width, 1:1 ratio --}}
{{-- Thumbnails: 80&times;80px strips, vertical on desktop, horizontal on mobile --}}</code></pre>

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
            <p class="text-sm text-charcoal-light mt-4 italic">Note: The carousel currently shows the empty state placeholder. Once product images are attached via Spatie Media Library, they will populate automatically.</p>
        </div>

    </div>
</section>
