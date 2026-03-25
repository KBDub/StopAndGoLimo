@props([
    'heading' => '',
    'image1'  => '',
    'alt1'    => '',
    'image2'  => '',
    'alt2'    => '',
])

<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">
        <div
            x-data
            x-init="$el.querySelectorAll('p').forEach(p => { p.style.paddingLeft = '1.5rem'; const w = p.innerHTML.trim().split(/\s+/); if(w.length > 4){ p.innerHTML = '<strong>' + w.slice(0,4).join(' ') + '</strong> ' + w.slice(4).join(' '); } })"
            class="bg-white shadow-gold-lg p-8 lg:p-12"
        >

            <div class="text-center mb-6">
                <div class="inline-block">
                    <h2 class="text-olive font-bold text-h2 mb-2">{{ $heading }}</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            @if($image2)
                {{-- Two-image layout: image1 floated left with intro, image2 floated right with lower --}}
                <div class="[display:flow-root] mb-4">
                    <div class="float-left mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out flex-shrink-0" style="margin-right: 3rem;">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
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

                <div class="[display:flow-root] mb-4">
                    <div class="float-right ml-6 mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out flex-shrink-0">
                        <img
                            src="{{ $image2 }}"
                            alt="{{ $alt2 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
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

                <div class="[display:flow-root] mb-4">
                    <div class="float-left mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out flex-shrink-0" style="margin-right: 3rem;">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
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
    </div>
</section>
