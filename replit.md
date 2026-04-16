# Top 5 Percent E-Commerce Platform

## Overview

This project is a premium e-commerce website for "Top 5 Percent," a custom signage and apparel business in Joliet, IL. The platform aims to provide a sophisticated online presence, enabling customers to browse and purchase custom products. It focuses on a high-quality user experience and robust e-commerce functionality, positioning the business for growth in the custom apparel and signage market.

## User Preferences

- **"mnc"** = make no changes — when the user says "mnc", analyze and respond only; do not edit any files
- **Address the user as "boss"** — when the user calls me "shithead" (or similar), respond "yes boss" and get back on task
- Always use PHP for scripting and automation tasks — never any other language
- Always ask the user when unsure about something rather than making assumptions
- Maintain modular, small files (max 800 lines)
- Follow exact branding from top5pct.com
- Use semantic HTML (H2-H5 for structure)
- Premium, professional aesthetic
- Never use all caps / uppercase text anywhere on the site
- Always read docs/branding-requirements.md before any changes
- Always read docs/themes.md before making UI or design changes
- All components must be fully responsive across mobile, tablet, and desktop. Use Tailwind responsive prefixes (sm:, md:, lg:) for all layouts. Fixed widths must always have a mobile-safe counterpart (e.g. w-full sm:w-96, never bare w-96). No component is complete until it looks correct at all three breakpoints.
- Default image display size: 600×450px (4:3 ratio) — use `style="width:600px; height:450px; max-width:100%;"` as per card-image-with-text.blade.php
- Both demo pages (/demo and /demo/premium) must always show the actual blade component name, file path, and a full usage example (including aspect ratio) in every section's info block

## System Architecture

The platform is built on Laravel 11, utilizing the TALL stack (Tailwind CSS, Alpine.js, Livewire) for a modern, reactive frontend. Lunar PHP is integrated for core e-commerce functionalities.

**Key Architectural Decisions:**

-   **Modular Development:** Enforced with a strict 800-line file limit, promoting the use of Actions, Services, and Repository patterns.
-   **Component-Based UI:** Every HTML `<section>` is implemented as its own Blade or Livewire component, ensuring reusability and maintainability. Components are designed for Server-Side Rendering (SSR) to optimize SEO.
-   **Branding & UI/UX:** Adherence to a defined brand guide (`docs/branding-requirements.md`) for colors, typography (Titillium Web), and overall aesthetic. Specific UI components (buttons, badges, cards, banners) are standardized.
-   **SEO-First Design:** All page sections are SSR-enabled. Semantic HTML, structured headings (H2-H5), and mobile-first responsive design are prioritized.
-   **No All-Caps Rule:** A critical branding and UI/UX rule prohibiting the use of uppercase text anywhere on the site.
-   **Data Structure:** Comprehensive seeders for attributes (7 groups, 28+ filterable), collections (30 hierarchical), products (31 custom service products, 93 variants), and Top 5% branded merchandise (11 products, 79 variants via `Top5PctMerchSeeder`).
-   **Admin Panel:** Utilizes Lunar Hub for backend administration, accessible at `/hub`.
-   **Coding Standards:** Strict PHP typing, dependency injection, Action pattern for business logic, Larastan Level 5+ compliance, and Pest for testing.
-   **Cart & Checkout:** Lunar cart system with session-based cart management. Actions pattern (AddToCart, UpdateCartQuantity, RemoveFromCart). Cart drawer (slide-out), full cart page, and multi-step checkout with guest support.
-   **Payments:** Currently using offline payment mode (placeholder). Stripe adapter installed (lunarphp/stripe) and ready for activation with real API keys.

**Color Palette (5 + White, 3 variants each):**

-   **Olive:** `#A39822` (Headline lead-in, subheadings)
-   **Sunburst Gold:** `#FFC20E` (Primary CTAs, accents)
-   **Azure Blue:** `#3273DC` (Secondary CTAs, links)
-   **Soft Linen:** `#F2F0E6` (Hero, footer, backgrounds)
-   **Charcoal:** `#2C2C2C` (Navigation bar, text, headers)
-   **White:** `#FFFFFF` (Cards, containers)

**Typography:**

-   `'Titillium Web', Arial, sans-serif;`

**Project Structure Highlights:**

-   `app/Actions/`: Business logic (Cart/, Checkout/).
-   `app/Livewire/Cart/`: Cart Livewire components (CartIcon, CartDrawer, CartPage, CheckoutPage, OrderConfirmation).
-   `app/Livewire/Catalog/`: Catalog components (CollectionPage, ProductDetail, FeaturedProducts).
-   `resources/views/components/sections/`: Reusable section components (including `product-grid` which wraps the Livewire catalog).
-   `resources/views/components/ui/`: UI components (buttons, cards, banners, badges).
-   `resources/views/livewire/cart/`: Cart-related Blade views.
-   `resources/views/pages/`: Nested page views.
-   `docs/`: Extensive documentation covering branding, layout, SEO, cart, facets, admin, and collections architecture (`docs/lunar.collections.md`).

## Recent Changes

-   **Laravel Octane + FrankenPHP Production Server (Mar 2026):** Replaced `php artisan serve` (single-threaded dev server) with Laravel Octane v2.17.1 + FrankenPHP v1.12.1 in `scripts/startup.sh`. Octane keeps Laravel bootstrapped in memory between requests, eliminating per-request bootstrap overhead. FrankenPHP handles concurrent requests in parallel workers. Startup command: `php artisan octane:start --server=frankenphp --host=0.0.0.0 --port=5000 --admin-port=2019` (the `--admin-port` flag is required because FrankenPHP auto-calculates it as `2019 + (port - 8000)`, which is negative for port 5000). `OCTANE_SERVER=frankenphp` set in `.env` and `.env.example`.

-   **Mega Menu Rebuild + 22 New/Refactored Pages (Mar 2026):**
    -   **Navigation bar** rebuilt as Mega Menu Style 1: full-width flyout panels per category, 3-column sub-link layout + right-side dark ad panel with image/CTA. Alpine.js hover for desktop, accordion for mobile. 7 mega menu panels: Custom Apparel, Select a Sign, Stickers, Vehicle Decals, Promo Items, Design Services, About Us. Nav label changes: "Signs"→"Select a Sign", "Vehicle Graphics"→"Vehicle Decals", "Design It Yourself"→"Design Services".
    -   **New mega-menu-ad partial** at `resources/views/components/layout/mega-menu-ad.blade.php`.
    -   **File renames** (with 301 redirects from old URLs): `embroidery-shirts`→`embroidery`, `corporate-wear`→`corporate-wear-shirts`, `spirit-wear`→`spirit-wear-shirts`, `design-it-yourself`→`design-services`, `decals/stickers`→`stickers/standard-stickers`.
    -   **New stickers pages**: `/stickers` (landing), `/stickers/standard-stickers`, `/stickers/custom-shaped-stickers`.
    -   **New custom apparel pages**: `/custom-apparel/dye-sublimation`, `/custom-apparel/screen-printing`, `/custom-apparel/puff-shirts`.
    -   **New signs sub-pages**: `/signs/window-signs`, `/signs/wall-signs`, `/signs/floor-signs`, `/signs/door-signs`, `/signs/parking-signs`, `/signs/table-cloths`.
    -   **New promotional items sub-pages**: `/promotional-items/mugs`, `/promotional-items/can-koozies`, `/promotional-items/towels`, `/promotional-items/drink-coasters`, `/promotional-items/tote-bags`, `/promotional-items/mouse-pads`.
    -   **New design services sub-pages**: `/design-services/logo-design`, `/design-services/graphic-design`.
    -   **New company/about pages**: `/company` (using `x-sections.about-preview`), `/resources` (tips & articles hub).
    -   **Routes** fully updated in `routes/web.php` with organized sections, all new routes, and 301 redirects for all renamed URLs.
    -   All pages follow the mandatory section layout standard documented in `docs/megamenu.md`.

-   **DTF Drop Zone Components (Apr 2026):** Built two new file upload entry-point UI components, both fully branded and responsive:
    -   `x-ui.dtf-dropzone` (`resources/views/components/ui/dtf-dropzone.blade.php`) — medium-sized drag-and-drop zone. Linen background, dashed charcoal/linen border that turns gold on hover and red on drag-over. Blue folder SVG icon. Accepts PDF, AI, EPS, PNG, JPG, SVG, PSD (300 DPI min). Hidden file input triggered by click. On file select or drop, dispatches `open-dtf-upload-wizard` window event with `{ files }` detail (stub — wizard TBD). Includes accepted formats footer row with phone number link.
    -   `x-ui.banner-cta-dtf-dropzone` (`resources/views/components/ui/banner-cta-dtf-dropzone.blade.php`) — full-width charcoal banner with compact drop zone acting as the CTA (no classic button). Props: `position` (left/right — controls which side the dropzone sits on), `heading`, `subheading`, `id`. Two variants shown side-by-side on `/demo/modals`. Same drag-over, click, and event behavior as the medium dropzone.
    -   Both components demoed in the DTF Drop Zones section at the bottom of `/demo/modals`.

-   **Modal System (Apr 2026):** Built three site-native modal components — all pure Tailwind, no scoped CSS or custom CSS variables:
    -   `x-ui.modal` (`resources/views/components/ui/modal.blade.php`) — generic slot-driven modal. Props: `name` (required), `title`, `size` (sm/md/lg/xl/full), `variant` (default/dark/gold/success/warning/danger), `dismissible`, `scrollBody`, `maxHeight`, `headerClass`, `bodyClass`, `footerClass`. Named slots: `header`, `icon`, `title`, `footer`. Named Alpine window-event API: dispatch `open-modal`/`close-modal` with `{ name }`. Fires `modal-opened`/`modal-closed` events. Supports Livewire: `$this->dispatch('open-modal', name: 'x')`.
    -   `x-ui.modal-trigger` (`resources/views/components/ui/modal-trigger.blade.php`) — convenience trigger. Props: `modal` (required), `as` (button/a/div/span/close), `action` (open/close/toggle), `href`. Use `as="close"` inside footer slots as shorthand for close dispatch.
    -   `x-ui.contact-modal` (`resources/views/components/ui/contact-modal.blade.php`) — anchored FAB (fixed bottom-right, z-[9990]) with pulsing gold halo (Tailwind `animate-ping`). Props: `buttonLabel`, `modalTitle`, `modalSubtitle`, `logoSrc`, `logoAlt`. Inline Alpine form with fetch() POST to `/contact`. Shows success/error state; auto-closes 3s after success.
    -   Demo page at `/demo/modals` (`resources/views/pages/demo/modals.blade.php`) — shows all 6 variants, 5 sizes, dismissible control, icon/header/footer slot patterns, trigger element types, and the live FAB.

-   **Signs Landing Page & All Sub-Category Pages (Mar 2026):** Built `/signs` landing page with hero image (`top5pct-banner-joliet.jpg`), "Signs for Every Need" intro section, and `x-sections.lp-category-banners` with all 7 sub-categories (yard-signs, sidewalk-signs, banners, business-signs, posters, table-runners, coronavirus-signs). Rebuilt all 7 sub-category pages with full SEO titles/meta, hero images, and `x-sections.editorial-cards` blocks: yard-signs (3 cards, 4 images), sidewalk-signs (3 cards, 3 images), banners (4 cards, 6 images), posters (4 cards, 6 images), business-signs (4 cards, 6 images), coronavirus-signs (4 cards, 6 images), table-runners (4 cards, 5 images). Source content from top5pct.com PHP pages. SEO writing: 7th grade level, "we" statements, Joliet/Shorewood/Plainfield/Will County/Chicagoland geo terms, no em dashes, no hyphens. Note: corona-virus-signs image folder uses a hyphen in the directory name.

-   **Custom Shirts Page Rebuild (Mar 2026):** Replaced `/custom-apparel/custom-shirts` (legacy top5pct.com/php/t-shirt-maker-joliet.php) with full SEO content page. Added 12-card shirt type grid, YouTube video banner (ID: F3J9nyiM3So), "Represent Yourself" brand statement section, and 7-tip FAQ accordion. Created 12 shell pages for each shirt type (vinyl, rhinestone, glitter, foil, glow-in-the-dark, flock, reflective, holographic, brick, pattern, embroidery, picture-shirts) with routes. Documented in `docs/page-replacement.md`.
-   **Typography Scale Increase (Mar 2026):** All non-H1 font sizes bumped up two levels for improved readability. H1 unchanged at 32px/28px. New scale: H2=32px, H3=28px, H4=24px, H5=20px, Body=20px, Body Small=18px, Caption=16px, Button/Nav=18px. Updated in `resources/css/app.css`, `tailwind.config.js`, and `docs/branding-requirements.md`.
-   **Top 5% Merchandise Brand & Products (Mar 2026):** Created Lunar Brand "Top 5 Percent" and seeded 11 branded products (79 size variants) from top5pct.com/store. Products assigned to `top5pct-merchandise` collection. Seeder: `database/seeders/Top5PctMerchSeeder.php`. CSV data: `database/data/top5pct-merch-products.csv`. Client config at `config/client.php` with business info and `product_grid_enabled` flag.
-   **Hybrid Page Standard (Mar 2026):** All product category pages use the hybrid pattern: static marketing sections + embedded `x-sections.product-grid` Livewire component. Standard section order: category-hero → banner → same-day-service → product-grid → why-choose-us → CTAs → reviews → map. Created `x-sections.product-grid` component wrapping `catalog.collection-page` Livewire. Page-management scanner updated to detect `@livewire` directives and show nested Livewire components in section badges. See `docs/lunar.collections.md` for full architecture.
-   **Shop Page Consolidation (Mar 2026):** Renamed `/store` to `/top5pct-merchandise` (`pages/top5pct-merchandise.blade.php`). Removed old `/shop` route. All internal "Shop Now" / "Continue Shopping" links updated. Navigation bar scroll hysteresis added (shrink at 50px, expand at 10px) to prevent shaking.
-   **Phase 3.5 Premium UI Components (Feb 2026):** Created 10 premium components: `card-product-hover` (3:4 ratio, badges, swatches, quick-add), `card-category-visual` (gradient overlay, featured layout), `hero-full-bleed` (center/left/split layouts, dual CTAs), `carousel-product` (thumbnail strip, hover-to-zoom 250%), `sticky-add-to-cart` (Alpine.js event-driven slide-up), `modal-quick-view` (image gallery, variant selector, quantity picker), `banner-full-bleed-image` (single full-width image banner), `banner-full-bleed-2-image` (2-image side-by-side with text overlay, configurable split ratio), `banner-full-bleed-video` (full-width autoplay video), `banner-full-bleed-2-video` (2-video side-by-side with text overlay). Demo page at `/demo/premium`. Added `charcoal-lighter` (#999999) to Tailwind config. Added `hide-scrollbar` CSS utility.
-   **Phase 3 Cart & Checkout (Feb 2026):** Implemented full cart system with add-to-cart from PDP, cart drawer, cart page, checkout with shipping/billing addresses, and order confirmation page. Offline payment placeholder active; Stripe adapter installed for future activation.

## Technical Notes

-   **Critical:** Lunar Price objects require `->price->value` for integers, `->price->formatted()` for display
-   **Critical:** Meilisearch price filtering requires dollars * 100 conversion for cents
-   **Critical:** Livewire v3 bundles Alpine.js - never import Alpine separately in app.js
-   **Critical:** Alpine plugins (like Collapse) must register via `document.addEventListener('alpine:init')` event
-   **Cart:** Lunar CartSession facade manages session-based carts. CartSessionManager works with Laravel sessions directly (no middleware needed in Lunar v1.2).
-   **Payments:** Default set to `offline` in config/lunar/payments.php. Switch to `stripe` via PAYMENTS_TYPE env var when real Stripe keys are available.

## External Dependencies

-   **E-commerce Framework:** Lunar PHP v1.2
-   **Payment Adapter:** Lunar Stripe (lunarphp/stripe v1.2)
-   **Database:** PostgreSQL
-   **Search Engine:** Meilisearch (for faceted search)
-   **Frontend Libraries:** Tailwind CSS, Alpine.js, Livewire v3
-   **Testing Framework:** Pest PHP
-   **Static Analysis:** Larastan
