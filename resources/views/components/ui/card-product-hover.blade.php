@props([
    'title'         => '',
    'price'         => '',
    'originalPrice' => null,
    'badge'         => null,
    'badgeType'     => 'default',
    'swatches'      => [],
    'variantCount'  => null,
    'quickAdd'      => false,
    'href'          => '#',
    'image'         => null,
])

@php
$badgeColors = [
    'best-seller' => 'background:#FFC20E;color:#1a1a1a;',
    'sale'        => 'background:#C62828;color:#fff;',
    'new'         => 'background:#2558A8;color:#fff;',
    'default'     => 'background:#2c2c2c;color:#fff;',
];
$badgeStyle = $badgeColors[$badgeType] ?? $badgeColors['default'];
$shown = array_slice($swatches, 0, 5);
$overflow = count($swatches) - 5;
@endphp

<div style="position:relative;display:flex;flex-direction:column;">
    {{-- Image container --}}
    <a href="{{ $href }}" style="position:relative;overflow:hidden;aspect-ratio:3/4;display:block;background:#2c2c2c;">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" loading="lazy"
                 style="width:100%;height:100%;object-fit:cover;transition:transform 0.4s ease;"
                 onmouseenter="this.style.transform='scale(1.05)'"
                 onmouseleave="this.style.transform='scale(1)'">
        @else
            <div style="width:100%;height:100%;background:#2c2c2c;"></div>
        @endif

        @if($badge)
            <span style="position:absolute;top:0.5rem;left:0.5rem;font-size:0.7rem;font-weight:700;padding:0.2rem 0.5rem;letter-spacing:0.05em;{{ $badgeStyle }}">
                {{ strtoupper($badge) }}
            </span>
        @endif

        @if($quickAdd)
            <div style="position:absolute;bottom:0;left:0;right:0;padding:0.6rem 1rem;background:#FFC20E;color:#1a1a1a;font-weight:700;font-size:0.8rem;text-align:center;transform:translateY(100%);transition:transform 0.25s ease;letter-spacing:0.05em;"
                 onmouseenter="this.style.transform='translateY(0)'"
                 onmouseleave="this.style.transform='translateY(100%)'">
                + Quick add
            </div>
        @endif
    </a>

    {{-- Card body --}}
    <div style="padding:0.6rem 0;display:flex;flex-direction:column;gap:0.3rem;">
        <a href="{{ $href }}" style="font-family:var(--font-head,sans-serif);font-size:0.85rem;font-weight:600;color:#2c2c2c;text-decoration:none;line-height:1.3;">{{ $title }}</a>

        <div style="display:flex;align-items:center;gap:0.5rem;">
            <span style="font-size:0.9rem;font-weight:700;color:#2c2c2c;">{{ $price }}</span>
            @if($originalPrice)
                <span style="font-size:0.8rem;color:#888;text-decoration:line-through;">{{ $originalPrice }}</span>
            @endif
        </div>

        @if(count($shown) > 0)
            <div style="display:flex;align-items:center;gap:0.25rem;margin-top:0.2rem;">
                @foreach($shown as $hex)
                    <span style="width:14px;height:14px;border-radius:50%;background:{{ $hex }};border:1px solid rgba(0,0,0,0.15);display:inline-block;"></span>
                @endforeach
                @if($overflow > 0)
                    <span style="font-size:0.7rem;color:#888;">+{{ $overflow }}</span>
                @endif
                @if($variantCount)
                    <span style="font-size:0.7rem;color:#888;margin-left:0.25rem;">{{ $variantCount }} variants</span>
                @endif
            </div>
        @endif
    </div>
</div>
