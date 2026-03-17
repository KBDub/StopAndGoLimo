@props([
    'image' => '',
    'alt'   => '',
    'title' => '',
    'imagePosition' => 'left',
])

<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">
        <div
            x-data="{ ready: false }"
            x-init="$nextTick(() => ready = true)"
            :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
            class="p-10 bg-white shadow-gold-lg transition-all duration-500"
        >
            {{-- Title centered full-width at top --}}
            <div class="text-center mb-8">
                <div class="inline-block">
                    <h3 class="text-olive font-bold text-h3 mb-2">{{ $title }}</h3>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            {{-- Float-based image + wrapping text --}}
            <div class="overflow-hidden">
                @if($imagePosition === 'right')
                    <div class="float-right mb-4 shadow-gold" style="margin-left: 3rem;">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block object-cover"
                            style="width: 600px; height: 450px; max-width: 100%;"
                        >
                    </div>
                @else
                    <div class="float-left mb-4 shadow-gold" style="margin-right: 3rem;">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block object-cover"
                            style="width: 600px; height: 450px; max-width: 100%;"
                        >
                    </div>
                @endif

                <div class="text-charcoal-light leading-relaxed">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
