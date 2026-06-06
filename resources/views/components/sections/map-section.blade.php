@props(['mapSrc' => '', 'heading' => ''])
<section style="background:var(--navy);">
    @if($heading)<div style="padding:2rem 1.5rem 0;text-align:center;"><h2 class="font-head" style="color:var(--cloud-light);font-size:clamp(1.25rem,2.5vw,1.75rem);margin:0;">{{ $heading }}</h2></div>@endif
    <div style="height:400px;">
        <iframe src="{{ $mapSrc }}" width="100%" height="100%" style="display:block;border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
