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
            <div class="[display:flow-root]">
                @if($imagePosition === 'right')
                    <div class="float-right mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out" style="margin-left: 3rem;">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="width: 600px; height: 450px; max-width: 100%;"
                        >
                    </div>
                @else
                    <div class="float-left mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out" style="margin-right: 3rem;">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="width: 600px; height: 450px; max-width: 100%;"
                        >
                    </div>
                @endif

                <div
                    x-data
                    x-init="$el.querySelectorAll('p').forEach(p => { p.style.paddingLeft = '1.5rem'; const w = p.innerHTML.trim().split(/\s+/); if(w.length > 4){ p.innerHTML = '<strong>' + w.slice(0,4).join(' ') + '</strong> ' + w.slice(4).join(' '); } })"
                    class="text-charcoal-light leading-relaxed"
                >
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
