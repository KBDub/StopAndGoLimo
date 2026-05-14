{{--
 | Component  : x-ui.order-action-modal
 | Location   : resources/views/components/ui/order-action-modal.blade.php
 | Purpose    : DTF path final step — lets the customer choose between
 |              "Add to Cart" (keep shopping) or "Proceed to Checkout" (go now).
 |
 | Opens via  : window.dispatchEvent(new CustomEvent('open-modal', {
 |                  detail: {
 |                      name:             'order-action-modal',
 |                      payload:          { ...wizardBuildPayload },
 |                      wizardStep:       N,       // wizard's step at finish()
 |                      wizardTotalSteps: M,       // wizard's totalSteps at finish()
 |                  }
 |              }))
 |
 | Closes via : window.dispatchEvent(new CustomEvent('close-modal', {
 |                  detail: { name: 'order-action-modal' }
 |              }))
 |
 | Back:       : dispatches 'reopen-wizard' — wizard reopens at its preserved step
 |
 | On success : dispatches 'cart-updated' + 'open-cart-drawer' (cart choice)
 |              OR redirects to /checkout (checkout choice).
 |
 | Branding   : Header slot overrides x-ui.modal to match the wizard step 6 header
 |              exactly — gold stripe, linen bg, sunburst border, step counter, X.
 |              Footer uses raw ← Back button + x-ui.button-modal-primary.
 --}}

<div
    x-data="{
        _csrf:           '{{ csrf_token() }}',
        choice:          '',
        submitting:      false,
        error:           '',
        payload:         {},
        wizardStep:      1,
        wizardTotalSteps: 1,

        get dtfItems() {
            return Array.isArray(this.payload.dtfItems) && this.payload.dtfItems.length > 0
                ? this.payload.dtfItems
                : [];
        },

        get hasSummary() {
            return this.dtfItems.length > 0
                || (this.payload.dtfFileName && this.payload.dtfFileName.length > 0);
        },

        async confirm() {
            if (!this.choice || this.submitting) return;
            this.submitting = true;
            this.error      = '';
            try {
                const res = await fetch('/custom-order/dtf-cart', {
                    method:  'POST',
                    headers: {
                        'Content-Type':  'application/json',
                        'Accept':        'application/json',
                        'X-CSRF-TOKEN':  this._csrf,
                    },
                    body: JSON.stringify({ ...this.payload, action: this.choice }),
                });
                const data = await res.json();
                if (!res.ok) throw new Error(data.message || 'Could not add to cart — please try again.');

                window.dispatchEvent(new CustomEvent('close-modal', { detail: { name: 'order-action-modal' } }));

                if (this.choice === 'checkout') {
                    window.location.href = '/checkout';
                } else {
                    window.dispatchEvent(new CustomEvent('cart-updated'));
                    window.dispatchEvent(new CustomEvent('open-cart-drawer'));
                }
            } catch (err) {
                this.error = err.message || 'Something went wrong — please try again.';
            } finally {
                this.submitting = false;
            }
        },
    }"
    @open-modal.window="
        if ($event.detail.name === 'order-action-modal') {
            payload          = $event.detail.payload          || {};
            wizardStep       = $event.detail.wizardStep       || 1;
            wizardTotalSteps = $event.detail.wizardTotalSteps || 1;
            choice     = '';
            submitting = false;
            error      = '';
        }
    "
>
    <x-ui.modal
        name="order-action-modal"
        size="md"
        variant="default"
        :dismissible="false"
        :zIndex="9999"
        :teleport="true"
    >
        {{-- ── Header — matches wizard step header exactly ───────────────── --}}
        <x-slot:header>
            <div class="flex items-center gap-3 px-5 py-4 flex-shrink-0 border-b-2 bg-linen border-sunburst">
                <div class="flex-1 min-w-0">
                    <h2 class="text-lg font-bold text-charcoal leading-tight">
                        Cart or Checkout
                    </h2>
                    <p class="text-xs text-charcoal-light mt-0.5">
                        Step <span x-text="wizardStep + 1"></span>
                        of <span x-text="wizardTotalSteps + 2"></span>
                        &nbsp;&middot;&nbsp;DTF Transfers
                    </p>
                </div>
                <button
                    type="button"
                    @click="$dispatch('close-modal', { name: 'order-action-modal' })"
                    class="flex items-center justify-center w-8 h-8 flex-shrink-0 text-charcoal-light hover:bg-linen-dark hover:text-charcoal transition-colors duration-150"
                    aria-label="Close"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                         class="w-[1.125rem] h-[1.125rem]" aria-hidden="true">
                        <path d="M18 6 6 18M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </x-slot:header>

        {{-- ── Order summary ──────────────────────────────────────────────── --}}
        <div x-show="hasSummary" class="border border-linen-dark divide-y divide-linen-dark mb-5">

            <template x-if="dtfItems.length > 0">
                <div>
                    <template x-for="(item, idx) in dtfItems" :key="idx">
                        <div class="px-4 py-3">
                            <p class="text-sm font-semibold text-charcoal"
                               x-text="item.type + ' \u2014 ' + item.size"></p>
                            <p class="text-xs text-charcoal-light mt-0.5"
                               x-text="item.tier + ' \u00b7 ' + item.price + ' per piece'"></p>
                        </div>
                    </template>
                </div>
            </template>

            <template x-if="dtfItems.length === 0 && payload.dtfFileName">
                <div class="px-4 py-3 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0 text-charcoal-light"
                         viewBox="0 0 64 64" aria-hidden="true">
                        <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z"
                              fill="#4A90D9" opacity="0.85"/>
                        <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z" fill="#5BA8F0"/>
                    </svg>
                    <p class="text-sm text-charcoal truncate" x-text="payload.dtfFileName"></p>
                </div>
            </template>

        </div>

        {{-- ── Radio choices ──────────────────────────────────────────────── --}}
        <fieldset class="space-y-3">
            <legend class="sr-only">Choose an action</legend>

            <label
                class="flex items-start gap-3 p-4 border cursor-pointer transition-colors"
                :class="choice === 'cart'
                    ? 'border-sunburst bg-sunburst/5'
                    : 'border-linen-dark hover:border-charcoal-light'"
            >
                <input
                    type="radio"
                    name="oam_action"
                    value="cart"
                    x-model="choice"
                    class="mt-0.5 flex-shrink-0 accent-sunburst"
                >
                <div>
                    <p class="text-sm font-semibold text-charcoal">Add to Your Cart</p>
                    <p class="text-xs text-charcoal-light mt-0.5">
                        Save this transfer to your cart and keep shopping.
                    </p>
                </div>
            </label>

            <label
                class="flex items-start gap-3 p-4 border cursor-pointer transition-colors"
                :class="choice === 'checkout'
                    ? 'border-sunburst bg-sunburst/5'
                    : 'border-linen-dark hover:border-charcoal-light'"
            >
                <input
                    type="radio"
                    name="oam_action"
                    value="checkout"
                    x-model="choice"
                    class="mt-0.5 flex-shrink-0 accent-sunburst"
                >
                <div>
                    <p class="text-sm font-semibold text-charcoal">Proceed to Checkout</p>
                    <p class="text-xs text-charcoal-light mt-0.5">
                        Go directly to checkout and complete your order now.
                    </p>
                </div>
            </label>
        </fieldset>

        {{-- ── Inline error ────────────────────────────────────────────────── --}}
        <p x-show="error" x-cloak x-text="error"
           class="mt-4 text-xs text-error" role="alert"></p>

        {{-- ── Footer ─────────────────────────────────────────────────────── --}}
        <x-slot:footer>
            <button
                type="button"
                @click="
                    $dispatch('close-modal', { name: 'order-action-modal' });
                    window.dispatchEvent(new CustomEvent('reopen-wizard'));
                "
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors"
            >&larr; Back</button>

            <x-ui.button-modal-primary
                @click="confirm()"
                x-bind:disabled="!choice || submitting"
                x-bind:class="(!choice || submitting) ? 'opacity-40 cursor-not-allowed' : ''"
            >
                <span x-show="!submitting">
                    <span x-show="!choice">Confirm</span>
                    <span x-show="choice === 'cart'"     x-cloak>Add to Cart</span>
                    <span x-show="choice === 'checkout'" x-cloak>Proceed to Checkout &rarr;</span>
                </span>
                <span x-show="submitting" x-cloak>Processing&hellip;</span>
            </x-ui.button-modal-primary>
        </x-slot:footer>

    </x-ui.modal>
</div>
