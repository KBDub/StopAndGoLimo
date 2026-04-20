<div>
    <section class="py-10 min-h-screen" style="background: var(--brand-bg, #f9f9f9);">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">

            {{-- Success banner --}}
            <div class="shadow p-8 text-center mb-8 bg-white rounded-lg">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                     style="background: color-mix(in srgb, var(--brand-secondary) 15%, transparent);">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         style="color: var(--brand-secondary);">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold mb-2" style="color: var(--brand-primary);">Thank you for your order!</h1>
                <p class="mb-2 text-sm" style="color: var(--brand-primary); opacity: .7;">
                    Order #{{ $order->reference ?? $order->id }}
                </p>
                <p class="text-sm" style="color: var(--brand-primary); opacity: .6;">
                    We've received your order and will begin processing it shortly.
                    You'll receive a confirmation email with tracking details.
                </p>
            </div>

            {{-- Address grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                @if($order->shippingAddress)
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-lg font-bold mb-3" style="color: var(--brand-primary);">Shipping Address</h2>
                        <div class="text-sm space-y-1" style="color: var(--brand-primary); opacity: .8;">
                            <p class="font-medium">{{ $order->shippingAddress->first_name }} {{ $order->shippingAddress->last_name }}</p>
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
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-lg font-bold mb-3" style="color: var(--brand-primary);">Billing Address</h2>
                        <div class="text-sm space-y-1" style="color: var(--brand-primary); opacity: .8;">
                            <p class="font-medium">{{ $order->billingAddress->first_name }} {{ $order->billingAddress->last_name }}</p>
                            <p>{{ $order->billingAddress->line_one }}</p>
                            @if($order->billingAddress->line_two)
                                <p>{{ $order->billingAddress->line_two }}</p>
                            @endif
                            <p>{{ $order->billingAddress->city }}, {{ $order->billingAddress->state }} {{ $order->billingAddress->postcode }}</p>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Order lines --}}
            <div class="bg-white shadow rounded-lg p-6 mb-8">
                <h2 class="text-lg font-bold mb-4" style="color: var(--brand-primary);">Order Items</h2>
                <div class="space-y-4">
                    @foreach($order->lines->where('type', '!=', 'shipping') as $line)
                        @php
                            $productName = $line->description ?? 'Product';
                            $lineTotal   = $line->sub_total?->value ?? 0;
                        @endphp
                        <div class="flex justify-between items-center pb-3 border-b"
                             style="border-color: color-mix(in srgb, var(--brand-primary) 12%, transparent);">
                            <div>
                                <h4 class="font-semibold text-sm" style="color: var(--brand-primary);">{{ $productName }}</h4>
                                @if($line->option)
                                    <p class="text-xs" style="color: var(--brand-primary); opacity: .6;">{{ $line->option }}</p>
                                @endif
                                <p class="text-xs" style="color: var(--brand-primary); opacity: .6;">Qty: {{ $line->quantity }}</p>
                            </div>
                            <span class="font-bold text-sm" style="color: var(--brand-primary);">
                                ${{ number_format($lineTotal / 100, 2) }}
                            </span>
                        </div>
                    @endforeach
                </div>

                @php
                    $subTotal = $order->sub_total?->value ?? 0;
                    $taxTotal = $order->tax_total?->value ?? 0;
                    $total    = $order->total?->value ?? 0;
                @endphp

                <div class="mt-4 space-y-2 pt-2">
                    <div class="flex justify-between text-sm">
                        <span style="color: var(--brand-primary); opacity: .7;">Subtotal</span>
                        <span class="font-medium" style="color: var(--brand-primary);">${{ number_format($subTotal / 100, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span style="color: var(--brand-primary); opacity: .7;">Tax</span>
                        <span class="font-medium" style="color: var(--brand-primary);">${{ number_format($taxTotal / 100, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-base font-bold border-t pt-2"
                         style="border-color: color-mix(in srgb, var(--brand-primary) 15%, transparent);">
                        <span style="color: var(--brand-primary);">Total</span>
                        <span style="color: var(--brand-secondary);">${{ number_format($total / 100, 2) }}</span>
                    </div>
                </div>
            </div>

            @if($order->notes)
                <div class="bg-white shadow rounded-lg p-6 mb-8">
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Order Notes</h2>
                    <p class="text-sm" style="color: var(--brand-primary); opacity: .7;">{{ $order->notes }}</p>
                </div>
            @endif

            {{-- CTAs --}}
            <div class="text-center space-y-3">
                <a href="{{ $shopUrl }}"
                   class="inline-block px-8 py-3 rounded font-bold text-white transition-opacity hover:opacity-90"
                   style="background: var(--brand-secondary); color: var(--brand-primary);">
                    Continue Shopping
                </a>
            </div>

        </div>
    </section>
</div>
