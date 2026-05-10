{{--
 | Component  : x-ui.stripe-checkout-modal
 | Location   : resources/views/components/ui/stripe-checkout-modal.blade.php
 |
 | Shown automatically after the custom-request-wizard submits successfully.
 | Displays a thank-you + payment-required message and a direct link to the
 | Stripe-hosted checkout page (opens in a new tab).
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   Bundled automatically via x-ui.custom-request-wizard. No manual include
 |   needed on pages that already include the wizard.
 |
 | ── STEP INDICATOR ──────────────────────────────────────────────────────────
 |   The wizard passes checkoutStep and checkoutTotal in the open-modal event
 |   detail so this modal can display "Step X of Y · Secure Payment".
 --}}

{{--
    Outer x-data: listens for the open-modal event to capture the step position
    that the wizard injects. Keeps the step numbers in scope for x-text bindings
    inside the modal body without touching x-ui.modal internals.
--}}
<div
    x-data="{ checkoutStep: 1, checkoutTotal: 1 }"
    @open-modal.window="
        if ($event.detail.name === 'stripe-checkout-modal') {
            checkoutStep  = $event.detail.checkoutStep  || 1;
            checkoutTotal = $event.detail.checkoutTotal || 1;
        }
    "
>
    <x-ui.modal
        name="stripe-checkout-modal"
        title="Request received — complete your payment"
        size="md"
        variant="default"
        :dismissible="false"
        :zIndex="9999"
        :teleport="true"
    >
        <x-slot:icon>
            {{-- Shield / lock icon — conveys secure checkout --}}
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
        </x-slot:icon>

        {{-- Step indicator --}}
        <p class="text-xs text-charcoal-light mb-4">
            Step <span x-text="checkoutStep"></span> of <span x-text="checkoutTotal"></span>
            &nbsp;·&nbsp;Secure Payment
        </p>

        {{-- Thank-you acknowledgement bar --}}
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

        {{-- Stripe checkout button — opens payment link in new tab --}}
        <div class="flex justify-center py-2">
            <a
                href="https://buy.stripe.com/bIYcPWgoC5mt6FqeUU"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2.5 px-6 py-3 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold transition-all"
            >
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                    <line x1="1" y1="10" x2="23" y2="10"/>
                </svg>
                Proceed to Secure Checkout
            </a>
        </div>

    </x-ui.modal>
</div>
