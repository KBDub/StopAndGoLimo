{{--
 | ─────────────────────────────────────────────────────────────────────────
 | Component : x-ui.contact-modal
 | Location  : resources/views/components/ui/contact-modal.blade.php
 | Stack     : Laravel + Livewire v3 + Alpine.js (Livewire bundles Alpine)
 | Usage     : <x-ui.contact-modal />   — drop anywhere in your layout
 |
 | Props:
 |   buttonLabel  — FAB button text        (default: "Contact Us Now")
 |   modalTitle   — modal heading          (default: "Get a Free Quote")
 |   modalSubtitle— modal sub-heading HTML (default: brand tagline)
 |   logoSrc      — logo image path        (default: /images/logos/top5-logo.gif)
 |   logoAlt      — logo alt text          (default: "Top 5 Percent")
 | ─────────────────────────────────────────────────────────────────────────
--}}

@props([
    'buttonLabel'   => 'Contact Us Now',
    'modalTitle'    => 'Get a Free Quote',
    'modalSubtitle' => 'Veteran-Owned &nbsp;&middot;&nbsp; Joliet, IL &nbsp;&middot;&nbsp; Fast Turnaround',
    'logoSrc'       => '/images/logos/top5-logo.gif',
    'logoAlt'       => 'Top 5 Percent',
])

{{-- ── Scoped CSS ──────────────────────────────────────────────────────── --}}
@once
<style>
    /* Google Font — ensure Titillium Web is loaded in your layout <head>.
       If not already present, add:
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet"> */

    /* ── Brand tokens ────────────────────────────────────────────────── */
    :root {
        --t5-gold:          #FFC20E;
        --t5-gold-light:    #FFD93D;
        --t5-gold-dark:     #E6A500;
        --t5-azure:         #3273DC;
        --t5-azure-dark:    #2558A8;
        --t5-linen:         #F2F0E6;
        --t5-linen-dark:    #E8E5D8;
        --t5-charcoal:      #2C2C2C;
        --t5-charcoal-mid:  #555555;
        --t5-white:         #FFFFFF;
        --t5-error:         #C62828;
        --t5-success:       #4CAF50;
        --t5-grad-primary:  linear-gradient(135deg, var(--t5-gold) 0%, var(--t5-gold-light) 100%);
        --t5-grad-deep:     linear-gradient(135deg, var(--t5-gold) 0%, var(--t5-gold-dark) 100%);
        --t5-font:          'Titillium Web', 'Segoe UI', sans-serif;
    }

    /* ── [x-cloak] guard ─────────────────────────────────────────────── */
    [x-cloak] { display: none !important; }

    /* ── Floating Action Button ──────────────────────────────────────── */
    .t5-fab {
        position:        fixed;
        bottom:          1.5rem;
        right:           1.5rem;
        z-index:         9990;
        display:         flex;
        align-items:     center;
        gap:             0.5rem;
        padding:         0.75rem 1.375rem;
        border-radius:   9999px;
        background:      var(--t5-grad-primary);
        color:           var(--t5-charcoal);
        font-family:     var(--t5-font);
        font-size:       0.875rem;
        font-weight:     600;
        letter-spacing:  0.03em;
        border:          none;
        cursor:          pointer;
        box-shadow:      0 4px 20px rgba(255, 194, 14, 0.45), 0 2px 8px rgba(0,0,0,0.18);
        transition:      transform 0.18s ease, box-shadow 0.18s ease;
        user-select:     none;
        white-space:     nowrap;
    }
    .t5-fab:hover {
        transform:   translateY(-2px);
        box-shadow:  0 6px 26px rgba(255, 194, 14, 0.6), 0 4px 12px rgba(0,0,0,0.22);
    }
    .t5-fab:active {
        transform:   translateY(0);
    }

    /* Pulsing halo ring */
    .t5-fab-pulse {
        position:         absolute;
        inset:            0;
        border-radius:    9999px;
        background:       var(--t5-gold);
        opacity:          0;
        animation:        t5-pulse 2.4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        pointer-events:   none;
    }
    @keyframes t5-pulse {
        0%   { transform: scale(1);    opacity: 0.50; }
        70%  { transform: scale(1.55); opacity: 0;    }
        100% { transform: scale(1.55); opacity: 0;    }
    }

    /* ── Modal backdrop ──────────────────────────────────────────────── */
    .t5-backdrop {
        position:        fixed;
        inset:           0;
        z-index:         9999;
        display:         flex;
        align-items:     center;
        justify-content: center;
        padding:         1rem;
        background:      rgba(26, 26, 26, 0.82);
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px);
    }

    /* ── Modal panel ─────────────────────────────────────────────────── */
    .t5-panel {
        position:         relative;
        width:            100%;
        max-width:        34rem;      /* ≈ 544px */
        max-height:       92dvh;
        overflow-y:       auto;
        background:       var(--t5-white);
        border-radius:    0.625rem;
        box-shadow:       0 24px 60px rgba(0,0,0,0.38), 0 8px 24px rgba(0,0,0,0.22);
        overscroll-behavior: contain;
        scrollbar-width:  thin;
        scrollbar-color:  var(--t5-linen-dark) transparent;
    }
    .t5-panel::-webkit-scrollbar       { width: 5px; }
    .t5-panel::-webkit-scrollbar-track { background: transparent; }
    .t5-panel::-webkit-scrollbar-thumb { background: var(--t5-linen-dark); border-radius: 9999px; }

    /* Gold accent stripe at top */
    .t5-panel-stripe {
        height:     0.5rem;
        background: var(--t5-grad-primary);
        flex-shrink: 0;
    }

    /* Modal header */
    .t5-modal-header {
        display:         flex;
        align-items:     flex-start;
        justify-content: space-between;
        gap:             1rem;
        padding:         1.25rem 1.5rem 1.125rem;
        background:      var(--t5-linen);
        border-bottom:   2px solid var(--t5-gold);
    }
    .t5-modal-logo {
        height:      2.75rem;
        width:       auto;
        object-fit:  contain;
        flex-shrink: 0;
    }
    .t5-modal-heading {
        font-family:  var(--t5-font);
        font-size:    1.25rem;
        font-weight:  700;
        line-height:  1.25;
        color:        var(--t5-charcoal);
        margin:       0;
    }
    .t5-modal-subheading {
        font-family:  var(--t5-font);
        font-size:    0.8125rem;
        font-weight:  400;
        color:        var(--t5-charcoal-mid);
        margin:       0.2rem 0 0;
    }
    .t5-close-btn {
        display:         flex;
        align-items:     center;
        justify-content: center;
        width:           2rem;
        height:          2rem;
        border-radius:   9999px;
        border:          none;
        background:      transparent;
        color:           var(--t5-charcoal-mid);
        cursor:          pointer;
        flex-shrink:     0;
        transition:      background 0.15s ease, color 0.15s ease;
        margin-top:      -0.125rem;
    }
    .t5-close-btn:hover {
        background: var(--t5-linen-dark);
        color:      var(--t5-charcoal);
    }

    /* Form body padding */
    .t5-modal-body {
        padding: 1.625rem 1.5rem 1.25rem;
    }

    /* Footer micro-text */
    .t5-modal-footer {
        padding:      0 1.5rem 1.125rem;
        text-align:   center;
        font-family:  var(--t5-font);
        font-size:    0.75rem;
        color:        var(--t5-charcoal-mid);
        border-top:   1px solid var(--t5-linen-dark);
        padding-top:  0.875rem;
        margin-top:   0.25rem;
    }
    .t5-modal-footer span {
        color: var(--t5-gold-dark);
        font-weight: 600;
    }

    /* ── Alpine transition helpers ───────────────────────────────────── */
    /* Used via x-transition:* directives on the elements below.         */
</style>
@endonce

{{-- ══════════════════════════════════════════════════════════════════════ --}}
{{-- Alpine.js root scope                                                    --}}
{{-- ══════════════════════════════════════════════════════════════════════ --}}
<div
    x-data="{
        open: false,
        openModal()  { this.open = true;  document.body.style.overflow = 'hidden'; },
        closeModal() { this.open = false; document.body.style.overflow = '';       },
    }"
    @contact-form-submitted.window="
        /* Auto-close after Livewire dispatches success event */
        setTimeout(() => closeModal(), 3200)
    "
    @keydown.escape.window="closeModal()"
>

    {{-- ── ① Floating Action Button ─────────────────────────────────── --}}
    <button
        type="button"
        class="t5-fab"
        aria-label="{{ $buttonLabel }} — open contact form"
        @click="openModal()"
    >
        {{-- Halo pulse --}}
        <span class="t5-fab-pulse" aria-hidden="true"></span>

        {{-- Envelope icon --}}
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2.2"
            stroke-linecap="round"
            stroke-linejoin="round"
            style="width:1rem;height:1rem;flex-shrink:0;position:relative;z-index:1;"
            aria-hidden="true"
        >
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="m2 7 10 7 10-7"/>
        </svg>

        <span style="position:relative;z-index:1;">{{ $buttonLabel }}</span>
    </button>

    {{-- ── ② Modal Overlay ──────────────────────────────────────────── --}}
    <div
        x-show="open"
        x-cloak
        class="t5-backdrop"
        role="dialog"
        aria-modal="true"
        aria-labelledby="t5-modal-title"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-160"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.self="closeModal()"
    >
        {{-- ── Modal Panel ────────────────────────────────────────── --}}
        <div
            class="t5-panel"
            x-transition:enter="transition ease-out duration-240"
            x-transition:enter-start="opacity-0 scale-95 translate-y-5"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-160"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-3"
            @click.stop
        >
            {{-- Gold stripe --}}
            <div class="t5-panel-stripe" aria-hidden="true"></div>

            {{-- Header --}}
            <div class="t5-modal-header">
                <div style="display:flex;align-items:center;gap:0.875rem;">
                    <img
                        src="{{ $logoSrc }}"
                        alt="{{ $logoAlt }}"
                        class="t5-modal-logo"
                        loading="lazy"
                    >
                    <div>
                        <h2 id="t5-modal-title" class="t5-modal-heading">
                            {{ $modalTitle }}
                        </h2>
                        <p class="t5-modal-subheading">{!! $modalSubtitle !!}</p>
                    </div>
                </div>

                <button
                    type="button"
                    class="t5-close-btn"
                    @click="closeModal()"
                    aria-label="Close contact form"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                         style="width:1.125rem;height:1.125rem;" aria-hidden="true">
                        <path d="M18 6 6 18M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Livewire form body --}}
            <div class="t5-modal-body">
                @livewire('ui.contact-form')
            </div>

            {{-- Footer --}}
            <div class="t5-modal-footer">
                <span>🎖️ Veteran-Owned</span>
                &nbsp;&middot;&nbsp; Proudly Serving Joliet, IL &nbsp;&middot;&nbsp; No spam, ever.
            </div>

        </div>{{-- /.t5-panel --}}
    </div>{{-- /.t5-backdrop --}}

</div>{{-- /x-data --}}
