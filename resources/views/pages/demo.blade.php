<x-layouts.page
    title="Brand Style Guide — Twilight Luxe"
    metaDescription="Twilight Luxe brand style guide for Stop &amp; Go Airport Shuttle Service Inc. Color palette, typography, buttons, banners, and mega menu."
    currentPage="demo"
    :noIndex="true"
>

        {{-- ── Hero ──────────────────────────────────────────── --}}
        <section class="py-20 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-grad-midnight-hero"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-6">
                <span class="inline-block font-head font-semibold text-xs tracking-widest text-champagne border border-champagne/40 px-5 py-2 mb-8 bg-champagne/5">Brand Style Guide</span>
                <h1 class="font-head font-extrabold text-5xl md:text-7xl mb-6 leading-tight bg-grad-champagne-shine bg-clip-text" style="-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Twilight Luxe</h1>
                <p class="text-muted-light text-lg max-w-xl mx-auto mb-4">A refined navy-and-champagne palette engineered for premium ground transportation, confident, quiet, and first class.</p>
                <p class="text-sm tracking-widest text-muted font-head"><strong class="text-champagne font-semibold">Stop &amp; Go Airport Shuttle Service Inc.</strong> &nbsp;&middot;&nbsp; New Lenox, Naperville, Joliet, Chicago and all of Illinois</p>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 01 Color Palette ───────────────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">01 &mdash; Palette</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Color Palette (5 + White)</h2>
                    <p class="text-muted-light mt-3 max-w-2xl">Each core color has up to three variants: Light, Default, and Dark, for hover states, depth, and surface layering.</p>
                </div>

                {{-- Champagne Gold --}}
                <div class="mb-8 border border-white/8 overflow-hidden bg-navy-light">
                    <div class="px-6 py-4 border-b border-white/8">
                        <h3 class="font-head font-semibold text-xl text-white">Champagne Gold</h3>
                        <p class="text-muted text-sm">Primary CTAs, brand accents, dividers, button and link hover states</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3">
                        <div class="p-6" style="background:#E9C79E"><span class="text-[#4a3818] font-bold block mb-2 font-head text-sm">Champagne Light</span><p class="font-mono text-xs text-[#4a3818]/70">HEX #E9C79E &bull; RGB 233, 199, 158</p></div>
                        <div class="p-6" style="background:#DCB57E"><span class="text-[#4a3818] font-bold block mb-2 font-head text-sm">Champagne Gold</span><p class="font-mono text-xs text-[#4a3818]/70">HEX #DCB57E &bull; RGB 220, 181, 126</p></div>
                        <div class="p-6" style="background:#C49A5E"><span class="text-white font-bold block mb-2 font-head text-sm">Champagne Dark</span><p class="font-mono text-xs text-white/70">HEX #C49A5E &bull; RGB 196, 154, 94</p></div>
                    </div>
                </div>

                {{-- Midnight Navy --}}
                <div class="mb-8 border border-white/8 overflow-hidden bg-navy-light">
                    <div class="px-6 py-4 border-b border-white/8">
                        <h3 class="font-head font-semibold text-xl text-white">Midnight Navy</h3>
                        <p class="text-muted text-sm">Dominant backgrounds, headers, footer, hero overlays</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3">
                        <div class="p-6" style="background:#252235"><span class="text-cloud font-bold block mb-2 font-head text-sm">Navy Light</span><p class="font-mono text-xs text-cloud/60">HEX #252235 &bull; RGB 37, 34, 53</p></div>
                        <div class="p-6" style="background:#15162C"><span class="text-cloud font-bold block mb-2 font-head text-sm">Midnight Navy</span><p class="font-mono text-xs text-cloud/60">HEX #15162C &bull; RGB 21, 22, 44</p></div>
                        <div class="p-6" style="background:#0F1223"><span class="text-cloud font-bold block mb-2 font-head text-sm">Navy Dark</span><p class="font-mono text-xs text-cloud/60">HEX #0F1223 &bull; RGB 15, 18, 35</p></div>
                    </div>
                </div>

                {{-- Signal Gold --}}
                <div class="mb-8 border border-white/8 overflow-hidden bg-navy-light">
                    <div class="px-6 py-4 border-b border-white/8">
                        <h3 class="font-head font-semibold text-xl text-white">Signal Gold</h3>
                        <p class="text-muted text-sm">High-attention only, 24/7 badges, quote highlights, alert ribbons</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3">
                        <div class="p-6" style="background:#FFD65E"><span class="text-[#4a3818] font-bold block mb-2 font-head text-sm">Signal Light</span><p class="font-mono text-xs text-[#4a3818]/70">HEX #FFD65E &bull; RGB 255, 214, 94</p></div>
                        <div class="p-6" style="background:#FEC42D"><span class="text-[#4a3818] font-bold block mb-2 font-head text-sm">Signal Gold</span><p class="font-mono text-xs text-[#4a3818]/70">HEX #FEC42D &bull; RGB 254, 196, 45</p></div>
                        <div class="p-6" style="background:#E0A800"><span class="text-[#4a3818] font-bold block mb-2 font-head text-sm">Signal Dark</span><p class="font-mono text-xs text-[#4a3818]/70">HEX #E0A800 &bull; RGB 224, 168, 0</p></div>
                    </div>
                </div>

                {{-- Cloud Grey --}}
                <div class="mb-8 border border-white/8 overflow-hidden bg-navy-light">
                    <div class="px-6 py-4 border-b border-white/8">
                        <h3 class="font-head font-semibold text-xl text-white">Cloud Grey</h3>
                        <p class="text-muted text-sm">Light-mode backgrounds, breathing room, alternating section surfaces</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3">
                        <div class="p-6 border border-white/5" style="background:#F4F5F7"><span class="text-[#4a5159] font-bold block mb-2 font-head text-sm">Cloud Light</span><p class="font-mono text-xs text-[#4a5159]/70">HEX #F4F5F7 &bull; RGB 244, 245, 247</p></div>
                        <div class="p-6 border border-white/5" style="background:#E8E9EC"><span class="text-[#4a5159] font-bold block mb-2 font-head text-sm">Cloud Grey</span><p class="font-mono text-xs text-[#4a5159]/70">HEX #E8E9EC &bull; RGB 232, 233, 236</p></div>
                        <div class="p-6 border border-white/5" style="background:#D4D6DB"><span class="text-[#4a5159] font-bold block mb-2 font-head text-sm">Cloud Dark</span><p class="font-mono text-xs text-[#4a5159]/70">HEX #D4D6DB &bull; RGB 212, 214, 219</p></div>
                    </div>
                </div>

                {{-- Slate --}}
                <div class="mb-8 border border-white/8 overflow-hidden bg-navy-light">
                    <div class="px-6 py-4 border-b border-white/8">
                        <h3 class="font-head font-semibold text-xl text-white">Slate</h3>
                        <p class="text-muted text-sm">Secondary text, captions, muted UI, default button grey</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3">
                        <div class="p-6" style="background:#8B939C"><span class="text-[#15162c] font-bold block mb-2 font-head text-sm">Slate Light</span><p class="font-mono text-xs text-[#15162c]/70">HEX #8B939C &bull; RGB 139, 147, 156</p></div>
                        <div class="p-6" style="background:#69727D"><span class="text-white font-bold block mb-2 font-head text-sm">Slate</span><p class="font-mono text-xs text-white/70">HEX #69727D &bull; RGB 105, 114, 125</p></div>
                        <div class="p-6" style="background:#4A5159"><span class="text-white font-bold block mb-2 font-head text-sm">Slate Dark</span><p class="font-mono text-xs text-white/70">HEX #4A5159 &bull; RGB 74, 81, 89</p></div>
                    </div>
                </div>

                {{-- White --}}
                <div class="mb-8 border border-white/8 overflow-hidden bg-navy-light">
                    <div class="px-6 py-4 border-b border-white/8">
                        <h3 class="font-head font-semibold text-xl text-white">White</h3>
                        <p class="text-muted text-sm">Cards, containers, text on navy, maximum-contrast surfaces</p>
                    </div>
                    <div class="p-6 bg-white">
                        <span class="text-muted font-bold block mb-2 font-head text-sm">White</span>
                        <p class="font-mono text-xs text-muted">HEX #FFFFFF &bull; RGB 255, 255, 255 &bull; HSL 0, 0%, 100%</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 02 Semantic Colors ─────────────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">02 &mdash; Semantic</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Semantic Colors (3)</h2>
                    <p class="text-muted-light mt-3">Reserved for booking forms and reservation flows. Kept distinct from the brand golds.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-5">
                    <div class="border border-white/8 overflow-hidden bg-navy-light">
                        <div class="h-8" style="background:#2E9E6B"></div>
                        <div class="p-5">
                            <h4 class="font-head font-semibold text-lg mb-1" style="color:#2E9E6B">Success</h4>
                            <p class="text-muted text-sm mb-3">Booking confirmations, valid form states, completed quote requests.</p>
                            <p class="font-mono text-xs text-cloud">#2E9E6B &bull; hsl(153, 55%, 40%)</p>
                        </div>
                    </div>
                    <div class="border border-white/8 overflow-hidden bg-navy-light">
                        <div class="h-8" style="background:#E0A800"></div>
                        <div class="p-5">
                            <h4 class="font-head font-semibold text-lg mb-1" style="color:#E0A800">Warning</h4>
                            <p class="text-muted text-sm mb-3">Limited-availability notices, peak-season cautions, time-sensitive prompts.</p>
                            <p class="font-mono text-xs text-cloud">#E0A800 &bull; hsl(45, 100%, 44%)</p>
                        </div>
                    </div>
                    <div class="border border-white/8 overflow-hidden bg-navy-light">
                        <div class="h-8" style="background:#C0392B"></div>
                        <div class="p-5">
                            <h4 class="font-head font-semibold text-lg mb-1" style="color:#C0392B">Error</h4>
                            <p class="text-muted text-sm mb-3">Form validation errors, failed submissions, destructive actions.</p>
                            <p class="font-mono text-xs text-cloud">#C0392B &bull; hsl(6, 63%, 46%)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 03 Color Hierarchy ─────────────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">03 &mdash; Hierarchy</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Color Hierarchy</h2>
                    <p class="text-muted-light mt-3">The order in which colors carry visual weight across the experience.</p>
                </div>
                <div class="space-y-3">
                    @foreach([
                        [1, '#15162C', 'Midnight Navy', 'Foundation color, dominant backgrounds, headers, and the footer. Sets the luxury tone.'],
                        [2, '#DCB57E', 'Champagne Gold', 'Primary brand color, CTAs, accents, dividers, and every interactive hover state.'],
                        [3, '#FFFFFF', 'White', 'Container color, cards, primary text on navy, and high-contrast surfaces.'],
                        [4, '#E8E9EC', 'Cloud Grey', 'Light surface color, alternating sections and breathing room in light mode.'],
                        [5, '#69727D', 'Slate', 'Secondary text color, captions, metadata, and muted supporting copy.'],
                        [6, '#FEC42D', 'Signal Gold', 'Accent color, used sparingly for 24/7 badges and high-attention highlights only.'],
                    ] as [$num, $hex, $name, $desc])
                    <div class="flex items-center gap-5 border border-white/8 bg-navy-light px-5 py-4">
                        <span class="font-head font-extrabold text-2xl text-white/20 w-8 flex-shrink-0">{{ $num }}</span>
                        <div class="w-12 h-12 flex-shrink-0 border border-white/12" style="background:{{ $hex }}"></div>
                        <div>
                            <h4 class="font-head font-semibold text-white text-base">{{ $name }} <code class="font-mono text-xs text-champagne ml-1">{{ $hex }}</code></h4>
                            <p class="text-muted text-sm mt-0.5">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 04 Brand Gradients ─────────────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">04 &mdash; Gradients</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Brand Gradients</h2>
                    <p class="text-muted-light mt-3">Four sanctioned gradients. Navy gradients anchor heroes and sections; champagne gradients energize CTAs.</p>
                </div>
                <div class="grid md:grid-cols-2 gap-5">
                    @foreach([
                        ['Midnight Hero', 'bg-grad-midnight-hero', 'Primary hero and section backgrounds, the signature navy depth.', 'linear-gradient(135deg, #15162C 0%, #252235 100%)'],
                        ['Deep Twilight', 'bg-grad-deep-twilight', 'Image overlays and footer, at ~70% opacity over photography.', 'linear-gradient(135deg, #0F1223 0%, #15162C 60%, #252235 100%)'],
                        ['Champagne Shine', 'bg-grad-champagne-shine', 'Primary CTAs, buttons, and highlight chips, warm and inviting.', 'linear-gradient(135deg, #DCB57E 0%, #E9C79E 100%)'],
                        ['Navy to Gold', 'bg-grad-navy-to-gold', 'Feature moments only, modern and eye-catching, used sparingly.', 'linear-gradient(135deg, #15162C 0%, #252235 55%, #DCB57E 140%)'],
                    ] as [$label, $class, $desc, $code])
                    <div class="border border-white/8 overflow-hidden bg-navy-light">
                        <div class="h-28 {{ $class }}"></div>
                        <div class="p-5">
                            <h4 class="font-head font-semibold text-white text-base mb-1">{{ $label }}</h4>
                            <p class="text-muted text-sm mb-3">{{ $desc }}</p>
                            <code class="block font-mono text-xs text-champagne-light bg-navy-dark px-3 py-2 border border-white/6 overflow-x-auto whitespace-nowrap">{{ $code }}</code>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Info block --}}
                <div class="mt-8 bg-navy-dark px-6 py-5 border border-white/8">
                    <p class="font-mono text-champagne text-xs mb-1">Tailwind classes: bg-grad-midnight-hero, bg-grad-deep-twilight, bg-grad-champagne-shine, bg-grad-navy-to-gold</p>
                    <p class="font-mono text-muted text-xs">tailwind.config.js &rarr; theme.extend.backgroundImage</p>
                    <pre class="font-mono text-cloud/70 text-xs bg-black/20 px-3 py-2 mt-3 overflow-x-auto whitespace-pre-wrap">&lt;div class="bg-grad-champagne-shine"&gt;...&lt;/div&gt;
&lt;section class="bg-grad-midnight-hero py-16"&gt;...&lt;/section&gt;</pre>
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 05 Banners ─────────────────────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">05 &mdash; Banners</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Banners</h2>
                    <p class="text-muted-light mt-3">Separator banners in two weights: thin (3px) rule lines and medium (8px) solid dividers.</p>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-6">
                    <h3 class="font-head font-semibold text-white mb-5">Thin Banners (3px)</h3>
                    <div class="space-y-4">
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-thin-champagne</p><x-ui.banner-thin-champagne /></div>
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-thin-navy</p><x-ui.banner-thin-navy /></div>
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-thin-signal</p><x-ui.banner-thin-signal /></div>
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-thin-cloud</p><x-ui.banner-thin-cloud /></div>
                    </div>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-6">
                    <h3 class="font-head font-semibold text-white mb-4">Navigation Wrap Pattern</h3>
                    <div class="border border-white/10 overflow-hidden">
                        <x-ui.banner-thin-champagne />
                        <div class="bg-navy-dark text-muted text-center py-2 text-xs font-head font-semibold">Notification Bar &nbsp;&middot;&nbsp; Open 24/7 &nbsp;&middot;&nbsp; (815) 585-6922</div>
                        <x-ui.banner-thin-champagne />
                        <x-ui.banner-thin-navy />
                        <div class="bg-navy text-white text-center py-4 text-sm font-head font-semibold">Stop &amp; Go Limo &nbsp;&middot;&nbsp; Navigation Bar</div>
                        <x-ui.banner-thin-navy />
                        <x-ui.banner-thin-champagne />
                        <div class="bg-navy-dark text-muted text-center py-5 text-xs">Page content begins below</div>
                        <x-ui.banner-thin-champagne />
                    </div>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-6">
                    <h3 class="font-head font-semibold text-white mb-5">Medium Banners (8px)</h3>
                    <div class="space-y-4">
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-medium-champagne</p><x-ui.banner-medium-champagne /></div>
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-medium-navy</p><x-ui.banner-medium-navy /></div>
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-medium-signal</p><x-ui.banner-medium-signal /></div>
                        <div><p class="text-muted text-xs mb-1 font-mono">x-ui.banner-medium-cloud</p><x-ui.banner-medium-cloud /></div>
                    </div>
                </div>

                <div class="bg-navy-dark px-6 py-5 border border-white/8">
                    <p class="font-mono text-champagne text-xs mb-1">x-ui.banner-thin-* &amp; x-ui.banner-medium-* &mdash; resources/views/components/ui/banner-*.blade.php</p>
                    <pre class="font-mono text-cloud/70 text-xs bg-black/20 px-3 py-2 mt-3 overflow-x-auto whitespace-pre-wrap">&lt;x-ui.banner-thin-champagne /&gt;
&lt;x-ui.banner-thin-navy /&gt;
&lt;x-ui.banner-medium-champagne /&gt;
{{-- No aspect ratio: banners are full-width, fixed height (3px thin, 8px medium) --}}</pre>
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 06 Typography ──────────────────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">06 &mdash; Typography</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Typography</h2>
                    <p class="text-muted-light mt-3">Headings in <strong class="text-champagne">Poppins</strong>, body in <strong class="text-champagne">Montserrat</strong>. Both loaded from Google Fonts.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-5 mb-8">
                    <div class="bg-navy-light border border-white/8 p-7">
                        <p class="font-head text-xs tracking-widest text-champagne mb-3">Display / Headings</p>
                        <p class="font-head text-5xl font-bold text-white mb-2">Poppins</p>
                        <p class="text-muted text-sm">Geometric sans-serif &bull; weights 300-800 &bull; all H1-H5, buttons, and nav</p>
                        <p class="font-mono text-xs text-champagne mt-3">font-head &bull; Tailwind: font-family: head</p>
                    </div>
                    <div class="bg-navy-light border border-white/8 p-7">
                        <p class="font-body text-xs tracking-widest text-champagne mb-3">Body / Text</p>
                        <p class="font-body text-5xl font-medium text-white mb-2">Montserrat</p>
                        <p class="text-muted text-sm">Humanist sans-serif &bull; weights 300-700 &bull; body, captions, and UI labels</p>
                        <p class="font-mono text-xs text-champagne mt-3">font-body &bull; Tailwind: font-family: body</p>
                    </div>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-6">
                    <h3 class="font-head font-semibold text-white mb-6">Type Scale</h3>
                    <div class="space-y-5 divide-y divide-white/6">
                        <div class="pb-5"><p class="text-muted text-xs font-mono mb-2">H1 &bull; Poppins &bull; 48px &bull; ExtraBold &bull; LH 1.2</p><p class="font-head font-extrabold text-5xl text-white">Travel in Style</p></div>
                        <div class="py-5"><p class="text-muted text-xs font-mono mb-2">H2 &bull; Poppins &bull; 38px &bull; Bold &bull; LH 1.2</p><p class="font-head font-bold text-4xl text-white">Section Title</p></div>
                        <div class="py-5"><p class="text-muted text-xs font-mono mb-2">H3 &bull; Poppins &bull; 30px &bull; SemiBold &bull; LH 1.3</p><p class="font-head font-semibold text-3xl text-white">Subsection Heading</p></div>
                        <div class="py-5"><p class="text-muted text-xs font-mono mb-2">H4 &bull; Poppins &bull; 24px &bull; SemiBold &bull; Champagne accent</p><p class="font-head font-semibold text-2xl text-champagne">Card Title in Champagne</p></div>
                        <div class="py-5"><p class="text-muted text-xs font-mono mb-2">H5 &bull; Poppins &bull; 20px &bull; SemiBold</p><p class="font-head font-semibold text-xl text-white">Minor Heading</p></div>
                        <div class="py-5"><p class="text-muted text-xs font-mono mb-2">Lead &bull; Montserrat &bull; 21px &bull; Regular</p><p class="font-body text-xl text-cloud">Premier luxury limousine and airport shuttle service across New Lenox, Naperville, and the greater Chicagoland southwest suburbs.</p></div>
                        <div class="py-5"><p class="text-muted text-xs font-mono mb-2">Body &bull; Montserrat &bull; 17px &bull; Regular</p><p class="font-body text-base text-cloud">Our professional, courteous chauffeurs ensure a seamless journey, from elegant weddings and proms to O'Hare and Midway airport transfers, every ride is handled with care.</p></div>
                        <div class="pt-5"><p class="text-muted text-xs font-mono mb-2">Caption &bull; Montserrat &bull; 14px &bull; Regular</p><p class="font-body text-sm text-muted">Image caption or fine-print text styling.</p></div>
                    </div>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-6">
                    <h3 class="font-head font-semibold text-white mb-5">Font Weights</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                        @foreach([[300,'Light','Decorative use'],[400,'Regular','Body text'],[500,'Medium','Labels, emphasis'],[600,'SemiBold','Buttons, subheads'],[700,'Bold','Headings'],[800,'ExtraBold','Hero display']] as [$w,$name,$use])
                        <div class="bg-navy-dark border border-white/8 p-4">
                            <p class="font-head text-2xl text-white mb-1" style="font-weight:{{ $w }}">Aa</p>
                            <p class="text-cloud text-xs font-semibold">{{ $name }}</p>
                            <p class="text-muted text-xs">{{ $use }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-navy-dark px-6 py-5 border border-white/8">
                    <p class="font-mono text-champagne text-xs mb-2">Font family usage &mdash; tailwind.config.js &rarr; theme.extend.fontFamily</p>
                    <pre class="font-mono text-cloud/70 text-xs bg-black/20 px-3 py-2 overflow-x-auto whitespace-pre-wrap">&lt;h1 class="font-head font-extrabold"&gt;Main Heading&lt;/h1&gt;
&lt;p class="font-body"&gt;Body copy and supporting text.&lt;/p&gt;
{{-- font-head = Poppins, font-body = Montserrat --}}</pre>
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 07 Buttons ─────────────────────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">07 &mdash; Buttons</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Button Variations</h2>
                    <p class="text-muted-light mt-3">Squared edges throughout, no rounded corners. Each button renders as <code class="font-mono text-champagne text-sm">&lt;a&gt;</code> with href or <code class="font-mono text-champagne text-sm">&lt;button&gt;</code> otherwise.</p>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-5">
                    <h3 class="font-head font-semibold text-white mb-5">Primary Buttons</h3>
                    <div class="flex flex-wrap gap-4 items-start">
                        <div class="text-center"><x-ui.button-champagne-gradient href="#">Book a Ride</x-ui.button-champagne-gradient><p class="text-muted text-xs mt-2 font-mono">button-champagne-gradient</p></div>
                        <div class="text-center"><x-ui.button-champagne-solid href="#">Get a Quote</x-ui.button-champagne-solid><p class="text-muted text-xs mt-2 font-mono">button-champagne-solid</p></div>
                        <div class="text-center"><x-ui.button-champagne href="#">Reserve 24/7</x-ui.button-champagne><p class="text-muted text-xs mt-2 font-mono">button-champagne</p></div>
                        <div class="text-center"><x-ui.button-navy-gold href="#">Our Fleet</x-ui.button-navy-gold><p class="text-muted text-xs mt-2 font-mono">button-navy-gold</p></div>
                    </div>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-5">
                    <h3 class="font-head font-semibold text-white mb-5">Secondary Buttons</h3>
                    <div class="flex flex-wrap gap-4 items-start">
                        <div class="text-center"><x-ui.button-outline-champagne href="#">View Services</x-ui.button-outline-champagne><p class="text-muted text-xs mt-2 font-mono">button-outline-champagne</p></div>
                        <div class="text-center"><x-ui.button-white-navy href="#">Call Now</x-ui.button-white-navy><p class="text-muted text-xs mt-2 font-mono">button-white-navy</p></div>
                        <div class="text-center"><x-ui.button-outline-light href="#">Service Areas</x-ui.button-outline-light><p class="text-muted text-xs mt-2 font-mono">button-outline-light</p></div>
                        <div class="text-center"><x-ui.button-text-champagne href="#">View Rates</x-ui.button-text-champagne><p class="text-muted text-xs mt-2 font-mono">button-text-champagne</p></div>
                    </div>
                </div>

                <div class="bg-navy-light border border-white/8 p-7 mb-5">
                    <h3 class="font-head font-semibold text-white mb-5">Button Sizes</h3>
                    <div class="flex flex-wrap gap-4 items-center">
                        <x-ui.button-champagne-gradient href="#" class="!px-4 !py-2 !text-xs">Small</x-ui.button-champagne-gradient>
                        <x-ui.button-champagne-gradient href="#">Default</x-ui.button-champagne-gradient>
                        <x-ui.button-champagne-gradient href="#" class="!px-12 !py-5 !text-lg">Large</x-ui.button-champagne-gradient>
                    </div>
                </div>

                <div class="bg-cloud p-7 mb-5 border border-cloud-dark">
                    <h3 class="font-head font-semibold text-navy mb-5">On Light Surface (Cloud Grey)</h3>
                    <div class="flex flex-wrap gap-4 items-center">
                        <x-ui.button-champagne-solid href="#">Book a Ride</x-ui.button-champagne-solid>
                        <x-ui.button-navy-gold href="#" class="!bg-navy !border-navy/30 !text-navy">Get a Quote</x-ui.button-navy-gold>
                        <x-ui.button-text-champagne href="#">View Rates</x-ui.button-text-champagne>
                    </div>
                    <p class="text-muted-dark text-xs mt-4">On Cloud Grey or White sections, champagne-solid stays as the primary accent. Avoid outline-light on light surfaces.</p>
                </div>

                <div class="bg-navy-dark px-6 py-5 border border-white/8">
                    <p class="font-mono text-champagne text-xs mb-1">x-ui.button-* &mdash; resources/views/components/ui/button-*.blade.php</p>
                    <pre class="font-mono text-cloud/70 text-xs bg-black/20 px-3 py-2 mt-3 overflow-x-auto whitespace-pre-wrap">&lt;x-ui.button-champagne-gradient href="/bookings"&gt;Book a Ride&lt;/x-ui.button-champagne-gradient&gt;
&lt;x-ui.button-champagne href="/contact"&gt;Reserve 24/7&lt;/x-ui.button-champagne&gt;
&lt;x-ui.button-outline-champagne&gt;View Services&lt;/x-ui.button-outline-champagne&gt;
&lt;x-ui.button-text-champagne href="/rates"&gt;View Rates&lt;/x-ui.button-text-champagne&gt;
{{-- Size override via !-prefixed classes --}}
&lt;x-ui.button-champagne-gradient class="!px-4 !py-2 !text-xs"&gt;Small&lt;/x-ui.button-champagne-gradient&gt;
{{-- No aspect ratio: buttons are height-auto, width determined by text content --}}</pre>
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── 08 Navigation & Mega Menu ───────────────────────── --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <span class="font-head font-bold text-xs tracking-widest text-champagne">08 &mdash; Navigation</span>
                    <h2 class="font-head font-bold text-3xl text-white mt-2">Navigation &amp; Mega Menu</h2>
                    <p class="text-muted-light mt-3">Navy bar, Poppins links, champagne hover with a 3px underline. Three dropdown shapes: standard, two-column mega with nested Party Bus flyout, and a 22-city four-column areas grid. Hover to explore.</p>
                </div>

                <div class="sg-nav mb-2">
                    <div class="nav-notif">
                        <span>Open 24/7 &nbsp;&middot;&nbsp; New Lenox, Naperville, Joliet &amp; Chicago, IL</span>
                        <span><span class="n-phone">(815) 585-6922</span> &nbsp;|&nbsp; <span class="n-book">Book Online &rarr;</span></span>
                    </div>
                    <x-ui.banner-thin-champagne />
                    <x-ui.banner-thin-navy />
                    <div class="nav-bar">
                        <div class="nav-logo">Stop &amp; Go <span>Limo</span></div>
                        <div class="nav-item"><a href="#" class="nav-link active">Welcome</a></div>
                        <div class="nav-item">
                            <a href="#" class="nav-link">About <span class="caret">&#9660;</span></a>
                            <div class="dropdown">
                                <a href="#"><span class="d-title">About Us</span><span class="d-sub">Our story &amp; chauffeurs</span></a>
                                <a href="#"><span class="d-title">Rates</span><span class="d-sub">Transparent flat pricing</span></a>
                                <a href="#"><span class="d-title">Gallery</span><span class="d-sub">Our luxury fleet</span></a>
                            </div>
                        </div>
                        <div class="nav-item"><a href="#" class="nav-link">Booking</a></div>
                        <div class="nav-item">
                            <a href="#" class="nav-link">Services <span class="caret">&#9660;</span></a>
                            <div class="dropdown dropdown-mega">
                                <a href="#"><span class="d-title">Airport Shuttle</span><span class="d-sub">O'Hare &amp; Midway transfers</span></a>
                                <a href="#"><span class="d-title">Wedding Limousine</span><span class="d-sub">Elegant event transport</span></a>
                                <div class="has-flyout">
                                    <a href="#"><span class="d-title">Party Bus</span><span class="d-sub">Groups &amp; celebrations</span><span class="fcaret">&#9654;</span></a>
                                    <div class="flyout">
                                        <a href="#"><span class="d-title">Party Bus &mdash; Aurora</span></a>
                                        <a href="#"><span class="d-title">Party Bus &mdash; Naperville</span></a>
                                    </div>
                                </div>
                                <a href="#"><span class="d-title">Prom Party Bus</span><span class="d-sub">Safe prom-night transport</span></a>
                                <a href="#"><span class="d-title">New Bus Rental</span><span class="d-sub">Latest-model coaches</span></a>
                                <a href="#"><span class="d-title">Coach Buses</span><span class="d-sub">Large-group charters</span></a>
                                <a href="#"><span class="d-title">Limousine Services</span><span class="d-sub">Classic luxury limos</span></a>
                                <a href="#"><span class="d-title">Corporate Car Service</span><span class="d-sub">Executive ground service</span></a>
                                <a href="#"><span class="d-title">Town Car Services</span><span class="d-sub">Premium sedans</span></a>
                                <a href="#"><span class="d-title">Chauffeurs</span><span class="d-sub">Professional drivers</span></a>
                                <a href="#"><span class="d-title">Special Event Limousine</span><span class="d-sub">Any occasion</span></a>
                                <a href="#"><span class="d-title">Transportation Services</span><span class="d-sub">Point-to-point rides</span></a>
                                <a href="#"><span class="d-title">Grad Day Transportation</span><span class="d-sub">Graduation transport</span></a>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="#" class="nav-link">Special Events <span class="caret">&#9660;</span></a>
                            <div class="dropdown">
                                <a href="#"><span class="d-title">Six Flags Party Bus</span></a>
                                <a href="#"><span class="d-title">Golfing Party Bus</span></a>
                                <a href="#"><span class="d-title">Concert Party Bus Rental</span></a>
                                <a href="#"><span class="d-title">Chicago Bears Party &amp; Limo Bus</span></a>
                                <a href="#"><span class="d-title">Chicago Bulls Party Bus</span></a>
                                <a href="#"><span class="d-title">Chicago Blackhawks Party Bus</span></a>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="#" class="nav-link">Service Areas <span class="caret">&#9660;</span></a>
                            <div class="dropdown dropdown-areas">
                                <div class="areas-head">22 Chicagoland Southwest Suburbs &mdash; 24/7</div>
                                <a href="#"><span class="d-title">New Lenox</span></a>
                                <a href="#"><span class="d-title">Naperville</span></a>
                                <a href="#"><span class="d-title">Aurora</span></a>
                                <a href="#"><span class="d-title">North Aurora</span></a>
                                <a href="#"><span class="d-title">Plainfield</span></a>
                                <a href="#"><span class="d-title">Joliet</span></a>
                                <a href="#"><span class="d-title">Morris</span></a>
                                <a href="#"><span class="d-title">Minooka</span></a>
                                <a href="#"><span class="d-title">Channahon</span></a>
                                <a href="#"><span class="d-title">Elwood</span></a>
                                <a href="#"><span class="d-title">Romeoville</span></a>
                                <a href="#"><span class="d-title">Lockport</span></a>
                                <a href="#"><span class="d-title">Frankfort</span></a>
                                <a href="#"><span class="d-title">Mokena</span></a>
                                <a href="#"><span class="d-title">Orland Park</span></a>
                                <a href="#"><span class="d-title">Manhattan</span></a>
                                <a href="#"><span class="d-title">Homer Glen</span></a>
                                <a href="#"><span class="d-title">Lemont</span></a>
                                <a href="#"><span class="d-title">Monee</span></a>
                                <a href="#"><span class="d-title">Bolingbrook</span></a>
                                <a href="#"><span class="d-title">Oswego</span></a>
                                <a href="#"><span class="d-title">Montgomery</span></a>
                            </div>
                        </div>
                        <div class="nav-item"><a href="#" class="nav-link">Contact</a></div>
                    </div>
                    <x-ui.banner-thin-navy />
                    <x-ui.banner-thin-champagne />
                </div>

                <div class="sg-nav-states">
                    <div class="sg-nav-state">
                        <span class="font-head font-semibold text-sm text-cloud border-b-[3px] border-transparent pb-2 inline-block" style="text-transform:uppercase;letter-spacing:.04em">Services</span>
                        <p class="text-muted text-xs mt-3">Default</p>
                        <code class="font-mono text-xs text-champagne">#E8E9EC &bull; transparent rule</code>
                    </div>
                    <div class="sg-nav-state">
                        <span class="font-head font-semibold text-sm text-champagne border-b-[3px] border-champagne pb-2 inline-block" style="text-transform:uppercase;letter-spacing:.04em">Services</span>
                        <p class="text-muted text-xs mt-3">Hover</p>
                        <code class="font-mono text-xs text-champagne">#DCB57E &bull; champagne rule</code>
                    </div>
                    <div class="sg-nav-state">
                        <span class="font-head font-semibold text-sm text-champagne border-b-[3px] border-champagne pb-2 inline-block" style="text-transform:uppercase;letter-spacing:.04em">Welcome</span>
                        <p class="text-muted text-xs mt-3">Active / Current</p>
                        <code class="font-mono text-xs text-champagne">#DCB57E &bull; champagne rule</code>
                    </div>
                </div>

                <p class="sg-nav-hint">Dropdown panels: <code class="font-mono" style="color:var(--champagne)">#252235</code> surface, 3px champagne top border, left-edge champagne accent on item hover. Services uses a two-column mega with a nested Party Bus flyout. Service Areas uses a four-column grid for all 22 cities.</p>

                <div class="bg-navy-dark px-6 py-5 border border-white/8 mt-6">
                    <p class="font-mono text-champagne text-xs mb-1">x-nav.navbar &mdash; resources/views/components/nav/navbar.blade.php (coming soon)</p>
                    <p class="font-mono text-muted text-xs mb-3">CSS: .sg-nav scope &mdash; resources/css/app.css</p>
                    <pre class="font-mono text-cloud/70 text-xs bg-black/20 px-3 py-2 overflow-x-auto whitespace-pre-wrap">&lt;div class="sg-nav"&gt;
  &lt;div class="nav-notif"&gt;...&lt;/div&gt;
  &lt;div class="nav-bar"&gt;
    &lt;div class="nav-item"&gt;
      &lt;a href="#" class="nav-link active"&gt;Welcome&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="nav-item"&gt;
      &lt;a href="#" class="nav-link"&gt;Services &lt;span class="caret"&gt;&amp;#9660;&lt;/span&gt;&lt;/a&gt;
      &lt;div class="dropdown dropdown-mega"&gt;
        &lt;div class="has-flyout"&gt;
          &lt;a href="#"&gt;&lt;span class="d-title"&gt;Party Bus&lt;/span&gt;&lt;span class="fcaret"&gt;&amp;#9654;&lt;/span&gt;&lt;/a&gt;
          &lt;div class="flyout"&gt;...&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="nav-item"&gt;
      &lt;a href="#" class="nav-link"&gt;Service Areas &lt;span class="caret"&gt;&amp;#9660;&lt;/span&gt;&lt;/a&gt;
      &lt;div class="dropdown dropdown-areas"&gt;
        &lt;div class="areas-head"&gt;22 Chicagoland Southwest Suburbs&lt;/div&gt;
        &lt;a href="#"&gt;&lt;span class="d-title"&gt;New Lenox&lt;/span&gt;&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
{{-- No aspect ratio: nav is full-width, height auto --}}</pre>
                </div>
            </div>
        </section>
        <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

        {{-- ── Brand Personality / Closing ───────────────────── --}}
        <section class="py-16 bg-grad-navy-to-gold">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="font-head font-bold text-3xl text-white mb-4">Brand Personality</h2>
                <p class="text-cloud/80 max-w-2xl mx-auto mb-4"><strong class="text-champagne">Midnight Navy (#15162C):</strong> The foundation. Deep, authoritative, and refined. It signals trust and premium quality without saying a word.</p>
                <p class="text-cloud/80 max-w-2xl mx-auto mb-8"><strong class="text-champagne">Champagne Gold (#DCB57E):</strong> The accent. Warm, understated luxury. Not flashy, not cheap, but the kind of gold that belongs in a first-class cabin.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <x-ui.button-champagne-gradient href="tel:+18155856922">Call (815) 585-6922</x-ui.button-champagne-gradient>
                    <x-ui.button-outline-light href="/demo/premium">View Premium Components</x-ui.button-outline-light>
                </div>
            </div>
        </section>


</x-layouts.page>
