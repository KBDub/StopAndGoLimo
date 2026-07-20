{{--
    x-ui.modal — Twilight Luxe branded modal shell

    Props
      id     string   Unique identifier — modal opens on window event "open-modal-{id}"
      title  string   Header title text. Omit to render no header bar.
      size   string   sm | md | lg | xl  (default: md)

    Slots
      $slot    — body content
      $footer  — optional footer row (right-aligned flex, use x-ui.button-* components)

    Usage
      <x-ui.modal id="confirm" title="Confirm Your Booking" size="sm">
          <p>...</p>
          <x-slot name="footer">
              <x-ui.button-outline-champagne>Cancel</x-ui.button-outline-champagne>
              <x-ui.button-champagne-gradient href="/bookings-reservations">Book Now</x-ui.button-champagne-gradient>
          </x-slot>
      </x-ui.modal>

      Trigger from anywhere:
        onclick="window.dispatchEvent(new CustomEvent('open-modal-confirm'))"
--}}
@props([
    'id'    => 'modal',
    'title' => '',
    'size'  => 'md',
])
@php
    $maxWidths = [
        'sm' => '440px',
        'md' => '600px',
        'lg' => '780px',
        'xl' => '980px',
    ];
    $maxWidth = $maxWidths[$size] ?? '600px';
@endphp

<div
    x-data="{ open: false }"
    x-on:open-modal-{{ $id }}.window="open = true"
    x-on:close-modal-{{ $id }}.window="open = false"
    x-on:keydown.escape.window="open = false"
    x-show="open"
    x-cloak
    style="display:none; position:fixed; inset:0; z-index:var(--z-modal, 500);"
    aria-hidden="true"
    :aria-hidden="(!open).toString()"
>
    {{-- Backdrop --}}
    <div
        x-on:click="open = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        style="position:absolute; inset:0; background:rgba(15,18,35,0.85); backdrop-filter:blur(4px);"
    ></div>

    {{-- Panel --}}
    <div
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        role="dialog"
        aria-modal="true"
        @if($title) aria-labelledby="modal-{{ $id }}-title" @endif
        style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:min(92vw, {{ $maxWidth }}); max-height:90vh; overflow-y:auto; background:var(--navy); border-top:3px solid var(--champagne); display:flex; flex-direction:column;"
    >

        {{-- Header --}}
        @if($title)
        <div style="display:flex; align-items:center; justify-content:space-between; padding:1.25rem 1.5rem; border-bottom:1px solid rgba(220,181,126,0.15); flex-shrink:0;">
            <h3 id="modal-{{ $id }}-title"
                class="font-head"
                style="font-size:1.125rem; font-weight:700; color:var(--cloud-light); margin:0; letter-spacing:0.01em;">
                {{ $title }}
            </h3>
            <button
                x-on:click="open = false"
                aria-label="Close"
                style="background:none; border:none; cursor:pointer; color:var(--slate); padding:0.35rem; line-height:1; transition:color 0.15s; flex-shrink:0;"
                onmouseenter="this.style.color='var(--champagne)'"
                onmouseleave="this.style.color='var(--slate)'"
            >
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                    <line x1="2" y1="2" x2="14" y2="14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    <line x1="14" y1="2" x2="2" y2="14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        @endif

        {{-- Body --}}
        <div style="padding:1.5rem; flex:1;">
            {{ $slot }}
        </div>

        {{-- Footer --}}
        @isset($footer)
        <div style="display:flex; align-items:center; justify-content:flex-end; gap:0.75rem; flex-wrap:wrap; padding:1rem 1.5rem; border-top:1px solid rgba(220,181,126,0.15); flex-shrink:0;">
            {{ $footer }}
        </div>
        @endisset

    </div>
</div>
