{{--
 | Repurposed from "Design Your Own" CTA → "Book Your Ride" CTA banner for Stop & Go Limo.
--}}

<section class="py-10 bg-cloud border-t border-b border-champagne/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col sm:flex-row items-center gap-8 max-w-2xl mx-auto">
            <div class="flex-1 w-full text-center sm:text-left">
                <h3 class="text-lg font-bold text-navy font-head">Ready to book your ride?</h3>
                <p class="text-sm text-slate">Get a free quote or reserve your vehicle in minutes. Available 24/7.</p>
            </div>
            <x-ui.button-navy-gold
                onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                class="px-6 py-3 text-sm whitespace-nowrap flex-shrink-0"
            >
                Book Now
            </x-ui.button-navy-gold>
        </div>
    </div>
</section>
