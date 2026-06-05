{{--
 | Repurposed from DTF Transfer Pricing → Stop & Go Limo Rates section.
 | This is a simplified rates reference. Full booking goes through the contact modal.
--}}

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-10">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-navy mb-2 font-head">Transparent Flat-Rate Pricing</h2>
                <div class="h-1 bg-champagne"></div>
            </div>
            <p class="text-body-sm text-slate max-w-2xl mx-auto">
                We believe you should know what you are paying before you book. All rates below are flat, with no surge pricing, no hidden fees, and no surprises.
                <span class="block mt-1 text-xs text-champagne font-semibold">Contact us for a custom quote on longer routes or group charters.</span>
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">

            <div class="border-t-4 border-champagne bg-cloud shadow-md p-6">
                <h3 class="text-navy font-bold text-lg mb-1 font-head">Airport Transfer</h3>
                <p class="text-slate text-sm mb-3">New Lenox area to O'Hare or Midway. Flight tracking included.</p>
                <p class="text-champagne font-head font-bold text-3xl">From $65</p>
                <p class="text-slate/60 text-xs mt-1">Per vehicle, one way. Rate varies by pickup address.</p>
            </div>

            <div class="border-t-4 border-champagne bg-cloud shadow-md p-6">
                <h3 class="text-navy font-bold text-lg mb-1 font-head">Hourly Charter</h3>
                <p class="text-slate text-sm mb-3">Sedan, SUV, or Sprinter van. Perfect for events, city tours, or multiple stops.</p>
                <p class="text-champagne font-head font-bold text-3xl">From $95/hr</p>
                <p class="text-slate/60 text-xs mt-1">Two-hour minimum. Vehicle type and availability may vary.</p>
            </div>

            <div class="border-t-4 border-champagne bg-cloud shadow-md p-6">
                <h3 class="text-navy font-bold text-lg mb-1 font-head">Party Bus / Group</h3>
                <p class="text-slate text-sm mb-3">Party buses and coach buses for proms, weddings, and corporate events.</p>
                <p class="text-champagne font-head font-bold text-3xl">Custom Quote</p>
                <p class="text-slate/60 text-xs mt-1">Contact us with your date, group size, and destination.</p>
            </div>

        </div>

        <div class="text-center">
            <x-ui.button-champagne-solid onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                Get a Free Quote
            </x-ui.button-champagne-solid>
            <p class="text-slate/60 text-xs mt-4">All rates are subject to change. Contact us to confirm current pricing.</p>
        </div>

    </div>
</section>
