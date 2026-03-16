<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-3 border-l-4 border-sunburst pl-5">Full-bleed banners</h2>
        <p class="text-charcoal-light mb-10 pl-5">Edge-to-edge promotional banners in single-image, 2-image, single-video, and 2-video layouts. All span the full viewport width with no margins or padding.</p>
    </div>
</section>

<div class="space-y-16">
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

<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white rounded-xl p-6 shadow-sm border border-linen-dark">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Banner component features</h3>
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
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Configurable video type (mp4, webm, etc.)</li>
                        <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Graceful placeholder for missing video</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
