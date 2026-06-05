{{--
  x-nav.dropdown — Twilight Luxe dropdown menu
  --------------------------------------------------------------------
  Accessible hover + click + keyboard (Esc to close, click-outside to
  dismiss). Requires Alpine.js (TALL stack). Panel = navy-light surface,
  3px champagne top rule, left-edge champagne accent on item hover.

  Props:
    label   string   the trigger text
    panel   string   standard | mega | areas        (default: standard)
                       standard -> single column, 260px
                       mega     -> two columns, 520px (with optional flyouts)
                       areas    -> four columns, 560px (city grid)
    heading ?string  optional eyebrow heading inside the panel (areas use it)

  Slot: the menu contents — compose with <x-nav.item> and <x-nav.flyout>.

  Usage:
    <x-nav.dropdown label="About">
        <x-nav.item href="/about-us" title="About Us" sub="Our story & chauffeurs" />
        <x-nav.item href="/rates"    title="Rates" />
    </x-nav.dropdown>
--}}
@props(['label' => '', 'panel' => 'standard', 'heading' => null])

@php
    $panelClass = match ($panel) {
        'mega'  => 'min-w-[520px] grid grid-cols-2',
        'areas' => 'min-w-[560px] grid grid-cols-4 !py-3.5 px-2',
        default => 'min-w-[260px] flex flex-col',
    };
@endphp

<div x-data="{ open: false }"
     @mouseenter="open = true" @mouseleave="open = false"
     @keydown.escape.window="open = false"
     class="relative">

    <button type="button"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-haspopup="true"
            class="font-head font-semibold text-[13.5px] tracking-wide uppercase
                   text-cloud px-4 py-[22px] inline-flex items-center gap-1.5
                   border-b-[3px] border-transparent transition-colors duration-200
                   hover:text-champagne hover:border-champagne"
            :class="open && 'text-champagne border-champagne'">
        {{ $label }}
        <span class="text-[9px] text-slate-light transition-transform duration-200"
              :class="open && 'rotate-180 !text-champagne'">&#9660;</span>
    </button>

    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="absolute top-full left-0 z-50 py-2 bg-navy-light
                border border-champagne/20 border-t-[3px] border-t-champagne
                shadow-[0_22px_50px_rgba(0,0,0,0.55)] {{ $panelClass }}">
        @if ($heading)
            <div class="col-span-full px-4 pt-1.5 pb-3 mb-1.5 font-head font-semibold
                        text-[11px] tracking-[0.16em] uppercase text-champagne
                        border-b border-champagne/20">{{ $heading }}</div>
        @endif
        {{ $slot }}
    </div>
</div>
