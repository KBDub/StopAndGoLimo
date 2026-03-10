# Top 5 Percent E-Commerce Platform

## Overview

This project is a premium e-commerce website for "Top 5 Percent," a custom signage and apparel business in Joliet, IL. The platform aims to provide a sophisticated online presence, enabling customers to browse and purchase custom products. It focuses on a high-quality user experience and robust e-commerce functionality, positioning the business for growth in the custom apparel and signage market.

## User Preferences

- Maintain modular, small files (max 800 lines)
- Follow exact branding from top5pct.com
- Use semantic HTML (H2-H5 for structure)
- Premium, professional aesthetic
- Never use all caps / uppercase text anywhere on the site
- Always read docs/branding-requirements.md before making changes

## System Architecture

The platform is built on Laravel 11, utilizing the TALL stack (Tailwind CSS, Alpine.js, Livewire) for a modern, reactive frontend. Lunar PHP is integrated for core e-commerce functionalities.

**Key Architectural Decisions:**

-   **Modular Development:** Enforced with a strict 800-line file limit, promoting the use of Actions, Services, and Repository patterns.
-   **Component-Based UI:** Every HTML `<section>` is implemented as its own Blade or Livewire component, ensuring reusability and maintainability. Components are designed for Server-Side Rendering (SSR) to optimize SEO.
-   **Branding & UI/UX:** Adherence to a defined brand guide (`docs/branding-requirements.md`) for colors, typography (Titillium Web), and overall aesthetic. Specific UI components (buttons, badges, cards, banners) are standardized.
-   **SEO-First Design:** All page sections are SSR-enabled. Semantic HTML, structured headings (H2-H5), and mobile-first responsive design are prioritized.
-   **No All-Caps Rule:** A critical branding and UI/UX rule prohibiting the use of uppercase text anywhere on the site.
-   **Data Structure:** Comprehensive seeders for attributes (7 groups, 28+ filterable), collections (30 hierarchical), and products (31 products, 93 variants).
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
-   `resources/views/components/sections/`: Reusable section components.
-   `resources/views/components/ui/`: UI components (buttons, cards, banners, badges).
-   `resources/views/livewire/cart/`: Cart-related Blade views.
-   `resources/views/pages/`: Nested page views.
-   `docs/`: Extensive documentation covering branding, layout, SEO, cart, facets, admin, and collections architecture (`docs/lunar.collections.md`).

## Recent Changes

-   **Shop Page Consolidation (Mar 2026):** Renamed `/store` to `/top5pct-merchandise` (`pages/top5pct-merchandise.blade.php`). Removed old `/shop` route. All internal "Shop Now" / "Continue Shopping" links updated. Page is a hybrid: static marketing sections + embedded `catalog.collection-page` Livewire component showing all products. Navigation bar scroll hysteresis added (shrink at 50px, expand at 10px) to prevent shaking. See `docs/lunar.collections.md` for full collections architecture.
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
