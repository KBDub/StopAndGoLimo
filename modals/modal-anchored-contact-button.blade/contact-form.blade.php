{{--
 | ─────────────────────────────────────────────────────────────────────────
 | Livewire View : ui.contact-form
 | Location      : resources/views/livewire/ui/contact-form.blade.php
 | Component     : App\Livewire\Ui\ContactForm
 |
 | Renders two states driven by $submitted:
 |   false → Interactive contact form (full validation via wire:model.live)
 |   true  → Branded success confirmation card
 |
 | Brand tokens are shared via the <style> block in x-ui.contact-modal;
 | all CSS custom properties (--t5-*) are available here as well.
 | ─────────────────────────────────────────────────────────────────────────
--}}

<div>

    {{-- ================================================================ --}}
    {{-- ① SUCCESS STATE                                                    --}}
    {{-- ================================================================ --}}
    @if ($submitted)

        <div
            style="
                display:         flex;
                flex-direction:  column;
                align-items:     center;
                justify-content: center;
                text-align:      center;
                padding:         2rem 1rem 1.5rem;
                gap:             1rem;
            "
        >
            {{-- Gold checkmark badge --}}
            <div style="
                display:         flex;
                align-items:     center;
                justify-content: center;
                width:           4rem;
                height:          4rem;
                border-radius:   9999px;
                background:      linear-gradient(135deg, #FFC20E 0%, #FFD93D 100%);
                box-shadow:      0 4px 18px rgba(255, 194, 14, 0.45);
                flex-shrink:     0;
            " aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="none" stroke="#2C2C2C" stroke-width="2.8"
                     stroke-linecap="round" stroke-linejoin="round"
                     style="width:2rem;height:2rem;">
                    <path d="M20 6 9 17l-5-5"/>
                </svg>
            </div>

            <div>
                <h3 style="
                    font-family: var(--t5-font, 'Titillium Web', sans-serif);
                    font-size:   1.25rem;
                    font-weight: 700;
                    color:       var(--t5-charcoal, #2C2C2C);
                    margin:      0 0 0.375rem;
                ">Message Received!</h3>

                <p style="
                    font-family: var(--t5-font, 'Titillium Web', sans-serif);
                    font-size:   0.9375rem;
                    color:       var(--t5-charcoal-mid, #555);
                    line-height: 1.55;
                    max-width:   26rem;
                    margin:      0 auto;
                ">
                    Thanks for reaching out. Our team will get back to you
                    within <strong style="color:var(--t5-charcoal,#2C2C2C);">1 business day</strong>
                    — usually much sooner.
                </p>
            </div>

            {{-- Azure blue info pill --}}
            <div style="
                display:       inline-flex;
                align-items:   center;
                gap:           0.4rem;
                padding:       0.375rem 0.875rem;
                border-radius: 9999px;
                background:    rgba(50, 115, 220, 0.10);
                border:        1px solid rgba(50, 115, 220, 0.25);
                font-family:   var(--t5-font, 'Titillium Web', sans-serif);
                font-size:     0.8125rem;
                font-weight:   600;
                color:         var(--t5-azure, #3273DC);
            ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     style="width:0.875rem;height:0.875rem;" aria-hidden="true">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 16v-4M12 8h.01"/>
                </svg>
                This modal closes automatically in a few seconds
            </div>

            {{-- Send another link --}}
            <button
                wire:click="resetForm"
                type="button"
                style="
                    background:    none;
                    border:        none;
                    padding:       0;
                    font-family:   var(--t5-font, 'Titillium Web', sans-serif);
                    font-size:     0.8125rem;
                    font-weight:   600;
                    color:         var(--t5-azure, #3273DC);
                    text-decoration: underline;
                    cursor:        pointer;
                    margin-top:    0.25rem;
                "
            >Send another message →</button>

        </div>

    {{-- ================================================================ --}}
    {{-- ② CONTACT FORM                                                     --}}
    {{-- ================================================================ --}}
    @else

    <form wire:submit="submit" novalidate>

        @once
        <style>
            /* ── Shared form field chrome ─────────────────────────────── */
            .t5-field-group {
                display:        flex;
                flex-direction: column;
                gap:            0.3125rem;
            }
            .t5-label {
                font-family:   var(--t5-font, 'Titillium Web', sans-serif);
                font-size:     0.8125rem;
                font-weight:   600;
                color:         var(--t5-charcoal, #2C2C2C);
                letter-spacing: 0.02em;
            }
            .t5-label .t5-required {
                color:       var(--t5-gold-dark, #E6A500);
                margin-left: 0.15em;
            }
            .t5-label .t5-optional {
                font-weight:   400;
                font-size:     0.75rem;
                color:         var(--t5-charcoal-mid, #555);
                margin-left:   0.25em;
            }

            /* Base input / select / textarea */
            .t5-input,
            .t5-select,
            .t5-textarea {
                width:            100%;
                padding:          0.5625rem 0.875rem;
                border:           1.5px solid #D0CECC;
                border-radius:    0.375rem;
                background:       var(--t5-white, #fff);
                color:            var(--t5-charcoal, #2C2C2C);
                font-family:      var(--t5-font, 'Titillium Web', sans-serif);
                font-size:        0.9375rem;
                font-weight:      400;
                line-height:      1.5;
                transition:       border-color 0.16s ease, box-shadow 0.16s ease;
                box-sizing:       border-box;
                appearance:       none;
                -webkit-appearance: none;
            }
            .t5-input::placeholder,
            .t5-textarea::placeholder {
                color:   #ABABAB;
                opacity: 1;
            }
            .t5-input:focus,
            .t5-select:focus,
            .t5-textarea:focus {
                outline:      none;
                border-color: var(--t5-azure, #3273DC);
                box-shadow:   0 0 0 3px rgba(50, 115, 220, 0.15);
            }

            /* Error state */
            .t5-input.t5-error,
            .t5-select.t5-error,
            .t5-textarea.t5-error {
                border-color: var(--t5-error, #C62828);
            }
            .t5-input.t5-error:focus,
            .t5-select.t5-error:focus,
            .t5-textarea.t5-error:focus {
                box-shadow: 0 0 0 3px rgba(198, 40, 40, 0.14);
            }
            .t5-error-msg {
                font-family:  var(--t5-font, 'Titillium Web', sans-serif);
                font-size:    0.75rem;
                font-weight:  400;
                color:        var(--t5-error, #C62828);
                margin-top:   0.125rem;
            }

            /* Select chevron */
            .t5-select-wrap {
                position: relative;
            }
            .t5-select {
                padding-right: 2.25rem;
                cursor:        pointer;
            }
            .t5-select-chevron {
                position:       absolute;
                right:          0.75rem;
                top:            50%;
                transform:      translateY(-50%);
                pointer-events: none;
                color:          var(--t5-charcoal-mid, #555);
            }

            /* Textarea specific */
            .t5-textarea {
                resize:  vertical;
                min-height: 6rem;
            }

            /* Two-column row on ≥ 480px */
            .t5-row-2col {
                display: grid;
                gap:     0.875rem;
            }
            @media (min-width: 480px) {
                .t5-row-2col { grid-template-columns: 1fr 1fr; }
            }

            /* Form grid */
            .t5-form-grid {
                display:        flex;
                flex-direction: column;
                gap:            0.875rem;
            }

            /* ── Submit button ─────────────────────────────────────────── */
            .t5-btn-submit {
                display:         flex;
                align-items:     center;
                justify-content: center;
                gap:             0.5rem;
                width:           100%;
                padding:         0.75rem 1.5rem;
                border-radius:   0.4375rem;
                border:          none;
                background:      linear-gradient(135deg, #FFC20E 0%, #FFD93D 100%);
                color:           var(--t5-charcoal, #2C2C2C);
                font-family:     var(--t5-font, 'Titillium Web', sans-serif);
                font-size:       1rem;
                font-weight:     700;
                letter-spacing:  0.02em;
                cursor:          pointer;
                box-shadow:      0 3px 14px rgba(255, 194, 14, 0.38);
                transition:      transform 0.15s ease, box-shadow 0.15s ease, filter 0.15s ease;
                margin-top:      0.375rem;
            }
            .t5-btn-submit:hover:not(:disabled) {
                transform:  translateY(-1px);
                box-shadow: 0 5px 18px rgba(255, 194, 14, 0.52);
                filter:     brightness(1.04);
            }
            .t5-btn-submit:active:not(:disabled) {
                transform: translateY(0);
            }
            .t5-btn-submit:disabled {
                opacity: 0.65;
                cursor:  not-allowed;
            }

            /* Wire loading spinner */
            .t5-spinner {
                width:            1rem;
                height:           1rem;
                border:           2px solid rgba(44,44,44,0.2);
                border-top-color: var(--t5-charcoal, #2C2C2C);
                border-radius:    50%;
                animation:        t5-spin 0.6s linear infinite;
                flex-shrink:      0;
            }
            @keyframes t5-spin {
                to { transform: rotate(360deg); }
            }

            /* Character counter */
            .t5-char-counter {
                font-family:  var(--t5-font, 'Titillium Web', sans-serif);
                font-size:    0.6875rem;
                color:        var(--t5-charcoal-mid, #555);
                text-align:   right;
                margin-top:   0.125rem;
            }
        </style>
        @endonce

        <div class="t5-form-grid">

            {{-- ── Row 1: Name + Phone ─────────────────────────────── --}}
            <div class="t5-row-2col">

                {{-- Name --}}
                <div class="t5-field-group">
                    <label class="t5-label" for="t5-name">
                        Your Name <span class="t5-required" aria-label="required">*</span>
                    </label>
                    <input
                        id="t5-name"
                        type="text"
                        class="t5-input @error('name') t5-error @enderror"
                        wire:model.live.debounce.400ms="name"
                        placeholder="First &amp; Last Name"
                        autocomplete="name"
                        maxlength="100"
                    >
                    @error('name')
                        <span class="t5-error-msg" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Phone --}}
                <div class="t5-field-group">
                    <label class="t5-label" for="t5-phone">
                        Phone <span class="t5-optional">(optional)</span>
                    </label>
                    <input
                        id="t5-phone"
                        type="tel"
                        class="t5-input @error('phone') t5-error @enderror"
                        wire:model.live.debounce.500ms="phone"
                        placeholder="(815) 555-1234"
                        autocomplete="tel"
                        maxlength="25"
                    >
                    @error('phone')
                        <span class="t5-error-msg" role="alert">{{ $message }}</span>
                    @enderror
                </div>

            </div>{{-- /.t5-row-2col --}}

            {{-- ── Email ───────────────────────────────────────────── --}}
            <div class="t5-field-group">
                <label class="t5-label" for="t5-email">
                    Email Address <span class="t5-required" aria-label="required">*</span>
                </label>
                <input
                    id="t5-email"
                    type="email"
                    class="t5-input @error('email') t5-error @enderror"
                    wire:model.live.debounce.500ms="email"
                    placeholder="you@example.com"
                    autocomplete="email"
                    maxlength="150"
                >
                @error('email')
                    <span class="t5-error-msg" role="alert">{{ $message }}</span>
                @enderror
            </div>

            {{-- ── Service Interest ─────────────────────────────────── --}}
            <div class="t5-field-group">
                <label class="t5-label" for="t5-service">
                    I'm Interested In <span class="t5-required" aria-label="required">*</span>
                </label>
                <div class="t5-select-wrap">
                    <select
                        id="t5-service"
                        class="t5-select @error('service') t5-error @enderror"
                        wire:model.live="service"
                    >
                        <option value="" disabled selected>Select a service…</option>
                        <option value="custom-apparel">Custom Apparel (Shirts, Hoodies, Hats)</option>
                        <option value="business-signs">Business Signs &amp; Banners</option>
                        <option value="vehicle-graphics">Vehicle Graphics &amp; Wraps</option>
                        <option value="decals-stickers">Decals &amp; Stickers</option>
                        <option value="promotional-items">Promotional Items</option>
                        <option value="other">Other / General Inquiry</option>
                    </select>
                    <span class="t5-select-chevron" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                             style="width:0.875rem;height:0.875rem;">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </span>
                </div>
                @error('service')
                    <span class="t5-error-msg" role="alert">{{ $message }}</span>
                @enderror
            </div>

            {{-- ── Project / Message ────────────────────────────────── --}}
            <div class="t5-field-group">
                <label class="t5-label" for="t5-message">
                    Tell Us About Your Project <span class="t5-required" aria-label="required">*</span>
                </label>
                <textarea
                    id="t5-message"
                    class="t5-textarea @error('message') t5-error @enderror"
                    wire:model.live.debounce.400ms="message"
                    placeholder="Quantity, sizes, design ideas, event date, deadline — the more detail, the better!"
                    rows="4"
                    maxlength="2000"
                ></textarea>
                <div class="t5-char-counter">
                    {{ strlen($message) }} / 2000
                </div>
                @error('message')
                    <span class="t5-error-msg" role="alert">{{ $message }}</span>
                @enderror
            </div>

            {{-- ── Submit ───────────────────────────────────────────── --}}
            <div>
                <button
                    type="submit"
                    class="t5-btn-submit"
                    wire:loading.attr="disabled"
                    wire:target="submit"
                >
                    {{-- Loading spinner (shown during submit) --}}
                    <span
                        class="t5-spinner"
                        wire:loading
                        wire:target="submit"
                        aria-hidden="true"
                    ></span>

                    {{-- Send icon (hidden during loading) --}}
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="width:1.0625rem;height:1.0625rem;"
                        wire:loading.remove
                        wire:target="submit"
                        aria-hidden="true"
                    >
                        <path d="M22 2 11 13"/>
                        <path d="M22 2 15 22 11 13 2 9l20-7z"/>
                    </svg>

                    <span wire:loading.remove wire:target="submit">Send My Request</span>
                    <span wire:loading wire:target="submit">Sending…</span>
                </button>

                {{-- Reassurance micro-copy --}}
                <p style="
                    text-align:  center;
                    font-family: var(--t5-font, 'Titillium Web', sans-serif);
                    font-size:   0.75rem;
                    color:       var(--t5-charcoal-mid, #555);
                    margin-top:  0.5rem;
                ">
                    We respond within 1 business day &mdash; no obligation.
                </p>
            </div>

        </div>{{-- /.t5-form-grid --}}

    </form>

    @endif{{-- /$submitted --}}

</div>
