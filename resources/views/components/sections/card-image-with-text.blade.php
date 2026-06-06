@props(['heading' => '', 'body' => '', 'image' => '', 'imageAlt' => ''])
<section style="background:var(--navy);padding:3rem 1.5rem;">
    <div style="max-width:72rem;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center;">
        @if($image)<img src="{{ $image }}" alt="{{ $imageAlt }}" style="width:100%;display:block;">@endif
        <div>
            <h2 class="font-head" style="color:var(--cloud-light);font-size:clamp(1.5rem,3vw,2rem);margin:0 0 1rem;">{{ $heading }}</h2>
            <p style="font-family:var(--font-body);color:var(--cloud);line-height:1.7;margin:0;">{{ $body }}</p>
        </div>
    </div>
</section>
