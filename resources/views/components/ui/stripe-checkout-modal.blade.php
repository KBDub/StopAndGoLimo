{{--
 | Component  : x-ui.stripe-checkout-modal
 | Location   : resources/views/components/ui/stripe-checkout-modal.blade.php
 |
 | NOTE: Payment is handled through the standard Lunar checkout flow.
 | This modal is retained as a shell. Do not wire to any active checkout flow.
--}}

<div
    x-data="{
        checkoutStep:    1,
        checkoutTotal:   1,
        paymentComplete: false,
    }"
    @open-modal.window="
        if ($event.detail.name === 'stripe-checkout-modal') {
            checkoutStep    = $event.detail.checkoutStep  || 1;
            checkoutTotal   = $event.detail.checkoutTotal || 1;
            paymentComplete = false;
            _stopPolling();
        }
    "
    @modal-closed.window="
        if ($event.detail.name === 'stripe-checkout-modal') {
            _stopPolling();
        }
    "
>
    <x-ui.modal
        name="stripe-checkout-modal"
        title="Request received, complete your payment"
        size="md"
        variant="default"
        :dismissible="true"
        :zIndex="9999"
        :teleport="true"
    >
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
        </x-slot:icon>

        <div x-show="!paymentComplete">

            <p class="text-xs text-slate mb-4">
                Step <span x-text="checkoutStep"></span> of <span x-text="checkoutTotal"></span>
                &nbsp;&middot;&nbsp;Secure Payment
            </p>

            <div class="flex items-start gap-3 px-4 py-3 mb-5 bg-champagne/10 border border-champagne/60">
                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-champagne" fill="none" stroke="currentColor"
                     stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <p class="text-sm font-semibold text-navy">
                    Thank you for choosing Stop &amp; Go Limo.
                </p>
            </div>

            <p class="text-sm text-navy mb-5">
                Your booking request has been received. To confirm your reservation,
                payment must be completed through our secure checkout below.
            </p>

            <div class="flex items-start gap-3 px-4 py-3 mb-5 bg-error/5 border border-error/25">
                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-error" fill="none" stroke="currentColor"
                     stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                    <line x1="12" y1="9" x2="12" y2="13"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
                <p class="text-sm font-semibold text-error">
                    Your reservation is not confirmed until payment is complete.
                </p>
            </div>

            <p class="text-sm text-slate mb-6">
                Click the button below to open secure checkout in a new tab.
                Your payment information is handled entirely by Stripe and is never stored on our servers.
            </p>

            <div class="flex justify-center py-2">
                <button
                    type="button"
                    @click="openCheckout()"
                    class="inline-flex items-center gap-2.5 px-6 py-3 text-sm font-semibold text-navy bg-champagne hover:shadow-champagne transition-all font-head"
                >
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                        <line x1="1" y1="10" x2="23" y2="10"/>
                    </svg>
                    Proceed to Secure Checkout
                </button>
            </div>

        </div>

        <div x-show="paymentComplete" x-cloak>

            <p class="text-xs text-slate mb-4">
                Step <span x-text="checkoutTotal"></span> of <span x-text="checkoutTotal"></span>
                &nbsp;&middot;&nbsp;Payment
            </p>

            <div class="flex items-start gap-3 px-4 py-3 mb-5 bg-champagne/10 border border-champagne/60">
                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-champagne" fill="none" stroke="currentColor"
                     stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <p class="text-sm font-semibold text-navy">
                    Checkout window closed.
                </p>
            </div>

            <p class="text-sm text-navy mb-5">
                If you completed payment, you will receive a confirmation email from Stripe shortly.
                Our team will confirm your reservation once payment is verified.
            </p>

            <p class="text-sm text-slate mb-6">
                Did not finish? Click below to reopen the secure checkout.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 py-2">
                <button
                    type="button"
                    @click="openCheckout()"
                    class="inline-flex items-center gap-2.5 px-5 py-2.5 text-sm font-semibold text-navy bg-champagne hover:shadow-champagne transition-all font-head"
                >
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                        <line x1="1" y1="10" x2="23" y2="10"/>
                    </svg>
                    Reopen Checkout
                </button>
                <button
                    type="button"
                    @click="$dispatch('close-modal', { name: 'stripe-checkout-modal' })"
                    class="px-5 py-2.5 text-sm font-semibold text-slate hover:text-navy transition-colors duration-150"
                >
                    Done
                </button>
            </div>

        </div>

    </x-ui.modal>
</div>
