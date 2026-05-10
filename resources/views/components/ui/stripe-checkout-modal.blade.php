{{--
 | Component  : x-ui.stripe-checkout-modal
 | Location   : resources/views/components/ui/stripe-checkout-modal.blade.php
 |
 | Shown automatically after the custom-request-wizard submits successfully.
 | Opens Stripe's hosted checkout in a new tab via window.open(), then polls
 | the returned window reference every second to detect when the tab closes.
 |
 | ── STEP INDICATOR ──────────────────────────────────────────────────────────
 |   The wizard passes checkoutStep and checkoutTotal in the open-modal event
 |   detail so this modal can display "Step X of Y · Secure Payment".
 |
 | ── TAB CLOSE DETECTION ─────────────────────────────────────────────────────
 |   _win and _timer are plain JavaScript closure variables — NOT Alpine
 |   reactive properties. Alpine's Proxy wraps every object assigned to a
 |   reactive property; WindowProxy assigned to a reactive prop loses its
 |   ability to reflect .closed accurately. Using closure vars avoids this.
 |
 |   window.open() without 'noopener' so the returned WindowProxy is non-null
 |   and .closed remains readable. Cross-origin access from the Stripe tab
 |   back to window.opener is blocked by the same-origin policy.
 --}}

<div
    x-data="(function () {
        let _win   = null;
        let _timer = null;

        return {
            checkoutStep:    1,
            checkoutTotal:   1,
            paymentComplete: false,

            openCheckout() {
                this.paymentComplete = false;
                _win = window.open('https://buy.stripe.com/bIYcPWgoC5mt6FqeUU', '_blank');
                if (_win) {
                    this._startPolling();
                }
            },

            _startPolling() {
                this._stopPolling();
                const self = this;
                _timer = setInterval(function () {
                    if (_win && _win.closed) {
                        self._stopPolling();
                        self.paymentComplete = true;
                    }
                }, 1000);
            },

            _stopPolling() {
                if (_timer) {
                    clearInterval(_timer);
                    _timer = null;
                }
            },
        };
    })()"
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
        title="Request received — complete your payment"
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

        {{-- ── Pre-payment state ────────────────────────────────────────────── --}}
        <div x-show="!paymentComplete">

            {{-- Step indicator --}}
            <p class="text-xs text-charcoal-light mb-4">
                Step <span x-text="checkoutStep"></span> of <span x-text="checkoutTotal"></span>
                &nbsp;·&nbsp;Secure Payment
            </p>

            {{-- Thank-you bar --}}
            <div class="flex items-start gap-3 px-4 py-3 mb-5 bg-sunburst/10 border border-sunburst/60">
                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-sunburst-dark" fill="none" stroke="currentColor"
                     stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <p class="text-sm font-semibold text-charcoal">
                    Thank you for choosing Top 5 Percent.
                </p>
            </div>

            <p class="text-sm text-charcoal mb-5">
                Your custom order request has been received and recorded. To begin production on your order,
                payment must be completed through our secure checkout below.
            </p>

            {{-- Payment-required warning --}}
            <div class="flex items-start gap-3 px-4 py-3 mb-5 bg-error/5 border border-error/25">
                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-error" fill="none" stroke="currentColor"
                     stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                    <line x1="12" y1="9" x2="12" y2="13"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
                <p class="text-sm font-semibold text-error">
                    Your order is not confirmed or entered into production until payment is complete.
                </p>
            </div>

            <p class="text-sm text-charcoal-light mb-6">
                Click the button below to open Stripe's encrypted, secure checkout in a new tab.
                Your payment information is handled entirely by Stripe and is never stored on our servers.
            </p>

            {{-- Checkout button — opens Stripe payment link in new tab --}}
            <div class="flex justify-center py-2">
                <button
                    type="button"
                    @click="openCheckout()"
                    class="inline-flex items-center gap-2.5 px-6 py-3 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold transition-all"
                >
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                        <line x1="1" y1="10" x2="23" y2="10"/>
                    </svg>
                    Proceed to Secure Checkout
                </button>
            </div>

        </div>{{-- /pre-payment --}}

        {{-- ── Post-payment state (tab closed) ─────────────────────────────── --}}
        <div x-show="paymentComplete" x-cloak>

            <p class="text-xs text-charcoal-light mb-4">
                Step <span x-text="checkoutTotal"></span> of <span x-text="checkoutTotal"></span>
                &nbsp;·&nbsp;Payment
            </p>

            {{-- Confirmation bar --}}
            <div class="flex items-start gap-3 px-4 py-3 mb-5 bg-sunburst/10 border border-sunburst/60">
                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-sunburst-dark" fill="none" stroke="currentColor"
                     stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <p class="text-sm font-semibold text-charcoal">
                    Checkout window closed.
                </p>
            </div>

            <p class="text-sm text-charcoal mb-5">
                If you completed payment, you will receive a confirmation email from Stripe shortly.
                Our team will begin processing your order once payment is verified.
            </p>

            <p class="text-sm text-charcoal-light mb-6">
                Didn't finish? Click below to reopen the secure checkout.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 py-2">
                <button
                    type="button"
                    @click="openCheckout()"
                    class="inline-flex items-center gap-2.5 px-5 py-2.5 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold transition-all"
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
                    class="px-5 py-2.5 text-sm font-semibold text-charcoal-light hover:text-charcoal transition-colors duration-150"
                >
                    Done
                </button>
            </div>

        </div>{{-- /post-payment --}}

    </x-ui.modal>
</div>
