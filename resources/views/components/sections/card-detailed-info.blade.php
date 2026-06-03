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
            class="bg-white shadow-gold-lg p-6 md:p-8 lg:p-12"
        >

            <div class="text-center mb-6">
                <div class="inline-block">
                    <h2 class="text-olive font-bold text-h2 mb-2">{{ $heading }}</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            @if($image2)
                {{-- Two-image layout --}}
                <div class="[display:flow-root] mb-4">
                    <div class="block mx-auto md:mx-0 md:float-left md:mr-12 mb-6 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out w-full h-56 md:h-[300px]"
                            style="width:400px; max-width:100%;"
                        >
                    </div>
                    <div class="card-detail-content text-center md:text-left">
                        {{ $intro }}
                    </div>
                </div>

                <div class="clear-both mb-4 card-detail-content text-center md:text-left">
                    {{ $mid }}
                </div>

                <div class="[display:flow-root] mb-4">
                    <div class="block mx-auto md:mx-0 md:float-right md:ml-6 mb-6 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image2 }}"
                            alt="{{ $alt2 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out w-full h-56 md:h-[300px]"
                            style="width:400px; max-width:100%;"
                        >
                    </div>
                    <div class="card-detail-content text-center md:text-left">
                        {{ $lower }}
                    </div>
                </div>

                <div class="clear-both border-t-2 border-linen pt-5 card-detail-content text-center md:text-left">
                    {{ $footer }}
                </div>
            @else
                {{-- Single-image layout --}}
                <div class="mb-4 card-detail-content text-center md:text-left">
                    {{ $intro }}
                </div>

                <div class="[display:flow-root] mb-4">
                    <div class="block mx-auto md:mx-0 md:float-left md:mr-12 mb-6 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out">
                        <img
                            src="{{ $image1 }}"
                            alt="{{ $alt1 }}"
                            class="block object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out w-full h-56 md:h-[300px]"
                            style="width:400px; max-width:100%;"
                        >
                    </div>
                    <div class="card-detail-content text-center md:text-left">
                        {{ $mid }}
                    </div>
                </div>

                <div class="clear-both mb-4 card-detail-content text-center md:text-left">
                    {{ $lower }}
                </div>

                <div class="border-t-2 border-linen pt-5 card-detail-content text-center md:text-left">
                    {{ $footer }}
                </div>
            @endif

        </div>
    </div>
</section>
