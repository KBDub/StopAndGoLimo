# Modal System — Component Reference

> **REQUIRED ON STARTUP:** Read `docs/branding-requirements.md` before working on any modal or UI component. All colour tokens, component naming conventions, square-corner rules, and layout constraints defined there apply to everything documented here.

> **Scope:** Documents every modal component that is built and in active use in the application.

---

## Custom Request Workflow

### Overview

The Custom Request Workflow is a multi-step guided wizard that collects everything needed to place a custom apparel or product order. It is triggered from inside the `x-ui.contact-modal` FAB via a toggle, and is implemented as a dedicated `x-ui.custom-request-wizard` component that should be included once per page alongside the contact modal.

**Entry point:** `x-ui.contact-modal` → "Have a Custom Request?" toggle row  
**Wizard component:** `x-ui.custom-request-wizard`  
**Demo page:** `resources/views/pages/demo/modals.blade.php`

**Data persistence:** Cookie + database table on submit (Phase 2 — not yet implemented). The wizard component collects and holds all state in Alpine.js until submission.

---

### Contact Modal — Toggle Row

A toggle row is added to `x-ui.contact-modal` on its own row, placed below the "What can we help you with?" field and above the submit button.

- **Label:** "Have a Custom Request?"  
- **Sub-label:** "Use our guided custom order wizard"  
- **Behavior:** When toggled **ON**, the contact modal closes immediately and the `open-modal` window event is dispatched with `{ name: 'custom-request-wizard' }`, opening the wizard at Step 1.  
- **Alpine state added to contact-modal:** `customRequest: false`, `launchWizard()` method.

---

### Wizard Component — `x-ui.custom-request-wizard`

**File:** `resources/views/components/ui/custom-request-wizard.blade.php`  
**Size:** `xl` (58rem wide) to accommodate the quantity matrix  
**Opens via:** `window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'custom-request-wizard' } }))`  
**Fires on submit:** `wizard-done` window event with `{ name: 'custom-request-wizard' }`

The wizard uses a dynamic `visibleSteps` computed array. Step 3 (Shirt Length & Fabric) is **conditional** — it only appears when at least one shirt-type garment is selected in Step 2. All step numbers and the dot-indicator count adjust automatically.

---

### Step Map

| Step | Name (internal) | Title | Conditional |
|------|-----------------|-------|-------------|
| 1 | `request-type` | Request Details | Always |
| 2 | `garment-selection` | Garment Selection | Always |
| 3 | `shirt-length-fabric` | Shirt Length & Fabric Type | Only if shirt type selected |
| 4 (or 3) | `color-selection` | Color Selection | Always |
| 5 (or 4) | `quantity-sizing` | Quantity & Sizing | Always |
| 6 (or 5) | `print-method` | Print Method | Always |
| 7 (or 6) | `completion-date` | Desired Completion Date | Always |
| 8 (or 7) | `extra-notes` | Extra Notes | Always |
| 9 (or 8) | `shipping-address` | Shipping Address | Always |
| 10 (or 9) | `confirm-submit` | Review & Submit | Always |

**Total steps:** 10 with shirt type selected, 9 without.

---

### Step Details

---

#### Step 1 — Request Details

**Fields:**

- **Is this a company or personal request?** — two radio buttons: `Company` | `Personal`
  - If `Company` is selected, a **Company Name** text input is enabled/shown below the radios.
- **Is this a rush request?** — two radio buttons: `Yes` | `No`
  - If `Yes`, `isRush` is set to `true`. This value persists and affects later steps (Step 7 and Step 10).

**Alpine state:** `requestType: ''`, `companyName: ''`, `isRush: null`

---

#### Step 2 — Garment Selection

**Heading:** "Please Select All Applicable Garment Types"

Each garment type is a toggle switch (full-row, label left / switch right). Selecting any of the four shirt types (`vNeck`, `crewNeck`, `hoodie`, `otherShirt`) causes Step 3 to be inserted into the wizard flow.

| Toggle Label | Alpine key | Notes |
|---|---|---|
| V-Neck | `garments.vNeck` | Triggers Step 3 if on |
| Crew Neck | `garments.crewNeck` | Triggers Step 3 if on |
| Hoodie | `garments.hoodie` | Triggers Step 3 if on |
| Other Shirt Style | `garments.otherShirt` | Triggers Step 3 if on |
| Baseball Cap | `garments.baseballCap` | No effect on Step 3 |
| Nap Sack | `garments.napSack` | No effect on Step 3 |
| Other Item | `garments.otherItem` | No effect on Step 3 |

A summary chip row at the bottom of the step shows all currently selected garment types.

---

#### Step 3 — Shirt Length & Fabric Type *(Conditional)*

Only appears when `hasShirtType` is `true` (at least one of V-Neck, Crew Neck, Hoodie, Other Shirt Style is toggled on in Step 2).

Two rows of selection buttons:

**Row 1 — Sleeve Length** (mutually exclusive, button-toggle style):  
`Short Sleeve` | `Long Sleeve`

**Row 2 — Fabric Weight** (mutually exclusive, button-toggle style):  
`Heavyweight` | `Lightweight`

Selected state uses sunburst gold fill (`bg-sunburst`). Unselected uses white with linen border, with a sunburst border on hover.

**Alpine state:** `sleeveType: ''`, `fabricWeight: ''`

---

#### Step 4 — Color Selection

A smart text input with inline (non-absolute) autocomplete against a list of 30 common colors. Users can add multiple colors.

**Behavior:**
- Typing filters the `colorSuggestions` array (case-insensitive, excludes already-selected colors).
- Suggestions render **inline** below the input (never absolute-positioned — modal overflow rule).
- Pressing `Enter` or clicking "Add" adds the typed value directly if it is not already selected.
- Clicking a suggestion adds it and clears the input.
- Each selected color becomes a **chip** (charcoal background, white text) with an × remove button.

**Color suggestion list (30 colors):**  
White, Black, Navy Blue, Red, Royal Blue, Forest Green, Charcoal Gray, Light Gray, Sky Blue, Yellow, Orange, Purple, Maroon, Pink, Hot Pink, Kelly Green, Burgundy, Lime Green, Gold, Silver, Tan, Brown, Heather Gray, Sport Gray, Safety Green, Safety Orange, Teal, Coral, Lavender, Olive Green

**Alpine state:** `colorInput: ''`, `selectedColors: []`, `colorSuggestions: [...]`

---

#### Step 5 — Quantity & Sizing

A matrix input grid organized by garment type. Only garment types selected in Step 2 are shown. Each garment type renders its own table.

**Table structure per garment type:**
- **Rows:** Men's, Women's, Youth, Toddler
- **Columns:** XS, S, M, L, XL, 2XL, 3XL, 4XL, 5XL, 6XL
- Each cell contains a small number input (blank = 0).

The table container is horizontally scrollable (`overflow-x-auto scrollbar-sunburst`) to handle narrow viewports.

**Order Summary** — below all tables, a chip row shows every non-zero entry in the format:  
`{qty} {Gender} {Size} {GarmentLabel}s` — e.g. `13 Men's 3XL V-Necks`

**Alpine state:** `quantities: {}` (flat object, keys formatted as `{garmentKey}-{genderKey}-{size}`)  
**Alpine methods:** `getQty(garment, gender, size)`, `setQty(garment, gender, size, val)`  
**Computed:** `quantitySummary` (array of human-readable strings), `selectedGarmentTypes` (filtered array)

---

#### Step 6 — Print Method

Two main radio options, each in its own bordered card row with the radio button on the left.

**Option 1 — Traditional Printing**  
- Main radio selects `printMethod = 'traditional'`
- When selected, reveals sub-radio group: `HTV` | `Digital` | `Screenprint`
- When not selected, the three options are listed as plain text for reference.

**Option 2 — Specialty Printing**  
- Main radio selects `printMethod = 'specialty'`
- When selected, reveals a toggle list for each specialty type (toggle right, label left):

| Toggle Label | Alpine key |
|---|---|
| Vinyl Shirts | `specialtyTypes.vinyl` |
| Rhinestone Shirts | `specialtyTypes.rhinestone` |
| Glitter Shirts | `specialtyTypes.glitter` |
| Foil Shirts | `specialtyTypes.foil` |
| Glow In The Dark | `specialtyTypes.glowDark` |
| Flock Shirts | `specialtyTypes.flock` |
| Reflective Shirts | `specialtyTypes.reflective` |
| Holographic Shirts | `specialtyTypes.holographic` |
| Brick Shirts | `specialtyTypes.brick` |
| Pattern Shirts | `specialtyTypes.pattern` |
| Embroidery Shirts | `specialtyTypes.embroidery` |
| Picture Shirts | `specialtyTypes.picture` |

**Alpine state:** `printMethod: ''`, `traditionalType: ''`, `specialtyTypes: { vinyl, rhinestone, glitter, foil, glowDark, flock, reflective, holographic, brick, pattern, embroidery, picture }`

---

#### Step 7 — Desired Completion Date

**Rush handling:**

- If `isRush === true` (set in Step 1): display a sunburst/gold banner at the top of the step — "Rush Order — Expediting" with a lightning bolt icon. Do **not** ask again.
- If `isRush !== true`: display a bordered card asking "Is this a rush delivery?" with `Yes` | `No` radio buttons (`isRushDelivery`). If `Yes` is selected, also show a gold banner confirming rush expediting will be applied.

The date input's border and ring turn sunburst when `rushActive` is true (`isRush === true OR isRushDelivery === true`). A small inline `RUSH` badge also appears next to the label.

**Alpine state:** `completionDate: ''`, `isRushDelivery: null`  
**Computed:** `rushActive` — `true` if either `isRush` or `isRushDelivery` is `true`

---

#### Step 8 — Extra Notes

A single resizable `<textarea>` for any additional order details — artwork requirements, special instructions, references, etc.

**Alpine state:** `extraNotes: ''`

---

#### Step 9 — Shipping Address

- **Company Name** field — shown only when `requestType === 'company'`. Pre-bound to `companyName` (same field as Step 1, so it carries forward any value entered there).
- **First Name** / **Last Name** — side-by-side on sm+ screens.
- **Address Line 1**
- **Address Line 2** (optional)
- **City** / **State** / **ZIP** — three-column grid on sm+ screens.

**Alpine state:** `firstName`, `lastName`, `address1`, `address2`, `city`, `state`, `zip`

---

#### Step 10 — Review & Submit

A read-only summary of all collected data, displayed as a two-column key/value grid inside a bordered container with divider rows.

**Summary rows displayed:**

| Row | Content |
|---|---|
| Request Type | `Company` or `Personal`; company name appended if applicable |
| Rush | Sunburst `RUSH` badge if `rushActive`, otherwise "Standard" |
| Garments | Chips for each selected garment type |
| Shirt Spec | Sleeve length + fabric weight (only shown if shirt type selected and values set) |
| Colors | Charcoal chips for each selected color |
| Quantities | Chips in `{qty} {Gender} {Size} {Garment}s` format |
| Print Method | Traditional type or Specialty, as applicable |
| Date Needed | Completion date with inline `RUSH` badge if rush active |
| Ship To | Company name (if applicable), full name, address |
| Notes | Extra notes (truncated at 3 lines if long) |

**Rush banner:** A full-width sunburst gold bar at the top of the step when `rushActive` is true.

The **Submit Request** button dispatches the `wizard-done` event and closes the wizard.

---

### Alpine.js State Summary

All state lives in the `x-data` object on the root element of `x-ui.custom-request-wizard`.

| Property | Type | Default | Description |
|---|---|---|---|
| `isOpen` | bool | `false` | Backdrop visibility |
| `step` | int | `1` | Current step (1-based) |
| `requestType` | string | `''` | `'company'` or `'personal'` |
| `companyName` | string | `''` | Company name (Step 1, reused in Step 9) |
| `isRush` | bool\|null | `null` | Rush flag from Step 1 |
| `garments` | object | all `false` | Toggle state for each garment type |
| `sleeveType` | string | `''` | `'short'` or `'long'` |
| `fabricWeight` | string | `''` | `'heavyweight'` or `'lightweight'` |
| `colorInput` | string | `''` | Live text in color search input |
| `selectedColors` | array | `[]` | Array of color name strings |
| `quantities` | object | `{}` | Flat map of `{garmentKey}-{genderKey}-{size}` → quantity |
| `sizes` | array | 10 items | `['XS','S','M','L','XL','2XL','3XL','4XL','5XL','6XL']` |
| `genders` | array | 4 items | `[{key,label}]` for Men's, Women's, Youth, Toddler |
| `printMethod` | string | `''` | `'traditional'` or `'specialty'` |
| `traditionalType` | string | `''` | `'htv'`, `'digital'`, or `'screenprint'` |
| `specialtyTypes` | object | all `false` | Toggle state for each specialty print type |
| `completionDate` | string | `''` | ISO date string from date input |
| `isRushDelivery` | bool\|null | `null` | Rush flag from Step 7 (if not already set in Step 1) |
| `extraNotes` | string | `''` | Free-text notes |
| `firstName` | string | `''` | Shipping first name |
| `lastName` | string | `''` | Shipping last name |
| `address1` | string | `''` | Shipping address line 1 |
| `address2` | string | `''` | Shipping address line 2 |
| `city` | string | `''` | Shipping city |
| `state` | string | `''` | Shipping state (2-char) |
| `zip` | string | `''` | Shipping ZIP code |

**Computed getters:**

| Getter | Returns |
|---|---|
| `hasShirtType` | `true` if any of vNeck, crewNeck, hoodie, otherShirt is toggled on |
| `visibleSteps` | Array of step name strings; includes `shirt-length-fabric` only when `hasShirtType` |
| `currentStepName` | String key for the current step |
| `currentStepTitle` | Human-readable title for the current step |
| `totalSteps` | `visibleSteps.length` (9 or 10) |
| `selectedGarmentTypes` | Filtered array of `{key, label}` objects for selected garments |
| `filteredColors` | Color suggestions filtered by `colorInput`, excluding already-selected |
| `quantitySummary` | Array of readable strings like "13 Men's 3XL V-Necks" |
| `rushActive` | `true` if `isRush === true` or `isRushDelivery === true` |

---

### Event API

| Event | Direction | Payload | Description |
|---|---|---|---|
| `open-modal` | dispatch → wizard | `{ name: 'custom-request-wizard' }` | Opens wizard at step 1 |
| `close-modal` | dispatch → wizard | `{ name: 'custom-request-wizard' }` | Closes and resets wizard |
| `modal-closed` | wizard fires → window | `{ name: 'custom-request-wizard' }` | Fired after wizard closes |
| `wizard-done` | wizard fires → window | `{ name: 'custom-request-wizard' }` | Fired when Submit is clicked |

---

### Branding Rules (Wizard-Specific)

- **Square corners everywhere** — no `rounded` on the panel, inputs, or buttons. Toggle switches retain `rounded-full` (existing pattern from demo page).
- **Rush elements** use `bg-sunburst`, `text-sunburst`, `border-sunburst`, and `bg-sunburst/10` backgrounds. Rush badge text: uppercase `RUSH` in `text-[10px] font-bold`.
- **Step dot indicators** — current step renders as a wider pill (`w-6 h-2 bg-sunburst`); completed steps are smaller filled dots (`w-2.5 h-2 bg-sunburst/60`); future steps are linen-dark (`w-2.5 h-2 bg-linen-dark`).
- **Scrollable areas** — all `overflow-y-auto` and `overflow-x-auto` elements must use `scrollbar-sunburst`.
- **Color autocomplete** — suggestions list must render inline in document flow (never `position:absolute`) per the modal overflow rule. Use `max-h-[8rem] overflow-y-auto scrollbar-sunburst`.
- **Footer buttons** — use `x-ui.button-modal-primary` and `x-ui.button-modal-cancel`. The final step's primary is labeled "Submit Request".

---

### Usage

```blade
{{-- Include once per page alongside x-ui.contact-modal --}}
<x-ui.contact-modal />
<x-ui.custom-request-wizard />
```

The contact modal toggle dispatches the open event; the wizard component listens for it. Both components must be present on the same page.

---

### Future Phase — Data Persistence

On submission (`wizard-done`), the full Alpine state will be:
1. **Serialized to a cookie** for session continuity.
2. **POST'd to a Laravel endpoint** that stores the data in a dedicated `custom_requests` database table.

The table schema and endpoint are deferred to Phase 2. The wizard component should be designed so that the `finish()` method's implementation can be updated to fire the POST without restructuring the Alpine state.

---

## Modal Inventory — Demo Page vs. Built Componentry

> **Source:** `resources/views/pages/demo/modals.blade.php`  
> **Purpose:** Complete catalog of every modal instance on the demo page, the props/slots used, and its status against the built component system. Use this section as a quick-reference when adding new modals or verifying component coverage.

---

### Legend

| Symbol | Meaning |
|--------|---------|
| ✅ | Fully built — component or prop exists and is used correctly |
| ⚠️ | Used in demo with a raw element or pattern not yet extracted into a named component |
| — | Not applicable |

---

### Section 1 — Variants

Six modals demonstrating the `variant` prop. All use `x-ui.modal`, `size="md"` (default), and standard footer components unless noted.

| Modal name | Title | Variant | Footer pattern | Status |
|---|---|---|---|---|
| `demo-default` | Default Variant | `default` | `x-ui.button-modal-cancel` + `x-ui.button-modal-primary` | ✅ |
| `demo-dark` | Dark Variant | `dark` | `x-ui.modal-trigger as="close"` (manual) + `x-ui.button-modal-primary` | ✅ |
| `demo-gold` | Gold Variant | `gold` | `x-ui.button-modal-cancel` (Dismiss) only | ✅ |
| `demo-success` | Success Variant | `success` | `$icon` slot (checkmark) + `x-ui.modal-trigger as="close"` (Done) | ✅ |
| `demo-warning` | Warning Variant | `warning` | `$icon` slot (triangle) + cancel + raw `<button>Keep Working</button>` ⚠️ | ✅ |
| `demo-danger` | Danger Variant | `danger` | `$icon` slot (circle-i) + cancel + raw `<button>Delete Permanently</button>` ⚠️ | ✅ |

> **Note on raw buttons in warning/danger footers:** The demo intentionally uses bare `<button>` elements for the "Keep Working" and "Delete Permanently" actions to show that the footer slot accepts arbitrary HTML. This is expected and correct — not a gap. In production use, these should receive the same styling convention as the danger/warning variant colours.

---

### Section 2 — Sizes

Five modals, generated by a `@foreach` loop over `['sm', 'md', 'lg', 'xl', 'full']`. Each uses the default `variant="default"` and a single `x-ui.button-modal-cancel` (Close) footer.

| Modal name | Title | Size | Max width | Status |
|---|---|---|---|---|
| `demo-size-sm` | SM — Small (22rem) | `sm` | 22rem | ✅ |
| `demo-size-md` | MD — Medium (34rem) | `md` | 34rem (default) | ✅ |
| `demo-size-lg` | LG — Large (46rem) | `lg` | 46rem | ✅ |
| `demo-size-xl` | XL — Extra Large (58rem) | `xl` | 58rem | ✅ |
| `demo-size-full` | Full — 95vw Canvas | `full` | 95vw | ✅ |

---

### Section 3 — Dismissible Control

| Modal name | Title | `:dismissible` | Behaviour | Footer | Status |
|---|---|---|---|---|---|
| `demo-dismiss-yes` | Dismissible Modal | `true` (default) | ✕ button visible; Escape and backdrop click close | None | ✅ |
| `demo-dismiss-no` | Non-dismissible Modal | `false` | No ✕, no backdrop dismiss, no Escape | `x-ui.button-modal-primary` (I Acknowledge) | ✅ |

---

### Section 4 — Slot Patterns

Demonstrates all named slots available on `x-ui.modal`.

| Modal name | Title | Slots used | Notes | Status |
|---|---|---|---|---|
| `demo-icon-slot` | Quote Request Received | `$icon`, `$footer` | Success variant; checkmark SVG in icon slot | ✅ |
| `demo-header-override` | *(none — header slot provides its own)* | `$header` | Azure background; custom SVG icon; `x-ui.modal-trigger as="close"` ✕ inside the slot | ✅ |
| `demo-rich-footer` | Rich Footer Example | `$footer` | Gold variant; footer contains `<a>` (left) + cancel + raw "Save Draft" + primary | ✅ |
| `demo-title-slot` | *(none — title slot provides its own)* | `$title`, `$footer` | Title slot injects `<span class="text-azure">` + `<em>` HTML | ✅ |

---

### Section 5 — Trigger Element Types

One shared modal opened by three different trigger variants. Demonstrates the `as` prop on `x-ui.modal-trigger`.

| Modal name | Title | Size | Trigger types shown | Status |
|---|---|---|---|---|
| `demo-trigger-types` | Trigger Element Types | `sm` | `as="button"` (default), `as="a"`, `as="span"` | ✅ |

---

### Section 6 — Use-Case Patterns

Real-world patterns: promotional alert (full header override), long form, and scrollable legal modal.

| Modal name | Title | Size | Key props / slots | Footer | Status |
|---|---|---|---|---|---|
| `demo-promo` | *(header slot provides title)* | `md` | `$header` override — dark charcoal, gold stripe, tag icon, subtitle text | `x-ui.button-modal-cancel` (No Thanks) + `x-ui.button-modal-primary` (Shop Now →) | ✅ |
| `demo-long-form` | Request a Sample Pack | `lg` | Standard default header; multi-field form (name, email, phone, select, textarea) in body | `x-ui.button-modal-cancel` + `x-ui.button-modal-primary` (Request Sample Pack) | ✅ |
| `demo-terms` | Terms & Conditions | `lg` | `:dismissible="false"`, `maxHeight="80dvh"`, scrollable body | `x-ui.button-modal-cancel` (Decline) + `x-ui.button-modal-primary` (I Agree) | ✅ |

> **Promotional Alert pattern** (`demo-promo`) is the same header structure used in the production `zip-result` modal in `map-section.blade.php`. It is the canonical pattern for context-aware alerts: gold stripe → dark charcoal header → icon square + heading + subtitle + ✕ close.

---

### Section 7 — Workflow Wizard (`x-ui.modal-wizard`)

Demonstrates the simpler `x-ui.modal-wizard` component — distinct from the full `x-ui.custom-request-wizard`. Uses named step slots (`$step1`, `$step2`, `$step3`) and static step titles passed as props.

| Modal name | `finishLabel` | `cancelLabel` | Step titles | Notes | Status |
|---|---|---|---|---|---|
| `demo-wizard-onboard` | `Done` | *(none — no cancel link)* | "Welcome! Quick Setup" / "Choose Your Preference" / "You're All Set!" | Step 2 contains an inline card-style radio group with Alpine `x-data="{ contact: 'phone' }"`. Step 3 is a success confirmation with green icon. | ✅ |
| `demo-wizard-cancel` | `Submit` | `Cancel` | "Before You Continue" / "Confirm Your Details" / "Submission Complete" | Cancel link only appears on step 1. Steps 2+ hide it — user can only go Back or Finish. Step 2 has name + email inputs. Step 3 is a confirmation. | ✅ |

**`x-ui.modal-wizard` vs `x-ui.custom-request-wizard`:**  
`x-ui.modal-wizard` is a lightweight 3-step shell — slots, static titles, no internal conditional logic. `x-ui.custom-request-wizard` is the full 10-step order wizard with dynamic `visibleSteps`, full Alpine state, and all production business logic. They are separate components serving different purposes.

---

### Section 8 — Contact FAB (live showcase)

Not a modal definition — a documentation section that points to the globally-included `x-ui.contact-modal` already live on the page. The FAB itself is rendered by the `<x-ui.contact-modal />` call at the bottom of the page body.

---

### Section 9 — Dropdown Selection

Two modals demonstrating branded inline custom dropdowns (no native `<select>` hack). All dropdowns are `position: static` / inline — never `position: absolute` — per the modal overflow rule.

| Modal name | Title | Size | Extra props | Body content | Footer | Status |
|---|---|---|---|---|---|---|
| `demo-dropdown-single` | Select Product Type | `sm` | `bodyClass="py-6"`, `$icon` slot (list icon) | Alpine `x-data` with `open`, `selected`, `options` array (6 product types). Trigger button + inline option list (`max-h-[10rem] overflow-y-auto scrollbar-sunburst`) + quantity `<input type="number">` | `x-ui.button-modal-cancel` (Cancel) + `x-ui.button-modal-primary` (Continue) | ✅ |
| `demo-dropdown-grouped` | Configure Your Order | `md` | `maxWidth="25rem"`, `bodyClass="py-6"`, `$icon` slot (tag icon) | Alpine `x-data` with `sizeOpen`, `colorOpen`, `size`, `color`. Size picker is a flex row of bordered toggle buttons (XS–3XL). Colour picker is an inline dropdown with swatch squares. Selection summary bar shown when either is chosen. | `x-ui.button-modal-cancel` (Cancel) + `x-ui.button-modal-primary` (Add to Order) | ✅ |

> **`bodyClass` and `maxWidth` props** are used here. Verify both are supported in `x-ui.modal` before using in production.

---

### Section 10 — Form Controls

Two modals demonstrating branded form control patterns — radio card groups and toggle switch rows.

| Modal name | Title | Size | `$icon` | Body content | Footer | Status |
|---|---|---|---|---|---|---|
| `demo-radio` | Select a Turnaround | `sm` | Clock icon | Alpine `x-data="{ selected: null }"`. Three card-style radio labels side-by-side: Standard (5–7 days) / Rush (2–3 days) / Same Day (order by 10 a.m.). Selected card gets `border-sunburst bg-sunburst/10`. Radio dot: `rounded-full` border with inner `rounded-full` fill — the only `rounded-full` permitted in modals. | `x-ui.button-modal-cancel` + `x-ui.button-modal-primary` (Confirm Selection) | ✅ |
| `demo-toggles` | Order Options | `sm` | Coffee-cup icon | Alpine `x-data="{ rush: false, proof: true, digital: false }"`. Three full-row toggle switches in a `divide-y` list: Rush Processing (+$15) / Proof Approval (default on) / Digital Files Included. Toggle track: `rounded-full`, `bg-sunburst` (on) / `bg-linen-dark` (off). Thumb: `rounded-full bg-white`. | `x-ui.button-modal-cancel` + `x-ui.button-modal-primary` (Save Options) | ✅ |

---

### Section 11 — Custom Request Wizard

Live demo of `x-ui.custom-request-wizard` opened directly via `window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'custom-request-wizard' } }))`.

| Component | Opens via | Step count | Status |
|---|---|---|---|
| `x-ui.custom-request-wizard` | Button dispatching `open-modal` event, or contact-modal toggle | 9 or 10 (conditional Step 3) | ✅ |

Step card grid on the demo page summarises all 10 steps with their labels and notes. Full step documentation is in the **Wizard Component** section above.

---

### Full Modal Inventory Summary

| # | Modal / Component | Component used | Section |
|---|---|---|---|
| 1 | `demo-default` | `x-ui.modal` variant=default | Variants |
| 2 | `demo-dark` | `x-ui.modal` variant=dark | Variants |
| 3 | `demo-gold` | `x-ui.modal` variant=gold | Variants |
| 4 | `demo-success` | `x-ui.modal` variant=success + $icon | Variants |
| 5 | `demo-warning` | `x-ui.modal` variant=warning + $icon | Variants |
| 6 | `demo-danger` | `x-ui.modal` variant=danger + $icon | Variants |
| 7 | `demo-size-sm` | `x-ui.modal` size=sm | Sizes |
| 8 | `demo-size-md` | `x-ui.modal` size=md | Sizes |
| 9 | `demo-size-lg` | `x-ui.modal` size=lg | Sizes |
| 10 | `demo-size-xl` | `x-ui.modal` size=xl | Sizes |
| 11 | `demo-size-full` | `x-ui.modal` size=full | Sizes |
| 12 | `demo-dismiss-yes` | `x-ui.modal` :dismissible=true | Dismissible Control |
| 13 | `demo-dismiss-no` | `x-ui.modal` :dismissible=false | Dismissible Control |
| 14 | `demo-icon-slot` | `x-ui.modal` + $icon slot | Slot Patterns |
| 15 | `demo-header-override` | `x-ui.modal` + $header slot | Slot Patterns |
| 16 | `demo-rich-footer` | `x-ui.modal` + $footer slot | Slot Patterns |
| 17 | `demo-title-slot` | `x-ui.modal` + $title slot | Slot Patterns |
| 18 | `demo-trigger-types` | `x-ui.modal` + all `x-ui.modal-trigger` as= variants | Trigger Types |
| 19 | `demo-promo` | `x-ui.modal` + $header override (Promotional Alert) | Use-Case Patterns |
| 20 | `demo-long-form` | `x-ui.modal` size=lg, multi-field form body | Use-Case Patterns |
| 21 | `demo-terms` | `x-ui.modal` size=lg, :dismissible=false, maxHeight | Use-Case Patterns |
| 22 | `demo-wizard-onboard` | `x-ui.modal-wizard` 3-step, no cancel | Workflow Wizard |
| 23 | `demo-wizard-cancel` | `x-ui.modal-wizard` 3-step, cancelLabel | Workflow Wizard |
| 24 | `demo-dropdown-single` | `x-ui.modal` size=sm, inline Alpine dropdown | Dropdown Selection |
| 25 | `demo-dropdown-grouped` | `x-ui.modal` size=md, maxWidth, inline dropdowns | Dropdown Selection |
| 26 | `demo-radio` | `x-ui.modal` size=sm, card-style radio group | Form Controls |
| 27 | `demo-toggles` | `x-ui.modal` size=sm, toggle switch rows | Form Controls |
| 28 | `x-ui.contact-modal` | `x-ui.contact-modal` (FAB) | Contact FAB |
| 29 | `x-ui.custom-request-wizard` | `x-ui.custom-request-wizard` (10-step wizard) | Custom Request Wizard |

**Total: 29 modal instances / components across 10 demo sections.**  
**All 29 are backed by built componentry — no gaps.**

---

### Component Coverage Map

| Component | Built | Demo instances | Production use |
|---|---|---|---|
| `x-ui.modal` | ✅ | 27 (modals 1–27) | Any inline modal |
| `x-ui.modal-trigger` | ✅ | Throughout | Open/close triggers |
| `x-ui.modal-wizard` | ✅ | 2 (modals 22–23) | Lightweight 3-step flows |
| `x-ui.contact-modal` | ✅ | 1 (modal 28) | Global FAB, all pages |
| `x-ui.custom-request-wizard` | ✅ | 1 (modal 29) | Custom order intake |
| `x-ui.button-modal-primary` | ✅ | Throughout | Primary CTA in footer |
| `x-ui.button-modal-cancel` | ✅ | Throughout | Cancel/dismiss in footer |
