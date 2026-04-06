<section class="py-10 bg-charcoal relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-64 h-64 blur-3xl" style="background-color: var(--color-sunburst)"></div>
        <div class="absolute bottom-0 right-1/4 w-48 h-48 bg-azure rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
        <h5 class="text-sunburst font-semibold tracking-wide mb-3">
            Let's Build Something Great
        </h5>
        <div class="inline-block mb-6">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Ready to Get Started?</h2>
            <div class="h-1 bg-sunburst"></div>
        </div>
        <p class="text-white/70 mb-8 text-lg max-w-4xl mx-auto">
            Contact us today for a free quote on your custom project.
            Veteran-owned and proudly serving Joliet, IL and the surrounding area.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <x-ui.button-gold-gradient @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                Get a Free Quote
            </x-ui.button-gold-gradient>
            <x-ui.button-outline-gold href="tel:+18153498600">
                Call (815) 349-8600
            </x-ui.button-outline-gold>
        </div>
    </div>
</section>
