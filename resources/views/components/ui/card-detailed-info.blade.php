@props([
    'heading' => '',
    'image1'  => '',
    'alt1'    => '',
    'image2'  => '',
    'alt2'    => '',
])

<div class="bg-white shadow-gold-lg p-8 lg:p-12">

    <div class="text-center mb-6">
        <div class="inline-block">
            <h2 class="text-olive font-bold text-h2 mb-2">{{ $heading }}</h2>
            <div class="h-1 bg-sunburst"></div>
        </div>
    </div>

    @if($image2)
        {{-- Two-image layout: image1 floated left with intro, image2 floated right with lower --}}
        <div class="overflow-hidden mb-4">
            <div class="float-left mb-4 shadow-gold flex-shrink-0" style="margin-right: 3rem;">
                <img
                    src="{{ $image1 }}"
                    alt="{{ $alt1 }}"
                    class="block object-cover"
                    style="width: 400px; height: 300px;"
                >
            </div>
            <div class="card-detail-content">
                {{ $intro }}
            </div>
        </div>

        <div class="clear-both mb-4 card-detail-content">
            {{ $mid }}
        </div>

        <div class="overflow-hidden mb-4">
            <div class="float-right ml-6 mb-4 shadow-gold flex-shrink-0">
                <img
                    src="{{ $image2 }}"
                    alt="{{ $alt2 }}"
                    class="block object-cover"
                    style="width: 400px; height: 300px;"
                >
            </div>
            <div class="card-detail-content">
                {{ $lower }}
            </div>
        </div>

        <div class="clear-both border-t-2 border-linen pt-5 card-detail-content">
            {{ $footer }}
        </div>
    @else
        {{-- Single-image layout: intro full width, image floated left with mid wrapping, lower full width below --}}
        <div class="mb-4 card-detail-content">
            {{ $intro }}
        </div>

        <div class="overflow-hidden mb-4">
            <div class="float-left mb-4 shadow-gold flex-shrink-0" style="margin-right: 3rem;">
                <img
                    src="{{ $image1 }}"
                    alt="{{ $alt1 }}"
                    class="block object-cover"
                    style="width: 400px; height: 300px;"
                >
            </div>
            <div class="card-detail-content">
                {{ $mid }}
            </div>
        </div>

        <div class="clear-both mb-4 card-detail-content">
            {{ $lower }}
        </div>

        <div class="border-t-2 border-linen pt-5 card-detail-content">
            {{ $footer }}
        </div>
    @endif

</div>
