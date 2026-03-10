<div>
    <section class="py-10 bg-linen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            @if(!$cart || $cart->lines->isEmpty())
                <div class="bg-white rounded-xl shadow p-12 text-center max-w-lg mx-auto">
                    <h1 class="font-heading text-2xl font-bold text-charcoal mb-3">Nothing to checkout</h1>
                    <p class="text-charcoal-light mb-6">Your cart is empty. Add some items before checking out.</p>
                    <x-ui.button-gold-gradient href="/top5pct-merchandise">Browse Products</x-ui.button-gold-gradient>
                </div>
            @else
                <h1 class="font-heading text-3xl font-bold text-charcoal mb-8">Checkout</h1>

                @if($errorMessage)
                    <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 mb-6">
                        {{ $errorMessage }}
                    </div>
                @endif

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white rounded-xl shadow p-6">
                            <h2 class="font-heading text-xl font-bold text-charcoal mb-4">Contact Information</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="email">Email address</label>
                                    <input
                                        type="email"
                                        id="email"
                                        wire:model="email"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        placeholder="your@email.com"
                                    >
                                    @error('email') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="firstName">First name</label>
                                    <input
                                        type="text"
                                        id="firstName"
                                        wire:model="firstName"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                    >
                                    @error('firstName') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="lastName">Last name</label>
                                    <input
                                        type="text"
                                        id="lastName"
                                        wire:model="lastName"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                    >
                                    @error('lastName') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="phone">Phone (optional)</label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        wire:model="phone"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        placeholder="(555) 123-4567"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow p-6">
                            <h2 class="font-heading text-xl font-bold text-charcoal mb-4">Shipping Address</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="shippingLine1">Street address</label>
                                    <input
                                        type="text"
                                        id="shippingLine1"
                                        wire:model="shippingLine1"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                    >
                                    @error('shippingLine1') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="shippingLine2">Apartment, suite, etc. (optional)</label>
                                    <input
                                        type="text"
                                        id="shippingLine2"
                                        wire:model="shippingLine2"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                    >
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="shippingCity">City</label>
                                    <input
                                        type="text"
                                        id="shippingCity"
                                        wire:model="shippingCity"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                    >
                                    @error('shippingCity') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="shippingState">State</label>
                                    <input
                                        type="text"
                                        id="shippingState"
                                        wire:model="shippingState"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        placeholder="IL"
                                    >
                                    @error('shippingState') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-charcoal mb-1" for="shippingPostcode">Zip code</label>
                                    <input
                                        type="text"
                                        id="shippingPostcode"
                                        wire:model="shippingPostcode"
                                        class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                    >
                                    @error('shippingPostcode') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <h2 class="font-heading text-xl font-bold text-charcoal">Billing Address</h2>
                            </div>
                            <label class="flex items-center gap-2 cursor-pointer mb-4">
                                <input type="checkbox" wire:model.live="sameBillingAddress" class="w-4 h-4 rounded border-charcoal-lighter text-sunburst focus:ring-sunburst">
                                <span class="text-sm text-charcoal">Same as shipping address</span>
                            </label>

                            @if(!$sameBillingAddress)
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="sm:col-span-2">
                                        <label class="block text-sm font-semibold text-charcoal mb-1" for="billingLine1">Street address</label>
                                        <input
                                            type="text"
                                            id="billingLine1"
                                            wire:model="billingLine1"
                                            class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        >
                                        @error('billingLine1') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label class="block text-sm font-semibold text-charcoal mb-1" for="billingLine2">Apartment, suite, etc. (optional)</label>
                                        <input
                                            type="text"
                                            id="billingLine2"
                                            wire:model="billingLine2"
                                            class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        >
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-charcoal mb-1" for="billingCity">City</label>
                                        <input
                                            type="text"
                                            id="billingCity"
                                            wire:model="billingCity"
                                            class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        >
                                        @error('billingCity') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-charcoal mb-1" for="billingState">State</label>
                                        <input
                                            type="text"
                                            id="billingState"
                                            wire:model="billingState"
                                            class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        >
                                        @error('billingState') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-charcoal mb-1" for="billingPostcode">Zip code</label>
                                        <input
                                            type="text"
                                            id="billingPostcode"
                                            wire:model="billingPostcode"
                                            class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all"
                                        >
                                        @error('billingPostcode') <span class="text-red-600 text-xs mt-1">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="bg-white rounded-xl shadow p-6">
                            <h2 class="font-heading text-xl font-bold text-charcoal mb-4">Order Notes (optional)</h2>
                            <textarea
                                wire:model="notes"
                                rows="3"
                                class="w-full px-4 py-2.5 border border-charcoal-lighter rounded-lg text-charcoal focus:ring-2 focus:ring-sunburst focus:border-sunburst outline-none transition-all resize-none"
                                placeholder="Special instructions for your order..."
                            ></textarea>
                        </div>
                    </div>

                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-xl shadow p-6 sticky top-32">
                            <h2 class="font-heading text-xl font-bold text-charcoal mb-4">Order Summary</h2>

                            <div class="space-y-3 mb-4 max-h-64 overflow-y-auto">
                                @foreach($cart->lines as $line)
                                    @php
                                        $variant = $line->purchasable;
                                        $product = $variant->product;
                                        $productName = $product->translateAttribute('name');
                                        $thumbnail = $product->thumbnail?->getUrl('small') ?? null;
                                        $lineTotal = $line->subTotal?->value ?? 0;
                                        $variantLabel = $variant->sku ? last(explode('-', $variant->sku)) : '';
                                    @endphp
                                    <div class="flex gap-3 pb-3 border-b border-linen" wire:key="checkout-line-{{ $line->id }}">
                                        <div class="w-14 h-14 flex-shrink-0 rounded-lg overflow-hidden bg-linen">
                                            @if($thumbnail)
                                                <img src="{{ $thumbnail }}" alt="{{ $productName }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center">
                                                    <svg class="w-6 h-6 text-charcoal-lighter" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-sm font-semibold text-charcoal truncate">{{ $productName }}</h4>
                                            @if($variantLabel)
                                                <p class="text-xs text-charcoal-light">{{ $variantLabel }}</p>
                                            @endif
                                            <p class="text-xs text-charcoal-light">Qty: {{ $line->quantity }}</p>
                                        </div>
                                        <span class="text-sm font-bold text-charcoal">${{ number_format($lineTotal / 100, 2) }}</span>
                                    </div>
                                @endforeach
                            </div>

                            @php
                                $subTotal = $cart->subTotal?->value ?? 0;
                                $taxTotal = $cart->taxTotal?->value ?? 0;
                                $total = $cart->total?->value ?? 0;
                            @endphp

                            <div class="space-y-2 py-4 border-t border-linen-dark">
                                <div class="flex justify-between text-sm">
                                    <span class="text-charcoal-light">Subtotal</span>
                                    <span class="font-medium text-charcoal">${{ number_format($subTotal / 100, 2) }}</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-charcoal-light">Shipping</span>
                                    <span class="text-charcoal-light text-sm">Free</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-charcoal-light">Tax</span>
                                    <span class="font-medium text-charcoal">${{ number_format($taxTotal / 100, 2) }}</span>
                                </div>
                            </div>

                            <div class="flex justify-between border-t border-linen-dark pt-3 mb-6">
                                <span class="font-bold text-lg text-charcoal">Total</span>
                                <span class="font-bold text-xl text-charcoal">${{ number_format($total / 100, 2) }}</span>
                            </div>

                            <button
                                wire:click="placeOrder"
                                wire:loading.attr="disabled"
                                class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 text-lg font-semibold rounded-lg transition-all
                                       bg-gradient-to-r from-sunburst-light via-sunburst to-sunburst-dark text-charcoal hover:shadow-lg hover:scale-[1.02]
                                       disabled:opacity-50 disabled:cursor-not-allowed"
                                {{ $processing ? 'disabled' : '' }}
                            >
                                <span wire:loading.remove wire:target="placeOrder">Place Order</span>
                                <span wire:loading wire:target="placeOrder" class="flex items-center gap-2">
                                    <svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                    </svg>
                                    Processing...
                                </span>
                            </button>

                            <div class="mt-4 space-y-2">
                                <div class="flex items-center gap-2 text-xs text-charcoal-light">
                                    <svg class="w-4 h-4 text-olive flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    <span>Secure checkout</span>
                                </div>
                                <div class="flex items-center gap-2 text-xs text-charcoal-light">
                                    <svg class="w-4 h-4 text-olive flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                    <span>Veteran-owned and operated</span>
                                </div>
                            </div>

                            <div class="mt-4 text-center">
                                <a href="/cart" class="text-sm text-azure hover:text-azure-dark transition-colors">
                                    ← Return to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>
