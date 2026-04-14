<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">DTF Transfer Pricing</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-sm text-charcoal-light max-w-2xl mx-auto">
                Transfers come in a roll.
                <span class="font-semibold text-charcoal">Add $0.30 per image</span>
                if individual cuts are needed.
                Prices shown are per piece at each quantity tier.
            </p>
        </div>

        {{-- Neck Tags --}}
        <div class="mb-10">
            <h3 class="text-base font-bold text-charcoal uppercase tracking-wide mb-4 border-l-4 border-sunburst pl-3">
                Neck Tags <span class="font-normal text-charcoal-light normal-case tracking-normal">(fit within size)</span>
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-2xl">
                @php
                    $neckTags = [
                        ['size' => '2″ × 2″', 'tiers' => [
                            '1 – 14 pcs'    => '$1.99',
                            '15 – 49 pcs'   => '$1.29',
                            '50 – 99 pcs'   => '$1.09',
                            '100 – 249 pcs' => '$0.90',
                            '250+ pcs'      => '$0.70',
                        ]],
                        ['size' => '3″ × 3″', 'tiers' => [
                            '1 – 14 pcs'    => '$2.49',
                            '15 – 49 pcs'   => '$1.62',
                            '50 – 99 pcs'   => '$1.37',
                            '100 – 249 pcs' => '$1.12',
                            '250+ pcs'      => '$0.87',
                        ]],
                    ];
                @endphp
                @foreach($neckTags as $card)
                    <div class="border border-linen-dark bg-white overflow-hidden">
                        <div class="px-4 py-2.5 bg-sunburst text-center">
                            <span class="text-sm font-bold text-charcoal">{{ $card['size'] }}</span>
                        </div>
                        @foreach($card['tiers'] as $qty => $price)
                            <div class="flex items-center justify-between px-4 py-2 {{ $loop->even ? 'bg-linen-light' : 'bg-white' }} border-t border-linen-dark first:border-t-0">
                                <span class="text-xs text-charcoal-light">{{ $qty }}</span>
                                <span class="text-sm font-bold text-charcoal">{{ $price }} <span class="text-xs font-normal text-charcoal-light">ea</span></span>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Left Chest / Right Chest --}}
        <div class="mb-10">
            <h3 class="text-base font-bold text-charcoal uppercase tracking-wide mb-4 border-l-4 border-sunburst pl-3">
                Left Chest or Right Chest Image
            </h3>
            @php
                $chestSizes = [
                    ['size' => '3″ × 2″', 'tiers' => [
                        '1 – 14 pcs'    => '$1.49',
                        '15 – 49 pcs'   => '$1.22',
                        '50 – 99 pcs'   => '$1.02',
                        '100 – 249 pcs' => '$0.84',
                        '250+ pcs'      => '$0.64',
                    ]],
                    ['size' => '3″ × 3″', 'tiers' => [
                        '1 – 14 pcs'    => '$2.49',
                        '15 – 49 pcs'   => '$1.62',
                        '50 – 99 pcs'   => '$1.37',
                        '100 – 249 pcs' => '$1.12',
                        '250+ pcs'      => '$0.87',
                    ]],
                    ['size' => '4″ × 2″', 'tiers' => [
                        '1 – 14 pcs'    => '$1.99',
                        '15 – 49 pcs'   => '$1.29',
                        '50 – 99 pcs'   => '$1.09',
                        '100 – 249 pcs' => '$0.90',
                        '250+ pcs'      => '$0.70',
                    ]],
                    ['size' => '4″ × 3″', 'tiers' => [
                        '1 – 14 pcs'    => '$2.49',
                        '15 – 49 pcs'   => '$1.85',
                        '50 – 99 pcs'   => '$1.49',
                        '100 – 249 pcs' => '$1.24',
                        '250+ pcs'      => '$0.99',
                    ]],
                    ['size' => '4″ × 4″', 'tiers' => [
                        '1 – 14 pcs'    => '$2.99',
                        '15 – 49 pcs'   => '$1.94',
                        '50 – 99 pcs'   => '$1.64',
                        '100 – 249 pcs' => '$1.35',
                        '250+ pcs'      => '$1.05',
                    ]],
                    ['size' => '5″ × 3″', 'tiers' => [
                        '1 – 14 pcs'    => '$3.49',
                        '15 – 49 pcs'   => '$2.99',
                        '50 – 99 pcs'   => '$2.49',
                        '100 – 249 pcs' => '$1.99',
                        '250+ pcs'      => '$1.49',
                    ]],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($chestSizes as $card)
                    <div class="border border-linen-dark bg-white overflow-hidden">
                        <div class="px-4 py-2.5 bg-sunburst text-center">
                            <span class="text-sm font-bold text-charcoal">{{ $card['size'] }}</span>
                        </div>
                        @foreach($card['tiers'] as $qty => $price)
                            <div class="flex items-center justify-between px-4 py-2 {{ $loop->even ? 'bg-linen-light' : 'bg-white' }} border-t border-linen-dark first:border-t-0">
                                <span class="text-xs text-charcoal-light">{{ $qty }}</span>
                                <span class="text-sm font-bold text-charcoal">{{ $price }} <span class="text-xs font-normal text-charcoal-light">ea</span></span>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Drop zone CTA --}}
        <div class="border border-linen-dark bg-white p-8">
            <div class="text-center mb-6">
                <h3 class="text-lg font-bold text-charcoal mb-1">Ready to order your DTF transfers?</h3>
                <p class="text-sm text-charcoal-light">Drop your design file below to get started — we'll walk you through the rest.</p>
            </div>
            <x-ui.dtf-dropzone class="max-w-2xl mx-auto" />
        </div>

    </div>
</section>
