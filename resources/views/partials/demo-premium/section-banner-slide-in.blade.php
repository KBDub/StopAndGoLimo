<section class="py-10 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Slide-in banner</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Full-width 16:7 banner that slides into view when scrolled to. Direction is set per instance — left or right. Same hover treatment as the landing page banner: charcoal overlay with sunburst title centered. Scroll down to trigger the animations.</p>
        </div>

        <div class="space-y-6">

            <div>
                <p class="text-sm text-charcoal-light mb-3 font-semibold">Slides in from the left</p>
                <x-ui.card-banner-slide-in
                    image="/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg"
                    alt="Custom shirts, hoodies, and caps in Joliet"
                    title="Custom Shirts"
                    href="/custom-apparel/custom-shirts"
                    direction="left"
                />
            </div>

            <div>
                <p class="text-sm text-charcoal-light mb-3 font-semibold">Slides in from the right</p>
                <x-ui.card-banner-slide-in
                    image="/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg"
                    alt="DTF transfers printing in Joliet"
                    title="DTF Transfers"
                    href="/custom-apparel/dtf-transfers"
                    direction="right"
                />
            </div>

        </div>

        <div class="mt-10 bg-linen p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> 16:7 landscape banner ratio</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Slides in from left or right via <code>direction</code> prop</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Intersection Observer — fires once on scroll into view</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover: transparent charcoal overlay</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Hover: sunburst title centered over overlay</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Image subtle zoom on hover (scale 1.05)</li>
                </ul>
            </div>
        </div>

    </div>
</section>
