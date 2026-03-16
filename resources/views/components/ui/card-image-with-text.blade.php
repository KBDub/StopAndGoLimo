@props([
    'image' => '',
    'alt'   => '',
    'title' => '',
    'imagePosition' => 'left',
])

<div
    x-data="{ ready: false }"
    x-init="$nextTick(() => ready = true)"
    :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
    class="flex flex-col {{ $imagePosition === 'right' ? 'lg:flex-row-reverse' : 'lg:flex-row' }} gap-6 transition-all duration-500"
>
    {{-- Image div --}}
    <div class="flex-shrink-0 p-6 bg-white shadow-gold-lg hover:scale-[1.03] transition-transform duration-500 flex items-center justify-center">
        <img
            src="{{ $image }}"
            alt="{{ $alt }}"
            class="block object-cover"
            style="width: 600px; height: 450px; max-width: 100%;"
        >
    </div>

    {{-- Text div --}}
    <div class="flex-1 p-10 bg-white shadow-gold-lg card-text-sway flex flex-col justify-center text-center">
        <div class="inline-block mx-auto mb-5">
            <h3 class="text-olive font-bold text-h3 mb-2">{{ $title }}</h3>
            <div class="h-1 bg-sunburst rounded"></div>
        </div>
        <div class="text-charcoal-light leading-relaxed">
            {{ $slot }}
        </div>
    </div>
</div>
