@props([
    'heading' => '',
    'image1'  => '',
    'alt1'    => '',
    'image2'  => '',
    'alt2'    => '',
])

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
    class="bg-white shadow-gold-lg p-4 sm:p-8 lg:p-12"
>

    <div class="text-center mb-6">
        <div class="inline-block">
            <h2 class="text-olive font-bold text-h2 mb-2">{{ $heading }}</h2>
            <div class="h-1 bg-sunburst"></div>
        </div>
    </div>

    @if($image2)
        {{-- Two-image layout: image1 stacks on mobile, floats left on md+ --}}
        <div class="[display:flow-root] mb-4">
            <div class="w-full mb-6 md:float-left md:w-[400px] md:mr-12 md:mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out flex-shrink-0">
                <img
                    src="{{ $image1 }}"
                    alt="{{ $alt1 }}"
                    class="block w-full h-auto md:h-[300px] object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                >
            </div>
            <div class="card-detail-content">
                {{ $intro }}
            </div>
        </div>

        <div class="clear-both mb-4 card-detail-content">
            {{ $mid }}
        </div>

        {{-- image2 stacks on mobile, floats right on md+ --}}
        <div class="[display:flow-root] mb-4">
            <div class="w-full mb-6 md:float-right md:w-[400px] md:ml-6 md:mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out flex-shrink-0">
                <img
                    src="{{ $image2 }}"
                    alt="{{ $alt2 }}"
                    class="block w-full h-auto md:h-[300px] object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                >
            </div>
            <div class="card-detail-content">
                {{ $lower }}
            </div>
        </div>

        <div class="clear-both border-t-2 border-linen pt-5 card-detail-content">
            {{ $footer }}
        </div>
    @else
        {{-- Single-image layout: intro full width, image stacks on mobile / floats left on md+ --}}
        <div class="mb-4 card-detail-content">
            {{ $intro }}
        </div>

        <div class="[display:flow-root] mb-4">
            <div class="w-full mb-6 md:float-left md:w-[400px] md:mr-12 md:mb-4 overflow-hidden shadow-gold hover:shadow-gold-xl hover:scale-105 transition-all duration-500 ease-out flex-shrink-0">
                <img
                    src="{{ $image1 }}"
                    alt="{{ $alt1 }}"
                    class="block w-full h-auto md:h-[300px] object-cover hover:scale-[1.08] hover:brightness-105 transition-all duration-500 ease-out"
                >
            </div>
            <div class="card-detail-content">
                {{ $mid }}
            </div>
        </div>

        <div class="clear-both mb-4 card-detail-content">
            {{ $lower }}
        </div>

        <div class="border-t-2 border-linen pt-5 card-detail-content">
            {{ $footer }}
        </div>
    @endif

</div>
