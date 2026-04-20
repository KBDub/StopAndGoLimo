<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $currentStore->name }} | Powered by Top 5 Percent</title>
    <meta name="description" content="Official store for {{ $currentStore->name }}.">

    {{-- Tri-palette CSS injection — no Tailwind recompile needed --}}
    <style>
        :root {
            --brand-primary:   {{ $currentStore->color('primary', '#2C2C2C') }};
            --brand-secondary: {{ $currentStore->color('secondary', '#FFC20E') }};
            --brand-accent:    {{ $currentStore->color('accent', '#3273DC') }};
        }
        body {
            font-family: "{{ $currentStore->resolvedFont() }}", 'Titillium Web', Arial, sans-serif;
        }
        .bg-brand-primary    { background-color: var(--brand-primary); }
        .text-brand-primary  { color: var(--brand-primary); }
        .bg-brand-secondary  { background-color: var(--brand-secondary); }
        .text-brand-secondary { color: var(--brand-secondary); }
        .bg-brand-accent     { background-color: var(--brand-accent); }
        .text-brand-accent   { color: var(--brand-accent); }
        .border-brand-primary { border-color: var(--brand-primary); }
        .border-brand-secondary { border-color: var(--brand-secondary); }
        .hover\:text-brand-secondary:hover { color: var(--brand-secondary); }

        .focus\:border-brand-secondary:focus { border-color: var(--brand-secondary); }
        .focus\:ring-brand-secondary:focus   { --tw-ring-color: var(--brand-secondary); box-shadow: 0 0 0 2px var(--brand-secondary); }

        {{-- Global CSS override patches from Super Admin --}}
        @foreach(\App\Models\GlobalOverride::active()->get() as $patch)
            {!! $patch->css !!}
        @endforeach
    </style>

    @if($currentStore->font_custom)
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family={{ urlencode($currentStore->font_custom) }}:wght@400;600;700&display=swap">
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-charcoal antialiased">

    <x-store.nav />

    @if($currentStore->has_banner && $currentStore->banner_text)
        <div class="bg-brand-accent text-white text-center py-2 text-sm font-semibold px-4">
            {{ $currentStore->banner_text }}
        </div>
    @endif

    <main>
        {{ $slot }}
    </main>

    <x-store.footer />

    @livewire('cart.cart-drawer')

    @livewireScripts
</body>
</html>
