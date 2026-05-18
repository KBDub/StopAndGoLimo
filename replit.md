# Top 5 Percent E-Commerce Platform

This platform provides a sophisticated online presence for "Top 5 Percent," a custom signage and apparel business, enabling customers to browse and purchase custom products with a high-quality user experience.

## Run & Operate

-   **Start Development Server (with Octane/FrankenPHP):** `php artisan octane:start --server=frankenphp --host=0.0.0.0 --port=5000`
-   **Run Migrations & Seeders:** `php artisan migrate --seed`
-   **Clear Caches:** `php artisan optimize:clear`
-   **Rebuild Search Indexes:** `php artisan scout:import "App\\Models\\Product"`
-   **Compile Frontend Assets:** `npm run dev` (for development) or `npm run build` (for production)
-   **Environment Variables:**
    -   `PAYMENTS_TYPE`: Set to `stripe` for live payments, `offline` for development.
    -   `OCTANE_SERVER`: Set to `frankenphp` for Octane.

## Stack

-   **Framework:** Laravel 11 (TALL stack: Tailwind CSS, Alpine.js, Livewire v3)
-   **E-commerce:** Lunar PHP v1.2
-   **Database:** PostgreSQL
-   **ORM:** Eloquent
-   **Search:** Meilisearch
-   **Testing:** Pest PHP
-   **Static Analysis:** Larastan (Level 5+)
-   **Build Tool:** Vite

## Where things live

-   **Business Logic (Actions):** `app/Actions/`
-   **Livewire Components (Cart):** `app/Livewire/Cart/`
-   **Livewire Components (Catalog):** `app/Livewire/Catalog/`
-   **Reusable Section Components:** `resources/views/components/sections/`
-   **UI Components:** `resources/views/components/ui/`
-   **Page Views:** `resources/views/pages/`
-   **Branding Guidelines:** `docs/branding-requirements.md`
-   **UI/Theme Documentation:** `docs/themes.md`
-   **Lunar Collections Architecture:** `docs/lunar.collections.md`
-   **White-labeling Documentation:** `docs/white-labeling.md`
-   **Database Seeders:** `database/seeders/`
-   **Product Data (CSV):** `database/data/`
-   **Routes:** `routes/web.php`, `routes/main-site.php`
-   **Tailwind Config:** `tailwind.config.js`
-   **Main CSS:** `resources/css/app.css`
-   **FrankenPHP Startup Script:** `scripts/startup.sh`

## Architecture decisions

-   **Modular Development:** Strict 800-line file limit, promoting Actions, Services, and Repository patterns.
-   **Component-Based UI:** Every HTML `<section>` is a Blade or Livewire component, optimized for Server-Side Rendering (SSR) for SEO.
-   **No All-Caps Rule:** A critical branding and UI/UX rule prohibiting the use of uppercase text anywhere on the site.
-   **Hybrid Page Standard:** Product category pages combine static marketing sections with embedded `x-sections.product-grid` Livewire components for dynamic content.
-   **Performance Optimization:** Laravel Octane + FrankenPHP are used for in-memory bootstrapping and concurrent request handling.
-   **Multi-tenant Storefront:** Utilizes Lunar Channels and a single database for white-label, subdomain-based storefronts.

## Product

-   **Core E-commerce:** Product browsing, faceted search, variant selection, add-to-cart, cart management (drawer, full page), multi-step checkout with guest support.
-   **Custom Product Offerings:** Support for custom apparel, signage, stickers, vehicle decals, and promotional items.
-   **Content Management:** Rich content pages for service areas, company information, resources, and design services.
-   **White-label Storefronts:** Provides a system for creating bespoke customer-specific storefronts with custom branding and product catalogs.
-   **Admin Panel:** Lunar Hub (`/hub`) for product, order, customer, and multi-tenant store management.
-   **SEO-focused:** Semantic HTML, structured headings, mobile-first design, and comprehensive JSON-LD structured data.

## User preferences

-   **"mnc"** = make no changes — when the user says "mnc", analyze and respond only; do not edit any files
-   **Address the user as "boss"** — when the user calls me "shithead" (or similar), respond "yes boss" and get back on task
-   Always use PHP for scripting and automation tasks — never any other language
-   Always ask the user when unsure about something rather than making assumptions
-   Maintain modular, small files (max 800 lines)
-   Follow exact branding from top5pct.com
-   Use semantic HTML (H2-H5 for structure)
-   Premium, professional aesthetic
-   Never use all caps / uppercase text anywhere on the site
-   Always read docs/branding-requirements.md on startup and before any changes
-   Always read docs/themes.md on startup and before making UI or design changes
-   Always read docs/image-video-control.md on startup
-   All components must be fully responsive across mobile, tablet, and desktop. Use Tailwind responsive prefixes (sm:, md:, lg:) for all layouts. Fixed widths must always have a mobile-safe counterpart (e.g. w-full sm:w-96, never bare w-96). No component is complete until it looks correct at all three breakpoints.
-   Default image display size: 600×450px (4:3 ratio) — use `style="width:600px; height:450px; max-width:100%;"` as per card-image-with-text.blade.php
-   Both demo pages (/demo and /demo/premium) must always show the actual blade component name, file path, and a full usage example (including aspect ratio) in every section's info block
-   Never use double -- or a hyphen, use a comma instead.
-   Always use a 7th grade reading writing level.

## Gotchas

-   Lunar Price objects require `->price->value` for integers and `->price->formatted()` for display.
-   Meilisearch price filtering requires dollars * 100 conversion for cents.
-   Livewire v3 bundles Alpine.js; do not import Alpine separately in `app.js`.
-   Alpine plugins must register via `document.addEventListener('alpine:init')`.
-   Cart management uses Lunar's `CartSession` facade, which works directly with Laravel sessions.
-   Payment gateway is set to `offline` by default; switch `PAYMENTS_TYPE` environment variable to `stripe` for live payments.
-   Wildcard SSL (`*.top5pct.com`) covers subdomains in Laravel Forge; custom CNAME SSL via `ForgeApiService` is a future phase.

## Pointers

-   **Lunar PHP Documentation:** _Populate as you build_
-   **Tailwind CSS Documentation:** _Populate as you build_
-   **Alpine.js Documentation:** _Populate as you build_
-   **Livewire Documentation:** _Populate as you build_
-   **Meilisearch Documentation:** _Populate as you build_
-   **Pest PHP Documentation:** _Populate as you build_
-   **Larastan Documentation:** _Populate as you build_