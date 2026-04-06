<section class="py-10 bg-warm-gradient border-t border-b border-sunburst/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col sm:flex-row items-center gap-8 max-w-2xl mx-auto">
            <div class="flex-1 w-full text-center sm:text-left">
                <h3 class="text-lg font-bold text-charcoal">Need help with a custom project?</h3>
                <p class="text-sm text-charcoal-light">Get a free, no-obligation quote from our team. Veteran-owned, locally trusted.</p>
            </div>
            <x-ui.button-blue-white @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))" class="px-6 py-3 text-sm whitespace-nowrap flex-shrink-0">
                Get a Free Quote
            </x-ui.button-blue-white>
        </div>
    </div>
</section>
