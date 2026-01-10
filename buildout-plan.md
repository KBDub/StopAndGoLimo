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

## Phase 1: Platform Foundation

**Complexity:** Medium  
**Duration:** Foundation setup  
**Goal:** Working Laravel + Lunar installation with branding

### Tasks

#### 1.1 Environment Setup
- [ ] Install Laravel 11
- [ ] Configure PostgreSQL database
- [ ] Set up environment variables
- [ ] Install Composer dependencies
- [ ] Configure `.gitignore`

#### 1.2 Lunar E-Commerce Setup
- [ ] Install Lunar package
- [ ] Run Lunar migrations
- [ ] Configure Lunar Hub (admin at `/hub`)
- [ ] Create admin user
- [ ] Set up media library

#### 1.3 TALL Stack Configuration
- [ ] Install Tailwind CSS
- [ ] Configure `tailwind.config.js` with branding colors/fonts
- [ ] Install Alpine.js
- [ ] Install Livewire
- [ ] Create base CSS with custom properties from `branding-requirements.md`

#### 1.4 Search Engine Setup
- [ ] Install Meilisearch
- [ ] Configure Laravel Scout
- [ ] Set up filterable attributes for facets
- [ ] Test search indexing

#### 1.5 Development Tooling
- [ ] Install Pest for testing
- [ ] Configure Larastan (Level 5+)
- [ ] Set up strict typing standards
- [ ] Create Action pattern base classes

#### 1.6 Initial Data Seeding
- [ ] Create attribute groups (Apparel Options, Signs, etc.)
- [ ] Seed product attributes (sizes, materials, print methods)
- [ ] Create sample collections/categories
- [ ] Add test products

### Phase 1 Deliverables
- ✅ Laravel app running on port 5000
- ✅ Lunar Hub accessible at `/hub`
- ✅ Tailwind with custom branding compiled
- ✅ Meilisearch indexing products
- ✅ Database seeded with attributes

---

## Phase 2: Catalog & Navigation MVP

**Complexity:** High  
**Duration:** Core frontend build  
**Goal:** Browsable product catalog with mega menu

### Tasks

#### 2.1 Layout & Navigation
- [ ] Create base Blade layout (`layouts/app.blade.php`)
- [ ] Build header component with logo
- [ ] Implement mega menu navigation (Livewire)
- [ ] Create footer component
- [ ] Mobile responsive navigation

#### 2.2 Homepage
- [ ] Hero section with CTA
- [ ] Featured products grid
- [ ] Category showcase
- [ ] Trust badges section
- [ ] About preview section

#### 2.3 Collection/Category Pages
- [ ] Collection listing page
- [ ] Faceted sidebar filters (Livewire + Meilisearch)
  - Price range slider
  - Size checkboxes with counts
  - Material type filters
  - Availability toggle
- [ ] Product grid with pagination
- [ ] Sort options (price, newest, popular)

#### 2.4 Product Detail Pages
- [ ] Product image gallery
- [ ] Variant selection (size, color)
- [ ] Material type display
- [ ] Add to cart button
- [ ] Related products
- [ ] Product description/specs

#### 2.5 Static Pages
- [ ] About Us page
- [ ] Contact Us page (with form)
- [ ] Portfolio/Gallery page

### Phase 2 Deliverables
- ✅ Full navigation working
- ✅ Products browsable with filters
- ✅ Product detail pages
- ✅ Responsive on all devices
- ✅ SEO meta tags on all pages

---

## Phase 3: Cart & Checkout MVP

**Complexity:** High  
**Duration:** Transaction flow  
**Goal:** Complete purchase flow

### Tasks

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
- ✅ Add to cart functionality
- ✅ Complete checkout process
- ✅ Stripe payments working
- ✅ Order confirmation emails
- ✅ Orders appearing in Lunar Hub

---

## Phase 4: Admin & Enhancements

**Complexity:** Medium-High  
**Duration:** Admin customization + polish  
**Goal:** Full admin control + Phase 2 features

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
- ✅ Full admin control over CTAs/banners
- ✅ Analytics dashboard
- ✅ SEO optimized
- ✅ Performance optimized
- ✅ Production ready

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
- [ ] Domain/SSL configured (for production)

---

## MVP Definition

**Minimum Viable Product = Phases 1 + 2 + 3**

A customer can:
1. Browse products via mega menu
2. Filter products by size, material, price
3. View product details
4. Add items to cart
5. Complete checkout with payment
6. Receive order confirmation

---

## Ready to Build?

When ready to begin Phase 1, we will:
1. Install Laravel 11 and configure the environment
2. Set up Lunar e-commerce package
3. Configure Tailwind with branding
4. Get the development server running

Say "Start Phase 1" to begin implementation.
