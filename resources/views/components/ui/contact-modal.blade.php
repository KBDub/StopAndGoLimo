{{--
 | Component  : x-ui.contact-modal
 | Location   : resources/views/components/ui/contact-modal.blade.php
 |
 | Anchored FAB (bottom-right) that opens a "What can we help you with?" picker modal.
 | Choosing an option dispatches directly to the appropriate flow — no contact info
 | collected here:
 |
 |   Custom Apparel Request  → custom-request-wizard (dtfMode: false)
 |   DTF Transfers           → custom-request-wizard (dtfMode: true, no contact prefill)
 |   Send Us a Message       → x-ui.send-message-modal
 |
 | x-ui.send-message-modal is bundled at the bottom of this file — no separate include needed.
 |
 | ── PROPS ───────────────────────────────────────────────────────────────────
 |   buttonLabel   FAB label text         (default: "Contact Us Now")
 |   modalTitle    modal heading          (default: "Get a Free Quote")
 |   modalSubtitle sub-heading HTML       (default: brand tagline)
 |   logoSrc       logo image path        (default: /images/logos/top5-logo.gif)
 |   logoAlt       logo alt text          (default: "Top 5 Percent")
 |
 | ── EVENTS ───────────────────────────────────────────────────────────────────
 |   open-contact-modal  { dtf: true, fileName: 'name.png' }  → bypasses picker, launches DTF wizard directly
 |   open-contact-modal  {}                                    → opens picker
--}}

@props([
    'buttonLabel'   => 'Contact Us Now',
    'modalTitle'    => 'Get a Free Quote',
    'modalSubtitle' => 'Veteran-Owned &nbsp;&middot;&nbsp; Joliet, IL &nbsp;&middot;&nbsp; Fast Turnaround',
    'logoSrc'       => '/images/logos/top5-logo.gif',
    'logoAlt'       => 'Top 5 Percent',
])

<div
    x-data="{
        open: false,
        dtfFileName: '',

        openModal() {
            this.open = true;
            document.body.style.overflow = 'hidden';
        },
        closeModal() {
            this.open = false;
            document.body.style.overflow = '';
        },
        choose(type) {
            const fileName = this.dtfFileName;
            const items = (typeof Alpine !== 'undefined' && Alpine.store && Alpine.store('dtfCart'))
                ? Alpine.store('dtfCart').items.slice()
                : [];
            this.closeModal();
            this.$nextTick(() => {
                if (type === 'message') {
                    window.dispatchEvent(new CustomEvent('open-send-message-modal'));
                    return;
                }
                window.dispatchEvent(new CustomEvent('open-modal', {
                    detail: {
                        name: 'custom-request-wizard',
                        prefill: {
                            name:        '',
                            email:       '',
                            phone:       '',
                            dtfMode:     type === 'dtf',
                            dtfFileName: type === 'dtf' ? fileName : '',
                            dtfItems:    type === 'dtf' ? items : [],
                        }
                    }
                }));
            });
        },
        launchDtfDirect(fileName) {
            const items = (typeof Alpine !== 'undefined' && Alpine.store && Alpine.store('dtfCart'))
                ? Alpine.store('dtfCart').items.slice()
                : [];
            this.closeModal();
            this.$nextTick(() => {
                window.dispatchEvent(new CustomEvent('open-modal', {
                    detail: {
                        name: 'custom-request-wizard',
                        prefill: {
                            name: '', email: '', phone: '',
                            dtfMode: true,
                            dtfFileName: fileName,
                            dtfItems: items,
                        }
                    }
                }));
            });
        },
    }"
    @keydown.escape.window="if (open) closeModal()"
    @open-contact-modal.window="
        const _d = $event.detail || {};
        if (_d.dtf) {
            dtfFileName = _d.fileName || '';
            launchDtfDirect(dtfFileName);
        } else {
            dtfFileName = '';
            openModal();
        }
    "
>
    {{-- ── Floating Action Button ─────────────────────────────────────────── --}}
    <div class="fixed bottom-6 right-6 z-[9990]">
        <div class="relative">
            <span
                class="absolute inset-0 rounded-full bg-sunburst opacity-50 animate-ping"
                aria-hidden="true"
                style="animation-duration:2.4s;"
            ></span>

            <button
                type="button"
                class="relative flex items-center gap-2 px-5 py-3 bg-gold-gradient text-charcoal text-sm font-semibold tracking-wide shadow-gold-xl transition-transform duration-150 hover:-translate-y-0.5 hover:shadow-gold-xl active:translate-y-0 whitespace-nowrap select-none"
                aria-label="{{ $buttonLabel }} — open contact form"
                @click="openModal()"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                     class="w-4 h-4 flex-shrink-0" aria-hidden="true">
                    <rect x="2" y="4" width="20" height="16" rx="2"/>
                    <path d="m2 7 10 7 10-7"/>
                </svg>
                {{ $buttonLabel }}
            </button>
        </div>
    </div>

    {{-- ── Modal Overlay ────────────────────────────────────────────────────── --}}
    <div
        x-show="open"
        x-cloak
        class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-charcoal-dark/80 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="contact-modal-title"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.self="closeModal()"
    >
        {{-- Panel --}}
        <div
            class="relative w-full max-w-[34rem] bg-white shadow-2xl overflow-hidden"
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
            <div class="flex items-start justify-between gap-4 px-6 py-5 bg-linen border-b-2 border-sunburst">
                <div class="flex items-center gap-3.5">
                    <img
                        src="{{ $logoSrc }}"
                        alt="{{ $logoAlt }}"
                        class="h-11 w-auto object-contain flex-shrink-0"
                        loading="lazy"
                    >
                    <div>
                        <h2 id="contact-modal-title" class="text-xl font-bold leading-tight text-charcoal">
                            {{ $modalTitle }}
                        </h2>
                        <p class="text-[0.8125rem] text-charcoal-light mt-0.5">{!! $modalSubtitle !!}</p>
                    </div>
                </div>

                <button
                    type="button"
                    class="flex items-center justify-center w-8 h-8 flex-shrink-0 -mt-0.5 text-charcoal-light hover:bg-linen-dark hover:text-charcoal transition-colors duration-150"
                    @click="closeModal()"
                    aria-label="Close"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                         class="w-[1.125rem] h-[1.125rem]" aria-hidden="true">
                        <path d="M18 6 6 18M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Body: picker --}}
            <div class="px-6 py-7">
                <p class="text-base font-semibold text-charcoal text-center mb-1">What can we help you with?</p>
                <p class="text-xs text-charcoal-light text-center mb-5">Choose an option to get started</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                    {{-- Custom Apparel Request --}}
                    <button
                        type="button"
                        @click="choose('apparel')"
                        class="group flex items-start gap-3.5 px-4 py-4 border border-linen-dark bg-white hover:border-sunburst/60 hover:bg-sunburst/5 transition-colors duration-150 text-left w-full"
                    >
                        <span
                            class="mt-0.5 flex-shrink-0 w-4 h-4 rounded-full border-2 border-charcoal-lighter group-hover:border-sunburst transition-colors duration-150"
                            aria-hidden="true"
                        ></span>
                        <span class="flex flex-col gap-0.5">
                            <span class="text-sm font-semibold text-charcoal leading-tight">Custom Apparel Request</span>
                            <span class="text-xs text-charcoal-light">Shirts, hoodies, hats, and more</span>
                        </span>
                    </button>

                    {{-- DTF Transfers --}}
                    <button
                        type="button"
                        @click="choose('dtf')"
                        class="group flex items-start gap-3.5 px-4 py-4 border border-linen-dark bg-white hover:border-sunburst/60 hover:bg-sunburst/5 transition-colors duration-150 text-left w-full"
                    >
                        <span
                            class="mt-0.5 flex-shrink-0 w-4 h-4 rounded-full border-2 border-charcoal-lighter group-hover:border-sunburst transition-colors duration-150"
                            aria-hidden="true"
                        ></span>
                        <span class="flex flex-col gap-0.5">
                            <span class="text-sm font-semibold text-charcoal leading-tight">DTF Transfers</span>
                            <span class="text-xs text-charcoal-light">Heat-transfer prints ready to apply</span>
                        </span>
                    </button>

                    {{-- Send Us a Message — centered below the two-column row --}}
                    <div class="sm:col-span-2 flex justify-center">
                        <button
                            type="button"
                            @click="choose('message')"
                            class="group flex items-start gap-3.5 px-4 py-4 border border-linen-dark bg-white hover:border-sunburst/60 hover:bg-sunburst/5 transition-colors duration-150 text-left w-full sm:max-w-[calc(50%-0.375rem)]"
                        >
                            <span
                                class="mt-0.5 flex-shrink-0 w-4 h-4 rounded-full border-2 border-charcoal-lighter group-hover:border-sunburst transition-colors duration-150"
                                aria-hidden="true"
                            ></span>
                            <span class="flex flex-col gap-0.5">
                                <span class="text-sm font-semibold text-charcoal leading-tight">Send Us a Message</span>
                                <span class="text-xs text-charcoal-light">Questions, pricing, or anything else</span>
                            </span>
                        </button>
                    </div>

                </div>
            </div>

            {{-- Footer micro-text --}}
            <div class="px-6 pb-5 pt-0 text-center text-xs text-charcoal-lighter border-t border-linen-dark">
                <span class="font-semibold text-charcoal-light">Veteran-Owned</span>
                &nbsp;&middot;&nbsp; Proudly Serving Joliet, IL &nbsp;&middot;&nbsp; No spam, ever.
            </div>

        </div>{{-- /panel --}}
    </div>{{-- /overlay --}}
</div>

{{-- x-ui.send-message-modal is bundled here — no separate include needed --}}
<x-ui.send-message-modal
    :logo-src="$logoSrc"
    :logo-alt="$logoAlt"
    :modal-subtitle="$modalSubtitle"
/>
