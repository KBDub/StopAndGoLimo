{{--
  x-nav.dropdown — pure CSS hover dropdown (no JS)
  Props:
    label   string   trigger text
    panel   string   standard | mega | areas   (default: standard)
    heading ?string  optional eyebrow inside the panel (used by areas)

  CSS hover chain: .nav-item:hover .dropdown { opacity:1; visibility:visible; }
--}}
@props(['label' => '', 'panel' => 'standard', 'heading' => null])

@php
    $panelClass = match ($panel) {
        'mega'  => 'dropdown dropdown-mega',
        'areas' => 'dropdown dropdown-areas',
        default => 'dropdown',
    };
@endphp

<div class="nav-item">
    <a href="#" class="nav-link" aria-haspopup="true">
        {{ $label }}
        <span class="caret">&#9660;</span>
    </a>

    <div class="{{ $panelClass }}">
        @if ($heading)
            <div class="areas-head">{{ $heading }}</div>
        @endif
        {{ $slot }}
    </div>
</div>
