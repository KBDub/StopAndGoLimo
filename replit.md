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
- `docs/branding-requirements.md` - Colors, fonts, CSS variables, styling
- `docs/layout-design.md` - Navigation, page structure, component specs

### 3. Component Structure Requirements
**Each HTML `<section>` must be its own component file:**
- Use Blade components or Livewire components (SSR-enabled for SEO)
- Sections use `x-sections.<name>` naming (e.g., `x-sections.hero`)
- CTAs use `x-sections.cta-<name>` naming (e.g., `x-sections.cta-ready-to-get-started`)
- Store in `resources/views/components/sections/` for Blade or `app/Livewire/Sections/` for Livewire
- Server-Side Rendering (SSR) is mandatory for all page sections to maximize SEO
- **Standard section padding: `py-10`**

**Current section components:**
```
resources/views/components/sections/
├── hero.blade.php
├── our-services.blade.php
├── why-choose-us.blade.php
├── design-it-yourself.blade.php
└── cta-ready-to-get-started.blade.php
```

**UI button components:**
```
resources/views/components/ui/
├── button-charcoal-gold.blade.php
├── button-white-charcoal.blade.php
├── button-gold-white.blade.php
└── button-blue-white.blade.php
```

### 4. Additional Reference Documents
- `docs/seo.md` - SEO keywords, voice search, meta strategies
- `docs/cart.md` - Shopping cart implementation with Lunar
- `docs/facets.md` - Product filtering and facet search
- `docs/admin.md` - Backend admin panel specifications

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

### Color Palette (5 + White)
Each color has up to 3 variants: light, default, dark

```css
/* Olive - Headline lead-in, subheadings */
olive: #A39822

/* Sunburst Gold - Primary CTAs, accents */
sunburst-light: #FFD93D
sunburst: #FFC20E
sunburst-dark: #E6A500

/* Azure Blue - Secondary CTAs, links */
azure-light: #5A9AE8
azure: #3273DC
azure-dark: #2558A8

/* Soft Linen - Hero, footer, backgrounds */
linen-light: #FAF9F5
linen: #F2F0E6
linen-dark: #E8E5D8

/* Charcoal - Navigation bar, text, headers */
charcoal-light: #555555
charcoal: #2C2C2C
charcoal-dark: #1A1A1A

/* White - Cards, containers */
white: #FFFFFF

/* Semantic Colors */
success: #4CAF50
warning: #F9A825
error: #C62828
```

### Color Usage
- **Navigation Bar:** Charcoal (#2C2C2C) background, white text
- **Hero Section:** White (#FFFFFF) background, Olive (#A39822) subheadline
- **Footer:** Soft Linen (#F2F0E6) background
- **Content Sections:** Alternate between White and Soft Linen
- **Primary CTAs:** Sunburst Gold or Charcoal background
- **Secondary CTAs:** Azure Blue background
- **Links:** Azure Blue, hover to Azure Dark

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
├── docs\
│   ├── layout-design.md
│   ├── branding-requirements.md
│   ├── seo.md
│   ├── cart.md
│   ├── facets.md
│   ├── admin.md
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
- CSS variables from `docs\branding-requirements.md`
- Mobile-first responsive design
- Accessibility (WCAG 2.1 AA)

---

## Admin Panel

Lunar Hub admin panel is accessible at `/hub`
- Admin Email: admin@top5percent.com
- Default Password: admin123

**SECURITY NOTE:** Change the admin password before deploying to production! Use `php artisan lunar:create-admin` to create a new admin with a secure password.

## Search Configuration

- **Engine:** Meilisearch (running on port 8000)
- **Driver:** Laravel Scout with meilisearch driver
- **Host:** http://localhost:8000
- **Storage:** ./storage/meilisearch

## Recent Changes

| Date | Change |
|------|--------|
| Jan 12, 2026 | Installed Pest testing framework v3.8 |
| Jan 12, 2026 | Installed Larastan (PHPStan) for static analysis |
| Jan 12, 2026 | Configured Meilisearch for faceted search |
| Jan 12, 2026 | Set up Lunar Hub admin panel at /hub |
| Jan 12, 2026 | Updated color palette to 4 colors + white with 3 variants each |
| Jan 12, 2026 | Created mandatory layout components (top-notification-bar, navigation-bar, footer) |
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
