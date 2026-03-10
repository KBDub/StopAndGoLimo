# Branding Update: Premium E-Commerce Components

## Changelog

### March 10, 2026 — Typography Scale Increase

All non-H1 font sizes bumped up one level for improved readability across body content sections. H1 remains unchanged at 32px/28px.

| Element | Previous (Desktop / Mobile) | New (Desktop / Mobile) |
|---------|---------------------------|----------------------|
| H2 | 24px / 22px | 28px / 24px |
| H3 | 20px / 18px | 24px / 20px |
| H4 | 18px / 16px | 20px / 18px |
| H5 | 16px / 15px | 18px / 16px |
| Body Large | 18px / 16px | 20px / 18px |
| Body | 16px / 15px | 18px / 16px |
| Body Small | 14px / 13px | 16px / 15px |
| Caption | 12px / 11px | 14px / 13px |
| Button | 14px / 13px | 16px / 15px |
| Nav Link | 14px / 13px | 16px / 15px |

**Files changed:** `resources/css/app.css` (CSS variables), `tailwind.config.js` (Tailwind fontSize utilities), `docs/branding-requirements.md` (documented scale).

---

## Overview

This document outlines the new component designs, media pipeline, and layout strategies for elevating the Top 5 Percent storefront to match the visual quality and conversion patterns of leading e-commerce brands like ModCloth and Gymshark. These new components are separate from the existing UI component set and will be added to the demo page for review.

**Reference Sites:**
- [ModCloth](https://modcloth.com/) — Approachable catalog presentation, clean 3:4 product grids, lifestyle imagery
- [Gymshark](https://www.gymshark.com/) — High-energy activewear, movement-focused media, aggressive visual density

**Reference Documents:**
- `docs/ECommerceMediaOptimizationStrategies.pdf` — Aspect ratios, file sizes, format recommendations
- `docs/ImageDisplayAndConversionPipeline.pdf` — Spatie Media Library pipeline, HTML/CSS display patterns

---

## 1. New Component Designs

### 1.1 Product Cards with Hover Effects

**Component:** `x-ui.card-product-hover`

A modern product card using 3:4 aspect ratio image containers with interactive hover states. Replaces static product cards on collection pages.

**Features:**
- 3:4 aspect ratio image container (`aspect-[3/4]`) with `object-cover object-top`
- Hover effect: image scales up subtly (`group-hover:scale-105`) with a semi-transparent overlay
- Quick-add button appears on hover at the bottom of the image container
- Color swatches displayed below the image (small circular dots representing available colors)
- Badge overlays positioned top-left for "New" and "Best Seller" tags
- Product name, price, and variant count displayed below the image
- Responsive: 2-column grid on mobile, 3-column on tablet, 4-column on desktop

**Hover State Behavior:**
- Image container: subtle scale transition (500ms ease)
- Quick-add button: slides up from bottom of image container with fade-in
- Card shadow: elevates slightly on hover

**Badge Positioning:**
- Top-left corner of the image container
- Semi-transparent background with brand colors (Sunburst Gold for "Best Seller", Azure Blue for "New")
- Small, rounded pill shape

**Color Swatches:**
- Row of small circles (16px diameter) below the product image
- Border on hover to indicate selectable
- Max 5 visible with "+N more" indicator if more exist

### 1.2 Full-Bleed Hero CTAs

**Component:** `x-sections.hero-full-bleed`

Full-width (100vw) hero sections that break out of the standard max-width container. Large lifestyle photography with bold text overlay for maximum visual impact.

**Features:**
- Full viewport width (`w-full` or `w-screen`), no max-width constraint
- Large lifestyle background image with gradient overlay (dark gradient from bottom for text legibility)
- Bold heading text in white or Sunburst Gold, subheading in white
- One or two CTA buttons (primary Sunburst Gold gradient, secondary white outline)
- Responsive text sizing: large on desktop (`text-5xl`), scaled down on mobile (`text-2xl`)
- Optional: parallax scroll effect on the background image
- Minimum height: `min-h-[60vh]` on desktop, `min-h-[40vh]` on mobile

**Layout Variants:**
- **Center-aligned:** Text and CTAs centered over the image
- **Left-aligned:** Text and CTAs on the left third, imagery dominates the right
- **Split:** 50/50 image and content side by side at full width

### 1.3 Category Grid Cards

**Component:** `x-ui.card-category-visual`

Image-forward category navigation cards that replace plain text links. Each card uses a background image with text overlay to create a visually rich browsing experience.

**Features:**
- 3:4 or 1:1 aspect ratio with full background image
- Dark gradient overlay from bottom (50% of card height) for text legibility
- Category name in bold white text, positioned bottom-left
- Subtitle with product count (e.g., "24 products") in lighter text
- Hover effect: image zooms slightly, overlay lightens
- Rounded corners (`rounded-xl`) with overflow hidden
- Responsive grid: 2-column on mobile, 3-column on tablet, 4-column on desktop

**Hierarchy:**
- Top-level categories: larger cards (span 2 columns on desktop)
- Subcategories: standard single-column cards
- Featured category: full-width banner card option

### 1.4 Sticky Add-to-Cart Bar

**Component:** `x-ui.sticky-add-to-cart`

A fixed bar that appears at the bottom of the viewport when the user scrolls past the main "Add to Cart" button on the product detail page. Provides persistent purchase access without scrolling back up.

**Features:**
- Fixed position at bottom of viewport (`fixed bottom-0`)
- Slides up with smooth transition when the main CTA scrolls out of view (Alpine.js `x-intersect`)
- Contains: product name (truncated), selected variant, price, quantity selector, "Add to Cart" button
- Compact single-row layout on desktop, stacked on mobile
- Background: white with subtle top shadow for separation
- Z-index above page content but below modals/drawers
- Sunburst Gold gradient "Add to Cart" button matching the main PDP button

**Scroll Behavior (Alpine.js):**
- Uses `IntersectionObserver` via Alpine's `x-intersect` directive
- Watches the main "Add to Cart" button on the PDP
- When the button scrolls out of the viewport, the sticky bar slides in
- When the user scrolls back to the button, the sticky bar slides out

### 1.5 Quick-View Modal

**Component:** `x-ui.modal-quick-view`

A modal overlay that shows product details without navigating away from the collection page. Triggered by clicking the quick-add button on hover product cards.

**Features:**
- Modal overlay with backdrop blur and dark semi-transparent background
- Two-column layout inside the modal: image carousel on the left (60%), product details on the right (40%)
- Image carousel with thumbnail navigation (3-4 images max in quick view)
- Product name, price, variant selector, quantity, and "Add to Cart" button
- "View Full Details" link to navigate to the full PDP
- Close button (top-right) and click-outside-to-close
- Smooth fade-in/scale-up animation on open
- Responsive: full-screen on mobile, centered modal on desktop (max-width ~900px)

**Modal Content:**
- Product images (first 3-4 from media collection)
- Product name and price
- Variant selector (size/color)
- Quantity selector
- "Add to Cart" button (Sunburst Gold gradient)
- Brief description (first 2-3 lines)
- "View Full Details" text link (Azure Blue)

---

## 2. Product Image Carousel (PDP)

**Component:** `x-ui.carousel-product`

A full-featured product image carousel for the product detail page, inspired by ModCloth's implementation. Mobile-swipeable with thumbnail navigation on desktop.

### Mobile Behavior
- Full-width horizontal scroll with snap points (`snap-x snap-mandatory`)
- Each slide is `w-[90vw]` with `aspect-[3/4]`
- Dot indicators at the bottom showing current position
- Swipe left/right to navigate
- Pinch-to-zoom support via CSS `touch-action`

### Desktop Behavior
- Large main image on the left (sticky position while scrolling product details)
- Vertical thumbnail strip on the left edge of the image area (4-6 thumbnails visible)
- Click thumbnail to switch the main image
- Hover-to-zoom: on mouse hover, the image shows a zoomed-in view following cursor position
- Smooth crossfade transition between images (300ms)

### Hover-to-Zoom (Alpine.js)
- On desktop, hovering over the main image activates a magnified view
- Uses `background-image` with `background-position` tracking cursor coordinates
- Zoom level: 2x-3x magnification
- Requires the `zoom` conversion from Spatie Media Library (1600px wide, high quality WebP)
- Falls back gracefully on touch devices (no hover zoom, uses pinch instead)

### Image Sources
- Grid thumbnails: `grid` conversion (600x800, WebP, ~45KB)
- Main carousel: `zoom` conversion (1600px wide, WebP, ~150KB)
- Thumbnail strip: `thumb` conversion (150x200, WebP, ~10KB)

---

## 3. Spatie Media Library Integration

### Why Spatie Media Library

The platform needs an automated image processing pipeline that takes high-resolution uploads and generates optimized, correctly-sized versions for every display context. Spatie Media Library handles this automatically.

**Key Benefits:**
- Automatic WebP conversion on upload (50% smaller than JPEG at same quality)
- Server-side cropping to enforce 3:4 aspect ratio (prevents layout breakage from inconsistent uploads)
- Multiple size generation: grid, zoom, thumb
- Bandwidth savings: a 5MB photographer upload becomes a ~45KB grid thumbnail
- Google Lighthouse / Core Web Vitals optimized (no oversized images served)

### Media Conversions

Three conversions will be registered on the Product model:

| Conversion | Dimensions | Format | Quality | Use Case |
|------------|-----------|--------|---------|----------|
| `grid` | 600x800 | WebP | 80% | Collection page product cards |
| `zoom` | 1600px wide | WebP | 85% | PDP carousel main image, hover-to-zoom |
| `thumb` | 150x200 | WebP | 70% | Cart drawer, admin panels, thumbnail strips |

### Media Collection

A single `images` collection on products accepting:
- `image/jpeg`
- `image/png`
- `image/webp`
- `video/mp4` (for future video support, auto-generates frame thumbnail)

### Integration with Lunar

Lunar already uses Spatie Media Library internally. The integration extends the existing product model with custom conversions and collections. Product images uploaded via Lunar Hub will automatically trigger the conversion pipeline.

---

## 4. Full-Width Layout Strategy

### Current State
The site currently uses a `max-w-7xl mx-auto` container on most sections, which caps content width at ~1280px on large screens.

### New Approach
New section components will support full-width (edge-to-edge) layouts while maintaining readable content widths for text.

**Pattern:**
- Outer wrapper: `w-full` (full viewport width, no max-width)
- Inner content: `max-w-7xl mx-auto px-4 sm:px-6` (contained text/buttons)
- Images and backgrounds: extend to full viewport width

**Sections Using Full-Width:**
- Hero full-bleed CTAs (entire section is edge-to-edge)
- Category grid cards (image grid extends full width, with padding)
- Product image carousel on PDP (images extend full width on mobile)
- Promotional banners (background color/image extends full width)

**Sections Remaining Contained:**
- Product detail text/forms
- Checkout forms
- Cart page content
- Footer content area

---

## 5. Aspect Ratio Standards

Based on the media optimization strategies document, the following aspect ratios are standardized across the site:

| Context | Aspect Ratio | Tailwind Class | Rationale |
|---------|-------------|----------------|-----------|
| Product grid cards | 3:4 | `aspect-[3/4]` | Industry standard for apparel, maximizes vertical space on mobile |
| Category cards | 3:4 or 1:1 | `aspect-[3/4]` or `aspect-square` | Flexible based on layout context |
| PDP carousel (mobile) | 3:4 | `aspect-[3/4]` | Full-width swipeable, shows full outfit |
| PDP carousel (desktop) | Auto height | `aspect-auto` | Flexible in sticky grid layout |
| Cart/checkout thumbnails | 3:4 | `aspect-[3/4]` | Consistent with grid cards |
| Hero CTAs | Free | `min-h-[60vh]` | Sized by content and viewport |

### Image Object Fit Rules
- All product images: `object-cover object-top` (crops bottom/feet, never crops head)
- Category/lifestyle images: `object-cover object-center` (centered cropping)
- Logo/icon images: `object-contain` (no cropping)

---

## 6. File Size Targets

| Image Type | Target File Size | Dimensions | Format |
|------------|-----------------|------------|--------|
| Grid thumbnails | 30KB - 70KB | 600x800 | WebP |
| Hero/main images | 100KB - 200KB | 1600px wide | WebP |
| Cart thumbnails | 5KB - 15KB | 150x200 | WebP |
| Category card backgrounds | 50KB - 120KB | 800x1067 | WebP |
| Full-bleed hero backgrounds | 150KB - 300KB | 1920px wide | WebP |

---

## 7. Component File Structure

All new components will be created alongside existing components, clearly separated by naming convention:

```
resources/views/components/
├── ui/
│   ├── card-product-hover.blade.php        (new - hover product card)
│   ├── card-category-visual.blade.php      (new - image category card)
│   ├── sticky-add-to-cart.blade.php        (new - sticky purchase bar)
│   ├── modal-quick-view.blade.php          (new - quick view modal)
│   ├── carousel-product.blade.php          (new - PDP image carousel)
│   ├── card-product.blade.php              (existing)
│   └── ...existing components
├── sections/
│   ├── hero-full-bleed.blade.php           (new - full-width hero CTA)
│   └── ...existing sections
```

All new components will be added to the existing demo page (`resources/views/pages/demo.blade.php`) for side-by-side review with the current component set.

---

## 8. Technology Stack for New Components

| Technology | Role |
|------------|------|
| **Tailwind CSS** | Styling, aspect ratios, responsive grid, transitions |
| **Alpine.js** | Hover-to-zoom, sticky bar scroll detection, carousel navigation, modal open/close |
| **Livewire** | Quick-add to cart, variant selection, cart count updates |
| **Spatie Media Library** | Image upload processing, WebP conversion, responsive image generation |
| **SheafUI** | Reference patterns for card layouts, CTA designs, and grid structures |

---

## 9. Branding Consistency

All new components must follow the existing brand guidelines in `docs/branding-requirements.md`:

- **No uppercase text** anywhere in the components
- **Sunburst Gold** (`#FFC20E`) for primary CTAs and accent elements
- **Charcoal** (`#2C2C2C`) for text and headers
- **Azure Blue** (`#3273DC`) for secondary CTAs and links
- **Soft Linen** (`#F2F0E6`) for backgrounds
- **Titillium Web** font family throughout
- **Semantic HTML** with proper heading hierarchy (h2-h5)
- **Server-side rendered** for SEO optimization
