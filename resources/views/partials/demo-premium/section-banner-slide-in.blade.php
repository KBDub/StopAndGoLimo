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
                    image="/images/gallery/fleet-hummer-h2-stretch-white-side-trees.jpg"
                    alt="White Hummer H2 stretch limousine"
                    title="Stretch Limousines"
                    href="/services/stretch-limousines"
                    direction="left"
                />
            </div>

            <div>
                <p class="text-sm text-charcoal-light mb-3 font-semibold">Slides in from the right</p>
                <x-ui.card-banner-slide-in
                    image="/images/gallery/fleet-party-bus-chicago-skyline-night.jpg"
                    alt="Party bus on Chicago street at night"
                    title="Party Buses"
                    href="/services/party-buses"
                    direction="right"
                />
            </div>

        </div>

        <div class="mt-10 bg-linen p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-1">Component</h3>
            <p class="text-sm text-charcoal-light font-mono mb-4">x-ui.card-banner-slide-in &mdash; resources/views/components/ui/card-banner-slide-in.blade.php</p>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Full usage example</h3>
            <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto mb-6"><code>&lt;x-ui.card-banner-slide-in
    image="/images/gallery/fleet-hummer-h2-stretch-white-side-trees.jpg"
    alt="White Hummer H2 stretch limousine"
    title="Stretch Limousines"
    href="/services/stretch-limousines"
    direction="left"
/&gt;
{{-- Aspect ratio: 16:7 (full width) --}}
{{-- direction: "left" or "right" --}}</code></pre>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Aspect ratio: 16:7 (full width banner)</li>
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
