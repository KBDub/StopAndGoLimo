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
            class="p-6 md:p-10 bg-white shadow-gold-lg transition-all duration-500"
        >
            {{-- Title centered full-width at top --}}
            <div class="text-center mb-8">
                <div class="inline-block">
                    <h3 class="text-olive font-bold text-h3 mb-2">{{ $title }}</h3>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            {{-- Mobile: stacked (image centered above text). Desktop (md+): float layout --}}
            <div class="[display:flow-root]">
                @if($imagePosition === 'right')
                    <div class="block mx-auto md:mx-0 md:float-right md:ml-12 mb-6 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out h-64 md:h-[450px]"
                            style="width:600px; max-width:100%;"
                        >
                    </div>
                @else
                    <div class="block mx-auto md:mx-0 md:float-left md:mr-12 mb-6 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out h-64 md:h-[450px]"
                            style="width:600px; max-width:100%;"
                        >
                    </div>
                @endif

                <div
                    x-data
                    x-init="$el.querySelectorAll('p').forEach(p => {
                        if (window.innerWidth >= 768) { p.style.paddingLeft = '1.5rem'; }
                        if (p.textContent.trim().split(/\s+/).length <= 4) return;
                        const nodes = [];
                        const tw = document.createTreeWalker(p, NodeFilter.SHOW_TEXT);
                        let n;
                        while (n = tw.nextNode()) nodes.push(n);
                        let c = 0;
                        for (const t of nodes) {
                            if (c >= 4) break;
                            const f = document.createDocumentFragment();
                            t.data.split(/(\s+)/).forEach(s => {
                                if (/^\s*$/.test(s)) {
                                    f.appendChild(document.createTextNode(s));
                                } else if (c < 4) {
                                    const b = document.createElement('strong');
                                    b.textContent = s;
                                    f.appendChild(b);
                                    c++;
                                } else {
                                    f.appendChild(document.createTextNode(s));
                                }
                            });
                            t.parentNode.replaceChild(f, t);
                        }
                    })"
                    class="text-charcoal-light leading-relaxed text-center md:text-left"
                >
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
