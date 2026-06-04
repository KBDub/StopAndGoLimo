{{--
  x-nav.item — a single dropdown entry
  Props:
    href    string
    title   string   bold label (Poppins)
    sub     ?string  small description line (Montserrat / slate)
    compact bool     true for the areas grid (tighter, bottom-border hover)

  Usage:
    <x-nav.item href="/airport-shuttle-ohare-midway" title="Airport Shuttle" sub="O'Hare & Midway transfers" />
    <x-nav.item href="/joliet" title="Joliet" compact />
--}}
@props(['href' => '#', 'title' => '', 'sub' => null, 'compact' => false])

<a href="{{ $href }}"
   {{ $attributes->merge(['class' =>
        'group flex flex-col gap-0.5 no-underline transition-all duration-150 '
        . ($compact
            ? 'px-4 py-2 border-b-2 border-transparent hover:bg-navy-dark hover:border-champagne'
            : 'px-[22px] py-[11px] border-l-[3px] border-transparent hover:bg-navy-dark hover:border-champagne')
   ]) }}>
    <span class="font-head font-semibold {{ $compact ? 'text-[13px]' : 'text-sm' }}
                 text-cloud group-hover:text-champagne">{{ $title }}</span>
    @if ($sub)
        <span class="text-xs text-slate">{{ $sub }}</span>
    @endif
</a>
