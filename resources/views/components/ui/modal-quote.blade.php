<style>
@@media (max-width: 639px) {
    .mq-row-2col  { grid-template-columns: 1fr !important; }
    .mq-row-pax   { grid-template-columns: 90px 1fr !important; }
    .mq-actions   { flex-wrap: nowrap !important; }
    .mq-actions button { white-space: nowrap; }
}
</style>
{{--
    x-ui.modal-quote — Free Instant Quote modal
    Opens on window event: "open-modal-quote"
    Form action wired to Livewire or POST endpoint — set $action prop when ready.
--}}
@props([
    'action' => '#',
])

<x-ui.modal id="quote" title="Get a Free Instant Quote" size="lg">

    <div
        x-on:open-modal-quote.window="resetState()"
        x-data="{
        submitted:     false,
        submitting:    false,
        errorMessage:  '',
        confirmedName: '',
        resetState() {
            this.submitted     = false;
            this.submitting    = false;
            this.errorMessage  = '';
            this.confirmedName = '';
            this.$nextTick(() => { this.$el.querySelector('form')?.reset(); });
        },
        async handleSubmit(e) {
            this.submitting   = true;
            this.errorMessage = '';
            const fd = new FormData(e.target);
            fd.set('name', [fd.get('first_name'), fd.get('last_name')].filter(Boolean).join(' ').trim());
            fd.delete('first_name');
            fd.delete('last_name');
            fd.set('destination', fd.get('dropoff_location') || '');
            fd.delete('dropoff_location');
            fd.set('additional_info', fd.get('notes') || '');
            fd.delete('notes');
            try {
                const res  = await fetch('{{ route('quote.modal.submit') }}', { method: 'POST', body: fd });
                const data = await res.json();
                if (data.success) {
                    this.confirmedName = data.first_name || '';
                    this.submitted = true;
                } else {
                    this.errorMessage = data.message || 'Something went wrong. Please try again.';
                }
            } catch {
                this.errorMessage = 'Something went wrong. Please try again.';
            }
            this.submitting = false;
        }
    }">

        {{-- Success state --}}
        <div x-show="submitted" x-cloak style="text-align:center; padding:2rem 1rem;">
            <h4 class="font-head" style="font-size:1.25rem; font-weight:700; color:var(--champagne); margin:0 0 0.75rem;">Quote Request Received</h4>
            <p class="font-body" style="color:var(--cloud); font-size:0.9375rem; line-height:1.5; margin:0 0 0.5rem;">
                Thank you, <span x-text="confirmedName"></span>.
            </p>
            <p class="font-body" style="color:var(--cloud); font-size:0.9375rem; line-height:1.5; margin:0 0 1.75rem;">
                A member of our team will follow up with you shortly.
            </p>
            <button
                x-on:click="submitted = false; window.dispatchEvent(new CustomEvent('close-modal-quote'))"
                style="background:var(--champagne); color:var(--navy-dark); font-family:var(--font-head); font-size:0.9375rem; font-weight:700; padding:0.6875rem 2rem; border:none; cursor:pointer; letter-spacing:0.04em; transition:background 0.15s;"
                onmouseenter="this.style.background='var(--champagne-light)'"
                onmouseleave="this.style.background='var(--champagne)'"
            >Close</button>
        </div>

        {{-- Form --}}
        <form
            method="POST"
            x-show="!submitted"
            x-on:submit.prevent="handleSubmit($event)"
            novalidate
            style="display:flex; flex-direction:column; gap:1.25rem;"
        >
            @csrf
            {{-- Honeypot — bots fill this, humans don't --}}
            <div style="position:absolute; left:-9999px; top:-9999px; opacity:0;" aria-hidden="true">
                <label for="modal-sg-website">Leave this blank</label>
                <input type="text" name="sg_website" id="modal-sg-website" tabindex="-1" autocomplete="off">
            </div>

            {{-- Row 1: Name --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-first-name" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">First Name <span style="color:var(--white);" aria-hidden="true">*</span></label>
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
                    <label class="font-head" for="quote-last-name" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Last Name <span style="color:var(--white);" aria-hidden="true">*</span></label>
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
            <div class="mq-row-2col" style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-phone" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Phone <span style="color:var(--white);" aria-hidden="true">*</span></label>
                    <input
                        type="tel"
                        id="quote-phone"
                        name="phone"
                        placeholder="(815) 000-0000"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        oninput="let d=this.value.replace(/\D/g,'').substring(0,10);this.value=d.length>=7?'('+d.substring(0,3)+') '+d.substring(3,6)+'-'+d.substring(6):d.length>=4?'('+d.substring(0,3)+') '+d.substring(3):d.length?'('+d:'';"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
                <div>
                    <label class="font-head" for="quote-email" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Email <span style="color:var(--white);" aria-hidden="true">*</span></label>
                    <input
                        type="email"
                        id="quote-email"
                        name="email"
                        placeholder="jane@example.com"
                        required
                        class="font-body"
                        style="width:100%; background:var(--navy-dark); border:1px solid rgba(220,181,126,0.25); color:var(--cloud-light); font-size:0.9375rem; padding:0.625rem 0.875rem; outline:none; transition:border-color 0.15s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='var(--champagne)'"
                        oninput="this.style.borderColor=this.value&&!this.checkValidity()?'rgba(192,57,43,0.7)':'var(--champagne)'"
                        onblur="this.style.borderColor='rgba(220,181,126,0.25)'"
                    >
                </div>
            </div>

            {{-- Row 3: Service Type + Date --}}
            <div class="mq-row-2col" style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-service" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Service Type <span style="color:var(--white);" aria-hidden="true">*</span></label>
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
                        <option value="Airport Transportation" style="background:var(--navy-dark);">Airport Transportation</option>
                        <option value="Limousine Service" style="background:var(--navy-dark);">Limousine Service</option>
                        <option value="Party Bus" style="background:var(--navy-dark);">Party Bus</option>
                        <option value="Chartered Bus" style="background:var(--navy-dark);">Chartered Bus</option>
                        <option value="Corporate Transportation" style="background:var(--navy-dark);">Corporate Transportation</option>
                        <option value="Wedding Transportation" style="background:var(--navy-dark);">Wedding Transportation</option>
                        <option value="Special Event" style="background:var(--navy-dark);">Special Event</option>
                        <option value="Sporting Event" style="background:var(--navy-dark);">Sporting Event</option>
                        <option value="Concert" style="background:var(--navy-dark);">Concert</option>
                        <option value="Wine Tour" style="background:var(--navy-dark);">Wine Tour</option>
                        <option value="Chauffeur Service" style="background:var(--navy-dark);">Chauffeur Service</option>
                    </select>
                </div>
                <div>
                    <label class="font-head" for="quote-date" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Travel Date <span style="color:var(--white);" aria-hidden="true">*</span></label>
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
            <div class="mq-row-2col" style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div>
                    <label class="font-head" for="quote-pickup" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Pickup Location <span style="color:var(--white);" aria-hidden="true">*</span></label>
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
                    <label class="font-head" for="quote-dropoff" style="display:block; font-size:0.75rem; font-weight:600; color:var(--champagne); margin-bottom:0.35rem; letter-spacing:0.04em;">Dropoff Location <span style="color:var(--white);" aria-hidden="true">*</span></label>
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
            <div class="mq-row-pax" style="display:grid; grid-template-columns:160px 1fr; gap:1rem;">
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

            {{-- Inline error --}}
            <p x-show="errorMessage" x-text="errorMessage" x-cloak class="font-body"
               style="font-size:0.8125rem; color:#c0392b; background:#fff5f5; border-left:3px solid #c0392b; padding:0.5rem 0.75rem; margin:0;">
            </p>

            {{-- Submit --}}
            <div class="mq-actions" style="display:flex; align-items:center; justify-content:flex-end; gap:0.75rem; flex-wrap:wrap; padding-top:0.25rem;">
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
                    :disabled="submitting"
                    :style="{ opacity: submitting ? '0.65' : '1', cursor: submitting ? 'not-allowed' : 'pointer' }"
                    style="background:var(--champagne); color:var(--navy-dark); font-family:var(--font-head); font-size:0.9375rem; font-weight:700; padding:0.6875rem 1.75rem; border:none; letter-spacing:0.04em; transition:background 0.15s;"
                    onmouseenter="if(!this.disabled) this.style.background='var(--champagne-light)'"
                    onmouseleave="this.style.background='var(--champagne)'"
                >
                    <span x-text="submitting ? 'Sending...' : 'Get My Free Quote'">Get My Free Quote</span>
                </button>
            </div>

        </form>
    </div>

</x-ui.modal>
