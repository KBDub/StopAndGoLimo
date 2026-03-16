@props([
    'banners' => [],
])

@php
    $count = count($banners);
@endphp

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    @foreach($banners as $i => $banner)
        @php
            $isLastOdd = ($count % 2 !== 0) && ($i === $count - 1);
        @endphp

        @if($isLastOdd)
            <div class="sm:col-span-2 flex justify-center">
                <a href="{{ $banner['href'] }}" class="group relative block overflow-hidden w-full sm:w-1/2">
                    <div class="relative w-full aspect-[16/7] overflow-hidden bg-linen">
                        <img
                            src="{{ $banner['image'] }}"
                            alt="{{ $banner['alt'] }}"
                            loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-charcoal/0 group-hover:bg-charcoal/55 transition-colors duration-300 flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center px-6">
                                <div class="inline-block">
                                    <h3 class="text-h3 font-bold text-olive mb-2">{{ $banner['title'] }}</h3>
                                    <div class="h-1 bg-sunburst"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @else
            <a href="{{ $banner['href'] }}" class="group relative block overflow-hidden">
                <div class="relative w-full aspect-[16/7] overflow-hidden bg-linen">
                    <img
                        src="{{ $banner['image'] }}"
                        alt="{{ $banner['alt'] }}"
                        loading="lazy"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                    >
                    <div class="absolute inset-0 bg-charcoal/0 group-hover:bg-charcoal/55 transition-colors duration-300 flex items-center justify-center">
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center px-6">
                            <div class="inline-block">
                                <h3 class="text-h3 font-bold text-olive mb-2">{{ $banner['title'] }}</h3>
                                <div class="h-1 bg-sunburst"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>
