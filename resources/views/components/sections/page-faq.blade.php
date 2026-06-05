@props([
    'heading'  => 'Frequently Asked Questions',
    'label'    => 'FAQ',
    'image'    => '',
    'imageAlt' => '',
    'items'    => [],
])

@php
    $half  = count($items) > 0 ? (int) ceil(count($items) / 2) : 0;
    $left  = array_slice($items, 0, $half);
    $right = array_slice($items, $half);
@endphp

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-12">
            <div class="text-center mb-8">
                <p class="text-champagne font-head font-semibold mb-2">{{ $label }}</p>
                <div class="inline-block">
                    <h2 class="text-navy font-bold text-h2 mb-2 font-head">{{ $heading }}</h2>
                    <div class="h-1 bg-champagne"></div>
                </div>
            </div>

            @if($image)
                <div class="flex flex-col md:flex-row gap-8 items-center max-w-4xl mx-auto">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-[280px] h-[373px] object-cover shadow-lg flex-shrink-0"
                    >
                    <div class="text-slate leading-relaxed">{{ $slot }}</div>
                </div>
            @else
                <div class="max-w-4xl mx-auto text-slate leading-relaxed text-center">{{ $slot }}</div>
            @endif
        </div>

        @if(count($items) > 0)
            <div class="grid md:grid-cols-2 gap-6 items-start">
                <div class="space-y-3">
                    @foreach($left as $i => $item)
                        <x-ui.card-faq question="{{ $item['question'] }}" :open="$i === 0">
                            <p class="text-slate">{{ $item['answer'] }}</p>
                        </x-ui.card-faq>
                    @endforeach
                </div>
                <div class="space-y-3">
                    @foreach($right as $item)
                        <x-ui.card-faq question="{{ $item['question'] }}">
                            <p class="text-slate">{{ $item['answer'] }}</p>
                        </x-ui.card-faq>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>
