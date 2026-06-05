{{--
  x-nav.flyout — nested submenu opening to the right, pure CSS
  CSS hover chain: .has-flyout:hover > .flyout { opacity:1; visibility:visible; }
  Props:
    title   string
    sub     ?string
--}}
@props(['title' => '', 'sub' => null])

<div class="has-flyout">
    <a href="#">
        <span class="d-title">{{ $title }}</span>
        @if ($sub)<span class="d-sub">{{ $sub }}</span>@endif
        <span class="fcaret">&#9654;</span>
    </a>

    <div class="flyout">
        {{ $slot }}
    </div>
</div>
