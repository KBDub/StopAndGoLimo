{{--
  x-ui.dropdown — Twilight Luxe branded dropdown
  ---------------------------------------------------------------
  An Alpine.js powered select dropdown. The trigger button shares
  the same variant/size/radius system as x-ui.button. The panel
  always uses sharp corners (branding rule §3.2).

  Props:
    label    string   Placeholder text when nothing is selected
    options  array    [['label' => '...', 'value' => '...'], ...]
    variant  string   champagne-gradient | champagne-solid | navy-gold |
                      outline-champagne | white-navy | outline-light
                      (default: champagne-gradient)
    size     string   sm | base | lg     (default: base)
    radius   string   square | soft | rounded | pill
                      (default: soft — matches button default per brand guide)
    name     string   HTML name attr for the hidden input (optional)
    id       string   HTML id attr (optional)

  Usage:
    <x-ui.dropdown label="Select a service" :options="[
        ['label' => 'Airport Shuttle', 'value' => 'shuttle'],
        ['label' => 'Party Bus',       'value' => 'party-bus'],
    ]" />

    <x-ui.dropdown radius="square" variant="outline-champagne"
        label="Pick a city" :options="$cities" name="city" />
--}}
@props([
    'label'   => 'Select an option',
    'options' => [
        ['label' => 'Airport Shuttle', 'value' => 'shuttle'],
        ['label' => 'Party Bus',       'value' => 'party-bus'],
        ['label' => 'Wedding Limo',    'value' => 'wedding'],
    ],
    'variant' => 'champagne-gradient',
    'size'    => 'base',
    'radius'  => 'soft',
    'name'    => null,
    'id'      => null,
])

@php
    $base = 'inline-flex items-center justify-between gap-3 font-head font-semibold '
          . 'tracking-wide leading-none no-underline cursor-pointer border-2 border-transparent '
          . 'transition-all duration-200 ease-out select-none w-full';

    $variants = [
        'champagne-gradient' => 'bg-grad-shine text-navy hover:bg-[linear-gradient(135deg,#C49A5E_0%,#DCB57E_100%)]',
        'champagne-solid'    => 'bg-champagne text-navy hover:bg-champagne-dark',
        'navy-gold'          => 'bg-navy-dark text-champagne border-champagne/35 hover:border-champagne hover:text-champagne-light',
        'outline-champagne'  => 'bg-transparent text-champagne border-champagne hover:bg-champagne hover:text-navy',
        'white-navy'         => 'bg-white text-navy hover:bg-cloud',
        'outline-light'      => 'bg-transparent text-white border-white/35 hover:border-white hover:bg-white/10',
    ];

    $sizes = [
        'sm'   => 'px-5 py-2.5 text-[13px]',
        'base' => 'px-[30px] py-3.5 text-[15px]',
        'lg'   => 'px-10 py-[18px] text-[17px]',
    ];

    $radii = [
        'square'  => 'rounded-none',
        'soft'    => 'rounded-md',
        'rounded' => 'rounded-[10px]',
        'pill'    => 'rounded-full',
    ];

    $triggerClass = trim($base . ' '
        . ($variants[$variant] ?? $variants['champagne-gradient']) . ' '
        . ($sizes[$size]       ?? $sizes['base']) . ' '
        . ($radii[$radius]     ?? $radii['soft']));
@endphp

<div
    x-data="{ open: false, selected: null, selectedLabel: '' }"
    @click.outside="open = false"
    class="relative inline-block w-full"
    {{ $id ? "id=$id" : '' }}
>
    {{-- Hidden input for form submission --}}
    @if($name)
        <input type="hidden" name="{{ $name }}" :value="selected">
    @endif

    {{-- Trigger button --}}
    <button
        type="button"
        @click="open = !open"
        :aria-expanded="open"
        class="{{ $triggerClass }}"
    >
        <span x-text="selectedLabel || {{ json_encode($label) }}" class="truncate"></span>

        {{-- Caret --}}
        <svg
            class="shrink-0 transition-transform duration-200"
            :class="{ 'rotate-180': open }"
            style="width: 14px; height: 14px; opacity: 0.75;"
            fill="none" stroke="currentColor" viewBox="0 0 24 24"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    {{-- Dropdown panel — always sharp corners per brand rule §3.2 --}}
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute z-50 w-full min-w-[180px] mt-1.5 rounded-none border overflow-hidden"
        style="background: var(--navy-dark); border-color: color-mix(in srgb, var(--champagne) 25%, transparent); box-shadow: 0 8px 24px rgba(0,0,0,0.45);"
    >
        <ul role="listbox" class="py-1">
            @foreach($options as $option)
                <li
                    role="option"
                    @click="selected = {{ json_encode($option['value']) }}; selectedLabel = {{ json_encode($option['label']) }}; open = false"
                    @mouseenter="$el.dataset.hover = '1'"
                    @mouseleave="$el.dataset.hover = '0'"
                    :aria-selected="selected === {{ json_encode($option['value']) }}"
                    class="px-5 py-3 cursor-pointer font-head text-[14px] font-medium transition-colors duration-150"
                    :style="selected === {{ json_encode($option['value']) }}
                        ? 'background: var(--champagne); color: var(--navy);'
                        : ($el.dataset.hover === '1'
                            ? 'background: color-mix(in srgb, var(--champagne) 12%, transparent); color: var(--champagne);'
                            : 'background: transparent; color: var(--cloud-light);')"
                >
                    {{ $option['label'] }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
