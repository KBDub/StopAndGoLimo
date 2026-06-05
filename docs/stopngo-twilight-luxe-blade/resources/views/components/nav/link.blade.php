{{--
  x-nav.link — top-level nav link (no dropdown)
  Props:
    href    string
    active  bool   highlights as current page (default false)

  Usage:  <x-nav.link href="/" :active="request()->is('/')">Welcome</x-nav.link>
--}}
@props(['href' => '#', 'active' => false])

<a href="{{ $href }}"
   @if($active) aria-current="page" @endif
   {{ $attributes->merge(['class' =>
        'font-head font-semibold text-[13.5px] tracking-wide uppercase '
        . 'px-4 py-[22px] inline-flex items-center gap-1.5 no-underline '
        . 'border-b-[3px] transition-colors duration-200 '
        . ($active
            ? 'text-champagne border-champagne'
            : 'text-cloud border-transparent hover:text-champagne hover:border-champagne')
   ]) }}>
    {{ $slot }}
</a>
