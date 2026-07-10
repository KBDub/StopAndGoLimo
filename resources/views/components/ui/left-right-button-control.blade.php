@props([
    'prevAction' => 'prev()',
    'nextAction' => 'next()',
    'inverted'   => false,
    'marginTop'  => '2.25rem',
])

@php
$btnStyle    = $inverted
    ? 'background: var(--champagne-light); border: 2px solid var(--navy); color: var(--navy);'
    : 'background: transparent; border: 2px solid var(--champagne); color: var(--champagne);';
$btnHoverOn  = $inverted
    ? "this.style.background='var(--navy)'; this.style.borderColor='var(--champagne-light)'; this.style.color='var(--white)';"
    : "this.style.background='var(--champagne)'; this.style.color='var(--navy)';";
$btnHoverOff = $inverted
    ? "this.style.background='var(--champagne-light)'; this.style.borderColor='var(--champagne-light)'; this.style.color='var(--navy)';"
    : "this.style.background='transparent'; this.style.color='var(--champagne)';";
@endphp

<div style="display: flex; justify-content: center; align-items: center; gap: 1.5rem; margin-top: {{ $marginTop }};">

    <button
        x-on:click="{{ $prevAction }}"
        class="font-head"
        style="display: inline-flex; align-items: center; gap: 0.4rem; {{ $btnStyle }} font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; line-height: 1; transition: background 0.22s, color 0.22s;"
        onmouseover="{{ $btnHoverOn }}"
        onmouseout="{{ $btnHoverOff }}"
        aria-label="Previous"
    >&#8592; Prev</button>

    {{ $slot }}

    <button
        x-on:click="{{ $nextAction }}"
        class="font-head"
        style="display: inline-flex; align-items: center; gap: 0.4rem; {{ $btnStyle }} font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; line-height: 1; transition: background 0.22s, color 0.22s;"
        onmouseover="{{ $btnHoverOn }}"
        onmouseout="{{ $btnHoverOff }}"
        aria-label="Next"
    >Next &#8594;</button>

</div>
