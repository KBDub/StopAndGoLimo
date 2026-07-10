<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Sticky add-to-cart bar</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Fixed bottom bar that slides up when scrolling past the main add-to-cart button on a product page. Shows product name, price, variant label, and a prominent add-to-cart button.</p>
        </div>

        <div class="bg-linen p-6">
            <h3 class="text-lg font-semibold text-charcoal mb-4">Preview</h3>
            <p class="text-sm text-charcoal-light mb-6">Click the button below to toggle the sticky add-to-cart bar at the bottom of the page.</p>

            <div x-data="{ showing: false }">
                <x-ui.button-blue-white x-on:click="showing = !showing; $dispatch(showing ? 'sticky-cart-show' : 'sticky-cart-hide')">
                    <span x-text="showing ? 'Hide sticky bar' : 'Show sticky bar'">Show sticky bar</span>
                </x-ui.button-blue-white>
            </div>
        </div>

        <div class="mt-10 bg-linen p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-1">Component</h3>
            <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.sticky-add-to-cart &mdash; resources/views/components/ui/sticky-add-to-cart.blade.php</p>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Full usage example</h3>
            <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto mb-6"><code>{{-- Place once per PDP, outside the normal flow --}}
&lt;x-ui.sticky-add-to-cart
    productName="Classic crew neck t-shirt"
    price="$24.99"
    variantLabel="Size: L / Black"
&gt;
    {{-- Optional slot for quantity selector --}}
    &lt;x-ui.quantity-picker /&gt;
&lt;/x-ui.sticky-add-to-cart&gt;

{{-- Show/hide via Alpine.js events --}}
{{-- Trigger show:  $dispatch('sticky-cart-show') --}}
{{-- Trigger hide:  $dispatch('sticky-cart-hide') --}}
{{-- Typically dispatched when main ATC button scrolls out of viewport --}}
{{-- No aspect ratio — fixed bottom bar, height auto --}}</code></pre>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Slide-up animation on show event</li>
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
