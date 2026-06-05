@props([
    'image'     => '',
    'alt'       => '',
    'title'     => '',
    'href'      => '#',
    'direction' => 'left',
])

@php
    $translateStart = $direction === 'right' ? '100%' : '-100%';
    $isModal = $href === '/contact';
@endphp

<div
    x-data="{ visible: false }"
    x-init="
        const observer = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                visible = true;
                observer.disconnect();
            }
        }, { threshold: 0.1 });
        observer.observe($el);
    "
    class="relative overflow-hidden"
>
    <div
        :style="{
            transform: visible ? 'translateX(0)' : 'translateX({{ $translateStart }})',
            opacity:   visible ? '1' : '0',
            transition: 'transform 800ms cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 600ms ease-out'
        }"
    >
        @if($isModal)
            <button type="button" @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))" class="group relative block overflow-hidden w-full text-left cursor-pointer">
        @else
            <a href="{{ $href }}" class="group relative block overflow-hidden">
        @endif
            <div class="relative w-full aspect-[16/7] overflow-hidden bg-cloud">
                <img
                    src="{{ $image }}"
                    alt="{{ $alt }}"
                    loading="lazy"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-navy/0 group-hover:bg-navy/85 transition-colors duration-300 flex items-center justify-center">
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center px-6">
                        <h3 class="text-3xl md:text-5xl lg:text-7xl font-bold text-champagne underline underline-offset-8 decoration-2 font-head">{{ $title }}</h3>
                    </div>
                </div>
            </div>
        @if($isModal)
            </button>
        @else
            </a>
        @endif
    </div>
</div>
