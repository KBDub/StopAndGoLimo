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
            x-data="{ ready: false }"
            x-init="
                $nextTick(() => ready = true);
                $el.querySelectorAll('p').forEach(p => {
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
            :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
            class="bg-white shadow-gold-lg p-4 sm:p-6 md:p-10 lg:p-12 transition-all duration-500"
        >

            <div class="text-center mb-6 md:mb-8">
                <div class="inline-block">
                    <h2 class="text-olive font-bold text-h2 mb-2">{{ $heading }}</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            @if($image2)
                {{-- Two-image layout: side-by-side centered at top, all text slots stacked below --}}
                <div class="flex flex-col sm:flex-row gap-6 justify-center mb-6">
                    <div class="flex-1 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover w-full hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="aspect-ratio: 4/3;"
                        >
                    </div>
                    <div class="flex-1 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image2 }}"
                            alt="{{ $alt2 }}"
                            class="block object-cover w-full hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="aspect-ratio: 4/3;"
                        >
                    </div>
                </div>

                <div class="card-detail-content mb-4">{{ $intro }}</div>
                <div class="card-detail-content mb-4">{{ $mid }}</div>
                <div class="card-detail-content mb-4">{{ $lower }}</div>
                <div class="border-t-2 border-linen pt-5 card-detail-content">{{ $footer }}</div>

            @else
                {{-- Single-image layout: centered at top, all text slots stacked below --}}
                <div class="flex justify-center mb-6">
                    <div class="w-full sm:max-w-[400px] overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover w-full hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="aspect-ratio: 4/3;"
                        >
                    </div>
                </div>

                <div class="card-detail-content mb-4">{{ $intro }}</div>
                <div class="card-detail-content mb-4">{{ $mid }}</div>
                <div class="card-detail-content mb-4">{{ $lower }}</div>
                <div class="border-t-2 border-linen pt-5 card-detail-content">{{ $footer }}</div>

            @endif

        </div>
    </div>
</section>
