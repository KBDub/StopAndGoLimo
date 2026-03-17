@props([
    'image1' => '',
    'alt1'   => '',
    'image2' => '',
    'alt2'   => '',
    'title'  => '',
])

<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">
        <div
            x-data="{ ready: false }"
            x-init="$nextTick(() => ready = true)"
            :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-3'"
            class="p-10 bg-white shadow-gold-lg transition-all duration-500"
        >
            {{-- Title centered full-width at top --}}
            <div class="text-center mb-6">
                <div class="inline-block">
                    <h3 class="text-olive font-bold text-h3 mb-2">{{ $title }}</h3>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>

            {{-- Optional intro text above images --}}
            @isset($intro)
                <div class="text-charcoal-light leading-relaxed mb-6">
                    {{ $intro }}
                </div>
            @endisset

            {{-- Two images side by side --}}
            <div class="flex flex-col sm:flex-row gap-6 mb-6">
                <div class="flex-1 shadow-gold hover:scale-[1.03] transition-transform duration-500 flex items-center justify-center">
                    <img
                        src="{{ $image1 }}"
                        alt="{{ $alt1 }}"
                        class="block object-cover w-full"
                        style="aspect-ratio: 4/3;"
                    >
                </div>

                <div class="flex-1 shadow-gold hover:scale-[1.03] transition-transform duration-500 flex items-center justify-center">
                    <img
                        src="{{ $image2 }}"
                        alt="{{ $alt2 }}"
                        class="block object-cover w-full"
                        style="aspect-ratio: 4/3;"
                    >
                </div>
            </div>

            {{-- Body text below images --}}
            <div class="text-charcoal-light leading-relaxed">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
