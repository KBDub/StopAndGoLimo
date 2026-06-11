{{--
  x-ui.accordion — Twilight Luxe branded accordion
  ---------------------------------------------------------------
  Alpine.js powered accordion. Each item expands/collapses on
  click. By default only one item is open at a time.

  Props:
    items         array    [['title' => '...', 'body' => '...'], ...]
    variant       string   navy | outline-champagne | cloud | outline-cloud
                           (default: navy)
    radius        string   square | soft | rounded | pill
                           (default: soft — matches button/dropdown default)
    allowMultiple boolean  Allow more than one item open at once
                           (default: false)

  Usage:
    <x-ui.accordion :items="[
        ['title' => 'Do you serve O\'Hare?', 'body' => 'Yes, we serve both O\'Hare and Midway 24/7.'],
        ['title' => 'How far in advance?',   'body' => 'We recommend booking at least 24 hours ahead.'],
    ]" />

    <x-ui.accordion
        variant="cloud"
        radius="square"
        :allowMultiple="true"
        :items="$faqItems"
    />
--}}
@props([
    'items' => [
        ['title' => 'Do you serve O\'Hare International Airport?',
         'body'  => 'Yes. We provide 24/7 service to and from both O\'Hare (ORD) and Midway (MDW). Our drivers track your flight so we\'re there when you land.'],
        ['title' => 'How far in advance should I book?',
         'body'  => 'We recommend booking at least 24 hours ahead for guaranteed availability. Same-day bookings are accepted when drivers are available.'],
        ['title' => 'What areas do you serve?',
         'body'  => 'We serve New Lenox, Naperville, Joliet, Aurora, Plainfield, and all of the greater Chicago area. No trip is too far.'],
    ],
    'variant'       => 'navy',
    'radius'        => 'soft',
    'allowMultiple' => false,
])

@php
    $uid = 'acc-' . substr(md5(uniqid()), 0, 8);

    $variants = [
        'navy' => [
            'wrap'        => 'border border-white/10 overflow-hidden',
            'wrapBg'      => 'var(--navy-dark)',
            'headerBg'    => 'var(--navy-light)',
            'headerHover' => 'var(--navy)',
            'headerText'  => 'var(--champagne)',
            'caretColor'  => 'var(--champagne)',
            'bodyBg'      => 'var(--navy-dark)',
            'bodyText'    => 'var(--cloud-light)',
            'divider'     => 'rgba(255,255,255,0.07)',
        ],
        'outline-champagne' => [
            'wrap'        => 'border-2 overflow-hidden',
            'wrapBg'      => 'transparent',
            'wrapBorder'  => 'var(--champagne)',
            'headerBg'    => 'transparent',
            'headerHover' => 'color-mix(in srgb, var(--champagne) 10%, transparent)',
            'headerText'  => 'var(--champagne)',
            'caretColor'  => 'var(--champagne)',
            'bodyBg'      => 'color-mix(in srgb, var(--navy-dark) 80%, transparent)',
            'bodyText'    => 'var(--cloud-light)',
            'divider'     => 'color-mix(in srgb, var(--champagne) 25%, transparent)',
        ],
        'cloud' => [
            'wrap'        => 'border border-cloud-dark overflow-hidden',
            'wrapBg'      => 'var(--cloud)',
            'headerBg'    => 'var(--white)',
            'headerHover' => 'var(--cloud-light)',
            'headerText'  => 'var(--navy)',
            'caretColor'  => 'var(--champagne)',
            'bodyBg'      => 'var(--cloud-light)',
            'bodyText'    => 'var(--slate)',
            'divider'     => 'var(--cloud-dark)',
        ],
        'outline-cloud' => [
            'wrap'        => 'border-2 overflow-hidden',
            'wrapBg'      => 'var(--white)',
            'wrapBorder'  => 'var(--cloud-dark)',
            'headerBg'    => 'var(--white)',
            'headerHover' => 'var(--cloud-light)',
            'headerText'  => 'var(--navy)',
            'caretColor'  => 'var(--champagne)',
            'bodyBg'      => 'var(--cloud-light)',
            'bodyText'    => 'var(--slate)',
            'divider'     => 'var(--cloud-dark)',
        ],
    ];

    $v = $variants[$variant] ?? $variants['navy'];

    $radii = [
        'square'  => 'rounded-none',
        'soft'    => 'rounded-md',
        'rounded' => 'rounded-[10px]',
        'pill'    => 'rounded-[24px]',
    ];

    $wrapRadius = $radii[$radius] ?? $radii['soft'];
@endphp

<style>
.{{ $uid }}-header:hover {
    background: {{ $v['headerHover'] }} !important;
}
</style>

<div
    x-data="{ active: null }"
    class="{{ $wrapRadius }} {{ $v['wrap'] }}"
    style="background: {{ $v['wrapBg'] }}; {{ isset($v['wrapBorder']) ? 'border-color: '.$v['wrapBorder'].';' : '' }}"
>
    @foreach($items as $i => $item)
        <div
            x-data="{ index: {{ $i }} }"
            class="{{ $i > 0 ? 'border-t' : '' }}"
            style="{{ $i > 0 ? 'border-color: '.$v['divider'].';' : '' }}"
        >
            {{-- Header button --}}
            <button
                type="button"
                @click="{{ $allowMultiple ? 'active = (active === '.$i.') ? null : '.$i : 'active = (active === '.$i.') ? null : '.$i }}"
                class="{{ $uid }}-header w-full flex items-center justify-between gap-4 px-6 py-4 font-head font-semibold text-left transition-colors duration-150 cursor-pointer"
                style="background: {{ $v['headerBg'] }}; color: {{ $v['headerText'] }}; font-size: 15px; line-height: 1.3;"
                :aria-expanded="active === {{ $i }}"
            >
                <span>{{ $item['title'] }}</span>

                {{-- Caret --}}
                <svg
                    class="shrink-0 transition-transform duration-200"
                    :class="{ 'rotate-180': active === {{ $i }} }"
                    style="width: 16px; height: 16px; color: {{ $v['caretColor'] }}; opacity: 0.85;"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            {{-- Body --}}
            <div
                x-show="active === {{ $i }}"
                x-cloak
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-1"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-1"
                class="px-6 py-5 font-body"
                style="background: {{ $v['bodyBg'] }}; color: {{ $v['bodyText'] }}; font-size: 16px; line-height: 1.6; border-top: 1px solid {{ $v['divider'] }};"
            >
                {{ $item['body'] }}
            </div>
        </div>
    @endforeach
</div>
