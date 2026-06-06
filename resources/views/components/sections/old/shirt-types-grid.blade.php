{{--
 | Repurposed from "Shirt Types Grid" → Stop & Go Limo fleet/vehicle grid.
--}}

<section id="fleet" class="py-10 bg-cloud">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <p class="text-champagne font-head font-semibold mb-2">Every occasion, one fleet</p>
            <div class="inline-block">
                <h2 class="text-navy mb-4 font-head">Choose Your Vehicle</h2>
                <div class="h-1 bg-champagne"></div>
            </div>
            <p class="text-slate max-w-4xl mx-auto mt-4">Whether you need a private sedan for one or a coach bus for 50, we have the right vehicle. All vehicles are clean, climate-controlled, and maintained to the highest standard.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <x-ui.card-product title="Executive Sedan" href="/town-car-services" image="/images/fleet/stopngo-executive-sedan.jpg">
                <p class="text-slate mb-4">Premium <a href="/town-car-services" class="text-azure hover:text-azure-dark transition-colors underline underline-offset-2">town car service</a> for individuals and couples. Ideal for airport transfers and business travel.</p>
            </x-ui.card-product>

            <x-ui.card-product title="SUV / Navigator" href="/limousine-services" image="/images/fleet/stopngo-suv.jpg">
                <p class="text-slate mb-4">Spacious luxury SUVs for families and small groups. Extra legroom and luggage capacity for airport runs.</p>
            </x-ui.card-product>

            <x-ui.card-product title="Stretch Limousine" href="/limousine-services" image="/images/fleet/stopngo-stretch-limo.jpg">
                <p class="text-slate mb-4">Classic <a href="/limousine-services" class="text-azure hover:text-azure-dark transition-colors underline underline-offset-2">stretch limousines</a> for weddings, proms, and special occasions. Arrive in style.</p>
            </x-ui.card-product>

            <x-ui.card-product title="Sprinter Van" href="/corporate-car-service" image="/images/fleet/stopngo-sprinter.jpg">
                <p class="text-slate mb-4">12-passenger <a href="/corporate-car-service" class="text-azure hover:text-azure-dark transition-colors underline underline-offset-2">Sprinter vans</a> for corporate groups and families. Comfortable seating and luggage space.</p>
            </x-ui.card-product>

            <x-ui.card-product title="Party Bus" href="/party-bus" image="/images/fleet/stopngo-party-bus.jpg">
                <p class="text-slate mb-4">Party buses seating 14 to 40 passengers. Built-in sound systems, LED lighting, and a fun atmosphere for <a href="/prom-party-bus" class="text-azure hover:text-azure-dark transition-colors underline underline-offset-2">proms</a> and celebrations.</p>
            </x-ui.card-product>

            <x-ui.card-product title="Mini Bus" href="/bus-rental" image="/images/fleet/stopngo-mini-bus.jpg">
                <p class="text-slate mb-4">Mini buses for mid-size groups of 20 to 35 passengers. Great for corporate outings, airport group shuttles, and reunions.</p>
            </x-ui.card-product>

            <x-ui.card-product title="Coach Bus" href="/coach-buses" image="/images/fleet/stopngo-coach-bus.jpg">
                <p class="text-slate mb-4">Full-size <a href="/coach-buses" class="text-azure hover:text-azure-dark transition-colors underline underline-offset-2">coach buses</a> for large groups of 40 to 55 passengers. Ideal for corporate events and long-distance charters.</p>
            </x-ui.card-product>

            <x-ui.card-product title="Custom Charter" href="/contact" image="/images/fleet/stopngo-custom-charter.jpg">
                <p class="text-slate mb-4">Have a unique request? We can arrange custom charter packages for any group size or occasion. <a href="/contact" class="text-azure hover:text-azure-dark transition-colors underline underline-offset-2">Contact us to discuss</a>.</p>
            </x-ui.card-product>
        </div>
    </div>
</section>
