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
                {{-- Two-image layout --}}
                {{-- image1 float-left + $intro wrapping beside and below --}}
                <div class="[display:flow-root] mb-4">
                    <div class="md:float-left md:mr-12 mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out" style="max-width:100%;">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="width:400px; aspect-ratio:4/3; max-width:100%;"
                        >
                    </div>
                    <div class="card-detail-content">{{ $intro }}</div>
                </div>

                {{-- $mid full-width after float clears --}}
                <div class="clear-both mb-4 card-detail-content">{{ $mid }}</div>

                {{-- image2 float-right + $lower wrapping beside and below --}}
                <div class="[display:flow-root] mb-4">
                    <div class="md:float-right md:ml-6 mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out" style="max-width:100%;">
                        <img
                            src="{{ $image2 }}"
                            alt="{{ $alt2 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="width:400px; aspect-ratio:4/3; max-width:100%;"
                        >
                    </div>
                    <div class="card-detail-content">{{ $lower }}</div>
                </div>

                <div class="clear-both border-t-2 border-linen pt-5 card-detail-content">{{ $footer }}</div>

            @else
                {{-- Single-image layout --}}
                {{-- $intro full-width at top --}}
                <div class="mb-4 card-detail-content">{{ $intro }}</div>

                {{-- image1 float-left + $mid wrapping beside and below --}}
                <div class="[display:flow-root] mb-4">
                    <div class="md:float-left md:mr-12 mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out" style="max-width:100%;">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                            style="width:400px; aspect-ratio:4/3; max-width:100%;"
                        >
                    </div>
                    <div class="card-detail-content">{{ $mid }}</div>
                </div>

                {{-- $lower full-width after float clears --}}
                <div class="clear-both mb-4 card-detail-content">{{ $lower }}</div>

                <div class="border-t-2 border-linen pt-5 card-detail-content">{{ $footer }}</div>

            @endif

        </div>
    </div>
</section>
