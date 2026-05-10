{{--
 | Component  : x-ui.stripe-checkout-modal
 | Location   : resources/views/components/ui/stripe-checkout-modal.blade.php
 |
 | Shown automatically after the custom-request-wizard submits successfully.
 | Displays a thank-you + payment-required message and the Stripe Buy Button
 | iframe, which opens Stripe's secure hosted checkout in a new tab.
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   Include once per page alongside x-ui.custom-request-wizard:
 |
 |   <x-ui.stripe-checkout-modal />
 |
 |   The wizard's finish() opens this modal automatically via:
 |   window.dispatchEvent(new CustomEvent('open-modal', {
 |       detail: { name: 'stripe-checkout-modal' }
 |   }));
 |
 | ── STRIPE BUY BUTTON ───────────────────────────────────────────────────────
 |   Requires the Stripe Buy Button script. Either add to your layout's
 |   @stack('scripts') or include the script tag manually in <head>:
 |   <script async src="https://js.stripe.com/v3/buy-button.js"></script>
 --}}

@once
    @push('scripts')
        <script async src="https://js.stripe.com/v3/buy-button.js"></script>
    @endpush
@endonce

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
        {{-- Shield / lock icon — conveys secure checkout --}}
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
    </x-slot:icon>

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

    {{-- Stripe Buy Button --}}
    <div class="flex justify-center py-2">
        <stripe-buy-button
            buy-button-id="buy_btn_1RZ3WEDdab3WXP8kgWVZaTvN"
            publishable-key="pk_live_51Oe8TsDdab3WXP8kVk9kcOcHilb4gtSCMfYLeKU51vq4GERTi1HolsMK11Wt4q2EFjy9nFAB6swzv9TCdjlDFKz800w59VsKEI"
        ></stripe-buy-button>
    </div>

    <x-slot:footer>
        <x-ui.button-modal-cancel>Close</x-ui.button-modal-cancel>
    </x-slot:footer>
</x-ui.modal>
