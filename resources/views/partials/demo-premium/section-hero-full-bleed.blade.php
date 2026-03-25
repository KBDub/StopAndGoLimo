<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Full-bleed hero CTA</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">Edge-to-edge hero sections with gradient overlays, responsive text, and dual CTA buttons. Supports center, left, and split layouts.</p>
        </div>
    </div>
</section>

<x-sections.hero-full-bleed
    title="Custom apparel that makes a "
    titleAccent="statement."
    subtitle="Premium screen printing, DTF transfers, and embroidery for teams, businesses, and events. Veteran-owned in Joliet, IL."
    primaryCta="Shop custom apparel"
    primaryHref="/custom-apparel"
    secondaryCta="Design your own"
    secondaryHref="/design-it-yourself"
    layout="center"
/>

<div class="py-8"></div>

<x-sections.hero-full-bleed
    title="Signs that get "
    titleAccent="noticed."
    subtitle="Professional business signs, banners, and displays crafted with precision. From concept to installation."
    primaryCta="Browse signs"
    primaryHref="/signs"
    layout="left"
    minHeight="min-h-[35vh] md:min-h-[50vh]"
    overlay="bg-gradient-to-r from-charcoal-dark/85 via-charcoal-dark/50 to-transparent"
/>

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mt-2 bg-linen p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-charcoal mb-1">Component</h3>
            <p class="text-sm text-charcoal-light font-mono mb-4">x-sections.hero-full-bleed &mdash; resources/views/components/sections/hero-full-bleed.blade.php</p>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Full usage example</h3>
            <pre class="bg-charcoal text-linen text-sm p-4 overflow-x-auto mb-6"><code>&lt;x-sections.hero-full-bleed
    title="Custom apparel that makes a "
    titleAccent="statement."
    subtitle="Premium screen printing, DTF transfers, and embroidery for teams and businesses."
    primaryCta="Shop custom apparel"
    primaryHref="/custom-apparel"
    secondaryCta="Design your own"
    secondaryHref="/design-it-yourself"
    layout="center"
/&gt;

{{-- layout: "center" | "left" | "split" --}}
{{-- image prop optional; falls back to charcoal gradient background --}}
{{-- minHeight default: "min-h-[50vh] md:min-h-[70vh]" --}}
{{-- overlay default: "bg-gradient-to-r from-charcoal-dark/80 via-charcoal-dark/50 to-transparent" --}}
{{-- Aspect ratio: full viewport width, height controlled by minHeight prop --}}</code></pre>

            <h3 class="text-lg font-semibold text-charcoal mb-3">Component features</h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-charcoal-light">
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Full viewport width, edge-to-edge</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Three layouts: center, left, split</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Configurable gradient overlay</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Sunburst accent word in headline</li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Dual CTA buttons (primary + secondary)</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Configurable minimum height</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Background image with object-cover</li>
                    <li class="flex items-start gap-2"><span class="text-sunburst mt-0.5">&#x2713;</span> Charcoal gradient fallback if no image</li>
                </ul>
            </div>
        </div>
    </div>
</section>
