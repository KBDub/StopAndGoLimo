{{--
 | Component  : x-ui.modal-dark
 | Wraps      : x-ui.modal variant="dark"
 |
 | Convenience shorthand. Passes all props and slots through to x-ui.modal
 | with variant locked to "dark". All other props behave identically.
 |
 | ── VARIANT TOKENS ─────────────────────────────────────────────────────────
 |   Accent stripe : bg-gold-gradient-horizontal
 |   Header bg     : bg-charcoal-dark
 |   Header border : border-sunburst
 |   Panel bg      : bg-charcoal
 |   Body text     : text-linen
 |   Icon bg/text  : bg-sunburst/15 · text-sunburst
 |   Footer bg     : bg-charcoal-dark
 |   Footer border : border-white/10
 |
 | ── FOOTER NOTE ─────────────────────────────────────────────────────────────
 |   The dark variant's cancel button cannot use x-ui.button-modal-cancel
 |   (which uses linen/charcoal tones). Use a raw <button> with:
 |   class="px-4 py-2 text-sm font-semibold text-[#aaa] border border-white/20 hover:bg-white/10 transition-colors"
 |   or x-ui.modal-trigger modal="..." as="close" with those classes.
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-dark name="my-modal" title="Dark Modal" size="md">
 |       <p>Body content.</p>
 |       <x-slot:footer>
 |           <x-ui.modal-trigger modal="my-modal" as="close"
 |               class="px-4 py-2 text-sm font-semibold text-[#aaa] border border-white/20 hover:bg-white/10 transition-colors">
 |               Cancel
 |           </x-ui.modal-trigger>
 |           <x-ui.button-modal-primary>Confirm</x-ui.button-modal-primary>
 |       </x-slot:footer>
 |   </x-ui.modal-dark>
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
    variant="dark"
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
