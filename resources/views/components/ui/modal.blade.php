{{--
 | Component  : x-ui.modal
 | Location   : resources/views/components/ui/modal.blade.php
 | Stack      : Laravel + Alpine.js (Livewire 3 bundles Alpine)
 |
 | Generic, slot-driven modal. Named-instance event system — unlimited modals
 | can coexist on a page without conflict.
 |
 | ── PROPS ──────────────────────────────────────────────────────────────────
 |   name         required — unique ID used for open/close events
 |   title        heading text in the header bar
 |   size         sm | md | lg | xl | full
 |   variant      default | dark | gold | success | warning | danger
 |   dismissible  bool (default true) — show ✕ / allow backdrop click to close
 |   scrollBody   bool (default true) — inner body scrolls; header+footer sticky
 |   maxHeight    CSS max-height override, e.g. "90dvh"
 |   headerClass  extra Tailwind classes on the header div
 |   bodyClass    extra Tailwind classes on the body div
 |   footerClass  extra Tailwind classes on the footer div
 |
 | ── SLOTS ───────────────────────────────────────────────────────────────────
 |   default      modal body content (required)
 |   title        overrides `title` prop with arbitrary HTML
 |   header       full header replacement (replaces title, icon, close btn)
 |   icon         icon shown left of title in the header
 |   footer       action row below the body (buttons, links, etc.)
 |
 | ── EVENT API ───────────────────────────────────────────────────────────────
 |   open-modal   { name: 'my-modal' }  — opens the named instance
 |   close-modal  { name: 'my-modal' }  — closes the named instance
 |   modal-opened { name: 'my-modal' }  — fired after open animation
 |   modal-closed { name: 'my-modal' }  — fired after close
 |
 | ── BASIC USAGE ─────────────────────────────────────────────────────────────
 |   <x-ui.modal-trigger modal="my-modal">Open</x-ui.modal-trigger>
 |
 |   <x-ui.modal name="my-modal" title="Hello World" size="md">
 |       <p>Body content here.</p>
 |       <x-slot:footer>
 |           <x-ui.modal-trigger modal="my-modal" as="close">Cancel</x-ui.modal-trigger>
 |       </x-slot:footer>
 |   </x-ui.modal>
 |
 | ── LIVEWIRE ────────────────────────────────────────────────────────────────
 |   Open:  $this->dispatch('open-modal', name: 'my-modal');
 |   Close: $this->dispatch('close-modal', name: 'my-modal');
--}}

@props([
    'name'        => null,
    'title'       => null,
    'size'        => 'md',
    'variant'     => 'default',
    'dismissible' => true,
    'scrollBody'  => true,
    'maxHeight'   => '92dvh',
    'headerClass' => '',
    'bodyClass'   => '',
    'footerClass' => '',
])

@php
    // ── Size → max-width ──────────────────────────────────────────────────
    $maxWidth = match($size) {
        'sm'   => '22rem',
        'lg'   => '46rem',
        'xl'   => '58rem',
        'full' => '95vw',
        default => '34rem',
    };

    // ── Variant → inline style values (dynamic, so inline styles are required) ──
    // All hex values match tailwind.config.js tokens.
    $vt = match($variant) {
        'dark' => [
            'stripe'     => 'linear-gradient(90deg,#FFC20E 0%,#FFD93D 100%)',
            'headerBg'   => '#1A1A1A',
            'headerBdr'  => '#FFC20E',
            'bodyBg'     => '#2C2C2C',
            'bodyColor'  => '#E0E0E0',
            'titleColor' => '#FFFFFF',
            'closeColor' => '#999999',
            'closeHover' => '#2C2C2C',
            'iconBg'     => 'rgba(255,194,14,0.14)',
            'iconColor'  => '#FFC20E',
            'footerBg'   => '#222222',
            'footerBdr'  => 'rgba(255,255,255,0.10)',
        ],
        'gold' => [
            'stripe'     => 'linear-gradient(90deg,#E6A500 0%,#FFC20E 100%)',
            'headerBg'   => 'linear-gradient(135deg,#FFC20E 0%,#E6A500 100%)',
            'headerBdr'  => '#E6A500',
            'bodyBg'     => '#FAF9F5',
            'bodyColor'  => '#2C2C2C',
            'titleColor' => '#2C2C2C',
            'closeColor' => '#555555',
            'closeHover' => '#E8E5D8',
            'iconBg'     => 'rgba(255,194,14,0.18)',
            'iconColor'  => '#2C2C2C',
            'footerBg'   => '#F2F0E6',
            'footerBdr'  => '#E8E5D8',
        ],
        'success' => [
            'stripe'     => '#4CAF50',
            'headerBg'   => '#F2F0E6',
            'headerBdr'  => '#4CAF50',
            'bodyBg'     => '#FFFFFF',
            'bodyColor'  => '#2C2C2C',
            'titleColor' => '#2C2C2C',
            'closeColor' => '#555555',
            'closeHover' => '#E8E5D8',
            'iconBg'     => 'rgba(76,175,80,0.13)',
            'iconColor'  => '#4CAF50',
            'footerBg'   => '#FAF9F5',
            'footerBdr'  => '#E8E5D8',
        ],
        'warning' => [
            'stripe'     => '#F9A825',
            'headerBg'   => '#F2F0E6',
            'headerBdr'  => '#F9A825',
            'bodyBg'     => '#FFFFFF',
            'bodyColor'  => '#2C2C2C',
            'titleColor' => '#2C2C2C',
            'closeColor' => '#555555',
            'closeHover' => '#E8E5D8',
            'iconBg'     => 'rgba(249,168,37,0.13)',
            'iconColor'  => '#F9A825',
            'footerBg'   => '#FAF9F5',
            'footerBdr'  => '#E8E5D8',
        ],
        'danger' => [
            'stripe'     => '#C62828',
            'headerBg'   => '#F2F0E6',
            'headerBdr'  => '#C62828',
            'bodyBg'     => '#FFFFFF',
            'bodyColor'  => '#2C2C2C',
            'titleColor' => '#2C2C2C',
            'closeColor' => '#555555',
            'closeHover' => '#E8E5D8',
            'iconBg'     => 'rgba(198,40,40,0.13)',
            'iconColor'  => '#C62828',
            'footerBg'   => '#FAF9F5',
            'footerBdr'  => '#E8E5D8',
        ],
        default => [
            'stripe'     => 'linear-gradient(90deg,#FFC20E 0%,#FFD93D 100%)',
            'headerBg'   => '#F2F0E6',
            'headerBdr'  => '#FFC20E',
            'bodyBg'     => '#FFFFFF',
            'bodyColor'  => '#2C2C2C',
            'titleColor' => '#2C2C2C',
            'closeColor' => '#555555',
            'closeHover' => '#E8E5D8',
            'iconBg'     => 'rgba(255,194,14,0.14)',
            'iconColor'  => '#FFC20E',
            'footerBg'   => '#FAF9F5',
            'footerBdr'  => '#E8E5D8',
        ],
    };

    // ── Slot presence guards ─────────────────────────────────────────────
    // In anonymous Blade components, named slots become injected variables.
    // Non-prop slots (header, icon, footer) are only set when explicitly passed.
    // $title is a prop (default null), so we check !empty() for it.
    $hasHeader = isset($header) && $header instanceof \Illuminate\View\ComponentSlot && !$header->isEmpty();
    $hasTitle  = !empty($title);
    $hasIcon   = isset($icon) && $icon instanceof \Illuminate\View\ComponentSlot && !$icon->isEmpty();
    $hasFooter = isset($footer) && $footer instanceof \Illuminate\View\ComponentSlot && !$footer->isEmpty();

    // ── Safe Alpine ID ────────────────────────────────────────────────────
    $alpineId = 't5modal_' . preg_replace('/[^a-z0-9_]/i', '_', $name ?? uniqid());
@endphp

<div
    x-data="{
        isOpen:    false,
        modalName: '{{ $name }}',

        open() {
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
            this.$nextTick(() => {
                const el = this.$el.querySelector(
                    'button, [href], input, select, textarea, [tabindex]:not([tabindex=-1])'
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
    {{-- Backdrop --}}
    <div
        x-show="isOpen"
        x-cloak
        class="fixed inset-0 z-[9800] flex items-center justify-center p-4 bg-charcoal-dark/80 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="{{ $alpineId }}_title"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.self="{{ $dismissible ? 'close()' : '' }}"
    >
        {{-- Panel --}}
        <div
            class="relative w-full flex flex-col rounded-[0.625rem] shadow-2xl overflow-hidden"
            style="max-width:{{ $maxWidth }};max-height:{{ $maxHeight }};background:{{ $vt['bodyBg'] }};"
            x-transition:enter="transition ease-out duration-220"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.stop
        >
            {{-- Accent stripe --}}
            <div
                class="h-2 flex-shrink-0"
                style="background:{{ $vt['stripe'] }};"
                aria-hidden="true"
            ></div>

            {{-- Header --}}
            @if ($hasHeader)
                {{ $header }}
            @elseif ($hasTitle || $hasIcon)
                <div
                    class="flex items-center gap-3 px-5 py-4 flex-shrink-0 border-b-2 {{ $headerClass }}"
                    style="background:{{ $vt['headerBg'] }};border-bottom-color:{{ $vt['headerBdr'] }};"
                >
                    @if ($hasIcon)
                        <div
                            class="flex items-center justify-center w-9 h-9 rounded-lg flex-shrink-0"
                            style="background:{{ $vt['iconBg'] }};"
                            aria-hidden="true"
                        >
                            <span style="color:{{ $vt['iconColor'] }};display:flex;align-items:center;justify-content:center;">
                                {{ $icon }}
                            </span>
                        </div>
                    @endif

                    <h2
                        id="{{ $alpineId }}_title"
                        class="flex-1 min-w-0 text-lg font-bold leading-tight truncate"
                        style="color:{{ $vt['titleColor'] }};"
                    >
                        {{ $title }}
                    </h2>

                    @if ($dismissible)
                        <button
                            type="button"
                            class="flex items-center justify-center w-8 h-8 rounded-full flex-shrink-0 border-none cursor-pointer transition-colors duration-150"
                            style="color:{{ $vt['closeColor'] }};background:transparent;"
                            @click="close()"
                            aria-label="Close modal"
                            x-on:mouseover="$el.style.background='{{ $vt['closeHover'] }}'"
                            x-on:mouseout="$el.style.background='transparent'"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                                 class="w-[1.0625rem] h-[1.0625rem]" aria-hidden="true">
                                <path d="M18 6 6 18M6 6l12 12"/>
                            </svg>
                        </button>
                    @endif
                </div>
            @endif

            {{-- Body --}}
            <div
                class="flex-1 px-5 py-4 text-[0.9375rem] leading-relaxed overflow-x-hidden {{ $scrollBody ? 'overflow-y-auto overscroll-contain' : '' }} {{ $bodyClass }}"
                style="color:{{ $vt['bodyColor'] }};"
            >
                {{ $slot }}
            </div>

            {{-- Footer --}}
            @if ($hasFooter)
                <div
                    class="flex items-center justify-end gap-2.5 flex-wrap px-5 py-3.5 flex-shrink-0 border-t {{ $footerClass }}"
                    style="background:{{ $vt['footerBg'] }};border-top-color:{{ $vt['footerBdr'] }};"
                >
                    {{ $footer }}
                </div>
            @endif

        </div>{{-- /panel --}}
    </div>{{-- /backdrop --}}
</div>
