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
<body class="font-sans antialiased bg-white text-black">
    <header class="bg-gray-dark text-white">
        <nav class="container-custom flex items-center justify-between py-4">
            <a href="/" class="flex items-center">
                <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-12">
            </a>
            <div class="hidden md:flex items-center space-x-6 text-sm font-semibold">
                <a href="/" class="text-white hover:text-primary transition-colors">Home</a>
                <a href="/demo" class="text-primary">Demo</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="bg-gray-dark text-white py-16">
            <div class="container-custom text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Brand Style Guide & Demo</h1>
                <p class="text-xl text-gray-300">Top 5 Percent Custom Signage & Apparel Design System</p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Color Palette</h2>
                
                <h3 class="text-lg font-semibold mb-4">Primary Colors</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-8">
                    <div class="text-center">
                        <div class="w-full h-24 bg-primary rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Primary Gold</h4>
                        <p class="text-xs text-gray-medium">#CDBF2B</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-white border border-gray-border rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Background White</h4>
                        <p class="text-xs text-gray-medium">#FFFFFF</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-black rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Text Black</h4>
                        <p class="text-xs text-gray-medium">#000000</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-accent rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Accent Blue</h4>
                        <p class="text-xs text-gray-medium">#3273DC</p>
                    </div>
                </div>

                <h3 class="text-lg font-semibold mb-4">Supporting Colors</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-8">
                    <div class="text-center">
                        <div class="w-full h-24 bg-gray-dark rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Dark Gray</h4>
                        <p class="text-xs text-gray-medium">#333333</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-gray-medium rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Medium Gray</h4>
                        <p class="text-xs text-gray-medium">#666666</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-gray-light rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Light Gray</h4>
                        <p class="text-xs text-gray-medium">#F5F5F5</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-24 bg-gray-border rounded-sm mb-2 shadow-md"></div>
                        <h4 class="font-semibold text-sm">Border Gray</h4>
                        <p class="text-xs text-gray-medium">#E0E0E0</p>
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

        <section class="py-16 bg-gray-light">
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

        <section class="py-16 bg-white">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Button Variations</h2>
                
                <div class="space-y-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Standard States</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="btn btn-primary">Primary CTA</a>
                            <a href="#" class="btn btn-secondary">Secondary</a>
                            <a href="#" class="text-accent hover:underline font-semibold">Tertiary Link</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Button Sizes</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="btn btn-primary text-xs py-2 px-4">Small</a>
                            <a href="#" class="btn btn-primary">Default</a>
                            <a href="#" class="btn btn-primary text-lg py-5 px-10">Large</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Disabled State</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <button class="btn btn-primary opacity-50 cursor-not-allowed" disabled>Disabled Primary</button>
                            <button class="btn btn-secondary opacity-50 cursor-not-allowed" disabled>Disabled Secondary</button>
                        </div>
                    </div>

                    <div class="bg-gray-dark p-8 rounded-sm">
                        <h3 class="text-lg font-semibold mb-4 text-white">On Dark Background</h3>
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="#" class="btn btn-primary">Primary CTA</a>
                            <a href="#" class="btn btn-secondary text-white border-white hover:bg-white/10">Secondary</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-light">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Form Elements</h2>
                
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2">Text Input</label>
                                <input type="text" placeholder="Enter your name" class="w-full h-12 px-4 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold mb-2">Email Input</label>
                                <input type="email" placeholder="email@example.com" class="w-full h-12 px-4 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold mb-2">Select Menu</label>
                                <select class="w-full h-12 px-4 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors bg-white">
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
                                <textarea placeholder="Describe your project..." rows="4" class="w-full px-4 py-3 border border-gray-border rounded-sm focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-colors resize-none"></textarea>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold mb-2">Input States</label>
                                <input type="text" value="Success state" class="w-full h-12 px-4 border-2 border-success rounded-sm mb-3 outline-none">
                                <input type="text" value="Error state" class="w-full h-12 px-4 border-2 border-error rounded-sm outline-none">
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

        <section class="py-16 bg-white">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Card Components</h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-light p-6 rounded-sm hover:shadow-lg transition-shadow">
                        <div class="w-full h-40 bg-gray-border rounded-sm mb-4"></div>
                        <h3 class="font-semibold mb-2">Product Card</h3>
                        <p class="text-sm text-gray-medium mb-3">Custom printed t-shirt with vinyl graphics.</p>
                        <p class="font-bold text-primary">$24.99</p>
                    </div>
                    
                    <div class="bg-gray-light p-6 rounded-sm hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-primary rounded-sm mb-4 flex items-center justify-center text-black font-bold">S</div>
                        <h3 class="font-semibold mb-2">Service Card</h3>
                        <p class="text-sm text-gray-medium">Professional signage solutions for your business needs.</p>
                    </div>
                    
                    <div class="bg-gray-light p-6 rounded-sm hover:shadow-lg transition-shadow">
                        <p class="text-sm text-gray-medium italic mb-4">"Outstanding quality and fast turnaround. Will definitely order again!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gray-dark rounded-full"></div>
                            <div>
                                <h4 class="font-semibold text-sm">John D.</h4>
                                <p class="text-xs text-gray-medium">Verified Customer</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-dark text-white p-6 rounded-sm hover:shadow-lg transition-shadow">
                        <h3 class="font-semibold mb-2">Info Card</h3>
                        <p class="text-sm text-gray-300 mb-4">Dark variant for highlighted information.</p>
                        <a href="#" class="text-primary hover:underline text-sm font-semibold">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-light">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Badges & Status Indicators</h2>
                
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <div class="flex flex-wrap gap-4 mb-8">
                        <span class="inline-block px-3 py-1 bg-primary text-black text-xs font-semibold rounded-sm">Featured</span>
                        <span class="inline-block px-3 py-1 bg-error text-white text-xs font-semibold rounded-sm">Sale</span>
                        <span class="inline-block px-3 py-1 bg-success text-white text-xs font-semibold rounded-sm">New</span>
                        <span class="inline-block px-3 py-1 bg-accent text-white text-xs font-semibold rounded-sm">Popular</span>
                        <span class="inline-block px-3 py-1 bg-gray-dark text-white text-xs font-semibold rounded-sm">Sold Out</span>
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

        <section class="py-16 bg-white">
            <div class="container-custom">
                <h2 class="text-2xl font-bold mb-8 pb-4 border-b border-gray-border">Spacing Scale</h2>
                
                <div class="bg-gray-light p-8 rounded-sm">
                    <h3 class="text-lg font-semibold mb-6">Base Unit: 4px</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">4px</div>
                            <div class="h-4 bg-primary" style="width: 4px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-1</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">8px</div>
                            <div class="h-4 bg-primary" style="width: 8px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-2</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">16px</div>
                            <div class="h-4 bg-primary" style="width: 16px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-4</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">24px</div>
                            <div class="h-4 bg-primary" style="width: 24px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-6</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">32px</div>
                            <div class="h-4 bg-primary" style="width: 32px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-8</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">48px</div>
                            <div class="h-4 bg-primary" style="width: 48px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-12</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">64px</div>
                            <div class="h-4 bg-primary" style="width: 64px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-16</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm text-gray-medium">96px</div>
                            <div class="h-4 bg-primary" style="width: 96px;"></div>
                            <span class="text-xs text-gray-medium">--spacing-24</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-light">
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
                                <div class="w-16 h-16 bg-primary rounded-sm"></div>
                            </div>
                            <div class="bg-white p-6 border border-gray-border rounded-sm flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-semibold">Medium (4px)</p>
                                    <p class="text-xs text-gray-medium">--border-radius-md</p>
                                </div>
                                <div class="w-16 h-16 bg-primary rounded"></div>
                            </div>
                            <div class="bg-white p-6 border border-gray-border rounded-sm flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-semibold">Large (8px)</p>
                                    <p class="text-xs text-gray-medium">--border-radius-lg</p>
                                </div>
                                <div class="w-16 h-16 bg-primary rounded-lg"></div>
                            </div>
                            <div class="bg-white p-6 border border-gray-border rounded-sm flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-semibold">Full</p>
                                    <p class="text-xs text-gray-medium">--border-radius-full</p>
                                </div>
                                <div class="w-16 h-16 bg-primary rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-dark text-white py-12">
        <div class="container-custom">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-4">
                    <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-10">
                    <span class="text-sm text-gray-300">Premium Custom Signage & Apparel</span>
                </div>
                <div class="text-sm text-gray-300">
                    <a href="/" class="hover:text-primary transition-colors">Home</a>
                    <span class="mx-2">|</span>
                    <a href="/demo" class="hover:text-primary transition-colors">Demo</a>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-medium text-center text-xs text-gray-300">
                &copy; {{ date('Y') }} Top 5 Percent. All rights reserved. Veteran Owned. Joliet, IL.
            </div>
        </div>
    </footer>
</body>
</html>
