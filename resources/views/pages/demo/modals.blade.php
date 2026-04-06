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
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.modal-trigger</code>, and
            <code class="text-sm bg-linen-dark px-1.5 py-0.5">x-ui.contact-modal</code>
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
            <x-ui.modal-trigger modal="demo-default" as="close"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                Cancel
            </x-ui.modal-trigger>
            <button class="px-5 py-2 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Confirm
            </button>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-dark" title="Dark Variant" variant="dark" size="md">
        <p>Charcoal body, dark header, gold accents. Great for emphasis or nighttime aesthetics.</p>
        <x-slot:footer>
            <x-ui.modal-trigger modal="demo-dark" as="close"
                class="px-4 py-2 text-sm font-semibold text-[#aaa] border border-white/20 hover:bg-white/10 transition-colors">
                Cancel
            </x-ui.modal-trigger>
            <button class="px-5 py-2 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Confirm
            </button>
        </x-slot:footer>
    </x-ui.modal>

    <x-ui.modal name="demo-gold" title="Gold Variant" variant="gold" size="md">
        <p>Linen body, deep gold gradient header. Use for premium or featured announcements.</p>
        <x-slot:footer>
            <x-ui.modal-trigger modal="demo-gold" as="close"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                Dismiss
            </x-ui.modal-trigger>
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
            <x-ui.modal-trigger modal="demo-warning" as="close"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                Dismiss
            </x-ui.modal-trigger>
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
            <x-ui.modal-trigger modal="demo-danger" as="close"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                Cancel
            </x-ui.modal-trigger>
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
                <x-ui.modal-trigger modal="demo-size-{{ $sz }}" as="close"
                    class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                    Close
                </x-ui.modal-trigger>
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
            <x-ui.modal-trigger modal="demo-dismiss-no" as="close"
                class="px-5 py-2 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                I Acknowledge
            </x-ui.modal-trigger>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 4: Slots --}}
    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    <section>
        <h2 class="text-2xl font-bold text-charcoal mb-2 border-l-4 border-sunburst pl-4">Slot Patterns</h2>
        <p class="text-charcoal-light text-sm mb-6 pl-5">Icon slot, full header override, rich footer.</p>

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
            <x-ui.modal-trigger modal="demo-icon-slot" as="close"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                Close
            </x-ui.modal-trigger>
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
        <p>The <code>header</code> slot replaces the entire header region — title, icon, and close button — giving you full control.</p>
    </x-ui.modal>

    <x-ui.modal name="demo-rich-footer" title="Rich Footer Example" variant="gold">
        <p>The footer slot is flex row, right-aligned. Put any mix of buttons, links, or text.</p>
        <x-slot:footer>
            <a href="#" class="text-sm text-azure hover:text-azure-dark transition-colors font-medium mr-auto">Learn more →</a>
            <x-ui.modal-trigger modal="demo-rich-footer" as="close"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                Cancel
            </x-ui.modal-trigger>
            <button class="px-5 py-2 bg-charcoal text-white text-sm font-semibold hover:bg-charcoal-dark transition-colors">
                Save Draft
            </button>
            <button class="px-5 py-2 bg-gold-gradient text-charcoal text-sm font-semibold hover:shadow-gold transition-all">
                Submit Order
            </button>
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
            <x-ui.modal-trigger modal="demo-trigger-types" as="close"
                class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors">
                Close
            </x-ui.modal-trigger>
        </x-slot:footer>
    </x-ui.modal>

    {{-- ═══════════════════════════════════════════════════════════════════ --}}
    {{-- SECTION 6: Contact FAB — live showcase --}}
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
                    Drop it once anywhere in the layout — position and z-index are self-managed.
                </p>
                <div class="bg-charcoal-dark px-4 py-3 font-mono text-sm text-sunburst mt-2">
                    &lt;x-ui.contact-modal /&gt;
                </div>
            </div>

            {{-- Visual pointer to the FAB --}}
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

</body>
</html>
