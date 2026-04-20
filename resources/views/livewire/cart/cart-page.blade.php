<div>
    @php
        $shopLink     = isset($storefrontHomeUrl)     ? $storefrontHomeUrl     : '/top5pct-merchandise';
        $checkoutLink = isset($storefrontCheckoutUrl) ? $storefrontCheckoutUrl : '/checkout';
    @endphp

    <section class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <h1 class="text-3xl font-bold mb-8" style="color: var(--brand-primary)">Shopping Cart</h1>

            @if($cart && $cart->lines->isNotEmpty())
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    {{-- Line items --}}
                    <div class="lg:col-span-2 space-y-4">
                        @foreach($cart->lines as $line)
                            @php
                                $variant      = $line->purchasable;
                                $product      = $variant->product;
                                $productName  = $product->translateAttribute('name');
                                $thumbnail    = $product->thumbnail?->getUrl('small') ?? null;
                                $variantLabel = $variant->sku ? last(explode('-', $variant->sku)) : '';
                                $unitPrice    = $line->unitPrice?->value ?? 0;
                                $lineTotal    = $line->subTotal?->value ?? 0;
                                $productSlug  = $product->urls->first()?->slug ?? '';
                                $productUrl   = $productSlug ? '/product/' . $productSlug : '#';
                            @endphp
                            <div class="bg-white shadow p-6 flex gap-6" wire:key="cart-line-{{ $line->id }}">
                                <a href="{{ $productUrl }}" class="w-24 h-24 flex-shrink-0 overflow-hidden bg-gray-100 block">
                                    @if($thumbnail)
                                        <img src="{{ $thumbnail }}" alt="{{ $productName }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center">
                                            <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    @endif
                                </a>

                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <a href="{{ $productUrl }}" class="font-semibold hover:opacity-70 transition-opacity" style="color: var(--brand-primary)">
                                                {{ $productName }}
                                            </a>
                                            @if($variantLabel)
                                                <p class="text-sm text-gray-500 mt-0.5">{{ $variantLabel }}</p>
                                            @endif
                                            <p class="text-sm text-gray-500 mt-1">${{ number_format($unitPrice / 100, 2) }} each</p>
                                        </div>
                                        <button
                                            wire:click="removeLine({{ $line->id }})"
                                            class="text-gray-400 hover:text-red-600 transition-colors p-1"
                                            aria-label="Remove item"
                                        >
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex items-center gap-2">
                                            <button
                                                wire:click="updateQuantity({{ $line->id }}, {{ $line->quantity - 1 }})"
                                                class="w-8 h-8 border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                                            >
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                                </svg>
                                            </button>
                                            <span class="w-10 text-center font-bold" style="color: var(--brand-primary)">{{ $line->quantity }}</span>
                                            <button
                                                wire:click="updateQuantity({{ $line->id }}, {{ $line->quantity + 1 }})"
                                                class="w-8 h-8 border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100 transition-colors"
                                            >
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <span class="font-bold text-lg" style="color: var(--brand-primary)">${{ number_format($lineTotal / 100, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Order summary --}}
                    <div class="lg:col-span-1">
                        <div class="bg-white shadow p-6 sticky top-32">
                            <h2 class="text-xl font-bold mb-4" style="color: var(--brand-primary)">Order Summary</h2>

                            @php
                                $subTotal = $cart->subTotal?->value ?? 0;
                                $taxTotal = $cart->taxTotal?->value ?? 0;
                                $total    = $cart->total?->value ?? 0;
                            @endphp

                            <div class="space-y-3 mb-6">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-500">Subtotal ({{ $cart->lines->sum('quantity') }} items)</span>
                                    <span class="font-medium" style="color: var(--brand-primary)">${{ number_format($subTotal / 100, 2) }}</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-500">Shipping</span>
                                    <span class="text-sm text-gray-500">Calculated at checkout</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-500">Estimated tax</span>
                                    <span class="font-medium" style="color: var(--brand-primary)">${{ number_format($taxTotal / 100, 2) }}</span>
                                </div>
                                <div class="border-t border-gray-200 pt-3">
                                    <div class="flex justify-between">
                                        <span class="font-bold" style="color: var(--brand-primary)">Total</span>
                                        <span class="font-bold text-xl" style="color: var(--brand-primary)">${{ number_format($total / 100, 2) }}</span>
                                    </div>
                                </div>
                            </div>

                            <a
                                href="{{ $checkoutLink }}"
                                class="block w-full text-center py-3 font-bold text-sm mb-3 transition-all hover:opacity-90"
                                style="background-color: var(--brand-secondary); color: var(--brand-primary)"
                            >
                                Proceed to Checkout
                            </a>

                            <a
                                href="{{ $shopLink }}"
                                class="block w-full text-center py-2 text-sm font-semibold border-2 transition-all hover:opacity-70"
                                style="border-color: var(--brand-primary); color: var(--brand-primary)"
                            >
                                Continue Shopping
                            </a>

                            <div class="mt-6 pt-4 border-t border-gray-200">
                                <div class="flex items-center gap-2 text-sm text-gray-500">
                                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--brand-accent)">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                    <span>Secure checkout — veteran-owned business</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                {{-- Empty cart --}}
                <div class="bg-white shadow p-12 text-center max-w-lg mx-auto">
                    <svg class="w-20 h-20 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <h2 class="text-2xl font-bold mb-3" style="color: var(--brand-primary)">Your cart is empty</h2>
                    <p class="text-gray-500 mb-8">Looks like you haven't added any items yet.</p>
                    <a
                        href="{{ $shopLink }}"
                        class="inline-block px-8 py-3 font-bold transition-all hover:opacity-90"
                        style="background-color: var(--brand-secondary); color: var(--brand-primary)"
                    >
                        Browse Products
                    </a>
                </div>
            @endif
        </div>
    </section>
</div>
