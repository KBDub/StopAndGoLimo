@props([
    'heading'   => 'Frequently Asked Questions',
    'label'     => 'FAQ',
    'introText' => '',
    'image'     => '',
    'imageAlt'  => '',
    'faqs'      => [],
])

@push('structured-data')
@if(count($faqs))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $i => $faq)
        {
            "@type": "Question",
            "name": {{ json_encode($faq['q']) }},
            "acceptedAnswer": {
                "@type": "Answer",
                "text": {{ json_encode($faq['a']) }}
            }
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endif
@endpush

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="mb-12">
            <div class="text-center mb-8">
                @if($label)
                    <p class="text-olive font-semibold tracking-widest text-sm uppercase mb-2">{{ $label }}</p>
                @endif
                <div class="inline-block">
                    <h2 class="text-charcoal mb-2">{{ $heading }}</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            @if($image || $introText)
            <div class="flex flex-col md:flex-row gap-8 items-center max-w-4xl mx-auto">
                @if($image)
                <img
                    src="{{ $image }}"
                    alt="{{ $imageAlt }}"
                    class="w-[280px] object-cover shadow-lg flex-shrink-0"
                    loading="lazy"
                >
                @endif
                @if($introText)
                <p class="text-charcoal-light leading-relaxed">{{ $introText }}</p>
                @endif
            </div>
            @endif
        </div>

        {{-- FAQ cards — 2-column grid --}}
        @if(count($faqs))
        <div class="grid md:grid-cols-2 gap-6 items-start">
            <div class="space-y-3">
                @foreach(array_slice($faqs, 0, (int) ceil(count($faqs) / 2)) as $i => $faq)
                    <x-ui.card-faq question="{{ $faq['q'] }}" :open="$i === 0">
                        <p class="text-charcoal-light">{{ $faq['a'] }}</p>
                    </x-ui.card-faq>
                @endforeach
            </div>
            <div class="space-y-3">
                @foreach(array_slice($faqs, (int) ceil(count($faqs) / 2)) as $faq)
                    <x-ui.card-faq question="{{ $faq['q'] }}">
                        <p class="text-charcoal-light">{{ $faq['a'] }}</p>
                    </x-ui.card-faq>
                @endforeach
            </div>
        </div>
        @else
        {{-- Fallback: named slot --}}
        @if($slot->isNotEmpty())
        <div class="grid md:grid-cols-2 gap-6 items-start">
            {{ $slot }}
        </div>
        @endif
        @endif

    </div>
</section>
