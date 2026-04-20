<div>
    @php
        $shopLink     = isset($storefrontHomeUrl)     ? $storefrontHomeUrl     : '/top5pct-merchandise';
        $cartLink     = isset($storefrontCartUrl)     ? $storefrontCartUrl     : '/cart';
        $checkoutLink = isset($storefrontCheckoutUrl) ? $storefrontCheckoutUrl : '/checkout';
    @endphp

    <div
        x-data="{ show: @entangle('open') }"
        x-show="show"
        x-cloak
        class="fixed inset-0 z-[60]"
        @keydown.escape.window="show = false; $wire.closeDrawer()"
    >
        {{-- Backdrop --}}
        <div
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0"
            style="background-color: rgba(0,0,0,0.5)"
            @click="show = false; $wire.closeDrawer()"
        ></div>

        {{-- Panel --}}
        <div
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed right-0 top-0 h-full w-full max-w-md bg-white shadow-xl flex flex-col"
        >
            {{-- Header --}}
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h2 class="text-xl font-bold" style="color: var(--brand-primary)">Your Cart</h2>
                <button
                    @click="show = false; $wire.closeDrawer()"
                    class="p-2 text-gray-400 hover:text-gray-600 transition-colors"
                    aria-label="Close cart"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Items --}}
            <div class="flex-1 overflow-y-auto p-6">
                @if($cart && $cart->lines->isNotEmpty())
                    <div class="space-y-4">
                        @foreach($cart->lines as $line)
                            @php
                                $variant      = $line->purchasable;
                                $product      = $variant->product;
                                $productName  = $product->translateAttribute('name');
                                $thumbnail    = $product->thumbnail?->getUrl('small') ?? null;
                                $variantLabel = $variant->sku ? last(explode('-', $variant->sku)) : '';
                                $lineTotal    = $line->subTotal?->value ?? 0;
                            @endphp
                            <div class="flex gap-4 pb-4 border-b border-gray-200" wire:key="drawer-line-{{ $line->id }}">
                                <div class="w-20 h-20 flex-shrink-0 overflow-hidden bg-gray-100">
                                    @if($thumbnail)
                                        <img src="{{ $thumbnail }}" alt="{{ $productName }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center">
                                            <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-sm truncate" style="color: var(--brand-primary)">{{ $productName }}</h4>
                                    @if($variantLabel)
                                        <p class="text-xs text-gray-500 mt-0.5">{{ $variantLabel }}</p>
                                    @endif
                                    <p class="text-sm font-bold mt-1" style="color: var(--brand-primary)">${{ number_format($lineTotal / 100, 2) }}</p>

                                    <div class="flex items-center gap-2 mt-2">
                                        <button
                                            wire:click="updateQuantity({{ $line->id }}, {{ $line->quantity - 1 }})"
                                            class="w-7 h-7 border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors text-sm"
                                        >-</button>
                                        <span class="text-sm font-medium w-6 text-center">{{ $line->quantity }}</span>
                                        <button
                                            wire:click="updateQuantity({{ $line->id }}, {{ $line->quantity + 1 }})"
                                            class="w-7 h-7 border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors text-sm"
                                        >+</button>

                                        <button
                                            wire:click="removeLine({{ $line->id }})"
                                            class="ml-auto text-gray-400 hover:text-red-600 transition-colors"
                                            aria-label="Remove item"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center h-full text-center">
                        <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <h3 class="font-bold text-lg mb-2" style="color: var(--brand-primary)">Your cart is empty</h3>
                        <p class="text-sm text-gray-500 mb-6">Browse our products and find something you love.</p>
                        <a
                            href="{{ $shopLink }}"
                            @click="show = false; $wire.closeDrawer()"
                            class="inline-block px-6 py-3 font-semibold text-sm transition-all hover:opacity-90"
                            style="background-color: var(--brand-secondary); color: var(--brand-primary)"
                        >
                            Start Shopping
                        </a>
                    </div>
                @endif
            </div>

            {{-- Footer totals + CTAs --}}
            @if($cart && $cart->lines->isNotEmpty())
                <div class="border-t border-gray-200 p-6 bg-gray-50">
                    @php
                        $subTotal = $cart->subTotal?->value ?? 0;
                        $taxTotal = $cart->taxTotal?->value ?? 0;
                        $total    = $cart->total?->value ?? 0;
                    @endphp
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Subtotal</span>
                            <span class="font-medium" style="color: var(--brand-primary)">${{ number_format($subTotal / 100, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Estimated tax</span>
                            <span class="font-medium" style="color: var(--brand-primary)">${{ number_format($taxTotal / 100, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-base font-bold border-t border-gray-200 pt-2">
                            <span style="color: var(--brand-primary)">Total</span>
                            <span style="color: var(--brand-primary)">${{ number_format($total / 100, 2) }}</span>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <a
                            href="{{ $checkoutLink }}"
                            class="block w-full text-center py-3 font-bold text-sm transition-all hover:opacity-90"
                            style="background-color: var(--brand-secondary); color: var(--brand-primary)"
                        >
                            Proceed to Checkout
                        </a>
                        <a
                            href="{{ $cartLink }}"
                            class="block w-full text-center py-2 text-sm font-semibold border-2 transition-all hover:opacity-70"
                            style="border-color: var(--brand-primary); color: var(--brand-primary)"
                        >
                            View Full Cart
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
