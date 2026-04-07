# Modal System — Component Reference

> **REQUIRED ON STARTUP:** Read `docs/branding-requirements.md` before working on any modal or UI component. All colour tokens, component naming conventions, square-corner rules, and layout constraints defined there apply to everything documented here.

> **Scope:** Documents every modal component that is built and in active use in the application.
> The top-level `/modals/` directory in the project root is a developer scratch area and is **not** covered here.

---

## Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 11 (Blade anonymous components) |
| Reactivity | Alpine.js (bundled via Livewire 3) |
| Styling | Tailwind CSS + inline style tokens |

---

## Components

### 1. `x-ui.modal`

**File:** `resources/views/components/ui/modal.blade.php`

The core, general-purpose modal. All modals on the site are either this component or extend its patterns. Uses a named-event API so unlimited modal instances can coexist on a page without conflict.

#### Props

| Prop | Type | Default | Description |
|---|---|---|---|
| `name` | string | *(required)* | Unique ID used for open/close events |
| `title` | string | `null` | Heading text in the header bar |
| `size` | string | `md` | `sm` / `md` / `lg` / `xl` / `full` |
| `variant` | string | `default` | `default` / `dark` / `gold` / `success` / `warning` / `danger` |
| `dismissible` | bool | `true` | Show ✕ button and allow backdrop click / Escape to close |
| `scrollBody` | bool | `true` | Inner body scrolls; header and footer stay sticky |
| `maxHeight` | string | `92dvh` | CSS max-height override |
| `headerClass` | string | `''` | Extra Tailwind classes on the header div |
| `bodyClass` | string | `''` | Extra Tailwind classes on the body div |
| `footerClass` | string | `''` | Extra Tailwind classes on the footer div |

#### Size → max-width map

| Size | Max-width |
|---|---|
| `sm` | 22rem |
| `md` | 34rem *(default)* |
| `lg` | 46rem |
| `xl` | 58rem |
| `full` | 95vw |

#### Variant colour tokens

| Variant | Accent stripe | Header bg | Use for |
|---|---|---|---|
| `default` | Gold gradient | Linen | Standard forms, general content |
| `dark` | Gold gradient | `#1A1A1A` | Emphasis, dark-mode aesthetics |
| `gold` | Deep gold gradient | Gold gradient | Premium / featured announcements |
| `success` | `#4CAF50` | Linen | Confirmation, order submitted |
| `warning` | `#F9A825` | Linen | Session alerts, caution notices |
| `danger` | `#C62828` | Linen | Destructive actions, delete confirmation |

#### Slots

| Slot | Description |
|---|---|
| *(default)* | Modal body content — required |
| `title` | Overrides the `title` prop with arbitrary HTML |
| `header` | Full header replacement — replaces title, icon, and close button entirely |
| `icon` | SVG or element shown to the left of the title in the header |
| `footer` | Action row below the body — flex row, right-aligned |

#### Event API

| Event | Direction | Payload | Description |
|---|---|---|---|
| `open-modal` | → component | `{ name }` | Opens the named instance |
| `close-modal` | → component | `{ name }` | Closes the named instance |
| `modal-opened` | ← component | `{ name }` | Fired after the open animation completes |
| `modal-closed` | ← component | `{ name }` | Fired after close |

#### Basic usage

```blade
<x-ui.modal-trigger modal="my-modal">Open</x-ui.modal-trigger>

<x-ui.modal name="my-modal" title="Hello World" size="md">
    <p>Body content here.</p>
    <x-slot:footer>
        <x-ui.modal-trigger modal="my-modal" as="close">Cancel</x-ui.modal-trigger>
    </x-slot:footer>
</x-ui.modal>
```

#### Opening from Livewire

```php
$this->dispatch('open-modal', name: 'my-modal');
$this->dispatch('close-modal', name: 'my-modal');
```

#### Opening from plain JavaScript

```js
window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'my-modal' } }));
```

---

### 2. `x-ui.modal-wizard`

**File:** `resources/views/components/ui/modal-wizard.blade.php`

A multi-step wizard variant. Non-dismissible by default — the user must complete the flow or use an explicit cancel. Step titles swap automatically, and dot progress indicators plus Back / Next / Finish navigation are rendered automatically.

#### Props

| Prop | Type | Default | Description |
|---|---|---|---|
| `name` | string | *(required)* | Unique ID used for open/close events |
| `size` | string | `md` | Same size tokens as `x-ui.modal` |
| `steps` | int | `3` | Total number of steps |
| `step1Title` | string | `'Step 1'` | Header title shown on step 1 |
| `step2Title` | string | `'Step 2'` | Header title shown on step 2 |
| `step3Title` | string | `'Step 3'` | Header title shown on step 3 |
| `finishLabel` | string | `'Finish'` | Label on the final-step button |
| `cancelLabel` | string | `''` | If set, shows a cancel link on step 1 |

#### Slots

| Slot | Description |
|---|---|
| `step1` | Body content for step 1 — required |
| `step2` | Body content for step 2 — required |
| `step3` | Body content for step 3 — optional for 2-step wizards |

#### Event API

| Event | Direction | Payload | Description |
|---|---|---|---|
| `open-modal` | → component | `{ name }` | Opens at step 1 |
| `close-modal` | → component | `{ name }` | Closes and resets to step 1 |
| `wizard-done` | ← component | `{ name }` | Dispatched when the Finish button is clicked |

#### Alpine state

| Property | Type | Description |
|---|---|---|
| `isOpen` | bool | Whether the modal is visible |
| `step` | int | Current step number (1-indexed) |
| `totalSteps` | int | Bound from the `steps` prop |

Available methods: `open()`, `close()`, `next()`, `prev()`, `finish()`.

#### Usage example

```blade
<x-ui.modal-trigger modal="dtf-wizard">Start Order</x-ui.modal-trigger>

<x-ui.modal-wizard
    name="dtf-wizard"
    :steps="3"
    step1Title="Choose Product"
    step2Title="Upload Artwork"
    step3Title="Review & Submit"
    finishLabel="Submit Order"
    cancelLabel="Cancel"
>
    <x-slot:step1>…step 1 content…</x-slot:step1>
    <x-slot:step2>…step 2 content…</x-slot:step2>
    <x-slot:step3>…step 3 content…</x-slot:step3>
</x-ui.modal-wizard>
```

#### Intercepting finish from Livewire

```js
// In the parent page or a Livewire component's Alpine lifecycle
window.addEventListener('wizard-done', (e) => {
    if (e.detail.name === 'dtf-wizard') {
        // submit form, call Livewire action, etc.
    }
});
```

---

### 3. `x-ui.modal-trigger`

**File:** `resources/views/components/ui/modal-trigger.blade.php`

Convenience component that dispatches `open-modal` / `close-modal` events. Renders as any HTML element to keep semantics correct.

#### Props

| Prop | Type | Default | Description |
|---|---|---|---|
| `modal` | string | *(required)* | Must match the `name` prop of the target modal |
| `as` | string | `button` | `button` / `a` / `div` / `span` / `close` |
| `action` | string | `open` | `open` / `close` / `toggle` |
| `href` | string | `null` | Only used when `as="a"` |

`as="close"` is shorthand — it automatically resolves to `action="close"` regardless of the `action` prop.

#### Usage examples

```blade
{{-- Default: renders a <button> that opens the modal --}}
<x-ui.modal-trigger modal="confirm">Open</x-ui.modal-trigger>

{{-- Close shorthand --}}
<x-ui.modal-trigger modal="confirm" as="close">Cancel</x-ui.modal-trigger>

{{-- Anchor element --}}
<x-ui.modal-trigger modal="gallery" as="a" href="#">View Gallery</x-ui.modal-trigger>

{{-- Toggle --}}
<x-ui.modal-trigger modal="info" action="toggle">Toggle</x-ui.modal-trigger>
```

---

### 4. `x-ui.contact-modal`

**File:** `resources/views/components/ui/contact-modal.blade.php`

A self-contained Floating Action Button (FAB) anchored to the bottom-right corner of the screen. When clicked, it opens a branded contact / quote form modal with built-in AJAX submission, loading state, and success / error states. Drop anywhere in the layout — it uses `fixed` positioning.

#### Props

| Prop | Type | Default | Description |
|---|---|---|---|
| `buttonLabel` | string | `'Contact Us Now'` | FAB button label text |
| `modalTitle` | string | `'Get a Free Quote'` | Modal heading |
| `modalSubtitle` | string | Brand tagline | Sub-heading (HTML allowed) |
| `logoSrc` | string | `/images/logos/top5-logo.gif` | Logo image path |
| `logoAlt` | string | `'Top 5 Percent'` | Logo alt text |

#### Form fields

| Field | Type | Required |
|---|---|---|
| `name` | text | Yes |
| `phone` | tel | No |
| `email` | email | Yes |
| `message` | textarea | Yes |

#### Submission

- Posts JSON to `POST /contact` with CSRF token included.
- On success: displays a confirmation message and auto-closes after 3 seconds.
- On failure: shows an inline error banner with the business phone number.

#### Additional trigger

The component also listens for a `open-contact-modal` window event, so it can be opened programmatically from anywhere on the page:

```js
window.dispatchEvent(new CustomEvent('open-contact-modal'));
```

#### Usage

```blade
{{-- Minimal — place once, anywhere in your layout --}}
<x-ui.contact-modal />

{{-- Customised labels --}}
<x-ui.contact-modal button-label="Get a Quote" modal-title="Request Pricing" />
```

---

### 5. `x-ui.modal-quick-view`

**File:** `resources/views/components/ui/modal-quick-view.blade.php`

Product quick-view modal for e-commerce contexts. Opened via a `open-quick-view` window event filtered by the element's HTML `id`. Displays an image gallery with thumbnail switcher, price, description, variant selection, and quantity control.

#### Props

| Prop | Type | Default | Description |
|---|---|---|---|
| `title` | string | `''` | Product name |
| `price` | string | `''` | Formatted price string |
| `originalPrice` | string | `null` | Strike-through price (sale indicator) |
| `description` | string | `''` | Short product description |
| `image` | string | `null` | Single image URL (fallback when `images` is empty) |
| `images` | array | `[]` | Array of image URLs for the gallery |
| `href` | string | `'#'` | "View full details" link |
| `variants` | array | `[]` | List of variant option strings |

#### Trigger

```js
// The event must include the matching element id
window.dispatchEvent(new CustomEvent('open-quick-view', {
    detail: { id: 'quick-view-product-42' }
}));
```

```blade
<x-ui.modal-quick-view
    id="quick-view-product-42"
    title="Custom DTF Transfer"
    price="$3.50"
    :images="['/images/products/dtf-1.jpg', '/images/products/dtf-2.jpg']"
    href="/products/custom-dtf-transfer"
    :variants="['Small', 'Medium', 'Large', 'XL']"
/>
```

---

## Demo / Living Documentation Page

**Route:** `GET /demo/modals` → `demo.modals`
**View:** `resources/views/pages/demo/modals.blade.php`

An internal-only page (`noindex, nofollow`) that exercises every component, variant, size, and slot pattern described above. Sections on the page:

1. **Variants** — all six `x-ui.modal` colour themes side-by-side
2. **Sizes** — all five size presets (`sm`, `md`, `lg`, `xl`, `full`)
3. **Dismissible Control** — dismissible vs. non-dismissible behaviour
4. **Slot Patterns** — icon slot, full header override, rich footer, title slot with HTML
5. **Trigger Element Types** — `button`, `a`, `span` renderings of `x-ui.modal-trigger`
6. **Use-Case Patterns** — promotional alert, long scrollable form, terms & conditions agreement
7. **Wizard** — live `x-ui.modal-wizard` demo (3-step flow)
8. **Contact Modal** — live `x-ui.contact-modal` FAB demo

Use this page as the first reference when verifying behaviour after any changes to the modal components.

---

## Z-index layers

| Component | z-index |
|---|---|
| `x-ui.modal` backdrop | `9800` |
| `x-ui.modal-wizard` backdrop | `9800` |
| `x-ui.contact-modal` overlay | `9999` |
| `x-ui.contact-modal` FAB | `9990` |
| `x-ui.modal-quick-view` overlay | `50` |

---

## Extending `x-ui.modal-wizard` for DTF / Order Workflows

The wizard is the intended base for contact and order submission flows. The general pattern:

1. Use `x-ui.modal-wizard` for the step shell (titles, navigation, progress dots).
2. Place form fields inside each `<x-slot:stepN>` slot.
3. Listen for the `wizard-done` event to trigger the actual submission (Livewire dispatch or a fetch call).
4. Optionally swap the final step's slot content to a success/confirmation state after submission.

See the **Demo / Living Documentation Page** (`/demo/modals`) for a working 3-step wizard example.

---

## Branding Compliance Report

**Source of truth:** `docs/branding-requirements.md`
**Scope:** All five modal components audited against branding rules.

---

### Rule: No inline CSS except when absolutely required

Inline styles are only justified when a value cannot be expressed as a static Tailwind class — for example, a PHP-computed dynamic value that changes per instance at render time.

#### `x-ui.modal` — JUSTIFIED (dynamic variant system)

All inline styles in this component are driven by the `$vt[]` array populated from the `variant` prop at render time. Because the values are dynamic PHP expressions, they cannot be Tailwind classes. This use of inline styles is **acceptable as-is**.

#### `x-ui.modal-wizard` — VIOLATIONS FOUND

The wizard uses hardcoded raw hex values in inline styles where equivalent Tailwind tokens already exist in the project. These are **not** dynamic and have no justification for being inline.

| Element | Current inline style | Should be |
|---|---|---|
| Gold accent stripe | `style="background:linear-gradient(90deg,#FFC20E 0%,#FFD93D 100%);"` | `class="bg-gold-gradient"` (or `bg-sunburst`) |
| Header div | `style="background:#F2F0E6;border-bottom-color:#FFC20E;"` | `class="bg-linen border-b-2 border-sunburst"` |
| Footer div | `style="background:#FAF9F5;border-top-color:#E8E5D8;"` | `class="bg-linen border-t border-linen-dark"` |
| Next button | `style="background:linear-gradient(135deg,#FFC20E 0%,#FFD93D 100%);"` | `class="bg-gold-gradient"` |
| Finish button | `style="background:linear-gradient(135deg,#FFC20E 0%,#FFD93D 100%);"` | `class="bg-gold-gradient"` |

The `max-width` panel style (`style="max-width:{{ $maxWidth }};max-height:92dvh;"`) is dynamic (PHP-computed from the `size` prop) and is **acceptable**.

#### `x-ui.modal-wizard` — ADDITIONAL VIOLATION: bare `<button>` tags

The Back, Next, and Finish navigation buttons are bare `<button>` elements with raw Tailwind classes and inline styles. Per branding requirements, these should use the established `x-ui.button-*` components for consistency.

| Button | Current | Should be |
|---|---|---|
| Back | bare `<button>` with `border border-linen-dark` classes | `x-ui.button-outline-charcoal` or `x-ui.button-white-charcoal` |
| Next | bare `<button>` with inline gradient style | `x-ui.button-gold-gradient` |
| Finish | bare `<button>` with inline gradient style | `x-ui.button-gold-gradient` |

#### `x-ui.contact-modal` — PARTIALLY JUSTIFIED

The panel `max-width` and `max-height` are hardcoded (`style="max-width:34rem;max-height:92dvh;"`). Unlike `x-ui.modal`, this component has no size prop and these values never change, so they are **not** justified as inline styles — they are magic numbers that should be expressed as Tailwind utility classes or added as a prop.

All other inline styles in this component are within the FAB button's gradient and shadow, which match the `bg-gold-gradient` / `shadow-gold-xl` tokens and should be converted.

#### `x-ui.modal-quick-view` — VIOLATION

Contains `style="display: none;"` directly on the outer wrapper `<div>`. Alpine.js `x-show` already handles visibility — this inline style is redundant and should be removed.

#### `x-ui.modal` (demo page) — VIOLATION in demo, not component

The demo page at `resources/views/pages/demo/modals.blade.php` contains several bare `<button>` tags with raw Tailwind classes (e.g., the Confirm and Delete Permanently buttons in variant demos). These should use `x-ui.button-*` components. This does not affect production pages but sets a bad precedent in the living documentation.

---

### Rule: Square corners — no `rounded-*` on panels, overlays, or form inputs

| Component | Status | Notes |
|---|---|---|
| `x-ui.modal` panel | PASS | No border-radius applied |
| `x-ui.modal-wizard` panel | PASS | No border-radius applied |
| `x-ui.contact-modal` panel | PASS | No border-radius applied |
| `x-ui.contact-modal` FAB pulse halo | PASS | `rounded-full` on halo ring only — permitted exception |
| `x-ui.contact-modal` form inputs | PASS | No border-radius on inputs |
| `x-ui.modal-quick-view` close button | FAIL | Uses `rounded-full` on the close button inside the panel — not permitted |

---

### Rule: Use established colour tokens, not raw hex values

Outside of the justified dynamic variant system in `x-ui.modal`, raw hex values appear in:

- `x-ui.modal-wizard` — five locations (detailed in the inline CSS section above)
- `x-ui.contact-modal` — FAB button gradient and shadow match token names but are applied via Tailwind class names correctly (`bg-gold-gradient`, `shadow-gold-xl`) — **PASS**
- `x-ui.modal-quick-view` — colour classes are token-based throughout — **PASS**

---

### Summary

| Component | Inline CSS | Bare buttons | Square corners | Colour tokens |
|---|---|---|---|---|
| `x-ui.modal` | PASS (justified) | N/A | PASS | PASS (justified) |
| `x-ui.modal-wizard` | **FAIL** | **FAIL** | PASS | **FAIL** |
| `x-ui.modal-trigger` | PASS | N/A | N/A | PASS |
| `x-ui.contact-modal` | **FAIL** (hardcoded max-width) | N/A | PASS | PASS |
| `x-ui.modal-quick-view` | **FAIL** (`display:none`) | N/A | **FAIL** (close btn) | PASS |

**Priority remediation order before building the DTF/order wizard:**
1. `x-ui.modal-wizard` — replace all hardcoded inline styles with Tailwind tokens and replace bare navigation buttons with `x-ui.button-*` components. This is the base for the new workflow.
2. `x-ui.modal-quick-view` — remove `style="display:none;"` and `rounded-full` on the close button.
3. `x-ui.contact-modal` — convert hardcoded panel dimensions to Tailwind utilities or a prop.
