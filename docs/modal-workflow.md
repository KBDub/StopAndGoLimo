# Modal System — Component Reference

> **REQUIRED ON STARTUP:** Read `docs/branding-requirements.md` before working on any modal or UI component. All colour tokens, component naming conventions, square-corner rules, and layout constraints defined there apply to everything documented here.

> **Scope:** Documents every modal component that is built and in active use in the application.

---

## Custom Request Workflow

### Overview

The Custom Request Workflow is a multi-step guided wizard that collects everything needed to place a custom apparel or product order. It is triggered from inside the `x-ui.contact-modal` FAB via a toggle, and is implemented as a dedicated `x-ui.custom-request-wizard` component that should be included once per page alongside the contact modal.

**Entry points:**
- `x-ui.contact-modal` → "Do You Have a Custom Request or DTF Upload?" toggle row (regular flow)
- Any DTF drop zone component (`x-ui.dtf-dropzone`, `x-ui.banner-cta-dtf-dropzone`) → dispatches `open-contact-modal` with `{ dtf: true, fileName }` → contact modal → wizard (DTF flow)

**Wizard component:** `x-ui.custom-request-wizard`
**Demo page:** `resources/views/pages/demo/modals.blade.php`

**Data persistence:** Cookie + database table on submit (Phase 2 — not yet implemented). The wizard component collects and holds all state in Alpine.js until submission.

---

### Trigger Flows

#### Regular Flow

1. User opens the contact modal (FAB or any `open-contact-modal` event).
2. User fills in **First Name, Last Name, Phone, and Email** — these four fields are the `contactReady` gate.
3. Once `contactReady` is `true`, the "Do You Have a Custom Request or DTF Upload?" toggle becomes active.
4. User clicks the toggle ON → the contact modal closes immediately and the wizard opens at Step 1, with name/email/phone pre-filled.
5. The toggle click handler calls `launchWizard()` only when it transitions to `true`.

#### DTF Dropzone Flow

1. User drops or selects a file on any DTF drop zone component.
2. The drop zone dispatches `open-contact-modal` with `{ dtf: true, fileName: 'filename.ext' }`.
3. The contact modal opens with:
   - `dtfFileName` set to the dropped file name.
   - A gold info bar below the toggle showing the attached filename.
   - The toggle starts **OFF** — the user must still explicitly click it to proceed, same as the regular flow.
4. The toggle is disabled until `contactReady` is `true` (all four contact fields filled).
5. User fills in contact info, then clicks the toggle ON → the contact modal closes and the wizard opens with name/email/phone/dtfFileName pre-filled and `hasDtf` pre-answered as `true`.

> **Key rule:** The user must always click the toggle to invoke the wizard, in both flows. There is no automatic launch.

#### Submit Button Split

The contact modal submit row shows one of two buttons at all times:

| Condition | Button shown |
|---|---|
| `customRequest` is OFF | Gold "Send Message" button (normal contact form submit) |
| `customRequest` is ON | Charcoal "Continue to Custom Request Wizard →" button (disabled until `contactReady`; clicking it also calls `launchWizard()`) |

The "Continue to Wizard" button serves as a visible fallback CTA for users who enable the toggle but haven't yet triggered auto-launch (e.g. toggled manually before all fields are filled).

---

### Contact Modal — Toggle Row

- **Label:** "Do You Have a Custom Request or DTF Upload?"
- **Sub-labels:**
  - While `!contactReady`: "Complete your contact info above to enable"
  - While `contactReady && !customRequest`: "Use our guided custom order wizard"
- **Toggle behavior:**
  - Disabled (`:disabled="!contactReady"`) until all four contact fields are filled.
  - Clicking it toggles `customRequest`; if it becomes `true`, calls `launchWizard()` immediately and closes the contact modal.
  - Works identically in both the regular flow and the DTF dropzone flow — the user must always explicitly click the toggle.
- **DTF file indicator:** Gold-tinted box shown below the toggle row when `dtfFileName` is set, displaying the attached filename. This is purely informational — it does not lock or pre-set the toggle.
- **Alpine state added to contact-modal:** `customRequest: false`, `dtfFileName: ''`, `launchWizard()` method.

---

### `launchWizard()` — Prefill Payload

When the wizard is opened from the contact modal, a prefill payload is dispatched via the `open-modal` event:

```js
{
  name: 'custom-request-wizard',
  prefill: {
    name:        contactName,   // firstName + lastName combined
    email:       cmEmail,
    phone:       cmPhone,
    dtfFileName: dtfFileName    // empty string '' when not a DTF flow
  }
}
```

The wizard reads this payload in its `@open-modal.window` handler and populates:
- `contactName`, `contactEmail`, `contactPhone`
- `dtfFileName` — pre-fills the DTF step notice
- `hasDtf` — set to `true` automatically when `dtfFileName` is non-empty

---

### Wizard Component — `x-ui.custom-request-wizard`

**File:** `resources/views/components/ui/custom-request-wizard.blade.php`
**Size:** `xl` (58rem wide) to accommodate the quantity matrix
**Opens via:** `window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'custom-request-wizard', prefill: {...} } }))`
**Fires on submit:** `wizard-done` window event with `{ name: 'custom-request-wizard' }`

The wizard uses a dynamic `visibleSteps` computed array. After the global Quantity & Sizing step, **two per-garment steps** (Print Method, Color Selection) are inserted once for each garment type the user selected — so the total step count scales with selections. The DTF Upload step is always present as step 2. All step numbers and the dot-indicator count adjust automatically.

---

### Step Map

| Step | Name (internal) | Title | Conditional |
|------|-----------------|-------|-------------|
| 1 | `request-type` | Request Details | Always |
| 2 | `dtf-upload` | DTF File Upload | Always |
| 3 | `garment-selection` | Garment Selection | Always |
| 4 | `quantity` | Quantity & Sizing | Always (shows all selected garments) |
| *For each selected garment (e.g. Polo (Long Sleeve), Hoodies…):* | | | |
| — | `print-method-{key}` | Print Method — {Garment Label} | Per selected garment |
| — | `color-{key}` | Color Selection — {Garment Label} | Per selected garment |
| Last | `completion-date` | Desired Completion Date | Always |
| Last | `extra-notes` | Extra Notes | Always |
| Last | `shipping-address` | Shipping Address | Always |
| Last | `confirm-submit` | Review & Submit | Always |

**Total steps:** 4 global + 2 per-garment-type selected + 4 closing global steps = variable.

**Example:** User selects Polo (Long Sleeve) + Hoodies → 4 + 4 + 4 = 12 steps.

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

#### Step 2 — DTF File Upload

**Always present.** Asks whether the customer is providing a design file.

**Content:**
- If `dtfFileName` is set (pre-filled from DTF dropzone flow), a gold notice box shows the filename and the step is auto-valid — no prompt shown.
- Otherwise, a Yes/No radio group: "Would you like to upload a DTF file?"
  - **Yes** — reveals a file input (PDF, AI, EPS, PNG, JPG, SVG, PSD, max 50 MB). Selecting a file sets `dtfFileName`.
  - **No** — no file needed; step becomes valid.

**Step valid when:** `dtfFileName` is set (auto-valid) OR `hasDtf !== null`.

**Alpine state:** `dtfFileName: ''`, `hasDtf: null`

When opened from the DTF dropzone flow, `dtfFileName` is pre-populated and `hasDtf` is pre-set to `true`.

---

#### Step 3 — Garment Selection

**Heading:** "Select all applicable garment types"

Each garment type is a toggle switch rendered inside a **3-column grid of bordered cards** (label left / switch right). See the Toggle Grid card pattern in `docs/branding-requirements.md → Form Controls → Toggle Switch → Toggle grid cards`.

| Toggle Label | Alpine key |
|---|---|
| Polo (Long Sleeve) | `garments.poloLong` |
| Polo (Short Sleeve) | `garments.poloShort` |
| Tank Tops | `garments.tankTop` |
| Beanies | `garments.beanie` |
| Scoop Neck | `garments.scoopNeck` |
| Baseball Caps | `garments.baseballCap` |
| Sweatshirts | `garments.sweatshirt` |
| Hoodies | `garments.hoodie` |
| Zip-Up Hoodies | `garments.zipHoodie` |

Below the grid, when at least one garment is selected, a **SELECTED** section appears (separated by a full-width `border-t border-linen-dark` divider). It shows one chip per selected garment: `px-3 py-1.5 border border-linen-dark bg-white text-charcoal text-xs font-semibold`.

---

#### Step 4 — Quantity & Sizing

A matrix input grid organized by garment type. Only garment types selected in Step 3 are shown. Each garment type renders its own table.

**Table structure per garment type:**
- **Rows:** Men's, Women's, Youth, Toddler
- **Columns:** XS, S, M, L, XL, 2XL, 3XL, 4XL, 5XL, 6XL
- Each cell contains a small number input (blank = 0).

The table container is horizontally scrollable (`overflow-x-auto scrollbar-sunburst`) to handle narrow viewports.

**Order Summary** — below all tables, a chip row shows every non-zero entry in the format:
`{qty} {Gender} {Size} {GarmentLabel}s` — e.g. `13 Men's 3XL Hoodies`

**Alpine state:** `quantities: {}` (flat object, keys formatted as `{garmentKey}-{genderKey}-{size}`)
**Alpine methods:** `getQty(garment, gender, size)`, `setQty(garment, gender, size, val)`
**Computed:** `quantitySummary` (array of human-readable strings), `selectedGarmentTypes` (filtered array)

---

#### Per-Garment Step — Print Method

Two main radio options. Both card headers use the **centered card radio** pattern: `flex items-center justify-center gap-3 p-4` on the card header div. See `docs/branding-requirements.md → Form Controls → Radio Group → card-style radio rows`.

**Option 1 — Traditional Printing**
- Card header: radio (centered left of label) + bold label + subtitle text `HTV · Digital · Screenprint` — all centered.
- The subtitle is **always visible** regardless of selection state — it is informational only.
- Selecting this option passes validation immediately. **No sub-radio buttons are shown** — do not add sub-type selection for Traditional.
- `stepValid` returns `true` when `printMethods[key] === 'traditional'`.

**Option 2 — Specialty Printing**
- Card header: radio (centered) + bold label — same centered layout as Traditional.
- When selected, the card expands to reveal 12 specialty types as a **3-column Radio Card Grid** (see `docs/branding-requirements.md → Form Controls → Radio Card Grid`). Label left, radio right. Single-select per garment key.
- `stepValid` returns `true` when `specialtyTypeByGarment[key]` is set.

| Specialty Option | `specialtyTypeByGarment[key]` value |
|---|---|
| Vinyl Shirts | `vinyl` |
| Rhinestone | `rhinestone` |
| Glitter Shirts | `glitter` |
| Foil Shirts | `foil` |
| Glow In The Dark | `glowDark` |
| Flock Shirts | `flock` |
| Reflective Shirts | `reflective` |
| Holographic | `holographic` |
| Brick Shirts | `brick` |
| Pattern Shirts | `pattern` |
| Embroidery | `embroidery` |
| Picture Shirts | `picture` |

**Alpine state:** `printMethods: {}` (per-garment key → `'traditional'` or `'specialty'`), `specialtyTypeByGarment: {}` (per-garment key → specialty option value)

---

#### Per-Garment Step — Color Selection

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
| Contact | Full name, email, phone |
| Ship To | Company name (if applicable), address lines, city/state/zip |
| Notes | Extra notes (truncated at 3 lines if long) |
| DTF File | Filename if pre-filled; "Yes — will provide separately" if hasDtf but no filename; "No file / needs design help" if hasDtf is false |

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
| `dtfFileName` | string | `''` | Pre-filled filename from DTF dropzone flow |
| `hasDtf` | bool\|null | `null` | Whether customer is providing a design file (Step 1a) |
| `garments` | object | all `false` | Toggle state for each garment type |
| `colorInput` | string | `''` | Live text in color search input |
| `selectedColors` | array | `[]` | Array of color name strings |
| `quantities` | object | `{}` | Flat map of `{garmentKey}-{genderKey}-{size}` → quantity |
| `sizes` | array | 10 items | `['XS','S','M','L','XL','2XL','3XL','4XL','5XL','6XL']` |
| `genders` | array | 4 items | `[{key,label}]` for Men's, Women's, Youth, Toddler |
| `printMethods` | object | `{}` | Per-garment key → `'traditional'` or `'specialty'` |
| `specialtyTypeByGarment` | object | `{}` | Per-garment key → selected specialty type string (single value) |
| `completionDate` | string | `''` | ISO date string from date input |
| `isRushDelivery` | bool\|null | `null` | Rush flag from Step 7 (if not already set in Step 1) |
| `extraNotes` | string | `''` | Free-text notes |
| `contactName` | string | `''` | Pre-filled from contact modal |
| `contactEmail` | string | `''` | Pre-filled from contact modal |
| `contactPhone` | string | `''` | Pre-filled from contact modal |
| `address1` | string | `''` | Shipping address line 1 |
| `address2` | string | `''` | Shipping address line 2 |
| `city` | string | `''` | Shipping city |
| `state` | string | `''` | Shipping state (2-char) |
| `zip` | string | `''` | Shipping ZIP code |

**Computed getters:**

| Getter | Returns |
|---|---|
| `hasShirtType` | `true` if any garment is toggled on |
| `visibleSteps` | Array of step name strings; always starts with `request-type`, `dtf-upload`, `garment-selection`, `quantity`; then `print-method-{key}`, `color-{key}` per selected garment; ends with `completion-date`, `extra-notes`, `shipping-address`, `confirm-submit` |
| `currentStepName` | String key for the current step |
| `currentStepTitle` | Human-readable title for the current step |
| `totalSteps` | `visibleSteps.length` (variable based on garment selections) |
| `selectedGarmentTypes` | Filtered array of `{key, label}` objects for selected garments |
| `filteredColors` | Color suggestions filtered by `colorInput`, excluding already-selected |
| `quantitySummary` | Array of readable strings like "13 Men's 3XL Hoodies" |
| `rushActive` | `true` if `isRush === true` or `isRushDelivery === true` |
| `stepValid` | Validates the current step before allowing Next |

---

### Event API

| Event | Direction | Payload | Description |
|---|---|---|---|
| `open-contact-modal` | dispatch → contact modal | `{}` or `{ dtf: true, fileName: 'name.ext' }` | Opens contact modal; DTF payload pre-enables toggle and stores filename |
| `open-modal` | contact modal → wizard | `{ name: 'custom-request-wizard', prefill: { name, email, phone, dtfFileName } }` | Opens wizard at step 1 with pre-filled contact info |
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
| `demo-warning` | Warning Variant | `warning` | `$icon` slot (triangle) + cancel + raw `<button>Keep Working</button>` | ✅ |
| `demo-danger` | Danger Variant | `danger` | `$icon` slot (circle-i) + cancel + raw `<button>Delete Permanently</button>` | ✅ |

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

### Section 10 — DTF Drop Zones

Three drop zone variants demonstrating `x-ui.dtf-dropzone` and `x-ui.banner-cta-dtf-dropzone`. All variants dispatch `open-contact-modal` with a DTF payload on file drop or file-input selection.

| Component | Prop | Description | Status |
|---|---|---|---|
| `x-ui.dtf-dropzone` | *(none — medium default)* | Standard medium drop zone | ✅ |
| `x-ui.banner-cta-dtf-dropzone` | `position="left"` | Full-width banner, text on left | ✅ |
| `x-ui.banner-cta-dtf-dropzone` | `position="right"` | Full-width banner, text on right | ✅ |
