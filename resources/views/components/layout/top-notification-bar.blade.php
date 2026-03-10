@props([
    'message' => 'Free Shipping on Orders Over $50!',
    'link' => null,
    'linkText' => 'Shop Now'
])

<div
    x-data="{ scrolled: false }"
    x-on:scroll.window="scrolled = window.scrollY > 50"
    class="bg-sunburst text-charcoal text-center font-semibold sticky-header-part transition-all duration-300"
    x-bind:class="scrolled ? 'py-1 text-xs' : 'py-2 text-sm'"
>
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-center gap-2">
        <span>{{ $message }}</span>
        @if($link)
            <a href="{{ $link }}" class="underline hover:no-underline font-bold">{{ $linkText }}</a>
        @endif
    </div>
</div>
