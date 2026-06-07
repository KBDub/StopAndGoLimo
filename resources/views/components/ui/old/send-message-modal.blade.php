{{--
 | Component  : x-ui.send-message-modal
 | Location   : resources/views/components/ui/send-message-modal.blade.php
 |
 | Standalone contact form modal for Stop & Go Limo. Opened by the picker inside
 | x-ui.contact-modal when the user chooses "Send a Message" or "Get a Quote".
 | Not a FAB-based modal, triggered by the open-send-message-modal window event.
 |
 | POSTs to POST /contact/message → ContactController::sendMessage()
 | CSRF token is baked at render time as _csrf, no <meta name="csrf-token"> needed.
 |
 | ── PROPS ───────────────────────────────────────────────────────────────────
 |   logoSrc       logo image path        (default: /images/logos/stopngo-logo.png)
 |   logoAlt       logo alt text          (default: "Stop & Go Limo")
 |   modalSubtitle sub-heading HTML       (default: brand tagline)
 |
 | ── EVENTS ───────────────────────────────────────────────────────────────────
 |   open-send-message-modal  (window)  → opens this modal
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   Bundled automatically at the bottom of x-ui.contact-modal.
 |   No separate include required.
--}}

@props([
    'logoSrc'       => '/images/logos/stopngo-logo.png',
    'logoAlt'       => 'Stop & Go Limo',
    'modalSubtitle' => 'New Lenox &nbsp;&middot;&nbsp; Naperville &nbsp;&middot;&nbsp; Chicago &nbsp;&middot;&nbsp; Available 24/7',
])

<div
    x-data="{
        _csrf:     '{{ csrf_token() }}',
        open:      false,
        sent:      false,
        loading:   false,
        error:     '',
        firstName: '',
        lastName:  '',
        cmPhone:   '',
        cmEmail:   '',
        emailError: false,
        message:   '',

        get contactReady() {
            return this.firstName.trim().length > 0
                && this.lastName.trim().length > 0
                && this.cmPhone.replace(/\D/g,'').length >= 10
                && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.cmEmail)
                && !this.emailError;
        },
        get formReady() {
            return this.contactReady && this.message.trim().length > 0;
        },

        openModal() {
            this.open    = true;
            this.sent    = false;
            this.error   = '';
            document.body.style.overflow = 'hidden';
        },
        closeModal() {
            this.open = false;
            document.body.style.overflow = '';
        },
        goBack() {
            this.closeModal();
            this.$nextTick(() => window.dispatchEvent(new CustomEvent('open-contact-modal')));
        },
        reset() {
            this.firstName = '';
            this.lastName  = '';
            this.cmPhone   = '';
            this.cmEmail   = '';
            this.message   = '';
            this.emailError = false;
            this.sent      = false;
            this.error     = '';
            this.loading   = false;
        },

        async submit() {
            if (!this.formReady || this.loading) return;
            this.loading = true;
            this.error   = '';
            try {
                const res = await fetch('/contact/message', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept':       'application/json',
                        'X-CSRF-TOKEN': this._csrf,
                    },
                    body: JSON.stringify({
                        firstName: this.firstName,
                        lastName:  this.lastName,
                        phone:     this.cmPhone,
                        email:     this.cmEmail,
                        message:   this.message,
                    }),
                });
                const data = await res.json().catch(() => ({}));
                if (!res.ok) throw new Error(data.message || 'Something went wrong. Please try again.');
                this.sent = true;
                setTimeout(() => this.closeModal(), 3000);
            } catch (err) {
                this.error = err.message || 'Something went wrong. Please try again or call us at (815) 585-6922.';
            } finally {
                this.loading = false;
            }
        },
    }"
    @open-send-message-modal.window="reset(); openModal()"
    @keydown.escape.window="if (open) closeModal()"
>
    {{-- ── Modal Overlay ────────────────────────────────────────────────────── --}}
    <div
        x-show="open"
        x-cloak
        class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-navy-dark/80 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="send-message-modal-title"
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
            class="relative w-full max-w-[34rem] max-h-[92dvh] bg-white shadow-2xl overflow-y-auto overscroll-contain scrollbar-champagne"
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
                        <h2 id="send-message-modal-title" class="text-xl font-bold leading-tight text-navy font-head">
                            Send Us a Message
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

            {{-- ── Success state ──────────────────────────────────────────────── --}}
            <div x-show="sent" x-cloak class="px-6 py-10 text-center">
                <div class="flex items-center justify-center w-14 h-14 bg-stopngo-success/10 mx-auto mb-4">
                    <svg class="w-7 h-7 text-stopngo-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-2 font-head">Message Sent!</h3>
                <p class="text-slate text-sm">We will get back to you within one business day. This window will close automatically.</p>
            </div>

            {{-- ── Form ──────────────────────────────────────────────────────── --}}
            <div x-show="!sent" class="px-6 py-5 space-y-4">

                {{-- Error banner --}}
                <div
                    x-show="error"
                    x-cloak
                    class="flex items-center gap-2 px-4 py-3 bg-stopngo-error/10 text-stopngo-error text-sm font-medium"
                >
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    <span x-text="error"></span>
                </div>

                {{-- Row 1: First Name + Last Name --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="smm-first-name" class="block text-sm font-semibold text-navy mb-1">
                            First Name <span class="text-stopngo-error">*</span>
                        </label>
                        <input
                            id="smm-first-name"
                            type="text"
                            required
                            autocomplete="given-name"
                            placeholder="First name"
                            x-model="firstName"
                            class="w-full px-3 py-2.5 text-sm border border-cloud-dark focus:outline-none focus:border-champagne focus:ring-1 focus:ring-champagne/50 bg-white text-navy placeholder:text-slate transition-colors"
                        >
                    </div>
                    <div>
                        <label for="smm-last-name" class="block text-sm font-semibold text-navy mb-1">
                            Last Name <span class="text-stopngo-error">*</span>
                        </label>
                        <input
                            id="smm-last-name"
                            type="text"
                            required
                            autocomplete="family-name"
                            placeholder="Last name"
                            x-model="lastName"
                            class="w-full px-3 py-2.5 text-sm border border-cloud-dark focus:outline-none focus:border-champagne focus:ring-1 focus:ring-champagne/50 bg-white text-navy placeholder:text-slate transition-colors"
                        >
                    </div>
                </div>

                {{-- Row 2: Phone + Email --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="smm-phone" class="block text-sm font-semibold text-navy mb-1">
                            Phone <span class="text-stopngo-error">*</span>
                        </label>
                        <input
                            id="smm-phone"
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
                            class="w-full px-3 py-2.5 text-sm border border-cloud-dark focus:outline-none focus:border-champagne focus:ring-1 focus:ring-champagne/50 bg-white text-navy placeholder:text-slate transition-colors"
                        >
                    </div>
                    <div>
                        <label for="smm-email" class="block text-sm font-semibold text-navy mb-1">
                            Email <span class="text-stopngo-error">*</span>
                        </label>
                        <input
                            id="smm-email"
                            type="email"
                            required
                            autocomplete="email"
                            placeholder="you@example.com"
                            x-model="cmEmail"
                            @input="emailError = cmEmail.length > 0 && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(cmEmail)"
                            @blur="emailError  = cmEmail.length > 0 && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(cmEmail)"
                            :class="emailError
                                ? 'border-stopngo-error ring-1 ring-stopngo-error/40 focus:border-stopngo-error focus:ring-stopngo-error/40'
                                : 'border-cloud-dark focus:border-champagne focus:ring-1 focus:ring-champagne/50'"
                            class="w-full px-3 py-2.5 text-sm border focus:outline-none bg-white text-navy placeholder:text-slate transition-colors"
                        >
                        <p x-show="emailError" x-cloak class="mt-1 text-xs text-stopngo-error font-medium">
                            Please enter a valid email address.
                        </p>
                    </div>
                </div>

                {{-- Message --}}
                <div>
                    <label for="smm-message" class="block text-sm font-semibold text-navy mb-1">
                        Your Message <span class="text-stopngo-error">*</span>
                    </label>
                    <textarea
                        id="smm-message"
                        required
                        rows="4"
                        x-model="message"
                        placeholder="Tell us how we can help. Pickup location, destination, date, number of passengers, etc."
                        class="w-full px-3 py-2.5 text-sm border border-cloud-dark focus:outline-none focus:border-champagne focus:ring-1 focus:ring-champagne/50 bg-white text-navy placeholder:text-slate transition-colors resize-y"
                    ></textarea>
                </div>

                {{-- Footer buttons --}}
                <div class="flex items-center justify-between gap-3 pt-1">
                    <button
                        type="button"
                        @click="goBack()"
                        class="flex items-center gap-1.5 text-sm text-slate hover:text-navy transition-colors duration-150"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-3.5 h-3.5" aria-hidden="true">
                            <path d="M19 12H5M12 5l-7 7 7 7"/>
                        </svg>
                        Back
                    </button>

                    <button
                        type="button"
                        @click="submit()"
                        :disabled="loading || !formReady"
                        class="flex-1 max-w-xs py-3 px-6 bg-champagne text-navy font-semibold text-sm tracking-wide transition-all duration-150 hover:bg-champagne-dark hover:shadow-champagne-lg hover:-translate-y-0.5 active:translate-y-0 disabled:opacity-60 disabled:cursor-not-allowed disabled:hover:translate-y-0 disabled:hover:shadow-none font-head"
                    >
                        <span x-show="!loading">Send Message</span>
                        <span x-show="loading" x-cloak class="flex items-center justify-center gap-2">
                            <svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"/>
                            </svg>
                            Sending&hellip;
                        </span>
                    </button>
                </div>

            </div>{{-- /form --}}

            {{-- Footer micro-text --}}
            <div x-show="!sent" class="px-6 pb-4 pt-1 text-center text-xs text-slate border-t border-cloud-dark">
                <span class="font-semibold text-navy">Stop &amp; Go Limo</span>
                &nbsp;&middot;&nbsp; Serving Illinois since 2009 &nbsp;&middot;&nbsp; No spam, ever.
            </div>

        </div>{{-- /panel --}}
    </div>{{-- /overlay --}}
</div>
