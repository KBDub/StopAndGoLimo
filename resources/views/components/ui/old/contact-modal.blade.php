{{--
 | Component  : x-ui.contact-modal
 | Location   : resources/views/components/ui/contact-modal.blade.php
 |
 | Anchored FAB (bottom-right) that opens a "How can we help you?" picker modal.
 | Choosing an option dispatches to the appropriate flow:
 |
 |   Book a Ride      → open-booking-modal
 |   Get a Quote      → open-send-message-modal (with quote context)
 |   Send a Message   → open-send-message-modal
 |
 | ── PROPS ───────────────────────────────────────────────────────────────────
 |   buttonLabel   FAB label text         (default: "Book Now")
 |   modalTitle    modal heading          (default: "How can we help?")
 |   modalSubtitle sub-heading text       (default: brand tagline)
 |   logoSrc       logo image path        (default: /images/logos/stopngo-logo.png)
 |   logoAlt       logo alt text          (default: "Stop & Go Limo")
 |
 | ── EVENTS ───────────────────────────────────────────────────────────────────
 |   open-contact-modal  {}  → opens picker
--}}

@props([
    'buttonLabel'   => 'Book Now',
    'modalTitle'    => 'How can we help?',
    'modalSubtitle' => 'New Lenox &nbsp;&middot;&nbsp; Naperville &nbsp;&middot;&nbsp; Chicago &nbsp;&middot;&nbsp; Available 24/7',
    'logoSrc'       => '/images/logos/stopngo-logo.png',
    'logoAlt'       => 'Stop & Go Limo',
])

<div
    x-data="{
        open: false,
        openModal() {
            this.open = true;
            document.body.style.overflow = 'hidden';
        },
        closeModal() {
            this.open = false;
            document.body.style.overflow = '';
        },
        choose(type) {
            this.closeModal();
            this.$nextTick(() => {
                if (type === 'book') {
                    window.dispatchEvent(new CustomEvent('open-booking-modal'));
                } else {
                    window.dispatchEvent(new CustomEvent('open-send-message-modal', {
                        detail: { context: type }
                    }));
                }
            });
        },
    }"
    @keydown.escape.window="if (open) closeModal()"
    @open-contact-modal.window="openModal()"
>
    {{-- ── Floating Action Button ─────────────────────────────────────────── --}}
    <div class="fixed bottom-6 right-6 z-[9990]">
        <div class="relative">
            <span
                class="absolute inset-0 bg-champagne opacity-40 animate-ping"
                aria-hidden="true"
                style="animation-duration:2.4s;"
            ></span>

            <button
                type="button"
                class="relative flex items-center gap-2 px-5 py-3 bg-champagne text-navy text-sm font-semibold font-head tracking-wide shadow-champagne-xl transition-transform duration-150 hover:-translate-y-0.5 hover:bg-champagne-dark active:translate-y-0 whitespace-nowrap select-none"
                aria-label="{{ $buttonLabel }}"
                @click="openModal()"
            >
                {{ $buttonLabel }}
            </button>
        </div>
    </div>

    {{-- ── Modal Overlay ────────────────────────────────────────────────────── --}}
    <div
        x-show="open"
        x-cloak
        class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-navy-dark/80 backdrop-blur-sm"
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
            {{-- Champagne accent stripe --}}
            <div class="h-2 bg-grad-champagne-rule flex-shrink-0" aria-hidden="true"></div>

            {{-- Header --}}
            <div class="flex items-start justify-between gap-4 px-6 py-5 bg-cloud border-b-2 border-champagne">
                <div class="flex items-center gap-3.5">
                    <img
                        src="{{ $logoSrc }}"
                        alt="{{ $logoAlt }}"
                        class="h-11 w-auto object-contain flex-shrink-0"
                        loading="lazy"
                    >
                    <div>
                        <h2 id="contact-modal-title" class="text-xl font-bold leading-tight text-navy font-head">
                            {{ $modalTitle }}
                        </h2>
                        <p class="text-[0.8125rem] text-slate mt-0.5">{!! $modalSubtitle !!}</p>
                    </div>
                </div>

                <button
                    type="button"
                    class="flex items-center justify-center w-8 h-8 flex-shrink-0 -mt-0.5 text-slate hover:bg-cloud-dark hover:text-navy transition-colors duration-150"
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
            <div class="px-6 pt-6 pb-10">
                <p class="text-base font-semibold text-navy text-center mb-1 font-head">What can we help you with?</p>
                <p class="text-xs text-slate text-center mb-5">Choose an option and we will get back to you right away.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                    {{-- Book a Ride --}}
                    <button
                        type="button"
                        @click="choose('book')"
                        class="group flex items-start gap-3.5 px-4 py-4 border border-cloud-dark bg-white hover:border-champagne/60 hover:bg-champagne/5 transition-colors duration-150 text-left w-full"
                    >
                        <span
                            class="mt-0.5 flex-shrink-0 w-4 h-4 border-2 border-slate group-hover:border-champagne transition-colors duration-150"
                            aria-hidden="true"
                        ></span>
                        <span class="flex flex-col gap-0.5">
                            <span class="text-sm font-semibold text-navy leading-tight font-head">Book a Ride</span>
                            <span class="text-xs text-slate">Airport transfers, events, and more</span>
                        </span>
                    </button>

                    {{-- Get a Quote --}}
                    <button
                        type="button"
                        @click="choose('quote')"
                        class="group flex items-start gap-3.5 px-4 py-4 border border-cloud-dark bg-white hover:border-champagne/60 hover:bg-champagne/5 transition-colors duration-150 text-left w-full"
                    >
                        <span
                            class="mt-0.5 flex-shrink-0 w-4 h-4 border-2 border-slate group-hover:border-champagne transition-colors duration-150"
                            aria-hidden="true"
                        ></span>
                        <span class="flex flex-col gap-0.5">
                            <span class="text-sm font-semibold text-navy leading-tight font-head">Get a Quote</span>
                            <span class="text-xs text-slate">Corporate accounts and group travel</span>
                        </span>
                    </button>

                    {{-- Send a Message --}}
                    <div class="sm:col-span-2 flex justify-center mt-1">
                        <button
                            type="button"
                            @click="choose('message')"
                            class="group flex items-start gap-3.5 px-4 py-4 border border-cloud-dark bg-white hover:border-champagne/60 hover:bg-champagne/5 transition-colors duration-150 text-left w-full sm:w-1/2"
                        >
                            <span
                                class="mt-0.5 flex-shrink-0 w-4 h-4 border-2 border-slate group-hover:border-champagne transition-colors duration-150"
                                aria-hidden="true"
                            ></span>
                            <span class="flex flex-col gap-0.5">
                                <span class="text-sm font-semibold text-navy leading-tight font-head">Send a Message</span>
                                <span class="text-xs text-slate">Questions, pricing, or anything else</span>
                            </span>
                        </button>
                    </div>

                </div>
            </div>

            {{-- Footer micro-text --}}
            <div class="px-6 pb-5 pt-0 text-center text-xs text-slate border-t border-cloud-dark">
                <span class="font-semibold text-navy">Stop &amp; Go Limo</span>
                &nbsp;&middot;&nbsp; Serving Illinois since 2009 &nbsp;&middot;&nbsp; No spam, ever.
            </div>

        </div>{{-- /panel --}}
    </div>{{-- /overlay --}}
</div>

{{-- x-ui.send-message-modal is bundled here --}}
<x-ui.send-message-modal
    :logo-src="$logoSrc"
    :logo-alt="$logoAlt"
    :modal-subtitle="$modalSubtitle"
/>
