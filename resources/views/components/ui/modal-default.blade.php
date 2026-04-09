{{--
 | Component  : x-ui.modal-default
 | Wraps      : x-ui.modal variant="default"
 |
 | Convenience shorthand. Passes all props and slots through to x-ui.modal
 | with variant locked to "default". All other props behave identically.
 |
 | ── VARIANT TOKENS ─────────────────────────────────────────────────────────
 |   Accent stripe : bg-gold-gradient-horizontal
 |   Header bg     : bg-linen
 |   Header border : border-sunburst
 |   Panel bg      : bg-white
 |   Body text     : text-charcoal
 |   Icon bg/text  : bg-sunburst/15 · text-sunburst
 |   Footer bg     : bg-linen-light
 |   Footer border : border-linen-dark
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-default name="my-modal" title="Hello" size="md">
 |       <p>Body content.</p>
 |       <x-slot:footer>
 |           <x-ui.button-modal-cancel modal="my-modal">Cancel</x-ui.button-modal-cancel>
 |           <x-ui.button-modal-primary>Confirm</x-ui.button-modal-primary>
 |       </x-slot:footer>
 |   </x-ui.modal-default>
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
    variant="default"
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
