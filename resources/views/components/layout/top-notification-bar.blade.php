@props([
    'message' => 'Free Shipping on Orders Over $50!',
    'link' => null,
    'linkText' => 'Shop Now'
])

<div class="bg-sunburst text-charcoal py-2 text-center text-sm font-semibold">
    <div class="max-w-6xl mx-auto px-6 flex items-center justify-center gap-2">
        <span>{{ $message }}</span>
        @if($link)
            <a href="{{ $link }}" class="underline hover:no-underline font-bold">{{ $linkText }}</a>
        @endif
    </div>
</div>
