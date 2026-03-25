@props([
    'banners' => [],
])

@php
    $count = count($banners);
@endphp

<div
    class="grid grid-cols-1 sm:grid-cols-2 gap-6"
    x-data="{ visible: false }"
    x-init="
        const observer = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                visible = true;
                observer.disconnect();
            }
        }, { threshold: 0.1, rootMargin: '0px 0px -80px 0px' });
        observer.observe($el);
    "
>
    @foreach($banners as $i => $banner)
        @php
            $isLastOdd = ($count % 2 !== 0) && ($i === $count - 1);
            $delay     = $i * 80;
        @endphp

        @if($isLastOdd)
            <div class="sm:col-span-2 flex justify-center">
                <div
                    class="lp-banner-wrap w-full sm:w-1/2 transition-all duration-700 ease-out"
                    :class="visible ? 'opacity-100 scale-100' : 'opacity-0 scale-[0.97]'"
                    style="transition-delay: {{ $delay }}ms"
                >
                    <a href="{{ $banner['href'] }}" class="group relative block overflow-hidden">
                        <div class="relative w-full aspect-[16/7] overflow-hidden bg-linen">
                            <img
                                src="{{ $banner['image'] }}"
                                alt="{{ $banner['alt'] }}"
                                loading="lazy"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                            <div class="absolute inset-0 bg-charcoal/0 group-hover:bg-charcoal/85 transition-colors duration-300 flex items-center justify-center">
                                <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center px-6">
                                    <h3 class="text-7xl font-bold text-sunburst underline underline-offset-8 decoration-2">{{ $banner['title'] }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @else
            <div
                class="lp-banner-wrap transition-all duration-700 ease-out"
                :class="visible ? 'opacity-100 scale-100' : 'opacity-0 scale-[0.97]'"
                style="transition-delay: {{ $delay }}ms"
            >
                <a href="{{ $banner['href'] }}" class="group relative block overflow-hidden">
                    <div class="relative w-full aspect-[16/7] overflow-hidden bg-linen">
                        <img
                            src="{{ $banner['image'] }}"
                            alt="{{ $banner['alt'] }}"
                            loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-charcoal/0 group-hover:bg-charcoal/85 transition-colors duration-300 flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center px-6">
                                <h3 class="text-7xl font-bold text-sunburst underline underline-offset-8 decoration-2">{{ $banner['title'] }}</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
</div>
