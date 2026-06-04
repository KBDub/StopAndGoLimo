{{--
  x-nav.flyout — a nested submenu that opens to the right of a mega item
  (used for Party Bus → Aurora / Naperville). Alpine-driven, hover + focus.

  Props:
    title   string   parent label
    sub     ?string  parent description

  Slot: child <x-nav.item> entries.

  Usage:
    <x-nav.flyout title="Party Bus" sub="Groups & celebrations">
        <x-nav.item href="/party-bus-aurora" title="Party Bus — Aurora" />
        <x-nav.item href="/party-bus-rental-naperville" title="Party Bus — Naperville" />
    </x-nav.flyout>
--}}
@props(['title' => '', 'sub' => null])

<div x-data="{ fly: false }"
     @mouseenter="fly = true" @mouseleave="fly = false"
     class="relative">
    <a href="#" @click.prevent
       class="group flex items-center gap-2 px-[22px] py-[11px] no-underline
              border-l-[3px] border-transparent transition-all duration-150
              hover:bg-navy-dark hover:border-champagne"
       :class="fly && 'bg-navy-dark border-champagne'">
        <span class="flex flex-col gap-0.5">
            <span class="font-head font-semibold text-sm text-cloud group-hover:text-champagne"
                  :class="fly && '!text-champagne'">{{ $title }}</span>
            @if ($sub)<span class="text-xs text-slate">{{ $sub }}</span>@endif
        </span>
        <span class="ml-auto text-[9px] text-slate-light" :class="fly && '!text-champagne'">&#9654;</span>
    </a>

    <div x-show="fly" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-x-2"
         x-transition:enter-end="opacity-100 translate-x-0"
         class="absolute -top-2 left-full z-[60] min-w-[230px] py-2 bg-navy-light
                border border-champagne/20 border-l-[3px] border-l-champagne
                shadow-[0_22px_50px_rgba(0,0,0,0.55)] flex flex-col">
        {{ $slot }}
    </div>
</div>
