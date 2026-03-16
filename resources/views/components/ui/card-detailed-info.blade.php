@props([
    'heading' => '',
    'image1'  => '',
    'alt1'    => '',
    'image2'  => '',
    'alt2'    => '',
])

<div class="bg-white shadow-gold-lg p-8 lg:p-12">

    {{-- Header: olive heading + sunburst underbar (inline-block so underbar matches text width) --}}
    <div class="inline-block mb-8">
        <h2 class="text-olive font-bold text-h2 mb-2">{{ $heading }}</h2>
        <div class="h-1 bg-sunburst rounded"></div>
    </div>

    {{-- Top section: image floated left, intro text wraps right and continues below --}}
    <div class="overflow-hidden mb-8">
        <div class="float-left mr-8 mb-6 shadow-gold flex-shrink-0">
            <img
                src="{{ $image1 }}"
                alt="{{ $alt1 }}"
                class="block object-cover"
                style="width: 260px; height: auto;"
            >
        </div>
        <div class="card-detail-content">
            {{ $intro }}
        </div>
    </div>

    {{-- Mid section: full width below the top float --}}
    <div class="clear-both mb-8 card-detail-content">
        {{ $mid }}
    </div>

    {{-- Lower section: image floated right, text wraps in from the left --}}
    <div class="overflow-hidden mb-8">
        <div class="float-right ml-8 mb-6 shadow-gold flex-shrink-0">
            <img
                src="{{ $image2 }}"
                alt="{{ $alt2 }}"
                class="block object-cover"
                style="width: 260px; height: auto;"
            >
        </div>
        <div class="card-detail-content">
            {{ $lower }}
        </div>
    </div>

    {{-- Footer: full width closing content --}}
    <div class="clear-both border-t-2 border-linen pt-6 card-detail-content">
        {{ $footer }}
    </div>

</div>
