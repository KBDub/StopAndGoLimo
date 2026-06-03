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

## Horizontal Overflow / Mobile "Play" — Fixed

**Date:** 2026-06-03
**Files:**
- `resources/views/components/layouts/page.blade.php`
- `resources/views/components/ui/card-banner-slide-in.blade.php`

**Problem:** On iPhone 12 Pro (390px) and Pixel 7 (412px), the page scrolled horizontally by ~130px and ~155px respectively. Users could "play" the page left and right.

**Root cause — two compounding issues:**

1. **No `overflow-x` guard on `<body>`.** The body tag had no `overflow-x: hidden`, so any element that extended even 1px past the right viewport edge created a page-wide horizontal scrollbar. This is the systemic missing safeguard.

2. **`card-banner-slide-in` animation leak.** The component starts its inner element at `translateX(100%)` (for `direction="right"`) or `translateX(-100%)` (for `direction="left"`) before the IntersectionObserver fires. The outer wrapper had `overflow-hidden` but no `position` context. Without `position: relative`, browsers don't reliably use `overflow: hidden` to clip transformed children, so the off-screen initial position leaked into the page scroll width. The `/vehicle-graphics` page uses `direction="right"` which starts the element ~one viewport-width off the right edge.

**Why the overflow amount differed by device:** The `direction="right"` element starts at `translateX(100%)` of its own width. A wider phone → wider element → more pixels of right-side overflow. This explains 130px on a 390px phone vs. 155px on a 412px phone.

**Fixes applied:**

1. `<body>` tag — added `overflow-x-hidden` (Tailwind). This is the universal safeguard. Safe to apply here because `sticky-header-part` is a dead hook class with no CSS rules and no JS usage — no actual sticky positioning exists on the header that would be broken by overflow clipping.

2. `card-banner-slide-in.blade.php` outer wrapper — added `relative` alongside `overflow-hidden`. This gives the wrapper a proper positioning context so `overflow: hidden` reliably clips its transformed child in all browsers, including during the initial off-screen state before the animation fires.

**Note on `sticky-header-part`:** This class appears on the notification bar element but has no CSS definition in `app.css` and no JavaScript selector. It is a dead class and does not affect behavior.

---

## Sticky Navbar Broken by `overflow-x-hidden` on `<html>` — Fixed

**Date:** 2026-06-03
**File:** `resources/views/components/layouts/page.blade.php`

**Problem:** After adding `overflow-x-hidden` to both `<html>` and `<body>` to fix horizontal overflow, the sticky notification bar and navigation bar stopped sticking on scroll — both desktop and mobile.

**Root cause:** Setting any `overflow` value other than `visible` on `<html>` turns it into a scroll container. `position: sticky` elements look up the DOM for their nearest scrolling ancestor to stick against. With `<html>` now a non-scrollable `overflow: hidden` container, sticky descendants found it as their scroll container but could not stick (nothing scrolls inside a hidden-overflow element). The result: nav and notification bar scrolled out of view like normal block elements.

**Fix:** Removed `overflow-x-hidden` from `<html>`. Left `overflow-x-hidden` on `<body>`.

**Why body is safe:** When `<html>` has the default `overflow: visible`, the browser propagates `<body>`'s overflow value to the viewport. The body element itself then behaves as `overflow: visible` for layout purposes. Sticky elements inside body still find the viewport as their scroll container, so sticking works normally.

**Why the horizontal overflow stays fixed:** The real containment is now at the component level:
- `carousel-rotating-images` — `overflow-hidden` on the `relative` wrapper clips the 1036px track
- `card-banner-slide-in` — `relative` on the outer wrapper gives `overflow-hidden` proper positioning context to clip `translateX(100%)` before the animation fires
- `<body>` `overflow-x-hidden` remains as a catch-all backstop for any future overflow sources

**Rule to remember:** Never put `overflow: hidden` (or any non-visible overflow) on `<html>`. Always use `<body>` or a scoped wrapper instead. Fix overflow at the component level first, use body as a backstop only.

---

## Low Priority — Pending

- Custom request wizard multi-step form — needs live mobile test.
- Checkout multi-step flow — needs live mobile test.
- Mobile nav sub-panel accordion — needs visual audit on narrow screens.
