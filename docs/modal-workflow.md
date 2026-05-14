# Modal System — Component Reference

> **REQUIRED ON STARTUP:** Read `docs/branding-requirements.md` before working on any modal or UI component. All colour tokens, component naming conventions, square-corner rules, and layout constraints defined there apply to everything documented here.

> **Scope:** Documents every modal component that is built and in active use in the application.

> **Status legend used in this file:**
> - **BUILT** — fully implemented and in production use
> - **PLANNED** — design agreed, not yet implemented

---

## Custom Request Workflow

### Overview

The Custom Request Workflow is a multi-step guided wizard that collects everything needed to place a custom apparel or DTF transfer order. It is triggered from inside the `x-ui.contact-modal` FAB via two radio buttons, and is implemented as a dedicated `x-ui.custom-request-wizard` component that should be included once per page alongside the contact modal.

**Entry points:**
- `x-ui.contact-modal` → two radio buttons: "Custom Apparel Request" | "DTF Transfers" (all flows)
- Any artwork drop zone component (`x-ui.artwork-dropzone`, `x-ui.banner-cta-artwork-dropzone`) → dispatches `open-contact-modal` with `{ artwork: true, fileName }` → contact modal opens for general quote request (non-DTF flow)
- Any DTF drop zone component (`x-ui.dtf-dropzone`, `x-ui.banner-cta-dtf-dropzone`) → dispatches `open-contact-modal` with `{ dtf: true, fileName }` → contact modal → wizard (DTF flow, `dtfMode: true`)
- DTF pricing table → PNG file picker → `x-ui.dtf-confirm-modal` → wizard (DTF flow, `dtfMode: true`)

**Wizard component:** `x-ui.custom-request-wizard`
**Demo page:** `resources/views/pages/demo/modals.blade.php`

**Data persistence:** Cookie + database table on submit (Phase 2 — not yet implemented). The wizard component collects and holds all state in Alpine.js until submission.

---

### Trigger Flows

#### Regular Flow (Custom Apparel) — BUILT (radio button change PLANNED)

1. User opens the contact modal (FAB or any `open-contact-modal` event).
2. User fills in **First Name, Last Name, Phone, and Email** — these four fields are the `contactReady` gate.
3. Once `contactReady` is `true`, the two order-type radio buttons become active.
4. User selects **Custom Apparel Request** — this sets `dtfMode: false`.
5. Selecting a radio AND having `contactReady` true immediately calls `launchWizard()`, closes the contact modal, and opens the wizard at Step 1 with name/email/phone pre-filled.

> **Key rule:** Both gates must be satisfied before `launchWizard()` fires — all four contact fields filled AND one radio selected. There is no automatic launch without both conditions met.

#### Artwork Dropzone Flow — BUILT

1. User drops or selects a file on any artwork drop zone component (`x-ui.artwork-dropzone` or `x-ui.banner-cta-artwork-dropzone`).
2. The drop zone dispatches `open-contact-modal` with `{ artwork: true, fileName: 'filename.pdf' }`.
3. The contact modal opens as a standard general quote request. No DTF-specific pre-selection or `dtfMode` is set.

> **Artwork dropzone components** are used on all non-DTF pages via `x-sections.cta-free-quote-banner` and any standalone banner placement. Accepted formats: PNG, JPG, PDF, SVG, AI, EPS.

#### DTF Dropzone Flow — BUILT (radio button change PLANNED)

1. User drops or selects a file on any DTF drop zone component (`x-ui.dtf-dropzone` or `x-ui.banner-cta-dtf-dropzone`).
2. The drop zone dispatches `open-contact-modal` with `{ dtf: true, fileName: 'filename.png' }`.
3. The contact modal opens with:
   - `dtfFileName` set to the dropped file name.
   - A gold info bar below the radio row showing the attached filename.
   - The **DTF Transfers** radio is pre-selected — the user does not need to pick again.
4. The radios are disabled until `contactReady` is `true` (all four contact fields filled).
5. Once `contactReady` is satisfied, `launchWizard()` fires — contact modal closes, wizard opens with name/email/phone/dtfFileName pre-filled and `dtfMode: true`.

#### DTF Pricing Button Flow — PLANNED (replaces current flow)

1. User clicks any pricing row on the DTF pricing section (Neck Tags, Left Chest, Image Sizes). The clicked row's size, tier, and price are stored to `Alpine.store('dtfCart').pendingItem`.
2. An inline **PNG-only file picker** opens immediately (no modal yet). Accepted: `.png` only.
3. After a PNG file is selected, the `x-ui.dtf-confirm-modal` opens carrying the pending item and filename.
4. See **DTF Confirm Modal** section below for modal behavior.
5. On "Proceed to Checkout", the modal closes and the wizard opens in `dtfMode: true` with the full `dtfCart.items` array and the PNG filename in the prefill payload.

#### Submit Button Split — BUILT (label update PLANNED)

The contact modal submit row shows one of two buttons at all times:

| Condition | Button shown |
|---|---|
| No radio selected | Gold "Send Message" button (normal contact form submit) |
| Either radio selected | Charcoal "Continue to Custom Request Wizard →" button (disabled until `contactReady`; clicking it also calls `launchWizard()`) |

The "Continue to Wizard" button serves as a visible fallback CTA — it reflects whichever radio is selected and is disabled until all four contact fields are filled.

---

### Contact Modal — Radio Row — PLANNED (currently a toggle)

**Current state (built):** A single toggle labeled "Do You Have a Custom Request or DTF Upload?" that is off/on.

**Planned state:** The toggle is replaced by two radio buttons:

- **Custom Apparel Request**
- **DTF Transfers**

**Behavior (identical gate logic to current toggle):**
- Both radios are disabled (`:disabled="!contactReady"`) until all four contact fields are filled.
- Selecting a radio sets `orderType` to `'apparel'` or `'dtf'`, which sets `dtfMode` accordingly.
- If `contactReady` is already `true` when a radio is selected, `launchWizard()` fires immediately.
- If a radio is selected before `contactReady` is `true`, the selection is held and `launchWizard()` fires as soon as the last required contact field is satisfied.
- Sub-label while `!contactReady`: "Complete your contact info above to enable"
- Sub-label while `contactReady && !orderType`: "Use our guided custom order wizard"
- **DTF file indicator:** Gold-tinted box shown below the radio row when `dtfFileName` is set, displaying the attached filename. Purely informational — does not auto-select either radio.

**Alpine state on contact-modal:** `orderType: ''` (`'apparel'` | `'dtf'`), `dtfFileName: ''`, `launchWizard()` method.

---

### DTF Confirm Modal — `x-ui.dtf-confirm-modal` — PLANNED (replaces current modal)

**File:** `resources/views/components/ui/dtf-confirm-modal.blade.php`
**Included on:** `resources/views/pages/custom-apparel/dtf-transfers.blade.php`

**Current state (built):** Opens after a pricing button click. Shows "Ready to Order?" with "Yes, let's do it" and "No, not right now" buttons.

**Planned state:** Opens after the user selects a PNG file from the pricing table flow (step 2 of that flow). Shows the selected DTF type and filename, with two radio options and an X close button.

**Modal content:**
- Title: "Ready to Order?"
- Gold info row: selected DTF type + size (e.g. "Neck Tags — 2″ × 2″, 15–49 pcs at $1.29 ea")
- Gold info row: attached PNG filename
- Two radios (one must be selected to enable Continue):
  - **Proceed to Checkout for [DTF Type Name]** — appends the pending item to `dtfCart.items` and opens the wizard
  - **Add more DTFs** — appends the pending item to `dtfCart.items`, closes the modal, returns user to the pricing table to pick another size/tier
- Primary button: "Continue" (disabled until a radio is selected)
- X button: triggers an "Are you sure?" overlay (same pattern as `x-ui.custom-request-wizard` close confirm) — confirmed closes the modal and clears `dtfCart`

**DTF cart store:** `Alpine.store('dtfCart', { items: [], pendingItem: null })` persists across multiple confirm modal interactions. Each confirmed "Add more DTFs" appends `{ type, size, tier, price, fileName }` to `items`. When "Proceed to Checkout" is selected, the full `items` array is passed in the wizard prefill payload.

---

### `launchWizard()` — Prefill Payload — PLANNED (updated from current)

When the wizard is opened from the contact modal, a prefill payload is dispatched via the `open-modal` event:

```js
{
  name: 'custom-request-wizard',
  prefill: {
    name:        contactName,     // firstName + lastName combined
    email:       cmEmail,
    phone:       cmPhone,
    dtfMode:     true | false,    // set from radio selection or DTF entry point
    dtfFileName: dtfFileName,     // empty string '' when not a DTF flow
    dtfItems:    []               // dtfCart.items array; empty array when not a DTF pricing flow
  }
}
```

The wizard reads this payload in its `@open-modal.window` handler and populates:
- `contactName`, `contactEmail`, `contactPhone`
- `dtfMode` — drives the entire step branching
- `dtfFileName` — pre-fills the DTF file step notice
- `hasDtf` — set to `true` automatically when `dtfFileName` is non-empty
- `dtfItems` — pre-loaded DTF cart items from the pricing flow (empty for all other flows)

---

### Wizard Component — `x-ui.custom-request-wizard`

**File:** `resources/views/components/ui/custom-request-wizard.blade.php`
**Size:** `xl` (58rem wide) to accommodate the quantity matrix
**Opens via:** `window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'custom-request-wizard', prefill: {...} } }))`
**Fires on submit:** `wizard-done` window event with `{ name: 'custom-request-wizard' }`

The wizard uses a dynamic `visibleSteps` computed array driven by `dtfMode`. The DTF path and the custom apparel path share the same component with clearly separated step sequences — no hybrid steps. Step numbering, dot indicators, and titles all adjust automatically.

---

### Step Map — PLANNED (dtfMode branching; current wizard has no dtfMode)

#### Non-DTF path (`dtfMode === false`) — Custom Apparel

| Step | Name (internal) | Title | Conditional |
|------|-----------------|-------|-------------|
| 1 | `request-type` | Request Details | Always |
| 2 | `garment-selection` | Garment Selection | Always |
| 3 | `quantity` | Quantity & Sizing | Always (shows all selected garments) |
| 4 | `image-distribution` | Artwork — One Design or Individual? | Only when `selectedGarmentTypes.length > 1` |
| 5 | `artwork-upload` | Artwork Upload | Only when one garment type selected, OR `imageDistribution === 'single'` |
| — | `print-method-{key}` | Print Method — {Garment Label} | Per selected garment (includes per-garment artwork upload when `imageDistribution === 'individual'`) |
| — | `color-{key}` | Color Selection — {Garment Label} | Per selected garment |
| Last | `completion-date` | Desired Completion Date | Always |
| Last | `extra-notes` | Extra Notes | Always |
| Last | `shipping-address` | Shipping Address | Always |
| Last | `confirm-submit` | Review & Submit | Always |

**Total steps:** Variable, driven by garment count and image distribution choice.
**Example (single garment):** Crew Necks only → request-type, garment-selection, quantity, artwork-upload, print-method-crewNeck, color-crewNeck, completion-date, extra-notes, shipping-address, confirm-submit = 10 steps.
**Example (multi-garment, one image):** Crew Necks + Hoodies → request-type, garment-selection, quantity, image-distribution, artwork-upload, print-method-crewNeck, color-crewNeck, print-method-hoodie, color-hoodie, completion-date, extra-notes, shipping-address, confirm-submit = 13 steps.
**Example (multi-garment, individual images):** Crew Necks + Hoodies → same as above but no standalone artwork-upload step; artwork upload is embedded inside each print-method step = 12 steps.

**`image-distribution` step detail:**
- Question: "Do you have one design for all garment types, or a different design for each?"
- Radio options:
  - **One design for all garments** (`imageDistribution: 'single'`) — a single `artwork-upload` step follows; that file applies to all garment types.
  - **Individual design per garment type** (`imageDistribution: 'individual'`) — no standalone `artwork-upload` step; each `print-method-{key}` step includes its own file upload sub-section.
- Only pushed into `visibleSteps` when `selectedGarmentTypes.length > 1`. When only one garment type is selected, this question is skipped and a single `artwork-upload` step is always shown.

**Alpine state:** `imageDistribution: null` (`'single'` | `'individual'`)

#### DTF path (`dtfMode === true`) — DTF Transfers

| Step | Name (internal) | Title | Conditional |
|------|-----------------|-------|-------------|
| 1 | `request-type` | Request Details | Always |
| 2 | `dtf-upload` | DTF File Upload | Always (PNG only — max 50 MB; auto-passes if file pre-loaded from pricing or dropzone flow) |
| 3 | `dtf-type-selection` | DTF Type Selection | Only when `dtfItems.length === 0` (no pre-selection from pricing table) |
| 4 | `dtf-quantity` | Quantities & Pricing | Only when `dtfItems.length === 0` (no pre-selection from pricing table) |
| Last | `completion-date` | Desired Completion Date | Always |
| Last | `extra-notes` | Extra Notes | Always |
| Last | `shipping-address` | Shipping Address | Always |
| Last | `confirm-submit` | Review & Submit | Always |

**Total steps:** 6 when pre-loaded from pricing table (`dtfItems.length > 0`); 8 when entered via FAB/dropzone with no prior selection.
**Note:** Print Method and Color Selection steps do not appear in the DTF path.

**Entry point determines Steps 3 + 4:**

| Entry point | `dtfItems` on open | Steps 3 + 4 |
|---|---|---|
| DTF pricing table → file pick → confirm modal → "Proceed to Checkout" | Pre-populated from clicked row(s) | Skipped — selection already made |
| FAB / CTA / dropzone → DTF radio selected | Empty array | Shown — user selects DTF type and quantity in wizard |

**DTF types available in Step 3 (when shown):**

| Toggle Label | Internal key |
|---|---|
| Neck Tags | `neckTag` |
| Left Chest / Right Chest | `chestImage` |
| Image Sizes (5″ and above) | `imageSize` |

**Step 4 — DTF Quantity (when shown):** For each selected DTF type, the user picks a pricing tier (matching the `dtf-pricing-section` table) and enters a quantity.

**When pre-loaded (`dtfItems.length > 0`):** The `confirm-submit` review step displays all pre-loaded items from `dtfItems` directly. No re-selection needed.

---

### Step Details — Current Build

> The following step details reflect the **currently built** wizard. Steps marked PLANNED above (dtfMode branching, dtf-type-selection, dtf-quantity) are not yet implemented.

---

#### Step 1 — Request Details — BUILT

**Fields:**

- **Is this a company or personal request?** — two radio buttons: `Company` | `Personal`
  - If `Company` is selected, a **Company Name** text input is enabled/shown below the radios.
- **Is this a rush request?** — two radio buttons: `Yes` | `No`
  - If `Yes`, `isRush` is set to `true`. This value persists and affects later steps.

**Alpine state:** `requestType: ''`, `companyName: ''`, `isRush: null`

---

#### Step 2 — Artwork / DTF File Upload — BUILT (file type split PLANNED)

**Always present.** Asks whether the customer is providing a design file.

**Current behavior (built):** Single file input accepting all design formats.

**Planned behavior:** File type accepted depends on `dtfMode`:
- `dtfMode === false` (Custom Apparel): PDF, AI, EPS, PNG, JPG, SVG, PSD — max 50 MB. Step label: "Artwork Upload".
- `dtfMode === true` (DTF Transfers): PNG only — max 50 MB. Step label: "DTF File Upload". Display hint: "PNG — 300 DPI minimum recommended".

**Content:**
- If `dtfFileName` is set (pre-filled from dropzone or pricing flow), a gold notice box shows the filename and the step is auto-valid — no prompt shown.
- Otherwise, a Yes/No radio group asking whether the customer is uploading a file.
  - **Yes** — reveals the file input with the appropriate accept mask.
  - **No** — no file needed; step becomes valid.

**Step valid when:** `dtfFileName` is set (auto-valid) OR `hasDtf !== null`.

**Alpine state:** `dtfFileName: ''`, `hasDtf: null`

---

#### Step 3 — Garment Selection — BUILT (non-DTF path only after branching is implemented)

**Heading:** "Select all applicable garment types"

Each garment type is a toggle switch rendered inside a **3-column grid of bordered cards** (label left / switch right). See the Toggle Grid card pattern in `docs/branding-requirements.md → Form Controls → Toggle Switch → Toggle grid cards`.

| Toggle Label | Alpine key |
|---|---|
| Crew Necks | `garments.crewNeck` |
| V-Necks | `garments.vNeck` |
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

#### Step 4 — Quantity & Sizing — BUILT (non-DTF path only after branching is implemented)

A matrix input grid organized by garment type. Only garment types selected in Step 3 are shown. Each garment type renders its own table.

**Table structure per garment type:**
- **Rows:** Men's, Women's, Youth, Toddler
- **Columns:** XS, S, M, L, XL, 2XL, 3XL, 4XL, 5XL, 6XL
- Each cell contains a small number input (blank = 0).

**Exceptions:**
- **Beanies:** One-size input only (single count field, no gender/size matrix).
- **Baseball Caps:** Adult and Youth inputs only (no full matrix).

The table container is horizontally scrollable (`overflow-x-auto scrollbar-sunburst`) to handle narrow viewports.

**Order Summary** — below all tables, a chip row shows every non-zero entry in the format:
`{qty} {Gender} {Size} {GarmentLabel}s` — e.g. `13 Men's 3XL Hoodies`

**Alpine state:** `quantities: {}` (flat object, keys formatted as `{garmentKey}-{genderKey}-{size}`)
**Alpine methods:** `getQty(garment, gender, size)`, `setQty(garment, gender, size, val)`
**Computed:** `quantitySummary` (array of human-readable strings), `selectedGarmentTypes` (filtered array)

---

#### Per-Garment Step — Print Method — BUILT (non-DTF path only)

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

**Alpine state:** `printMethods: {}` (per-garment key → `'traditional'` or `'specialty'`), `specialtyTypeByGarment: {}` (per-garment key → selected specialty type string (single value))

---

#### Per-Garment Step — Color Selection — BUILT (non-DTF path only)

A smart text input with inline (non-absolute) autocomplete against a list of common colors. Users can add multiple colors.

**Behavior:**
- Typing filters the `colorSuggestions` array (case-insensitive, excludes already-selected colors).
- Suggestions render **inline** below the input (never absolute-positioned — modal overflow rule).
- Pressing `Enter` or clicking "Add" adds the typed value directly if it is not already selected.
- Clicking a suggestion adds it and clears the input.
- Each selected color becomes a **chip** (charcoal background, white text) with an × remove button.

**Color suggestion list:**
White, Black, Blue, Navy Blue, Red, Royal Blue, Forest Green, Charcoal Gray, Light Gray, Sky Blue, Yellow, Orange, Purple, Maroon, Pink, Hot Pink, Kelly Green, Burgundy, Lime Green, Gold, Silver, Tan, Brown, Heather Gray, Sport Gray, Safety Green, Safety Orange, Teal, Coral, Lavender, Olive Green

**Alpine state:** `colorInput: ''`, `selectedColors: []`, `colorSuggestions: [...]`

---

#### Step — Desired Completion Date — BUILT

**Rush handling:**

- If `isRush === true` (set in Step 1): display a sunburst/gold banner at the top of the step — "Rush Order — Expediting" with a lightning bolt icon. Do **not** ask again.
- If `isRush !== true`: display a bordered card asking "Is this a rush delivery?" with `Yes` | `No` radio buttons (`isRushDelivery`). If `Yes` is selected, also show a gold banner confirming rush expediting will be applied.

The date input's border and ring turn sunburst when `rushActive` is true (`isRush === true OR isRushDelivery === true`). A small inline `RUSH` badge also appears next to the label.

**Alpine state:** `completionDate: ''`, `isRushDelivery: null`
**Computed:** `rushActive` — `true` if either `isRush` or `isRushDelivery` is `true`

---

#### Step — Extra Notes — BUILT

A single resizable `<textarea>` for any additional order details — artwork requirements, special instructions, references, etc.

**Alpine state:** `extraNotes: ''`

---

#### Step — Shipping Address — BUILT

- **Company Name** field — shown only when `requestType === 'company'`. Pre-bound to `companyName` (same field as Step 1, so it carries forward any value entered there).
- **First Name** / **Last Name** — side-by-side on sm+ screens.
- **Address Line 1**
- **Address Line 2** (optional)
- **City** / **State** / **ZIP** — three-column grid on sm+ screens.

**Alpine state:** `firstName`, `lastName`, `address1`, `address2`, `city`, `state`, `zip`

---

#### Step — Review & Submit — BUILT

A read-only summary of all collected data, displayed as a two-column key/value grid inside a bordered container with divider rows.

**Summary rows displayed:**

| Row | Content |
|---|---|
| Order Type | DTF Transfers or Custom Apparel (shown when dtfMode is implemented) |
| Request Type | `Company` or `Personal`; company name appended if applicable |
| Rush | Sunburst `RUSH` badge if `rushActive`, otherwise "Standard" |
| Garments | Chips for each selected garment type (non-DTF path) |
| DTF Items | Type, size, tier, quantity chips (DTF path — PLANNED) |
| Colors | Charcoal chips for each selected color (non-DTF path) |
| Quantities | Chips in `{qty} {Gender} {Size} {Garment}s` format (non-DTF path) |
| Print Method | Traditional type or Specialty, as applicable (non-DTF path) |
| Date Needed | Completion date with inline `RUSH` badge if rush active |
| Contact | Full name, email, phone |
| Ship To | Company name (if applicable), address lines, city/state/zip |
| Notes | Extra notes (truncated at 3 lines if long) |
| Artwork File | Filename if provided; "Yes — will provide separately" if hasDtf but no filename; "No file / needs design help" if hasDtf is false |

**Rush banner:** A full-width sunburst gold bar at the top of the step when `rushActive` is true.

The **Submit Request** button dispatches the `wizard-done` event and closes the wizard.

---

### Alpine.js State Summary — Current + Planned

All state lives in the `x-data` object on the root element of `x-ui.custom-request-wizard`.

| Property | Type | Default | Status | Description |
|---|---|---|---|---|
| `isOpen` | bool | `false` | BUILT | Backdrop visibility |
| `step` | int | `1` | BUILT | Current step (1-based) |
| `dtfMode` | bool\|null | `null` | BUILT | `true` = DTF path, `false` = apparel path; drives `visibleSteps` |
| `requestType` | string | `''` | BUILT | `'company'` or `'personal'` |
| `companyName` | string | `''` | BUILT | Company name (Step 1, reused in shipping step) |
| `isRush` | bool\|null | `null` | BUILT | Rush flag from Step 1 |
| `dtfFileName` | string | `''` | BUILT | Pre-filled filename from dropzone or pricing flow |
| `hasDtf` | bool\|null | `null` | BUILT | Whether customer is providing a design file |
| `dtfItems` | array | `[]` | BUILT | Pre-loaded DTF cart items from pricing flow; passed to order-action-modal payload |
| `dtfTypes` | object | all `false` | BUILT | Toggle state for each DTF type (DTF path Step 3) |
| `garments` | object | all `false` | BUILT | Toggle state for each garment type (non-DTF path) |
| `colorInputs` | object | `{}` | BUILT | Per-garment live color search input |
| `selectedColorsByGarment` | object | `{}` | BUILT | Per-garment selected colors array |
| `quantities` | object | `{}` | BUILT | Flat map of `{garmentKey}-{genderKey}-{size}` → quantity |
| `sizes` | array | 10 items | BUILT | `['XS','S','M','L','XL','2XL','3XL','4XL','5XL','6XL']` |
| `genders` | array | 4 items | BUILT | `[{key,label}]` for Men's, Women's, Youth, Toddler |
| `printMethods` | object | `{}` | BUILT | Per-garment key → `'traditional'` or `'specialty'` |
| `specialtyTypeByGarment` | object | `{}` | BUILT | Per-garment key → selected specialty type string |
| `completionDate` | string | `''` | BUILT | ISO date string from date input |
| `isRushDelivery` | bool\|null | `null` | BUILT | Rush flag from completion date step |
| `extraNotes` | string | `''` | BUILT | Free-text notes |
| `contactName` | string | `''` | BUILT | Pre-filled from contact modal |
| `contactEmail` | string | `''` | BUILT | Pre-filled from contact modal |
| `contactPhone` | string | `''` | BUILT | Pre-filled from contact modal |
| `address1` | string | `''` | BUILT | Shipping address line 1 |
| `address2` | string | `''` | BUILT | Shipping address line 2 |
| `city` | string | `''` | BUILT | Shipping city |
| `state` | string | `''` | BUILT | Shipping state (2-char) |
| `zip` | string | `''` | BUILT | Shipping ZIP code |

**Computed getters:**

| Getter | Status | Returns |
|---|---|---|
| `visibleSteps` | PLANNED update | Branches on `dtfMode` — DTF path: 8 fixed steps; apparel path: 4 global + 2 per-garment + 4 closing |
| `currentStepName` | BUILT | String key for the current step |
| `currentStepTitle` | BUILT | Human-readable title for the current step |
| `totalSteps` | BUILT | `visibleSteps.length` |
| `selectedGarmentTypes` | BUILT | Filtered array of `{key, label}` objects for selected garments (apparel path) |
| `selectedDtfTypes` | PLANNED | Filtered array of `{key, label}` for selected DTF types (DTF path) |
| `filteredColorsForGarment` | BUILT | Color suggestions filtered by garment input, excluding already-selected |
| `quantitySummary` | BUILT | Array of readable strings like "13 Men's 3XL Hoodies" |
| `rushActive` | BUILT | `true` if `isRush === true` or `isRushDelivery === true` |
| `stepValid` | BUILT (update PLANNED) | Validates current step; DTF-path steps need their own validation branches |

---

### File Type Restrictions by Component — BUILT

| Component | File | `accept` | Max size | Notes |
|---|---|---|---|---|
| `x-ui.dtf-dropzone` | `dtf-dropzone.blade.php` | `.png` | 5 MB | DTF path only; client-side size check in `@change` |
| `x-ui.banner-cta-dtf-dropzone` | `banner-cta-dtf-dropzone.blade.php` | `.png` | 5 MB | DTF path only |
| Wizard DTF upload (single mode) | `custom-request-wizard.blade.php` | `.png` | 5 MB | `@change` rejects and alerts if `f.size > 5 * 1024 * 1024` |
| Wizard DTF upload (per-type mode) | `custom-request-wizard.blade.php` | `.png` | 5 MB | Same guard per-type file input loop |
| Wizard apparel artwork upload | `custom-request-wizard.blade.php` | `.pdf,.ai,.eps,.png,.jpg,.jpeg,.svg,.psd` | 5 MB | `@change` rejects and alerts if over limit |

---

### Event API

| Event | Direction | Payload | Status | Description |
|---|---|---|---|---|
| `open-contact-modal` | dispatch → contact modal | `{}` or `{ dtf: true, fileName: 'name.png' }` | BUILT | Opens contact modal; DTF payload pre-selects DTF radio and stores filename |
| `open-modal` | contact modal → wizard | `{ name: 'custom-request-wizard', prefill: { name, email, phone, dtfMode, dtfFileName, dtfItems } }` | BUILT | Opens wizard at step 1 with pre-filled contact info and mode |
| `close-modal` | dispatch → wizard | `{ name: 'custom-request-wizard' }` | BUILT | Closes and resets wizard |
| `modal-closed` | wizard fires → window | `{ name: 'custom-request-wizard' }` | BUILT | Fired after wizard closes |
| `wizard-done` | wizard fires → window | `{ name: 'custom-request-wizard' }` | BUILT | Fired when DTF or apparel path completes |
| `open-modal` | wizard → order-action-modal | `{ name: 'order-action-modal', payload: buildPayload() }` | BUILT | DTF path only — opens cart/checkout chooser after wizard closes |
| `close-modal` | dispatch → order-action-modal | `{ name: 'order-action-modal' }` | BUILT | Closes the order action modal |
| `cart-updated` | order-action-modal → window | `{}` | BUILT | Fired after successful cart add (cart choice) |
| `open-cart-drawer` | order-action-modal → window | `{}` | BUILT | Opens cart drawer after successful cart add |

---

### Branding Rules (Wizard-Specific)

- **Square corners everywhere** — no `rounded` on the panel, inputs, or buttons. Toggle switches retain `rounded-full` (existing pattern from demo page).
- **Rush elements** use `bg-sunburst`, `text-sunburst`, `border-sunburst`, and `bg-sunburst/10` backgrounds. Rush badge text: uppercase `RUSH` in `text-[10px] font-bold`.
- **Step dot indicators** — current step renders as a wider pill (`w-6 h-2 bg-sunburst`); completed steps are smaller filled dots (`w-2.5 h-2 bg-sunburst/60`); future steps are linen-dark (`w-2.5 h-2 bg-linen-dark`).
- **Scrollable areas** — all `overflow-y-auto` and `overflow-x-auto` elements must use `scrollbar-sunburst`.
- **Color autocomplete** — suggestions list must render inline in document flow (never `position:absolute`) per the modal overflow rule. Use `max-h-[8rem] overflow-y-auto scrollbar-sunburst`.
- **Footer buttons** — use `x-ui.button-modal-primary` and `x-ui.button-modal-cancel`. The DTF path's final step button is labeled "Choose Cart Option →". The apparel path's final step button is labeled "Submit Request".

---

### Usage

```blade
{{-- Include once per page alongside x-ui.contact-modal --}}
<x-ui.contact-modal />
<x-ui.custom-request-wizard />
{{-- x-ui.order-action-modal is bundled automatically inside x-ui.custom-request-wizard --}}

{{-- On DTF pages, also include: --}}
<x-ui.dtf-confirm-modal />
```

Both `x-ui.contact-modal` and `x-ui.custom-request-wizard` must be present on the same page. The `x-ui.order-action-modal` is included at the bottom of `x-ui.custom-request-wizard` and does not need a separate include. `x-ui.dtf-confirm-modal` is only needed on pages with the DTF pricing section.

---

### Submit Flow — Path Split

The wizard's `finish()` function branches based on `dtfMode`:

#### DTF path (`dtfMode === true`)
```
User clicks "Choose Cart Option →"
  → finish() fires — NO server call here
  → Alpine.store('dtfCart').clear()
  → dispatch wizard-done event
  → close() the wizard
  → setTimeout 220ms:
      → dispatch open-modal { name: 'order-action-modal', payload: buildPayload() }
  → User chooses "Add to Cart" or "Proceed to Checkout" in order-action-modal
  → order-action-modal POSTs to /custom-order/dtf-cart
  → On success (cart): dispatch cart-updated + open-cart-drawer
  → On success (checkout): window.location.href = '/checkout'
  → On error: show inline error in modal, modal stays open
```

#### Apparel path (`dtfMode !== true`)
```
User clicks "Submit Request"
  → finish() fires
  → POST to /custom-order/submit (orderType: 'apparel')
  → On success:
      → orderReference = data.reference
      → dispatch wizard-done event
      → showConfirmation = true (in-wizard thank-you panel)
  → On error:
      → submitError = true (inline error, wizard stays open)
```

#### Data persistence
Both paths write a record to `custom_order_requests` before any cart/redirect action. DTF submissions use reference prefix `T5P-DTF-`. Apparel submissions use `T5P-`.

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
`x-ui.modal-wizard` is a lightweight 3-step shell — slots, static titles, no internal conditional logic. `x-ui.custom-request-wizard` is the full production order wizard with dynamic `visibleSteps`, `dtfMode` branching, full Alpine state, and all business logic. They are separate components serving different purposes.

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

### Section 10 — Artwork Drop Zones + DTF Drop Zones

Two separate drop zone families. The artwork family covers all non-DTF pages; the DTF family is DTF-only.

**Artwork drop zones** — dispatch `open-contact-modal` with `{ artwork: true, fileName }`. Accepted: PNG, JPG, PDF, SVG, AI, EPS.

| Component | Prop | Description | Status |
|---|---|---|---|
| `x-ui.artwork-dropzone` | *(none — medium default)* | Standard medium artwork drop zone | ✅ |
| `x-ui.banner-cta-artwork-dropzone` | `position="left"` | Full-width banner, folder icon on left | ✅ |
| `x-ui.banner-cta-artwork-dropzone` | `position="right"` | Full-width banner, folder icon on right | ✅ |

**DTF drop zones** — dispatch `open-contact-modal` with `{ dtf: true, fileName }`. Accepted: PNG only — 300 DPI minimum. Use on DTF transfers page and DTF pricing section only.

| Component | Prop | Description | Status |
|---|---|---|---|
| `x-ui.dtf-dropzone` | *(none — medium default)* | Standard medium DTF drop zone | ✅ |
| `x-ui.banner-cta-dtf-dropzone` | `position="left"` | Full-width banner, text on left | ✅ |
| `x-ui.banner-cta-dtf-dropzone` | `position="right"` | Full-width banner, text on right | ✅ |

---

### Section 11 — Order Action Modal

One modal that handles the DTF path's final cart/checkout choice. Bundled automatically inside `x-ui.custom-request-wizard` — no separate include required. Also present on the demo page for reference.

| Modal name | Purpose | Trigger | Status |
|---|---|---|---|
| `order-action-modal` | DTF cart/checkout chooser — "Add to Cart" or "Proceed to Checkout" | Dispatched by `finish()` in wizard (DTF path only) | ✅ |

---

## Order Action Modal — `x-ui.order-action-modal`

**File:** `resources/views/components/ui/order-action-modal.blade.php`
**Opened by:** The wizard's `finish()` method — DTF path only. Dispatched automatically 220 ms after the wizard closes (to allow the close animation to finish before the modal opens).
**Trigger event:** `window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'order-action-modal', payload: buildPayload(), wizardStep: N, wizardTotalSteps: M } }))`

### Purpose

Final step of the DTF order path. Shown after the wizard closes, it presents the customer with two clear choices: save the transfer to their cart and keep shopping, or go directly to checkout. On confirm, it POSTs to `/custom-order/dtf-cart`, which resolves Lunar product variants from the wizard payload, adds them to the cart, saves the session, and records the submission to `custom_order_requests`.

---

### UI / Content

| Element | Detail |
|---|---|
| Header | Custom `$header` slot — linen background, 2px sunburst border-bottom, matching the wizard step header exactly. Shows "Cart or Checkout" heading, step counter ("Step N+1 of M+2 · DTF Transfers"), and ✕ close. |
| Order summary | Rendered only when `hasSummary` is true. When `dtfItems.length > 0`, iterates each item and shows type/size on one line and tier/price on the next. When no structured items are present but `dtfFileName` is set, shows a file icon and the filename. |
| Radio: Add to Cart | `value="cart"` — "Add to Your Cart — save this transfer to your cart and keep shopping." |
| Radio: Proceed to Checkout | `value="checkout"` — "Proceed to Checkout — go directly to checkout and complete your order now." |
| Inline error | `x-show="error"` — shown below the radios if the server returns a non-2xx response or the fetch throws. |
| Footer: ← Back | Raw `<button>` that dispatches `close-modal` for this modal and then fires `reopen-wizard` on `window`. The wizard listens for `@reopen-wizard.window` and calls its own `reopen()` method, which re-opens at the preserved step without resetting state. |
| Footer: primary CTA | `x-ui.button-modal-primary` — disabled until a radio is selected. Label cycles: "Confirm" (no selection) → "Add to Cart" (cart selected) → "Proceed to Checkout →" (checkout selected) → "Processing…" (submitting). |

**CSRF:** The CSRF token is baked into the `x-data` object at render time as `_csrf: '{{ csrf_token() }}'`. It is sent as the `X-CSRF-TOKEN` header on the fetch POST. There is no `<meta name="csrf-token">` tag in any layout — this inline bake is the required pattern for all DTF/modal fetch calls.

---

### Alpine state (`x-data`)

| Property | Default | Description |
|---|---|---|
| `_csrf` | Blade-baked `{{ csrf_token() }}` | Sent as `X-CSRF-TOKEN` header on POST |
| `choice` | `''` | `'cart'` or `'checkout'` — drives button state and POST body |
| `submitting` | `false` | True while fetch is in-flight; disables the primary CTA |
| `error` | `''` | Set on non-ok response or fetch exception; cleared on each new confirm attempt |
| `payload` | `{}` | Full wizard `buildPayload()` object, received from the `open-modal` event |
| `wizardStep` | `1` | Wizard's current step at the time `finish()` was called — used in the step counter |
| `wizardTotalSteps` | `1` | Wizard's `totalSteps` at finish — used in the step counter |

**Computed getters:**

| Getter | Returns |
|---|---|
| `dtfItems` | `payload.dtfItems` if it is a non-empty array; otherwise `[]` |
| `hasSummary` | `true` if `dtfItems.length > 0` or `payload.dtfFileName` is a non-empty string |

---

### `confirm()` — async fetch flow

```
User clicks primary CTA
  → guard: if no choice selected, or already submitting → return
  → submitting = true, error = ''
  → fetch POST /custom-order/dtf-cart
      headers: Content-Type: application/json, Accept: application/json, X-CSRF-TOKEN: _csrf
      body: JSON.stringify({ ...payload, action: choice })
  → await response.json()
  → if !res.ok → throw new Error(data.message || fallback)
  → dispatch close-modal { name: 'order-action-modal' }
  → if choice === 'checkout':
      window.location.href = '/checkout'
  → else (cart):
      window.dispatchEvent(new CustomEvent('cart-updated'))
      window.dispatchEvent(new CustomEvent('open-cart-drawer'))
  → on catch: this.error = err.message
  → finally: submitting = false
```

The `CartDrawer` Livewire component holds a `#[On('open-cart-drawer')]` listener — when the browser event fires, Livewire makes a server roundtrip to `openDrawer()`, which re-renders the component and calls `CartSession::current()` to load the freshly written session cart.

---

### POST endpoint — `CustomOrderController::dtfCart()`

**Route:** `POST /custom-order/dtf-cart` (named `custom-order.dtf-cart`)
**File:** `app/Http/Controllers/CustomOrderController.php`

#### Request validation

| Field | Rule |
|---|---|
| `action` | required, `cart` or `checkout` |
| `contactName` | required, string, max 255 |
| `contactEmail` | required, email, max 255 |
| `contactPhone` | required, string, max 50 |
| `dtfItems` | nullable, array |
| `dtfItems.*.type` | nullable, string, max 100 |
| `dtfItems.*.size` | nullable, string, max 50 |
| `dtfItems.*.tier` | nullable, string, max 50 |
| `dtfItems.*.price` | nullable, string, max 20 |
| `dtfItems.*.fileName` | nullable, string, max 255 |
| `dtfItems.*.quantity` | nullable, integer, min 1 |

#### Step 1 — Record submission

Before any cart work, a `CustomOrderRequest` record is created with:
- `reference` — `T5P-DTF-` + 8 random uppercase chars (e.g. `T5P-DTF-IGDBCM1B`)
- `order_type` — `dtf`
- `contact_name`, `contact_email`, `contact_phone` — from request
- `payload` — full raw request body stored as JSON
- `status` — `pending`
- `submitted_at` — `now()`

This write happens unconditionally, before variant resolution, so the lead is captured even if the cart add subsequently fails.

#### Step 2 — Variant resolution (two paths)

The controller branches based on whether `dtfItems` is populated.

**Path A — Pricing table flow (`dtfItems` array is non-empty)**

Each item in `dtfItems` carries `{ type, size, tier, price, quantity? }` from the pricing section. The controller calls `resolveDtfSku(type, size)` to derive the Lunar variant SKU:

1. Determine prefix from `type`:
   - Contains `'Neck'` → `DTF-NECK`
   - Contains `'Chest'` → `DTF-CHEST`
   - Otherwise → `DTF-IMG`
2. Detect large suffix: if `size` contains `'lg'` or `'(lg)'`, append `LG` at the end.
3. Normalize `size` using four successive `preg_replace` calls — **all with the `/u` (UTF-8) flag** so that multibyte Unicode chars (`″` U+2033, `×` U+00D7) are treated as single codepoints and not split into raw bytes (which would double the `X` separator):
   - Strip inch marks: `/[″'″"]/u` → `''`
   - Replace separator: `/\s*[×xX]\s*/u` → `'X'`
   - Strip parenthetical: `/\([^)]*\)/` → `''`
   - Strip non-alphanumeric: `/[^a-zA-Z0-9]/` → `''`
4. `strtoupper()` the result, append `LG` if large.

Full size → SKU normalization table:

| Input size | Normalized | Example full SKU |
|---|---|---|
| `2″ × 2″` | `2X2` | `DTF-NECK-2X2` |
| `4″ × 3″` | `4X3` | `DTF-CHEST-4X3` |
| `6″ × 6″` | `6X6` | `DTF-IMG-6X6` |
| `9″ × 11″` | `9X11` | `DTF-IMG-9X11` |
| `10″ × 10″ (lg)` | `10X10LG` | `DTF-IMG-10X10LG` |
| `12″ × 17″` | `12X17` | `DTF-IMG-12X17` |

> **Critical gotcha:** Without the `/u` flag, PHP PCRE treats `×` (0xC3 0x97) as two raw bytes. Both match the `[×xX]` class separately and each is replaced by `X`, producing `6XX6` instead of `6X6`. The `/u` flag is mandatory on both regexes that touch these characters.

Quantity per item: `item.quantity` if present; otherwise `tierMinQuantity(item.tier)` using the tier label:

| Tier label starts with | Quantity used |
|---|---|
| `250` | 250 |
| `100` | 100 |
| `50` | 50 |
| `15` | 15 |
| anything else | 1 |

**Path B — Manual wizard flow (`dtfItems` is empty)**

When the user came through the FAB/dropzone path (no pricing table selection), the wizard provides `dtfTypes` (toggle state) and `dtfQuantities` (tier per type). The controller iterates `['neckTag', 'chestImage', 'imageSize']` and for each enabled key calls `defaultSkuForType(key)`:

| Key | Default SKU |
|---|---|
| `neckTag` | `DTF-NECK-2X2` |
| `chestImage` | `DTF-CHEST-4X3` |
| `imageSize` | `DTF-IMG-5X5` |

The team confirms exact sizes when fulfilling the `CustomOrderRequest` record. Quantity is derived from the tier label via `tierMinQuantity()` (same table as Path A).

#### Step 3 — Early return if nothing resolved

If `$itemsToAdd` is empty after resolution (no variant found for any item), the controller returns **422** before touching the cart:

```json
{ "success": false, "message": "No matching transfer sizes were found. Please contact us directly to place your order." }
```

The modal's `catch` block surfaces this as `this.error` in the inline error bar. The modal stays open. No `CustomOrderRequest` record is deleted — the lead is already saved.

#### Step 4 — Cart get-or-create

```php
$cartId = $request->session()->get('lunar_cart');
$cart   = $cartId ? Cart::find($cartId) : null;

if (! $cart || $cart->hasCompletedOrders()) {
    $cart = Cart::create([
        'currency_id' => Currency::getDefault()->id,
        'channel_id'  => Channel::getDefault()->id,
    ]);
}
```

> **Why `$request->session()` and not `CartSession`?**
>
> Lunar registers `CartSessionInterface` as an `app->singleton()`. In Octane/FrankenPHP, that singleton persists across requests on the same worker. Its injected `SessionManager` can resolve a stale session `Store` cached from a previous request, causing `CartSession::use($cart)` to write the cart ID to the wrong session or for the write to be silently dropped. Using `$request->session()` is always bound to the current HTTP request's session by the `StartSession` middleware, regardless of worker state or singleton caching. **Do not use `CartSession` in plain HTTP controllers on this application.**

Cart is only created here (Step 4), after resolving items confirms there is something to add. Orphan empty carts are not created on variant-not-found failures.

#### Step 5 — Add items and save session

```php
foreach ($itemsToAdd as [$variantId, $qty]) {
    $variant = ProductVariant::find($variantId);
    if ($variant) {
        $cart->add($variant, max(1, min($qty, 9999)));
        $addedCount++;
    }
}

$request->session()->put('lunar_cart', $cart->id);
$request->session()->save();   // explicit flush before response — required for Octane
```

`->save()` is called explicitly to flush the session to disk/DB before the response is returned. Without it, in Octane the session write might not complete before the immediately-following Livewire `open-cart-drawer` AJAX request reads the session, causing the cart drawer to appear empty.

Quantity is clamped to `[1, 9999]`. The seeded DTF variants all have `stock: null` and `purchasable: always`, so no stock guard is triggered.

#### Response

On success:
```json
{ "success": true, "reference": "T5P-DTF-IGDBCM1B", "addedCount": 2 }
```

On variant-not-found (422):
```json
{ "success": false, "message": "No matching transfer sizes were found. Please contact us directly to place your order." }
```

---

### Lunar product structure

DTF transfer products are seeded by `database/seeders/DtfProductSeeder.php`. Each (type + size) combination is a distinct Lunar `Product` with a single `ProductVariant` and five `Price` records (one per quantity tier). The full SKU list:

**Neck Tags (`DTF-NECK-*`):** `DTF-NECK-2X2`, `DTF-NECK-3X3`

**Left / Right Chest (`DTF-CHEST-*`):** `DTF-CHEST-3X2`, `DTF-CHEST-3X3`, `DTF-CHEST-4X2`, `DTF-CHEST-4X3`, `DTF-CHEST-4X4`, `DTF-CHEST-5X3`

**Image Sizes (`DTF-IMG-*`):** `DTF-IMG-5X5`, `DTF-IMG-6X6`, `DTF-IMG-7X7`, `DTF-IMG-8X8`, `DTF-IMG-9X9`, `DTF-IMG-9X11`, `DTF-IMG-10X10`, `DTF-IMG-10X10LG`, `DTF-IMG-11X5`, `DTF-IMG-11X11`, `DTF-IMG-11X14`, `DTF-IMG-12X17`

Each variant has five price-break records using Lunar's `min_quantity` field:

| Tier label | `min_quantity` |
|---|---|
| 1 – 14 pcs | 1 |
| 15 – 49 pcs | 15 |
| 50 – 99 pcs | 50 |
| 100 – 249 pcs | 100 |
| 250+ pcs | 250 |

Lunar selects the correct price at checkout automatically by finding the highest `min_quantity` that does not exceed the line quantity. All DTF variants are `purchasable: always`, `shippable: false`, `stock: null`.

---

### On success — client-side behavior

| User choice | What happens |
|---|---|
| **Add to Cart** | `close-modal` fired → `cart-updated` fired on `window` → `open-cart-drawer` fired on `window` → CartDrawer Livewire component's `#[On('open-cart-drawer')]` triggers `openDrawer()` server roundtrip → component re-renders reading `lunar_cart` from session → drawer opens showing the newly added items |
| **Proceed to Checkout** | `close-modal` fired → `window.location.href = '/checkout'` → browser navigates; Lunar checkout reads `lunar_cart` from session |

---

### Usage

```blade
{{-- x-ui.order-action-modal is bundled automatically at the bottom of x-ui.custom-request-wizard --}}
<x-ui.contact-modal />
<x-ui.custom-request-wizard />
```

No additional include needed. For standalone demo use, include `<x-ui.order-action-modal />` directly.

---

## Stripe Checkout Modal — `x-ui.stripe-checkout-modal` (demo only)

**File:** `resources/views/components/ui/stripe-checkout-modal.blade.php`
**Status:** No longer used by the wizard. Retained as a standalone component for demo page reference only.

The wizard previously used this modal to bridge to a Stripe-hosted checkout after submission. That pattern has been replaced by `x-ui.order-action-modal` + the Lunar cart flow. The Stripe modal file is kept intact and demonstrated on `/demo/modals` but is not bundled with `x-ui.custom-request-wizard` anymore.
