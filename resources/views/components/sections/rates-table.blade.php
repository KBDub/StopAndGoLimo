<section id="rates-table" style="background: var(--cloud-light); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-5xl mx-auto px-6">

        {{-- Section heading --}}
        <div style="width: fit-content; margin: 0 auto 1rem;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--navy); line-height: 1.2; letter-spacing: 0.5px; text-align: center;">
                Our <strong style="font-weight: 700; color: var(--champagne);">Rates</strong>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        <p class="font-body" style="text-align: center; font-size: 0.85rem; color: var(--slate); margin: 1.5rem 0 3rem;">
            All rates are flat-rate. Tax and tip are shown per ride. Prices shown as standard&nbsp;/&nbsp;peak where applicable.
        </p>

        {{-- CADILLAC --}}
        <div style="margin-bottom: 2.5rem;">
            <x-ui.rates-vehicle-card
                name="Cadillac Sedan"
                tipLabel="Tip (20%)"
                :rows="[
                    ['persons' => '(1) $105',           'tax' => '$10 / $20', 'tip' => '$21.00 / $39.20',  'total' => '$136.00 / $239.20'],
                    ['persons' => '(2) $57.50 / $115',  'tax' => '$10 / $20', 'tip' => '$23.00 / $44.00',  'total' => '$148.00 / $284.00'],
                ]"
            />
        </div>

        {{-- PEAK RATE SURCHARGES --}}
        <div style="margin-bottom: 2.5rem;">
            <x-ui.rates-surcharge-strip
                :surcharges="[
                    ['label' => 'Evening Surcharge',       'amount' => '+$30', 'hours' => '9:00 PM – 11:59 PM'],
                    ['label' => 'Late Night Surcharge',    'amount' => '+$85', 'hours' => '12:00 AM – 3:30 AM'],
                    ['label' => 'Early Morning Surcharge', 'amount' => '+$20', 'hours' => '3:31 AM – 5:00 AM'],
                ]"
            />
        </div>

        {{-- SUV / MERCEDES --}}
        <div style="margin-bottom: 2.5rem;">
            <x-ui.rates-vehicle-card
                name="SUV / Mercedes"
                tipLabel="Tip (10% / 20%)"
                :rows="[
                    ['persons' => '(1) $120',          'tax' => '$10 / $20', 'tip' => '$12.00 / $24.00', 'total' => '$154.00 / $164.00'],
                    ['persons' => '(2) $64 / $128',    'tax' => '$10 / $20', 'tip' => '$12.80 / $25.60', 'total' => '$163.60 / $173.60'],
                    ['persons' => '(3) $46 / $138',    'tax' => '$10 / $20', 'tip' => '$13.80 / $27.60', 'total' => '$175.60 / $185.60'],
                    ['persons' => '(4) $37.50 / $150', 'tax' => '$10 / $20', 'tip' => '$15.00 / $30.00', 'total' => '$190.00 / $200.00'],
                    ['persons' => '(5) $32 / $160',    'tax' => '$10 / $20', 'tip' => '$16.00 / $32.00', 'total' => '$202.00 / $212.00'],
                    ['persons' => '(6) $28.33 / $170', 'tax' => '$10 / $20', 'tip' => '$17.00 / $34.00', 'total' => '$214.00 / $224.00'],
                ]"
            />
        </div>

        {{-- STRETCH LIMOUSINE --}}
        <div style="margin-bottom: 2.5rem;">
            <x-ui.rates-vehicle-card
                name="Stretch Limousine"
                tipLabel="Tip (20%)"
                :rows="[
                    ['persons' => '(3) $120 / $240',   'tax' => '$10 / $20', 'tip' => '$24.00 / $48.00', 'total' => '$154.00 / $308.00'],
                    ['persons' => '(4) $140 / $280',   'tax' => '$10 / $20', 'tip' => '$28.00 / $56.00', 'total' => '$178.00 / $356.00'],
                    ['persons' => '(5) $150 / $300',   'tax' => '$10 / $20', 'tip' => '$30.00 / $60.00', 'total' => '$190.00 / $380.00'],
                    ['persons' => '(6) $160 / $320',   'tax' => '$10 / $20', 'tip' => '$32.00 / $64.00', 'total' => '$202.00 / $404.00'],
                    ['persons' => '(7) $200 / $400',   'tax' => '$10 / $20', 'tip' => '$40.00 / $80.00', 'total' => '$250.00 / $500.00'],
                    ['persons' => '(8–10) $210 / $420','tax' => '$10 / $20', 'tip' => '$42.00 / $84.00', 'total' => '$262.00 / $524.00'],
                    ['persons' => '(11–13) $234 / $468','tax'=> '$10 / $20', 'tip' => '$46.80 / $93.60', 'total' => '$290.80 / $581.60'],
                ]"
            />
        </div>

        {{-- SHUTTLE BUS --}}
        <div style="margin-bottom: 2rem;">
            <x-ui.rates-vehicle-card
                name="Shuttle Bus"
                tipLabel="Tip (20%)"
                :rows="[
                    ['persons' => '(14–15) $252 / $504', 'tax' => '$10 / $20', 'tip' => '$50.40 / $100.80', 'total' => '$312.40 / $624.80'],
                ]"
            />
        </div>

        <p class="font-body" style="font-size: 0.75rem; color: var(--slate); text-align: center; margin-top: 1.5rem;">
            Rates subject to change. Contact us for custom quotes on larger groups or extended trips.
        </p>

    </div>
</section>
