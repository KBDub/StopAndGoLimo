{{--
  x-ui.button — Twilight Luxe button system
  --------------------------------------------------------------------
  Renders an <a> when :href is passed, otherwise a <button>.
  Rounded by default (10px); use the radius prop for other shapes.

  Props:
    variant  string  champagne-gradient | champagne-solid | signal | navy-gold |
                     outline-champagne | white-navy | outline-light | text-link |
                     light-navy | light-outline-navy   (default: champagne-gradient)
    size     string  sm | base | lg                    (default: base)
    radius   string  square | soft | rounded | pill    (default: rounded = 10px)
    href     ?string when present renders <a href="...">
    type     string  button type when not a link       (default: button)

  Usage:
    <x-ui.button href="/bookings-reservations">Book a Ride</x-ui.button>
    <x-ui.button variant="signal" size="lg" radius="pill">Reserve 24/7</x-ui.button>
    <x-ui.button variant="outline-champagne" radius="square" type="submit">Get a Quote</x-ui.button>

  Override with !-prefixed Tailwind classes: class="!rounded-lg !px-4"
--}}
@props([
    'variant' => 'champagne-gradient',
    'size'    => 'base',
    'radius'  => 'rounded',
    'href'    => null,
    'type'    => 'button',
])

@php
    $base = 'inline-flex items-center justify-center gap-2 font-head font-semibold '
          . 'tracking-wide leading-none no-underline cursor-pointer border-2 border-transparent '
          . 'transition-all duration-200 ease-out select-none';

    $variants = [
        'champagne-gradient' => 'bg-grad-shine text-navy hover:bg-[linear-gradient(135deg,#C49A5E_0%,#DCB57E_100%)] hover:-translate-y-0.5 hover:shadow-[0_10px_26px_rgba(220,181,126,0.32)]',
        'champagne-solid'    => 'bg-champagne text-navy hover:bg-champagne-dark hover:-translate-y-0.5',
        'signal'             => 'bg-signal text-navy hover:bg-signal-dark hover:-translate-y-0.5 hover:shadow-[0_10px_26px_rgba(254,196,45,0.30)]',
        'navy-gold'          => 'bg-navy-dark text-champagne border-champagne/35 hover:border-champagne hover:text-champagne-light',
        'outline-champagne'  => 'bg-transparent text-champagne border-champagne hover:bg-champagne hover:text-navy',
        'white-navy'         => 'bg-white text-navy hover:bg-cloud hover:-translate-y-0.5',
        'outline-light'      => 'bg-transparent text-white border-white/35 hover:border-white hover:bg-white/10',
        'text-link'          => 'bg-transparent text-champagne !px-1 hover:text-champagne-light hover:gap-3',
        'light-navy'         => 'bg-navy text-white hover:bg-navy-light hover:-translate-y-0.5',
        'light-outline-navy' => 'bg-transparent text-navy border-navy hover:bg-navy hover:text-white',
    ];

    $sizes = [
        'sm'   => 'px-5 py-2.5 text-[13px]',
        'base' => 'px-[30px] py-3.5 text-[15px]',
        'lg'   => 'px-10 py-[18px] text-[17px]',
    ];

    $radii = [
        'square'  => 'rounded-none',
        'soft'    => 'rounded-md',
        'rounded' => 'rounded-[10px]',
        'pill'    => 'rounded-full',
    ];

    $classes = trim($base . ' '
        . ($variants[$variant] ?? $variants['champagne-gradient']) . ' '
        . ($sizes[$size]   ?? $sizes['base']) . ' '
        . ($radii[$radius] ?? $radii['rounded']));
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
