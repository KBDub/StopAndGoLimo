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

### Navigation Bar
- **Height:** 80px (desktop), 64px (mobile)
- **Background:** Transparent on hero, solid on scroll
- **Position:** Fixed to top
- **Animation:** Smooth background transition on scroll
- **Mobile:** Hamburger menu with full-screen overlay

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

### Buttons
| Type | Background | Text | Border | Padding |
|------|------------|------|--------|---------|
| Primary | Gold (#C9A962) | Black | None | 16px 32px |
| Secondary | Transparent | White | 1px white | 16px 32px |
| Tertiary | Transparent | Gold | None | 8px 0 |

### Form Elements
- **Input Height:** 56px
- **Border:** 1px solid gray, 2px gold on focus
- **Background:** Transparent or subtle gray
- **Label:** Above input, small caps
- **Error State:** Red border, error message below

### Footer
- **Background:** Jet Black (#0A0A0A)
- **Columns:** 4 (desktop), 2 (tablet), 1 (mobile)
- **Content:** Logo, navigation, contact, social, newsletter
- **Copyright:** Bottom bar, separate from main footer

---

## Animation Guidelines

### Transitions
- **Duration:** 200-300ms for UI elements
- **Easing:** `cubic-bezier(0.4, 0, 0.2, 1)` (ease-out)
- **Properties:** opacity, transform, background-color

### Scroll Animations
- **Trigger:** When element enters viewport (50% visible)
- **Effect:** Fade up with subtle Y translation (20px)
- **Stagger:** 100ms delay between sequential elements

### Hover Effects
- Buttons: Slight scale (1.02) + shadow increase
- Cards: Image zoom (1.05) within container
- Links: Underline animation from left to right

### Loading States
- Skeleton screens for content loading
- Smooth fade-in when content appears
- Spinner for form submission

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
