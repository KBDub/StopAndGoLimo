# Stop &amp; Go — "Twilight Luxe" Blade Components

Production Blade components for the Stop &amp; Go Airport Shuttle brand system,
wired to the same tokens as the style guide. TALL stack (Tailwind + Alpine +
Laravel + Livewire-ready). All components are **anonymous** — no class
registration, no service provider edits. Drop the folders in and use.

## Install

1. **Tokens** — copy `resources/css/brand-tokens.css` into your app CSS and
   import it before Tailwind's utilities:
   ```css
   @import 'brand-tokens.css';
   @tailwind base; @tailwind components; @tailwind utilities;
   ```

2. **Tailwind theme** — merge the `extend` block from
   `config/tailwind.theme.snippet.js` into your `tailwind.config.js`. This is
   what makes `bg-navy`, `text-champagne`, `bg-grad-shine`, `font-head`, etc.
   resolve. Make sure `./resources/views/**/*.blade.php` is in `content`.

3. **Fonts** — load Poppins + Montserrat (the live site already does):
   ```html
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   ```

4. **Alpine** — required for the dropdowns. Add once:
   ```js
   import Alpine from 'alpinejs'; window.Alpine = Alpine; Alpine.start();
   ```
   Add `[x-cloak]{display:none!important;}` to your CSS so panels don't flash on load.

5. **Components** — copy `resources/views/components/ui` and
   `resources/views/components/nav` into your project's matching paths.

## Buttons

Smart base component (`x-ui.button`) plus one-line aliases for every variant
(matching the Top 5 Pct `x-ui.button-*` convention). Square edges by branding rule.

```blade
{{-- base component --}}
<x-ui.button href="/bookings-reservations">Book a Ride</x-ui.button>
<x-ui.button variant="signal" size="lg">Reserve 24/7</x-ui.button>
<x-ui.button variant="outline-champagne" type="submit">Get a Quote</x-ui.button>

{{-- alias shorthands --}}
<x-ui.button-champagne-gradient href="/get-a-quote">Get a Quote</x-ui.button-champagne-gradient>
<x-ui.button-signal>Reserve 24/7</x-ui.button-signal>
<x-ui.button-text-link href="/rates">View Rates &rarr;</x-ui.button-text-link>
```

| Variant | Use |
|---|---|
| `champagne-gradient` | Primary CTA |
| `champagne-solid` | Solid primary |
| `signal` | High-attention booking action |
| `navy-gold` | Gold-on-dark outline |
| `outline-champagne` | Secondary on dark |
| `white-navy` | Secondary on dark (high contrast) |
| `outline-light` | Ghost on dark |
| `text-link` | Inline arrow link |
| `light-navy` | Primary on **light** surfaces |
| `light-outline-navy` | Secondary on **light** surfaces |

Sizes: `sm` · `base` (default) · `lg`. Override anything with `!`-prefixed
Tailwind classes, e.g. `class="!px-4 !py-2"`.

## Navigation

```blade
<x-nav.navbar />   {{-- the full assembled Stop & Go menu --}}
```

Or compose your own from the primitives:

```blade
<x-nav.dropdown label="About">
    <x-nav.item href="/about-us" title="About Us" sub="Our story & chauffeurs" />
    <x-nav.item href="/rates"    title="Rates" />
</x-nav.dropdown>

{{-- two-column mega with a nested flyout --}}
<x-nav.dropdown label="Services" panel="mega">
    <x-nav.item href="/airport-shuttle-ohare-midway" title="Airport Shuttle" sub="O'Hare & Midway" />
    <x-nav.flyout title="Party Bus" sub="Groups & celebrations">
        <x-nav.item href="/party-bus-aurora" title="Party Bus — Aurora" />
    </x-nav.flyout>
</x-nav.dropdown>

{{-- four-column city grid --}}
<x-nav.dropdown label="Service Areas" panel="areas" heading="22 Suburbs — 24/7">
    <x-nav.item compact href="/new-lenox-airport-shuttle-limo-service" title="New Lenox" />
</x-nav.dropdown>
```

| Component | Role |
|---|---|
| `x-nav.navbar` | The complete assembled menu (notification bar + full tree) |
| `x-nav.link` | Top-level link, `:active` for current page |
| `x-nav.dropdown` | Trigger + panel; `panel="standard\|mega\|areas"`, optional `heading` |
| `x-nav.item` | Dropdown entry; `compact` for the areas grid |
| `x-nav.flyout` | Nested submenu opening to the right (Party Bus → cities) |

### Link / dropdown states
- **Default:** `text-cloud (#E8E9EC)`, transparent 3px bottom rule
- **Hover / open / active:** `text-champagne (#DCB57E)` + champagne 3px rule
- **Dropdown panel:** `bg-navy-light (#252235)`, 3px champagne top border,
  left-edge (or bottom-edge, in areas) champagne accent on item hover

> Routes are placeholder paths matching the live URLs. Swap for
> `route('...')` once your named routes exist, and wire `:active` to
> `request()->routeIs(...)`.
