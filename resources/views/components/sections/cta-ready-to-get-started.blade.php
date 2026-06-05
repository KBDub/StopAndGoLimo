<section class="py-10 bg-navy relative overflow-hidden isolate">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-champagne blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-48 h-48 bg-azure blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
        <h5 class="text-champagne font-head font-semibold tracking-wide mb-3">
            Your ride is waiting
        </h5>
        <div class="inline-block mb-6">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2 font-head">Ready to Book Your Ride?</h2>
            <div class="h-1 bg-champagne"></div>
        </div>
        <p class="text-white/70 mb-8 text-lg max-w-4xl mx-auto">
            Book your airport transfer or limousine service today.
            Available 24/7, serving Illinois since 2009.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <x-ui.button-champagne-solid onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                Book a Ride
            </x-ui.button-champagne-solid>
            <x-ui.button-outline-champagne href="tel:+18155856922">
                Call (815) 585-6922
            </x-ui.button-outline-champagne>
        </div>
    </div>
</section>
