# Layout & Design Specifications
## Top 5 Percent Custom Signage & Apparel Website

---

## Technical Stack (TALL Stack)

- **T** - Tailwind CSS with custom configuration
- **A** - Alpine.js for lightweight JavaScript interactions
- **L** - Laravel 11 (PHP 8.2+)
- **L** - Livewire 3 for reactive components
- **E-Commerce:** Lunar (headless e-commerce package for Laravel)
- **Build Tool:** Vite (Laravel default)
- **Testing:** Pest PHP
- **Static Analysis:** Larastan (PHPStan for Laravel)
- **SEO:** Server-side rendering (native Laravel/Livewire)

---

## Page Structure

### 1. Homepage

```
┌─────────────────────────────────────────────────────────────┐
│                        NAVIGATION                           │
│  Logo                    Links              Contact CTA     │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                      HERO SECTION                           │
│         Full-width, high-impact imagery                     │
│         Headline + Subline + Primary CTA                    │
│                     (100vh height)                          │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                   SERVICES OVERVIEW                         │
│    ┌─────────┐  ┌─────────┐  ┌─────────┐  ┌─────────┐      │
│    │ Signage │  │ Apparel │  │ Decals  │  │ Promo   │      │
│    └─────────┘  └─────────┘  └─────────┘  └─────────┘      │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                  FEATURED PRODUCTS                          │
│         Masonry or Grid Gallery Layout                      │
│              (6-12 featured items)                          │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                    ABOUT PREVIEW                            │
│        Image Left | Content Right (or vice versa)           │
│              Brand story excerpt + CTA                      │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                    TESTIMONIALS                             │
│              Carousel or grid of reviews                    │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                 CALL TO ACTION BANNER                       │
│            "Start Your Custom Order Today"                  │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                         FOOTER                              │
│   Contact Info | Quick Links | Social | Newsletter          │
└─────────────────────────────────────────────────────────────┘
```

### 2. Products/Gallery Page

```
┌─────────────────────────────────────────────────────────────┐
│                        NAVIGATION                           │
├─────────────────────────────────────────────────────────────┤
│                      PAGE HEADER                            │
│              Title + Filter/Category Tabs                   │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│  ┌───────┐  ┌───────┐  ┌───────┐  ┌───────┐               │
│  │       │  │       │  │       │  │       │               │
│  │ Item  │  │ Item  │  │ Item  │  │ Item  │               │
│  │       │  │       │  │       │  │       │               │
│  └───────┘  └───────┘  └───────┘  └───────┘               │
│                                                             │
│  ┌───────┐  ┌───────┐  ┌───────┐  ┌───────┐               │
│  │       │  │       │  │       │  │       │               │
│  │ Item  │  │ Item  │  │ Item  │  │ Item  │               │
│  │       │  │       │  │       │  │       │               │
│  └───────┘  └───────┘  └───────┘  └───────┘               │
│                                                             │
│                    Load More / Pagination                   │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                         FOOTER                              │
└─────────────────────────────────────────────────────────────┘
```

### 3. About Page

```
┌─────────────────────────────────────────────────────────────┐
│                        NAVIGATION                           │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                     HERO BANNER                             │
│            Full-width image with overlay                    │
│               "About Top 5 Percent"                         │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                     OUR STORY                               │
│        ┌─────────────┬─────────────────────┐               │
│        │    Image    │   Story Content     │               │
│        │             │   with timeline     │               │
│        └─────────────┴─────────────────────┘               │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                   SERVICES & CAPABILITIES                   │
│        Icon + Title + Description grid layout               │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                    WHY CHOOSE US                            │
│             Statistics / Trust indicators                   │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                         FOOTER                              │
└─────────────────────────────────────────────────────────────┘
```

### 4. Contact Page

```
┌─────────────────────────────────────────────────────────────┐
│                        NAVIGATION                           │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│                    PAGE HEADER                              │
│              "Get In Touch" + Subtitle                      │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│   ┌──────────────────────┬────────────────────────┐        │
│   │                      │                        │        │
│   │    CONTACT FORM      │    CONTACT INFO        │        │
│   │                      │                        │        │
│   │  - Name              │    Address             │        │
│   │  - Email             │    Phone               │        │
│   │  - Phone             │    Email               │        │
│   │  - Service Type      │    Hours               │        │
│   │  - Project Details   │                        │        │
│   │  - Submit Button     │    Map Embed           │        │
│   │                      │                        │        │
│   └──────────────────────┴────────────────────────┘        │
│                                                             │
├─────────────────────────────────────────────────────────────┤
│                         FOOTER                              │
└─────────────────────────────────────────────────────────────┘
```

### 5. Demo Page (/demo)

A comprehensive branding demonstration page showcasing all design elements.

```
┌─────────────────────────────────────────────────────────────────┐
│                        NAVIGATION                               │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                    PAGE HEADER                                  │
│           "Brand Style Guide & Demo"                            │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                   COLOR PALETTE                                 │
│    ┌─────┐ ┌─────┐ ┌─────┐ ┌─────┐ ┌─────┐ ┌─────┐            │
│    │Black│ │White│ │Char │ │Gold │ │Blue │ │Gray │            │
│    │     │ │     │ │     │ │     │ │     │ │     │            │
│    └─────┘ └─────┘ └─────┘ └─────┘ └─────┘ └─────┘            │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                   TYPOGRAPHY SHOWCASE                           │
│                                                                 │
│    H1: Playfair Display - Main Heading                          │
│    H2: Playfair Display - Section Title                         │
│    H3: Montserrat - Subsection                                  │
│    H4: Montserrat - Card Title                                  │
│    H5: Montserrat - Minor Heading                               │
│    Body: Inter - Paragraph text sample...                       │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                   BUTTON VARIATIONS                             │
│    [Primary CTA]  [Secondary]  [Tertiary →]  [Link]             │
│                                                                 │
│    Hover States | Active States | Disabled States               │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                   FORM ELEMENTS                                 │
│    ┌────────────────┐  ┌────────────────┐                      │
│    │  Text Input    │  │  Select Menu   │                      │
│    └────────────────┘  └────────────────┘                      │
│    ┌────────────────────────────────────┐                      │
│    │  Textarea                           │                      │
│    └────────────────────────────────────┘                      │
│    [ ] Checkbox    ( ) Radio    [Toggle]                       │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                   CARD COMPONENTS                               │
│    ┌───────┐  ┌───────┐  ┌───────┐  ┌───────┐                 │
│    │Product│  │Service│  │Testim │  │ Info  │                 │
│    │ Card  │  │ Card  │  │ Card  │  │ Card  │                 │
│    └───────┘  └───────┘  └───────┘  └───────┘                 │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                   ICONS & BADGES                                │
│    [★] [→] [✓] [✕] [i] [!] [Cart] [Menu]                      │
│                                                                 │
│    ┌─────────┐ ┌─────────┐ ┌─────────┐                         │
│    │Featured │ │  Sale   │ │  New    │                         │
│    └─────────┘ └─────────┘ └─────────┘                         │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│                   SPACING & GRID                                │
│    Visual demonstration of spacing tokens                       │
│    4px | 8px | 16px | 24px | 32px | 48px | 64px                │
│                                                                 │
├─────────────────────────────────────────────────────────────────┤
│                         FOOTER                                  │
└─────────────────────────────────────────────────────────────────┘
```

#### Demo Page Sections
1. **Color Palette** - All brand colors with hex codes and usage notes
2. **Typography** - All heading levels (H1-H5) and body text samples
3. **Buttons** - All button variants with interactive states
4. **Form Elements** - Inputs, selects, textareas, checkboxes, radios, toggles
5. **Card Components** - Product, service, testimonial, and info cards
6. **Icons & Badges** - Common icons and status badges
7. **Spacing & Grid** - Visual spacing scale demonstration

---

## Grid System

### Container Widths
- **Max Width:** 1440px
- **Content Width:** 1200px
- **Narrow Content:** 800px (for text-heavy sections)

### Column System
- 12-column grid
- Gutter: 24px (desktop), 16px (tablet), 12px (mobile)

### Breakpoints
| Breakpoint | Width | Target |
|------------|-------|--------|
| xs | < 640px | Mobile phones |
| sm | 640px | Large phones |
| md | 768px | Tablets |
| lg | 1024px | Small laptops |
| xl | 1280px | Desktops |
| 2xl | 1536px | Large screens |

---

## Spacing System

### Base Unit: 4px

| Token | Value | Usage |
|-------|-------|-------|
| space-1 | 4px | Tight spacing |
| space-2 | 8px | Element padding |
| space-3 | 12px | Small gaps |
| space-4 | 16px | Standard gaps |
| space-6 | 24px | Component padding |
| space-8 | 32px | Section gaps |
| space-12 | 48px | Large gaps |
| space-16 | 64px | Section padding |
| space-24 | 96px | Major sections |
| space-32 | 128px | Hero spacing |

---

## Component Specifications

### Mega Menu Navigation

#### Main Navigation Items
```
┌──────────────────────────────────────────────────────────────────────────────────────────┐
│ LOGO  Home  About Us  Custom Apparel▼  Design It Yourself▼  Signs▼  Decals▼  Vehicle    │
│                                                                      Graphics▼           │
│       Promotional Items  Stores▼  Portfolio  Contact Us                        [Cart]   │
└──────────────────────────────────────────────────────────────────────────────────────────┘
```

#### Menu Structure

| Main Menu Item | Has Dropdown | Sub-Menu Items |
|----------------|--------------|----------------|
| Home | No | - |
| About Us | No | - |
| Custom Apparel | Yes | Custom Shirts, DTF Transfers, Reunion Shirts, Corporate Wear, Spirit Wear |
| Design It Yourself | Yes | Use Our Free Online Designer, Browse Our Design Idea Catalogs |
| Signs | Yes | Coronavirus Signs, Business Signs, Banners, Posters, Table Runners, Sidewalk Signs, Yard Signs |
| Decals | Yes | Coronavirus Decals, Stickers, Window/Wall/Floor Decals |
| Vehicle Graphics | Yes | Automobile Graphics, Vehicle Magnets, DOT Decals |
| Promotional Items | No | - |
| Stores | Yes | (External store links) |
| Portfolio | No | - |
| Contact Us | No | - |

#### Dropdown Visual Structure

```
┌─────────────────────────────────────────────────────────────────────────────┐
│  CUSTOM APPAREL DROPDOWN                                                    │
│  ┌────────────────────────────────────────────────────────────────────┐    │
│  │  • Custom Shirts                                                    │    │
│  │  • DTF Transfers                                                    │    │
│  │  • Reunion Shirts                                                   │    │
│  │  • Corporate Wear                                                   │    │
│  │  • Spirit Wear                                                      │    │
│  └────────────────────────────────────────────────────────────────────┘    │
└─────────────────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────────────────┐
│  DESIGN IT YOURSELF DROPDOWN                                                │
│  ┌────────────────────────────────────────────────────────────────────┐    │
│  │  • Use Our Free Online Designer                                     │    │
│  │  • Browse Our Design Idea Catalogs                                  │    │
│  └────────────────────────────────────────────────────────────────────┘    │
└─────────────────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────────────────┐
│  SIGNS DROPDOWN                                                             │
│  ┌────────────────────────────────────────────────────────────────────┐    │
│  │  • Coronavirus Signs                                                │    │
│  │  • Business Signs                                                   │    │
│  │  • Banners                                                          │    │
│  │  • Posters                                                          │    │
│  │  • Table Runners                                                    │    │
│  │  • Sidewalk Signs                                                   │    │
│  │  • Yard Signs                                                       │    │
│  └────────────────────────────────────────────────────────────────────┘    │
└─────────────────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────────────────┐
│  DECALS DROPDOWN                                                            │
│  ┌────────────────────────────────────────────────────────────────────┐    │
│  │  • Coronavirus Decals                                               │    │
│  │  • Stickers                                                         │    │
│  │  • Window/Wall/Floor Decals                                         │    │
│  └────────────────────────────────────────────────────────────────────┘    │
└─────────────────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────────────────┐
│  VEHICLE GRAPHICS DROPDOWN                                                  │
│  ┌────────────────────────────────────────────────────────────────────┐    │
│  │  • Automobile Graphics                                              │    │
│  │  • Vehicle Magnets                                                  │    │
│  │  • DOT Decals                                                       │    │
│  └────────────────────────────────────────────────────────────────────┘    │
└─────────────────────────────────────────────────────────────────────────────┘
```

#### Mega Menu Specifications
- **Height (navbar):** 80px (desktop), 64px (mobile)
- **Background:** Transparent on hero, Jet Black (#0A0A0A) on scroll
- **Position:** Fixed to top, z-index: 1000
- **Animation:** Smooth background transition on scroll (200ms)

#### Mega Menu Dropdown
- **Trigger:** Hover on desktop, click on tablet
- **Width:** Full viewport width, max 1440px centered
- **Background:** Charcoal (#1A1A1A) with subtle shadow
- **Padding:** 48px vertical, 64px horizontal
- **Columns:** 3 category columns + 1 featured image column
- **Animation:** Fade in + slide down (200ms ease-out)
- **Backdrop:** Optional subtle blur on page content

#### Mega Menu Content
- **Category Title:** H4, Montserrat, Gold (#C9A962), uppercase
- **Menu Items:** Body size, Inter, White, hover Gold
- **"View All" Link:** Tertiary button style, Gold
- **Featured Image:** 16:9 aspect ratio, hover zoom effect

#### Mobile Navigation
- **Trigger:** Hamburger icon (3 lines)
- **Style:** Full-screen overlay, Jet Black background
- **Animation:** Slide in from right (300ms)
- **Menu Items:** Large touch targets (48px height minimum)
- **Accordion:** Categories expand to show sub-items
- **Close:** X button top-right + swipe right to close

### Hero Section
- **Height:** 100vh (min 600px)
- **Background:** Full-bleed image or video
- **Overlay:** Gradient overlay for text readability
- **Content:** Centered or left-aligned based on imagery
- **CTA:** Primary button with hover animation

### Product Cards
- **Aspect Ratio:** 4:5 (portrait) or 1:1 (square)
- **Hover Effect:** Scale image 1.05x, show quick action overlay
- **Info:** Product name, category, "View Details" link
- **Gap:** 24px between cards
- **Columns:** 4 (desktop), 3 (tablet), 2 (mobile)

### Footer
- **Columns:** 4 (desktop), 2 (tablet), 1 (mobile)
- **Content:** Logo, navigation, contact, social, newsletter
- **Copyright:** Bottom bar, separate from main footer
- **See branding-requirements.md for color specifications**

> **Note:** Button styles, form element styles, and animation specifications are defined in `branding-requirements.md` to maintain a single source of truth for visual branding.

---

## Accessibility Requirements

### WCAG 2.1 AA Compliance
- Color contrast ratio: Minimum 4.5:1 for text
- Focus states: Visible outline on all interactive elements
- Alt text: Required for all images
- Keyboard navigation: Full site navigable via keyboard
- Screen reader: Proper ARIA labels and semantic HTML

### Touch Targets
- Minimum size: 44px x 44px
- Adequate spacing between interactive elements

---

## Image Assets & Directory Structure

### Directory Structure
```
public/images/
├── logos/
│   ├── logo.svg              # Primary logo (vector)
│   ├── logo.png              # Primary logo (raster, 512px)
│   ├── logo-white.svg        # White version for dark backgrounds
│   ├── logo-white.png        # White version (raster)
│   ├── logo-dark.svg         # Dark version for light backgrounds
│   └── logo-icon.svg         # Icon-only version (square)
├── favicons/
│   ├── favicon.ico           # Legacy favicon (16x16, 32x32)
│   ├── favicon-16x16.png     # Modern favicon 16px
│   ├── favicon-32x32.png     # Modern favicon 32px
│   ├── apple-touch-icon.png  # iOS home screen (180x180)
│   ├── android-chrome-192x192.png  # Android Chrome
│   ├── android-chrome-512x512.png  # Android Chrome large
│   ├── mstile-150x150.png    # Windows tiles
│   ├── safari-pinned-tab.svg # Safari pinned tab
│   ├── site.webmanifest      # Web app manifest
│   └── browserconfig.xml     # Windows browser config
├── og-images/
│   ├── og-default.jpg        # Default Open Graph (1200x630)
│   ├── og-home.jpg           # Homepage OG image
│   ├── og-products.jpg       # Products page OG image
│   ├── og-about.jpg          # About page OG image
│   ├── og-contact.jpg        # Contact page OG image
│   └── twitter-card.jpg      # Twitter card (1200x600)
├── heroes/
│   ├── hero-home.jpg         # Homepage hero (1920x1080)
│   ├── hero-home-mobile.jpg  # Homepage hero mobile (768x1024)
│   ├── hero-about.jpg        # About page hero
│   └── hero-contact.jpg      # Contact page hero
├── products/
│   └── (product images organized by category)
└── icons/
    ├── icon-sprite.svg       # SVG sprite for UI icons
    └── (individual icon files)
```

### Image Best Practices

#### Logo Requirements
| Asset | Dimensions | Format | Usage |
|-------|------------|--------|-------|
| Primary Logo | Variable (max 300px wide) | SVG preferred, PNG fallback | Navigation, footer |
| Logo Icon | 512x512 | SVG, PNG | Favicon source, app icons |
| White Logo | Same as primary | SVG, PNG | Dark backgrounds |
| Dark Logo | Same as primary | SVG, PNG | Light backgrounds |

#### Favicon Generation
Generate from a 512x512 source image using tools like:
- [RealFaviconGenerator](https://realfavicongenerator.net/)
- [Favicon.io](https://favicon.io/)

Required files:
```html
<link rel="icon" type="image/x-icon" href="/images/favicons/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
<link rel="manifest" href="/images/favicons/site.webmanifest">
<meta name="msapplication-TileColor" content="#CDBF2B">
<meta name="theme-color" content="#CDBF2B">
```

#### Open Graph (OG) Images
| Platform | Dimensions | Format | Notes |
|----------|------------|--------|-------|
| Facebook/LinkedIn | 1200x630 | JPG | Primary OG image |
| Twitter | 1200x600 | JPG | Twitter card (summary_large_image) |
| Pinterest | 1000x1500 | JPG | Vertical format |

Required meta tags:
```html
<meta property="og:image" content="https://top5pct.com/images/og-images/og-default.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Top 5 Percent - Custom Signage & Apparel">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://top5pct.com/images/og-images/twitter-card.jpg">
```

#### Hero Images
| Usage | Desktop | Mobile | Format |
|-------|---------|--------|--------|
| Homepage Hero | 1920x1080 | 768x1024 | JPG (WebP with fallback) |
| Page Headers | 1920x600 | 768x400 | JPG (WebP with fallback) |

Best practices:
- Compress to <200KB for hero images
- Use `srcset` for responsive images
- Implement lazy loading for below-fold images
- Provide WebP with JPG fallback

#### Product Images
| Type | Dimensions | Format | Notes |
|------|------------|--------|-------|
| Thumbnail | 400x500 | JPG/WebP | Gallery grid |
| Medium | 800x1000 | JPG/WebP | Product cards |
| Large | 1200x1500 | JPG/WebP | Product detail |
| Zoom | 2400x3000 | JPG | Zoom functionality |

---

## SEO Considerations

### Technical SEO (Laravel Implementation)
- Server-side rendered pages (Blade templates)
- Semantic HTML5 structure
- Meta tags managed via Laravel
- Sitemap generation
- Robots.txt configuration
- Canonical URLs
- Schema.org structured data

### Page Speed Optimization
- Image optimization (WebP format, lazy loading)
- Critical CSS inlining
- Asset minification
- Browser caching headers
- Gzip compression

---

## Development Requirements & Best Practices

### Code Organization & Modularity

**Maximum File Size: 800 Lines**
- No single file may exceed 800 lines of code
- Break large files into smaller, focused modules
- Extract reusable logic into traits, services, or actions
- Use Livewire components for UI modularity

### TALL Stack Architecture

**Tailwind CSS**
- Mobile-first CSS methodology
- Fluid typography using `clamp()`
- Custom theme configuration matching brand colors
- Purge unused styles in production

**Alpine.js**
- Lightweight interactions (dropdowns, modals, toggles)
- Use `x-data`, `x-show`, `x-on` for reactive behavior
- Keep Alpine logic minimal; prefer Livewire for complex state

**Laravel 11**
- Follow Laravel conventions strictly
- Use route model binding
- Implement form request validation
- Configure proper caching for production
- Implement CSRF protection on all forms

**Livewire 3**
- Use for all reactive UI components
- Prefer Livewire over AJAX for dynamic content
- Implement proper loading states
- Use `wire:navigate` for SPA-like navigation

### Lunar E-Commerce Integration

- Use Lunar for product catalog, cart, and checkout
- Extend Lunar models as needed for custom fields
- Implement custom product types for signage vs. apparel
- Use Lunar's built-in payment gateway integrations
- Follow Lunar's admin panel conventions

### Modern PHP Standards (2025)

#### 1. Strict Typing
Every PHP file must begin with strict types declaration:
```php
<?php

declare(strict_types=1);
```

Use typed properties and return types:
```php
class ProductService
{
    public function calculatePrice(float $base, int $taxRate): float
    {
        return $base * (1 + ($taxRate / 100));
    }
}
```

#### 2. Dependency Injection (DI)
- Never instantiate dependencies directly (`new DatabaseConnection()`)
- Request interfaces in constructors; let the container inject them
- Makes code testable and swappable

```php
class OrderService
{
    public function __construct(
        private readonly OrderRepositoryInterface $orders,
        private readonly PaymentGatewayInterface $payments,
    ) {}
}
```

#### 3. Static Analysis with Larastan
- Run PHPStan/Larastan on all code before commits
- Minimum level 5 for new code, work toward level 8
- Catches null pointer exceptions, type mismatches, undefined methods
- Integrate into CI/CD pipeline

#### 4. Testing with Pest
Use Pest for all tests (preferred over PHPUnit in Laravel ecosystem):
```php
test('a user can add item to cart', function () {
    $user = User::factory()->create();
    $product = Product::factory()->create();

    actingAs($user)
        ->post('/cart/add', ['product_id' => $product->id])
        ->assertStatus(200);

    expect($user->cart->items)->toHaveCount(1);
});
```

#### 5. The Action Pattern
Instead of bloated Controllers or Models, use single-purpose Action classes:

```php
// app/Actions/CreateOrderAction.php
class CreateOrderAction
{
    public function __construct(
        private readonly OrderRepository $orders,
        private readonly NotificationService $notifications,
    ) {}

    public function execute(User $user, Cart $cart): Order
    {
        $order = $this->orders->createFromCart($user, $cart);
        $this->notifications->sendOrderConfirmation($order);
        
        return $order;
    }
}
```

Benefits:
- Single responsibility
- Easy to test in isolation
- Reusable across controllers, commands, jobs
- Clear naming reveals intent

### File Structure (TALL Stack + Lunar)

```
├── app/
│   ├── Actions/
│   │   ├── Cart/
│   │   │   ├── AddToCartAction.php
│   │   │   └── RemoveFromCartAction.php
│   │   ├── Orders/
│   │   │   ├── CreateOrderAction.php
│   │   │   └── ProcessPaymentAction.php
│   │   └── Inquiries/
│   │       └── SubmitInquiryAction.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── ProductController.php
│   │   │   ├── AboutController.php
│   │   │   └── ContactController.php
│   │   └── Requests/
│   │       └── ContactFormRequest.php
│   ├── Livewire/
│   │   ├── Components/
│   │   │   ├── Navigation.php
│   │   │   ├── ProductCard.php
│   │   │   ├── ProductGallery.php
│   │   │   └── TestimonialCarousel.php
│   │   ├── Cart/
│   │   │   ├── CartIcon.php
│   │   │   ├── CartDrawer.php
│   │   │   └── CartPage.php
│   │   ├── Checkout/
│   │   │   └── CheckoutForm.php
│   │   └── Forms/
│   │       └── ContactForm.php
│   ├── Models/
│   │   ├── Product.php (extends Lunar)
│   │   ├── Category.php
│   │   ├── Inquiry.php
│   │   └── Testimonial.php
│   └── Services/
│       ├── ProductService.php
│       └── InquiryService.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── components/
│   │   │   ├── button.blade.php
│   │   │   ├── input.blade.php
│   │   │   └── card.blade.php
│   │   ├── livewire/
│   │   │   ├── components/
│   │   │   ├── cart/
│   │   │   ├── checkout/
│   │   │   └── forms/
│   │   ├── pages/
│   │   │   ├── home.blade.php
│   │   │   ├── products.blade.php
│   │   │   ├── about.blade.php
│   │   │   └── contact.blade.php
│   │   └── partials/
│   │       ├── hero.blade.php
│   │       ├── services.blade.php
│   │       └── cta-banner.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── tests/
│   ├── Feature/
│   │   ├── CartTest.php
│   │   ├── CheckoutTest.php
│   │   └── ContactFormTest.php
│   └── Unit/
│       └── Actions/
├── public/
│   └── images/
├── routes/
│   └── web.php
└── database/
    └── migrations/
```

### Code Quality Checklist

Before committing any code:
- [ ] File is under 800 lines
- [ ] `declare(strict_types=1);` at top
- [ ] All methods have type hints and return types
- [ ] Larastan passes at level 5+
- [ ] Pest tests written for new features
- [ ] No `dd()` or `dump()` left in code
- [ ] CSRF protection on all forms
- [ ] Input validation via Form Requests
- [ ] Proper error handling implemented

### Responsive Design Approach
- Mobile-first CSS methodology
- Fluid typography using `clamp()`
- Flexible images and media
- Touch-friendly interactions
- Optimized images for different screen sizes
