@props([
    'productName'  => '',
    'price'        => '',
    'variantLabel' => '',
])

<div
    x-data="{ visible: false }"
    x-on:sticky-cart-show.window="visible = true"
    x-on:sticky-cart-hide.window="visible = false"
    x-show="visible"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="translate-y-full opacity-0"
    style="position:fixed;bottom:0;left:0;right:0;z-index:50;background:#1a1a1a;border-top:2px solid #FFC20E;padding:0.75rem 1.5rem;display:flex;align-items:center;justify-content:space-between;gap:1rem;"
>
    <div style="display:flex;flex-direction:column;gap:0.1rem;min-width:0;">
        <span style="font-family:var(--font-head,sans-serif);font-size:0.9rem;font-weight:700;color:#fff;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $productName }}</span>
        @if($variantLabel)
            <span style="font-size:0.75rem;color:rgba(255,255,255,0.6);">{{ $variantLabel }}</span>
        @endif
    </div>

    <div style="display:flex;align-items:center;gap:1rem;flex-shrink:0;">
        {{ $slot }}
        <span style="font-size:1rem;font-weight:700;color:#FFC20E;">{{ $price }}</span>
        <button style="background:#FFC20E;color:#1a1a1a;font-weight:700;font-size:0.85rem;padding:0.5rem 1.25rem;border:none;cursor:pointer;letter-spacing:0.05em;white-space:nowrap;"
                onmouseenter="this.style.background='#e6ae00'"
                onmouseleave="this.style.background='#FFC20E'">
            Add to cart
        </button>
    </div>
</div>
