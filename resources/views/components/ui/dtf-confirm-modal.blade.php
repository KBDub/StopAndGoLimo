{{--
 | Component : x-ui.dtf-confirm-modal
 | Location  : resources/views/components/ui/dtf-confirm-modal.blade.php
 |
 | Shown after a PNG file is selected from the DTF pricing table.
 | Reads Alpine.store('dtfCart').pendingItem for the selected row details.
 |
 | Trigger  : window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'dtf-confirm' } }))
 |
 | On "Proceed to Checkout" : appends pendingItem to dtfCart.items,
 |                            dispatches open-contact-modal { dtf: true, fileName }
 | On "Add more DTFs"       : appends pendingItem to dtfCart.items, closes — user
 |                            returns to pricing table to pick another size.
 | X close (confirmed)      : clears dtfCart and closes.
--}}

<div
    x-data="{
        isOpen: false,
        selectedOption: '',
        showCloseConfirm: false,

        get pending() {
            return Alpine.store('dtfCart').pendingItem || {};
        },
        get cartCount() {
            return Alpine.store('dtfCart').items.length;
        },
        get continueReady() {
            return this.selectedOption !== '';
        },

        open() {
            this.isOpen = true;
            this.selectedOption = '';
            this.showCloseConfirm = false;
            document.body.style.overflow = 'hidden';
        },
        close() {
            this.isOpen = false;
            document.body.style.overflow = '';
        },
        confirmClose() {
            Alpine.store('dtfCart').clear();
            this.close();
        },
        proceed() {
            if (!this.continueReady) return;
            const item = Object.assign({}, this.pending);
            Alpine.store('dtfCart').items.push(item);
            Alpine.store('dtfCart').pendingItem = null;
            if (this.selectedOption === 'checkout') {
                this.close();
                this.$nextTick(() => window.dispatchEvent(new CustomEvent('open-contact-modal', {
                    detail: { dtf: true, fileName: item.fileName || '' }
                })));
            } else {
                this.close();
            }
        }
    }"
    @open-modal.window="if ($event.detail.name === 'dtf-confirm') open()"
    @keydown.escape.window="
        if (isOpen) {
            if (showCloseConfirm) showCloseConfirm = false;
            else showCloseConfirm = true;
        }
    "
>
    <template x-teleport="body">
        <div
            x-show="isOpen"
            x-cloak
            class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-charcoal-dark/80 backdrop-blur-sm"
            role="dialog"
            aria-modal="true"
            aria-labelledby="dtf-confirm-title"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
            <div
                class="relative w-full max-w-sm bg-white shadow-2xl overflow-hidden"
                x-transition:enter="transition ease-out duration-220"
                x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                @click.stop
            >
                {{-- Gold accent stripe --}}
                <div class="h-2 bg-gold-gradient-horizontal flex-shrink-0" aria-hidden="true"></div>

                {{-- Header --}}
                <div class="flex items-center justify-between gap-3 px-5 py-4 bg-linen border-b-2 border-sunburst">
                    <h2 id="dtf-confirm-title" class="text-lg font-bold text-charcoal">Ready to Order?</h2>
                    <button
                        type="button"
                        @click="showCloseConfirm = true"
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

                {{-- Body --}}
                <div class="px-5 py-5 space-y-4">

                    {{-- Selected transfer info --}}
                    <div class="flex items-start gap-3 px-4 py-3 bg-sunburst/10 border border-sunburst/40">
                        <svg class="w-5 h-5 flex-shrink-0 text-sunburst mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 2L2 7l10 5 10-5-10-5Z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                        <div class="min-w-0">
                            <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-0.5">Selected Transfer</p>
                            <p class="text-sm font-bold text-charcoal" x-text="(pending.type || '') + ' — ' + (pending.size || '')"></p>
                            <p class="text-xs text-charcoal-light" x-text="(pending.tier || '') + ' at ' + (pending.price || '') + ' ea'"></p>
                        </div>
                    </div>

                    {{-- Attached PNG file info --}}
                    <div class="flex items-start gap-3 px-4 py-3 bg-sunburst/10 border border-sunburst/40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0 mt-0.5" viewBox="0 0 64 64" aria-hidden="true">
                            <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z" fill="#4A90D9" opacity="0.85"/>
                            <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z" fill="#5BA8F0"/>
                        </svg>
                        <div class="min-w-0">
                            <p class="text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-0.5">PNG File Attached</p>
                            <p class="text-sm font-semibold text-charcoal truncate" x-text="pending.fileName || '—'"></p>
                        </div>
                    </div>

                    {{-- Previous selections count --}}
                    <div x-show="cartCount > 0" x-cloak class="text-xs text-charcoal-light text-center">
                        <span class="font-semibold text-charcoal" x-text="cartCount"></span>
                        previous selection<span x-show="cartCount !== 1">s</span> already saved to your order.
                    </div>

                    {{-- Option radios --}}
                    <fieldset>
                        <legend class="block text-sm font-semibold text-charcoal text-center mb-3">
                            Would you like to: <span class="text-error">*</span>
                        </legend>
                        <div class="grid grid-cols-2 gap-2">
                            <label
                                class="flex flex-col items-center gap-2 px-3 py-3.5 border cursor-pointer transition-colors duration-150 text-center"
                                :class="selectedOption === 'checkout' ? 'border-sunburst bg-sunburst/5' : 'border-linen-dark bg-white hover:border-sunburst/40'"
                            >
                                <input type="radio" name="dtf-confirm-option" value="checkout"
                                    x-model="selectedOption"
                                    class="w-4 h-4 accent-sunburst">
                                <span class="text-sm font-bold text-charcoal leading-tight">Proceed to Checkout</span>
                            </label>
                            <label
                                class="flex flex-col items-center gap-2 px-3 py-3.5 border cursor-pointer transition-colors duration-150 text-center"
                                :class="selectedOption === 'addMore' ? 'border-sunburst bg-sunburst/5' : 'border-linen-dark bg-white hover:border-sunburst/40'"
                            >
                                <input type="radio" name="dtf-confirm-option" value="addMore"
                                    x-model="selectedOption"
                                    class="w-4 h-4 accent-sunburst">
                                <span class="text-sm font-bold text-charcoal leading-tight">Add more DTFs</span>
                            </label>
                        </div>
                    </fieldset>

                </div>

                {{-- Footer --}}
                <div class="flex items-center gap-3 px-5 py-3.5 bg-linen-light border-t border-linen-dark">
                    <button
                        type="button"
                        @click="showCloseConfirm = true"
                        class="text-sm font-semibold text-charcoal-light hover:text-charcoal transition-colors"
                    >Cancel</button>
                    <button
                        type="button"
                        @click="proceed()"
                        :disabled="!continueReady"
                        :class="continueReady ? '' : 'opacity-40 cursor-not-allowed'"
                        class="ml-auto px-6 py-2.5 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold transition-all"
                    >Continue →</button>
                </div>

                {{-- Are you sure overlay --}}
                <div x-show="showCloseConfirm" x-cloak
                    class="absolute inset-0 z-10 bg-charcoal-dark/75 flex items-center justify-center p-6">
                    <div class="bg-white shadow-2xl p-6 max-w-xs w-full text-center space-y-4">
                        <p class="text-base font-bold text-charcoal">Are you sure?</p>
                        <p class="text-sm text-charcoal-light">This will clear your current DTF selections.</p>
                        <div class="flex gap-3 justify-center">
                            <button type="button"
                                @click="showCloseConfirm = false"
                                class="px-4 py-2 text-sm font-semibold border border-linen-dark text-charcoal hover:bg-linen transition-colors">
                                Keep Going
                            </button>
                            <button type="button"
                                @click="confirmClose()"
                                class="px-4 py-2 text-sm font-semibold bg-charcoal text-white hover:bg-charcoal-dark transition-colors">
                                Yes, Cancel
                            </button>
                        </div>
                    </div>
                </div>

            </div>{{-- /panel --}}
        </div>{{-- /backdrop --}}
    </template>
</div>
