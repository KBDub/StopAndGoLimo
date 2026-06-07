@props(['city' => '', 'heading' => '', 'body' => ''])
<section style="background:var(--navy-dark);padding:3rem 1.5rem;">
    <div style="max-width:72rem;margin:0 auto;">
        <h2 class="font-head" style="color:var(--cloud-light);font-size:clamp(1.5rem,3vw,2rem);margin:0 0 1rem;">{{ $heading }}</h2>
        <p style="font-family:var(--font-body);color:var(--cloud);line-height:1.7;margin:0;">{{ $body }}</p>
    </div>
</section>
