<div>
    <section class="py-10 bg-linen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="bg-white rounded-xl shadow p-8 text-center mb-8">
                <div class="w-16 h-16 rounded-full bg-olive/10 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h1 class="font-heading text-3xl font-bold text-charcoal mb-2">Thank you for your order!</h1>
                <p class="text-charcoal-light mb-2">
                    Order #{{ $order->reference ?? $order->id }}
                </p>
                <p class="text-sm text-charcoal-light">
                    We've received your order and will begin processing it shortly.
                    You'll receive a confirmation email with tracking details.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                @if($order->shippingAddress)
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="font-heading text-lg font-bold text-charcoal mb-3">Shipping Address</h2>
                        <div class="text-sm text-charcoal-light space-y-1">
                            <p class="font-medium text-charcoal">{{ $order->shippingAddress->first_name }} {{ $order->shippingAddress->last_name }}</p>
                            <p>{{ $order->shippingAddress->line_one }}</p>
                            @if($order->shippingAddress->line_two)
                                <p>{{ $order->shippingAddress->line_two }}</p>
                            @endif
                            <p>{{ $order->shippingAddress->city }}, {{ $order->shippingAddress->state }} {{ $order->shippingAddress->postcode }}</p>
                            @if($order->shippingAddress->contact_email)
                                <p class="mt-2">{{ $order->shippingAddress->contact_email }}</p>
                            @endif
                            @if($order->shippingAddress->contact_phone)
                                <p>{{ $order->shippingAddress->contact_phone }}</p>
                            @endif
                        </div>
                    </div>
                @endif

                @if($order->billingAddress)
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="font-heading text-lg font-bold text-charcoal mb-3">Billing Address</h2>
                        <div class="text-sm text-charcoal-light space-y-1">
                            <p class="font-medium text-charcoal">{{ $order->billingAddress->first_name }} {{ $order->billingAddress->last_name }}</p>
                            <p>{{ $order->billingAddress->line_one }}</p>
                            @if($order->billingAddress->line_two)
                                <p>{{ $order->billingAddress->line_two }}</p>
                            @endif
                            <p>{{ $order->billingAddress->city }}, {{ $order->billingAddress->state }} {{ $order->billingAddress->postcode }}</p>
                        </div>
                    </div>
                @endif
            </div>

            <div class="bg-white rounded-xl shadow p-6 mb-8">
                <h2 class="font-heading text-lg font-bold text-charcoal mb-4">Order Items</h2>
                <div class="space-y-4">
                    @foreach($order->lines as $line)
                        @php
                            $productName = $line->description ?? 'Product';
                            $lineTotal = $line->sub_total?->value ?? 0;
                        @endphp
                        <div class="flex justify-between items-center pb-3 border-b border-linen">
                            <div>
                                <h4 class="font-semibold text-sm text-charcoal">{{ $productName }}</h4>
                                @if($line->option)
                                    <p class="text-xs text-charcoal-light">{{ $line->option }}</p>
                                @endif
                                <p class="text-xs text-charcoal-light">Qty: {{ $line->quantity }}</p>
                            </div>
                            <span class="font-bold text-sm text-charcoal">${{ number_format($lineTotal / 100, 2) }}</span>
                        </div>
                    @endforeach
                </div>

                @php
                    $subTotal = $order->sub_total?->value ?? 0;
                    $taxTotal = $order->tax_total?->value ?? 0;
                    $total = $order->total?->value ?? 0;
                @endphp

                <div class="mt-4 space-y-2 pt-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-charcoal-light">Subtotal</span>
                        <span class="font-medium text-charcoal">${{ number_format($subTotal / 100, 2) }}</span>
                    </div>
                    @if($taxTotal > 0)
                        <div class="flex justify-between text-sm">
                            <span class="text-charcoal-light">Tax</span>
                            <span class="font-medium text-charcoal">${{ number_format($taxTotal / 100, 2) }}</span>
                        </div>
                    @endif
                    <div class="flex justify-between text-base font-bold border-t border-linen-dark pt-2">
                        <span class="text-charcoal">Total</span>
                        <span class="text-charcoal">${{ number_format($total / 100, 2) }}</span>
                    </div>
                </div>
            </div>

            @if($order->notes)
                <div class="bg-white rounded-xl shadow p-6 mb-8">
                    <h2 class="font-heading text-lg font-bold text-charcoal mb-2">Order Notes</h2>
                    <p class="text-sm text-charcoal-light">{{ $order->notes }}</p>
                </div>
            @endif

            <div class="text-center space-y-3">
                <x-ui.button-gold-gradient href="/shop" class="px-8">
                    Continue Shopping
                </x-ui.button-gold-gradient>
                <div>
                    <a href="/" class="text-sm text-azure hover:text-azure-dark transition-colors">
                        Return to Home
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
