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

-   `app/Actions/`: Business logic.
-   `app/Http/Livewire/`: Livewire components.
-   `resources/views/components/sections/`: Reusable section components.
-   `resources/views/components/ui/`: UI components (buttons, cards, banners, badges).
-   `resources/views/pages/`: Nested page views.
-   `docs/`: Extensive documentation covering branding, layout, SEO, cart, facets, and admin.

## External Dependencies

-   **E-commerce Framework:** Lunar PHP
-   **Database:** PostgreSQL
-   **Search Engine:** Meilisearch (for faceted search)
-   **Frontend Libraries:** Tailwind CSS, Alpine.js, Livewire
-   **Testing Framework:** Pest PHP
-   **Static Analysis:** Larastan