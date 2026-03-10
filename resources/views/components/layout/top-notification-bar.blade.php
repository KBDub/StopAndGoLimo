@props([
    'message' => 'Free Shipping on Orders Over $50!',
    'link' => null,
    'linkText' => 'Shop Now'
])

<div
    x-data="{ scrolled: false }"
    x-on:scroll.window="if (!scrolled && window.scrollY > 50) scrolled = true; else if (scrolled && window.scrollY < 10) scrolled = false"
    class="bg-sunburst text-charcoal text-center font-semibold sticky-header-part transition-all duration-300"
    x-bind:class="scrolled ? 'py-0.5 text-xs' : 'py-1 text-sm'"
>
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between gap-2">
        <div class="flex-1"></div>
        <div class="flex items-center justify-center gap-2">
            <span>{{ $message }}</span>
            @if($link)
                <a href="{{ $link }}" class="underline hover:no-underline font-bold">{{ $linkText }}</a>
            @endif
        </div>
        <div class="flex-1 flex justify-end">
            @livewire('cart.cart-icon')
        </div>
    </div>
</div>
