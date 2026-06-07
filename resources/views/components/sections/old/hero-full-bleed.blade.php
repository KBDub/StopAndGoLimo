@props(['heading' => '', 'subheading' => '', 'image' => '', 'imageAlt' => '', 'buttonText' => '', 'buttonHref' => '/booking'])
<section style="position:relative;min-height:480px;display:flex;align-items:center;overflow:hidden;">
    @if($image)<img src="{{ $image }}" alt="{{ $imageAlt }}" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;">@endif
    <div style="position:absolute;inset:0;background:rgba(10,14,35,0.6);"></div>
    <div style="position:relative;z-index:1;max-width:72rem;margin:0 auto;padding:3rem 1.5rem;text-align:center;">
        <h1 class="font-head" style="color:var(--cloud-light);font-size:clamp(2rem,5vw,3.5rem);font-weight:700;margin:0 0 1rem;">{{ $heading }}</h1>
        @if($subheading)<p style="font-family:var(--font-body);color:var(--cloud);font-size:1.125rem;margin:0 0 2rem;">{{ $subheading }}</p>@endif
        @if($buttonText)<a href="{{ $buttonHref }}" style="display:inline-block;background:var(--champagne);color:var(--navy-dark);font-family:var(--font-head);font-weight:700;padding:0.875rem 2.5rem;text-decoration:none;">{{ $buttonText }}</a>@endif
    </div>
</section>
