<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-sunburst pl-5">Hover product cards</h2>
        <p class="text-charcoal-light mb-10 pl-5">3:4 aspect ratio cards with hover zoom, badges, color swatches, quick-add overlay, and sale pricing. Designed for ModCloth/Gymshark-level polish.</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <x-ui.card-product-hover
                title="Classic crew neck t-shirt"
                price="$24.99"
                badge="Best seller"
                badgeType="best-seller"
                :swatches="['#2C2C2C', '#FFFFFF', '#3273DC', '#C62828', '#4CAF50']"
                :variantCount="5"
                :quickAdd="true"
                href="/products/classic-crew-neck"
            />

            <x-ui.card-product-hover
                title="Premium embroidered polo"
                price="$39.99"
                originalPrice="$49.99"
                badge="Sale"
                badgeType="sale"
                :swatches="['#1A1A1A', '#FFFFFF', '#2558A8']"
                :variantCount="3"
                :quickAdd="true"
                href="/products/premium-polo"
            />

            <x-ui.card-product-hover
                title="DTF transfer - custom design"
                price="$12.99"
                badge="New"
                badgeType="new"
                :quickAdd="true"
                href="/products/dtf-transfer-custom"
            />

            <x-ui.card-product-hover
                title="Corporate branded hoodie"
                price="$54.99"
                :swatches="['#2C2C2C', '#555555', '#1A1A1A', '#2558A8', '#C62828', '#4CAF50', '#FFC20E']"
                :variantCount="7"
                :quickAdd="true"
                href="/products/corporate-hoodie"
            />
        </div>

        <div class="mt-12 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> 3:4 aspect ratio image container</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover zoom effect (scale 1.05)</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Badge variants: best seller, new, sale, default</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Quick add slide-up button</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Color swatch row (max 5 + overflow)</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Sale price with strikethrough</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Variant count indicator</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Placeholder for missing images</li>
                </ul>
            </div>
        </div>
    </div>
</section>
