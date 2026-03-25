<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Category grid cards</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Visual category navigation with gradient overlays, hover zoom, and featured (wide) layout option. Text overlaid at bottom with smooth hover color transition.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <x-ui.card-category-visual
                title="Custom apparel"
                subtitle="T-shirts, polos, hoodies & more"
                href="/custom-apparel"
                :featured="true"
            />

            <x-ui.card-category-visual
                title="Signs & banners"
                subtitle="Indoor & outdoor"
                href="/signs"
            />

            <x-ui.card-category-visual
                title="Decals & stickers"
                subtitle="Window, wall & floor"
                href="/decals"
            />

            <x-ui.card-category-visual
                title="Vehicle graphics"
                subtitle="Wraps, magnets & DOT"
                href="/vehicle-graphics"
            />

            <x-ui.card-category-visual
                title="Promotional items"
                subtitle="Branded merchandise"
                href="/promotional-items"
            />

            <x-ui.card-category-visual
                title="DTF transfers"
                subtitle="Ready-to-press designs"
                href="/custom-apparel/dtf-transfers"
            />
        </div>

        <div class="mt-10 bg-linen p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-1">Component</h3>
            <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.card-category-visual &mdash; resources/views/components/ui/card-category-visual.blade.php</p>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Full usage example</h3>
            <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto mb-6"><code>&lt;div class="grid grid-cols-2 md:grid-cols-3 gap-4"&gt;

    {{-- Featured card: spans 2 columns --}}
    &lt;x-ui.card-category-visual
        title="Custom apparel"
        subtitle="T-shirts, polos, hoodies &amp; more"
        href="/custom-apparel"
        :featured="true"
    /&gt;

    {{-- Standard card --}}
    &lt;x-ui.card-category-visual
        title="Signs &amp; banners"
        subtitle="Indoor &amp; outdoor"
        href="/signs"
    /&gt;

&lt;/div&gt;
{{-- Standard aspect ratio: 3:2 | Featured (2-col) aspect ratio: 2:1 --}}
{{-- image prop optional; falls back to dark charcoal background --}}</code></pre>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Aspect ratio: 3:2 standard, 2:1 when <code>featured</code></li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Gradient overlay from bottom</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover zoom on background image</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Featured layout spans 2 columns</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Text transitions to sunburst on hover</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Dark charcoal fallback for missing images</li>
                </ul>
            </div>
        </div>

    </div>
</section>
