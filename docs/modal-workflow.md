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
