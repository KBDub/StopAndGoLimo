<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brand Style Guide - Golden Optimism | Top 5 Percent</title>
    <meta name="description" content="Brand style guide and design system for Top 5 Percent Custom Signage & Apparel.">
    <meta name="theme-color" content="#FFC20E">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp
    @if($cssFile)
    <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
    <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
</head>
<body class="font-sans antialiased bg-linen text-charcoal">
    <x-layout.top-notification-bar message="Deal of the Day: 20% Off Custom T-Shirts!" link="/custom-shirts" linkText="Shop Now" />

    <x-ui.banner-thin-sunburst />
    <x-ui.banner-thin-charcoal />
    <x-layout.navigation-bar currentPage="demo" />
    <x-ui.banner-thin-sunburst />
    <x-ui.banner-thin-charcoal />

    <main>
        <section class="bg-white py-16 shadow-gold">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-charcoal mb-4">Golden Optimism</h1>
                <div class="w-24 h-1 bg-gold-gradient mx-auto mb-6 rounded"></div>
                <p class="text-xl text-charcoal-light">A vibrant, warm brand palette radiating confidence and creativity</p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Color Palette (5 + White)</h2>
                <p class="text-charcoal-light mb-8">Each core color has up to 3 variants: Light, Default, and Dark</p>
                
                <div class="rounded-xl overflow-hidden shadow-lg mb-8">
                    <div class="p-6 bg-linen-light border-b border-linen-dark">
                        <h3 class="text-xl font-bold text-charcoal">Olive</h3>
                        <p class="text-charcoal-light text-sm">Social media hover tags exclusively</p>
                    </div>
                    <div class="p-6 bg-olive">
                        <span class="text-white font-bold block mb-2">Olive</span>
                        <div class="text-white text-sm font-mono space-y-1">
                            <div><span class="opacity-60">HEX</span> #A39822</div>
                            <div><span class="opacity-60">RGB</span> 163, 152, 34</div>
                            <div><span class="opacity-60">HSL</span> 55°, 65%, 39%</div>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg mb-8">
                    <div class="p-6 bg-linen-light border-b border-linen-dark">
                        <h3 class="text-xl font-bold text-charcoal">Sunburst Gold</h3>
                        <p class="text-charcoal-light text-sm">Primary CTAs, brand moments, accents, creative sections</p>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-6 bg-sunburst-light">
                            <span class="text-charcoal font-bold block mb-2">Sunburst Light</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #FFD93D</div>
                                <div><span class="opacity-60">RGB</span> 255, 217, 61</div>
                                <div><span class="opacity-60">HSL</span> 48°, 100%, 62%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-sunburst">
                            <span class="text-charcoal font-bold block mb-2">Sunburst Gold</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #FFC20E</div>
                                <div><span class="opacity-60">RGB</span> 255, 194, 14</div>
                                <div><span class="opacity-60">HSL</span> 45°, 100%, 53%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-sunburst-dark">
                            <span class="text-white font-bold block mb-2">Sunburst Dark</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #E6A500</div>
                                <div><span class="opacity-60">RGB</span> 230, 165, 0</div>
                                <div><span class="opacity-60">HSL</span> 43°, 100%, 45%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg mb-8">
                    <div class="p-6 bg-linen-light border-b border-linen-dark">
                        <h3 class="text-xl font-bold text-charcoal">Azure Blue</h3>
                        <p class="text-charcoal-light text-sm">Navigation, secondary CTAs, links, professional sections, informational badges</p>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-6 bg-azure-light">
                            <span class="text-white font-bold block mb-2">Azure Light</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #5A9AE8</div>
                                <div><span class="opacity-60">RGB</span> 90, 154, 232</div>
                                <div><span class="opacity-60">HSL</span> 213°, 77%, 63%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-azure">
                            <span class="text-white font-bold block mb-2">Azure Blue</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #3273DC</div>
                                <div><span class="opacity-60">RGB</span> 50, 115, 220</div>
                                <div><span class="opacity-60">HSL</span> 217°, 72%, 53%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-azure-dark">
                            <span class="text-white font-bold block mb-2">Azure Dark</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #2558A8</div>
                                <div><span class="opacity-60">RGB</span> 37, 88, 168</div>
                                <div><span class="opacity-60">HSL</span> 217°, 64%, 40%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg mb-8">
                    <div class="p-6 bg-linen-light border-b border-linen-dark">
                        <h3 class="text-xl font-bold text-charcoal">Soft Linen</h3>
                        <p class="text-charcoal-light text-sm">Main backgrounds, breathing room, header/footer backgrounds</p>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-6 bg-linen-light border border-linen-dark">
                            <span class="text-charcoal font-bold block mb-2">Linen Light</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #FAF9F5</div>
                                <div><span class="opacity-60">RGB</span> 250, 249, 245</div>
                                <div><span class="opacity-60">HSL</span> 48°, 33%, 97%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-linen border border-linen-dark">
                            <span class="text-charcoal font-bold block mb-2">Soft Linen</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #F2F0E6</div>
                                <div><span class="opacity-60">RGB</span> 242, 240, 230</div>
                                <div><span class="opacity-60">HSL</span> 50°, 27%, 93%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-linen-dark">
                            <span class="text-charcoal font-bold block mb-2">Linen Dark</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #E8E5D8</div>
                                <div><span class="opacity-60">RGB</span> 232, 229, 216</div>
                                <div><span class="opacity-60">HSL</span> 48°, 28%, 88%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg mb-8">
                    <div class="p-6 bg-linen-light border-b border-linen-dark">
                        <h3 class="text-xl font-bold text-charcoal">Charcoal</h3>
                        <p class="text-charcoal-light text-sm">All body text and headers</p>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-6 bg-charcoal-light">
                            <span class="text-white font-bold block mb-2">Charcoal Light</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #555555</div>
                                <div><span class="opacity-60">RGB</span> 85, 85, 85</div>
                                <div><span class="opacity-60">HSL</span> 0°, 0%, 33%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-charcoal">
                            <span class="text-white font-bold block mb-2">Charcoal</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #2C2C2C</div>
                                <div><span class="opacity-60">RGB</span> 44, 44, 44</div>
                                <div><span class="opacity-60">HSL</span> 0°, 0%, 17%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-charcoal-dark">
                            <span class="text-white font-bold block mb-2">Charcoal Dark</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div><span class="opacity-60">HEX</span> #1A1A1A</div>
                                <div><span class="opacity-60">RGB</span> 26, 26, 26</div>
                                <div><span class="opacity-60">HSL</span> 0°, 0%, 10%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg">
                    <div class="p-6 bg-linen-light border-b border-linen-dark">
                        <h3 class="text-xl font-bold text-charcoal">White</h3>
                        <p class="text-charcoal-light text-sm">Cards, containers, alternating backgrounds</p>
                    </div>
                    <div class="p-6 bg-white border border-linen-dark">
                        <span class="text-charcoal font-bold block mb-2">White</span>
                        <div class="text-charcoal text-sm font-mono space-y-1">
                            <div><span class="opacity-60">HEX</span> #FFFFFF</div>
                            <div><span class="opacity-60">RGB</span> 255, 255, 255</div>
                            <div><span class="opacity-60">HSL</span> 0°, 0%, 100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Semantic Colors (3)</h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1">
                        <div class="h-36 bg-success flex items-center justify-center">
                            <span class="text-white text-xl font-bold">Success</span>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-1">Success</h3>
                            <p class="text-charcoal-light text-sm italic mb-3">Form success states, confirmations</p>
                            <div class="font-mono text-sm">
                                <div class="flex justify-between py-1"><span class="text-charcoal-light">HEX</span><span>#4CAF50</span></div>
                                <div class="flex justify-between py-1"><span class="text-charcoal-light">HSL</span><span>122°, 39%, 49%</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1">
                        <div class="h-36 bg-warning flex items-center justify-center">
                            <span class="text-charcoal text-xl font-bold">Warning</span>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-1">Warning</h3>
                            <p class="text-charcoal-light text-sm italic mb-3">Warning notifications, cautions</p>
                            <div class="font-mono text-sm">
                                <div class="flex justify-between py-1"><span class="text-charcoal-light">HEX</span><span>#F9A825</span></div>
                                <div class="flex justify-between py-1"><span class="text-charcoal-light">HSL</span><span>37°, 95%, 56%</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1">
                        <div class="h-36 bg-error flex items-center justify-center">
                            <span class="text-white text-xl font-bold">Error</span>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-1">Error</h3>
                            <p class="text-charcoal-light text-sm italic mb-3">Form errors, alerts, destructive actions</p>
                            <div class="font-mono text-sm">
                                <div class="flex justify-between py-1"><span class="text-charcoal-light">HEX</span><span>#C62828</span></div>
                                <div class="flex justify-between py-1"><span class="text-charcoal-light">HSL</span><span>0°, 66%, 47%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Color Hierarchy</h2>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-linen rounded-lg">
                        <div class="w-16 h-16 bg-sunburst rounded-lg flex-shrink-0"></div>
                        <div>
                            <h3 class="font-bold text-charcoal">1. Sunburst Gold (#FFC20E)</h3>
                            <p class="text-charcoal-light text-sm">Primary brand color - Hero elements, primary CTAs, brand moments</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-linen rounded-lg">
                        <div class="w-16 h-16 bg-azure rounded-lg flex-shrink-0"></div>
                        <div>
                            <h3 class="font-bold text-charcoal">2. Azure Blue (#3273DC)</h3>
                            <p class="text-charcoal-light text-sm">Secondary brand color - Navigation, secondary CTAs, links, professional sections</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white border border-linen-dark rounded-lg">
                        <div class="w-16 h-16 bg-linen border border-linen-dark rounded-lg flex-shrink-0"></div>
                        <div>
                            <h3 class="font-bold text-charcoal">3. Soft Linen (#F2F0E6)</h3>
                            <p class="text-charcoal-light text-sm">Background color - Main backgrounds, breathing room</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-linen rounded-lg">
                        <div class="w-16 h-16 bg-charcoal rounded-lg flex-shrink-0"></div>
                        <div>
                            <h3 class="font-bold text-charcoal">4. Charcoal (#2C2C2C)</h3>
                            <p class="text-charcoal-light text-sm">Text color - All body text and headers</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-linen rounded-lg">
                        <div class="w-16 h-16 bg-white border border-linen-dark rounded-lg flex-shrink-0"></div>
                        <div>
                            <h3 class="font-bold text-charcoal">5. White (#FFFFFF)</h3>
                            <p class="text-charcoal-light text-sm">Container color - Cards, containers, alternating backgrounds</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-linen rounded-lg">
                        <div class="w-16 h-16 bg-olive rounded-lg flex-shrink-0"></div>
                        <div>
                            <h3 class="font-bold text-charcoal">6. Olive (#A39822)</h3>
                            <p class="text-charcoal-light text-sm">SM (Social Media) background hover color exclusively</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Brand Gradients</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gold-gradient flex items-center justify-center">
                            <span class="text-white text-2xl font-bold drop-shadow-lg">Gold Gradient Light</span>
                        </div>
                        <div class="p-6 bg-gray-50">
                            <h3 class="text-lg font-semibold mb-2">Primary Gradient</h3>
                            <p class="text-charcoal-light text-sm mb-4">Use for CTAs, buttons, and highlight sections</p>
                            <div class="bg-charcoal text-white p-4 rounded font-mono text-sm">
                                background: linear-gradient(135deg, #FFC20E 0%, #FFD93D 100%);
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gold-gradient-dark flex items-center justify-center">
                            <span class="text-white text-2xl font-bold drop-shadow-lg">Gold Gradient Dark</span>
                        </div>
                        <div class="p-6 bg-gray-50">
                            <h3 class="text-lg font-semibold mb-2">Deep Gradient</h3>
                            <p class="text-charcoal-light text-sm mb-4">Use for premium sections and emphasis</p>
                            <div class="bg-charcoal text-white p-4 rounded font-mono text-sm">
                                background: linear-gradient(135deg, #FFC20E 0%, #E6A500 100%);
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-8 bg-warm-gradient rounded-xl border-2 border-sunburst">
                    <h3 class="text-xl font-bold text-charcoal mb-4">Warm Background Gradient</h3>
                    <p class="text-charcoal-light mb-4">Use for content sections and feature highlights. Creates a warm, inviting atmosphere.</p>
                    <div class="bg-charcoal text-white p-4 rounded font-mono text-sm">
                        background: linear-gradient(135deg, #FFF9E6 0%, #F2F0E6 100%);
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Banners</h2>
                <p class="text-charcoal-light mb-8">Separator banners in two weights: <strong>thin</strong> (3px) and <strong>medium</strong> (8px). Use <code class="bg-charcoal text-white px-2 py-0.5 rounded text-sm">x-ui.banner-&lt;weight&gt;-&lt;color&gt;</code> components.</p>

                <div class="space-y-10">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-lg font-semibold mb-4">Thin Banners (3px)</h3>
                        <div class="space-y-6">
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Sunburst Gold &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-thin-sunburst</code></p>
                                <x-ui.banner-thin-sunburst />
                            </div>
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Charcoal &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-thin-charcoal</code></p>
                                <x-ui.banner-thin-charcoal />
                            </div>
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Azure Blue &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-thin-azure</code></p>
                                <x-ui.banner-thin-azure />
                            </div>
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Linen &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-thin-linen</code></p>
                                <x-ui.banner-thin-linen />
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-lg font-semibold mb-4">Navigation Wrap Pattern</h3>
                        <p class="text-sm text-charcoal-light mb-4">Stacked sunburst + charcoal banners above and below the navigation, matching top5pct.com</p>
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-sunburst-light text-charcoal text-center py-2 text-sm font-semibold">Notification Bar</div>
                            <x-ui.banner-thin-sunburst />
                            <x-ui.banner-thin-charcoal />
                            <div class="bg-linen text-charcoal text-center py-4 text-sm font-semibold">Navigation Bar</div>
                            <x-ui.banner-thin-sunburst />
                            <x-ui.banner-thin-charcoal />
                            <div class="bg-white text-charcoal text-center py-6 text-sm text-charcoal-light">Page Content</div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-lg font-semibold mb-4">Medium Banners (8px)</h3>
                        <div class="space-y-6">
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Sunburst Gold &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-medium-sunburst</code></p>
                                <x-ui.banner-medium-sunburst />
                            </div>
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Charcoal &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-medium-charcoal</code></p>
                                <x-ui.banner-medium-charcoal />
                            </div>
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Azure Blue &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-medium-azure</code></p>
                                <x-ui.banner-medium-azure />
                            </div>
                            <div>
                                <p class="text-sm text-charcoal-light mb-2">Linen &mdash; <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">x-ui.banner-medium-linen</code></p>
                                <x-ui.banner-medium-linen />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Typography</h2>
                
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-lg font-semibold mb-6 text-charcoal-light">Font Family: Titillium Web</h3>
                    
                    <div class="space-y-6">
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H1 - 32px / Bold / Line Height 1.2</p>
                            <h1 class="text-h1 font-bold text-charcoal">Main Page Heading</h1>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H2 - 32px / Bold / Line Height 1.3</p>
                            <h2 class="text-h2 font-bold text-charcoal">Section Title</h2>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H3 - 28px / SemiBold / Line Height 1.3</p>
                            <h3 class="text-h3 font-semibold text-charcoal">Subsection Heading</h3>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H4 - 24px / SemiBold / Line Height 1.4</p>
                            <h4 class="text-h4 font-semibold text-charcoal">Card Title</h4>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H5 - 20px / SemiBold / Line Height 1.4</p>
                            <h5 class="text-h5 font-semibold text-charcoal">Minor Heading</h5>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">Body Large - 22px / Regular</p>
                            <p class="text-lg text-charcoal">Premium custom signage and apparel. Veteran-owned business specializing in custom shirts, signs, decals, and vehicle graphics.</p>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">Body - 20px / Regular</p>
                            <p class="text-base text-charcoal">Our team delivers exceptional quality with attention to detail. From custom t-shirts to full vehicle wraps, we bring your vision to life.</p>
                        </div>
                        
                        <div>
                            <p class="text-xs text-charcoal-light mb-2">Caption - 16px / Regular</p>
                            <p class="text-xs text-charcoal-light">Image caption or fine print text styling.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-lg font-semibold mb-6">Links</h3>
                    <div class="space-y-6">
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">Inline Link - Azure Blue, underline on hover</p>
                            <p class="text-base text-charcoal">Visit our <a href="#" class="text-azure hover:text-azure-dark underline decoration-azure/30 hover:decoration-azure transition-colors">custom shirts page</a> to browse our full catalog of apparel options.</p>
                        </div>
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">Underbar Link - Bottom border style (used on top5pct.com)</p>
                            <p class="text-base text-charcoal">Learn more about <a href="#" class="text-azure hover:text-azure-dark border-b-2 border-azure/30 hover:border-azure pb-0.5 transition-all no-underline">vinyl lettering &amp; car wraps</a> and our <a href="#" class="text-azure hover:text-azure-dark border-b-2 border-azure/30 hover:border-azure pb-0.5 transition-all no-underline">vehicle graphics</a> services.</p>
                        </div>
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">Navigation Link - Charcoal default, Sunburst hover</p>
                            <div class="flex gap-6">
                                <a href="#" class="text-charcoal hover:text-sunburst font-semibold text-sm transition-colors no-underline">Custom Apparel</a>
                                <a href="#" class="text-charcoal hover:text-sunburst font-semibold text-sm transition-colors no-underline">Signs</a>
                                <a href="#" class="text-charcoal hover:text-sunburst font-semibold text-sm transition-colors no-underline">Decals</a>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs text-charcoal-light mb-2">Arrow Link - Azure with arrow indicator</p>
                            <a href="#" class="text-azure hover:text-azure-dark font-semibold transition-colors no-underline">View All Products →</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-lg font-semibold mb-6">Font Weights</h3>
                    <div class="grid md:grid-cols-4 gap-6">
                        <div>
                            <p class="font-light text-2xl mb-2 text-charcoal">Light 300</p>
                            <p class="text-xs text-charcoal-light">Decorative use only</p>
                        </div>
                        <div>
                            <p class="font-normal text-2xl mb-2 text-charcoal">Regular 400</p>
                            <p class="text-xs text-charcoal-light">Body text</p>
                        </div>
                        <div>
                            <p class="font-semibold text-2xl mb-2 text-charcoal">SemiBold 600</p>
                            <p class="text-xs text-charcoal-light">Buttons, labels</p>
                        </div>
                        <div>
                            <p class="font-bold text-2xl mb-2 text-charcoal">Bold 700</p>
                            <p class="text-xs text-charcoal-light">Headings</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Button Variations</h2>
                <p class="text-charcoal-light mb-8">All buttons are standalone Blade components using <code class="bg-charcoal text-white px-2 py-0.5 rounded text-sm">x-ui.button-&lt;type&gt;</code>. Each accepts <code class="bg-gray-100 px-1.5 py-0.5 rounded text-xs">href</code> (renders as link) or renders as <code class="bg-gray-100 px-1.5 py-0.5 rounded text-xs">&lt;button&gt;</code> by default.</p>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Primary Buttons</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div class="text-center">
                                <x-ui.button-gold-gradient href="#">Primary CTA</x-ui.button-gold-gradient>
                                <p class="text-xs text-charcoal-light mt-2">button-gold-gradient</p>
                            </div>
                            <div class="text-center">
                                <x-ui.button-gold-charcoal href="#">Solid Gold</x-ui.button-gold-charcoal>
                                <p class="text-xs text-charcoal-light mt-2">button-gold-charcoal</p>
                            </div>
                            <div class="text-center">
                                <x-ui.button-blue-white href="#">Azure Action</x-ui.button-blue-white>
                                <p class="text-xs text-charcoal-light mt-2">button-blue-white</p>
                            </div>
                            <div class="text-center">
                                <x-ui.button-charcoal-gold href="#">Dark CTA</x-ui.button-charcoal-gold>
                                <p class="text-xs text-charcoal-light mt-2">button-charcoal-gold</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Secondary Buttons</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div class="text-center">
                                <x-ui.button-outline-charcoal href="#">Secondary Dark</x-ui.button-outline-charcoal>
                                <p class="text-xs text-charcoal-light mt-2">button-outline-charcoal</p>
                            </div>
                            <div class="text-center">
                                <x-ui.button-outline-gold href="#">Secondary Gold</x-ui.button-outline-gold>
                                <p class="text-xs text-charcoal-light mt-2">button-outline-gold</p>
                            </div>
                            <div class="text-center">
                                <x-ui.button-white-charcoal href="#">White + Charcoal</x-ui.button-white-charcoal>
                                <p class="text-xs text-charcoal-light mt-2">button-white-charcoal</p>
                            </div>
                            <div class="text-center">
                                <x-ui.button-gold-white href="#">Gold + White</x-ui.button-gold-white>
                                <p class="text-xs text-charcoal-light mt-2">button-gold-white</p>
                            </div>
                            <div class="text-center">
                                <x-ui.button-text-link href="#">Text Link</x-ui.button-text-link>
                                <p class="text-xs text-charcoal-light mt-2">button-text-link</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Button Sizes</h3>
                        <p class="text-sm text-charcoal-light mb-4">Override default sizing with Tailwind classes via attributes</p>
                        <div class="flex flex-wrap gap-4 items-center">
                            <x-ui.button-gold-gradient href="#" class="!px-4 !py-2 !text-xs">Small</x-ui.button-gold-gradient>
                            <x-ui.button-gold-gradient href="#">Default</x-ui.button-gold-gradient>
                            <x-ui.button-gold-gradient href="#" class="!px-10 !py-5 !text-lg">Large</x-ui.button-gold-gradient>
                        </div>
                    </div>

                    <div class="bg-charcoal p-8 rounded-xl">
                        <h3 class="text-lg font-semibold mb-4 text-white">On Dark Background</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <x-ui.button-gold-gradient href="#">Primary CTA</x-ui.button-gold-gradient>
                            <x-ui.button-outline-charcoal href="#" class="!border-white !text-white hover:!bg-white hover:!text-charcoal">Secondary</x-ui.button-outline-charcoal>
                            <x-ui.button-text-link href="#" class="!text-sunburst hover:!text-white">Link</x-ui.button-text-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Visual Combinations</h2>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="py-5 px-6 bg-azure">
                            <span class="text-white font-semibold text-lg">Professional Header</span>
                        </div>
                        <div class="p-6 bg-white">
                            <h3 class="font-bold text-charcoal mb-2">Blue + White Foundation</h3>
                            <p class="text-charcoal-light">Clean, trustworthy, and professional. Perfect for navigation bars, dashboards, and corporate sections.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="py-5 px-6 bg-sunburst">
                            <span class="text-charcoal font-semibold text-lg">Energetic Header</span>
                        </div>
                        <div class="p-6 bg-white">
                            <h3 class="font-bold text-charcoal mb-2">Gold + White Foundation</h3>
                            <p class="text-charcoal-light">Bold, optimistic, and creative. Ideal for hero sections, promotions, and brand-forward content.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="py-5 px-6 bg-gradient-to-r from-azure to-sunburst">
                            <span class="text-white font-semibold text-lg drop-shadow">Dynamic Gradient</span>
                        </div>
                        <div class="p-6 bg-white">
                            <h3 class="font-bold text-charcoal mb-2">Blue-to-Gold Gradient</h3>
                            <p class="text-charcoal-light">Modern and eye-catching. Use sparingly for special features, hero backgrounds, or accent elements.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="py-5 px-6 bg-linen border-b border-linen-dark">
                            <span class="text-azure font-semibold text-lg">Subtle Elegance</span>
                        </div>
                        <div class="p-6 bg-white">
                            <h3 class="font-bold text-charcoal mb-2">Blue on Linen</h3>
                            <p class="text-charcoal-light">Sophisticated and readable. Excellent for text links, secondary headers, and informational content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Form Elements</h2>
                
                <div class="bg-linen p-8 rounded-xl">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2 text-charcoal">Text Input</label>
                                <input type="text" placeholder="Enter your name" class="w-full h-12 px-4 bg-white border border-gray-300 rounded-lg focus:border-sunburst focus:ring-2 focus:ring-sunburst/20 outline-none transition-colors">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold mb-2 text-charcoal">Select Menu</label>
                                <select class="w-full h-12 px-4 bg-white border border-gray-300 rounded-lg focus:border-sunburst focus:ring-2 focus:ring-sunburst/20 outline-none transition-colors">
                                    <option>Select an option</option>
                                    <option>Custom Apparel</option>
                                    <option>Business Signs</option>
                                    <option>Vehicle Graphics</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2 text-charcoal">Textarea</label>
                                <textarea placeholder="Describe your project..." rows="4" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:border-sunburst focus:ring-2 focus:ring-sunburst/20 outline-none transition-colors resize-none"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Card Components</h2>
                <p class="text-charcoal-light mb-8">All cards are standalone Blade components using <code class="bg-charcoal text-white px-2 py-0.5 rounded text-sm">x-ui.card-&lt;type&gt;</code>. No icons allowed per branding rules.</p>

                <h3 class="text-lg font-semibold mb-4 text-charcoal">Standard Cards</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-product</code></p>
                        <x-ui.card-product title="Custom T-Shirt" description="Custom printed t-shirt with vinyl graphics." price="$24.99" />
                    </div>
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-service</code></p>
                        <x-ui.card-service title="Custom Signage" description="Professional signage solutions for your business." />
                    </div>
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-testimonial</code></p>
                        <x-ui.card-testimonial quote="Outstanding quality and fast turnaround!" name="John D." label="Verified Customer" />
                    </div>
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-info-dark</code></p>
                        <x-ui.card-info-dark title="Info Card" description="Dark variant for highlighted information." linkText="Learn More" linkHref="#" />
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4 text-charcoal">Info Card Variants</h3>
                <div class="grid md:grid-cols-2 gap-6 mb-12">
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-info-dark</code></p>
                        <x-ui.card-info-dark title="Free Shipping" description="On all orders over $50. Standard delivery in 5-7 business days." linkText="View Shipping Policy" linkHref="#" />
                    </div>
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-info-light</code></p>
                        <x-ui.card-info-light title="Shipping Info" description="Free shipping on all orders over $50. Standard delivery in 5-7 business days." linkText="View Shipping Policy" linkHref="#" />
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4 text-charcoal">Additional Card Types</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-feature</code></p>
                        <x-ui.card-feature step="01" title="Upload Your Design" description="Start by uploading your artwork or use our free online designer to create something unique." />
                    </div>
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-feature</code> (step 2)</p>
                        <x-ui.card-feature step="02" title="Choose Your Products" description="Select from custom shirts, signs, decals, vehicle graphics, and more." />
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4 text-charcoal">Showcase Card</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-showcase</code> (with image)</p>
                        <x-ui.card-showcase
                            image="/images/logos/top5-logo.gif"
                            imageAlt="Top 5 Percent"
                            description="What Do You Represent?"
                        />
                    </div>
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-showcase</code> (with title)</p>
                        <x-ui.card-showcase
                            title="Design Studio"
                            description="Create professional designs in minutes with our intuitive online tool."
                        />
                    </div>
                    <div>
                        <p class="text-xs text-charcoal-light mb-2"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-showcase</code> (with slot)</p>
                        <x-ui.card-showcase>
                            <div class="w-16 h-16 bg-gold-gradient rounded-xl flex items-center justify-center mx-auto mb-4 shadow-gold">
                                <span class="text-2xl font-bold text-charcoal">5%</span>
                            </div>
                            <h3 class="text-lg font-bold text-charcoal mb-1">Premium Quality</h3>
                            <p class="text-charcoal-light text-sm">Only the finest materials and equipment.</p>
                        </x-ui.card-showcase>
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4 text-charcoal">Image with Text Card</h3>
                <p class="text-sm text-charcoal-light mb-6">Full-bleed image (600x450, 4:3, sharp corners) paired with branded text. Supports <code class="bg-gray-100 px-1.5 py-0.5 rounded text-xs">imagePosition="left"</code> (default) and <code class="bg-gray-100 px-1.5 py-0.5 rounded text-xs">imagePosition="right"</code>. Hover to see image scale animation.</p>

                <div class="space-y-8 mb-12">
                    <div>
                        <p class="text-xs text-charcoal-light mb-3"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-image-with-text</code> — image left (default)</p>
                        <x-ui.card-image-with-text
                            image="/images/custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg"
                            alt="Custom vinyl shirts, caps, and hoodies"
                            title="Vinyl Heat-Press Apparel"
                        >
                            <p class="mb-4">Bold, durable vinyl printing is one of our most popular techniques. Using commercial heat-press equipment, we apply precision-cut vinyl in any color to shirts, hoodies, caps, and more. The result is a sharp, professional finish that holds up wash after wash.</p>
                            <p>Ideal for team names, business logos, reunion shirts, and custom numbers. No minimum order and <span class="text-azure underline underline-offset-2">same-day service available</span> on most orders.</p>
                        </x-ui.card-image-with-text>
                    </div>

                    <div>
                        <p class="text-xs text-charcoal-light mb-3"><code class="bg-gray-100 px-1.5 py-0.5 rounded">x-ui.card-image-with-text</code> — image right</p>
                        <x-ui.card-image-with-text
                            image="/images/custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg"
                            alt="Custom rhinestone shirts and caps"
                            title="Rhinestone and Bling Apparel"
                            imagePosition="right"
                        >
                            <p class="mb-4">For events that demand maximum sparkle, our rhinestone apparel delivers. We use crystal rhinestones in custom patterns, logos, and text, hand-set and heat-bonded for a finish that catches every eye in the room.</p>
                            <p>Popular for <span class="text-azure underline underline-offset-2">birthday parties, pageants, and dance teams</span>. Available on any garment, in any color combination.</p>
                        </x-ui.card-image-with-text>
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4 text-charcoal">Two Images with Text Card</h3>
                <p class="text-sm text-charcoal-light mb-6">Two image divs side by side with a centered text div underneath. Each image uses a 4:3 aspect ratio. Use <code class="bg-gray-100 px-1.5 py-0.5 rounded text-xs">x-ui.card-2image-with-text</code>.</p>

                <div class="mb-12">
                    <x-ui.card-2image-with-text
                        image1="/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg"
                        alt1="Custom glitter shirts and caps"
                        image2="/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg"
                        alt2="Custom foil shirts, hoodies, and caps"
                        title="Glitter and Foil Apparel"
                    >
                        <p class="mb-4">Take your custom apparel to the next level with glitter and foil heat-transfer printing. Both techniques use precision heat-press equipment to bond specialty materials directly to the fabric for a finish that looks as good as it feels.</p>
                        <p><span class="text-azure underline underline-offset-2">Glitter prints</span> catch light and shimmer from every angle. <span class="text-azure underline underline-offset-2">Foil prints</span> deliver a high-shine metallic finish in gold, silver, or custom colors. Both are available on shirts, hoodies, caps, and more.</p>
                    </x-ui.card-2image-with-text>
                </div>

                <h3 class="text-lg font-semibold mb-4 text-charcoal">FAQ Accordion Cards</h3>
                <p class="text-sm text-charcoal-light mb-4">SEO-friendly expandable mini-FAQ cards using <code class="bg-gray-100 px-1.5 py-0.5 rounded text-xs">x-ui.card-faq</code>. Great for structured data and voice search.</p>
                <div class="space-y-3 max-w-2xl">
                    <x-ui.card-faq question="What file formats do you accept for custom prints?" answer="We accept most standard image formats including PNG, JPG, SVG, AI, PSD, and PDF. For best results, we recommend vector files (SVG, AI) or high-resolution raster images at 300 DPI or above." :open="true" />
                    <x-ui.card-faq question="How long does production take?" answer="Standard production is 5-7 business days. Rush orders can be completed in 2-3 business days for an additional fee. Large bulk orders may require additional time." />
                    <x-ui.card-faq question="Do you offer bulk discounts?" answer="Yes! We offer tiered pricing on orders of 12 or more items. The more you order, the more you save. Contact us for a custom quote on large orders." />
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Badges & Alerts</h2>
                <p class="text-charcoal-light mb-8">Product badges are standalone Blade components using <code class="bg-charcoal text-white px-2 py-0.5 rounded text-sm">x-ui.badge-&lt;type&gt;</code>.</p>

                <div class="bg-linen p-8 rounded-xl mb-8">
                    <h3 class="text-lg font-semibold mb-4">Product Badges</h3>
                    <div class="flex flex-wrap gap-4 items-end">
                        <div class="text-center">
                            <x-ui.badge-featured>Featured</x-ui.badge-featured>
                            <p class="text-xs text-charcoal-light mt-2">badge-featured</p>
                        </div>
                        <div class="text-center">
                            <x-ui.badge-new>New</x-ui.badge-new>
                            <p class="text-xs text-charcoal-light mt-2">badge-new</p>
                        </div>
                        <div class="text-center">
                            <x-ui.badge-success>In Stock</x-ui.badge-success>
                            <p class="text-xs text-charcoal-light mt-2">badge-success</p>
                        </div>
                        <div class="text-center">
                            <x-ui.badge-sold-out>Sold Out</x-ui.badge-sold-out>
                            <p class="text-xs text-charcoal-light mt-2">badge-sold-out</p>
                        </div>
                        <div class="text-center">
                            <x-ui.badge-default>Default</x-ui.badge-default>
                            <p class="text-xs text-charcoal-light mt-2">badge-default</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="p-4 bg-success/10 border-l-4 border-success rounded-lg flex items-start gap-3">
                        <svg class="w-5 h-5 text-success mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-success">Success</h4>
                            <p class="text-sm text-charcoal-light">Your order has been placed successfully.</p>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-warning/10 border-l-4 border-warning rounded-lg flex items-start gap-3">
                        <svg class="w-5 h-5 text-warning mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-warning">Warning</h4>
                            <p class="text-sm text-charcoal-light">Your session will expire in 5 minutes.</p>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-azure/10 border-l-4 border-azure rounded-lg flex items-start gap-3">
                        <svg class="w-5 h-5 text-azure mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                        <div>
                            <h4 class="font-semibold text-azure">Info</h4>
                            <p class="text-sm text-charcoal-light">Free shipping on orders over $50.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-warm-gradient border-t-2 border-b-2 border-sunburst">
            <div class="max-w-7xl mx-auto px-6">
                <div class="p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-charcoal mb-4">Brand Personality</h3>
                    <p class="text-charcoal mb-4"><strong>Sunburst Gold (#FFC20E):</strong> This vibrant golden yellow radiates optimism, creativity, and energy. It evokes feelings of warmth, confidence, and innovation.</p>
                    <p class="text-charcoal mb-4"><strong>Soft Linen (#F2F0E6):</strong> This warm, off-white creates a sophisticated, organic foundation with subtle yellow undertones that harmonize with the primary gold.</p>
                    <p class="text-charcoal"><strong>Visual Harmony:</strong> The palette uses a complementary color scheme with warm Sunburst Gold and cool Azure Blue. This classic yellow-blue pairing creates natural visual balance while the complementary contrast adds professional energy.</p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gold-gradient">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-4 text-charcoal">Ready to Get Started?</h2>
                <p class="text-lg text-charcoal/80 mb-8 max-w-2xl mx-auto">Contact us today to discuss your custom signage and apparel needs. Veteran-owned and proudly serving Joliet, IL.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="inline-block px-8 py-4 bg-charcoal text-white font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">Contact us today</a>
                    <a href="/demo/premium" class="inline-block px-8 py-4 bg-white text-charcoal font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">View premium components</a>
                </div>
            </div>
        </section>
    </main>

    <x-layout.footer />
</body>
</html>
