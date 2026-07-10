@props([
    'title'        => '',
    'titleAccent'  => '',
    'subtitle'     => '',
    'primaryCta'   => null,
    'primaryHref'  => '#',
    'secondaryCta' => null,
    'secondaryHref'=> '#',
    'image'        => null,
    'layout'       => 'center',
    'minHeight'    => 'min-h-[50vh] md:min-h-[70vh]',
    'overlay'      => 'bg-gradient-to-r from-charcoal-dark/80 via-charcoal-dark/50 to-transparent',
])

@php
$alignClass = match($layout) {
    'left'  => 'items-start text-left',
    'split' => 'items-start text-left',
    default => 'items-center text-center',
};
$contentWidth = match($layout) {
    'left', 'split' => 'max-w-xl',
    default          => 'max-w-2xl mx-auto',
};
@endphp

<section id="hero-full-bleed" style="position:relative;overflow:hidden;scroll-margin-top:80px;" class="{{ $minHeight }}">

    {{-- Background --}}
    @if($image)
        <img src="{{ $image }}" alt="{{ $title }}"
             style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;">
    @else
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,#1a1a1a 0%,#2c2c2c 100%);"></div>
    @endif

    {{-- Overlay --}}
    <div class="{{ $overlay }}" style="position:absolute;inset:0;"></div>

    {{-- Content --}}
    <div style="position:relative;z-index:1;width:100%;height:100%;display:flex;align-items:center;" class="{{ $minHeight }}">
        <div class="max-w-7xl mx-auto px-6 py-16 w-full flex flex-col {{ $alignClass }} gap-5">
            <div class="{{ $contentWidth }}">
                <h1 style="font-family:var(--font-head,sans-serif);font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#ffffff;line-height:1.15;margin:0;">
                    {{ $title }}<span style="color:#FFC20E;">{{ $titleAccent }}</span>
                </h1>
            </div>

            @if($subtitle)
                <p class="{{ $contentWidth }}" style="font-family:var(--font-body,sans-serif);font-size:1rem;color:rgba(255,255,255,0.85);line-height:1.7;margin:0;">{{ $subtitle }}</p>
            @endif

            @if($primaryCta || $secondaryCta)
                <div style="display:flex;flex-wrap:wrap;gap:0.75rem;{{ $layout === 'center' ? 'justify-content:center;' : '' }}">
                    @if($primaryCta)
                        <a href="{{ $primaryHref }}"
                           style="background:#FFC20E;color:#1a1a1a;font-weight:700;padding:0.7rem 1.75rem;text-decoration:none;font-size:0.9rem;letter-spacing:0.05em;transition:background 0.2s;"
                           onmouseenter="this.style.background='#e6ae00'"
                           onmouseleave="this.style.background='#FFC20E'">
                            {{ $primaryCta }}
                        </a>
                    @endif
                    @if($secondaryCta)
                        <a href="{{ $secondaryHref }}"
                           style="border:2px solid rgba(255,255,255,0.7);color:#ffffff;font-weight:600;padding:0.65rem 1.5rem;text-decoration:none;font-size:0.9rem;letter-spacing:0.05em;transition:border-color 0.2s,color 0.2s;"
                           onmouseenter="this.style.borderColor='#fff';this.style.color='#fff'"
                           onmouseleave="this.style.borderColor='rgba(255,255,255,0.7)';this.style.color='#fff'">
                            {{ $secondaryCta }}
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>

</section>
