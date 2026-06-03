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
            class="p-4 sm:p-8 md:p-10 bg-white shadow-gold-lg transition-all duration-500"
        >
            {{-- Title centered full-width at top --}}
            <div class="text-center mb-8">
                <div class="inline-block">
                    <h3 class="text-olive font-bold text-h3 mb-2">{{ $title }}</h3>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            {{-- Image stacks full-width on mobile, floats left/right on md+ --}}
            <div class="[display:flow-root]">
                @if($imagePosition === 'right')
                    <div class="w-full mb-6 md:float-right md:w-[600px] md:ml-12 md:mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block w-full h-auto md:h-[450px] object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                        >
                    </div>
                @else
                    <div class="w-full mb-6 md:float-left md:w-[600px] md:mr-12 md:mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image }}"
                            alt="{{ $alt }}"
                            class="block w-full h-auto md:h-[450px] object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                        >
                    </div>
                @endif

                <div
                    x-data
                    x-init="$el.querySelectorAll('p').forEach(p => {
                        p.style.paddingLeft = '1.5rem';
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
                    class="text-charcoal-light leading-relaxed"
                >
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
