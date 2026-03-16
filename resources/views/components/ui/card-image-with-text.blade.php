@props([
    'image' => '',
    'alt' => '',
    'title' => '',
    'imagePosition' => 'left',
    'href' => null,
    'linkText' => 'Learn More',
])

<div
    x-data="{ ready: false }"
    x-init="$nextTick(() => ready = true)"
    :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
    class="group flex flex-col {{ $imagePosition === 'right' ? 'md:flex-row-reverse' : 'md:flex-row' }} bg-white shadow-md hover:shadow-gold-lg border border-gray-100 transition-all duration-500"
>
    {{-- Image side --}}
    <div class="flex-shrink-0 overflow-hidden" style="width: 600px; max-width: 100%;">
        <img
            src="{{ $image }}"
            alt="{{ $alt }}"
            class="w-full object-cover group-hover:scale-[1.03] transition-transform duration-500 ease-out"
            style="height: 450px;"
        >
    </div>

    {{-- Text side --}}
    <div class="flex-1 flex flex-col justify-center px-10 py-10 bg-white">
        <div class="inline-block mb-5">
            <h3 class="text-olive font-bold text-h3 mb-2">{{ $title }}</h3>
            <div class="h-1 bg-sunburst rounded"></div>
        </div>

        <div class="text-charcoal-light leading-relaxed">
            {{ $slot }}
        </div>

        @if($href)
            <div class="mt-8">
                <x-ui.button-gold-gradient href="{{ $href }}">
                    {{ $linkText }}
                </x-ui.button-gold-gradient>
            </div>
        @endif
    </div>
</div>
