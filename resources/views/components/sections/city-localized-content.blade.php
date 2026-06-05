@props([
    'heading'       => '',
    'label'         => 'Local Expertise',
    'image'         => '/images/stopngo-service-area.jpg',
    'alt'           => 'Stop & Go Limo serving Illinois communities',
    'imagePosition' => 'left',
])

<section class="py-10 bg-cloud">
    <div class="max-w-7xl mx-auto px-6">
        <div
            x-data="{ ready: false }"
            x-init="$nextTick(() => ready = true)"
            :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
            class="p-10 bg-white shadow-champagne-lg transition-all duration-500"
        >
            {{-- Centered heading with champagne label + bar --}}
            <div class="text-center mb-8">
                @if($label)
                    <p class="text-champagne font-head font-semibold tracking-widest text-sm mb-2">{{ $label }}</p>
                @endif
                <div class="inline-block">
                    <h2 class="text-navy text-h2 mb-2 font-head">{{ $heading }}</h2>
                    <div class="h-1 bg-champagne w-full"></div>
                </div>
            </div>

            {{-- Float image + flowing prose --}}
            <div class="[display:flow-root]">
                @if($imagePosition === 'right')
                    <div
                        class="float-right mb-4 overflow-hidden shadow-champagne hover:shadow-champagne-xl hover:scale-105 transition-all duration-500 ease-out"
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
                        class="float-left mb-4 overflow-hidden shadow-champagne hover:shadow-champagne-xl hover:scale-105 transition-all duration-500 ease-out"
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
                    class="text-slate leading-relaxed space-y-4 [&>p]:mb-0"
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
