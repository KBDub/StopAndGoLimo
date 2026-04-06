{{--
 | ─────────────────────────────────────────────────────────────────────────
 | Component   : x-ui.modal
 | Location    : resources/views/components/ui/modal.blade.php
 | Stack       : Laravel + Alpine.js (Livewire 3 bundles Alpine)
 |
 | A fully generic, slot-driven modal component. Named-instance event
 | system means unlimited modals can coexist on any page without conflict.
 |
 | ── PROPS ────────────────────────────────────────────────────────────────
 |
 |   name         (required) — unique string ID; used for open/close events
 |   title        — heading text shown in the header bar
 |   size         — panel max-width preset: sm | md | lg | xl | full
 |                  sm   → 22rem  (~352px)   — alerts, confirmations
 |                  md   → 34rem  (~544px)   — default forms, messages
 |                  lg   → 46rem  (~736px)   — rich content, galleries
 |                  xl   → 58rem  (~928px)   — wide tables, media
 |                  full → 95vw              — full-screen canvas
 |   variant      — visual theme:
 |                  default   → white body, linen header, gold stripe
 |                  dark      → charcoal body, gold accent border
 |                  gold      → linen body, deep gold header
 |                  success   → white body, green accent stripe
 |                  warning   → white body, gold/amber stripe
 |                  danger    → white body, red accent stripe
 |   dismissible  — bool (default: true) — show ✕ / enable backdrop click
 |   scrollBody   — bool (default: true) — inner body scrolls; header+footer sticky
 |   maxHeight    — CSS max-height override for the panel, e.g. "90dvh"
 |   headerClass  — extra CSS classes on the header div
 |   bodyClass    — extra CSS classes on the body div
 |   footerClass  — extra CSS classes on the footer div
 |
 | ── SLOTS ────────────────────────────────────────────────────────────────
 |
 |   default           — modal body content (required)
 |   title             — overrides the `title` prop with arbitrary HTML
 |   header            — full header override (replaces title, icon, close btn)
 |   icon              — icon shown left of title in the header
 |   footer            — action row below the body (buttons, links, etc.)
 |
 | ── EVENT API (Alpine $dispatch / browser CustomEvent) ───────────────────
 |
 |   open-modal   { name: 'my-modal' }   — opens the named instance
 |   close-modal  { name: 'my-modal' }   — closes the named instance
 |   modal-opened { name: 'my-modal' }   — fired after open animation
 |   modal-closed { name: 'my-modal' }   — fired after close
 |
 | ── BASIC USAGE ──────────────────────────────────────────────────────────
 |
 |   {{-- Trigger (anywhere on the page) --}}
 |   <button @click="$dispatch('open-modal', { name: 'my-modal' })">
 |       Open
 |   </button>
 |
 |   {{-- Or use the convenience component --}}
 |   <x-ui.modal-trigger modal="my-modal">Open</x-ui.modal-trigger>
 |
 |   {{-- Modal definition (anywhere in the DOM) --}}
 |   <x-ui.modal name="my-modal" title="Hello World" size="md">
 |       <p>Your content here.</p>
 |
 |       <x-slot:footer>
 |           <x-ui.modal-trigger modal="my-modal" as="close">Cancel</x-ui.modal-trigger>
 |           <button class="t5-btn-gold">Confirm</button>
 |       </x-slot:footer>
 |   </x-ui.modal>
 |
 | ── LIVEWIRE INTEGRATION ─────────────────────────────────────────────────
 |
 |   Open from a Livewire component:
 |       $this->dispatch('open-modal', name: 'my-modal');
 |
 |   Close from a Livewire component:
 |       $this->dispatch('close-modal', name: 'my-modal');
 |
 |   Listen for close to reset Livewire state:
 |       #[On('modal-closed')]
 |       public function onModalClosed(string $name): void { ... }
 |
 | ─────────────────────────────────────────────────────────────────────────
--}}

@props([
    'name'        => null,       // required — must be unique per page
    'title'       => null,
    'size'        => 'md',       // sm | md | lg | xl | full
    'variant'     => 'default',  // default | dark | gold | success | warning | danger
    'dismissible' => true,
    'scrollBody'  => true,
    'maxHeight'   => '92dvh',
    'headerClass' => '',
    'bodyClass'   => '',
    'footerClass' => '',
])

@php
    // ── Size → max-width map ──────────────────────────────────────────────
    $sizeMap = [
        'sm'   => '22rem',
        'md'   => '34rem',
        'lg'   => '46rem',
        'xl'   => '58rem',
        'full' => '95vw',
    ];
    $panelMaxWidth = $sizeMap[$size] ?? $sizeMap['md'];

    // ── Variant → token map ───────────────────────────────────────────────
    //   stripe     = top accent bar color(s)
    //   headerBg   = header background
    //   headerBdr  = header bottom border color
    //   iconColor  = icon tint
    //   bodyBg     = body + footer background
    $variantMap = [
        'default' => [
            'stripe'    => 'linear-gradient(90deg,#FFC20E 0%,#FFD93D 100%)',
            'headerBg'  => '#F2F0E6',
            'headerBdr' => '#FFC20E',
            'iconColor' => '#FFC20E',
            'bodyBg'    => '#FFFFFF',
        ],
        'dark' => [
            'stripe'    => 'linear-gradient(90deg,#FFC20E 0%,#FFD93D 100%)',
            'headerBg'  => '#1A1A1A',
            'headerBdr' => '#FFC20E',
            'iconColor' => '#FFC20E',
            'bodyBg'    => '#2C2C2C',
        ],
        'gold' => [
            'stripe'    => 'linear-gradient(90deg,#E6A500 0%,#FFC20E 100%)',
            'headerBg'  => 'linear-gradient(135deg,#FFC20E 0%,#E6A500 100%)',
            'headerBdr' => '#E6A500',
            'iconColor' => '#2C2C2C',
            'bodyBg'    => '#FAF9F5',
        ],
        'success' => [
            'stripe'    => '#4CAF50',
            'headerBg'  => '#F2F0E6',
            'headerBdr' => '#4CAF50',
            'iconColor' => '#4CAF50',
            'bodyBg'    => '#FFFFFF',
        ],
        'warning' => [
            'stripe'    => '#F9A825',
            'headerBg'  => '#F2F0E6',
            'headerBdr' => '#F9A825',
            'iconColor' => '#F9A825',
            'bodyBg'    => '#FFFFFF',
        ],
        'danger' => [
            'stripe'    => '#C62828',
            'headerBg'  => '#F2F0E6',
            'headerBdr' => '#C62828',
            'iconColor' => '#C62828',
            'bodyBg'    => '#FFFFFF',
        ],
    ];
    $vt = $variantMap[$variant] ?? $variantMap['default'];

    // ── Derived text colours per variant ─────────────────────────────────
    $isDark        = $variant === 'dark';
    $titleColor    = $isDark ? '#FFFFFF'   : '#2C2C2C';
    $subtleColor   = $isDark ? '#AAAAAA'   : '#555555';
    $closeBtnColor = $isDark ? '#AAAAAA'   : '#555555';
    $closeBtnHover = $isDark ? '#2C2C2C'   : '#E8E5D8';
    $bodyColor     = $isDark ? '#E0E0E0'   : '#2C2C2C';
    $footerBdr     = $isDark ? 'rgba(255,255,255,0.10)' : '#E8E5D8';
    $footerBg      = $isDark ? '#222222'   : '#FAF9F5';

    // ── Slot presence guards ──────────────────────────────────────────────
    $hasHeader  = $slots->has('header');
    $hasTitle   = $slots->has('title') || !empty($title);
    $hasIcon    = $slots->has('icon');
    $hasFooter  = $slots->has('footer');

    // ── Unique Alpine ID (safe even with multiple modals on one page) ─────
    $alpineId = 't5modal_' . preg_replace('/[^a-z0-9_]/i', '_', $name ?? uniqid());
@endphp

{{-- ══════════════════════════════════════════════════════════════════════ --}}
{{-- Scoped styles (emitted once per unique variant) --}}
{{-- ══════════════════════════════════════════════════════════════════════ --}}
@once
<style>
    /* ── Brand tokens (mirrors contact-modal; safe to define multiple times) */
    :root {
        --t5-gold:         #FFC20E;
        --t5-gold-light:   #FFD93D;
        --t5-gold-dark:    #E6A500;
        --t5-azure:        #3273DC;
        --t5-linen:        #F2F0E6;
        --t5-linen-dark:   #E8E5D8;
        --t5-charcoal:     #2C2C2C;
        --t5-charcoal-mid: #555555;
        --t5-white:        #FFFFFF;
        --t5-font:         'Titillium Web', 'Segoe UI', sans-serif;
    }

    [x-cloak] { display: none !important; }

    /* ── Backdrop ───────────────────────────────────────────────────────── */
    .t5-modal-backdrop {
        position:        fixed;
        inset:           0;
        z-index:         9800;
        display:         flex;
        align-items:     center;
        justify-content: center;
        padding:         1rem;
        background:      rgba(26,26,26,0.82);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }

    /* ── Panel ──────────────────────────────────────────────────────────── */
    .t5-modal-panel {
        position:            relative;
        width:               100%;
        display:             flex;
        flex-direction:      column;
        border-radius:       0.625rem;
        box-shadow:          0 28px 70px rgba(0,0,0,0.40),
                             0 10px 28px rgba(0,0,0,0.24);
        overflow:            hidden;
        overscroll-behavior: contain;
    }

    /* ── Stripe ─────────────────────────────────────────────────────────── */
    .t5-modal-stripe {
        height:     0.5rem;
        flex-shrink: 0;
    }

    /* ── Header ─────────────────────────────────────────────────────────── */
    .t5-modal-header {
        display:        flex;
        align-items:    center;
        gap:            0.75rem;
        padding:        1.125rem 1.375rem 1.125rem 1.25rem;
        flex-shrink:    0;
        border-bottom:  2px solid transparent; /* overridden inline */
    }
    .t5-modal-header-icon {
        display:         flex;
        align-items:     center;
        justify-content: center;
        width:           2.25rem;
        height:          2.25rem;
        border-radius:   0.5rem;
        flex-shrink:     0;
        background:      rgba(255,194,14,0.14);
    }
    .t5-modal-title {
        font-family:   var(--t5-font);
        font-size:     1.125rem;
        font-weight:   700;
        line-height:   1.25;
        margin:        0;
        flex:          1;
        min-width:     0;
        overflow:      hidden;
        text-overflow: ellipsis;
        white-space:   nowrap;
    }

    /* ── Close button ───────────────────────────────────────────────────── */
    .t5-modal-close {
        display:         flex;
        align-items:     center;
        justify-content: center;
        width:           2rem;
        height:          2rem;
        border-radius:   9999px;
        border:          none;
        background:      transparent;
        cursor:          pointer;
        flex-shrink:     0;
        transition:      background 0.15s ease, color 0.15s ease;
        padding:         0;
        line-height:     1;
    }

    /* ── Body ───────────────────────────────────────────────────────────── */
    .t5-modal-body {
        padding:            1.375rem 1.375rem 1.125rem;
        font-family:        var(--t5-font);
        font-size:          0.9375rem;
        line-height:        1.6;
        flex:               1;
        overflow-x:         hidden;
        scrollbar-width:    thin;
        scrollbar-color:    #D0CECC transparent;
    }
    .t5-modal-body--scroll {
        overflow-y:     auto;
        overscroll-behavior: contain;
    }
    .t5-modal-body::-webkit-scrollbar       { width: 5px; }
    .t5-modal-body::-webkit-scrollbar-track { background: transparent; }
    .t5-modal-body::-webkit-scrollbar-thumb { background: #D0CECC; border-radius: 9999px; }

    /* ── Footer ─────────────────────────────────────────────────────────── */
    .t5-modal-footer {
        display:      flex;
        align-items:  center;
        justify-content: flex-end;
        gap:          0.625rem;
        padding:      0.875rem 1.375rem;
        flex-shrink:  0;
        flex-wrap:    wrap;
        border-top:   1px solid transparent; /* overridden inline */
    }

    /* ── Alpine transition ──────────────────────────────────────────────── */
    /* backdrop  */
    .t5-bd-enter        { opacity: 0; }
    .t5-bd-enter-active { transition: opacity 0.22s ease; }
    .t5-bd-enter-to     { opacity: 1; }
    .t5-bd-leave        { opacity: 1; }
    .t5-bd-leave-active { transition: opacity 0.18s ease; }
    .t5-bd-leave-to     { opacity: 0; }

    /* panel — we drive via x-transition inline on the element */

    /* ── Convenience button helpers (footer usage) ──────────────────────── */
    .t5-modal-btn {
        display:        inline-flex;
        align-items:    center;
        gap:            0.375rem;
        padding:        0.5625rem 1.125rem;
        border-radius:  0.4375rem;
        font-family:    var(--t5-font);
        font-size:      0.875rem;
        font-weight:    600;
        cursor:         pointer;
        border:         none;
        transition:     transform 0.14s ease, box-shadow 0.14s ease, filter 0.14s ease;
        white-space:    nowrap;
        text-decoration: none;
    }
    .t5-modal-btn:hover { transform: translateY(-1px); filter: brightness(1.05); }
    .t5-modal-btn:active { transform: translateY(0); }

    .t5-modal-btn-gold {
        background:  linear-gradient(135deg, #FFC20E 0%, #FFD93D 100%);
        color:       #2C2C2C;
        box-shadow:  0 2px 10px rgba(255,194,14,0.35);
    }
    .t5-modal-btn-azure {
        background:  #3273DC;
        color:       #FFFFFF;
        box-shadow:  0 2px 10px rgba(50,115,220,0.28);
    }
    .t5-modal-btn-ghost {
        background:  transparent;
        color:       var(--t5-charcoal-mid);
        border:      1.5px solid #D0CECC;
    }
    .t5-modal-btn-ghost:hover { background: var(--t5-linen-dark); }
    .t5-modal-btn-danger {
        background:  #C62828;
        color:       #FFFFFF;
        box-shadow:  0 2px 10px rgba(198,40,40,0.28);
    }
    .t5-modal-btn-ghost-dark {
        background:  transparent;
        color:       #AAAAAA;
        border:      1.5px solid rgba(255,255,255,0.18);
    }
    .t5-modal-btn-ghost-dark:hover { background: rgba(255,255,255,0.07); color: #FFFFFF; }
</style>
@endonce

{{-- ══════════════════════════════════════════════════════════════════════ --}}
{{-- Alpine.js modal instance                                               --}}
{{-- Each modal is fully self-contained; multiple instances can coexist.    --}}
{{-- ══════════════════════════════════════════════════════════════════════ --}}
<div
    x-data="{
        isOpen:     false,
        modalName:  '{{ $name }}',

        open()  {
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
            this.$nextTick(() => {
                /* focus first focusable element inside panel */
                const el = this.$el.querySelector(
                    'button, [href], input, select, textarea, [tabindex]:not([tabindex=\"-1\"])'
                );
                el && el.focus({ preventScroll: true });
                this.$dispatch('modal-opened', { name: this.modalName });
            });
        },

        close() {
            this.isOpen = false;
            document.body.style.overflow = '';
            this.$dispatch('modal-closed', { name: this.modalName });
        },
    }"

    @open-modal.window="if ($event.detail.name === modalName) open()"
    @close-modal.window="if ($event.detail.name === modalName) close()"
    @keydown.escape.window="if (isOpen) close()"
>

    {{-- ── Backdrop ─────────────────────────────────────────────────────── --}}
    <div
        x-show="isOpen"
        x-cloak
        class="t5-modal-backdrop"
        role="dialog"
        aria-modal="true"
        aria-labelledby="{{ $alpineId }}_title"
        x-transition:enter="t5-bd-enter-active"
        x-transition:enter-start="t5-bd-enter"
        x-transition:enter-end="t5-bd-enter-to"
        x-transition:leave="t5-bd-leave-active"
        x-transition:leave-start="t5-bd-leave"
        x-transition:leave-end="t5-bd-leave-to"
        @click.self="{{ $dismissible ? 'close()' : '' }}"
    >

        {{-- ── Panel ───────────────────────────────────────────────────── --}}
        <div
            class="t5-modal-panel"
            style="
                max-width:  {{ $panelMaxWidth }};
                max-height: {{ $maxHeight }};
                background: {{ $vt['bodyBg'] }};
            "
            x-transition:enter="transition ease-out duration-230"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-160"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.stop
        >

            {{-- Gold / variant stripe ──────────────────────────────────── --}}
            <div
                class="t5-modal-stripe"
                style="background: {{ $vt['stripe'] }};"
                aria-hidden="true"
            ></div>

            {{-- ── HEADER ────────────────────────────────────────────── --}}
            @if ($hasHeader)
                {{-- Full header slot override --}}
                {{ $header }}
            @elseif ($hasTitle || $hasIcon)
                <div
                    class="t5-modal-header {{ $headerClass }}"
                    style="
                        background:    {{ $vt['headerBg'] }};
                        border-bottom-color: {{ $vt['headerBdr'] }};
                    "
                >
                    {{-- Icon slot --}}
                    @if ($hasIcon)
                        <div
                            class="t5-modal-header-icon"
                            style="background:rgba({{ $variant === 'success' ? '76,175,80' : ($variant === 'danger' ? '198,40,40' : ($variant === 'warning' ? '249,168,37' : '255,194,14')) }},0.13);"
                            aria-hidden="true"
                        >
                            <span style="color:{{ $vt['iconColor'] }};display:flex;align-items:center;justify-content:center;">
                                {{ $icon }}
                            </span>
                        </div>
                    @endif

                    {{-- Title --}}
                    <h2
                        id="{{ $alpineId }}_title"
                        class="t5-modal-title"
                        style="color:{{ $titleColor }};"
                    >
                        @if ($slots->has('title'))
                            {{ $title }}
                        @else
                            {{ $title }}
                        @endif
                    </h2>

                    {{-- Close button --}}
                    @if ($dismissible)
                        <button
                            type="button"
                            class="t5-modal-close"
                            style="color:{{ $closeBtnColor }};"
                            @click="close()"
                            aria-label="Close modal"
                            x-on:mouseover="$el.style.background='{{ $closeBtnHover }}'"
                            x-on:mouseout="$el.style.background='transparent'"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                                 style="width:1.0625rem;height:1.0625rem;" aria-hidden="true">
                                <path d="M18 6 6 18M6 6l12 12"/>
                            </svg>
                        </button>
                    @endif
                </div>
            @endif

            {{-- ── BODY ─────────────────────────────────────────────── --}}
            <div
                class="t5-modal-body {{ $scrollBody ? 't5-modal-body--scroll' : '' }} {{ $bodyClass }}"
                style="color:{{ $bodyColor }};"
            >
                {{ $slot }}
            </div>

            {{-- ── FOOTER ───────────────────────────────────────────── --}}
            @if ($hasFooter)
                <div
                    class="t5-modal-footer {{ $footerClass }}"
                    style="
                        border-top-color: {{ $footerBdr }};
                        background:       {{ $footerBg }};
                    "
                >
                    {{ $footer }}
                </div>
            @endif

        </div>{{-- /.t5-modal-panel --}}
    </div>{{-- /.t5-modal-backdrop --}}

</div>{{-- /x-data --}}
