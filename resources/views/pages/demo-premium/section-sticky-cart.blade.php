<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-sunburst pl-5">Sticky add-to-cart bar</h2>
        <p class="text-charcoal-light mb-10 pl-5">Fixed bottom bar that slides up when scrolling past the main add-to-cart button on PDP. Shows product name, price, variant label, and a prominent add-to-cart button.</p>

        <div class="bg-linen rounded-xl p-6">
            <h3 class="text-lg font-semibold text-charcoal mb-4">Preview</h3>
            <p class="text-sm text-charcoal-light mb-6">Click the button below to toggle the sticky add-to-cart bar at the bottom of the page.</p>

            <div x-data="{ showing: false }">
                <button
                    x-on:click="showing = !showing; $dispatch(showing ? 'sticky-cart-show' : 'sticky-cart-hide')"
                    class="px-6 py-3 bg-azure text-white font-semibold rounded-lg hover:bg-azure-dark transition-colors"
                >
                    <span x-text="showing ? 'Hide sticky bar' : 'Show sticky bar'">Show sticky bar</span>
                </button>
            </div>
        </div>

        <div class="mt-8 bg-linen rounded-xl p-6">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Slide-up animation on scroll trigger</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Product name and price display</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Variant label (e.g. "Size: XL / Black")</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Slotted content for quantity selector</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Gold gradient add-to-cart button</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Alpine.js event-driven show/hide</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<x-ui.sticky-add-to-cart
    productName="Classic crew neck t-shirt"
    price="$24.99"
    variantLabel="Size: L / Black"
/>
