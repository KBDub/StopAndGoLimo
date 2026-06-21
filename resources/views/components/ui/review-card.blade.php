@props([
    'name'     => '',
    'review'   => '',
    'stars'    => 5,
    'inverted' => false,
])

@php
$cardBg      = $inverted ? 'background: var(--navy);'      : 'background: var(--white);';
$reviewColor = $inverted ? 'color: var(--white);'          : 'color: var(--navy);';
$nameColor   = $inverted ? 'color: var(--white);'          : 'color: var(--navy);';
$avatarBg    = $inverted ? 'background: var(--champagne);' : 'background: var(--navy);';
$avatarColor = $inverted ? 'color: var(--navy);'           : 'color: var(--champagne);';
$borderColor = $inverted ? 'border-top: 1px solid var(--slate);' : 'border-top: 1px solid var(--cloud);';
@endphp

<div style="{{ $cardBg }} padding: 1.5rem 1.5rem 1.25rem; display: flex; flex-direction: column; height: 100%; min-height: 270px;">

    {{-- Stars --}}
    <div style="margin-bottom: 0.85rem; line-height: 1;">
        @for ($i = 0; $i < (int) $stars; $i++)
            <span style="color: var(--champagne); font-size: 1.15rem;">&#9733;</span>
        @endfor
    </div>

    {{-- Review text — clamp to 4 lines --}}
    <p class="font-body" style="font-size: 0.875rem; {{ $reviewColor }} line-height: 1.65; flex: 1; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; margin: 0 0 1rem;">
        {{ $review }}
    </p>

    {{-- Author row --}}
    <div style="display: flex; align-items: center; gap: 0.75rem; padding-top: 0.85rem; {{ $borderColor }} margin-top: auto;">
        <div style="width: 40px; height: 40px; {{ $avatarBg }} border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <span class="font-head" style="{{ $avatarColor }} font-size: 1rem; font-weight: 700; line-height: 1;">
                {{ strtoupper(mb_substr($name, 0, 1)) }}
            </span>
        </div>
        <span class="font-head" style="{{ $nameColor }} font-size: 0.875rem; font-weight: 700; line-height: 1.3;">{{ $name }}</span>
    </div>

</div>
