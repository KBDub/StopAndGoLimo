@props([
    'heading'       => '',
    'label'         => 'LOCAL EXPERTISE',
    'image'         => '/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg',
    'alt'           => 'Custom signs and apparel by Top 5 Percent',
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
            {{-- Centered heading with olive label + sunburst bar --}}
            <div class="text-center mb-8">
                @if($label)
                    <p class="text-olive font-semibold tracking-widest text-sm uppercase mb-2">{{ $label }}</p>
                @endif
                <div class="inline-block">
                    <h2 class="text-charcoal text-h2 mb-2">{{ $heading }}</h2>
                    <div class="h-1 bg-sunburst w-full"></div>
                </div>
            </div>

            {{-- Float image + flowing prose --}}
            <div class="[display:flow-root]">
                @if($imagePosition === 'right')
                    <div
                        class="float-right mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out"
                        style="margin-left: 3rem;"
                    >
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="w-[340px] h-[255px] object-cover"
                            loading="lazy"
                        >
                    </div>
                @else
                    <div
                        class="float-left mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out"
                        style="margin-right: 3rem;"
                    >
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="w-[340px] h-[255px] object-cover"
                            loading="lazy"
                        >
                    </div>
                @endif

                <div
                    class="text-charcoal-light leading-relaxed space-y-4 [&>p]:mb-0"
                    x-data
                    x-init="
                        $el.querySelectorAll('p').forEach(p => {
                            const text = p.innerHTML.trim();
                            const words = text.split(/\s+/);
                            if (words.length >= 4) {
                                p.innerHTML = '<strong>' + words.slice(0, 4).join(' ') + '</strong> ' + words.slice(4).join(' ');
                            }
                        });
                    "
                >
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
