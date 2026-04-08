{{--
 | Component  : x-ui.contact-modal
 | Location   : resources/views/components/ui/contact-modal.blade.php
 |
 | Anchored FAB (bottom-right) that opens a branded contact/quote form modal.
 | Drop anywhere in the layout — renders outside the normal flow via fixed positioning.
 |
 | ── PROPS ───────────────────────────────────────────────────────────────────
 |   buttonLabel   FAB label text         (default: "Contact Us Now")
 |   modalTitle    modal heading          (default: "Get a Free Quote")
 |   modalSubtitle sub-heading HTML       (default: brand tagline)
 |   logoSrc       logo image path        (default: /images/logos/top5-logo.gif)
 |   logoAlt       logo alt text          (default: "Top 5 Percent")
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.contact-modal />
 |   <x-ui.contact-modal button-label="Get a Quote" modal-title="Request Pricing" />
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
        sent: false,
        error: false,
        loading: false,
        customRequest: false,
        emailError: false,
        firstName: '',
        lastName: '',
        cmPhone: '',
        cmEmail: '',
        contactMessage: '',

        get contactReady() {
            return this.firstName.trim().length > 0
                && this.lastName.trim().length > 0
                && this.cmPhone.replace(/\D/g,'').length >= 10
                && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.cmEmail)
                && !this.emailError;
        },
        get formReady() {
            return this.contactReady && this.contactMessage.trim().length > 0;
        },

        openModal()  {
            this.open = true;
            this.customRequest = false;
            document.body.style.overflow = 'hidden';
        },
        closeModal() { this.open = false; document.body.style.overflow = ''; },
        launchWizard() {
            this.closeModal();
            this.$nextTick(() => {
                window.dispatchEvent(new CustomEvent('open-modal', {
                    detail: {
                        name: 'custom-request-wizard',
                        prefill: {
                            name: (this.firstName.trim() + ' ' + this.lastName.trim()).trim(),
                            email: this.cmEmail,
                            phone: this.cmPhone
                        }
                    }
                }));
            });
        },

        async submit(form) {
            this.loading = true;
            this.error   = false;
            try {
                const res = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')?.content ?? '',
                    },
                    body: JSON.stringify(Object.fromEntries(new FormData(form))),
                });
                this.sent = res.ok;
                if (!res.ok) this.error = true;
            } catch {
                this.error = true;
            } finally {
                this.loading = false;
                if (this.sent) setTimeout(() => this.closeModal(), 3000);
            }
        },
    }"
    @keydown.escape.window="if (open) closeModal()"
    @open-contact-modal.window="openModal()"
>
    {{-- ── Floating Action Button ─────────────────────────────────────────── --}}
    <div class="fixed bottom-6 right-6 z-[9990]">
        <div class="relative">
            {{-- Pulse halo --}}
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
            class="relative w-full max-w-[34rem] max-h-[92dvh] bg-white shadow-2xl overflow-y-auto overscroll-contain"
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
                    aria-label="Close contact form"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                         class="w-[1.125rem] h-[1.125rem]" aria-hidden="true">
                        <path d="M18 6 6 18M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Success state --}}
            <div x-show="sent" class="px-6 py-10 text-center">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-success/10 mx-auto mb-4">
                    <svg class="w-7 h-7 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-charcoal mb-2">Message Sent!</h3>
                <p class="text-charcoal-light text-sm">We'll get back to you within one business day. This window will close automatically.</p>
            </div>

            {{-- Form --}}
            <form
                x-show="!sent"
                @submit.prevent="submit($el)"
                class="px-6 py-5 space-y-4"
                novalidate
            >
                {{-- Error banner --}}
                <div x-show="error" class="flex items-center gap-2 px-4 py-3 bg-error/10 text-error text-sm font-medium">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    Something went wrong. Please try again or call us at (815) 349-8600.
                </div>

                {{-- ── Row 1: First Name + Last Name ────────────────────── --}}
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="contact-first-name" class="block text-sm font-semibold text-charcoal mb-1">First Name <span class="text-error">*</span></label>
                        <input
                            id="contact-first-name"
                            name="first_name"
                            type="text"
                            required
                            autocomplete="given-name"
                            placeholder="First name"
                            x-model="firstName"
                            class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                        >
                    </div>
                    <div>
                        <label for="contact-last-name" class="block text-sm font-semibold text-charcoal mb-1">Last Name <span class="text-error">*</span></label>
                        <input
                            id="contact-last-name"
                            name="last_name"
                            type="text"
                            required
                            autocomplete="family-name"
                            placeholder="Last name"
                            x-model="lastName"
                            class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                        >
                    </div>
                </div>

                {{-- ── Row 2: Phone + Email ──────────────────────────────── --}}
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="contact-phone" class="block text-sm font-semibold text-charcoal mb-1">Phone <span class="text-error">*</span></label>
                        <input
                            id="contact-phone"
                            name="phone"
                            type="tel"
                            required
                            autocomplete="tel"
                            placeholder="(815) 000-0000"
                            maxlength="14"
                            :value="cmPhone"
                            @input="
                                let d = $el.value.replace(/\D/g,'').substring(0,10);
                                if (d.length >= 7)      $el.value = '(' + d.substring(0,3) + ') ' + d.substring(3,6) + '-' + d.substring(6);
                                else if (d.length >= 4) $el.value = '(' + d.substring(0,3) + ') ' + d.substring(3);
                                else if (d.length >= 1) $el.value = '(' + d;
                                else                    $el.value = '';
                                cmPhone = $el.value;
                            "
                            class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                        >
                    </div>
                    <div>
                        <label for="contact-email" class="block text-sm font-semibold text-charcoal mb-1">Email <span class="text-error">*</span></label>
                        <input
                            id="contact-email"
                            name="email"
                            type="email"
                            required
                            autocomplete="email"
                            placeholder="you@example.com"
                            x-model="cmEmail"
                            @input="emailError = cmEmail.length > 0 && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(cmEmail)"
                            @blur="emailError = cmEmail.length > 0 && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(cmEmail)"
                            :class="emailError ? 'border-error ring-1 ring-error/40 focus:border-error focus:ring-error/40' : 'border-linen-dark focus:border-sunburst focus:ring-1 focus:ring-sunburst/50'"
                            class="w-full px-3 py-2.5 text-sm border focus:outline-none bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
                        >
                        <p x-show="emailError" x-cloak class="mt-1 text-xs text-error font-medium">Please enter a valid email address.</p>
                    </div>
                </div>

                {{-- ── Custom Request Toggle (above textarea, disabled until contact info complete) ── --}}
                <div class="flex items-center justify-between gap-4 py-3 border-t border-b border-linen-dark">
                    <div class="min-w-0">
                        <p class="text-sm font-semibold text-charcoal">
                            Do You Have a Custom Request? <span class="text-error">*</span>
                        </p>
                        <p class="text-xs text-charcoal-light mt-0.5" x-show="!contactReady">Complete your contact info above to enable</p>
                        <p class="text-xs text-charcoal-light mt-0.5" x-show="contactReady" x-cloak>Use our guided custom order wizard</p>
                    </div>
                    <button
                        type="button"
                        role="switch"
                        :aria-checked="customRequest.toString()"
                        :disabled="!contactReady"
                        @click="if (contactReady) { customRequest = !customRequest; if (customRequest) launchWizard(); }"
                        :class="contactReady
                            ? (customRequest ? 'bg-sunburst' : 'bg-linen-dark')
                            : 'bg-linen-dark opacity-40 cursor-not-allowed'"
                        class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1"
                    >
                        <span
                            :class="customRequest ? 'translate-x-6' : 'translate-x-1'"
                            class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                        ></span>
                    </button>
                </div>

                {{-- ── What can we help you with? ───────────────────────── --}}
                <div>
                    <label for="contact-message" class="block text-sm font-semibold text-charcoal mb-1">What can we help you with? <span class="text-error">*</span></label>
                    <textarea
                        id="contact-message"
                        name="message"
                        required
                        rows="4"
                        x-model="contactMessage"
                        placeholder="Tell us about your project — product type, quantity, deadline, etc."
                        class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors resize-y"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    :disabled="loading || !formReady"
                    class="w-full py-3 px-6 bg-gold-gradient text-charcoal font-semibold text-sm tracking-wide transition-all duration-150 hover:shadow-gold-lg hover:-translate-y-0.5 active:translate-y-0 disabled:opacity-60 disabled:cursor-not-allowed"
                >
                    <span x-show="!loading">Send Message</span>
                    <span x-show="loading" class="flex items-center justify-center gap-2">
                        <svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"/>
                        </svg>
                        Sending…
                    </span>
                </button>
            </form>

            {{-- Footer micro-text --}}
            <div x-show="!sent" class="px-6 pb-4 pt-1 text-center text-xs text-charcoal-lighter border-t border-linen-dark">
                <span class="text-sunburst-dark font-semibold">🎖 Veteran-Owned</span>
                &nbsp;&middot;&nbsp; Proudly Serving Joliet, IL &nbsp;&middot;&nbsp; No spam, ever.
            </div>

        </div>{{-- /panel --}}
    </div>{{-- /overlay --}}
</div>
