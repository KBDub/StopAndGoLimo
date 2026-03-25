<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Quick-view modal</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Product quick-view modal with image gallery, variant selector, quantity picker, and add-to-cart. Opens without page navigation for faster browsing.</p>
        </div>

        <div class="bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-4">Preview</h3>
            <p class="text-sm text-charcoal-light mb-6">Click the buttons below to open quick-view modals with different configurations.</p>

            <div class="flex flex-wrap gap-4">
                <x-ui.button-blue-white
                    x-data
                    x-on:click="$dispatch('open-quick-view', { id: 'qv-demo-1' })"
                >
                    Quick view: T-shirt (with variants)
                </x-ui.button-blue-white>

                <x-ui.button-charcoal-gold
                    x-data
                    x-on:click="$dispatch('open-quick-view', { id: 'qv-demo-2' })"
                >
                    Quick view: Banner (no variants)
                </x-ui.button-charcoal-gold>
            </div>
        </div>

        <div class="mt-10 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-1">Component</h3>
            <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.modal-quick-view &mdash; resources/views/components/ui/modal-quick-view.blade.php</p>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Full usage example</h3>
            <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto mb-6"><code>{{-- Trigger button (anywhere on page) --}}
&lt;button x-data x-on:click="$dispatch('open-quick-view', { id: 'qv-product-1' })"&gt;
    Quick view
&lt;/button&gt;

{{-- Modal (placed once, anywhere in the page) --}}
&lt;x-ui.modal-quick-view
    id="qv-product-1"
    title="Classic crew neck t-shirt"
    price="$24.99"
    originalPrice="$34.99"
    description="Premium cotton crew neck with custom screen printing."
    href="/products/classic-crew-neck"
    :variants="['S', 'M', 'L', 'XL', '2XL', '3XL']"
    :images="[
        ['src' =&gt; '/images/product-photo-1.jpg', 'alt' =&gt; 'Front view'],
        ['src' =&gt; '/images/product-photo-2.jpg', 'alt' =&gt; 'Back view'],
    ]"
/&gt;
{{-- images prop optional; shows placeholder if omitted --}}
{{-- variants prop optional; hides variant selector if omitted --}}
{{-- originalPrice triggers strikethrough sale display --}}</code></pre>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Backdrop blur overlay</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Image gallery with thumbnail navigation</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Variant selector buttons</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Quantity picker with min/max</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Sale price with strikethrough</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Gold gradient add-to-cart button</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> "View full details" link to PDP</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Event-driven open via Alpine.js dispatch</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<x-ui.modal-quick-view
    id="qv-demo-1"
    title="Classic crew neck t-shirt"
    price="$24.99"
    description="Premium cotton crew neck t-shirt with custom screen printing. Perfect for teams, events, and everyday wear. Available in multiple colors and sizes."
    href="/products/classic-crew-neck"
    :variants="['S', 'M', 'L', 'XL', '2XL', '3XL']"
/>

<x-ui.modal-quick-view
    id="qv-demo-2"
    title="Custom vinyl banner"
    price="$49.99"
    originalPrice="$69.99"
    description="Full-color printed vinyl banner with grommets. Weather-resistant for indoor and outdoor use. Custom sizes available."
    href="/products/custom-vinyl-banner"
/>
