<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Full-bleed banners</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Edge-to-edge promotional banners in single-image, 2-image, single-video, and 2-video layouts. All span the full viewport width with no margins or padding.</p>
        </div>
    </div>
</section>

<div class="space-y-16">

    {{-- Single image --}}
    <div>
        <div class="max-w-7xl mx-auto px-6 mb-4">
            <h3 class="text-lg font-semibold text-charcoal">Single image banner</h3>
            <p class="text-sm text-charcoal-light">Full-width image that acts as the entire banner. Optionally wraps in a link.</p>
        </div>
        <x-ui.banner-full-bleed-image
            image="/images/demo/ModCloth3600x1024.webp"
            alt="Custom signage and apparel by Top 5 Percent"
            href="/custom-apparel"
        />
    </div>

    {{-- 2-image --}}
    <div>
        <div class="max-w-7xl mx-auto px-6 mb-4">
            <h3 class="text-lg font-semibold text-charcoal">2-image banner</h3>
            <p class="text-sm text-charcoal-light">Two images side by side, edge-to-edge with text overlay on the left. Configurable split ratio.</p>
        </div>
        <x-ui.banner-full-bleed-2-image
            imageLeft="/images/demo/gymshark1.avif"
            imageRight="/images/demo/gymshark2.avif"
            altLeft="Custom apparel"
            altRight="Custom apparel lifestyle"
            title="For every occasion"
            subtitle="Comfy, quality custom apparel that keeps your brand front and center."
            ctaText="Shop now"
            ctaHref="/custom-apparel"
            height="450px"
        />
    </div>

    {{-- Single video --}}
    <div>
        <div class="max-w-7xl mx-auto px-6 mb-4">
            <h3 class="text-lg font-semibold text-charcoal">Single video banner</h3>
            <p class="text-sm text-charcoal-light">Full-width autoplaying, looped, muted video. Falls back to poster image or placeholder.</p>
        </div>
        <x-ui.banner-full-bleed-video
            video="/images/demo/video-web-banner.8x3.mp4"
            type="video/mp4"
            alt="Custom signage showcase"
            height="400px"
        />

        <div class="max-w-7xl mx-auto px-6 mb-4 mt-10">
            <h3 class="text-lg font-semibold text-charcoal">Single video banner (alternate)</h3>
            <p class="text-sm text-charcoal-light">Second full-width video banner with different content.</p>
        </div>
        <x-ui.banner-full-bleed-video
            video="/images/demo/video-banner.running.8x3.mp4"
            type="video/mp4"
            alt="Custom apparel in action"
            height="400px"
        />
    </div>

    {{-- 2-video --}}
    <div>
        <div class="max-w-7xl mx-auto px-6 mb-4">
            <h3 class="text-lg font-semibold text-charcoal">2-video banner</h3>
            <p class="text-sm text-charcoal-light">Two videos side by side with text overlay on the left video. Same layout as 2-image but with video sources.</p>
        </div>
        <x-ui.banner-full-bleed-2-video
            videoLeft="/images/demo/video-web-banner.8x3.mp4"
            videoRight="/images/demo/video-banner.running.8x3.mp4"
            type="video/mp4"
            altLeft="Custom signage"
            altRight="Custom apparel"
            title="See it in action"
            subtitle="Watch how our custom signage and apparel come to life."
            ctaText="Explore our work"
            ctaHref="/portfolio"
            height="450px"
        />
    </div>

</div>

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="bg-white p-6 shadow-sm border border-linen-dark">

            {{-- Single image --}}
            <div class="mb-8 pb-8 border-b border-linen-dark">
                <h3 class="text-lg font-semibold text-charcoal mb-1">Component: single image</h3>
                <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.banner-full-bleed-image &mdash; resources/views/components/ui/banner-full-bleed-image.blade.php</p>
                <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto"><code>&lt;x-ui.banner-full-bleed-image
    image="/images/demo/ModCloth3600x1024.webp"
    alt="Custom signage and apparel"
    href="/custom-apparel"
/&gt;
{{-- Aspect ratio: full viewport width, height set by image's natural ratio --}}
{{-- href prop optional; renders &lt;div&gt; instead of &lt;a&gt; if omitted --}}</code></pre>
            </div>

            {{-- 2-image --}}
            <div class="mb-8 pb-8 border-b border-linen-dark">
                <h3 class="text-lg font-semibold text-charcoal mb-1">Component: 2-image banner</h3>
                <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.banner-full-bleed-2-image &mdash; resources/views/components/ui/banner-full-bleed-2-image.blade.php</p>
                <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto"><code>&lt;x-ui.banner-full-bleed-2-image
    imageLeft="/images/demo/gymshark1.avif"
    imageRight="/images/demo/gymshark2.avif"
    altLeft="Custom apparel"
    altRight="Custom apparel lifestyle"
    title="For every occasion"
    subtitle="Comfy, quality custom apparel that keeps your brand front and center."
    ctaText="Shop now"
    ctaHref="/custom-apparel"
    height="450px"
    split="1/2"
/&gt;
{{-- Aspect ratio: full viewport width &times; configurable height --}}
{{-- split: "1/2" (default) | "3/5" | "2/3" (left image share) --}}</code></pre>
            </div>

            {{-- Single video --}}
            <div class="mb-8 pb-8 border-b border-linen-dark">
                <h3 class="text-lg font-semibold text-charcoal mb-1">Component: single video banner</h3>
                <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.banner-full-bleed-video &mdash; resources/views/components/ui/banner-full-bleed-video.blade.php</p>
                <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto"><code>&lt;x-ui.banner-full-bleed-video
    video="/images/demo/video-web-banner.8x3.mp4"
    type="video/mp4"
    alt="Custom signage showcase"
    poster="/images/demo/video-poster.jpg"
    height="400px"
/&gt;
{{-- Aspect ratio: full viewport width &times; configurable height --}}
{{-- Autoplay, loop, muted, playsinline by default --}}
{{-- poster prop optional; shown while video loads --}}</code></pre>
            </div>

            {{-- 2-video --}}
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-charcoal mb-1">Component: 2-video banner</h3>
                <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.banner-full-bleed-2-video &mdash; resources/views/components/ui/banner-full-bleed-2-video.blade.php</p>
                <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto"><code>&lt;x-ui.banner-full-bleed-2-video
    videoLeft="/images/demo/video-web-banner.8x3.mp4"
    videoRight="/images/demo/video-banner.running.8x3.mp4"
    type="video/mp4"
    altLeft="Custom signage"
    altRight="Custom apparel"
    title="See it in action"
    subtitle="Watch how our custom signage and apparel come to life."
    ctaText="Explore our work"
    ctaHref="/portfolio"
    height="450px"
/&gt;
{{-- Aspect ratio: full viewport width &times; configurable height --}}
{{-- Same layout as 2-image: split prop controls left video share --}}</code></pre>
            </div>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Shared banner features</h3>
            <div class="grid md:grid-cols-2 gap-6 text-sm text-charcoal-light">
                <div>
                    <h4 class="font-semibold text-charcoal mb-2">Image banners</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Full viewport width, no margins</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Optional link wrapper (single image)</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> 2-image: text overlay with gradient</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Configurable split ratio (1/2, 3/5, 2/3)</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Configurable height, lazy loading</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-charcoal mb-2">Video banners</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Autoplay, loop, muted, playsinline</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Poster image fallback</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> 2-video: same text overlay as 2-image</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Configurable video type (mp4, webm)</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Graceful placeholder for missing video</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
