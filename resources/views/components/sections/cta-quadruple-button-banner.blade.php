<section class="py-10 bg-cloud border-t border-b border-champagne/30">
    <div class="max-w-7xl mx-auto px-6">
        <h3 class="text-center text-lg font-bold text-navy mb-6 font-head">Ready to Get Started?</h3>
        <div class="max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <x-ui.button-champagne-solid
                onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                class="px-6 py-3 text-sm whitespace-nowrap w-full sm:w-44"
            >
                Book a Ride
            </x-ui.button-champagne-solid>

            <x-ui.button-navy-gold
                onclick="window.dispatchEvent(new CustomEvent('open-contact-modal', { detail: { context: 'quote' } }))"
                class="px-6 py-3 text-sm whitespace-nowrap w-full sm:w-44"
            >
                Get a Quote
            </x-ui.button-navy-gold>

            <x-ui.button-outline-champagne
                href="/service-areas"
                class="px-6 py-3 text-sm whitespace-nowrap w-full sm:w-44"
            >
                Service Areas
            </x-ui.button-outline-champagne>

            <x-ui.button-map-directions class="px-6 py-3 text-sm whitespace-nowrap w-full sm:w-44">
                Get Directions
            </x-ui.button-map-directions>
        </div>
    </div>
</section>
