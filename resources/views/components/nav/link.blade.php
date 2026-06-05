{{--
  x-nav.link — plain top-level nav link (no dropdown), pure CSS
  Props:
    href    string
    active  bool   marks current page
--}}
@props(['href' => '#', 'active' => false])

<a href="{{ $href }}"
   @if($active) aria-current="page" @endif
   {{ $attributes->merge(['class' => 'nav-link' . ($active ? ' active' : '')]) }}>
    {{ $slot }}
</a>
