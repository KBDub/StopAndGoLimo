# Branding Requirements
## Top 5 Percent Custom Signage & Apparel

---

## Brand Overview

A premium custom signage and apparel business requiring a high-end, sophisticated digital presence that conveys quality craftsmanship and luxury aesthetics. The brand identity should appeal to discerning clients seeking custom business signage, promotional products, and branded apparel.

---

## Component Architecture (MANDATORY)

All HTML elements must use Laravel Blade Components with the `x-` prefix syntax.

### Component Usage Rules

1. **All sections must be Blade component files** — Every `<section>` on every page must live in its own file under `resources/views/components/sections/`. No inline `<section>` HTML is permitted directly inside page files (`resources/views/pages/`). Page files must contain only `x-sections.*`, `x-ui.*`, and `x-layouts.*` component tags.
2. **All pages must use Blade components** - No inline HTML for reusable elements
3. **Component naming convention:** `x-<type>.<name>` (e.g., `x-layout.navigation-bar`)
4. **Props must be typed** - Use `@props` directive for all component parameters
5. **SSR-enabled** - All components render server-side for SEO

### Component Naming Conventions (MANDATORY)

| Component Type | Naming Pattern | Example |
|----------------|----------------|---------|
| **Sections** | `x-sections.<name>` | `x-sections.hero`, `x-sections.our-services` |
| **CTA Sections** | `x-sections.cta-<name>` | `x-sections.cta-ready-to-get-started` |
| **Layout** | `x-layout.<name>` | `x-layout.navigation-bar`, `x-layout.footer` |
| **UI Elements** | `x-ui.<name>` | `x-ui.button-charcoal-gold` |

### Standard Section Layout (MANDATORY)

**All sections must use `py-10` for vertical padding and `max-w-7xl` for the inner container width.**

```blade
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section content -->
    </div>
</section>
```

- **Outer `<section>`:** Always `py-10` — no other vertical padding value is permitted.
- **Inner container `<div>`:** Always `max-w-7xl mx-auto px-6` — do not use `max-w-6xl`, `max-w-5xl`, `max-w-4xl`, or any narrower container as the primary layout wrapper.
- **Inner text readability constraints:** Nested elements may still use narrower max-widths as text readability helpers — these are not layout containers.
- **H2–H5 description paragraphs (MANDATORY):** Any descriptive `<p>` that follows an H2, H3, H4, or H5 heading in a section intro/header area must use `max-w-4xl mx-auto`. This applies to both centered and left-aligned section headers. Never use `max-w-2xl` or `max-w-3xl` for these paragraphs — they produce lines that are too narrow at desktop widths.
- **Sunburst heading underbar (MANDATORY):** The gold decorative underbar (`h-1 bg-sunburst`) beneath any section heading (H1–H3) must span the full width of the heading text — never a fixed width like `w-20`. Implement by wrapping the heading and underbar together in `<div class="inline-block">`. The underbar div needs no explicit width — a block element inside `inline-block` naturally fills the container, which is sized by the heading text. For centered sections the parent already has `text-center` which centers the `inline-block` wrapper automatically. Move any bottom margin (`mb-*`) to the wrapper div, and use `mb-2` on the heading for tight spacing to the bar.

```blade
{{-- Centered heading — parent has text-center, inline-block is auto-centered --}}
<div class="inline-block mb-4">
    <h2 class="text-h2 font-bold text-charcoal mb-2">Section Title</h2>
    <div class="h-1 bg-sunburst"></div>
</div>

{{-- Left-aligned heading --}}
<div class="inline-block mb-6">
    <h2 class="text-h2 font-bold text-charcoal mb-2">Section Title</h2>
    <div class="h-1 bg-sunburst"></div>
</div>
```

```blade
{{-- Correct: section with max-w-7xl container and max-w-4xl description paragraph --}}
<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-charcoal mb-4">Section Title</h2>
            <p class="text-charcoal-light max-w-4xl mx-auto">Description text constrained for readability.</p>
        </div>
        <!-- Grid content spans full max-w-7xl -->
    </div>
</section>
```

### Required Layout Components

| Component | Usage | File Path |
|-----------|-------|-----------|
| `x-layout.top-notification-bar` | Deal of the day, promotions | `resources/views/components/layout/top-notification-bar.blade.php` |
| `x-layout.navigation-bar` | Main site navigation | `resources/views/components/layout/navigation-bar.blade.php` |
| `x-layout.footer` | Site footer | `resources/views/components/layout/footer.blade.php` |

### Section Components

Every `<section>` must be its own file in `resources/views/components/sections/`. Page files must only reference sections via `x-sections.*` component tags — no inline `<section>` HTML.

| Component | Usage | File Path |
|-----------|-------|-----------|
| `x-sections.category-hero` | Hero for category/product pages | `resources/views/components/sections/category-hero.blade.php` |
| `x-sections.home-page-hero` | Hero for the home page | `resources/views/components/sections/home-page-hero.blade.php` |
| `x-sections.hero-full-bleed` | Full-bleed image hero (center/left/split layouts) | `resources/views/components/sections/hero-full-bleed.blade.php` |
| `x-sections.our-services` | Services grid | `resources/views/components/sections/our-services.blade.php` |
| `x-sections.why-choose-us` | Trust/differentiator badges | `resources/views/components/sections/why-choose-us.blade.php` |
| `x-sections.design-it-yourself` | Design tool promo | `resources/views/components/sections/design-it-yourself.blade.php` |
| `x-sections.about-preview` | About/veteran-owned preview | `resources/views/components/sections/about-preview.blade.php` |
| `x-sections.featured-products` | Featured products grid | `resources/views/components/sections/featured-products.blade.php` |
| `x-sections.product-grid` | Livewire catalog product grid | `resources/views/components/sections/product-grid.blade.php` |
| `x-sections.top5pct-same-day-service` | Same-day service highlight | `resources/views/components/sections/top5pct-same-day-service.blade.php` |
| `x-sections.top-level-category-section` | Category index child listing | `resources/views/components/sections/top-level-category-section.blade.php` |
| `x-sections.review-banner` | Customer testimonials | `resources/views/components/sections/review-banner.blade.php` |
| `x-sections.map-section` | Location map + contact info | `resources/views/components/sections/map-section.blade.php` |
| `x-sections.home-page-services-accordion` | FAQ / services accordion | `resources/views/components/sections/home-page-services-accordion.blade.php` |
| `x-sections.shirt-types-grid` | 12-card custom shirt techniques grid | `resources/views/components/sections/shirt-types-grid.blade.php` |
| `x-sections.shirt-types-video` | YouTube video embed (charcoal bg) | `resources/views/components/sections/shirt-types-video.blade.php` |
| `x-sections.represent-yourself` | "Represent Yourself" brand statement + stats | `resources/views/components/sections/represent-yourself.blade.php` |
| `x-sections.shirt-types-faq` | 7-tip shirt maker FAQ accordion | `resources/views/components/sections/shirt-types-faq.blade.php` |
| `x-sections.cta-free-quote` | Free quote CTA bar | `resources/views/components/sections/cta-free-quote.blade.php` |
| `x-sections.cta-design-your-own` | Design-it-yourself CTA bar | `resources/views/components/sections/cta-design-your-own.blade.php` |
| `x-sections.cta-ready-to-get-started` | Full-width charcoal CTA | `resources/views/components/sections/cta-ready-to-get-started.blade.php` |
| `x-sections.lp-category-banners` | CLP banner image grid (wraps `x-ui.card-lp-banner-images`) | `resources/views/components/sections/lp-category-banners.blade.php` |
| `x-sections.video-banner` | YouTube video embed section with heading and CTA | `resources/views/components/sections/video-banner.blade.php` |
| `x-sections.page-faq` | Two-column FAQ accordion with optional image | `resources/views/components/sections/page-faq.blade.php` |
| `x-sections.card-image-with-text` | Float-image + text wrap with slide-in animation | `resources/views/components/sections/card-image-with-text.blade.php` |
| `x-sections.card-2image-with-text` | Two float-images + text wrap | `resources/views/components/sections/card-2image-with-text.blade.php` |
| `x-sections.card-detailed-info` | Two-image section; auto-bolds first 4 words of each paragraph | `resources/views/components/sections/card-detailed-info.blade.php` |

### UI Button Components

All button components accept `href` (renders as `<a>`) or render as `<button>` by default. All accept `type` prop (default: `button`). All use `$attributes->merge()` for extensibility.

| Component | Normal State | Hover State | Usage |
|-----------|--------------|-------------|-------|
| `x-ui.button-gold-gradient` | Gold gradient bg, Charcoal text | Brighter gradient, scale up | Primary CTA |
| `x-ui.button-gold-charcoal` | Solid Gold bg, Charcoal text | Darker gold bg | Solid primary CTA |
| `x-ui.button-charcoal-gold` | Charcoal bg, Gold text | Dark Charcoal bg | Inverse primary CTA |
| `x-ui.button-blue-white` | Azure bg, White text | Dark Azure bg | Secondary CTA |
| `x-ui.button-gold-white` | Gold bg, White text | Darker gold bg | Alternate CTA |
| `x-ui.button-white-charcoal` | White bg, Charcoal text, bordered | Linen bg, Blue text | Light background CTA |
| `x-ui.button-outline-charcoal` | Transparent, Charcoal border/text | Fills Charcoal bg, White text | Outlined variant |
| `x-ui.button-outline-gold` | Transparent, Gold border/text | Fills Gold bg, Charcoal text | Outlined gold variant |
| `x-ui.button-text-link` | Azure text with arrow (→) | Underline animation | Inline text link |

```blade
{{-- Button usage examples --}}
<x-ui.button-gold-gradient href="/shop">Shop Now</x-ui.button-gold-gradient>
<x-ui.button-blue-white type="submit">Submit</x-ui.button-blue-white>
<x-ui.button-text-link href="/about">Learn More</x-ui.button-text-link>
```

### UI Badge Components

All badge components use rounded-full pill shape, `text-xs font-semibold`, and support `$attributes->merge()` for extensibility.

| Component | Background | Text | Usage |
|-----------|------------|------|-------|
| `x-ui.badge-featured` | Gold gradient | Charcoal | Featured/promoted products |
| `x-ui.badge-new` | Azure Blue | White | New arrivals |
| `x-ui.badge-success` | Success Green | White | In stock, available |
| `x-ui.badge-sold-out` | Charcoal | White | Out of stock items |
| `x-ui.badge-default` | Transparent, Charcoal border | Charcoal Light | General/default tag |

```blade
{{-- Badge usage examples --}}
<x-ui.badge-featured>Featured</x-ui.badge-featured>
<x-ui.badge-new>New</x-ui.badge-new>
<x-ui.badge-sold-out>Sold Out</x-ui.badge-sold-out>
```

### UI Banner Separator Components

Thin banners (3px height) wrap the navigation bar in a dual-line sandwich pattern. Medium banners (8px height) divide content sections throughout the page.

**Navigation sandwich pattern:** The navigation bar is wrapped with `banner-thin-sunburst` above and `banner-thin-charcoal` below (or vice versa) to create a branded border effect matching top5pct.com.

| Component | Height | Color | Hex | Usage |
|-----------|--------|-------|-----|-------|
| `x-ui.banner-thin-sunburst` | 3px | Sunburst Gold | `#FFC20E` | Above/below navigation |
| `x-ui.banner-thin-charcoal` | 3px | Charcoal | `#2C2C2C` | Navigation border |
| `x-ui.banner-thin-azure` | 3px | Azure Blue | `#3273DC` | Accent separator |
| `x-ui.banner-thin-linen` | 3px | Soft Linen | `#F2F0E6` | Subtle separator |
| `x-ui.banner-medium-sunburst` | 8px | Sunburst Gold | `#FFC20E` | Section divider |
| `x-ui.banner-medium-charcoal` | 8px | Charcoal | `#2C2C2C` | Section divider |
| `x-ui.banner-medium-azure` | 8px | Azure Blue | `#3273DC` | Section divider |
| `x-ui.banner-medium-linen` | 8px | Soft Linen | `#F2F0E6` | Section divider |

```blade
{{-- Navigation sandwich pattern --}}
<x-ui.banner-thin-sunburst />
<x-ui.banner-thin-charcoal />
<x-layout.navigation-bar currentPage="home" />
<x-ui.banner-thin-charcoal />
<x-ui.banner-thin-sunburst />

{{-- Section divider --}}
<x-ui.banner-medium-sunburst />
```

### UI Card Components

**No icons allowed** in any card component (check marks are acceptable). All cards use `$attributes->merge()` for extensibility with `hover:shadow-gold-lg` and `hover:-translate-y-1` transitions.

| Component | Props | Description |
|-----------|-------|-------------|
| `x-ui.card-product` | `title`, `description`, `price`, `image` | Product card with optional image, title, description, price |
| `x-ui.card-service` | `title`, `description`, `letter` | Service card with gold accent line (no icon) |
| `x-ui.card-testimonial` | `quote`, `name`, `label`, `avatar` | Customer quote with avatar and name |
| `x-ui.card-info-dark` | `title`, `description`, `linkText`, `linkHref` | Dark charcoal background with optional link |
| `x-ui.card-info-light` | `title`, `description`, `linkText`, `linkHref` | Warm gradient background with sunburst border |
| `x-ui.card-faq` | `question`, `answer`, `open` | Accordion expand/collapse with Alpine.js |
| `x-ui.card-feature` | `step`, `title`, `description` | Numbered step/feature card |

#### Card Visual Specifications

**Shared card styles:**
- Background: White `#FFFFFF` (default), Charcoal `#2C2C2C` (dark variant)
- Padding: `p-6` (24px)
- Border radius: none (square — `border-radius: 0`)
- Shadow: `shadow-lg` at rest, `shadow-gold-lg` on hover (gold glow: `0 8px 30px rgba(255, 194, 14, 0.25)`)
- Hover: `-translate-y-1` (lift 4px)
- Transition: `transition-all` (200ms default)

**card-product:**
- Optional image with `w-full h-40 object-cover mb-4`
- Title: `font-semibold text-charcoal`
- Description: `text-sm text-charcoal-light`
- Price: `text-lg font-bold text-sunburst`

**card-service:**
- Gold accent line: `w-12 h-1 bg-sunburst mb-4` (replaces icon)
- Title: `font-semibold text-charcoal`
- Description: `text-sm text-charcoal-light`
- Optional `letter` prop for categorization

**card-testimonial:**
- Quote: `text-sm text-charcoal-light italic` with quotation marks
- Avatar: `w-10 h-10 rounded-full object-cover` (optional, shows initial letter if absent)
- Name: `font-semibold text-charcoal text-sm`
- Label: defaults to "Verified Customer", `text-xs text-charcoal-light`

**card-info-dark:**
- Background: Charcoal `#2C2C2C`
- Title: `font-semibold text-white`
- Description: `text-sm text-white/70`
- Optional link: Sunburst text with arrow

**card-info-light:**
- Background: Warm Gradient (`bg-warm-gradient`) with `border border-sunburst/30`
- Title: `font-semibold text-charcoal`
- Description: `text-sm text-charcoal-light`
- Optional link: Azure Blue text with arrow

**card-faq (accordion):**
- Requires Alpine.js (`x-data="{ expanded: false }"`)
- Question bar: `border-l-4 border-sunburst`, click toggles `expanded`
- Chevron rotates 180deg when expanded (`rotate-180` transition)
- Answer panel: `x-show="expanded"` with smooth slide transition
- `open` prop: set to `true` to default expanded
- Uses `x-cloak` to prevent flash of unstyled content

**card-feature:**
- Large step number: `text-4xl font-bold text-sunburst/20` positioned top-right
- Title: `font-semibold text-charcoal`
- Description: `text-sm text-charcoal-light`

### UI Full-Bleed Banner Components

Full-width image and video banners for visual breaks between sections. All accept optional `href` to make the entire banner a link.

| Component | Props | Description |
|-----------|-------|-------------|
| `x-ui.banner-full-bleed-image` | `image`, `alt`, `href`, `height` | Full-width image; `height` CSS value (default `auto`) |
| `x-ui.banner-full-bleed-2-image` | `image1`, `alt1`, `image2`, `alt2`, `href1`, `href2`, `height` | Two side-by-side full-bleed images |
| `x-ui.banner-full-bleed-video` | `src`, `height`, `poster` | Full-width autoplaying muted video |
| `x-ui.banner-full-bleed-2-video` | `src1`, `src2`, `height` | Two side-by-side full-bleed videos |
| `x-ui.banner-testimonial` | `quote`, `name`, `location`, `stars` | Sunburst-light inline review strip with star rating |

```blade
{{-- Single full-bleed image (clickable) --}}
<x-ui.banner-full-bleed-image
    image="/images/category/banner.jpg"
    alt="Custom Apparel"
    href="/custom-apparel"
    height="320px"
/>

{{-- Inline testimonial strip --}}
<x-ui.banner-testimonial
    quote="Fast turnaround and amazing quality!"
    name="Maria R."
    location="Joliet, IL"
    :stars="5"
/>
```

### UI Carousel Components

| Component | Props | Description |
|-----------|-------|-------------|
| `x-ui.carousel-rotating-images` | `images` (array of `{src,alt}`), `visible` (1/2/3), `interval` (ms, default 3500) | Auto-rotating image carousel with fade. Standard slot sizes: center 600×450, side 300×225 (4:3 ratio) |
| `x-ui.carousel-product` | `images` (array of strings/objects), `alt` | Product detail image carousel with hover zoom and thumbnail dots |

```blade
{{-- Category image carousel (3 visible) --}}
<x-ui.carousel-rotating-images
    :images="[
        ['src' => '/images/shirts/banner.jpg', 'alt' => 'Custom Shirts'],
        ['src' => '/images/shirts/foil.jpg',   'alt' => 'Foil Shirts'],
        ['src' => '/images/shirts/rhine.jpg',  'alt' => 'Rhinestone'],
    ]"
    :visible="3"
/>

{{-- Smaller two-up carousel (sub-pages) --}}
<x-ui.carousel-rotating-images :images="$images" :visible="2" />
```

### UI Slide-In & Visual Card Components

| Component | Props | Description |
|-----------|-------|-------------|
| `x-ui.card-banner-slide-in` | `image`, `alt`, `title`, `href`, `direction` (left/right) | Slides in from left or right on scroll entry; contains image + title CTA |
| `x-ui.card-category-visual` | `title`, `subtitle`, `image`, `href`, `featured` | Category link card; hover scales image. `featured` spans 2 columns on md+ |
| `x-ui.card-showcase` | `title`, `description`, `image`, `imageAlt`, `minHeight` | Linen card with decorative circle accents; centers content |
| `x-ui.card-detailed-info` | `title`, `description`, `linkText`, `linkHref`, `image`, `imageAlt` | Linen card with decorative corner circles and optional image |
| `x-ui.card-lp-banner-images` | `banners` (array) | Internal card used by `x-sections.lp-category-banners` |
| `x-ui.card-product-hover` | `title`, `price`, `image`, `href` | Product card with zoom-on-hover image and gold hover shadow |

```blade
{{-- Slide-in (alternates direction per pair) --}}
<x-ui.card-banner-slide-in
    image="/images/shirts/brick.jpg"
    alt="Brick Shirts"
    title="Brick Pattern Custom Shirts"
    href="/custom-apparel/brick-shirts"
    direction="left"
/>
<x-ui.card-banner-slide-in
    image="/images/shirts/foil.jpg"
    alt="Foil Shirts"
    title="Foil Printed Custom Shirts"
    href="/custom-apparel/foil-shirts"
    direction="right"
/>

{{-- Category visual card (featured = double-wide) --}}
<x-ui.card-category-visual
    title="Custom T-Shirts"
    image="/images/shirts/main.jpg"
    href="/custom-apparel"
    :featured="true"
/>
```

### UI Product Components

| Component | Props | Description |
|-----------|-------|-------------|
| `x-ui.modal-quick-view` | `title`, `price`, `originalPrice`, `description`, `image`, `images`, `href`, `variants` | Quick product preview modal with carousel, variant picker, and quantity |
| `x-ui.sticky-add-to-cart` | `productName`, `price`, `variantLabel` | Sticky bottom bar; shown/hidden via `sticky-cart-show` / `sticky-cart-hide` window events |

### Modal System

The modal system is the authoritative interactive overlay mechanism for the site. The following components work together — **always use these; never hand-roll a custom Alpine overlay.**

| Component | Purpose |
|---|---|
| `x-ui.modal` | Core named, slot-driven modal — the foundation |
| `x-ui.modal-default` | Shorthand wrapper — `variant="default"` pre-set |
| `x-ui.modal-dark` | Shorthand wrapper — `variant="dark"` pre-set |
| `x-ui.modal-gold` | Shorthand wrapper — `variant="gold"` pre-set |
| `x-ui.modal-success` | Shorthand wrapper — `variant="success"` pre-set |
| `x-ui.modal-warning` | Shorthand wrapper — `variant="warning"` pre-set |
| `x-ui.modal-danger` | Shorthand wrapper — `variant="danger"` pre-set |
| `x-ui.modal-trigger` | Dispatches open/close events; renders as button, a, span, or div |
| `x-ui.button-modal-primary` | Primary CTA button sized for modal footers |
| `x-ui.button-modal-cancel` | Cancel/dismiss button sized for modal footers |
| `x-ui.modal-wizard` | Lightweight 3-step guided wizard (non-dismissible) |
| `x-ui.contact-modal` | Global FAB + full quote/contact form overlay |
| `x-ui.custom-request-wizard` | 10-step custom order intake wizard |
| `x-ui.modal-quick-view` | Product quick-view overlay (triggered by `open-quick-view` event) |

#### x-ui.modal

Named, slot-driven modal. Unlimited instances can coexist on a page without conflict — each is identified by a unique `name`.

**Props:**

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | required | Unique ID used for open/close events |
| `title` | string | `null` | Heading text in the header bar |
| `size` | string | `md` | `sm` (22rem) / `md` (34rem) / `lg` (46rem) / `xl` (58rem) / `full` (95vw) |
| `variant` | string | `default` | `default` / `dark` / `gold` / `success` / `warning` / `danger` |
| `dismissible` | bool | `true` | Shows ✕ button and allows backdrop/Escape to close |
| `scrollBody` | bool | `true` | Inner body scrolls; header and footer remain sticky |
| `maxHeight` | string | `92dvh` | CSS max-height override (e.g. `"80dvh"`) |
| `maxWidth` | string | `null` | CSS max-width override — bypasses the `size` preset when set (e.g. `"26rem"`) |
| `headerClass` | string | `''` | Extra classes on the header div |
| `bodyClass` | string | `''` | Extra classes on the body div |
| `footerClass` | string | `''` | Extra classes on the footer div |
| `panelClass` | string | `''` | Extra classes on the panel div (rare — e.g. layout overrides) |

**Slots:** `default` (body), `title` (HTML heading), `header` (full header override), `icon` (left of title), `footer` (action buttons)

**Events (window):**

| Event | Payload | Direction |
|-------|---------|-----------|
| `open-modal` | `{ name }` | dispatch to open |
| `close-modal` | `{ name }` | dispatch to close |
| `modal-opened` | `{ name }` | fires after open animation |
| `modal-closed` | `{ name }` | fires after close |

**Branding rule — square corners:** Modal panels use `0` border-radius. Do not add `rounded`, `rounded-lg`, or any other border-radius to modal panels, overlays, or form inputs inside modals. Only the pulse halo ring on the FAB button retains `rounded-full`.

**Branding rule — footer buttons:** Do **not** use `x-ui.button-*` page components (`px-8 py-4`) inside modal footers — they are designed for page-level CTAs and are too large. Use the two dedicated modal button components instead:

| Component | Role | Style |
|-----------|------|-------|
| `x-ui.button-modal-primary` | Primary/gold action | `px-5 py-2 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold` |
| `x-ui.button-modal-cancel` | Cancel/dismiss | `px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen` |

Both accept a `modal` prop (optional) — when provided, clicking the button dispatches `close-modal` for that modal name. Additional HTML/Alpine attributes pass through via `$attributes`.

```blade
{{-- Standard footer pair --}}
<x-ui.button-modal-cancel modal="my-modal">Cancel</x-ui.button-modal-cancel>
<x-ui.button-modal-primary>Submit</x-ui.button-modal-primary>

{{-- Non-dismissible: only button also closes the modal --}}
<x-ui.button-modal-primary modal="confirm-modal">I Acknowledge</x-ui.button-modal-primary>

{{-- Variant-specific colors (success, danger, warning, dark) stay as raw <button> --}}
<button class="px-5 py-2 bg-error text-white text-sm font-semibold hover:opacity-90 transition-opacity">
    Delete Permanently
</button>
```

Note: Dark-variant cancel (`border-white/20`, `text-[#aaa]`) and semantic-color buttons (success, warning, danger, charcoal) remain as raw `<button>` elements — they are intentional exceptions that cannot use the standard linen/gold pair.

**Branding rule — dropdowns inside modals:** The modal body has `overflow-x-hidden` which causes the browser to also clip `overflow-y`, preventing absolutely-positioned dropdown lists from rendering fully. **Never use absolute-positioned dropdowns inside a modal body.** Instead, render option lists inline (in normal document flow) with `max-h-[10rem] overflow-y-auto scrollbar-sunburst` to constrain height and enable branded scrolling.

**Z-index:** Backdrop at `z-[9800]`. Panel renders inside the backdrop — no additional z-index on the panel itself. This intentionally places `x-ui.modal` below the FAB (`z-[9990]`) and below the contact-modal / custom-request-wizard overlays (`z-[9999]`). See the Stacking Contexts section for the full hierarchy.

```blade
{{-- Trigger --}}
<x-ui.modal-trigger modal="quote-form" class="px-5 py-2.5 bg-gold-gradient text-charcoal text-sm font-semibold">
    Get a Quote
</x-ui.modal-trigger>

{{-- Modal definition (place anywhere on the page, outside x-data wrappers) --}}
<x-ui.modal name="quote-form" title="Request a Quote" size="lg">
    <p>Modal body content.</p>
    <x-slot:footer>
        <x-ui.button-modal-cancel modal="quote-form">Cancel</x-ui.button-modal-cancel>
        <x-ui.button-modal-primary>Submit</x-ui.button-modal-primary>
    </x-slot:footer>
</x-ui.modal>

{{-- Open from Livewire --}}
$this->dispatch('open-modal', name: 'quote-form');
```

#### x-ui.modal Variant Wrappers

Six thin-wrapper components pre-set the `variant` prop so call sites are shorter and self-documenting. They pass all props and all slots through to `x-ui.modal` unchanged — only `variant` is locked.

| Component | `variant` | Use when |
|---|---|---|
| `x-ui.modal-default` | `default` | General content, forms, quotes — the standard choice |
| `x-ui.modal-dark` | `dark` | Emphasis, nighttime aesthetics, charcoal brand moments |
| `x-ui.modal-gold` | `gold` | Premium announcements, featured deals, promotional content |
| `x-ui.modal-success` | `success` | Confirmation: order submitted, message sent, action completed |
| `x-ui.modal-warning` | `warning` | Caution: session expiry, unsaved changes, irreversible steps |
| `x-ui.modal-danger` | `danger` | Destructive actions: delete, remove, permanently clear |

All accept the same props as `x-ui.modal` (`name`, `title`, `size`, `dismissible`, `scrollBody`, `maxHeight`, `maxWidth`, `headerClass`, `bodyClass`, `footerClass`, `panelClass`) and the same slots (`default`, `title`, `header`, `icon`, `footer`). Do not pass `variant` — it is pre-set.

**Variant colour tokens (read-only reference — derived from `x-ui.modal`):**

| Variant | Stripe | Header bg | Header border | Panel bg | Body text | Icon bg | Icon text | Footer bg | Footer border |
|---|---|---|---|---|---|---|---|---|---|
| `default` | `bg-gold-gradient-horizontal` | `bg-linen` | `border-sunburst` | `bg-white` | `text-charcoal` | `bg-sunburst/15` | `text-sunburst` | `bg-linen-light` | `border-linen-dark` |
| `dark` | `bg-gold-gradient-horizontal` | `bg-charcoal-dark` | `border-sunburst` | `bg-charcoal` | `text-linen` | `bg-sunburst/15` | `text-sunburst` | `bg-charcoal-dark` | `border-white/10` |
| `gold` | `bg-gold-gradient-horizontal` | `bg-gold-gradient` | `border-sunburst-dark` | `bg-linen-light` | `text-charcoal` | `bg-sunburst/20` | `text-charcoal` | `bg-linen` | `border-linen-dark` |
| `success` | `bg-success` | `bg-linen` | `border-success` | `bg-white` | `text-charcoal` | `bg-success/15` | `text-success` | `bg-linen-light` | `border-linen-dark` |
| `warning` | `bg-warning` | `bg-linen` | `border-warning` | `bg-white` | `text-charcoal` | `bg-warning/15` | `text-warning` | `bg-linen-light` | `border-linen-dark` |
| `danger` | `bg-error` | `bg-linen` | `border-error` | `bg-white` | `text-charcoal` | `bg-error/15` | `text-error` | `bg-linen-light` | `border-linen-dark` |

**Footer button rules per variant:**

| Variant | Cancel | Confirm / Primary |
|---|---|---|
| `default` | `x-ui.button-modal-cancel` | `x-ui.button-modal-primary` |
| `dark` | Raw `<button class="px-4 py-2 text-sm font-semibold text-[#aaa] border border-white/20 hover:bg-white/10 transition-colors">` | `x-ui.button-modal-primary` |
| `gold` | `x-ui.button-modal-cancel` | `x-ui.button-modal-primary` |
| `success` | `x-ui.button-modal-cancel` (label: "Done") | Only if a second action is needed; otherwise single Done button suffices |
| `warning` | `x-ui.button-modal-cancel` | Raw `<button class="px-5 py-2 bg-warning text-charcoal text-sm font-semibold hover:opacity-90 transition-opacity">` |
| `danger` | `x-ui.button-modal-cancel` | Raw `<button class="px-5 py-2 bg-error text-white text-sm font-semibold hover:opacity-90 transition-opacity">` |

```blade
{{-- Simplest default modal --}}
<x-ui.modal-default name="confirm" title="Confirm Order" size="sm">
    <p>Are you sure you want to place this order?</p>
    <x-slot:footer>
        <x-ui.button-modal-cancel modal="confirm">Cancel</x-ui.button-modal-cancel>
        <x-ui.button-modal-primary>Place Order</x-ui.button-modal-primary>
    </x-slot:footer>
</x-ui.modal-default>

{{-- Danger modal — destructive confirm uses raw <button> in error colour --}}
<x-ui.modal-danger name="delete-item" title="Delete This Item?" :dismissible="false">
    <x-slot:icon>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/>
            <line x1="12" y1="8" x2="12" y2="12"/>
            <line x1="12" y1="16" x2="12.01" y2="16"/>
        </svg>
    </x-slot:icon>
    <p>This action cannot be undone.</p>
    <x-slot:footer>
        <x-ui.button-modal-cancel modal="delete-item">Cancel</x-ui.button-modal-cancel>
        <button class="px-5 py-2 bg-error text-white text-sm font-semibold hover:opacity-90 transition-opacity">
            Delete Permanently
        </button>
    </x-slot:footer>
</x-ui.modal-danger>
```

---

#### x-ui.modal-trigger

Renders the trigger element that dispatches `open-modal`. Can also act as a close button inside a modal.

**Props:** `modal` (name to open/close), `as` (`button` / `a` / `span` / `div` / `close`), `href` (for `as="a"`)

```blade
{{-- Default button trigger --}}
<x-ui.modal-trigger modal="my-modal" class="px-5 py-2 bg-gold-gradient text-charcoal text-sm font-semibold">
    Open Modal
</x-ui.modal-trigger>

{{-- Link trigger --}}
<x-ui.modal-trigger modal="my-modal" as="a" href="#" class="text-azure font-semibold underline">
    Open as link
</x-ui.modal-trigger>

{{-- Close button inside a modal footer --}}
<x-ui.modal-trigger modal="my-modal" as="close" class="px-4 py-2 text-sm border hover:bg-linen">
    Cancel
</x-ui.modal-trigger>
```

#### x-ui.modal-wizard

Multi-step non-dismissible wizard. No close button, no backdrop dismiss, no Escape key. Dot step indicators and Back/Next/Finish navigation are automatic. Step content passed via named slots.

**Props:**

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | required | Unique ID for open/close events |
| `size` | string | `md` | Same size tokens as `x-ui.modal` |
| `steps` | int | `3` | Total step count |
| `step1Title` | string | `'Step 1'` | Header title for step 1 |
| `step2Title` | string | `'Step 2'` | Header title for step 2 |
| `step3Title` | string | `'Step 3'` | Header title for step 3 |
| `finishLabel` | string | `'Finish'` | Label on the last-step button |
| `cancelLabel` | string | `''` | If set, shows a cancel link on step 1 only |

**Slots:** `step1`, `step2`, `step3`

**Events dispatched:** `wizard-done { name }` when Finish is clicked; `modal-closed { name }` on close.

```blade
<x-ui.modal-trigger modal="setup-wizard" class="px-5 py-2 bg-gold-gradient text-charcoal text-sm font-semibold">
    Start Setup
</x-ui.modal-trigger>

<x-ui.modal-wizard
    name="setup-wizard"
    step1Title="Welcome"
    step2Title="Choose Your Preference"
    step3Title="You're All Set!"
    finishLabel="Done"
    cancelLabel="Cancel"
>
    <x-slot:step1>
        <p>Introduction content for step one.</p>
    </x-slot:step1>
    <x-slot:step2>
        {{-- Radio buttons, form fields, etc. --}}
    </x-slot:step2>
    <x-slot:step3>
        <p>Confirmation or summary content.</p>
    </x-slot:step3>
</x-ui.modal-wizard>
```

---

### Stacking Contexts & Z-Index System (MANDATORY)

Every modal, overlay, and fixed UI element in this project follows a strict, uniform z-index scale. **Never assign arbitrary z-index values to modals or overlays.** Use the table below and follow the rules beneath it.

#### Z-Index Scale

| Layer | Value | Element(s) |
|---|---|---|
| Page sections (contained) | `auto` (≈ 0) | All `<section>` elements with `isolate` — their internal z-indexes are self-contained |
| Navigation bar | `z-50` | `x-layout.navigation-bar` |
| **`x-ui.modal` backdrop** | **`z-[9800]`** | All `x-ui.modal` / `x-ui.modal-default` / `x-ui.modal-dark` / `x-ui.modal-gold` / `x-ui.modal-success` / `x-ui.modal-warning` / `x-ui.modal-danger` instances |
| Contact FAB button | `z-[9990]` | The floating "Contact Us Now" action button — sits above page modals so it remains accessible |
| **Contact / wizard overlays** | **`z-[9999]`** | `x-ui.contact-modal` overlay and `x-ui.custom-request-wizard` backdrop only — full-page flows that must occlude everything |

**Why three tiers?**  
Page modals (`z-[9800]`) render below the FAB (`z-[9990]`) so the contact button remains reachable even when a standard modal is open. The contact-modal and wizard (`z-[9999]`) cover everything — including the FAB — because they are full-page interaction flows.

New `x-ui.modal` instances (and all six variant wrappers) **must stay at `z-[9800]`**. New full-page overlay flows that must occlude the FAB use `z-[9999]`. Never go higher than `z-[9999]` without documented team review.

---

#### Rule 1 — Page Sections Must Use `isolation: isolate`

Any `<section>` element that contains positioned children with an explicit `z-index` **must** have the `isolate` class on its root `<section>` tag. This uses the CSS `isolation: isolate` property to self-contain the section's internal stacking context so nothing inside can ever compete with the modal overlays in the root stacking context.

**Required on:**
- `x-sections.category-hero` (image hero with `relative z-10` content wrapper)
- `x-sections.hero-full-bleed` (full-bleed image hero)
- `x-sections.cta-ready-to-get-started` (also contains `blur-3xl` which creates its own stacking context)
- `x-sections.map-section` (same as above)
- Any new section added with a `relative z-*` child or a CSS `filter`/`blur` element

```blade
{{-- CORRECT --}}
<section class="relative overflow-hidden isolate">
    <div class="relative z-10 ...">...</div>
</section>

{{-- WRONG — missing isolate; hero content will bleed above modal overlays --}}
<section class="relative overflow-hidden">
    <div class="relative z-10 ...">...</div>
</section>
```

**Why it matters:** Without `isolate`, a `div.relative.z-10` inside a section participates directly in the root stacking context at z-index 10. A modal overlay at z-[9999] should win — but CSS `filter: blur()`, `will-change: transform`, and `overflow: hidden` combined with `position: relative` can create unexpected stacking behaviors across browsers. `isolate` eliminates the ambiguity entirely.

---

#### Rule 2 — Hand-Rolled Overlays Must Use `x-teleport="body"`

Any `position: fixed` overlay backdrop that you write by hand inside an Alpine.js `x-data` component **must** be wrapped in `<template x-teleport="body">`. This moves the backdrop DOM node to be a direct child of `<body>` at runtime, guaranteeing that CSS `transform`, `will-change`, `filter`, and `perspective` on any ancestor element cannot alter the fixed positioning or stacking context of the backdrop.

> **`x-ui.modal` is NOT subject to this rule and does NOT use `x-teleport`.** It is included as a top-level Blade component outside any transformed ancestor, so it is already correctly positioned in the DOM. Do not add `x-teleport` to `x-ui.modal` or its six variant wrappers.

```blade
{{-- ✅ CORRECT — hand-rolled overlay, teleported to <body> at runtime --}}
<div x-data="{ isOpen: false, ... }">

    <template x-teleport="body">
        <div
            x-show="isOpen"
            class="fixed inset-0 z-[9999] flex items-center justify-center ..."
            role="dialog"
            aria-modal="true"
        >
            {{-- panel content --}}
        </div>
    </template>

</div>
```

```blade
{{-- ❌ WRONG — hand-rolled overlay without teleport; may be trapped by a transformed ancestor --}}
<div x-data="{ isOpen: false, ... }">

    <div
        x-show="isOpen"
        class="fixed inset-0 z-[9999] ..."
    >
        {{-- panel content --}}
    </div>

</div>
```

The `x-teleport` wrapper keeps full access to the parent component's Alpine data scope (`isOpen`, all wizard/modal state). Event listeners on the outer `x-data` div (`@open-modal.window`, `@keydown.escape.window`, etc.) continue to work normally.

**Applied to:**
- `x-ui.custom-request-wizard` — backdrop teleported to body
- `x-ui.contact-modal` — overlay teleported to body
- Any new hand-rolled full-page overlay added in future phases

**Not applied to:**
- `x-ui.modal` and all six variant wrappers — use the component; never roll your own

---

#### Rule 3 — Never Nest Stacking Context Creators Inside Modals

Inside a modal panel, do not use CSS properties that create new stacking contexts (`transform`, `filter`, `will-change`, `opacity < 1` on a container) unless absolutely required for animation. If you need an animation on the panel entry, apply the transition to the panel wrapper itself, not to inner content divs.

---

### Form Controls (MANDATORY)

All interactive form controls inside modals and wizard panels must use the branded patterns below. **Never invent custom toggle or selection controls** — always use these exact patterns. The demo is at `/demo/modals` → "Form Controls" section.

#### Toggle Switch (MANDATORY)

Used for binary on/off choices. The `rounded-full` pill shape is **the only exception** to the no-rounded-corners rule — toggle thumbs and tracks retain `rounded-full`.

```html
<div class="flex items-center gap-4 py-4">
    <div class="flex-1 min-w-0">
        <p class="text-sm font-semibold text-charcoal">Label Text</p>
        <p class="text-xs text-charcoal-light mt-0.5">Supporting description</p>
    </div>
    <button
        type="button"
        role="switch"
        :aria-checked="myState.toString()"
        @click="myState = !myState"
        :class="myState ? 'bg-sunburst' : 'bg-linen-dark'"
        class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1"
    >
        <span
            :class="myState ? 'translate-x-6' : 'translate-x-1'"
            class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
        ></span>
    </button>
</div>
```

**Rules:**
- Track size: `w-11 h-6` — never smaller
- Thumb: `w-4 h-4`, `translate-x-6` (on) / `translate-x-1` (off)
- On color: `bg-sunburst`; Off color: `bg-linen-dark`
- Always use `role="switch"` and `:aria-checked`
- Container rows use `divide-y divide-linen-dark` to separate items

**Toggle grid cards** (when toggles need a 3-per-row grid layout — e.g. garment or specialty item selection):

```html
<div class="grid grid-cols-3 gap-2">
    <button
        type="button"
        role="switch"
        :aria-checked="myState.toString()"
        @click="myState = !myState"
        :class="myState ? 'bg-sunburst border-sunburst' : 'bg-white border-linen-dark hover:border-sunburst/50'"
        class="flex items-center justify-between gap-2 px-3 py-3 border-2 transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1 w-full text-left"
    >
        <span class="text-xs font-semibold text-charcoal leading-tight">Label</span>
        <span
            :class="myState ? 'bg-charcoal/25' : 'bg-linen-dark'"
            class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200"
        >
            <span
                :class="myState ? 'translate-x-6' : 'translate-x-1'"
                class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
            ></span>
        </span>
    </button>
</div>
```

Card toggle rules: card border `border-2`; selected = `bg-sunburst border-sunburst`; unselected = `bg-white border-linen-dark`; thumb track uses `bg-charcoal/25` (on) / `bg-linen-dark` (off) so the white thumb remains visible on the gold card.

#### Segmented Radio (Compact horizontal row)

Used when there are 2–4 exclusive choices that should all be visible at once on one row. The selected option gets the sunburst fill.

```html
<div class="flex gap-2">
    {{-- repeat for each option --}}
    <label class="flex-1 cursor-pointer group">
        <input type="radio" name="my-group" value="option-a" x-model="myField" class="sr-only">
        <span
            class="flex items-center justify-center px-2 py-2.5 border-2 text-xs font-semibold text-center transition-colors duration-150 w-full"
            :class="myField === 'option-a' ? 'border-sunburst bg-sunburst text-charcoal' : 'border-linen-dark bg-white text-charcoal group-hover:border-sunburst/50'"
        >Option A</span>
    </label>
</div>
```

Rules: `sr-only` hides the native radio; the `<span>` acts as the visual. Selected = `bg-sunburst border-sunburst`. Each option is `flex-1` so they share equal width. Never use `rounded` on the spans.

#### Radio Group (Inline Yes/No or short option lists) — MANDATORY CENTER ALIGNMENT

Used for small sets of 2–3 labeled native radio inputs inside modals and wizard panels (e.g. "Yes / No", "Company / Personal").

```html
<div class="flex gap-6 justify-center">
    <label class="flex items-center gap-2 cursor-pointer">
        <input type="radio" name="my-group" value="yes"
            x-model="myField"
            class="w-4 h-4 accent-sunburst">
        <span class="text-sm font-medium text-charcoal">Yes</span>
    </label>
    <label class="flex items-center gap-2 cursor-pointer">
        <input type="radio" name="my-group" value="no"
            x-model="myField"
            class="w-4 h-4 accent-sunburst">
        <span class="text-sm font-medium text-charcoal">No</span>
    </label>
</div>
```

**Rules:**
- The wrapping `<div>` **must** include `justify-center` — radio groups are always horizontally centered inside modal/wizard panels. This is non-negotiable.
- Input size: `w-4 h-4 accent-sunburst` — never change the size or accent color.
- Label text: `text-sm font-medium text-charcoal`.
- Gap between options: `gap-6`; gap between radio and its label: `gap-2`.
- For card-style radio rows (radio inside a bordered card header), the card's flex container must also use `justify-center`:
  ```html
  <div class="flex items-center justify-center gap-3 p-4">
      <input type="radio" … class="w-4 h-4 flex-shrink-0 accent-sunburst">
      <label …>Card Option Label</label>
  </div>
  ```
- The group label/question heading above a radio group must also be `text-center`.

#### Standard Text / Email / Tel / Date / Textarea Inputs

```html
<input
    type="text"
    x-model="myField"
    placeholder="Placeholder…"
    class="w-full px-3 py-2.5 text-sm border border-linen-dark focus:outline-none focus:border-sunburst focus:ring-1 focus:ring-sunburst/50 bg-white text-charcoal placeholder:text-charcoal-lighter transition-colors"
>
```

Rules: No `rounded-*` ever. Border `border-linen-dark`; focus `border-sunburst ring-1 ring-sunburst/50`. Rush-state inputs add `border-sunburst ring-1 ring-sunburst/30` unconditionally.

#### Field Labels

```html
<label class="block text-xs font-semibold text-charcoal-light uppercase tracking-wide mb-1.5">
    Field Name <span class="text-error">*</span>
</label>
```

- Required indicator: `<span class="text-error">*</span>` — never the word "required"
- Labels inside modal body sections: `text-xs font-semibold text-charcoal-light uppercase tracking-wide`
- Section heading labels (non-uppercase): `text-xs font-semibold text-charcoal-light mb-1.5` (omit `uppercase tracking-wide`)

---

#### x-ui.contact-modal

Anchored FAB (floating action button) fixed to the bottom-right of every page. Opens a full branded quote/contact form on click. **Globally injected in `layouts/page.blade.php`** — automatically skipped on `cart`, `checkout`, and `order-confirmation` pages.

Do not add this component to individual page files — it is already present via the layout.

**Props (all optional):**

| Prop | Type | Default |
|------|------|---------|
| `buttonLabel` | string | `'Contact Us Now'` |
| `modalTitle` | string | `'Get a Free Quote'` |
| `modalSubtitle` | string | Brand tagline |
| `logoSrc` | string | `/images/logos/top5-logo.gif` |
| `logoAlt` | string | `'Top 5 Percent'` |

**Z-index:** FAB at `z-[9990]`, overlay at `z-[9999]`.

```blade
{{-- Already in layouts/page.blade.php — do not add to page files --}}
{{-- Override props only if you need a custom label on a specific page --}}
<x-ui.contact-modal button-label="Get a Quote" />
```

#### x-ui.modal-quick-view

Inline product preview overlay. Opens via the `open-quick-view` window event (not `open-modal`). Used on product listing pages to preview a product without navigating away. Each instance is self-contained and matched by its DOM element ID.

**Props:**

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | string | `''` | Product name |
| `price` | string | `''` | Display price (e.g. `'$49.99'`) |
| `originalPrice` | string | `null` | Strike-through original price if on sale |
| `description` | string | `''` | Short product description |
| `image` | string | `null` | Single image URL (used when `images` is empty) |
| `images` | array | `[]` | Array of image URLs for the carousel |
| `href` | string | `'#'` | "View full product" link |
| `variants` | array | `[]` | Array of variant option strings (e.g. `['S', 'M', 'L']`) |

**Event API:**

| Event | Payload | Direction |
|-------|---------|-----------|
| `open-quick-view` | `{ id: elementId }` | dispatch to open a specific instance |

**Z-index:** Overlay at `z-50`.

**Branding notes:** Square corners on the panel. No `rounded-*`. The close button uses `rounded-full` only on the icon circle — this is the one permitted exception alongside the FAB halo.

```blade
{{-- Trigger (dispatches open-quick-view with the element ID) --}}
<button @click="$dispatch('open-quick-view', { id: 'qv-banner-001' })">
    Quick View
</button>

<x-ui.modal-quick-view
    id="qv-banner-001"
    title="Custom Banner"
    price="$49.99"
    description="Full-colour indoor/outdoor vinyl banner."
    :images="['/images/products/banner-1.jpg', '/images/products/banner-2.jpg']"
    href="/products/custom-banner"
    :variants="['24×36\"', '36×48\"', '48×72\"']"
/>
```

```blade
{{-- Product card with image --}}
<x-ui.card-product
    title="Custom Banner"
    description="Indoor/outdoor vinyl banner"
    price="$49.99"
    image="/images/products/banner.jpg"
/>

{{-- Service card (no icons, gold accent line) --}}
<x-ui.card-service
    title="Custom Signs"
    description="Professional signage solutions for your business."
/>

{{-- Testimonial card --}}
<x-ui.card-testimonial
    quote="Outstanding quality and fast turnaround!"
    name="John D."
    label="Business Owner"
/>

{{-- Info card (dark) with link --}}
<x-ui.card-info-dark
    title="Free Shipping"
    description="On all orders over $50."
    linkText="Learn More"
    linkHref="/shipping"
/>

{{-- Info card (light) with warm gradient --}}
<x-ui.card-info-light
    title="Design Services"
    description="Our team can bring your vision to life."
    linkText="Get Started"
    linkHref="/design"
/>

{{-- FAQ accordion card --}}
<x-ui.card-faq
    question="How long does shipping take?"
    answer="Most orders ship within 5-7 business days."
/>

{{-- FAQ card open by default --}}
<x-ui.card-faq
    question="Do you offer rush orders?"
    answer="Yes! Rush orders are available for an additional fee."
    :open="true"
/>

{{-- Feature/step card --}}
<x-ui.card-feature
    step="01"
    title="Choose Your Product"
    description="Browse our catalog of signs, apparel, and promotional items."
/>
```

### Form Controls

These are the standard branded patterns for interactive form controls inside modals and wizard steps. Both are Alpine-driven with no external JS dependencies.

#### Radio Button Card Group

Horizontal flex of card-style labels. The native `<input type="radio">` is visually hidden (`sr-only`); the custom circular indicator inside each card provides the visual affordance. Alpine binds `selected` state and toggles border/background via `:class`.

**Structure (per card):** option name → circular radio indicator → description text

**Selected state:** `border-sunburst bg-sunburst/10`
**Unselected state:** `border-linen-dark bg-white hover:border-sunburst hover:bg-linen`
**Indicator:** `w-5 h-5 border-2 rounded-full` ring; `w-2.5 h-2.5 bg-sunburst rounded-full` inner dot; dot fades with `opacity-0` → `opacity-100`

**Rules:**
- Cards use `border-2` (not `border`). No `rounded-*` on the card itself — square corners only.
- The outer ring and inner dot are always `rounded-full` (circle is the semantic shape of a radio control).
- Use `bg-sunburst` (never `accent-color` CSS or native radio styling). Do not use `style="accent-color:..."`.
- Wrap the group in `x-data="{ selected: null }"` (or a pre-selected default value).

```blade
<div x-data="{ selected: null }" class="flex gap-3">

    <label
        :class="selected === 'standard'
            ? 'border-sunburst bg-sunburst/10'
            : 'border-linen-dark bg-white hover:border-sunburst hover:bg-linen'"
        class="flex-1 flex flex-col items-center gap-1.5 px-3 py-4 border-2 cursor-pointer text-center transition-colors"
    >
        <input type="radio" name="group" value="standard" class="sr-only" @change="selected = 'standard'">
        <span class="text-sm font-bold text-charcoal">Standard</span>
        <span class="my-1.5 w-5 h-5 border-2 rounded-full flex items-center justify-center transition-colors"
            :class="selected === 'standard' ? 'border-sunburst' : 'border-linen-dark'">
            <span class="w-2.5 h-2.5 bg-sunburst rounded-full transition-opacity"
                :class="selected === 'standard' ? 'opacity-100' : 'opacity-0'"></span>
        </span>
        <span class="text-xs text-charcoal-light leading-snug">Description text</span>
    </label>

    {{-- Repeat for each option --}}

</div>
```

#### Toggle Switch

A pill-shaped `<button role="switch">` with an absolutely positioned white thumb that slides left/right. Background colour changes with Alpine `:class`. `overflow-hidden` on the track prevents thumb bleed-out. `left-0` on the thumb anchors it to the track's left edge before translation.

**On state:** `bg-sunburst` track, thumb at `translate-x-6`
**Off state:** `bg-linen-dark` track, thumb at `translate-x-1`
**Track:** `w-11 h-6 rounded-full relative overflow-hidden`
**Thumb:** `absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow`

**Rules:**
- Always include `role="switch"` and `:aria-checked="state.toString()"` for accessibility.
- `translate-x-1` and `translate-x-6` are safelisted in `tailwind.config.js` — they only appear inside Alpine `:class` bindings and would be purged otherwise.
- Wrap multiple toggles in a container with `divide-y divide-linen-dark`; each row uses `flex items-center gap-4 py-4`.
- Use `focus:ring-2 focus:ring-sunburst focus:ring-offset-1` for keyboard focus.

```blade
<div x-data="{ on: false }" class="flex items-center gap-4 py-4">
    <div class="flex-1 min-w-0">
        <p class="text-sm font-semibold text-charcoal">Option Label</p>
        <p class="text-xs text-charcoal-light mt-0.5">Short description of what this controls</p>
    </div>
    <button
        type="button"
        role="switch"
        :aria-checked="on.toString()"
        @click="on = !on"
        :class="on ? 'bg-sunburst' : 'bg-linen-dark'"
        class="relative flex-shrink-0 w-11 h-6 overflow-hidden rounded-full transition-colors duration-200
               focus:outline-none focus:ring-2 focus:ring-sunburst focus:ring-offset-1"
    >
        <span
            :class="on ? 'translate-x-6' : 'translate-x-1'"
            class="absolute left-0 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-200"
        ></span>
    </button>
</div>
```

### Example Page Structure

All pages use the `x-layouts.page` Blade component, which already includes the navigation sandwich pattern, header, footer, cart drawer Livewire component, and the global contact FAB. Page files contain only `x-sections.*` and `x-ui.*` tags inside the default slot.

```blade
{{-- resources/views/pages/custom-apparel/index.blade.php --}}
<x-layouts.page
    title="Custom Apparel"
    metaDescription="Custom shirts, hoodies, and caps in Joliet, IL."
    currentPage="custom-apparel"
>
    <x-sections.hero-full-bleed
        heading="Custom Apparel Made Your Way"
        image="/images/custom-shirts/banner.jpg"
    />
    <x-sections.lp-category-banners :banners="$banners" />
    <x-sections.our-services />
    <x-sections.carousel-rotating-images :images="$carouselImages" :visible="3" />
    <x-sections.card-banner-slide-in image="..." direction="left" />
    <x-sections.review-banner />
    <x-sections.cta-ready-to-get-started />
</x-layouts.page>
```

**What `x-layouts.page` provides automatically (do not add these to page files):**
- Top notification bar
- Navigation banners + nav bar
- Cart drawer (Livewire)
- Footer
- `x-ui.contact-modal` FAB (skipped on `cart`, `checkout`, `order-confirmation`)

Reference: [Laravel Blade Components Documentation](https://laravel.com/docs/11.x/blade#components)

---

## Color Palette

The palette consists of **5 core brand colors + white**, each with up to 3 variants (light, default, dark), plus **3 semantic colors** for functional UI states.

### Core Brand Colors (5 + White)

#### Olive
Social media hover tags exclusively

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Default | Olive | `#A39822` | 163, 152, 34 | 55°, 65%, 39% |

#### Sunburst Gold
Primary CTAs, brand moments, accents, creative sections

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Light | Sunburst Light | `#FFD93D` | 255, 217, 61 | 48°, 100%, 62% |
| Default | Sunburst Gold | `#FFC20E` | 255, 194, 14 | 45°, 100%, 53% |
| Dark | Sunburst Dark | `#E6A500` | 230, 165, 0 | 43°, 100%, 45% |

#### Azure Blue
Secondary CTAs, links, professional sections, informational badges

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Light | Azure Light | `#5A9AE8` | 90, 154, 232 | 213°, 77%, 63% |
| Default | Azure Blue | `#3273DC` | 50, 115, 220 | 217°, 72%, 53% |
| Dark | Azure Dark | `#2558A8` | 37, 88, 168 | 217°, 64%, 40% |

#### Soft Linen
Hero section, main backgrounds, breathing room, footer background

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Light | Linen Light | `#FAF9F5` | 250, 249, 245 | 48°, 33%, 97% |
| Default | Soft Linen | `#F2F0E6` | 242, 240, 230 | 50°, 27%, 93% |
| Dark | Linen Dark | `#E8E5D8` | 232, 229, 216 | 48°, 28%, 88% |

#### Charcoal
Navigation bar background, all body text and headers

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Lighter | Charcoal Lighter | `#999999` | 153, 153, 153 | 0°, 0%, 60% |
| Light | Charcoal Light | `#555555` | 85, 85, 85 | 0°, 0%, 33% |
| Default | Charcoal | `#2C2C2C` | 44, 44, 44 | 0°, 0%, 17% |
| Dark | Charcoal Dark | `#1A1A1A` | 26, 26, 26 | 0°, 0%, 10% |

#### White
Cards, containers, alternating backgrounds

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Default | White | `#FFFFFF` | 255, 255, 255 | 0°, 0%, 100% |

#### Blush Pink
Decorative accent; use sparingly for promotional or seasonal highlights

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Default | Blush Pink | `#FBCDCE` | 251, 205, 206 | 359°, 88%, 89% |

### Semantic Colors (3)

| Color | Hex Code | RGB | HSL | Usage |
|-------|----------|-----|-----|-------|
| Success | `#4CAF50` | 76, 175, 80 | 122°, 39%, 49% | Form success states, confirmations |
| Warning | `#F9A825` | 249, 168, 37 | 37°, 95%, 56% | Warning notifications, cautions |
| Error | `#C62828` | 198, 40, 40 | 0°, 66%, 47% | Form errors, alerts, destructive actions |

### Color Hierarchy

1. **Sunburst Gold (#FFC20E):** Primary brand color - Primary CTAs, brand moments, accents
2. **Azure Blue (#3273DC):** Secondary brand color - Secondary CTAs, links, professional sections, informational badges
3. **Soft Linen (#F2F0E6):** Background color - Hero section, main backgrounds, breathing room
4. **Charcoal (#2C2C2C):** Text and navigation color - All body text, headers, navigation bar background
5. **White (#FFFFFF):** Container color - Cards, containers, alternating backgrounds
6. **Olive (#A39822):** SM (Social Media) background hover color exclusively

### Section Background Rules

- **Primary Section Background:** Soft Linen `#F2F0E6`
- **Alternate Section Background:** White `#FFFFFF`
- **Content Sections:** Alternate between Soft Linen and White

### Navigation Bar Requirements (MANDATORY)

**Navigation bar uses Charcoal (#2C2C2C) background with white text.**

- **Navigation Background:** Charcoal `#2C2C2C`
- **Navigation Text:** White `#FFFFFF`
- **Navigation Active/Selected Link:** Azure Blue `#3273DC`
- **Navigation Hover:** Sunburst Gold `#FFC20E`
- **Navigation Separators:** Wrapped with dual-line thin banners (sunburst + charcoal)

### Footer Requirements (MANDATORY)

**Footer uses Soft Linen (#F2F0E6) background.**

- **Footer Background:** Soft Linen `#F2F0E6`
- **Footer Text:** Charcoal `#2C2C2C`
- **Footer Links:** Azure Blue `#3273DC`
- **Footer Link Hover:** Azure Dark `#2558A8`

### Hero Section Requirements

**Hero section uses White (#FFFFFF) background.**

- **Hero Background:** White `#FFFFFF`
- **Hero Headline:** Charcoal `#2C2C2C`
- **Hero Subheadline/Lead-in:** Olive `#A39822`
- **Hero Primary CTA:** Charcoal background, Gold text
- **Hero Secondary CTA:** White background, Charcoal text with border

### Text Color Guidelines

- **On Soft Linen (#F2F0E6):** Use Charcoal `#2C2C2C` for body text
- **On White (#FFFFFF):** Use Charcoal `#2C2C2C` for body text
- **On Sunburst Gold (#FFC20E):** Use Charcoal `#2C2C2C` for maximum contrast
- **On Azure Blue (#3273DC):** Use White `#FFFFFF` for buttons and headers
- **Links on light backgrounds:** Use Azure Blue `#3273DC`, hover Azure Dark `#2558A8`

---

## Typography

### Font Families

**Primary Font:** `"Titillium Web", sans-serif`
- Use for: All headings (H1-H5), body text, navigation, buttons, forms
- Weights: 300 (Light), 400 (Regular), 600 (SemiBold), 700 (Bold)
- Source: Google Fonts
- Style: Modern, technical sans-serif with excellent readability

**Fallback Stack:** `"Titillium Web", Arial, sans-serif`

### Font Import
```css
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap');
```

### Text Transform Rules

**Never use all caps (uppercase) anywhere on the site.** This includes:
- Headings and subheadings (H1-H5)
- Navigation links and buttons
- Section lead-in labels
- Badge and card text
- Any body or caption text

Do not use the CSS `text-transform: uppercase` property or the Tailwind `uppercase` class. All text should use natural sentence case or title case as appropriate. This applies to all Blade components, sections, and layouts.

### Typography Scale

| Element | Font | Size (Desktop) | Size (Mobile) | Weight | Line Height | Letter Spacing |
|---------|------|----------------|---------------|--------|-------------|----------------|
| H1 | Titillium Web | 32px | 28px | 700 | 1.2 | 0em |
| H2 | Titillium Web | 32px | 28px | 700 | 1.3 | 0em |
| H3 | Titillium Web | 28px | 24px | 600 | 1.3 | 0em |
| H4 | Titillium Web | 24px | 20px | 600 | 1.4 | 0em |
| H5 | Titillium Web | 20px | 18px | 600 | 1.4 | 0.01em |
| Body Large | Titillium Web | 22px | 20px | 400 | 1.7 | 0em |
| Body | Titillium Web | 20px | 18px | 400 | 1.6 | 0em |
| Body Small | Titillium Web | 18px | 16px | 400 | 1.5 | 0.01em |
| Caption | Titillium Web | 16px | 14px | 400 | 1.4 | 0.02em |
| Button | Titillium Web | 18px | 16px | 600 | 1 | 0.05em |
| Nav Link | Titillium Web | 18px | 16px | 600 | 1 | 0.02em |

---

## Brand Voice & Messaging

### Tone Characteristics
- **Professional:** Convey expertise and reliability
- **Refined:** Sophisticated language without being pretentious
- **Confident:** Assertive but approachable
- **Quality-focused:** Emphasize craftsmanship and attention to detail

### Key Messaging Pillars
1. **Craftsmanship:** Highlighting quality materials and techniques
2. **Customization:** Tailored solutions for every client
3. **Reliability:** Fast turnaround without compromising quality
4. **Local Excellence:** Community-focused, personal service

### Writing Standards (MANDATORY)

- **No em dashes:** Never use the `—` character anywhere on the site. Rewrite the sentence, use a comma, or break it into two shorter sentences instead.
- **Reading level:** Write at a 7th grade reading level. Use short sentences and common everyday words. If a simpler word works, use it.
- **Laymen's terms:** Avoid industry jargon and technical terms. Write as if explaining to a customer who has never ordered a custom shirt or sign before. If a technical term is necessary, follow it with a plain-language explanation.
- **No all caps:** Never use uppercase text anywhere on the site (see also: Text Transform Rules).

**Quick reference — rewrites:**

| Avoid | Use instead |
|---|---|
| `Premium quality craftsmanship — delivered fast.` | `Premium quality, delivered fast.` |
| `Our vinyl heat-transfer process ensures durability.` | `Our vinyl prints are built to last wash after wash.` |
| `Utilizing state-of-the-art equipment` | `Using the latest printing equipment` |

---

## Logo Usage Guidelines

### Clear Space
- Minimum clear space around logo: Height of the "5" character on all sides
- Never crowd the logo with other elements

### Minimum Size
- Print: 1 inch width minimum
- Digital: 120px width minimum

### Color Variants
- Primary: White on dark backgrounds
- Secondary: Charcoal (#2C2C2C) on light backgrounds
- Accent: Sunburst Gold (#FFC20E) for premium applications

### Logo Asset
- **Source:** `https://top5pct.com/images/footer-images-top5percent-joliet/top5-logo.gif`

---

## Imagery Style

### Photography Direction
- High-contrast, editorial-style product photography
- Clean, uncluttered backgrounds (white, black, or neutral)
- Dramatic lighting emphasizing texture and detail
- Lifestyle shots showing products in professional contexts

### Image Treatment
- Subtle desaturation for cohesive look
- High clarity and sharpness
- Consistent color grading across all imagery
- Shadows should be deep but retain detail

### Do's
- Use high-resolution images (minimum 2x for retina)
- Maintain consistent aspect ratios within galleries
- Show products from multiple angles
- Include close-up detail shots

### Don'ts
- Avoid busy or distracting backgrounds
- No low-quality or pixelated images
- Avoid over-saturated colors
- No stock photos that look generic

---

## Visual References

### Inspiration Sources
1. **KITH** - Minimalist product presentation, clean grid layouts
2. **A-COLD-WALL** - Industrial luxury aesthetic, bold typography
3. **Top5pct.com** - Local business authenticity with premium feel
4. **Hypebeast** - Editorial product showcases
5. **END Clothing** - Sophisticated e-commerce UX

### Mood Keywords
- Minimalist
- Premium
- Sophisticated
- Clean
- Modern
- Professional
- Refined
- Elevated

---

## Semantic HTML Requirements

### Heading Hierarchy (H2-H5 Preference)
- **Use heading tags (H2-H5) instead of generic `<p>` tags** for all text that serves as a title, label, or section identifier
- Reserve `<p>` tags strictly for body paragraph content
- This improves SEO, accessibility, and document structure

| Element | Tag | Usage |
|---------|-----|-------|
| Page Title | `<h1>` | One per page, main page title only |
| Section Titles | `<h2>` | Major sections (Services, Products, About) |
| Subsection Titles | `<h3>` | Card titles, feature headings |
| Item Labels | `<h4>` | Product names, testimonial names |
| Minor Headings | `<h5>` | Captions with emphasis, small labels |
| Body Text | `<p>` | Paragraphs of descriptive content only |

### Example Structure
```html
<section>
    <h2>Our Services</h2>
    <div class="service-card">
        <h3>Custom Signage</h3>
        <h4>Business Signs</h4>
        <p>High-quality materials for lasting impressions.</p>
    </div>
</section>
```

---

## Button Styles

All buttons are implemented as Blade components (see **UI Button Components** above). Each renders as `<a>` when `href` is provided, or `<button>` otherwise. All support `$attributes->merge()` for custom classes.

### Button Style Matrix

| Component | Background | Text | Border | Hover Behavior |
|-----------|------------|------|--------|----------------|
| `button-gold-gradient` | Gold gradient (light → dark) | Charcoal | None | Brighter gradient, slight scale up |
| `button-gold-charcoal` | Sunburst Gold solid | Charcoal | None | Darker gold background |
| `button-charcoal-gold` | Charcoal | Sunburst Gold | None | Dark Charcoal background |
| `button-blue-white` | Azure Blue | White | None | Azure Dark background |
| `button-gold-white` | Sunburst Gold | White | None | Darker gold background |
| `button-white-charcoal` | White | Charcoal | 1px Charcoal | Linen bg, Azure text |
| `button-outline-charcoal` | Transparent | Charcoal | 2px Charcoal | Fills Charcoal bg, White text |
| `button-outline-gold` | Transparent | Sunburst Gold | 2px Sunburst Gold | Fills Gold bg, Charcoal text |
| `button-text-link` | Transparent | Azure Blue + arrow (→) | None | Underline animation |

### Button States
- **Hover:** Slight scale (1.02) + shadow increase (solid buttons), fill transition (outline buttons)
- **Active:** Scale (0.98) + deeper shadow
- **Disabled:** 50% opacity, no pointer events
- **Focus:** 2px Azure Blue (#3273DC) outline for accessibility

### Badge Styles

All badges are implemented as Blade components (see **UI Badge Components** above). Rounded-full pill shape, `text-xs font-semibold`.

| Component | Background | Text | Border |
|-----------|------------|------|--------|
| `badge-featured` | Gold gradient | Charcoal | None |
| `badge-new` | Azure Blue | White | None |
| `badge-success` | Success Green (#4CAF50) | White | None |
| `badge-sold-out` | Charcoal | White | None |
| `badge-default` | Transparent | Charcoal Light | 1px Charcoal Light |

---

## Form Element Styles

- **Input Height:** 48px
- **Border:** 1px solid Border Gray (#E0E0E0)
- **Border Focus:** 2px solid Azure Blue (#3273DC)
- **Border Radius:** 2px
- **Background:** White (#FFFFFF)
- **Label Style:** Above input, Titillium Web font, 600 weight, Charcoal (#2C2C2C)
- **Placeholder:** Charcoal Light (#555555)
- **Error State:** 2px solid Error (#C62828), error message below in Error color
- **Success State:** 2px solid Success (#4CAF50)

---

## Animation & Transition Styles

### Standard Transitions
- **Duration:** 200-300ms for UI elements
- **Easing:** `cubic-bezier(0.4, 0, 0.2, 1)` (ease-out)
- **Properties:** opacity, transform, background-color

### Card Component Rules (MANDATORY)
- **Never use icons** in card component types. Icons are prohibited in all `x-ui.card-*` components.
- **Check marks are acceptable** — they are not considered icons.
- Cards use White (#FFFFFF) backgrounds by default with `shadow-lg` and `hover:shadow-gold-lg` transition.
- Dark variant cards (`card-info-dark`) use Charcoal (#2C2C2C) background.
- All cards include `hover:-translate-y-1` lift effect on hover.
- `card-service` uses a gold accent line (`w-12 h-1 bg-sunburst`) instead of an icon.
- `card-info-light` uses Warm Gradient background (`bg-warm-gradient`) with `border border-sunburst/30`.
- `card-faq` uses Alpine.js (`x-data`, `x-show`) for accordion expand/collapse behavior.
- All card components accept `$attributes->merge()` for custom classes.

See **UI Card Components** in the Component Architecture section above for full prop details.

### Hover Effects
- **Buttons:** Slight scale (1.02) + shadow increase (solid), fill transition (outline)
- **Cards:** Shadow gold glow + Y-axis lift (-translate-y-1)
- **Links:** Underline animation from left to right

### Page Scroll Behavior
- **Global smooth scrolling:** `html { scroll-behavior: smooth; }` set in `app.css`. All in-page anchor navigation (`#section-id` links, hero primary buttons, Get Directions, any same-page jump) scrolls smoothly instead of snapping.
- **Programmatic scroll:** Components that trigger in-page navigation (e.g. `ui.banner-get-directions`) must use `element.scrollIntoView({ behavior: 'smooth' })` — never `location.hash` assignment, which bypasses the smooth behavior in some browsers.

### Scrollbar Styling (MANDATORY)
- **All scrollable areas site-wide must use sunburst-branded scrollbars.** Apply the `.scrollbar-sunburst` CSS utility class to any element with `overflow-y-auto` or `overflow-y-scroll`.
- **Thumb:** `var(--color-sunburst)` — `#FFC20E`
- **Thumb hover:** `var(--color-sunburst-dark)` — `#E6A500`
- **Track:** `var(--color-linen)` — `#F2F0E6`
- **Width:** 6px (webkit); `scrollbar-width: thin` for Firefox
- **Implementation:** The `.scrollbar-sunburst` component class is defined in `resources/css/app.css` and compiled into the build. Do not use native unstyled scrollbars anywhere in the UI.
- **Modal bodies** — `scrollbar-sunburst` is applied directly in `x-ui.modal` when `scrollBody` is true; no manual class needed on modal content.
- **Custom dropdown lists** — add `scrollbar-sunburst` explicitly on the container that receives `overflow-y-auto`.

### Scroll Animations
- **Trigger:** When element enters viewport (50% visible)
- **Effect:** Fade up with subtle Y translation (20px)
- **Stagger:** 100ms delay between sequential elements

### Loading States
- Skeleton screens for content loading
- Smooth fade-in when content appears
- Spinner with Sunburst Gold (#FFC20E) accent for form submission

---

## Footer Branding

- **Background:** Soft Linen (#F2F0E6)
- **Text Color:** Charcoal (#2C2C2C)
- **Secondary Text:** Charcoal Light (#555555)
- **Link Color:** Azure Blue (#3273DC), Sunburst Gold (#FFC20E) on hover
- **Dividers:** Border Gray (#E0E0E0)
- **Copyright Text:** Caption size, Charcoal Light (#555555)

---

## CSS Custom Properties (Variables)

These variables are defined in `resources/css/app.css` and match the Tailwind config in `tailwind.config.js`. The CSS file is the source of truth for all custom properties.

### Complete Variable Definition (from resources/css/app.css)

```css
:root {
  /* ===================
     COLOR VARIABLES
     =================== */
  
  /* Sunburst Gold - Primary Brand Color */
  --color-sunburst-light: #FFD93D;
  --color-sunburst: #FFC20E;
  --color-sunburst-dark: #E6A500;
  
  /* Azure Blue - Secondary Brand Color */
  --color-azure-light: #5A9AE8;
  --color-azure: #3273DC;
  --color-azure-dark: #2558A8;
  
  /* Soft Linen - Background Color */
  --color-linen-light: #FAF9F5;
  --color-linen: #F2F0E6;
  --color-linen-dark: #E8E5D8;
  
  /* Charcoal - Text Color */
  --color-charcoal-lighter: #999999;
  --color-charcoal-light: #555555;
  --color-charcoal: #2C2C2C;
  --color-charcoal-dark: #1A1A1A;
  
  /* Olive - Social Media Hover Tags */
  --color-olive: #A39822;
  
  /* White - Container Color */
  --color-white: #FFFFFF;
  
  /* Semantic Colors */
  --color-success: #4CAF50;
  --color-warning: #F9A825;
  --color-error: #C62828;
  
  /* Semantic Aliases */
  --color-primary: var(--color-sunburst);
  --color-secondary: var(--color-azure);
  --color-background: var(--color-linen);
  --color-text: var(--color-charcoal);
  --color-link: var(--color-azure);
  --color-link-hover: var(--color-azure-dark);
  
  /* ===================
     TYPOGRAPHY VARIABLES
     =================== */
  
  /* Font Families */
  --font-primary: 'Titillium Web', Arial, sans-serif;
  --font-fallback: Arial, sans-serif;
  
  /* Font Weights */
  --font-weight-light: 300;
  --font-weight-regular: 400;
  --font-weight-semibold: 600;
  --font-weight-bold: 700;
  
  /* Font Sizes - Desktop */
  --font-size-h1: 32px;
  --font-size-h2: 32px;
  --font-size-h3: 28px;
  --font-size-h4: 24px;
  --font-size-h5: 20px;
  --font-size-body-lg: 22px;
  --font-size-body: 20px;
  --font-size-body-sm: 18px;
  --font-size-caption: 16px;
  --font-size-button: 18px;
  --font-size-nav: 18px;
  
  /* Font Sizes - Mobile (use with media queries) */
  --font-size-h1-mobile: 28px;
  --font-size-h2-mobile: 28px;
  --font-size-h3-mobile: 24px;
  --font-size-h4-mobile: 20px;
  --font-size-h5-mobile: 18px;
  --font-size-body-mobile: 18px;
  
  /* Line Heights */
  --line-height-heading: 1.2;
  --line-height-subheading: 1.3;
  --line-height-body: 1.6;
  --line-height-body-lg: 1.7;
  --line-height-tight: 1;
  
  /* Letter Spacing */
  --letter-spacing-tight: -0.01em;
  --letter-spacing-normal: 0;
  --letter-spacing-wide: 0.02em;
  --letter-spacing-button: 0.05em;
  
  /* ===================
     SPACING VARIABLES
     =================== */
  
  /* Base Unit: 4px */
  --spacing-unit: 4px;
  
  /* Spacing Scale */
  --spacing-1: 4px;    /* 1 unit */
  --spacing-2: 8px;    /* 2 units */
  --spacing-3: 12px;   /* 3 units */
  --spacing-4: 16px;   /* 4 units */
  --spacing-5: 20px;   /* 5 units */
  --spacing-6: 24px;   /* 6 units */
  --spacing-8: 32px;   /* 8 units */
  --spacing-10: 40px;  /* 10 units */
  --spacing-12: 48px;  /* 12 units */
  --spacing-16: 64px;  /* 16 units */
  --spacing-20: 80px;  /* 20 units */
  --spacing-24: 96px;  /* 24 units */
  
  /* Section Spacing */
  --section-padding-y: 80px;
  --section-padding-y-mobile: 48px;
  --section-gap: 64px;
  --section-gap-mobile: 40px;
  
  /* Container */
  --container-max-width: 1280px;
  --container-padding: 24px;
  --container-padding-mobile: 16px;
  
  /* ===================
     BORDER & RADIUS
     =================== */
  
  --border-width: 1px;
  --border-width-thick: 2px;
  --border-radius: 2px;
  --border-radius-md: 4px;
  --border-radius-lg: 8px;
  --border-radius-full: 9999px;
  
  /* ===================
     SHADOWS
     =================== */
  
  --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
  --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.15);
  
  /* ===================
     TRANSITIONS
     =================== */
  
  --transition-fast: 150ms;
  --transition-normal: 200ms;
  --transition-slow: 300ms;
  --transition-easing: cubic-bezier(0.4, 0, 0.2, 1);
  
  /* Shorthand Transitions */
  --transition-default: var(--transition-normal) var(--transition-easing);
  --transition-color: color var(--transition-default);
  --transition-background: background-color var(--transition-default);
  --transition-transform: transform var(--transition-default);
  --transition-opacity: opacity var(--transition-default);
  --transition-all: all var(--transition-default);
  
  /* ===================
     Z-INDEX SCALE
     =================== */
  
  --z-dropdown: 100;
  --z-sticky: 200;
  --z-fixed: 300;
  --z-modal-backdrop: 400;
  --z-modal: 500;
  --z-popover: 600;
  --z-tooltip: 700;
  
  /* ===================
     COMPONENT SPECIFIC
     =================== */
  
  /* Buttons */
  --btn-padding-x: 32px;
  --btn-padding-y: 16px;
  --btn-font-size: var(--font-size-button);
  --btn-font-weight: var(--font-weight-semibold);
  --btn-border-radius: var(--border-radius);
  
  /* Inputs */
  --input-height: 48px;
  --input-padding-x: 16px;
  --input-border-color: var(--color-gray-border);
  --input-focus-border-color: var(--color-primary);
  --input-border-radius: var(--border-radius);
  
  /* Cards */
  --card-padding: var(--spacing-6);
  --card-border-radius: var(--border-radius-md);
  --card-shadow: var(--shadow-md);
  
  /* Navigation */
  --nav-height: 80px;
  --nav-height-mobile: 64px;
  --nav-background: var(--color-charcoal);
  --nav-text-color: #FFFFFF;
  
  /* Footer */
  --footer-background: var(--color-linen);
  --footer-text-color: var(--color-charcoal);
}
```

### Alpine.js Integration

Alpine.js is bundled via Vite (imported in `resources/js/app.js`). The following CSS rule is required in `resources/css/app.css` to prevent flash of unstyled content on Alpine-powered components:

```css
[x-cloak] {
    display: none !important;
}
```

### Mobile Responsive Overrides

Font sizes and spacing automatically scale down on mobile via a media query override in `resources/css/app.css`:

```css
@media (max-width: 768px) {
  :root {
    --font-size-h1: var(--font-size-h1-mobile);
    --font-size-h2: var(--font-size-h2-mobile);
    --font-size-h3: var(--font-size-h3-mobile);
    --font-size-h4: var(--font-size-h4-mobile);
    --font-size-h5: var(--font-size-h5-mobile);
    --font-size-body: var(--font-size-body-mobile);
    --section-padding-y: var(--section-padding-y-mobile);
    --section-gap: var(--section-gap-mobile);
    --container-padding: var(--container-padding-mobile);
  }
}
```

### Base Layer Styles (from resources/css/app.css)

Global heading and link styles are applied via Tailwind's `@layer base`:

```css
@layer base {
  html { font-family: var(--font-primary); }
  body { @apply bg-white text-black antialiased; }
  h1 { @apply text-h1 font-bold; line-height: var(--line-height-heading); }
  h2 { @apply text-h2 font-bold; line-height: var(--line-height-heading); }
  h3 { @apply text-h3 font-semibold; line-height: var(--line-height-subheading); }
  h4 { @apply text-h4 font-semibold; line-height: var(--line-height-subheading); }
  h5 { @apply text-h5 font-semibold; line-height: var(--line-height-subheading); }
  a { @apply text-azure transition-colors duration-200; }
  a:hover { @apply text-azure/80; }
}
```

### Component Layer Utilities (from resources/css/app.css)

Reusable utility classes defined via Tailwind's `@layer components`:

```css
@layer components {
  .btn {
    @apply inline-flex items-center justify-center font-semibold text-sm rounded-sm transition-all duration-200;
    padding: var(--btn-padding-y) var(--btn-padding-x);
    letter-spacing: var(--letter-spacing-button);
  }
  
  .btn-primary {
    @apply bg-sunburst text-charcoal hover:scale-[1.02] hover:shadow-lg;
  }
  
  .btn-secondary {
    @apply bg-transparent text-charcoal border border-charcoal hover:bg-linen;
  }
  
  .btn-accent {
    @apply bg-azure text-white hover:bg-azure-dark;
  }
  
  .container-custom {
    max-width: var(--container-max-width);
    margin: 0 auto;
    padding: 0 var(--container-padding);
  }

  .section-padding {
    padding-top: var(--section-padding-y);
    padding-bottom: var(--section-padding-y);
  }

  .card {
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    box-shadow: var(--card-shadow);
  }

  .input-field {
    height: var(--input-height);
    padding: 0 var(--input-padding-x);
    border: var(--border-width) solid var(--input-border-color);
    border-radius: var(--input-border-radius);
    transition: var(--transition-all);
  }

  .input-field:focus {
    border-color: var(--input-focus-border-color);
    border-width: var(--border-width-thick);
    outline: none;
  }

  .banner-thin {
    width: 100%;
    height: 3px;
  }
}
```

### Tailwind CSS Integration (from tailwind.config.js)

The Tailwind config extends the default theme with brand-specific values. This is the **actual** config used in the project:

```javascript
import defaultTheme from 'tailwindcss/defaultTheme';

export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'sunburst': {
          light: '#FFD93D',
          DEFAULT: '#FFC20E',
          dark: '#E6A500',
        },
        'azure': {
          light: '#5A9AE8',
          DEFAULT: '#3273DC',
          dark: '#2558A8',
        },
        'linen': {
          light: '#FAF9F5',
          DEFAULT: '#F2F0E6',
          dark: '#E8E5D8',
        },
        'charcoal': {
          lighter: '#999999',
          light: '#555555',
          DEFAULT: '#2C2C2C',
          dark: '#1A1A1A',
        },
        'olive': {
          DEFAULT: '#A39822',
        },
        'blush-pink': '#FBCDCE',
        'success': '#4CAF50',
        'warning': '#F9A825',
        'error': '#C62828',
      },
      backgroundImage: {
        'gold-gradient': 'linear-gradient(135deg, #FFC20E 0%, #FFD93D 100%)',
        'gold-gradient-light': 'linear-gradient(135deg, #FFD93D 0%, #FFE680 100%)',
        'gold-gradient-dark': 'linear-gradient(135deg, #FFC20E 0%, #E6A500 100%)',
        'gold-gradient-horizontal': 'linear-gradient(90deg, #FFC20E 0%, #FFD93D 100%)',
        'warm-gradient': 'linear-gradient(135deg, #FFF9E6 0%, #F2F0E6 100%)',
      },
      fontFamily: {
        sans: ['Titillium Web', 'Arial', ...defaultTheme.fontFamily.sans],
      },
      fontSize: {
        'h1': ['32px', { lineHeight: '1.2', fontWeight: '700' }],
        'h2': ['32px', { lineHeight: '1.3', fontWeight: '700' }],
        'h3': ['28px', { lineHeight: '1.3', fontWeight: '600' }],
        'h4': ['24px', { lineHeight: '1.4', fontWeight: '600' }],
        'h5': ['20px', { lineHeight: '1.4', fontWeight: '600' }],
      },
      spacing: {
        '18': '72px',
        '22': '88px',
      },
      borderRadius: {
        'sm': '2px',
      },
      boxShadow: {
        'gold': '0 4px 20px rgba(255, 194, 14, 0.15)',
        'gold-lg': '0 8px 30px rgba(255, 194, 14, 0.25)',
        'gold-xl': '0 0 25px rgba(255, 194, 14, 0.55), 0 8px 45px rgba(255, 194, 14, 0.65)',
      },
    },
  },
  plugins: [],
};
```

### Custom Tailwind Class Quick Reference

These are brand-specific Tailwind classes available beyond the defaults:

#### Colors (use as `bg-`, `text-`, `border-`, etc.)
| Class prefix | Values |
|-------------|--------|
| `sunburst` | `sunburst-light`, `sunburst` (default), `sunburst-dark` |
| `azure` | `azure-light`, `azure` (default), `azure-dark` |
| `linen` | `linen-light`, `linen` (default), `linen-dark` |
| `charcoal` | `charcoal-lighter`, `charcoal-light`, `charcoal` (default), `charcoal-dark` |
| `olive` | `olive` (default only) |
| `blush-pink` | `blush-pink` (default only) |
| `success` | `success` |
| `warning` | `warning` |
| `error` | `error` |

#### Background Gradients
| Class | Description | Usage |
|-------|-------------|-------|
| `bg-gold-gradient` | Gold 135deg: `#FFC20E` → `#FFD93D` | Primary CTA backgrounds, featured badges |
| `bg-gold-gradient-light` | Gold 135deg: `#FFD93D` → `#FFE680` | Subtle gold accents, lighter gold highlights |
| `bg-gold-gradient-dark` | Gold 135deg: `#FFC20E` → `#E6A500` | Hover state for gold gradient, decorative corners |
| `bg-gold-gradient-horizontal` | Gold 90deg: `#FFC20E` → `#FFD93D` | Horizontal accent bars |
| `bg-warm-gradient` | Warm 135deg: `#FFF9E6` → `#F2F0E6` | Subtle warm section backgrounds |

#### Custom Box Shadows
| Class | Value | Usage |
|-------|-------|-------|
| `shadow-gold` | `0 4px 20px rgba(255, 194, 14, 0.15)` | Subtle gold glow on cards at rest |
| `shadow-gold-lg` | `0 8px 30px rgba(255, 194, 14, 0.25)` | Strong gold glow on card hover |
| `shadow-gold-xl` | `0 0 25px rgba(255,194,14,0.55), 0 8px 45px rgba(255,194,14,0.65)` | Intense halo glow — FAB hover, featured hero elements |

#### Custom Font Sizes
| Class | Size | Weight | Line Height |
|-------|------|--------|-------------|
| `text-h1` | 32px | 700 | 1.2 |
| `text-h2` | 32px | 700 | 1.3 |
| `text-h3` | 28px | 600 | 1.3 |
| `text-h4` | 24px | 600 | 1.4 |
| `text-h5` | 20px | 600 | 1.4 |
