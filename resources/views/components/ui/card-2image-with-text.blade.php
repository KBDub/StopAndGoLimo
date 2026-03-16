@props([
    'image1' => '',
    'alt1'   => '',
    'image2' => '',
    'alt2'   => '',
    'title'  => '',
])

<div
    x-data="{ ready: false }"
    x-init="$nextTick(() => ready = true)"
    :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
    class="flex flex-col gap-6 transition-all duration-500"
>
    {{-- Two image divs side by side --}}
    <div class="flex flex-col sm:flex-row gap-6">
        <div class="flex-1 p-6 bg-white shadow-gold-lg hover:scale-[1.03] transition-transform duration-500 flex items-center justify-center">
            <img
                src="{{ $image1 }}"
                alt="{{ $alt1 }}"
                class="block object-cover w-full"
                style="aspect-ratio: 4/3;"
            >
        </div>

        <div class="flex-1 p-6 bg-white shadow-gold-lg hover:scale-[1.03] transition-transform duration-500 flex items-center justify-center">
            <img
                src="{{ $image2 }}"
                alt="{{ $alt2 }}"
                class="block object-cover w-full"
                style="aspect-ratio: 4/3;"
            >
        </div>
    </div>

    {{-- Text div centered underneath --}}
    <div class="p-10 bg-white shadow-gold-lg card-text-sway text-center">
        <div class="inline-block mx-auto mb-5">
            <h3 class="text-olive font-bold text-h3 mb-2">{{ $title }}</h3>
            <div class="h-1 bg-sunburst rounded"></div>
        </div>
        <div class="text-charcoal-light leading-relaxed max-w-3xl mx-auto">
            {{ $slot }}
        </div>
    </div>
</div>
