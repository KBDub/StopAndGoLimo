# Buildout Plan

## Top 5 Percent E-Commerce Platform

A phased implementation plan for the Laravel 11 + TALL Stack + Lunar e-commerce website.

---

## Overview

| Metric | Value |
|--------|-------|
| Total Phases | 4 |
| MVP Phases | 1-3 |
| Estimated Complexity | Medium-High |
| Stack | Laravel 11, Tailwind, Alpine.js, Livewire, Lunar, Meilisearch, PostgreSQL |

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

### 4. Additional Reference Documents
- `seo.md` - SEO keywords, voice search, meta strategies
- `cart.md` - Shopping cart implementation with Lunar
- `facets.md` - Product filtering and facet search
- `admin.md` - Backend admin panel specifications

---

## Critical Path

```
Phase 1: Stack Setup → Phase 2: Search/Facets → Phase 3: Checkout/Payment → Phase 4: Admin
    │                      │                        │                           │
    └─ Laravel + Lunar ────┘─ Meilisearch ─────────┘─ Stripe ──────────────────┘
```

---

## Phase 1: Platform Foundation ✅

**Complexity:** Medium  
**Duration:** Foundation setup  
**Goal:** Working Laravel + Lunar installation with branding  
**Status:** Complete

### Tasks

#### 1.1 Environment Setup
- [x] Install Laravel 11
- [x] Configure PostgreSQL database
- [x] Set up environment variables
- [x] Install Composer dependencies
- [x] Configure `.gitignore`

#### 1.2 Lunar E-Commerce Setup
- [x] Install Lunar package
- [x] Run Lunar migrations
- [x] Configure Lunar Hub (admin at `/hub`)
- [x] Create admin user
- [ ] Set up media library (rolled into Phase 3)

#### 1.3 TALL Stack Configuration
- [x] Install Tailwind CSS
- [x] Configure `tailwind.config.js` with branding colors/fonts
- [x] Install Alpine.js
- [x] Install Livewire
- [x] Create base CSS with custom properties from `branding-requirements.md`

#### 1.4 Search Engine Setup
- [x] Install Meilisearch
- [x] Configure Laravel Scout
- [x] Set up filterable attributes for facets (28+ filterable attributes configured)
- [x] Test search indexing (products indexed with flat price values, facet distribution verified)

#### 1.5 Development Tooling
- [x] Install Pest for testing
- [x] Configure Larastan (Level 5+)
- [x] Set up strict typing standards
- [x] Create Action pattern base classes

#### 1.6 Initial Data Seeding
- [x] Create attribute groups (Apparel Options, Signs, Decals, Vehicle Graphics, Promo Items, etc.)
- [x] Seed product attributes (sizes, materials, print methods, 28+ filterable attributes)
- [x] Create sample collections/categories (30 hierarchical collections)
- [x] Add test products (31 products, 93 variants with pricing)

### Phase 1 Deliverables
- ✅ Laravel app running on port 5000
- ✅ Lunar Hub accessible at `/hub`
- ✅ Tailwind with custom branding compiled
- ✅ Meilisearch indexing products with filterable attributes
- ✅ Database seeded with attributes, collections, and products

---

## Phase 2: Catalog & Navigation MVP ✅

**Complexity:** High  
**Duration:** Core frontend build  
**Goal:** Browsable product catalog with mega menu  
**Status:** Complete

### Tasks

#### 2.1 Layout & Navigation
- [x] Create base Blade layout (`layouts/page.blade.php`)
- [x] Build header component with logo
- [x] Implement mega menu navigation with dropdowns
- [x] Create footer component
- [x] Mobile responsive navigation

#### 2.2 Homepage
- [x] Hero section with CTA
- [x] Featured products grid (Livewire component wired to Lunar)
- [x] Category showcase
- [x] Trust badges section
- [x] About preview section

#### 2.3 Collection/Category Pages
- [x] Collection listing page (Livewire, connected to Lunar via Meilisearch)
- [x] Faceted sidebar filters (Livewire + Meilisearch)
  - [x] Price range filter (min/max dollar inputs, converted to cents)
  - [x] Garment type, print method, material checkboxes with counts
  - [x] Sign type, decal type, vehicle product filters
  - [x] Availability toggle (in stock only)
- [x] Product grid with pagination
- [x] Sort options (price low/high, newest)
- [x] Top Level Category Section for parent collections (child collection cards)
- [x] Branded section wrappers (Category Hero, Same Day Service, Why Choose Us, CTAs, Review Banner, Map)

#### 2.4 Product Detail Pages
- [x] Variant selection (size options with per-variant pricing)
- [x] Material type display
- [x] Add to cart button (UI present, cart functionality is Phase 3)
- [x] Product description/specs (HTML rendering)
- [x] Quantity selector with increment/decrement
- [x] Stock availability display
- [x] Breadcrumb navigation
- [ ] Product image gallery (placeholder images, rolled into Phase 3)
- [ ] Related products section (rolled into Phase 3)

#### 2.5 Static Pages
- [x] About Us page
- [x] Contact Us page (with form)
- [x] Portfolio/Gallery page

### Phase 2 Deliverables
- ✅ Full navigation working with dropdowns
- ✅ Products browsable with live faceted filters
- ✅ Product detail pages with variant selection and pricing
- ✅ Responsive on all devices
- ✅ SEO meta tags on all pages
- ✅ Successfully deployed to production

---

## Phase 3: Cart & Checkout MVP

**Complexity:** High  
**Duration:** Transaction flow  
**Goal:** Complete purchase flow  
**Status:** Not started

### Tasks

#### 3.0 Carried Over from Phase 1/2
- [ ] Set up media library for product images
- [ ] Product image gallery on PDP
- [ ] Related products section on PDP

#### 3.1 Shopping Cart
- [ ] Cart Livewire component
- [ ] Add/remove items
- [ ] Update quantities
- [ ] Cart sidebar/drawer
- [ ] Cart page (full view)
- [ ] Price calculations (subtotal, tax)

#### 3.2 Checkout Flow
- [ ] Customer information form
- [ ] Shipping address
- [ ] Billing address (toggle same as shipping)
- [ ] Shipping method selection
- [ ] Order summary

#### 3.3 Payment Integration
- [ ] Stripe integration (via Lunar)
- [ ] Payment form (card input)
- [ ] Payment processing
- [ ] Error handling
- [ ] Order confirmation

#### 3.4 Order Confirmation
- [ ] Thank you page
- [ ] Order details display
- [ ] Email confirmation (queue job)
- [ ] Order number generation

#### 3.5 Customer Features
- [ ] Guest checkout
- [ ] Account creation (optional)
- [ ] Order history (if logged in)

### Phase 3 Deliverables
- ⬜ Add to cart functionality
- ⬜ Complete checkout process
- ⬜ Stripe payments working
- ⬜ Order confirmation emails
- ⬜ Orders appearing in Lunar Hub

---

## Phase 4: Admin & Enhancements

**Complexity:** Medium-High  
**Duration:** Admin customization + polish  
**Goal:** Full admin control + Phase 2 features  
**Status:** Not started

### Tasks

#### 4.1 Custom Admin Extensions
- [ ] CTA management (Filament resource)
- [ ] Banner/announcement management
- [ ] Navigation item manager
- [ ] Homepage settings editor

#### 4.2 Analytics Dashboard
- [ ] Revenue overview widget
- [ ] Orders today widget
- [ ] Low stock alerts
- [ ] Top products report

#### 4.3 Content Management
- [ ] Testimonials CRUD
- [ ] Portfolio/gallery manager
- [ ] FAQ manager

#### 4.4 SEO Enhancements
- [ ] Per-page SEO fields
- [ ] Sitemap generation
- [ ] Schema.org structured data
- [ ] OG image management

#### 4.5 Email Templates
- [ ] Order confirmation template
- [ ] Shipping notification
- [ ] Abandoned cart recovery
- [ ] Welcome email

#### 4.6 Performance & Polish
- [ ] Image optimization (WebP)
- [ ] Lazy loading
- [ ] Cache implementation
- [ ] Core Web Vitals optimization

### Phase 4 Deliverables
- ⬜ Full admin control over CTAs/banners
- ⬜ Analytics dashboard
- ⬜ SEO optimized
- ⬜ Performance optimized
- ⬜ Production ready

---

## Data Models Summary

### Core Models (Lunar)
- Product
- ProductVariant
- Collection
- Order
- Customer
- Cart

### Custom Models
| Model | Purpose |
|-------|---------|
| `Cta` | Call-to-action blocks |
| `Banner` | Announcement bars |
| `NavigationItem` | Menu management |
| `HomepageSetting` | Homepage content |
| `Testimonial` | Customer reviews |

---

## File Organization

Keep files under 800 lines by splitting into:

```
app/
├── Actions/
│   ├── Cart/
│   │   ├── AddToCart.php
│   │   ├── UpdateCartQuantity.php
│   │   └── RemoveFromCart.php
│   ├── Checkout/
│   │   ├── ProcessPayment.php
│   │   └── CreateOrder.php
│   └── Product/
│       └── GetFilteredProducts.php
├── Livewire/
│   ├── Cart/
│   │   ├── CartIcon.php
│   │   ├── CartDrawer.php
│   │   └── CartPage.php
│   ├── Catalog/
│   │   ├── ProductGrid.php
│   │   ├── FacetSidebar.php
│   │   └── ProductDetail.php
│   └── Navigation/
│       ├── MegaMenu.php
│       └── MobileMenu.php
└── Services/
    ├── SearchService.php
    └── PricingService.php
```

---

## Environment Variables Required

```env
# Database
DATABASE_URL=postgresql://...

# Lunar
LUNAR_HUB_PATH=hub

# Meilisearch
MEILISEARCH_HOST=http://localhost:7700
MEILISEARCH_KEY=your-key

# Stripe
STRIPE_KEY=pk_...
STRIPE_SECRET=sk_...

# Mail
MAIL_MAILER=smtp
MAIL_HOST=...
```

---

## Pre-Development Checklist

Before starting Phase 1:

- [x] Branding requirements documented (`branding-requirements.md`)
- [x] Layout design documented (`layout-design.md`)
- [x] Navigation structure extracted
- [x] SEO strategy defined (`seo.md`)
- [x] Cart/facets patterns defined (`cart.md`, `facets.md`)
- [x] Admin requirements defined (`admin.md`)
- [x] Logo asset available (`public/images/logos/top5-logo.gif`)
- [ ] Stripe API keys obtained
- [x] Domain/SSL configured (deployed to Replit)

---

## MVP Definition

**Minimum Viable Product = Phases 1 + 2 + 3**

A customer can:
1. ✅ Browse products via mega menu
2. ✅ Filter products by size, material, price
3. ✅ View product details
4. ⬜ Add items to cart
5. ⬜ Complete checkout with payment
6. ⬜ Receive order confirmation

---

## Ready to Build?

When ready to begin Phase 1, we will:
1. Install Laravel 11 and configure the environment
2. Set up Lunar e-commerce package
3. Configure Tailwind with branding
4. Get the development server running

Say "Start Phase 1" to begin implementation.
