<section class="bg-white min-h-screen flex items-center py-10">
    <div class="max-w-7xl mx-auto px-6 w-full">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h5 class="text-champagne font-head font-semibold tracking-wide mb-4">
                    New Lenox &bull; Naperville &bull; Chicago, Illinois
                </h5>
                <div class="inline-block mb-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-navy leading-tight mb-2 font-head">
                        Premium Airport
                        <span class="block text-champagne">Shuttle Service</span>
                    </h1>
                    <div class="h-1 bg-champagne"></div>
                </div>
                <p class="text-2xl text-slate mb-8 max-w-3xl">
                    Professional airport transfers, corporate travel, and special event limousine service. Serving O'Hare, Midway, and all of Illinois since 2009.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-ui.button-champagne-solid onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                        Book a Ride
                    </x-ui.button-champagne-solid>
                    <x-ui.button-outline-champagne href="/service-areas">
                        Service Areas
                    </x-ui.button-outline-champagne>
                </div>
            </div>
            <div class="relative">
                <div class="overflow-hidden shadow-champagne-lg">
                    <img
                        src="/images/stopngo-hero-vehicle.jpg"
                        alt="Stop & Go Limo luxury vehicle ready for airport pickup"
                        class="w-full object-cover"
                        style="aspect-ratio: 4/3;"
                        loading="eager"
                    >
                </div>
                <div class="absolute -bottom-4 -left-4 bg-navy shadow-lg px-6 py-4 hidden lg:block">
                    <p class="text-champagne font-head font-bold text-2xl">2009</p>
                    <p class="text-cloud text-xs">Serving Illinois</p>
                </div>
            </div>
        </div>
    </div>
</section>
