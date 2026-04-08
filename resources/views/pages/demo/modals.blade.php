<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Modal System Demo | Top 5 Percent</title>
    <meta name="robots" content="noindex, nofollow">
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile  = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile   = $manifest['resources/js/app.js']['file']  ?? null;
    @endphp
    @if($cssFile)
        <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
        <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
</head>
<body class="font-sans antialiased bg-linen text-charcoal">

<x-layout.top-notification-bar message="Modal System Demo — Internal Only" />
<x-ui.banner-thin-sunburst />
<x-ui.banner-thin-charcoal />
<x-layout.navigation-bar currentPage="demo" />
<x-ui.banner-thin-sunburst />
<x-ui.banner-thin-charcoal />

<main class="max-w-5xl mx-auto px-6 py-16 space-y-20">

    {{-- ── Page header ────────────────────────────────────────────────── --}}
    <div class="text-center">
        <div class="inline-block mb-4">
            <h1 class="text-4xl font-bold text-charcoal mb-2">Modal System</h1>
            <div class="h-1 bg-sunburst"></div>
        </div>
        <p class="text-charcoal-light text-lg max-w-2xl mx-auto">
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.modal</code>,
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.modal-trigger</code>,
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.modal-wizard</code>,
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.contact-modal</code>, and
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.custom-request-wizard</code>
            — all variants live below.
        </p>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 1: Variants --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Variants</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">Six visual themes — each driven by the <code>variant</code> prop.</p>

        <div class="flex flex-wrap gap-3">
            <x-ui.modal-trigger modal="demo-default"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Default
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-dark"
                class="px-5 py-2.5 bg-charcoal text-white text-sm font-semibold hover:bg-charcoal-dark transition-colors">
                Dark
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-gold"
                class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Gold
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-success"
                class="px-5 py-2.5 bg-success text-white text-sm font-semibold hover:opacity-90 transition-opacity">
                Success
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-warning"
                class="px-5 py-2.5 bg-warning text-charcoal text-sm font-semibold hover:opacity-90 transition-opacity">
                Warning
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-danger"
                class="px-5 py-2.5 bg-error text-white text-sm font-semibold hover:opacity-90 transition-opacity">
                Danger
            </x-ui.modal-trigger>
        </div>
    </section>

    {{-- Variant modals --}}
    <x-ui.modal name="demo-default" title="Default Variant" variant="default" size="md">
        <p>White body, linen header, gold stripe. The standard modal for forms and general content.</p>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-default">Cancel</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>Confirm</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-dark" title="Dark Variant" variant="dark" size="md">
        <p>Charcoal body, dark header, gold accents. Great for emphasis or nighttime aesthetics.</p>
        <x-slot:footer>
            <x-ui.modal-trigger modal="demo-dark" as="close"
                class="px-4 py-2 text-sm font-semibold text-[#aaa] border border-white/20 hover:bg-white/10 transition-colors">
                Cancel
            </x-ui.modal-trigger>
            <x-ui.button-modal-primary>Confirm</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-gold" title="Gold Variant" variant="gold" size="md">
        <p>Linen body, deep gold gradient header. Use for premium or featured announcements.</p>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-gold">Dismiss</x-ui.button-modal-cancel>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-success" title="Success Variant" variant="success" size="md">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"/>
            </svg>
        </x-slot:icon>
        <p>Your order has been submitted successfully. We'll follow up within one business day.</p>
        <x-slot:footer>
            <x-ui.modal-trigger modal="demo-success" as="close"
                class="px-5 py-2 bg-success text-white text-sm font-semibold hover:opacity-90 transition-opacity">
                Done
            </x-ui.modal-trigger>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-warning" title="Warning Variant" variant="warning" size="md">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                <line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/>
            </svg>
        </x-slot:icon>
        <p>Your session is about to expire. Save your progress before the page reloads.</p>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-warning">Dismiss</x-ui.button-modal-cancel>
            <button class="px-5 py-2 bg-warning text-charcoal text-sm font-semibold hover:opacity-90 transition-opacity">
                Keep Working
            </button>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-danger" title="Danger Variant" variant="danger" size="md">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
            </svg>
        </x-slot:icon>
        <p>This action cannot be undone. Are you sure you want to permanently delete this item?</p>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-danger">Cancel</x-ui.button-modal-cancel>
            <button class="px-5 py-2 bg-error text-white text-sm font-semibold hover:opacity-90 transition-opacity">
                Delete Permanently
            </button>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 2: Sizes --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Sizes</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">Five presets via the <code>size</code> prop.</p>

        <div class="flex flex-wrap gap-3">
            @foreach(['sm' => 'SM — 22rem', 'md' => 'MD — 34rem (default)', 'lg' => 'LG — 46rem', 'xl' => 'XL — 58rem', 'full' => 'Full — 95vw'] as $sz => $label)
                <x-ui.modal-trigger modal="demo-size-{{ $sz }}"
                    class="px-5 py-2.5 bg-white border border-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors shadow-sm">
                    {{ $label }}
                </x-ui.modal-trigger>
            @endforeach
        </div>
    </section>

    @foreach(['sm' => 'SM — Small (22rem)', 'md' => 'MD — Medium (34rem)', 'lg' => 'LG — Large (46rem)', 'xl' => 'XL — Extra Large (58rem)', 'full' => 'Full — 95vw Canvas'] as $sz => $label)
        <x-ui.modal name="demo-size-{{ $sz }}" title="{{ $label }}" size="{{ $sz }}">
            <p class="text-charcoal-light text-sm">
                This modal uses <code>size="{{ $sz }}"</code>.
                Use <strong>sm</strong> for alerts and confirmations,
                <strong>md</strong> for standard forms (default),
                <strong>lg</strong> for rich content or galleries,
                <strong>xl</strong> for wide tables or media,
                and <strong>full</strong> for canvas-style interfaces.
            </p>
            <x-slot:footer>
                <x-ui.button-modal-cancel modal="demo-size-{{ $sz }}">Close</x-ui.button-modal-cancel>
            </x-slot:footer>
        </x-ui.modal>
    @endforeach

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 3: Dismissible & non-dismissible --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Dismissible Control</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">Set <code>:dismissible="false"</code> to require an explicit action.</p>

        <div class="flex flex-wrap gap-3">
            <x-ui.modal-trigger modal="demo-dismiss-yes"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Dismissible (default)
            </x-ui.modal-trigger>
            <x-ui.modal-trigger modal="demo-dismiss-no"
                class="px-5 py-2.5 bg-charcoal text-white text-sm font-semibold hover:bg-charcoal-dark transition-colors">
                Non-dismissible
            </x-ui.modal-trigger>
        </div>
    </section>

    <x-ui.modal name="demo-dismiss-yes" title="Dismissible Modal" :dismissible="true">
        <p>You can close this by clicking the ✕ button, pressing Escape, or clicking outside the panel.</p>
    </x-ui.modal>

    <x-ui.modal name="demo-dismiss-no" title="Non-dismissible Modal" :dismissible="false">
        <p>There is no ✕ button and clicking outside the panel does nothing. You must use the button below.</p>
        <x-slot:footer>
            <x-ui.button-modal-primary modal="demo-dismiss-no">I Acknowledge</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 4: Slots --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Slot Patterns</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">Icon slot, full header override, rich footer — and the title slot for dynamic HTML headings.</p>

        <div class="flex flex-wrap gap-3">
            <x-ui.modal-trigger modal="demo-icon-slot"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Icon Slot
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-header-override"
                class="px-5 py-2.5 bg-azure text-white text-sm font-semibold hover:bg-azure-dark transition-colors">
                Full Header Override
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-rich-footer"
                class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Rich Footer
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-title-slot"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Title Slot
            </x-ui.modal-trigger>
        </div>
    </section>

    <x-ui.modal name="demo-icon-slot" title="Quote Request Received" variant="success">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"/>
            </svg>
        </x-slot:icon>
        <p>The icon slot places any SVG or element to the left of the title in the header bar.</p>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-icon-slot">Close</x-ui.button-modal-cancel>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-header-override">
        <x-slot:header>
            <div class="flex items-center gap-3 px-5 py-4 bg-azure border-b-2 border-azure-dark">
                <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 7 10-7"/>
                </svg>
                <h2 class="flex-1 text-lg font-bold text-white">Custom Header Slot</h2>
                <x-ui.modal-trigger modal="demo-header-override" as="close"
                    class="flex items-center justify-center w-8 h-8 text-white/70 hover:bg-white/10 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18M6 6l12 12"/>
                    </svg>
                </x-ui.modal-trigger>
            </div>
        </x-slot:header>
        <p>The <code>$header</code> slot replaces the entire header region — title, icon, close button — giving you full layout control.</p>
    </x-ui.modal>

    <x-ui.modal name="demo-rich-footer" title="Rich Footer Example" variant="gold">
        <p>The footer slot is flex row, right-aligned. Put any mix of buttons, links, or text.</p>
        <x-slot:footer>
            <a href="#" class="text-sm text-azure hover:text-azure-dark transition-colors font-medium mr-auto">Learn more →</a>
            <x-ui.button-modal-cancel modal="demo-rich-footer">Cancel</x-ui.button-modal-cancel>
            <button class="px-5 py-2 bg-charcoal text-white text-sm font-semibold hover:bg-charcoal-dark transition-colors">
                Save Draft
            </button>
            <x-ui.button-modal-primary>Submit Order</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-title-slot">
        <x-slot:title>
            <span class="text-azure">Dynamic</span> Title with <em>HTML</em>
        </x-slot:title>
        <p>The <code>$title</code> slot lets you inject arbitrary HTML into the heading — useful for badge labels, colored fragments, or icons inline with the text.</p>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-title-slot">Close</x-ui.button-modal-cancel>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 5: Trigger variants --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Trigger Element Types</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">
            <code>x-ui.modal-trigger</code> can render as a <code>button</code>, <code>a</code>, <code>div</code>, or <code>span</code>.
        </p>

        <div class="flex flex-wrap items-center gap-4">
            <x-ui.modal-trigger modal="demo-trigger-types"
                class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                as="button" (default)
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-trigger-types" as="a" href="#"
                class="text-azure hover:text-azure-dark font-semibold text-sm underline underline-offset-2 transition-colors">
                as="a"
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-trigger-types" as="span"
                class="cursor-pointer text-sm font-semibold text-charcoal-light hover:text-charcoal border-b border-dashed border-charcoal-lighter transition-colors">
                as="span"
            </x-ui.modal-trigger>
        </div>
    </section>

    <x-ui.modal name="demo-trigger-types" title="Trigger Element Types" size="sm">
        <p>This modal was opened by a <code>button</code>, <code>a</code>, or <code>span</code> — all using the same <code>modal="demo-trigger-types"</code> prop.</p>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-trigger-types">Close</x-ui.button-modal-cancel>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 6: Use-Case Patterns --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Use-Case Patterns</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">
            Real-world modal patterns — promotional alerts, long forms, scrollable agreements.
        </p>

        <div class="flex flex-wrap gap-3">
            <x-ui.modal-trigger modal="demo-promo"
                class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Promotional Alert
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-long-form"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Long Form
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-terms"
                class="px-5 py-2.5 bg-charcoal text-white text-sm font-semibold hover:bg-charcoal-dark transition-colors">
                Terms & Conditions
            </x-ui.modal-trigger>
        </div>
    </section>

    {{-- Promo modal — full header override with badge-style branding --}}
    <x-ui.modal name="demo-promo" size="md">
        <x-slot:header>
            <div class="h-2 flex-shrink-0" style="background:linear-gradient(90deg,#FFC20E 0%,#FFD93D 100%);"></div>
            <div class="flex items-start gap-3 px-5 py-4 bg-charcoal border-b-2" style="border-bottom-color:#FFC20E;">
                <div class="flex items-center justify-center w-12 h-12 flex-shrink-0" style="background:rgba(255,194,14,0.15);">
                    <svg class="w-6 h-6 text-sunburst" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <h2 class="text-lg font-bold text-white leading-tight">Deal of the Day</h2>
                    <p class="text-white/60 text-xs mt-0.5">Expires at midnight · Joliet, IL</p>
                </div>
                <x-ui.modal-trigger modal="demo-promo" as="close"
                    class="flex items-center justify-center w-8 h-8 text-white/50 hover:text-white hover:bg-white/10 transition-colors flex-shrink-0 mt-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18M6 6l12 12"/>
                    </svg>
                </x-ui.modal-trigger>
            </div>
        </x-slot:header>

        <div class="flex items-center gap-3 p-4 bg-linen-dark border border-linen-dark">
            <svg class="w-8 h-8 text-azure flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.38 3.46 16 2a4 4 0 01-8 0L3.62 3.46a2 2 0 00-1.34 2.23l.58 3.57a1 1 0 00.99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 002-2V10h2.15a1 1 0 00.99-.84l.58-3.57a2 2 0 00-1.34-2.23z"/>
            </svg>
            <div>
                <p class="font-bold text-charcoal text-sm">20% Off All Custom T-Shirts</p>
                <p class="text-charcoal-light text-xs mt-0.5">Use code <span class="font-mono font-bold text-charcoal">JOLIET20</span> at checkout</p>
            </div>
        </div>

        <p class="mt-4 text-charcoal-light text-sm">
            The <code class="text-xs bg-linen-dark px-1 py-0.5">$header</code> slot replaces the entire header block — full control over layout, branding treatments, multi-line content, or custom badge patterns.
        </p>

        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-promo">No Thanks</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>Shop Now →</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- Long form modal — multi-field quote/sample request --}}
    <x-ui.modal name="demo-long-form" title="Request a Sample Pack" size="lg">
        <form class="space-y-4" @submit.prevent>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">First Name</label>
                    <input type="text" placeholder="Maria"
                        class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm placeholder:text-charcoal-lighter focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Last Name</label>
                    <input type="text" placeholder="Rodriguez"
                        class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm placeholder:text-charcoal-lighter focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors">
                </div>
            </div>
            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Email Address</label>
                <input type="email" placeholder="maria@example.com"
                    class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm placeholder:text-charcoal-lighter focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors">
            </div>
            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Phone Number</label>
                <input type="tel" placeholder="(815) 555-0100"
                    class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm placeholder:text-charcoal-lighter focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors">
            </div>
            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">What are you interested in?</label>
                <select class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors">
                    <option value="">Select a category…</option>
                    <option>Custom Apparel</option>
                    <option>Business Signs</option>
                    <option>Vehicle Graphics</option>
                    <option>Decals &amp; Stickers</option>
                    <option>Promotional Items</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Additional Notes</label>
                <textarea rows="3" placeholder="Tell us about your project — quantity, timeline, or any special requirements."
                    class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm placeholder:text-charcoal-lighter focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors resize-none"></textarea>
            </div>
        </form>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-long-form">Cancel</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>Request Sample Pack</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- T&C scrollable modal --}}
    <x-ui.modal name="demo-terms" title="Terms & Conditions" size="lg" :dismissible="false" maxHeight="80dvh">
        <div class="space-y-4 text-sm text-charcoal leading-relaxed">
            <p>Welcome to Top 5 Percent. By using our services, you agree to the following terms and conditions. Please read them carefully before placing an order.</p>
            <hr class="border-linen-dark">
            <div>
                <p class="font-bold mb-1">1. Order Processing</p>
                <p class="text-charcoal-light">All orders are subject to review before production begins. We reserve the right to contact you for design clarification or file quality concerns. Production begins only after written or digital approval.</p>
            </div>
            <div>
                <p class="font-bold mb-1">2. Design Ownership</p>
                <p class="text-charcoal-light">Customers submitting original artwork retain full ownership of their designs. By submitting files to Top 5 Percent, you grant us a limited license to reproduce your design solely for the purpose of fulfilling your order.</p>
            </div>
            <div>
                <p class="font-bold mb-1">3. Turnaround Times</p>
                <p class="text-charcoal-light">Standard production is 7–10 business days from approval. Rush orders may be available for an additional fee. Holidays and high-volume periods may extend turnaround times.</p>
            </div>
            <div>
                <p class="font-bold mb-1">4. Returns &amp; Refunds</p>
                <p class="text-charcoal-light">Custom products are non-refundable unless there is a production defect or error on our part. We will work with you to resolve any quality concerns within 7 days of delivery.</p>
            </div>
            <div>
                <p class="font-bold mb-1">5. Payment Terms</p>
                <p class="text-charcoal-light">Full payment is due before production begins. We accept all major credit cards, ACH bank transfer, and cash for in-person orders. Net terms are available for established accounts.</p>
            </div>
            <div>
                <p class="font-bold mb-1">6. Limitation of Liability</p>
                <p class="text-charcoal-light">Top 5 Percent is not liable for indirect, incidental, or consequential damages arising from use of our products. Our total liability shall not exceed the amount paid for the order in question.</p>
            </div>
        </div>
        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-terms">Decline</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>I Agree</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 7: Workflow Wizard --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Workflow Wizard</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">
            <code>x-ui.modal-wizard</code> — multi-step non-dismissible flow with dot indicators and Back/Next/Finish navigation.
            No close button, no backdrop dismiss, no Escape key.
        </p>

        <div class="flex flex-wrap gap-3">
            <x-ui.modal-trigger modal="demo-wizard-onboard"
                class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Quick Setup Wizard (3 steps)
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-wizard-cancel"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Wizard with Cancel Link
            </x-ui.modal-trigger>
        </div>

        <div class="mt-5 bg-linen-dark border-l-4 border-charcoal-lighter px-4 py-3 text-sm text-charcoal-light">
            <strong class="text-charcoal">Usage:</strong>
            <code class="block mt-2 text-xs font-mono whitespace-pre-wrap leading-relaxed">
&lt;x-ui.modal-wizard
    name="my-wizard"
    step1Title="Welcome"
    step2Title="Choose Your Preference"
    step3Title="You're All Set"
    finishLabel="Done"
&gt;
    &lt;x-slot:step1&gt;…&lt;/x-slot:step1&gt;
    &lt;x-slot:step2&gt;…&lt;/x-slot:step2&gt;
    &lt;x-slot:step3&gt;…&lt;/x-slot:step3&gt;
&lt;/x-ui.modal-wizard&gt;
            </code>
        </div>
    </section>

    {{-- Wizard: Quick Setup (no cancel) --}}
    <x-ui.modal-wizard
        name="demo-wizard-onboard"
        step1Title="Welcome! Quick Setup"
        step2Title="Choose Your Preference"
        step3Title="You're All Set!"
        finishLabel="Done"
    >
        <x-slot:step1>
            <p class="text-charcoal-light">
                No close button, no backdrop dismiss — the user must complete the flow.
                Useful for mandatory onboarding steps, required agreements, or critical setup wizards.
            </p>
            <p class="text-charcoal-light mt-3">
                The Escape key is also disabled for this variant.
            </p>
        </x-slot:step1>

        <x-slot:step2>
            <p class="text-charcoal-light mb-4">Select your preferred contact method so we can follow up on your order:</p>
            <div class="flex gap-2" x-data="{ contact: 'phone' }">

                <label
                    :class="contact === 'email' ? 'border-sunburst bg-sunburst/10' : 'border-linen-dark bg-white hover:border-sunburst hover:bg-linen'"
                    class="flex-1 flex flex-col items-center gap-1.5 px-2 py-4 border-2 cursor-pointer text-center transition-colors"
                >
                    <input type="radio" name="demo_contact" value="email" class="sr-only" @change="contact = 'email'">
                    <span class="text-sm font-bold text-charcoal">Email</span>
                    <span class="my-1.5 w-5 h-5 border-2 rounded-full flex items-center justify-center transition-colors"
                        :class="contact === 'email' ? 'border-sunburst' : 'border-linen-dark'">
                        <span class="w-2.5 h-2.5 bg-sunburst rounded-full transition-opacity"
                            :class="contact === 'email' ? 'opacity-100' : 'opacity-0'"></span>
                    </span>
                    <span class="text-xs text-charcoal-light leading-snug">Inbox<br>notification</span>
                </label>

                <label
                    :class="contact === 'phone' ? 'border-sunburst bg-sunburst/10' : 'border-linen-dark bg-white hover:border-sunburst hover:bg-linen'"
                    class="flex-1 flex flex-col items-center gap-1.5 px-2 py-4 border-2 cursor-pointer text-center transition-colors"
                >
                    <input type="radio" name="demo_contact" value="phone" class="sr-only" @change="contact = 'phone'" checked>
                    <span class="text-sm font-bold text-charcoal">Phone</span>
                    <span class="my-1.5 w-5 h-5 border-2 rounded-full flex items-center justify-center transition-colors"
                        :class="contact === 'phone' ? 'border-sunburst' : 'border-linen-dark'">
                        <span class="w-2.5 h-2.5 bg-sunburst rounded-full transition-opacity"
                            :class="contact === 'phone' ? 'opacity-100' : 'opacity-0'"></span>
                    </span>
                    <span class="text-xs text-charcoal-light leading-snug">We'll call<br>you</span>
                </label>

                <label
                    :class="contact === 'text' ? 'border-sunburst bg-sunburst/10' : 'border-linen-dark bg-white hover:border-sunburst hover:bg-linen'"
                    class="flex-1 flex flex-col items-center gap-1.5 px-2 py-4 border-2 cursor-pointer text-center transition-colors"
                >
                    <input type="radio" name="demo_contact" value="text" class="sr-only" @change="contact = 'text'">
                    <span class="text-sm font-bold text-charcoal">Text</span>
                    <span class="my-1.5 w-5 h-5 border-2 rounded-full flex items-center justify-center transition-colors"
                        :class="contact === 'text' ? 'border-sunburst' : 'border-linen-dark'">
                        <span class="w-2.5 h-2.5 bg-sunburst rounded-full transition-opacity"
                            :class="contact === 'text' ? 'opacity-100' : 'opacity-0'"></span>
                    </span>
                    <span class="text-xs text-charcoal-light leading-snug">Quick SMS<br>update</span>
                </label>

            </div>
        </x-slot:step2>

        <x-slot:step3>
            <div class="text-center py-4">
                <div class="flex items-center justify-center w-14 h-14 mx-auto mb-4" style="background:rgba(76,175,80,0.12);">
                    <svg class="w-7 h-7 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-charcoal mb-2">Setup Complete!</h3>
                <p class="text-charcoal-light text-sm">
                    Your preferences have been saved. We'll reach out using your selected contact method when your order is ready.
                </p>
            </div>
        </x-slot:step3>
    </x-ui.modal-wizard>

    {{-- Wizard: With cancel link --}}
    <x-ui.modal-wizard
        name="demo-wizard-cancel"
        step1Title="Before You Continue"
        step2Title="Confirm Your Details"
        step3Title="Submission Complete"
        finishLabel="Submit"
        cancelLabel="Cancel"
    >
        <x-slot:step1>
            <p class="text-charcoal-light">
                This wizard has a <strong class="text-charcoal">Cancel</strong> link on step 1, letting the user opt out before they invest time in the flow.
                Steps 2 and 3 remove the cancel option — they can only go back or finish.
            </p>
            <p class="text-charcoal-light mt-3 text-sm">
                Set <code>cancelLabel="Cancel"</code> on the component to enable it.
                Leave it empty (default) for a strict no-exit flow.
            </p>
        </x-slot:step1>

        <x-slot:step2>
            <div class="space-y-3">
                <div>
                    <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Your Name</label>
                    <input type="text" placeholder="Full name"
                        class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Email</label>
                    <input type="email" placeholder="you@example.com"
                        class="w-full px-3 py-2 border border-linen-dark bg-white text-charcoal text-sm focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst transition-colors">
                </div>
            </div>
        </x-slot:step2>

        <x-slot:step3>
            <div class="text-center py-4">
                <div class="flex items-center justify-center w-14 h-14 mx-auto mb-4 bg-linen-dark">
                    <svg class="w-7 h-7 text-sunburst" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.07 11.5a19.79 19.79 0 01-3.07-8.67A2 2 0 013 .82h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 8a16 16 0 006.29 6.29l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 15.27l-.08 1.65z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-charcoal mb-2">We'll Be in Touch</h3>
                <p class="text-charcoal-light text-sm">Your submission is confirmed. Expect a call or email within one business day.</p>
            </div>
        </x-slot:step3>
    </x-ui.modal-wizard>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 9: Dropdown Selection Modal --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Dropdown Selection</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">
            Branded custom dropdown built with Alpine.js — no native <code>&lt;select&gt;</code> arrow styling hacks required.
            Uses <code>border-sunburst</code> focus, <code>bg-linen</code> hover, and a sunburst left-border accent on the active option.
        </p>

        <div class="flex flex-wrap gap-3">
            <x-ui.modal-trigger modal="demo-dropdown-single"
                class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Single Select
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-dropdown-grouped"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Grouped Options
            </x-ui.modal-trigger>
        </div>
    </section>

    {{-- Dropdown: Single Select --}}
    <x-ui.modal name="demo-dropdown-single" title="Select Product Type" size="sm" variant="default" bodyClass="py-6">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/>
            </svg>
        </x-slot:icon>

        <div
            class="space-y-5"
            x-data="{
                open: false,
                selected: null,
                options: [
                    { value: 'dtf',       label: 'DTF Transfers',      desc: 'Direct-to-film heat transfers' },
                    { value: 'screen',    label: 'Screen Print',        desc: 'Traditional multi-colour print' },
                    { value: 'embroid',   label: 'Embroidery',          desc: 'Thread-stitched logo or text' },
                    { value: 'vinyl',     label: 'Vinyl Decals',        desc: 'Cut vinyl for signs & vehicles' },
                    { value: 'sublim',    label: 'Sublimation',         desc: 'Full-colour all-over print' },
                    { value: 'signs',     label: 'Business Signs',      desc: 'Exterior & interior signage' },
                ],
                get selectedLabel() {
                    return this.selected
                        ? this.options.find(o => o.value === this.selected)?.label
                        : null;
                }
            }"
            @keydown.escape="open = false"
        >
            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                    Product Category <span class="text-error">*</span>
                </label>

                {{-- Trigger --}}
                <button
                    type="button"
                    @click="open = !open"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm border bg-white transition-colors"
                    :class="open ? 'border-sunburst ring-1 ring-sunburst/50' : 'border-linen-dark hover:border-charcoal-lighter'"
                >
                    <span :class="selected ? 'text-charcoal' : 'text-charcoal-lighter'" x-text="selectedLabel ?? 'Choose a product type…'"></span>
                    <svg class="w-4 h-4 text-charcoal-light flex-shrink-0 transition-transform duration-150" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                {{-- Option list — inline (no absolute), no clipping issues --}}
                <div
                    x-show="open"
                    x-cloak
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-full bg-white border border-linen-dark border-t-0 shadow-gold max-h-[10rem] overflow-y-auto scrollbar-sunburst"
                >
                    <template x-for="opt in options" :key="opt.value">
                        <button
                            type="button"
                            @click="selected = opt.value; open = false"
                            class="w-full flex items-center justify-between px-4 py-2.5 text-left transition-colors border-l-2"
                            :class="selected === opt.value
                                ? 'bg-linen border-sunburst'
                                : 'bg-white border-transparent hover:bg-linen hover:border-linen-dark'"
                        >
                            <span class="text-sm font-semibold text-charcoal" x-text="opt.label"></span>
                            <svg
                                x-show="selected === opt.value"
                                class="w-4 h-4 text-sunburst-dark flex-shrink-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </button>
                    </template>
                </div>

                {{-- Inline confirmation of selection --}}
                <p
                    x-show="selected"
                    x-cloak
                    class="mt-2 text-xs text-charcoal-light"
                >
                    Selected: <span class="font-semibold text-charcoal" x-text="selectedLabel"></span>
                </p>
            </div>

            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">Quantity</label>
                <input
                    type="number"
                    min="1"
                    placeholder="e.g. 50"
                    class="w-full px-3 py-2.5 text-sm border border-linen-dark bg-white text-charcoal placeholder:text-charcoal-lighter focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 transition-colors"
                >
            </div>
        </div>

        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-dropdown-single">Cancel</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>Continue</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- Dropdown: Grouped Options --}}
    <x-ui.modal name="demo-dropdown-grouped" title="Configure Your Order" size="md" maxWidth="25rem" variant="default" bodyClass="py-6">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2z"/>
                <path d="M7 7h.01"/>
            </svg>
        </x-slot:icon>

        <div
            class="space-y-4"
            x-data="{
                sizeOpen: false,
                colorOpen: false,
                size: null,
                color: null,
                sizes: ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL'],
                colors: [
                    { value: 'white',   label: 'White',        hex: '#FFFFFF', border: '#E8E5D8' },
                    { value: 'black',   label: 'Black',        hex: '#1A1A1A', border: '#1A1A1A' },
                    { value: 'charcoal',label: 'Charcoal',     hex: '#2C2C2C', border: '#2C2C2C' },
                    { value: 'gold',    label: 'Gold',         hex: '#FFC20E', border: '#E6A500' },
                    { value: 'navy',    label: 'Navy',         hex: '#1B2A4A', border: '#1B2A4A' },
                    { value: 'red',     label: 'Red',          hex: '#C62828', border: '#C62828' },
                ],
            }"
            @keydown.escape="sizeOpen = false; colorOpen = false"
        >
            {{-- Size picker --}}
            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                    Size <span class="text-error">*</span>
                </label>
                <div class="flex flex-wrap gap-2">
                    <template x-for="s in sizes" :key="s">
                        <button
                            type="button"
                            @click="size = s"
                            class="px-3 py-1.5 text-sm font-semibold border-2 transition-all"
                            :class="size === s
                                ? 'border-charcoal bg-charcoal text-white'
                                : 'border-linen-dark text-charcoal-light hover:border-charcoal-lighter'"
                            x-text="s"
                        ></button>
                    </template>
                </div>
            </div>

            {{-- Colour picker --}}
            <div>
                <label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
                    Colour <span class="text-error">*</span>
                </label>

                {{-- Trigger --}}
                <button
                    type="button"
                    @click="colorOpen = !colorOpen"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm border bg-white transition-colors"
                    :class="colorOpen ? 'border-sunburst ring-1 ring-sunburst/50' : 'border-linen-dark hover:border-charcoal-lighter'"
                >
                    <span class="flex items-center gap-2.5">
                        <template x-if="color">
                            <span
                                class="w-4 h-4 flex-shrink-0 border"
                                :style="'background:' + colors.find(c => c.value === color)?.hex + ';border-color:' + colors.find(c => c.value === color)?.border"
                            ></span>
                        </template>
                        <span
                            :class="color ? 'text-charcoal' : 'text-charcoal-lighter'"
                            x-text="color ? colors.find(c => c.value === color)?.label : 'Choose a colour…'"
                        ></span>
                    </span>
                    <svg class="w-4 h-4 text-charcoal-light flex-shrink-0 transition-transform duration-150" :class="colorOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                {{-- Option list — inline (no absolute), no clipping issues --}}
                <div
                    x-show="colorOpen"
                    x-cloak
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-full bg-white border border-linen-dark border-t-0 shadow-gold max-h-[10rem] overflow-y-auto scrollbar-sunburst"
                >
                    <template x-for="c in colors" :key="c.value">
                        <button
                            type="button"
                            @click="color = c.value; colorOpen = false"
                            class="w-full flex items-center gap-3 px-4 py-2.5 text-left transition-colors border-l-2"
                            :class="color === c.value
                                ? 'bg-linen border-sunburst'
                                : 'bg-white border-transparent hover:bg-linen hover:border-linen-dark'"
                        >
                            <span class="w-5 h-5 flex-shrink-0 border" :style="'background:' + c.hex + ';border-color:' + c.border"></span>
                            <span class="text-sm font-medium text-charcoal flex-1" x-text="c.label"></span>
                            <svg x-show="color === c.value" class="w-4 h-4 text-sunburst-dark flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </button>
                    </template>
                </div>
            </div>

            {{-- Selection summary --}}
            <div x-show="size || color" x-cloak class="flex items-center gap-3 px-3 py-2.5 bg-linen border-l-2 border-sunburst text-sm text-charcoal-light">
                <span x-show="size">Size: <strong class="text-charcoal" x-text="size"></strong></span>
                <span x-show="size && color" class="text-linen-dark">|</span>
                <span x-show="color">Colour: <strong class="text-charcoal" x-text="colors.find(c => c.value === color)?.label"></strong></span>
            </div>
        </div>

        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-dropdown-grouped">Cancel</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>Add to Order</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 10: Form Controls --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Form Controls</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">Branded radio groups and toggle switches — Alpine-driven, zero JS frameworks.</p>

        <div class="flex flex-wrap gap-3">
            <x-ui.modal-trigger modal="demo-radio"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Radio Group
            </x-ui.modal-trigger>

            <x-ui.modal-trigger modal="demo-toggles"
                class="px-5 py-2.5 bg-linen-dark text-charcoal text-sm font-semibold hover:bg-linen transition-colors">
                Toggle Switches
            </x-ui.modal-trigger>
        </div>
    </section>

    {{-- Radio Group Modal --}}
    <x-ui.modal name="demo-radio" title="Select a Turnaround" size="sm">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
            </svg>
        </x-slot:icon>

        <div x-data="{ selected: null }" class="space-y-5">
            <p class="text-sm text-charcoal-light">Choose your production speed below. Your selection will apply to the entire order.</p>

            <div class="flex gap-3">

                <label
                    :class="selected === 'standard'
                        ? 'border-sunburst bg-sunburst/10'
                        : 'border-linen-dark bg-white hover:border-sunburst hover:bg-linen'"
                    class="flex-1 flex flex-col items-center gap-1.5 px-3 py-4 border-2 cursor-pointer text-center transition-colors"
                >
                    <input type="radio" name="turnaround" value="standard" class="sr-only" @change="selected = 'standard'">
                    <span class="text-sm font-bold text-charcoal">Standard</span>
                    <span class="my-1.5 w-5 h-5 border-2 rounded-full flex items-center justify-center transition-colors"
                        :class="selected === 'standard' ? 'border-sunburst' : 'border-linen-dark'">
                        <span class="w-2.5 h-2.5 bg-sunburst rounded-full transition-opacity"
                            :class="selected === 'standard' ? 'opacity-100' : 'opacity-0'"></span>
                    </span>
                    <span class="text-xs text-charcoal-light leading-snug">5–7 business<br>days</span>
                </label>

                <label
                    :class="selected === 'rush'
                        ? 'border-sunburst bg-sunburst/10'
                        : 'border-linen-dark bg-white hover:border-sunburst hover:bg-linen'"
                    class="flex-1 flex flex-col items-center gap-1.5 px-3 py-4 border-2 cursor-pointer text-center transition-colors"
                >
                    <input type="radio" name="turnaround" value="rush" class="sr-only" @change="selected = 'rush'">
                    <span class="text-sm font-bold text-charcoal">Rush</span>
                    <span class="my-1.5 w-5 h-5 border-2 rounded-full flex items-center justify-center transition-colors"
                        :class="selected === 'rush' ? 'border-sunburst' : 'border-linen-dark'">
                        <span class="w-2.5 h-2.5 bg-sunburst rounded-full transition-opacity"
                            :class="selected === 'rush' ? 'opacity-100' : 'opacity-0'"></span>
                    </span>
                    <span class="text-xs text-charcoal-light leading-snug">2–3 business<br>days</span>
                </label>

                <label
                    :class="selected === 'sameday'
                        ? 'border-sunburst bg-sunburst/10'
                        : 'border-linen-dark bg-white hover:border-sunburst hover:bg-linen'"
                    class="flex-1 flex flex-col items-center gap-1.5 px-3 py-4 border-2 cursor-pointer text-center transition-colors"
                >
                    <input type="radio" name="turnaround" value="sameday" class="sr-only" @change="selected = 'sameday'">
                    <span class="text-sm font-bold text-charcoal">Same Day</span>
                    <span class="my-1.5 w-5 h-5 border-2 rounded-full flex items-center justify-center transition-colors"
                        :class="selected === 'sameday' ? 'border-sunburst' : 'border-linen-dark'">
                        <span class="w-2.5 h-2.5 bg-sunburst rounded-full transition-opacity"
                            :class="selected === 'sameday' ? 'opacity-100' : 'opacity-0'"></span>
                    </span>
                    <span class="text-xs text-charcoal-light leading-snug">Order by<br>10 a.m.</span>
                </label>

            </div>

            <p class="text-xs text-charcoal-lighter italic" x-show="!selected">No option selected yet.</p>
            <p class="text-xs text-charcoal font-semibold" x-show="selected" x-cloak>
                Selected: <span class="text-sunburst-dark capitalize" x-text="selected === 'sameday' ? 'Same Day' : selected"></span>
            </p>
        </div>

        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-radio">Cancel</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>Confirm Selection</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- Toggle Switches Modal --}}
    <x-ui.modal name="demo-toggles" title="Order Options" size="sm">
        <x-slot:icon>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                <line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/>
            </svg>
        </x-slot:icon>

        <div
            x-data="{
                rush: false,
                proof: true,
                digital: false
            }"
            class="divide-y divide-linen-dark"
        >

            {{-- Rush Processing --}}
            <div class="flex items-center gap-4 py-4">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-charcoal">Rush Processing</p>
                    <p class="text-xs text-charcoal-light mt-0.5">Move to front of queue (+$15)</p>
                </div>
                <button
                    type="button"
                    role="switch"
                    :aria-checked="rush.toString()"
                    @click="rush = !rush"
                    :class="rush ? 'bg-sunburst' : 'bg-linen-dark'"
                    class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1"
                >
                    <span
                        :class="rush ? 'translate-x-6' : 'translate-x-1'"
                        class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                    ></span>
                </button>
            </div>

            {{-- Proof Approval --}}
            <div class="flex items-center gap-4 py-4">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-charcoal">Proof Approval</p>
                    <p class="text-xs text-charcoal-light mt-0.5">Receive a digital proof before production</p>
                </div>
                <button
                    type="button"
                    role="switch"
                    :aria-checked="proof.toString()"
                    @click="proof = !proof"
                    :class="proof ? 'bg-sunburst' : 'bg-linen-dark'"
                    class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1"
                >
                    <span
                        :class="proof ? 'translate-x-6' : 'translate-x-1'"
                        class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                    ></span>
                </button>
            </div>

            {{-- Digital Files --}}
            <div class="flex items-center gap-4 py-4">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-charcoal">Digital Files Included</p>
                    <p class="text-xs text-charcoal-light mt-0.5">Download print-ready files after order</p>
                </div>
                <button
                    type="button"
                    role="switch"
                    :aria-checked="digital.toString()"
                    @click="digital = !digital"
                    :class="digital ? 'bg-sunburst' : 'bg-linen-dark'"
                    class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1"
                >
                    <span
                        :class="digital ? 'translate-x-6' : 'translate-x-1'"
                        class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
                    ></span>
                </button>
            </div>

        </div>

        <x-slot:footer>
            <x-ui.button-modal-cancel modal="demo-toggles">Cancel</x-ui.button-modal-cancel>
            <x-ui.button-modal-primary>Save Options</x-ui.button-modal-primary>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 9: Custom Request Wizard --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Custom Request Wizard</h2>
        <p class="text-charcoal-light text-sm mb-3 pl-5">
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.custom-request-wizard</code>
            — a guided 10-step custom order wizard.
            Triggered from the <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.contact-modal</code> "Do You Have a Custom Request?" toggle,
            or opened directly via any button dispatching the <code class="text-sm bg-linen-dark px-1 py-0.5">open-modal</code> window event.
            Steps are driven by a dynamic <code class="text-sm bg-linen-dark px-1 py-0.5">visibleSteps</code> array
            — the Shirt Length &amp; Fabric step only appears when a shirt-type garment is selected.
        </p>

        {{-- Usage block --}}
        <div class="mb-6 ml-5 bg-charcoal px-4 py-3 font-mono text-sm text-sunburst space-y-0.5">
            <div>&lt;x-ui.contact-modal /&gt;</div>
            <div>&lt;x-ui.custom-request-wizard /&gt;</div>
        </div>

        <div class="flex flex-wrap gap-3">
            <button
                type="button"
                onclick="window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'custom-request-wizard' } }))"
                class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all"
            >
                Open Custom Request Wizard
            </button>
        </div>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-xs text-charcoal-light">
            @php
                $wizSteps = [
                    ['n' => '1',   'label' => 'Request Details',          'note' => 'Company/Personal · Rush flag'],
                    ['n' => '2',   'label' => 'Garment Selection',         'note' => 'Toggle each garment type'],
                    ['n' => '3*',  'label' => 'Shirt Length & Fabric',     'note' => 'Conditional — shirt types only'],
                    ['n' => '4',   'label' => 'Color Selection',           'note' => 'Smart autocomplete + chips'],
                    ['n' => '5',   'label' => 'Quantity & Sizing',         'note' => 'Gender × Size matrix per garment'],
                    ['n' => '6',   'label' => 'Print Method',              'note' => 'Traditional or Specialty'],
                    ['n' => '7',   'label' => 'Completion Date',           'note' => 'Rush-aware date picker'],
                    ['n' => '8',   'label' => 'Extra Notes',               'note' => 'Free-text textarea'],
                    ['n' => '9',   'label' => 'Shipping Address',          'note' => 'Company name if applicable'],
                    ['n' => '10',  'label' => 'Review & Submit',           'note' => 'Full summary before submit'],
                ];
            @endphp
            @foreach($wizSteps as $ws)
            <div class="flex items-start gap-3 p-3 bg-white border border-linen-dark">
                <span class="flex-shrink-0 w-7 h-7 flex items-center justify-center bg-sunburst text-charcoal text-xs font-bold">{{ $ws['n'] }}</span>
                <div>
                    <p class="font-semibold text-charcoal">{{ $ws['label'] }}</p>
                    <p class="text-charcoal-lighter mt-0.5">{{ $ws['note'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-xs text-charcoal-lighter mt-3 pl-1">* Step 3 only appears when V-Neck, Crew Neck, Hoodie, or Other Shirt Style is selected.</p>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 8: Contact FAB — live showcase --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section class="bg-charcoal border-l-4 border-sunburst p-8 shadow-lg">
        <div class="inline-block mb-5">
            <h2 class="text-2xl font-bold text-white mb-2">Anchored Contact FAB</h2>
            <div class="h-1 bg-sunburst"></div>
        </div>

        <div class="flex flex-col lg:flex-row items-start lg:items-center gap-8">
            <div class="flex-1 space-y-3">
                <p class="text-white/80">
                    <code class="text-sm bg-white/10 px-1.5 py-0.5 text-sunburst">x-ui.contact-modal</code>
                    renders a gold floating button fixed to the <strong class="text-white">bottom-right</strong>
                    of every page. It pulses to draw attention and opens a full quote/contact form on click.
                </p>
                <p class="text-white/60 text-sm">
                    Included globally in <code class="text-xs bg-white/10 px-1 py-0.5">layouts/page.blade.php</code>
                    — skipped automatically on cart, checkout, and order-confirmation pages.
                </p>
                <div class="bg-charcoal-dark px-4 py-3 font-mono text-sm text-sunburst mt-2">
                    &lt;x-ui.contact-modal /&gt;
                </div>
            </div>

            <div class="flex flex-col items-center gap-2 text-sunburst lg:self-end">
                <span class="text-sm font-semibold text-white/70">It's live — click it</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true">
                    <line x1="5" y1="5" x2="19" y2="19"/>
                    <polyline points="13 19 19 19 19 13"/>
                </svg>
            </div>
        </div>
    </section>

</main>

<x-layout.footer />

{{-- Live anchored FAB --}}
<x-ui.contact-modal />

{{-- Custom Request Wizard --}}
<x-ui.custom-request-wizard />

</body>
</html>
