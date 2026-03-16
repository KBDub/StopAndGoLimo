<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-sunburst pl-5">Category grid cards</h2>
        <p class="text-charcoal-light mb-10 pl-5">Visual category navigation with gradient overlays, hover zoom, and featured (wide) layout option. Text overlaid at bottom with smooth hover color transition.</p>

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

        <div class="mt-12 bg-linen p-6">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Gradient overlay from bottom</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover zoom on background image</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Text transitions to sunburst on hover</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Featured layout spans 2 columns</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Responsive aspect ratios</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Dark fallback for missing images</li>
                </ul>
            </div>
        </div>
    </div>
</section>
