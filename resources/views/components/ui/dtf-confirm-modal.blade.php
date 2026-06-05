{{--
 | Component : x-ui.dtf-confirm-modal
 | Repurposed: Was "DTF Confirm" step. Now used as a booking/file confirm modal for Stop & Go Limo.
 |
 | Trigger  : window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'dtf-confirm' } }))
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
            class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-navy-dark/80 backdrop-blur-sm"
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
                <div class="h-2 bg-champagne flex-shrink-0" aria-hidden="true"></div>

                <div class="flex items-center justify-between gap-3 px-5 py-4 bg-cloud border-b-2 border-champagne">
                    <h2 id="dtf-confirm-title" class="text-lg font-bold text-navy font-head">Ready to Confirm?</h2>
                    <button
                        type="button"
                        @click="showCloseConfirm = true"
                        class="flex items-center justify-center w-8 h-8 flex-shrink-0 text-slate hover:bg-cloud hover:text-navy transition-colors duration-150"
                        aria-label="Close"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-[1.125rem] h-[1.125rem]" aria-hidden="true">
                            <path d="M18 6 6 18M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="px-5 py-5 space-y-4">

                    <div class="flex items-start gap-3 px-4 py-3 bg-champagne/10 border border-champagne/40">
                        <svg class="w-5 h-5 flex-shrink-0 text-champagne mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 2L2 7l10 5 10-5-10-5Z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                        <div class="min-w-0">
                            <p class="text-xs font-semibold text-slate mb-0.5">Selected Service</p>
                            <p class="text-sm font-bold text-navy" x-text="(pending.type || '') + ', ' + (pending.size || '')"></p>
                            <p class="text-xs text-slate" x-text="(pending.tier || '') + ' at ' + (pending.price || '') + ' ea'"></p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 px-4 py-3 bg-champagne/10 border border-champagne/40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0 mt-0.5" viewBox="0 0 64 64" aria-hidden="true">
                            <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z" fill="var(--azure)" opacity="0.85"/>
                            <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z" fill="var(--azure)" opacity="0.65"/>
                        </svg>
                        <div class="min-w-0">
                            <p class="text-xs font-semibold text-slate mb-0.5">File Attached</p>
                            <p class="text-sm font-semibold text-navy truncate" x-text="pending.fileName || ','"></p>
                        </div>
                    </div>

                    <div x-show="cartCount > 0" x-cloak class="text-xs text-slate text-center">
                        <span class="font-semibold text-navy" x-text="cartCount"></span>
                        previous selection<span x-show="cartCount !== 1">s</span> already saved to your order.
                    </div>

                    <fieldset>
                        <legend class="block text-sm font-semibold text-navy text-center mb-3 font-head">
                            What would you like to do? <span class="text-error">*</span>
                        </legend>
                        <div class="grid grid-cols-2 gap-2">
                            <label
                                class="flex flex-col items-center gap-2 px-3 py-3.5 border cursor-pointer transition-colors duration-150 text-center"
                                :class="selectedOption === 'checkout' ? 'border-champagne bg-champagne/5' : 'border-cloud bg-white hover:border-champagne/40'"
                            >
                                <input type="radio" name="dtf-confirm-option" value="checkout"
                                    x-model="selectedOption"
                                    class="w-4 h-4 accent-champagne">
                                <span class="text-sm font-bold text-navy leading-tight font-head">Proceed to Checkout</span>
                            </label>
                            <label
                                class="flex flex-col items-center gap-2 px-3 py-3.5 border cursor-pointer transition-colors duration-150 text-center"
                                :class="selectedOption === 'addMore' ? 'border-champagne bg-champagne/5' : 'border-cloud bg-white hover:border-champagne/40'"
                            >
                                <input type="radio" name="dtf-confirm-option" value="addMore"
                                    x-model="selectedOption"
                                    class="w-4 h-4 accent-champagne">
                                <span class="text-sm font-bold text-navy leading-tight font-head">Add Another Item</span>
                            </label>
                        </div>
                    </fieldset>

                </div>

                <div class="flex items-center gap-3 px-5 py-3.5 bg-cloud border-t border-cloud">
                    <button
                        type="button"
                        @click="showCloseConfirm = true"
                        class="text-sm font-semibold text-slate hover:text-navy transition-colors"
                    >Cancel</button>
                    <button
                        type="button"
                        @click="proceed()"
                        :disabled="!continueReady"
                        :class="continueReady ? '' : 'opacity-40 cursor-not-allowed'"
                        class="ml-auto px-6 py-2.5 text-sm font-semibold text-navy bg-champagne hover:shadow-champagne transition-all font-head"
                    >Continue &rarr;</button>
                </div>

                <div x-show="showCloseConfirm" x-cloak
                    class="absolute inset-0 z-10 bg-navy-dark/75 flex items-center justify-center p-6">
                    <div class="bg-white shadow-2xl p-6 max-w-xs w-full text-center space-y-4">
                        <p class="text-base font-bold text-navy font-head">Are you sure?</p>
                        <p class="text-sm text-slate">This will clear your current selections.</p>
                        <div class="flex gap-3 justify-center">
                            <button type="button"
                                @click="showCloseConfirm = false"
                                class="px-4 py-2 text-sm font-semibold border border-cloud text-navy hover:bg-cloud transition-colors">
                                Keep Going
                            </button>
                            <button type="button"
                                @click="confirmClose()"
                                class="px-4 py-2 text-sm font-semibold bg-navy text-white hover:bg-navy-dark transition-colors">
                                Yes, Cancel
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </template>
</div>
