{{--
 | Component  : x-ui.modal
 | Location   : resources/views/components/ui/modal.blade.php
 | Stack      : Laravel + Alpine.js (Livewire 3 bundles Alpine)
 |
 | Generic, slot-driven modal. Named-instance event system, unlimited modals
 | can coexist on a page without conflict.
 |
 | ── PROPS ──────────────────────────────────────────────────────────────────
 |   name         required, unique ID used for open/close events
 |   title        heading text in the header bar
 |   size         sm | md | lg | xl | full
 |   variant      default | dark | champagne | success | warning | danger
 |   dismissible  bool (default true), show x / allow backdrop click to close
 |   scrollBody   bool (default true), inner body scrolls; header+footer sticky
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
 |   open-modal   { name: 'my-modal' } , opens the named instance
 |   close-modal  { name: 'my-modal' } , closes the named instance
 |   modal-opened { name: 'my-modal' } , fired after open animation
 |   modal-closed { name: 'my-modal' } , fired after close
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
    'maxWidth'    => null,
    'headerClass' => '',
    'bodyClass'   => '',
    'footerClass' => '',
    'panelClass'  => '',
    'zIndex'      => 9800,
    'teleport'    => false,
])

@php
    // ── Size → max-width ──────────────────────────────────────────────────
    $maxWidth = $maxWidth ?? match($size) {
        'sm'   => '22rem',
        'lg'   => '46rem',
        'xl'   => '58rem',
        'full' => '95vw',
        default => '34rem',
    };

    // ── Variant → compiled Tailwind class strings ─────────────────────────
    // All values are literal class strings so Tailwind's scanner compiles them.
    // No inline styles. No raw hex values. Approved brand tokens only.
    $vc = match($variant) {
        'dark' => [
            'stripe'     => 'bg-grad-champagne-rule',
            'headerBg'   => 'bg-navy-dark',
            'headerBdr'  => 'border-champagne',
            'panelBg'    => 'bg-navy',
            'bodyText'   => 'text-cloud',
            'titleText'  => 'text-white',
            'iconBg'     => 'bg-champagne/15',
            'iconText'   => 'text-champagne',
            'closeText'  => 'text-slate-light',
            'closeHover' => 'hover:bg-navy-light',
            'footerBg'   => 'bg-navy-dark',
            'footerBdr'  => 'border-white/10',
        ],
        'champagne' => [
            'stripe'     => 'bg-grad-champagne-shine',
            'headerBg'   => 'bg-grad-champagne-shine',
            'headerBdr'  => 'border-champagne-dark',
            'panelBg'    => 'bg-cloud-light',
            'bodyText'   => 'text-navy',
            'titleText'  => 'text-navy',
            'iconBg'     => 'bg-champagne/20',
            'iconText'   => 'text-navy',
            'closeText'  => 'text-slate',
            'closeHover' => 'hover:bg-cloud-dark',
            'footerBg'   => 'bg-cloud',
            'footerBdr'  => 'border-cloud-dark',
        ],
        'success' => [
            'stripe'     => 'bg-stopngo-success',
            'headerBg'   => 'bg-cloud',
            'headerBdr'  => 'border-stopngo-success',
            'panelBg'    => 'bg-white',
            'bodyText'   => 'text-navy',
            'titleText'  => 'text-navy',
            'iconBg'     => 'bg-stopngo-success/15',
            'iconText'   => 'text-stopngo-success',
            'closeText'  => 'text-slate',
            'closeHover' => 'hover:bg-cloud-dark',
            'footerBg'   => 'bg-cloud-light',
            'footerBdr'  => 'border-cloud-dark',
        ],
        'warning' => [
            'stripe'     => 'bg-stopngo-warning',
            'headerBg'   => 'bg-cloud',
            'headerBdr'  => 'border-stopngo-warning',
            'panelBg'    => 'bg-white',
            'bodyText'   => 'text-navy',
            'titleText'  => 'text-navy',
            'iconBg'     => 'bg-stopngo-warning/15',
            'iconText'   => 'text-stopngo-warning',
            'closeText'  => 'text-slate',
            'closeHover' => 'hover:bg-cloud-dark',
            'footerBg'   => 'bg-cloud-light',
            'footerBdr'  => 'border-cloud-dark',
        ],
        'danger' => [
            'stripe'     => 'bg-stopngo-error',
            'headerBg'   => 'bg-cloud',
            'headerBdr'  => 'border-stopngo-error',
            'panelBg'    => 'bg-white',
            'bodyText'   => 'text-navy',
            'titleText'  => 'text-navy',
            'iconBg'     => 'bg-stopngo-error/15',
            'iconText'   => 'text-stopngo-error',
            'closeText'  => 'text-slate',
            'closeHover' => 'hover:bg-cloud-dark',
            'footerBg'   => 'bg-cloud-light',
            'footerBdr'  => 'border-cloud-dark',
        ],
        default => [
            'stripe'     => 'bg-grad-champagne-rule',
            'headerBg'   => 'bg-cloud',
            'headerBdr'  => 'border-champagne',
            'panelBg'    => 'bg-white',
            'bodyText'   => 'text-navy',
            'titleText'  => 'text-navy',
            'iconBg'     => 'bg-champagne/15',
            'iconText'   => 'text-champagne',
            'closeText'  => 'text-slate',
            'closeHover' => 'hover:bg-cloud-dark',
            'footerBg'   => 'bg-cloud-light',
            'footerBdr'  => 'border-cloud-dark',
        ],
    };

    // ── Slot presence guards ─────────────────────────────────────────────
    $hasHeader = isset($header) && $header instanceof \Illuminate\View\ComponentSlot && !$header->isEmpty();
    $hasTitle  = !empty($title);
    $hasIcon   = isset($icon) && $icon instanceof \Illuminate\View\ComponentSlot && !$icon->isEmpty();
    $hasFooter = isset($footer) && $footer instanceof \Illuminate\View\ComponentSlot && !$footer->isEmpty();

    // ── Safe Alpine ID ────────────────────────────────────────────────────
    $alpineId = 'sgmodal_' . preg_replace('/[^a-z0-9_]/i', '_', $name ?? uniqid());
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
                    'button, [href], input, select, textarea'
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
    {{-- Backdrop (optionally teleported to <body> to escape ancestor stacking contexts) --}}
    @if($teleport)<template x-teleport="body">@endif
    <div
        x-show="isOpen"
        x-cloak
        class="fixed inset-0 flex items-center justify-center p-4 bg-navy-dark/80 backdrop-blur-sm"
        style="z-index: {{ $zIndex }};"
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
            class="relative w-full flex flex-col shadow-2xl overflow-hidden {{ $vc['panelBg'] }} {{ $panelClass }}"
            style="max-width:{{ $maxWidth }};max-height:{{ $maxHeight }};"
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
                class="h-2 flex-shrink-0 {{ $vc['stripe'] }}"
                aria-hidden="true"
            ></div>

            {{-- Header --}}
            @if ($hasHeader)
                {{ $header }}
            @elseif ($hasTitle || $hasIcon)
                <div
                    class="flex items-center gap-3 px-5 py-4 flex-shrink-0 border-b-2 {{ $vc['headerBg'] }} {{ $vc['headerBdr'] }} {{ $headerClass }}"
                >
                    @if ($hasIcon)
                        <div
                            class="flex items-center justify-center w-9 h-9 flex-shrink-0 {{ $vc['iconBg'] }}"
                            aria-hidden="true"
                        >
                            <span class="{{ $vc['iconText'] }} flex items-center justify-center">
                                {{ $icon }}
                            </span>
                        </div>
                    @endif

                    <h2
                        id="{{ $alpineId }}_title"
                        class="flex-1 min-w-0 text-lg font-bold leading-tight truncate font-head {{ $vc['titleText'] }}"
                    >
                        {{ $title }}
                    </h2>

                    @if ($dismissible)
                        <button
                            type="button"
                            class="flex items-center justify-center w-8 h-8 flex-shrink-0 cursor-pointer transition-colors duration-150 bg-transparent {{ $vc['closeText'] }} {{ $vc['closeHover'] }}"
                            @click="close()"
                            aria-label="Close modal"
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
                class="flex-1 px-5 py-4 text-[0.9375rem] leading-relaxed overflow-x-hidden {{ $scrollBody ? 'overflow-y-auto overscroll-contain scrollbar-champagne' : '' }} {{ $vc['bodyText'] }} {{ $bodyClass }}"
            >
                {{ $slot }}
            </div>

            {{-- Footer --}}
            @if ($hasFooter)
                <div
                    class="flex items-center justify-end gap-2.5 flex-wrap px-5 py-3.5 flex-shrink-0 border-t {{ $vc['footerBg'] }} {{ $vc['footerBdr'] }} {{ $footerClass }}"
                >
                    {{ $footer }}
                </div>
            @endif

        </div>{{-- /panel --}}
    </div>{{-- /backdrop --}}
    @if($teleport)</template>@endif
</div>
