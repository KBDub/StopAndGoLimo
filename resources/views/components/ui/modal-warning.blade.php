{{--
 | Component  : x-ui.modal-warning
 | Wraps      : x-ui.modal variant="warning"
 |
 | Convenience shorthand. Passes all props and slots through to x-ui.modal
 | with variant locked to "warning". All other props behave identically.
 |
 | ── VARIANT TOKENS ─────────────────────────────────────────────────────────
 |   Accent stripe : bg-warning (amber)
 |   Header bg     : bg-linen
 |   Header border : border-warning
 |   Panel bg      : bg-white
 |   Body text     : text-charcoal
 |   Icon bg/text  : bg-warning/15 · text-warning
 |   Footer bg     : bg-linen-light
 |   Footer border : border-linen-dark
 |
 | ── FOOTER NOTE ─────────────────────────────────────────────────────────────
 |   The positive action in a warning modal often needs a semantic colour that
 |   differs from gold. Use a raw <button> for the confirm action:
 |   class="px-5 py-2 bg-warning text-charcoal text-sm font-semibold hover:opacity-90 transition-opacity"
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-warning name="my-modal" title="Session Expiring">
 |       <x-slot:icon>
 |           <svg class="w-5 h-5" ...>...</svg>
 |       </x-slot:icon>
 |       <p>Your session is about to expire. Save your progress.</p>
 |       <x-slot:footer>
 |           <x-ui.button-modal-cancel modal="my-modal">Dismiss</x-ui.button-modal-cancel>
 |           <button class="px-5 py-2 bg-warning text-charcoal text-sm font-semibold hover:opacity-90 transition-opacity">
 |               Keep Working
 |           </button>
 |       </x-slot:footer>
 |   </x-ui.modal-warning>
--}}

@props([
    'name'        => null,
    'title'       => null,
    'size'        => 'md',
    'dismissible' => true,
    'scrollBody'  => true,
    'maxHeight'   => '92dvh',
    'maxWidth'    => null,
    'headerClass' => '',
    'bodyClass'   => '',
    'footerClass' => '',
    'panelClass'  => '',
])

@php
    $isSlottedTitle = $title instanceof \Illuminate\View\ComponentSlot;
@endphp

<x-ui.modal
    :name="$name"
    :title="$isSlottedTitle ? null : $title"
    :size="$size"
    variant="warning"
    :dismissible="$dismissible"
    :scrollBody="$scrollBody"
    :maxHeight="$maxHeight"
    :maxWidth="$maxWidth"
    :headerClass="$headerClass"
    :bodyClass="$bodyClass"
    :footerClass="$footerClass"
    :panelClass="$panelClass"
>
    @if($isSlottedTitle)<x-slot:title>{{ $title }}</x-slot:title>@endif
    @isset($header)<x-slot:header>{{ $header }}</x-slot:header>@endisset
    @isset($icon)<x-slot:icon>{{ $icon }}</x-slot:icon>@endisset
    {{ $slot }}
    @isset($footer)<x-slot:footer>{{ $footer }}</x-slot:footer>@endisset
</x-ui.modal>
