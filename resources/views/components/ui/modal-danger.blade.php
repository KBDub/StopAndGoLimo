{{--
 | Component  : x-ui.modal-danger
 | Wraps      : x-ui.modal variant="danger"
 |
 | Convenience shorthand. Passes all props and slots through to x-ui.modal
 | with variant locked to "danger". All other props behave identically.
 |
 | ── VARIANT TOKENS ─────────────────────────────────────────────────────────
 |   Accent stripe : bg-error (red)
 |   Header bg     : bg-linen
 |   Header border : border-error
 |   Panel bg      : bg-white
 |   Body text     : text-charcoal
 |   Icon bg/text  : bg-error/15 · text-error
 |   Footer bg     : bg-linen-light
 |   Footer border : border-linen-dark
 |
 | ── FOOTER NOTE ─────────────────────────────────────────────────────────────
 |   Destructive confirm actions must use a raw <button> with error styling —
 |   never x-ui.button-modal-primary (gold) for a destructive action:
 |   class="px-5 py-2 bg-error text-white text-sm font-semibold hover:opacity-90 transition-opacity"
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-danger name="my-modal" title="Delete This Item?" :dismissible="false">
 |       <x-slot:icon>
 |           <svg class="w-5 h-5" ...>...</svg>
 |       </x-slot:icon>
 |       <p>This action cannot be undone.</p>
 |       <x-slot:footer>
 |           <x-ui.button-modal-cancel modal="my-modal">Cancel</x-ui.button-modal-cancel>
 |           <button class="px-5 py-2 bg-error text-white text-sm font-semibold hover:opacity-90 transition-opacity">
 |               Delete Permanently
 |           </button>
 |       </x-slot:footer>
 |   </x-ui.modal-danger>
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
    variant="danger"
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
