{{--
  x-nav.item — a single dropdown entry, pure CSS
  Props:
    href    string
    title   string   bold label
    sub     ?string  small description line
    compact bool     true for the areas grid (tighter padding, bottom-border hover)
--}}
@props(['href' => '#', 'title' => '', 'sub' => null, 'compact' => false])

<a href="{{ $href }}" {{ $attributes }}>
    <span class="d-title">{{ $title }}</span>
    @if ($sub)
        <span class="d-sub">{{ $sub }}</span>
    @endif
</a>
