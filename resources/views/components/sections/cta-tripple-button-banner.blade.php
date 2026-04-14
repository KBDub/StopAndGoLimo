<section class="py-10 bg-warm-gradient border-t border-b border-sunburst/30">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-lg font-bold text-charcoal mb-1">Ready to take the next step?</h3>
        <p class="text-sm text-charcoal-light mb-6">Get a quote, design something custom, or come find us.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 flex-wrap">
            <x-ui.button-blue-white
                onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                class="px-6 py-3 text-sm whitespace-nowrap"
            >
                Get a Free Quote
            </x-ui.button-blue-white>
            <x-ui.button-charcoal-gold
                href="/design-services/online-designer"
                class="px-6 py-3 text-sm whitespace-nowrap"
            >
                Start Designing
            </x-ui.button-charcoal-gold>
            <x-ui.button-map-directions class="px-6 py-3 text-sm whitespace-nowrap">
                Get Directions
            </x-ui.button-map-directions>
        </div>
    </div>
</section>
