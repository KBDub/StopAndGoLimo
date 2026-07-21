{{--
    x-ui.modal-quote — Free Instant Quote modal
    Opens on window event: "open-modal-quote"
    Submits via fetch to POST /get-a-quote (QuoteController::submit).
--}}

<x-ui.modal id="quote" title="Get a Free Instant Quote" size="lg">

    <div
        x-data="{
            submitted: false,
            loading:   false,
            errors:    {},
            firstName: '',
            reference: '',
            async submit(form) {
                this.loading = true;
                this.errors  = {};
                try {
                    const res  = await fetch(form.action, {
                        method:  'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept':           'application/json',
                        },
                        body: new FormData(form),
                    });
                    const data = await res.json();
                    if (res.ok) {
                        this.submitted = true;
                        this.firstName = data.name      || 'there';
                        this.reference = data.reference || '';
                    } else {
                        this.errors = data.errors || { form: [data.message || 'Please try again.'] };
                    }
                } catch {
                    this.errors = { form: ['Network error. Please check your connection and try again.'] };
                }
                this.loading = false;
            }
        }"
    >

        {{-- ── Success state ────────────────────────────────────── --}}
        <div x-show="submitted" x-cloak style="text-align:center; padding:2.5rem 1rem;">
            <div style="width:60px; height:60px; border-radius:50%; background:rgba(46,158,107,0.15); display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem;">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#2E9E6B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            </div>
            <h4 class="font-head" style="font-size:1.25rem; font-weight:700; color:var(--champagne); margin:0 0 0.5rem;">
                Quote Request Received, <span x-text="firstName"></span>
            </h4>
            <p x-show="reference" class="font-mono" style="font-size:0.75rem; color:var(--slate); margin:0 0 1rem;" x-text="'Reference: ' + reference"></p>
            <p class="font-body" style="color:var(--cloud); font-size:0.9375rem; line-height:1.6; max-width:380px; margin:0 auto 1.75rem;">
                A member of our team will follow up with your personalized quote within the hour.
            </p>
            <button
                onclick="window.dispatchEvent(new CustomEvent('close-modal-quote'))"
                class="bg-champagne text-navy-dark font-head"
                style="font-size:0.9375rem; font-weight:700; padding:0.6rem 1.75rem; border:none; cursor:pointer; letter-spacing:0.04em; transition:background 0.15s;"
                onmouseenter="this.style.background='var(--champagne-light)'"
                onmouseleave="this.style.background=''"
            >Close</button>
        </div>

        {{-- ── Form ─────────────────────────────────────────────── --}}
        <form
            action="{{ route('quote.submit') }}"
            method="POST"
            x-show="!submitted"
            x-on:submit.prevent="submit($event.target)"
            novalidate
            style="display:flex; flex-direction:column; gap:1.25rem;"
        >
            @csrf

            {{-- Honeypot --}}
            <input type="text" name="sg_website" value="" style="display:none;" aria-hidden="true" tabindex="-1" autocomplete="off">

            {{-- Form-level error --}}
            <div x-show="errors.form" x-cloak style="background:rgba(192,57,43,0.1); border:1px solid rgba(192,57,43,0.4); padding:0.75rem 1rem;">
                <p class="font-body" style="color:#e07060; font-size:0.875rem; margin:0;" x-text="errors.form ? errors.form[0] : ''"></p>
            </div>

            {{-- Full Name --}}
            <div>
                <label class="font-head" for="q-name" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Full Name</label>
                <input
                    type="text"
                    id="q-name"
                    name="name"
                    placeholder="Jane Smith"
                    required
                    class="font-body w-full bg-navy-dark text-cloud-light"
                    style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; transition:border-color 0.15s;"
                    onfocus="this.style.borderColor='var(--champagne)'"
                    onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                >
                <p x-show="errors.name" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.name ? errors.name[0] : ''"></p>
            </div>

            {{-- Phone + Email --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="q-phone" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Phone</label>
                    <input
                        type="tel"
                        id="q-phone"
                        name="phone"
                        placeholder="(815) 000-0000"
                        required
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                    <p x-show="errors.phone" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.phone ? errors.phone[0] : ''"></p>
                </div>
                <div>
                    <label class="font-head" for="q-email" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Email</label>
                    <input
                        type="email"
                        id="q-email"
                        name="email"
                        placeholder="jane@example.com"
                        required
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                    <p x-show="errors.email" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.email ? errors.email[0] : ''"></p>
                </div>
            </div>

            {{-- Service Type + Date --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="q-vehicle" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Service Type</label>
                    <select
                        id="q-vehicle"
                        name="vehicle_type"
                        required
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; appearance:none; cursor:pointer; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                        <option value="" class="bg-navy-dark text-slate">Select a service...</option>
                        <option value="Airport Shuttle (O'Hare / Midway)" class="bg-navy-dark">Airport Shuttle (O'Hare / Midway)</option>
                        <option value="Limousine Service" class="bg-navy-dark">Limousine Service</option>
                        <option value="Party Bus" class="bg-navy-dark">Party Bus</option>
                        <option value="Corporate Car Service" class="bg-navy-dark">Corporate Car Service</option>
                        <option value="Wedding Transportation" class="bg-navy-dark">Wedding Transportation</option>
                        <option value="Special Event" class="bg-navy-dark">Special Event</option>
                        <option value="Other" class="bg-navy-dark">Other</option>
                    </select>
                    <p x-show="errors.vehicle_type" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.vehicle_type ? errors.vehicle_type[0] : ''"></p>
                </div>
                <div>
                    <label class="font-head" for="q-date" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Travel Date</label>
                    <input
                        type="date"
                        id="q-date"
                        name="booking_date"
                        required
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; color-scheme:dark; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                    <p x-show="errors.booking_date" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.booking_date ? errors.booking_date[0] : ''"></p>
                </div>
            </div>

            {{-- Pickup + Dropoff --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="q-pickup" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Pickup Location</label>
                    <input
                        type="text"
                        id="q-pickup"
                        name="pickup_location"
                        placeholder="Address or city"
                        required
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                    <p x-show="errors.pickup_location" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.pickup_location ? errors.pickup_location[0] : ''"></p>
                </div>
                <div>
                    <label class="font-head" for="q-destination" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Destination</label>
                    <input
                        type="text"
                        id="q-destination"
                        name="destination"
                        placeholder="Address, terminal, or city"
                        required
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                    <p x-show="errors.destination" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.destination ? errors.destination[0] : ''"></p>
                </div>
            </div>

            {{-- Passengers + Notes --}}
            <div style="display:grid; grid-template-columns:160px 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="q-passengers" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Passengers</label>
                    <input
                        type="number"
                        id="q-passengers"
                        name="passengers"
                        min="1"
                        max="60"
                        placeholder="1"
                        required
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                    <p x-show="errors.passengers" x-cloak class="font-body" style="color:#e07060; font-size:0.75rem; margin:0.25rem 0 0;" x-text="errors.passengers ? errors.passengers[0] : ''"></p>
                </div>
                <div>
                    <label class="font-head" for="q-notes" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">
                        Notes <span style="color:var(--slate); font-weight:400;">(optional)</span>
                    </label>
                    <input
                        type="text"
                        id="q-notes"
                        name="additional_info"
                        placeholder="Flight number, special requests..."
                        class="font-body w-full bg-navy-dark text-cloud-light"
                        style="font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; border:1px solid rgba(220,181,126,0.25); box-sizing:border-box; transition:border-color 0.15s;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
            </div>

            {{-- Disclaimer --}}
            <p class="font-body" style="font-size:0.75rem; color:var(--slate); line-height:1.5; margin:0;">
                By submitting, you agree to be contacted by Stop &amp; Go Airport Shuttle Service, Inc. regarding your quote. We never share your information.
            </p>

            {{-- Actions --}}
            <div style="display:flex; align-items:center; justify-content:flex-end; gap:0.75rem; flex-wrap:wrap; padding-top:0.25rem;">
                <button
                    type="button"
                    onclick="window.dispatchEvent(new CustomEvent('close-modal-quote'))"
                    class="font-head"
                    style="background:none; border:1px solid rgba(220,181,126,0.35); color:var(--champagne); font-size:0.875rem; font-weight:600; padding:0.625rem 1.25rem; cursor:pointer; letter-spacing:0.04em; transition:all 0.15s;"
                    onmouseenter="this.style.background='rgba(220,181,126,0.08)'"
                    onmouseleave="this.style.background='none'"
                >Cancel</button>

                <button
                    type="submit"
                    :disabled="loading"
                    class="bg-champagne text-navy-dark font-head"
                    style="font-size:0.9375rem; font-weight:700; padding:0.6875rem 1.75rem; border:none; cursor:pointer; letter-spacing:0.04em; min-width:10rem; display:inline-flex; align-items:center; justify-content:center; gap:0.5rem; transition:opacity 0.15s;"
                    :style="loading ? 'opacity:0.7; cursor:not-allowed;' : ''"
                    onmouseenter="if(!this.disabled) this.style.background='var(--champagne-light)'"
                    onmouseleave="this.style.background=''"
                >
                    <svg x-show="loading" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="animation:sq-spin 0.8s linear infinite; flex-shrink:0;">
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"/>
                    </svg>
                    <span x-text="loading ? 'Sending...' : 'Get My Free Quote'"></span>
                </button>
            </div>

        </form>
    </div>

</x-ui.modal>

<style>
@@keyframes sq-spin { to { transform: rotate(360deg); } }
</style>
