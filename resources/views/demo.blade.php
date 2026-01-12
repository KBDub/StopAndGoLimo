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
    <x-layout.navigation-bar currentPage="demo" />

    <main>
        <section class="bg-white py-16 shadow-gold">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-charcoal mb-4">Golden Optimism</h1>
                <div class="w-24 h-1 bg-gold-gradient mx-auto mb-6 rounded"></div>
                <p class="text-xl text-charcoal-light">A vibrant, warm brand palette radiating confidence and creativity</p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Color Palette (4 + White)</h2>
                <p class="text-charcoal-light mb-8">Each core color has 3 variants: Light, Default, and Dark</p>
                
                <div class="rounded-xl overflow-hidden shadow-lg mb-8">
                    <div class="p-6 bg-linen-light border-b border-linen-dark">
                        <h3 class="text-xl font-bold text-charcoal">Sunburst Gold</h3>
                        <p class="text-charcoal-light text-sm">Hero elements, primary CTAs, brand moments, creative sections</p>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-6 bg-sunburst-light">
                            <span class="text-charcoal font-bold block mb-2">Sunburst Light</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div>#FFD93D</div>
                                <div>255, 217, 61</div>
                                <div>48°, 100%, 62%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-sunburst">
                            <span class="text-charcoal font-bold block mb-2">Sunburst Gold</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div>#FFC20E</div>
                                <div>255, 194, 14</div>
                                <div>45°, 100%, 53%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-sunburst-dark">
                            <span class="text-white font-bold block mb-2">Sunburst Dark</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div>#E6A500</div>
                                <div>230, 165, 0</div>
                                <div>43°, 100%, 45%</div>
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
                                <div>#5A9AE8</div>
                                <div>90, 154, 232</div>
                                <div>213°, 77%, 63%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-azure">
                            <span class="text-white font-bold block mb-2">Azure Blue</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div>#3273DC</div>
                                <div>50, 115, 220</div>
                                <div>217°, 72%, 53%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-azure-dark">
                            <span class="text-white font-bold block mb-2">Azure Dark</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div>#2558A8</div>
                                <div>37, 88, 168</div>
                                <div>217°, 64%, 40%</div>
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
                                <div>#FAF9F5</div>
                                <div>250, 249, 245</div>
                                <div>48°, 33%, 97%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-linen border border-linen-dark">
                            <span class="text-charcoal font-bold block mb-2">Soft Linen</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div>#F2F0E6</div>
                                <div>242, 240, 230</div>
                                <div>50°, 27%, 93%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-linen-dark">
                            <span class="text-charcoal font-bold block mb-2">Linen Dark</span>
                            <div class="text-charcoal text-sm font-mono space-y-1">
                                <div>#E8E5D8</div>
                                <div>232, 229, 216</div>
                                <div>48°, 28%, 88%</div>
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
                                <div>#555555</div>
                                <div>85, 85, 85</div>
                                <div>0°, 0%, 33%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-charcoal">
                            <span class="text-white font-bold block mb-2">Charcoal</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div>#2C2C2C</div>
                                <div>44, 44, 44</div>
                                <div>0°, 0%, 17%</div>
                            </div>
                        </div>
                        <div class="p-6 bg-charcoal-dark">
                            <span class="text-white font-bold block mb-2">Charcoal Dark</span>
                            <div class="text-white text-sm font-mono space-y-1">
                                <div>#1A1A1A</div>
                                <div>26, 26, 26</div>
                                <div>0°, 0%, 10%</div>
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
                            <div>#FFFFFF</div>
                            <div>255, 255, 255</div>
                            <div>0°, 0%, 100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-linen">
            <div class="max-w-6xl mx-auto px-6">
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
            <div class="max-w-6xl mx-auto px-6">
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
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
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

        <section class="py-16 bg-linen">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Typography</h2>
                
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-lg font-semibold mb-6 text-charcoal-light">Font Family: Titillium Web</h3>
                    
                    <div class="space-y-6">
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H1 - 32px / Bold / Line Height 1.2</p>
                            <h1 class="text-h1 font-bold text-charcoal">Main Page Heading</h1>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H2 - 24px / Bold / Line Height 1.3</p>
                            <h2 class="text-h2 font-bold text-charcoal">Section Title</h2>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H3 - 20px / SemiBold / Line Height 1.3</p>
                            <h3 class="text-h3 font-semibold text-charcoal">Subsection Heading</h3>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H4 - 18px / SemiBold / Line Height 1.4</p>
                            <h4 class="text-h4 font-semibold text-charcoal">Card Title</h4>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">H5 - 16px / SemiBold / Line Height 1.4</p>
                            <h5 class="text-h5 font-semibold text-charcoal">Minor Heading</h5>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">Body Large - 18px / Regular</p>
                            <p class="text-lg text-charcoal">Premium custom signage and apparel. Veteran-owned business specializing in custom shirts, signs, decals, and vehicle graphics.</p>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <p class="text-xs text-charcoal-light mb-2">Body - 16px / Regular</p>
                            <p class="text-base text-charcoal">Our team delivers exceptional quality with attention to detail. From custom t-shirts to full vehicle wraps, we bring your vision to life.</p>
                        </div>
                        
                        <div>
                            <p class="text-xs text-charcoal-light mb-2">Caption - 12px / Regular</p>
                            <p class="text-xs text-charcoal-light">Image caption or fine print text styling.</p>
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
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Button Variations</h2>
                
                <div class="space-y-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Primary Buttons</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-8 py-4 bg-gold-gradient text-charcoal font-semibold rounded-lg hover:shadow-gold-lg transition-all hover:-translate-y-0.5">Primary CTA</a>
                            <a href="#" class="inline-block px-8 py-4 bg-sunburst text-charcoal font-semibold rounded-lg hover:shadow-gold-lg transition-all hover:-translate-y-0.5">Solid Gold</a>
                            <a href="#" class="inline-block px-8 py-4 bg-azure text-white font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">Azure Action</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Secondary Buttons</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-8 py-4 border-2 border-charcoal text-charcoal font-semibold rounded-lg hover:bg-charcoal hover:text-white transition-all">Secondary Dark</a>
                            <a href="#" class="inline-block px-8 py-4 border-2 border-sunburst text-sunburst font-semibold rounded-lg hover:bg-sunburst hover:text-charcoal transition-all">Secondary Gold</a>
                            <a href="#" class="text-azure hover:text-azure-dark font-semibold transition-colors">Text Link →</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Button Sizes</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-4 py-2 bg-gold-gradient text-charcoal text-xs font-semibold rounded-lg">Small</a>
                            <a href="#" class="inline-block px-8 py-4 bg-gold-gradient text-charcoal font-semibold rounded-lg">Default</a>
                            <a href="#" class="inline-block px-10 py-5 bg-gold-gradient text-charcoal text-lg font-semibold rounded-lg">Large</a>
                        </div>
                    </div>

                    <div class="bg-charcoal p-8 rounded-xl">
                        <h3 class="text-lg font-semibold mb-4 text-white">On Dark Background</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-8 py-4 bg-gold-gradient text-charcoal font-semibold rounded-lg hover:shadow-gold-lg transition-all">Primary CTA</a>
                            <a href="#" class="inline-block px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-charcoal transition-all">Secondary</a>
                            <a href="#" class="text-sunburst hover:text-white font-semibold transition-colors">Link →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-linen">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Color Combinations</h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="flex h-24">
                            <div class="flex-1 bg-sunburst"></div>
                            <div class="flex-1 bg-charcoal"></div>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-2">Bold & Professional</h3>
                            <p class="text-sm text-charcoal-light">Maximum contrast for headers and CTAs.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="flex h-24">
                            <div class="flex-1 bg-linen"></div>
                            <div class="flex-1 bg-charcoal"></div>
                            <div class="flex-1 bg-sunburst"></div>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-2">Balanced Foundation</h3>
                            <p class="text-sm text-charcoal-light">Linen background, charcoal text, gold accents.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="flex h-24">
                            <div class="flex-1 bg-white"></div>
                            <div class="flex-1 bg-sunburst"></div>
                            <div class="flex-1 bg-sunburst"></div>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-2">Premium Gradient</h3>
                            <p class="text-sm text-charcoal-light">Clean backgrounds with gold gradient overlays.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="flex h-24">
                            <div class="flex-1 bg-linen"></div>
                            <div class="flex-1 bg-charcoal-light"></div>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-2">Subtle Elegance</h3>
                            <p class="text-sm text-charcoal-light">For secondary content and captions.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="flex h-24">
                            <div class="flex-1 bg-sunburst"></div>
                            <div class="flex-1 bg-azure"></div>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-2">High Energy</h3>
                            <p class="text-sm text-charcoal-light">Use sparingly for promotions.</p>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="flex h-24">
                            <div class="flex-1 bg-white"></div>
                            <div class="flex-1 bg-linen"></div>
                            <div class="flex-1 bg-azure"></div>
                        </div>
                        <div class="p-5 bg-white">
                            <h3 class="font-semibold mb-2">Light & Airy</h3>
                            <p class="text-sm text-charcoal-light">Modern, minimalist layouts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
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

        <section class="py-16 bg-linen">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Card Components</h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1">
                        <div class="w-full h-40 bg-linen rounded-lg mb-4"></div>
                        <h3 class="font-semibold mb-2 text-charcoal">Product Card</h3>
                        <p class="text-sm text-charcoal-light mb-3">Custom printed t-shirt with vinyl graphics.</p>
                        <p class="font-bold text-charcoal">$24.99</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1">
                        <div class="w-12 h-12 bg-gold-gradient rounded-lg mb-4 flex items-center justify-center text-charcoal font-bold text-xl">S</div>
                        <h3 class="font-semibold mb-2 text-charcoal">Service Card</h3>
                        <p class="text-sm text-charcoal-light">Professional signage solutions for your business.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1">
                        <p class="text-sm text-charcoal-light italic mb-4">"Outstanding quality and fast turnaround!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-charcoal rounded-full"></div>
                            <div>
                                <h4 class="font-semibold text-sm text-charcoal">John D.</h4>
                                <p class="text-xs text-charcoal-light">Verified Customer</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-charcoal text-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1">
                        <h3 class="font-semibold mb-2">Info Card</h3>
                        <p class="text-sm text-white/70 mb-4">Dark variant for highlighted information.</p>
                        <a href="#" class="text-azure hover:text-azure-dark text-sm font-semibold transition-colors">Learn More →</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-2xl font-bold mb-8 border-l-4 border-sunburst pl-5">Badges & Alerts</h2>
                
                <div class="bg-linen p-8 rounded-xl mb-8">
                    <h3 class="text-lg font-semibold mb-4">Product Badges</h3>
                    <div class="flex flex-wrap gap-4">
                        <span class="inline-block px-4 py-1.5 bg-gold-gradient text-charcoal text-xs font-semibold rounded-full">Featured</span>
                        <span class="inline-block px-4 py-1.5 bg-azure text-white text-xs font-semibold rounded-full">New</span>
                        <span class="inline-block px-4 py-1.5 bg-success text-white text-xs font-semibold rounded-full">New</span>
                        <span class="inline-block px-4 py-1.5 bg-charcoal text-white text-xs font-semibold rounded-full">Sold Out</span>
                        <span class="inline-block px-4 py-1.5 border border-charcoal-light text-charcoal-light text-xs font-semibold rounded-full">Default</span>
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
            <div class="max-w-6xl mx-auto px-6">
                <div class="p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-charcoal mb-4">Brand Personality</h3>
                    <p class="text-charcoal mb-4"><strong>Sunburst Gold (#FFC20E):</strong> This vibrant golden yellow radiates optimism, creativity, and energy. It evokes feelings of warmth, confidence, and innovation.</p>
                    <p class="text-charcoal mb-4"><strong>Soft Linen (#F2F0E6):</strong> This warm, off-white creates a sophisticated, organic foundation with subtle yellow undertones that harmonize with the primary gold.</p>
                    <p class="text-charcoal"><strong>Visual Harmony:</strong> The palette uses a complementary color scheme with warm Sunburst Gold and cool Azure Blue. This classic yellow-blue pairing creates natural visual balance while the complementary contrast adds professional energy.</p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gold-gradient">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-4 text-charcoal">Ready to Get Started?</h2>
                <p class="text-lg text-charcoal/80 mb-8 max-w-2xl mx-auto">Contact us today to discuss your custom signage and apparel needs. Veteran-owned and proudly serving Joliet, IL.</p>
                <a href="#" class="inline-block px-8 py-4 bg-charcoal text-white font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">Contact Us Today</a>
            </div>
        </section>
    </main>

    <x-layout.footer />
</body>
</html>
