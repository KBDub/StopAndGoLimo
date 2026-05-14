{{--
 | Component  : x-ui.order-action-modal
 | Location   : resources/views/components/ui/order-action-modal.blade.php
 | Purpose    : DTF path final step — lets the customer choose between
 |              "Add to Cart" (keep shopping) or "Proceed to Checkout" (go now).
 |
 | Opens via  : window.dispatchEvent(new CustomEvent('open-modal', {
 |                  detail: { name: 'order-action-modal', payload: { ...wizardBuildPayload } }
 |              }))
 |
 | Closes via : window.dispatchEvent(new CustomEvent('close-modal', {
 |                  detail: { name: 'order-action-modal' }
 |              }))
 |
 | On success : dispatches 'cart-updated' + 'open-cart-drawer' (cart choice)
 |              OR redirects to /checkout (checkout choice).
 |
 | Branding   : Square corners, sunburst accents, gold-gradient CTA.
 |              No rounded corners on panel, inputs, or buttons.
--}}
<div
    x-data="{
        isOpen:     false,
        choice:     '',
        submitting: false,
        error:      '',
        payload:    {},

        open(detail) {
            this.payload    = detail.payload || {};
            this.choice     = '';
            this.submitting = false;
            this.error      = '';
            this.isOpen     = true;
            this.$nextTick(() => { document.body.style.overflow = 'hidden'; });
        },

        close() {
            this.isOpen = false;
            document.body.style.overflow = '';
        },

        get dtfItems() {
            return (this.payload.dtfItems && this.payload.dtfItems.length > 0)
                ? this.payload.dtfItems
                : [];
        },

        get hasSummary() {
            return this.dtfItems.length > 0 || (this.payload.dtfFileName && this.payload.dtfFileName.length > 0);
        },

        async confirm() {
            if (!this.choice || this.submitting) return;
            this.submitting = true;
            this.error      = '';
            try {
                const csrf = document.querySelector('meta[name=csrf-token]')?.content || '';
                const res  = await fetch('/custom-order/dtf-cart', {
                    method:  'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept':       'application/json',
                        'X-CSRF-TOKEN': csrf,
                    },
                    body: JSON.stringify({ ...this.payload, action: this.choice }),
                });
                const data = await res.json();
                if (!res.ok) throw new Error(data.message || 'Could not add to cart — please try again.');
                this.close();
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
    @open-modal.window="if ($event.detail.name === 'order-action-modal') open($event.detail)"
    @close-modal.window="if ($event.detail.name === 'order-action-modal') close()"
    x-show="isOpen"
    x-cloak
    style="display:none;"
    class="fixed inset-0 z-[70] flex items-center justify-center p-4 sm:p-6"
    role="dialog"
    aria-modal="true"
    aria-labelledby="oam-title"
>
    {{-- Backdrop --}}
    <div
        class="absolute inset-0 bg-charcoal-dark/60"
        @click="close()"
        aria-hidden="true"
    ></div>

    {{-- Panel --}}
    <div class="relative z-10 w-full max-w-md bg-white shadow-2xl flex flex-col">

        {{-- Header --}}
        <div class="flex items-start justify-between px-6 py-4 border-b border-linen-dark bg-linen-light flex-shrink-0">
            <div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-charcoal-light mb-0.5">DTF Transfers</p>
                <h2 id="oam-title" class="text-base font-bold text-charcoal leading-snug">
                    How would you like to proceed?
                </h2>
            </div>
            <button
                type="button"
                @click="close()"
                class="ml-4 mt-0.5 text-charcoal-light hover:text-charcoal transition-colors p-1 flex-shrink-0"
                aria-label="Close"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Body --}}
        <div class="px-6 py-5 space-y-5 overflow-y-auto scrollbar-sunburst">

            {{-- Order summary --}}
            <div x-show="hasSummary" class="border border-linen-dark divide-y divide-linen-dark">

                {{-- DTF items from pricing table --}}
                <template x-if="dtfItems.length > 0">
                    <div>
                        <template x-for="(item, idx) in dtfItems" :key="idx">
                            <div class="px-4 py-3">
                                <p class="text-sm font-semibold text-charcoal" x-text="item.type + ' — ' + item.size"></p>
                                <p class="text-xs text-charcoal-light mt-0.5"
                                   x-text="item.tier + ' · ' + item.price + ' per piece'"></p>
                            </div>
                        </template>
                    </div>
                </template>

                {{-- Fallback: show filename when no structured items --}}
                <template x-if="dtfItems.length === 0 && payload.dtfFileName">
                    <div class="px-4 py-3 flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0 text-charcoal-light" viewBox="0 0 64 64" aria-hidden="true">
                            <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z" fill="#4A90D9" opacity="0.85"/>
                            <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z" fill="#5BA8F0"/>
                        </svg>
                        <p class="text-sm text-charcoal truncate" x-text="payload.dtfFileName"></p>
                    </div>
                </template>

            </div>

            {{-- Radio choices --}}
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

            {{-- Error --}}
            <p x-show="error" x-cloak class="text-xs text-error" x-text="error" role="alert"></p>

        </div>

        {{-- Footer --}}
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-linen-dark bg-linen-light flex-shrink-0">
            <button
                type="button"
                @click="close()"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors"
            >Cancel</button>

            <button
                type="button"
                @click="confirm()"
                :disabled="!choice || submitting"
                :class="(!choice || submitting) ? 'opacity-40 cursor-not-allowed' : 'hover:shadow-gold'"
                class="px-5 py-2 text-sm font-semibold text-charcoal bg-gold-gradient transition-all"
            >
                <span x-show="!submitting">
                    <span x-show="choice === 'cart'"     x-cloak>Add to Cart</span>
                    <span x-show="choice === 'checkout'" x-cloak>Proceed to Checkout &rarr;</span>
                    <span x-show="!choice">Confirm</span>
                </span>
                <span x-show="submitting" x-cloak>Processing&hellip;</span>
            </button>
        </div>

    </div>{{-- /panel --}}
</div>
