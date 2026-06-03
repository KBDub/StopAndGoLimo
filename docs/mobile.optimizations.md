# Mobile Optimization Log

This file tracks all mobile-specific UI decisions and changes made to the Top 5 Percent platform.

---

## Top Notification Bar — Mobile Simplification

**Date:** 2026-06-03
**File:** `resources/views/components/layout/top-notification-bar.blade.php`

**Decision:** On mobile (below `sm` breakpoint, < 640px), the notification bar shows only three items:
- **(815) 349-TOP5** — primary phone number (left)
- **Service Areas** — key navigation link (right)
- **Cart icon** — always visible (far right)

**Hidden on mobile:**
- (815) 349-8600 and "or" text
- All 7 social media icons
- "Free Shipping on Orders Over $50!" promo link
- "Reviews" link

**Why:** The bar has three flex columns packed with phone numbers, 7 social icons, a promo link, reviews, and a cart. On a 375px phone, `whitespace-nowrap` causes horizontal overflow that breaks the entire page. The three kept items cover the most critical mobile actions: call us, find us, and shop.

---

## Banner Card Hover Text — Responsive Font Size

**Date:** 2026-06-03
**Files:**
- `resources/views/components/ui/card-lp-banner-images.blade.php`
- `resources/views/components/ui/card-banner-slide-in.blade.php`

**Decision:** The hover-reveal title on banner cards changed from bare `text-7xl` to `text-3xl md:text-5xl lg:text-7xl`.

**Why:** `text-7xl` (72px) on a 375px phone is wider than the card itself. The text overflows and breaks the hover overlay layout. The responsive scale gives a readable size at all breakpoints while preserving the large, bold look on desktop.

---

## Category Hero Description — Responsive Font Size

**Date:** 2026-06-03
**File:** `resources/views/components/sections/category-hero.blade.php`

**Decision:** Hero description paragraph changed from bare `text-2xl` to `text-lg md:text-2xl`.

**Why:** `text-2xl` (1.5rem / 24px) on a small phone makes the description text very tall and pushes the CTA buttons below the fold on short screens. Scaling to `text-lg` on mobile keeps the hero compact and the buttons visible without scrolling.

---

## Medium Priority — Fixed

**Product detail thumbnail grid** — `grid-cols-4` → `grid-cols-2 sm:grid-cols-4`. On phones, thumbnails now show 2-up instead of 4 tiny tiles side by side.
**File:** `resources/views/livewire/catalog/product-detail.blade.php`
**Date:** 2026-06-03

**`card-showcase.blade.php` image width** — `w-48` → `w-full sm:w-48`. Image fills its container on mobile, then caps at 192px on small screens and up.
**File:** `resources/views/components/ui/card-showcase.blade.php`
**Date:** 2026-06-03

---

## Low Priority — Pending

- Custom request wizard multi-step form — needs live mobile test.
- Checkout multi-step flow — needs live mobile test.
- Mobile nav sub-panel accordion — needs visual audit on narrow screens.
