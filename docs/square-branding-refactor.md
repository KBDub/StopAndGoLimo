# Square Branding Refactor

## Status: Complete

All structural rounded corners have been removed across buttons, cards, sections, Livewire views, and the CSS design system. The sunburst underbar is now fully square — this was executed as the highest priority item.

---

## What Was Changed

### CSS Variables — `resources/css/app.css`
Set all structural border-radius variables to `0px`:
```css
--border-radius: 0px;
--border-radius-md: 0px;
--border-radius-lg: 0px;
--border-radius-full: 9999px;  /* kept — intentional circles only */
```
Also removed `rounded-sm` from the `.btn` utility class.

### Sunburst Underbar — HIGH PRIORITY (Global)
Removed `rounded` from every `h-1 bg-sunburst` instance across all Blade files and documentation. The underbar is now a crisp rectangular line with square ends. Updated in:
- All 22 section and UI components that use it
- `docs/branding-requirements.md` (code examples updated)

### Buttons — 9 components
Removed `rounded-lg` from all button components:
- `button-blue-white`, `button-charcoal-gold`, `button-gold-charcoal`, `button-gold-gradient`, `button-gold-white`, `button-outline-charcoal`, `button-outline-gold`, `button-white-charcoal`, `button-text-link`
- Also removed inline `rounded-lg` from `hero-full-bleed` secondary button

### Cards — 6 components
- `card-service` — removed `rounded-xl`
- `card-showcase` — removed `rounded-2xl`
- `card-testimonial` — removed `rounded-xl`
- `card-product` — removed `rounded-lg` from image
- `card-product-hover` — removed `rounded-xl` from containers
- `carousel-product` — removed `rounded-xl` / `rounded-lg` from image frames and thumbnails
- `modal-quick-view` — removed `rounded-2xl` from modal container, `rounded-lg` from internal buttons/inputs

### Section Components — 8 components
- `top5pct-same-day-service` — `rounded-lg` removed from service cards
- `represent-yourself` — `rounded-xl` removed from feature blocks
- `about-preview` — `rounded-2xl` / `rounded-lg` removed from image and stat card
- `design-it-yourself` — `rounded-2xl` removed from containers
- `shirt-types-faq` — `rounded-xl` removed from sidebar image
- `shirt-types-video` — `rounded-xl` removed from iframe
- `map-section` — `rounded-l-lg` / `rounded-r-lg` / `rounded-lg` removed from search bar and iframe
- `sticky-add-to-cart` — `rounded-lg` removed

### Livewire Cart — 4 files
Removed `rounded-xl`, `rounded-lg`, `rounded` from:
- `cart-drawer` — product thumbnails, quantity buttons
- `cart-page` — line item rows, summary container, product images, quantity buttons
- `checkout-page` — all form inputs, section containers
- `order-confirmation` — containers

### Livewire Catalog — 3 files
Removed `rounded-xl`, `rounded-lg`, `rounded` from:
- `collection-page` — product cards, image frames, filter inputs, pagination buttons, mobile toggle, price range inputs, checkbox inputs
- `featured-products` — product card containers, image frames
- `product-detail` — main image frame, thumbnails, quantity buttons, add-to-cart button, variant selector buttons, error alerts

---

## What Was Left Round (Intentional)

| Element | Class | Reason |
|---|---|---|
| Badges (all 5) | `rounded-full` | Pill shape is intentional branding for labels |
| Decorative glow blurs | `rounded-full blur-3xl` | Background effect, invisible as shapes |
| Cart count badge | `rounded-full` | Notification dot must be circular |
| Avatar images | `rounded-full` | Standard avatar convention |
| Color swatch pickers | `rounded-full` | Product UX convention |
| Step number circles | `rounded-full` | Numbered step indicators |
| "Best Seller" / "New" tags | `rounded-full` | Product image pill labels |

---

## Reference Component

`x-ui.card-image-with-text` was cited as the reference for the square aesthetic — sharp corners, gold shadow, no rounding anywhere.

---

## Documentation Updated

- `docs/branding-requirements.md` — Card spec updated (border-radius: 0), sunburst underbar code examples updated, `card-product` image spec updated
- `docs/square-branding-refactor.md` — This file
