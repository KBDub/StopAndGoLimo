<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brand Style Guide & Demo | Top 5 Percent</title>
    <meta name="description" content="Brand style guide and design system for Top 5 Percent Custom Signage & Apparel.">
    <meta name="theme-color" content="#CDBF2B">
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
<body class="font-sans antialiased bg-cream text-black">
    <header class="bg-black text-cream">
        <nav class="container-custom flex items-center justify-between py-4">
            <a href="/" class="flex items-center">
                <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-12">
            </a>
            <div class="hidden md:flex items-center space-x-6 text-sm font-semibold">
                <a href="/" class="text-cream hover:text-primary transition-colors">Home</a>
                <a href="/demo" class="text-primary">Demo</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="bg-black text-cream py-16">
            <div class="container-custom text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Brand Style Guide & Demo</h1>
                <p class="text-xl text-cream/80">Top 5 Percent Custom Signage & Apparel Design System</p>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Color Palette</h2>
                
                <h3 class="text-lg font-semibold mb-4">Primary Brand Colors</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-8">
                    <div class="text-center">
                        <div class="w-full h-24 bg-gold-gradient rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Gold Gradient</h4>
                        <p class="text-xs text-gray-medium">#F8E300 → #CDC02B</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-primary rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Primary Gold</h4>
                        <p class="text-xs text-gray-medium">#CDBF2B</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-primary-dark rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Gold Text</h4>
                        <p class="text-xs text-gray-medium">#645D15</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-black rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Black</h4>
                        <p class="text-xs text-gray-medium">#000000</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-cream border border-gray-border rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Cream</h4>
                        <p class="text-xs text-gray-medium">#F2F0E6</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-accent rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Accent Blue</h4>
                        <p class="text-xs text-gray-medium">#3273DC</p>
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4">Section Backgrounds</h3>
                <div class="grid md:grid-cols-2 gap-4 mb-8">
                    <div class="text-center">
                        <div class="w-full h-32 bg-cream border border-gray-border rounded-sm mb-2 shadow-md flex items-center justify-center">
                            <span class="text-black font-semibold">Section Background 1</span>
                        </div>
                        <h4 class="font-semibold text-sm">Cream</h4>
                        <p class="text-xs text-gray-medium">#F2F0E6</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-32 bg-section-alt rounded-sm mb-2 shadow-md flex items-center justify-center">
                            <span class="text-white font-semibold">Section Background 2</span>
                        </div>
                        <h4 class="font-semibold text-sm">Alt Section</h4>
                        <p class="text-xs text-gray-medium">#CF58A3</p>
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4">Functional Colors</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center">
                        <div class="w-full h-24 bg-success rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Success</h4>
                        <p class="text-xs text-gray-medium">#2E7D32</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-error rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Error</h4>
                        <p class="text-xs text-gray-medium">#C62828</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-warning rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Warning</h4>
                        <p class="text-xs text-gray-medium">#F9A825</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-info rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Info</h4>
                        <p class="text-xs text-gray-medium">#3273DC</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-black text-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-medium">Text on Dark Backgrounds</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-primary font-semibold mb-4">Gold Text on Black</h3>
                        <p class="text-cream mb-4">Cream colored body text (#F2F0E6) provides excellent readability on black backgrounds while maintaining the premium aesthetic.</p>
                        <p class="text-primary-dark mb-4">Gold text (#645D15) can be used for subtle gold accents that need less contrast.</p>
                    </div>
                    <div class="bg-gold-gradient p-6 rounded-sm">
                        <h3 class="text-black font-bold mb-2">Text on Gold Gradient</h3>
                        <p class="text-black/80">Black text on gold gradient backgrounds provides maximum contrast for call-to-action elements.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Typography</h2>
                
                <div class="bg-white p-8 rounded-sm shadow-md mb-8">
                    <h3 class="text-lg font-semibold mb-6 text-gray-medium">Font Family: Titillium Web</h3>
                    
                    <div class="space-y-6">
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">H1 - 32px / Bold / Line Height 1.2</p>
                            <h1 class="text-h1 font-bold">Main Page Heading</h1>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">H2 - 24px / Bold / Line Height 1.3</p>
                            <h2 class="text-h2 font-bold">Section Title</h2>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">H3 - 20px / SemiBold / Line Height 1.3</p>
                            <h3 class="text-h3 font-semibold">Subsection Heading</h3>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">H4 - 18px / SemiBold / Line Height 1.4</p>
                            <h4 class="text-h4 font-semibold">Card Title</h4>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">H5 - 16px / SemiBold / Line Height 1.4</p>
                            <h5 class="text-h5 font-semibold">Minor Heading</h5>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">Body Large - 18px / Regular / Line Height 1.7</p>
                            <p class="text-lg leading-relaxed">Premium custom signage and apparel in Joliet, IL. Veteran-owned business specializing in custom shirts, signs, decals, and vehicle graphics.</p>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">Body - 16px / Regular / Line Height 1.6</p>
                            <p class="text-base leading-normal">Our team delivers exceptional quality with attention to detail. From custom t-shirts to full vehicle wraps, we bring your vision to life.</p>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-border">
                            <p class="text-xs text-gray-medium mb-2">Body Small - 14px / Regular / Line Height 1.5</p>
                            <p class="text-sm">Serving Joliet and the greater Chicagoland area since establishment.</p>
                        </div>
                        
                        <div>
                            <p class="text-xs text-gray-medium mb-2">Caption - 12px / Regular / Line Height 1.4</p>
                            <p class="text-xs">Image caption or fine print text styling.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-sm shadow-md">
                    <h3 class="text-lg font-semibold mb-6">Font Weights</h3>
                    <div class="grid md:grid-cols-4 gap-6">
                        <div>
                            <p class="font-light text-2xl mb-2">Light 300</p>
                            <p class="text-xs text-gray-medium">Decorative use only</p>
                        </div>
                        <div>
                            <p class="font-normal text-2xl mb-2">Regular 400</p>
                            <p class="text-xs text-gray-medium">Body text</p>
                        </div>
                        <div>
                            <p class="font-semibold text-2xl mb-2">SemiBold 600</p>
                            <p class="text-xs text-gray-medium">Buttons, labels</p>
                        </div>
                        <div>
                            <p class="font-bold text-2xl mb-2">Bold 700</p>
                            <p class="text-xs text-gray-medium">Headings</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Button Variations</h2>
                
                <div class="space-y-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Primary Buttons (Gold Gradient)</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-8 py-4 bg-gold-gradient text-black font-semibold rounded-sm hover:shadow-lg transition-all hover:scale-[1.02]">Primary CTA</a>
                            <a href="#" class="inline-block px-8 py-4 bg-primary text-black font-semibold rounded-sm hover:shadow-lg transition-all hover:scale-[1.02]">Solid Gold</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Secondary & Tertiary Buttons</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-8 py-4 border-2 border-black text-black font-semibold rounded-sm hover:bg-black hover:text-cream transition-all">Secondary</a>
                            <a href="#" class="inline-block px-8 py-4 border-2 border-primary text-primary-dark font-semibold rounded-sm hover:bg-primary hover:text-black transition-all">Secondary Gold</a>
                            <a href="#" class="text-accent hover:underline font-semibold">Tertiary Link →</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Button Sizes</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-4 py-2 bg-gold-gradient text-black text-xs font-semibold rounded-sm">Small</a>
                            <a href="#" class="inline-block px-8 py-4 bg-gold-gradient text-black font-semibold rounded-sm">Default</a>
                            <a href="#" class="inline-block px-10 py-5 bg-gold-gradient text-black text-lg font-semibold rounded-sm">Large</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Disabled State</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <button class="inline-block px-8 py-4 bg-gold-gradient text-black font-semibold rounded-sm opacity-50 cursor-not-allowed" disabled>Disabled Primary</button>
                            <button class="inline-block px-8 py-4 border-2 border-black text-black font-semibold rounded-sm opacity-50 cursor-not-allowed" disabled>Disabled Secondary</button>
                        </div>
                    </div>

                    <div class="bg-black p-8 rounded-sm">
                        <h3 class="text-lg font-semibold mb-4 text-cream">On Dark Background</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="inline-block px-8 py-4 bg-gold-gradient text-black font-semibold rounded-sm hover:shadow-lg transition-all">Primary CTA</a>
                            <a href="#" class="inline-block px-8 py-4 border-2 border-cream text-cream font-semibold rounded-sm hover:bg-cream hover:text-black transition-all">Secondary</a>
                            <a href="#" class="text-primary hover:underline font-semibold">Link →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Form Elements</h2>
                
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2">Text Input</label>
                                <input type="text" placeholder="Enter your name" class="w-full h-12 px-4 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors bg-cream">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold mb-2">Email Input</label>
                                <input type="email" placeholder="email@example.com" class="w-full h-12 px-4 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors bg-cream">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold mb-2">Select Menu</label>
                                <select class="w-full h-12 px-4 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors bg-cream">
                                    <option>Select an option</option>
                                    <option>Custom Apparel</option>
                                    <option>Business Signs</option>
                                    <option>Vehicle Graphics</option>
                                    <option>Decals</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2">Textarea</label>
                                <textarea placeholder="Describe your project..." rows="4" class="w-full px-4 py-3 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors resize-none bg-cream"></textarea>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold mb-2">Input States</label>
                                <input type="text" value="Success state" class="w-full h-12 px-4 border-2 border-success rounded-sm mb-3 outline-none bg-cream">
                                <input type="text" value="Error state" class="w-full h-12 px-4 border-2 border-error rounded-sm outline-none bg-cream">
                                <p class="text-error text-sm mt-1">This field is required.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-8 border-t border-gray-border">
                        <h3 class="text-lg font-semibold mb-4">Checkboxes & Radio Buttons</h3>
                        <div class="flex flex-wrap gap-8">
                            <div class="space-y-3">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-primary">
                                    <span>Checkbox option 1</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" checked class="w-5 h-5 accent-primary">
                                    <span>Checkbox option 2 (checked)</span>
                                </label>
                            </div>
                            <div class="space-y-3">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="demo-radio" class="w-5 h-5 accent-primary">
                                    <span>Radio option 1</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="demo-radio" checked class="w-5 h-5 accent-primary">
                                    <span>Radio option 2 (selected)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Card Components</h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-sm shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-full h-40 bg-gray-border rounded-sm mb-4"></div>
                        <h3 class="font-semibold mb-2">Product Card</h3>
                        <p class="text-sm text-gray-medium mb-3">Custom printed t-shirt with vinyl graphics.</p>
                        <p class="font-bold text-primary-dark">$24.99</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-sm shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-gold-gradient rounded-sm mb-4 flex items-center justify-center text-black font-bold">S</div>
                        <h3 class="font-semibold mb-2">Service Card</h3>
                        <p class="text-sm text-gray-medium">Professional signage solutions for your business needs.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-sm shadow-md hover:shadow-lg transition-shadow">
                        <p class="text-sm text-gray-medium italic mb-4">"Outstanding quality and fast turnaround. Will definitely order again!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-black rounded-full"></div>
                            <div>
                                <h4 class="font-semibold text-sm">John D.</h4>
                                <p class="text-xs text-gray-medium">Verified Customer</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-black text-cream p-6 rounded-sm shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="font-semibold mb-2">Info Card</h3>
                        <p class="text-sm text-cream/70 mb-4">Dark variant for highlighted information.</p>
                        <a href="#" class="text-primary hover:underline text-sm font-semibold">Learn More →</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Badges & Status Indicators</h2>
                
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <h3 class="text-lg font-semibold mb-4">Product Badges</h3>
                    <div class="flex flex-wrap gap-4 mb-8">
                        <span class="inline-block px-3 py-1 bg-gold-gradient text-black text-xs font-semibold rounded-sm">Featured</span>
                        <span class="inline-block px-3 py-1 bg-error text-white text-xs font-semibold rounded-sm">Sale</span>
                        <span class="inline-block px-3 py-1 bg-success text-white text-xs font-semibold rounded-sm">New</span>
                        <span class="inline-block px-3 py-1 bg-accent text-white text-xs font-semibold rounded-sm">Popular</span>
                        <span class="inline-block px-3 py-1 bg-black text-cream text-xs font-semibold rounded-sm">Sold Out</span>
                        <span class="inline-block px-3 py-1 border border-gray-border text-gray-medium text-xs font-semibold rounded-sm">Default</span>
                    </div>
                    
                    <h3 class="text-lg font-semibold mb-4">Status Indicators</h3>
                    <div class="flex flex-wrap gap-6">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-success rounded-full"></span>
                            <span class="text-sm">In Stock</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-warning rounded-full"></span>
                            <span class="text-sm">Low Stock</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-error rounded-full"></span>
                            <span class="text-sm">Out of Stock</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-accent rounded-full"></span>
                            <span class="text-sm">Pre-Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Alerts & Notifications</h2>
                
                <div class="space-y-4">
                    <div class="p-4 bg-success/10 border-l-4 border-success rounded-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-success mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <div>
                                <h4 class="font-semibold text-success">Success</h4>
                                <p class="text-sm text-gray-medium">Your order has been placed successfully.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-error/10 border-l-4 border-error rounded-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-error mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                            <div>
                                <h4 class="font-semibold text-error">Error</h4>
                                <p class="text-sm text-gray-medium">There was a problem processing your request.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-warning/10 border-l-4 border-warning rounded-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-warning mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            <div>
                                <h4 class="font-semibold text-warning">Warning</h4>
                                <p class="text-sm text-gray-medium">Your session will expire in 5 minutes.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-info/10 border-l-4 border-info rounded-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-info mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                            <div>
                                <h4 class="font-semibold text-info">Info</h4>
                                <p class="text-sm text-gray-medium">Free shipping on orders over $50.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Spacing Scale</h2>
                
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <h3 class="text-lg font-semibold mb-6">Base Unit: 4px</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">4px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 4px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-1</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">8px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 8px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-2</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">16px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 16px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-4</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">24px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 24px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-6</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">32px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 32px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-8</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">48px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 48px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-12</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">64px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 64px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-16</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">96px</div>
                            <div class="h-4 bg-gold-gradient" style="width: 96px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-24</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-cream">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Shadows & Borders</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Shadow Scale</h3>
                        <div class="space-y-4">
                            <div class="bg-white p-6 rounded-sm shadow-sm">
                                <p class="text-sm font-semibold">Shadow Small</p>
                                <p class="text-xs text-gray-medium">--shadow-sm</p>
                            </div>
                            <div class="bg-white p-6 rounded-sm shadow-md">
                                <p class="text-sm font-semibold">Shadow Medium</p>
                                <p class="text-xs text-gray-medium">--shadow-md</p>
                            </div>
                            <div class="bg-white p-6 rounded-sm shadow-lg">
                                <p class="text-sm font-semibold">Shadow Large</p>
                                <p class="text-xs text-gray-medium">--shadow-lg</p>
                            </div>
                            <div class="bg-white p-6 rounded-sm shadow-xl">
                                <p class="text-sm font-semibold">Shadow XL</p>
                                <p class="text-xs text-gray-medium">--shadow-xl</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Border Radius</h3>
                        <div class="space-y-4">
                            <div class="bg-white p-6 border border-gray-border rounded-sm flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-semibold">Small (2px)</p>
                                    <p class="text-xs text-gray-medium">--border-radius</p>
                                </div>
                                <div class="w-16 h-16 bg-gold-gradient rounded-sm"></div>
                            </div>
                            <div class="bg-white p-6 border border-gray-border rounded-sm flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-semibold">Medium (4px)</p>
                                    <p class="text-xs text-gray-medium">--border-radius-md</p>
                                </div>
                                <div class="w-16 h-16 bg-gold-gradient rounded"></div>
                            </div>
                            <div class="bg-white p-6 border border-gray-border rounded-sm flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-semibold">Large (8px)</p>
                                    <p class="text-xs text-gray-medium">--border-radius-lg</p>
                                </div>
                                <div class="w-16 h-16 bg-gold-gradient rounded-lg"></div>
                            </div>
                            <div class="bg-white p-6 border border-gray-border rounded-sm flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-semibold">Full</p>
                                    <p class="text-xs text-gray-medium">--border-radius-full</p>
                                </div>
                                <div class="w-16 h-16 bg-gold-gradient rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gold-gradient">
            <div class="container-custom text-center">
                <h2 class="text-3xl font-bold mb-4 text-black">Ready to Get Started?</h2>
                <p class="text-lg text-black/80 mb-8 max-w-2xl mx-auto">Contact us today to discuss your custom signage and apparel needs. Veteran-owned and proudly serving Joliet, IL.</p>
                <a href="#" class="inline-block px-8 py-4 bg-black text-cream font-semibold rounded-sm hover:shadow-lg transition-all hover:scale-[1.02]">Contact Us Today</a>
            </div>
        </section>
    </main>

    <footer class="bg-black text-cream py-12">
        <div class="container-custom">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-4">
                    <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-10">
                    <span class="text-sm text-cream/70">Premium Custom Signage & Apparel</span>
                </div>
                <div class="text-sm text-cream/70">
                    <a href="/" class="hover:text-primary transition-colors">Home</a>
                    <span class="mx-2">|</span>
                    <a href="/demo" class="hover:text-primary transition-colors">Demo</a>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-medium text-center text-xs text-cream/50">
                &copy; {{ date('Y') }} Top 5 Percent. All rights reserved. Veteran Owned. Joliet, IL.
            </div>
        </div>
    </footer>
</body>
</html>
