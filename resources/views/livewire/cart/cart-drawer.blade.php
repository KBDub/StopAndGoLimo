<div>
    <div
        x-data="{ show: @entangle('open') }"
        x-show="show"
        x-cloak
        class="fixed inset-0 z-[60]"
        @keydown.escape.window="show = false; $wire.closeDrawer()"
    >
        <div
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-charcoal/50"
            @click="show = false; $wire.closeDrawer()"
        ></div>

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
            <div class="flex items-center justify-between p-6 border-b border-linen-dark">
                <h2 class="font-heading text-xl font-bold text-charcoal">Your Cart</h2>
                <button
                    @click="show = false; $wire.closeDrawer()"
                    class="p-2 text-charcoal-light hover:text-charcoal transition-colors"
                    aria-label="Close cart"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto p-6">
                @if($cart && $cart->lines->isNotEmpty())
                    <div class="space-y-4">
                        @foreach($cart->lines as $line)
                            @php
                                $variant = $line->purchasable;
                                $product = $variant->product;
                                $productName = $product->translateAttribute('name');
                                $thumbnail = $product->thumbnail?->getUrl('small') ?? null;
                                $variantLabel = $variant->sku ? last(explode('-', $variant->sku)) : '';
                                $lineTotal = $line->subTotal?->value ?? 0;
                            @endphp
                            <div class="flex gap-4 pb-4 border-b border-linen" wire:key="drawer-line-{{ $line->id }}">
                                <div class="w-20 h-20 flex-shrink-0 rounded-lg overflow-hidden bg-linen">
                                    @if($thumbnail)
                                        <img src="{{ $thumbnail }}" alt="{{ $productName }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center">
                                            <svg class="w-8 h-8 text-charcoal-lighter" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-sm text-charcoal truncate">{{ $productName }}</h4>
                                    @if($variantLabel)
                                        <p class="text-xs text-charcoal-light mt-0.5">{{ $variantLabel }}</p>
                                    @endif
                                    <p class="text-sm font-bold text-charcoal mt-1">${{ number_format($lineTotal / 100, 2) }}</p>

                                    <div class="flex items-center gap-2 mt-2">
                                        <button
                                            wire:click="updateQuantity({{ $line->id }}, {{ $line->quantity - 1 }})"
                                            class="w-7 h-7 rounded border border-charcoal-lighter flex items-center justify-center text-charcoal-light hover:bg-linen transition-colors text-sm"
                                        >-</button>
                                        <span class="text-sm font-medium w-6 text-center">{{ $line->quantity }}</span>
                                        <button
                                            wire:click="updateQuantity({{ $line->id }}, {{ $line->quantity + 1 }})"
                                            class="w-7 h-7 rounded border border-charcoal-lighter flex items-center justify-center text-charcoal-light hover:bg-linen transition-colors text-sm"
                                        >+</button>

                                        <button
                                            wire:click="removeLine({{ $line->id }})"
                                            class="ml-auto text-charcoal-light hover:text-red-600 transition-colors"
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
                        <svg class="w-16 h-16 text-charcoal-lighter mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <h3 class="font-heading font-bold text-lg text-charcoal mb-2">Your cart is empty</h3>
                        <p class="text-sm text-charcoal-light mb-6">Browse our products and find something you love.</p>
                        <x-ui.button-gold-gradient href="/top5pct-merchandise" @click="show = false; $wire.closeDrawer()">
                            Start Shopping
                        </x-ui.button-gold-gradient>
                    </div>
                @endif
            </div>

            @if($cart && $cart->lines->isNotEmpty())
                <div class="border-t border-linen-dark p-6 bg-linen-light">
                    @php
                        $subTotal = $cart->subTotal?->value ?? 0;
                        $taxTotal = $cart->taxTotal?->value ?? 0;
                        $total = $cart->total?->value ?? 0;
                    @endphp
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-charcoal-light">Subtotal</span>
                            <span class="font-medium text-charcoal">${{ number_format($subTotal / 100, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-charcoal-light">Estimated tax</span>
                            <span class="font-medium text-charcoal">${{ number_format($taxTotal / 100, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-base font-bold border-t border-linen-dark pt-2">
                            <span class="text-charcoal">Total</span>
                            <span class="text-charcoal">${{ number_format($total / 100, 2) }}</span>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <x-ui.button-gold-gradient href="/checkout" class="w-full text-center justify-center py-3">
                            Proceed to Checkout
                        </x-ui.button-gold-gradient>
                        <x-ui.button-outline-charcoal href="/cart" class="w-full text-center justify-center py-2 text-sm">
                            View Full Cart
                        </x-ui.button-outline-charcoal>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
