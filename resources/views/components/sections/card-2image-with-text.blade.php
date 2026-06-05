@props([
    'image1' => '',
    'alt1'   => '',
    'image2' => '',
    'alt2'   => '',
    'title'  => '',
])

<section class="py-10 bg-cloud">
    <div class="max-w-7xl mx-auto px-6">
        <div
            x-data="{ ready: false }"
            x-init="$nextTick(() => ready = true)"
            :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
            class="p-4 sm:p-6 md:p-10 bg-white shadow-champagne-lg transition-all duration-500"
        >
            {{-- Title centered full-width at top --}}
            <div class="text-center mb-6 md:mb-8">
                <div class="inline-block">
                    <h3 class="text-champagne font-bold text-h3 mb-2 font-head">{{ $title }}</h3>
                    <div class="h-1 bg-champagne"></div>
                </div>
            </div>

            {{-- Optional intro text above images --}}
            @isset($intro)
                <div class="text-slate leading-relaxed mb-6">
                    {{ $intro }}
                </div>
            @endisset

            {{-- Two images side by side --}}
            <div class="flex flex-col sm:flex-row gap-8 mb-6">
                <div class="flex-1 overflow-hidden shadow-champagne hover:shadow-champagne-xl hover:scale-105 transition-all duration-500 ease-out">
                    <img
                        src="{{ $image1 }}"
                        alt="{{ $alt1 }}"
                        class="block object-cover w-full hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                        style="aspect-ratio: 4/3;"
                    >
                </div>

                <div class="flex-1 overflow-hidden shadow-champagne hover:shadow-champagne-xl hover:scale-105 transition-all duration-500 ease-out">
                    <img
                        src="{{ $image2 }}"
                        alt="{{ $alt2 }}"
                        class="block object-cover w-full hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                        style="aspect-ratio: 4/3;"
                    >
                </div>
            </div>

            {{-- Body text below images --}}
            <div
                x-data
                x-init="$el.querySelectorAll('p').forEach(p => {
                    if (window.innerWidth >= 768) p.style.paddingLeft = '1.5rem';
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
                class="text-slate leading-relaxed"
            >
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
