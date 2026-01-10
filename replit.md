# Top 5 Percent E-Commerce Platform

## Project Overview

Premium e-commerce website for Top 5 Percent, a custom signage and apparel business in Joliet, IL. Built with PHP Laravel 11 and the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire) using Lunar for e-commerce functionality.

---

## Critical Development Rules

### 1. File Size Limit
**No file will be more than 800 lines of code.**
- Split large files into smaller, focused modules
- Use Actions, Services, and Repository patterns
- Keep components single-responsibility

### 2. Required Reading Before Development
**Always reread these documents before making changes:**
- `branding-requirements.md` - Colors, fonts, CSS variables, styling
- `layout-design.md` - Navigation, page structure, component specs

### 3. Component Structure Requirements
**Each HTML `<section>` must be its own component file:**
- Use Blade components or Livewire components (SSR-enabled for SEO)
- Name components descriptively by function (e.g., `hero-banner.blade.php`, `services-grid.blade.php`)
- Store in `resources/views/components/sections/` for Blade or `app/Livewire/Sections/` for Livewire
- Server-Side Rendering (SSR) is mandatory for all page sections to maximize SEO

**Example structure:**
```
resources/views/components/sections/
├── hero-banner.blade.php
├── services-overview.blade.php
├── featured-products.blade.php
├── testimonials-carousel.blade.php
├── cta-banner.blade.php
└── about-preview.blade.php
```

### 4. Additional Reference Documents
- `seo.md` - SEO keywords, voice search, meta strategies
- `cart.md` - Shopping cart implementation with Lunar
- `facets.md` - Product filtering and facet search
- `admin.md` - Backend admin panel specifications

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| Framework | Laravel 11 |
| Frontend | TALL Stack (Tailwind CSS, Alpine.js, Livewire) |
| E-commerce | Lunar PHP |
| Database | PostgreSQL |
| Search | Meilisearch (for faceted search) |
| Testing | Pest PHP |
| Static Analysis | Larastan Level 5+ |

---

## Branding Quick Reference

### Colors
```css
--color-primary: #CDBF2B;    /* Primary Gold */
--color-accent: #3273DC;     /* Accent Blue */
--color-text: #000000;       /* Text Black */
--color-background: #FFFFFF; /* Background White */
--color-gray-dark: #333333;  /* Footer/Dark sections */
```

### Typography
```css
--font-primary: 'Titillium Web', Arial, sans-serif;
```

### Logo
- Location: `public/images/logos/top5-logo.gif`

---

## Project Structure

```
/
├── app/
│   ├── Actions/           # Business logic (Action pattern)
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Livewire/      # Livewire components
│   ├── Models/
│   └── Services/          # Service classes
├── resources/
│   ├── views/
│   │   ├── components/    # Blade components
│   │   ├── layouts/       # Layout templates
│   │   └── livewire/      # Livewire views
│   └── css/
├── public/
│   └── images/
│       ├── logos/         # Brand logos
│       ├── favicons/      # Favicon assets
│       ├── og-images/     # Open Graph images
│       ├── heroes/        # Hero banners
│       ├── products/      # Product images
│       └── icons/         # UI icons
├── branding-requirements.md
├── layout-design.md
├── seo.md
├── cart.md
├── facets.md
├── admin.md
└── replit.md              # This file
```

---

## Coding Standards

### PHP Standards
- Strict typing: `declare(strict_types=1);` in all PHP files
- Use dependency injection
- Follow Action pattern for business logic
- Larastan Level 5+ compliance
- Pest for testing

### Frontend Standards
- Use H2-H5 tags for headings (not `<p>` for labels)
- CSS variables from `branding-requirements.md`
- Mobile-first responsive design
- Accessibility (WCAG 2.1 AA)

---

## Recent Changes

| Date | Change |
|------|--------|
| Current | Initial documentation setup |
| Current | Branding requirements defined with CSS variables |
| Current | Layout design with mega menu structure |
| Current | SEO strategy document added |
| Current | Cart and facets implementation guides added |

---

## User Preferences

- Maintain modular, small files (max 800 lines)
- Follow exact branding from top5pct.com
- Use semantic HTML (H2-H5 for structure)
- Premium, professional aesthetic
