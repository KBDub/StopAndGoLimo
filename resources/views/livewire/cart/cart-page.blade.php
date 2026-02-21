<div>
    <section class="py-10 bg-linen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <h1 class="font-heading text-3xl font-bold text-charcoal mb-8">Shopping Cart</h1>

            @if($cart && $cart->lines->isNotEmpty())
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 space-y-4">
                        @foreach($cart->lines as $line)
                            @php
                                $variant = $line->purchasable;
                                $product = $variant->product;
                                $productName = $product->translateAttribute('name');
                                $thumbnail = $product->thumbnail?->getUrl('small') ?? null;
                                $variantLabel = $variant->sku ? last(explode('-', $variant->sku)) : '';
                                $unitPrice = $line->unitPrice?->value ?? 0;
                                $lineTotal = $line->subTotal?->value ?? 0;
                                $productUrl = '/products/' . ($product->urls->first()?->slug ?? '');
                            @endphp
                            <div class="bg-white rounded-xl shadow p-6 flex gap-6" wire:key="cart-line-{{ $line->id }}">
                                <a href="{{ $productUrl }}" class="w-24 h-24 flex-shrink-0 rounded-lg overflow-hidden bg-linen block">
                                    @if($thumbnail)
                                        <img src="{{ $thumbnail }}" alt="{{ $productName }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center">
                                            <svg class="w-10 h-10 text-charcoal-lighter" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    @endif
                                </a>

                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <a href="{{ $productUrl }}" class="font-heading font-semibold text-charcoal hover:text-azure transition-colors">
                                                {{ $productName }}
                                            </a>
                                            @if($variantLabel)
                                                <p class="text-sm text-charcoal-light mt-0.5">{{ $variantLabel }}</p>
                                            @endif
                                            <p class="text-sm text-charcoal-light mt-1">${{ number_format($unitPrice / 100, 2) }} each</p>
                                        </div>
                                        <button
                                            wire:click="removeLine({{ $line->id }})"
                                            class="text-charcoal-light hover:text-red-600 transition-colors p-1"
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
                                                class="w-8 h-8 rounded-lg border border-charcoal-lighter flex items-center justify-center text-charcoal-light hover:bg-linen transition-colors"
                                            >
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                                </svg>
                                            </button>
                                            <span class="w-10 text-center font-bold">{{ $line->quantity }}</span>
                                            <button
                                                wire:click="updateQuantity({{ $line->id }}, {{ $line->quantity + 1 }})"
                                                class="w-8 h-8 rounded-lg border border-charcoal-lighter flex items-center justify-center text-charcoal-light hover:bg-linen transition-colors"
                                            >
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <span class="font-bold text-lg text-charcoal">${{ number_format($lineTotal / 100, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-xl shadow p-6 sticky top-32">
                            <h2 class="font-heading text-xl font-bold text-charcoal mb-4">Order Summary</h2>

                            @php
                                $subTotal = $cart->subTotal?->value ?? 0;
                                $taxTotal = $cart->taxTotal?->value ?? 0;
                                $total = $cart->total?->value ?? 0;
                            @endphp

                            <div class="space-y-3 mb-6">
                                <div class="flex justify-between text-sm">
                                    <span class="text-charcoal-light">Subtotal ({{ $cart->lines->sum('quantity') }} items)</span>
                                    <span class="font-medium text-charcoal">${{ number_format($subTotal / 100, 2) }}</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-charcoal-light">Shipping</span>
                                    <span class="text-sm text-charcoal-light">Calculated at checkout</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-charcoal-light">Estimated tax</span>
                                    <span class="font-medium text-charcoal">${{ number_format($taxTotal / 100, 2) }}</span>
                                </div>
                                <div class="border-t border-linen-dark pt-3">
                                    <div class="flex justify-between">
                                        <span class="font-bold text-charcoal">Total</span>
                                        <span class="font-bold text-xl text-charcoal">${{ number_format($total / 100, 2) }}</span>
                                    </div>
                                </div>
                            </div>

                            <x-ui.button-gold-gradient href="/checkout" class="w-full text-center justify-center py-3 mb-3">
                                Proceed to Checkout
                            </x-ui.button-gold-gradient>

                            <x-ui.button-outline-charcoal href="/shop" class="w-full text-center justify-center py-2 text-sm">
                                Continue Shopping
                            </x-ui.button-outline-charcoal>

                            <div class="mt-6 pt-4 border-t border-linen-dark">
                                <div class="flex items-center gap-2 text-sm text-charcoal-light">
                                    <svg class="w-5 h-5 text-olive flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                    <span>Secure checkout - veteran-owned business</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white rounded-xl shadow p-12 text-center max-w-lg mx-auto">
                    <svg class="w-20 h-20 text-charcoal-lighter mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <h2 class="font-heading text-2xl font-bold text-charcoal mb-3">Your cart is empty</h2>
                    <p class="text-charcoal-light mb-8">Looks like you haven't added any items yet. Browse our catalog to find custom signage, apparel, and more.</p>
                    <x-ui.button-gold-gradient href="/shop" class="px-8">
                        Browse Products
                    </x-ui.button-gold-gradient>
                </div>
            @endif
        </div>
    </section>
</div>
