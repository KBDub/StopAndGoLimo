# Mobile Optimization Log

This file tracks all mobile-specific UI decisions and changes made to the Top 5 Percent platform.

---

## Media Breakpoints

No custom breakpoints are defined in `tailwind.config.js`. The project uses Tailwind's defaults, all mobile-first (min-width):

| Prefix | Min Width | Targets |
|--------|-----------|---------|
| *(none)* | 0px | Mobile phones (375px, 412px) |
| `sm:` | 640px | Large phones, small tablets |
| `md:` | 768px | iPad portrait, tablet |
| `lg:` | 1024px | iPad landscape, small desktop |
| `xl:` | 1280px | Desktop |
| `2xl:` | 1536px | Large/wide desktop |

**How breakpoints are used in this project:**

- **Mobile nav cutoff** — `lg` (1024px): hamburger menu shows below `lg`, desktop mega-menu shows at `lg` and above
- **Top notification bar** — `sm` (640px): social icons, Reviews, Service Areas, and Free Shipping all use `hidden sm:flex` or `hidden sm:inline`; hidden on phone, visible on sm+
- **Card float layouts** — `md` (768px): `md:float-left`, `md:float-right`, `md:mr-12` — image stacks full-width on mobile, floats beside text on tablet/desktop
- **Card padding** — `p-4 sm:p-6 md:p-10 lg:p-12` — steps up across all four breakpoints
- **Video banner height** — `aspect-ratio:4/3` on mobile, `md:h-[450px]` override on desktop restores original fixed height
- **Carousel collapse** — `window.innerWidth < 768` (matches `md:`) — collapses to 1 image on mobile, uses prop value (`visible=2` or `3`) on tablet/desktop
- **`paddingLeft` JS guard in card components** — `if (window.innerWidth >= 768)` — bold word indent only on md+ where floats are active

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

## Card Image Aspect Ratios — Standardized to 4:3

**Date:** 2026-06-04
**Files:**
- `resources/views/components/sections/card-image-with-text.blade.php`
- `resources/views/components/sections/card-detailed-info.blade.php`

**Problem:** `card-image-with-text` used `style="width:600px; height:450px; max-width:100%;"`. On mobile, `max-width:100%` shrank the width (e.g., 332px) but the fixed `height:450px` stayed, producing a tall portrait proportion instead of 4:3. Other card components already used `aspect-ratio:4/3` and rendered at 332x249 — a visible mismatch.

**Fix:** Replaced `height:450px` with `aspect-ratio:4/3` on both image variants (left and right). Final style: `style="width:600px; aspect-ratio:4/3; max-width:100%;"`. On desktop, 600px width with 4:3 still equals 450px height. On mobile, height scales proportionally with width.

**Rule:** Never use a fixed `height` alongside `max-width:100%` on images. Use `aspect-ratio` instead so both dimensions scale together.

---

## card-detailed-info — Float Layout Restored

**Date:** 2026-06-04
**File:** `resources/views/components/sections/card-detailed-info.blade.php`

**Decision:** Restored the original float-based image layout with responsive breakpoints matching `card-image-with-text`.

**Single-image layout:**
- `$intro` slot: full-width at top
- image1 `md:float-left md:mr-12`: stacks on mobile, floats on desktop with text wrapping beside and below
- `$lower`: full-width after `clear-both`
- `$footer`: border-top, full-width

**Two-image layout:**
- image1 `md:float-left md:mr-12` + `$intro` wrapping beside
- `$mid`: full-width after `clear-both`
- image2 `md:float-right md:ml-6` + `$lower` wrapping beside
- `$footer`: border-top, full-width

**Images:** `style="width:400px; aspect-ratio:4/3; max-width:100%;"` — 400px (not 600px) because this component uses a smaller image proportion alongside denser text. `[display:flow-root]` containers wrap each float group to clear properly.

---

## Video Banner — Responsive Aspect Ratio

**Date:** 2026-06-04
**File:** `resources/views/components/sections/video-banner.blade.php`

**Problem:** The YouTube `<iframe>` had `style="height: 450px;"` with `class="w-full"`. On mobile, `w-full` shrank the width but the height stayed at 450px, giving a near-portrait proportion.

**Fix:** Replaced `height:450px` with `style="aspect-ratio:4/3;"` on the iframe. Added `md:h-[450px]` Tailwind class to override the aspect-ratio on desktop back to 450px fixed height. Container stays `max-w-7xl`.

**Result:**
- Mobile: 4:3 proportional height, matches card images
- Desktop (md+): `md:h-[450px]` overrides aspect-ratio, restores original full-width 450px look

---

## Carousel Rotating Images — Mobile Collapse and 4:3 Ratio

**Date:** 2026-06-04
**File:** `resources/views/components/ui/carousel-rotating-images.blade.php`

**Problems:**
1. The `visible` prop (e.g., `visible=2`) rendered that many image slots on all screen sizes with no responsive breakpoint — two images side-by-side on a 412px phone.
2. All slots used fixed `height:450px` or `height:225px` — same aspect-ratio problem as card images.

**Fixes:**
1. Added `applyResponsive()` Alpine method: sets `vis = 1` when `window.innerWidth < 768`, restores the prop value on desktop. Called on `x-init` and on `window resize`.
2. Replaced all fixed heights with `aspect-ratio:4/3` across all three slots (left, center, right). Center/right slots in `vis=2` mode use `max-width:calc(50% - 6px)` to split space; height is now driven by aspect-ratio.

**Result:** Mobile always shows one image at 4:3. Desktop and tablet show the configured number of images, each proportional.

---

## Top Notification Bar — Phone Number and Service Areas

**Date:** 2026-06-04
**File:** `resources/views/components/layout/top-notification-bar.blade.php`

**Changes:**
1. Removed the `(815) 349-TOP5` secondary number and the "or" separator. Now shows only `(815) 349-8600` at all screen sizes — no `hidden sm:inline` toggling.
2. "Service Areas" link changed from `class="flex ..."` to `class="hidden sm:flex ..."` — hidden on mobile (< 640px), visible on iPad and desktop.

**Why:** On the narrowest phones, showing two phone numbers plus a separator wastes space and can cause layout crowding. A single canonical number is cleaner. Service Areas is a secondary link that mobile users can access through the hamburger menu.

---

## Navigation Bar — Mobile Social Media Icons

**Date:** 2026-06-04
**File:** `resources/views/components/layout/navigation-bar.blade.php`

**Change:** Added a `flex-1 flex lg:hidden justify-center items-center gap-2` row of 7 social media icons (Google Maps, Facebook, Instagram, Pinterest, YouTube, X, LinkedIn) between the logo and the hamburger button.

**Why:** On mobile, the nav bar had a large empty gap between the logo and the hamburger. The social icons fill this space, provide direct mobile access to social profiles, and mirror the icons already visible in the desktop top notification bar.

**Icons:** `w-4 h-4` (slightly larger than `w-3.5 h-3.5` in the notification bar) for better touch targets. `flex-1` on the wrapper div centers the icons naturally between the logo and hamburger.

---

## Mobile Menu — Scrollable Container

**Date:** 2026-06-04
**File:** `resources/views/components/layout/navigation-bar.blade.php`

**Problem:** The mobile accordion menu had no `max-height` or `overflow-y-auto`. Opening a sub-menu with many items (e.g., Custom Apparel with 18 links) extended the menu below the viewport with no way to scroll within the menu panel itself.

**Fix:** Added `max-h-[calc(100vh-6.5rem)] overflow-y-auto` to the outer `x-show="mobileMenuOpen"` wrapper. The `6.5rem` accounts for the combined height of the top notification bar and the mobile nav bar.

**Result:** The menu panel is capped at viewport height minus nav bars and scrolls independently. Works for all states: collapsed top-level list and fully expanded accordions. Requires a CSS build (`npm run build`) for the JIT `calc` class.

---

## Mobile Menu — Item Order and About Us

**Date:** 2026-06-04
**File:** `resources/views/components/layout/navigation-bar.blade.php`

**Changes:**
1. "Top 5% Merchandise" moved from after "Design Services" to before it — matches the desktop nav bar order.
2. "About Us" accordion added after "Design Services" with three sub-links: About Us, Portfolio, Articles. Uses the same accordion pattern (`openMobile === 'about'`) as all other mobile sub-menus.

**Final mobile menu order:**
Home, Custom Apparel, Select a Sign, Stickers, Vehicle Decals, Promo Items, Top 5% Merchandise, Design Services, About Us.

---

## Navigation Bar — Breakpoint Restructure and Menu Overflow Fix

**Date:** 2026-06-04
**Files:**
- `resources/views/components/layout/navigation-bar.blade.php`
- `resources/views/components/layout/top-notification-bar.blade.php`

**Problem:** The desktop mega-menu activated at `lg` (1024px). At exactly 1024px, the full set of nav items overflowed past the right edge of the viewport because the menu items used `whitespace-nowrap` and `text-base`, making them too wide to fit.

**Desired breakpoint behavior:**
1. ≤ 768px (`md` and below): hamburger menu + SM icons displayed in the nav bar row between logo and hamburger
2. 769–1023px (above `md`, below `lg`): desktop mega-menu, no SM icons in the nav bar row
3. ≥ 1024px (`lg` and above): desktop mega-menu + SM icons visible in the top notification bar
4. Logo always visible at all breakpoints

**Changes made:**

| Element | File | Old class | New class |
|---|---|---|---|
| Mobile SM icons (nav bar) | navigation-bar | `flex-1 flex lg:hidden` | `flex-1 flex md:hidden` |
| Hamburger button | navigation-bar | `lg:hidden` | `md:hidden` |
| Desktop nav wrapper | navigation-bar | `hidden lg:flex` | `hidden md:flex` |
| Mobile menu drawer | navigation-bar | `lg:hidden` | `md:hidden` |
| Notification bar SM icons | top-notification-bar | `hidden sm:flex` | `hidden lg:flex` |

**Multi-word menu item stacking:**
All desktop nav links previously used `whitespace-nowrap text-base`, forcing each label onto one line. Changed to `whitespace-normal text-sm text-center leading-tight` with `max-w-[72px]` on each anchor. Multi-word items ("Custom Apparel", "Select a Sign", etc.) wrap to two lines, cutting their individual widths roughly in half. Single-word items ("Home", "Stickers") are unaffected.

**Space saved:** 7 multi-word items × ~115px (before) vs ~68px (after) = ~330px recovered. Enough to fit the full menu comfortably from 769px upward.

**No CSS rebuild required** — all breakpoint classes (`md:hidden`, `hidden md:flex`, `hidden lg:flex`) were already in the bundle.

---

## Navigation Design Spec (current, authoritative)

This section is the single source of truth for navigation typography, spacing, and responsive behavior. Update it whenever nav specs change.

---

### Breakpoint reference

| Viewport | Hamburger | Desktop menu | SM icons location |
|---|---|---|---|
| ≤ 768px (`md` and below) | visible | hidden | centered in nav bar row (between logo and hamburger) |
| 769–1023px (above `md`, below `lg`) | hidden | visible | hidden everywhere |
| ≥ 1024px (`lg` and above) | hidden | visible | top notification bar |

---

### Top notification bar (`top-notification-bar.blade.php`)

| Property | Value |
|---|---|
| Background | `bg-sunburst` |
| Text color | `text-charcoal` |
| Font weight | `font-semibold` |
| Font size | `text-xs` (12px) |
| Vertical padding | `py-0.5` (resting), `py-0` (scrolled) |
| Container | `max-w-7xl mx-auto px-4 flex items-center gap-4` |
| Phone link color | CSS var `--color-azure` |
| SM icons (notification bar) | `hidden lg:flex items-center gap-1.5 mx-auto shrink-0` |
| SM icon size | `w-3.5 h-3.5` (14px) |
| SM icon hover scale | `hover:scale-125 hover:[color:var(--color-olive)]` |
| Free Shipping link | `hidden sm:block shrink-0 font-semibold text-charcoal whitespace-nowrap` |
| Reviews / Service Areas | `hidden sm:flex items-center gap-1 font-semibold text-charcoal` |

---

### Navigation bar (`navigation-bar.blade.php`)

**Bar container and height**

| Property | Value |
|---|---|
| Background | `bg-linen` |
| Shadow | `shadow-sm` |
| z-index | `relative z-50` |
| Outer wrapper | `max-w-7xl mx-auto px-4 sm:px-6` |
| Bar height (resting) | `h-14` mobile, `lg:h-20` desktop |
| Bar height (scrolled) | `h-12` mobile, `lg:h-14` desktop |
| Row layout | `flex items-center gap-4 transition-all duration-300` |

**Logo**

| Property | Value |
|---|---|
| Container | `flex items-center flex-shrink-0` |
| Logo height (resting) | `h-10` mobile, `lg:h-16` desktop |
| Logo height (scrolled) | `h-8` mobile, `lg:h-10` desktop |
| Transition | `transition-all duration-300 transform-gpu` |

**Desktop nav wrapper**

| Property | Value |
|---|---|
| Classes | `hidden md:flex flex-1 self-stretch items-stretch justify-between relative z-50` |
| Shows at | ≥ 769px (`md` breakpoint) |

**Desktop nav link spec (all items, canonical)**

| Property | Value |
|---|---|
| Font size | `text-lg` = **18px** (Titillium Web) |
| Font weight | `font-semibold` |
| Line height | `leading-tight` |
| Text alignment | `text-center` |
| Display | `inline-flex items-center` |
| Horizontal padding | `px-2` (8px each side) |
| Height | `h-full` (full bar height) |
| Dropdown chevron gap | `gap-0.5` |
| Inactive color | `text-charcoal hover:text-sunburst` |
| Active color | `text-azure` |
| Transition | `transition-colors` |
| Whitespace | none (removed, allows multi-word labels to wrap to 2 lines) |

**Multi-word stacking behavior**

Labels like "Custom Apparel", "Select a Sign", "Vehicle Decals", "Promo Items", "Top 5% Merchandise", "Design Services", and "About Us" are allowed to wrap to 2 lines. This is intentional and saves roughly 330px of horizontal space at intermediate widths (769–1023px). Do not re-add `whitespace-nowrap` to these links.

**Mobile SM icons (nav bar row)**

| Property | Value |
|---|---|
| Container | `flex-1 flex md:hidden justify-center items-center gap-2` |
| Visible at | ≤ 768px only |
| Icon size | `w-4 h-4` (16px) |
| Icon hover | `hover:scale-125 hover:[color:var(--color-olive)]` |

**Hamburger button**

| Property | Value |
|---|---|
| Visible at | ≤ 768px (`md:hidden`) |
| Padding | `p-2` |
| Colors | `text-charcoal hover:text-sunburst` |
| Icon size | `w-7 h-7` (28px) |

**Mobile menu drawer**

| Property | Value |
|---|---|
| Visibility | `md:hidden` (≤ 768px) |
| Border | `border-t border-linen-dark` |
| Max height | `max-h-[calc(100vh-6.5rem)]` (prevents overflow past viewport) |
| Scroll | `overflow-y-auto` |
| Inner container | `max-w-7xl mx-auto px-4 py-4 space-y-1` |
| Mobile link style | `block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors` |

---

## Low Priority — Pending

- Custom request wizard multi-step form — needs live mobile test.
- Checkout multi-step flow — needs live mobile test.
