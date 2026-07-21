{{--
    x-ui.modal-quote — Free Instant Quote modal
    Opens on window event: "open-modal-quote"
    Form action wired to Livewire or POST endpoint — set $action prop when ready.
--}}
@props([
    'action' => '#',
])

<x-ui.modal id="quote" title="Get a Free Instant Quote" size="lg">

    <div x-data="{ submitted: false }">

        {{-- Success state --}}
        <div x-show="submitted" x-cloak style="text-align:center; padding:2rem 1rem;">
            <div style="width:56px; height:56px; border-radius:50%; background:rgba(46,158,107,0.15); display:flex; align-items:center; justify-content:center; margin:0 auto 1.25rem;">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--stopngo-success, #2E9E6B)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            </div>
            <h4 class="font-head" style="font-size:1.25rem; font-weight:700; color:var(--champagne); margin:0 0 0.75rem;">Quote Request Received</h4>
            <p class="font-body" style="color:var(--cloud); font-size:0.9375rem; line-height:1.6; margin:0 0 1.5rem;">
                Thank you. A member of our team will follow up with your personalized quote within the hour.
            </p>
            <button
                onclick="window.dispatchEvent(new CustomEvent('open-modal-quote', { detail: { reset: true } }))"
                style="background:none; border:none; cursor:pointer; color:var(--champagne); font-family:var(--font-body); font-size:0.875rem; text-decoration:underline; text-underline-offset:3px;"
            >Submit another request</button>
        </div>

        {{-- Form --}}
        <form
            action="{{ $action }}"
            method="POST"
            x-show="!submitted"
            x-on:submit.prevent="submitted = true"
            novalidate
            style="display:flex; flex-direction:column; gap:1.25rem;"
        >
            @csrf

            {{-- Row 1: Name --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-first-name" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">First Name</label>
                    <input
                        type="text"
                        id="quote-first-name"
                        name="first_name"
                        placeholder="Jane"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
                <div>
                    <label class="font-head" for="quote-last-name" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Last Name</label>
                    <input
                        type="text"
                        id="quote-last-name"
                        name="last_name"
                        placeholder="Smith"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
            </div>

            {{-- Row 2: Phone + Email --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-phone" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Phone</label>
                    <input
                        type="tel"
                        id="quote-phone"
                        name="phone"
                        placeholder="(815) 000-0000"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
                <div>
                    <label class="font-head" for="quote-email" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Email</label>
                    <input
                        type="email"
                        id="quote-email"
                        name="email"
                        placeholder="jane@example.com"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
            </div>

            {{-- Row 3: Service Type + Date --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-service" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Service Type</label>
                    <select
                        id="quote-service"
                        name="service_type"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box; appearance:none;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                        <option value="" style="background:var(--navy-dark); color:var(--slate);">Select a service...</option>
                        <option value="airport" style="background:var(--navy-dark);">Airport Shuttle (O'Hare / Midway)</option>
                        <option value="limo" style="background:var(--navy-dark);">Limousine Service</option>
                        <option value="party-bus" style="background:var(--navy-dark);">Party Bus</option>
                        <option value="corporate" style="background:var(--navy-dark);">Corporate Car Service</option>
                        <option value="wedding" style="background:var(--navy-dark);">Wedding Transportation</option>
                        <option value="special-event" style="background:var(--navy-dark);">Special Event</option>
                        <option value="other" style="background:var(--navy-dark);">Other</option>
                    </select>
                </div>
                <div>
                    <label class="font-head" for="quote-date" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Travel Date</label>
                    <input
                        type="date"
                        id="quote-date"
                        name="travel_date"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box; color-scheme:dark;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
            </div>

            {{-- Row 4: Pickup + Dropoff --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-pickup" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Pickup Location</label>
                    <input
                        type="text"
                        id="quote-pickup"
                        name="pickup_location"
                        placeholder="Address or city"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
                <div>
                    <label class="font-head" for="quote-dropoff" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Dropoff Location</label>
                    <input
                        type="text"
                        id="quote-dropoff"
                        name="dropoff_location"
                        placeholder="Address, terminal, or city"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
            </div>

            {{-- Row 5: Passengers + Notes --}}
            <div style="display:grid; grid-template-columns:160px 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-passengers" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Passengers</label>
                    <input
                        type="number"
                        id="quote-passengers"
                        name="passengers"
                        min="1"
                        max="60"
                        placeholder="1"
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
                <div>
                    <label class="font-head" for="quote-notes" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Notes <span style="color:var(--slate); font-weight:400;">(optional)</span></label>
                    <input
                        type="text"
                        id="quote-notes"
                        name="notes"
                        placeholder="Flight number, special requests..."
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
            </div>

            {{-- Disclaimer --}}
            <p class="font-body" style="font-size:0.75rem; color:var(--slate); line-height:1.5; margin:0;">
                By submitting, you agree to be contacted by Stop &amp; Go Airport Shuttle Service, Inc. regarding your quote. We never share your information.
            </p>

            {{-- Submit --}}
            <div style="display:flex; align-items:center; justify-content:flex-end; gap:0.75rem; flex-wrap:wrap; padding-top:0.25rem;">
                <button
                    type="button"
                    onclick="window.dispatchEvent(new CustomEvent('close-modal-quote'))"
                    style="background:none; border:1px solid rgba(220,181,126,0.35); color:var(--champagne); font-family:var(--font-head); font-size:0.875rem; font-weight:600; padding:0.625rem 1.25rem; cursor:pointer; letter-spacing:0.04em; transition:all 0.15s;"
                    onmouseenter="this.style.background='rgba(220,181,126,0.08)'"
                    onmouseleave="this.style.background='none'"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    style="background:var(--champagne); color:var(--navy-dark); font-family:var(--font-head); font-size:0.9375rem; font-weight:700; padding:0.6875rem 1.75rem; border:none; cursor:pointer; letter-spacing:0.04em; transition:background 0.15s;"
                    onmouseenter="this.style.background='var(--champagne-light)'"
                    onmouseleave="this.style.background='var(--champagne)'"
                >
                    Get My Free Quote
                </button>
            </div>

        </form>
    </div>

</x-ui.modal>
