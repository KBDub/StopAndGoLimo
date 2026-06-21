{{--
  x-nav.flyout — nested submenu, pure CSS
  Props:
    title   string
    sub     ?string
    dir     string   right (default) | left
  CSS hover chain: .has-flyout:hover > .flyout { opacity:1; visibility:visible; }
--}}
@props(['title' => '', 'sub' => null, 'dir' => 'right', 'href' => '#'])

<div class="has-flyout">
    <a href="{{ $href }}">
        <span class="d-title">{{ $title }}</span>
        @if ($sub)<span class="d-sub">{{ $sub }}</span>@endif
        @if ($dir === 'left')
            <span class="fcaret">&#9664;</span>
        @else
            <span class="fcaret">&#9654;</span>
        @endif
    </a>

    <div class="{{ $dir === 'left' ? 'flyout flyout-left' : 'flyout' }}">
        {{ $slot }}
    </div>
</div>
