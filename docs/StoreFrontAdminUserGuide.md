# StoreFront Admin User Guide

**Platform:** Top 5 Percent White-Label Multi-Tenant Storefront
**Admin Panel:** Lunar Hub — `/hub`
**Last Updated:** April 2026

---

## Table of Contents

1. [System Overview](#1-system-overview)
2. [Accessing the Admin Panel](#2-accessing-the-admin-panel)
3. [Managing Stores](#3-managing-stores)
4. [Store Configuration Tabs](#4-store-configuration-tabs)
   - [Identity](#41-identity-tab)
   - [Branding — Logo & Nav](#42-branding-tab)
   - [Branding — Colors & Fonts](#43-colors--typography)
   - [Announcement Banner](#44-banner-tab)
   - [Features](#45-features-tab)
   - [Events & Countdowns](#46-events-tab)
   - [Roster / Photo Grid](#47-roster-tab)
5. [Section Layout Templates](#5-section-layout-templates)
6. [Navigation Layout Options](#6-navigation-layout-options)
7. [Super Admin Tools](#7-super-admin-tools)
   - [Global CSS Overrides](#71-global-css-overrides)
   - [Bulk Inventory](#72-bulk-inventory)
8. [CSS Variables Reference](#8-css-variables-reference)
9. [Store URL Preview](#9-store-url-preview)

---

## 1. System Overview

Each client gets their own fully isolated storefront hosted at:

```
{subdomain}.dreamstudiosolutions.com
```

For example: `lincoln-high.dreamstudiosolutions.com`

Every store is independently branded — it has its own logo, color palette, font, product catalog (Lunar Channel), and page sections. All configuration is managed from a single admin panel at `/hub`.

```
┌─────────────────────────────────────────────────────────────────┐
│                        /hub  (Admin)                            │
│                                                                 │
│   ┌─────────────────────────────────────────────────────────┐   │
│   │  Storefronts                                            │   │
│   │  ├── Stores            ← Create / Edit tenant stores    │   │
│   │  ├── Global CSS        ← Inject CSS patches site-wide   │   │
│   │  └── Bulk Inventory    ← Stock control across channels  │   │
│   └─────────────────────────────────────────────────────────┘   │
│                                                                 │
│   Each store resolves to its own public URL via subdomain:      │
│                                                                 │
│   lincoln-high.dreamstudiosolutions.com  →  Store A             │
│   booster-club.dreamstudiosolutions.com  →  Store B             │
│   acme-corp.dreamstudiosolutions.com     →  Store C             │
└─────────────────────────────────────────────────────────────────┘
```

---

## 2. Accessing the Admin Panel

| URL | Purpose |
|-----|---------|
| `https://hub.dreamstudiosolutions.com/hub` | Main admin panel (Lunar Hub) |
| `https://{subdomain}.dreamstudiosolutions.com` | Live storefront |

**Login accounts:**

| Email | Role |
|-------|------|
| `admin@top5pct.com` | Super Admin |
| `admin@top5percent.com` | Super Admin |

---

## 3. Managing Stores

Navigate to **Storefronts → Stores** in the left sidebar.

### Store List View

The table displays all tenant stores with:

| Column | Description |
|--------|-------------|
| **Name** | Human-readable store name |
| **Subdomain** | Full URL shown (e.g. `lincoln-high.dreamstudiosolutions.com`) — click to copy |
| **Type** | Badge: School, Corporate, Fundraiser, or General |
| **Active** | Green check = live; Red X = disabled |
| **Created** | Date the store was created |

**Row Actions:**
- **Edit** — Opens the store configuration form
- **Visit Store** — Opens the live storefront in a new tab

---

## 4. Store Configuration Tabs

Click **Edit** on any store to open the tabbed configuration form.

---

### 4.1 Identity Tab

Core store identity settings. All fields here are required.

| Field | Type | Description |
|-------|------|-------------|
| **Name** | Text | The store's display name (e.g. "Lincoln High Spirit Shop") |
| **Subdomain** | Text | URL slug — only letters, numbers, and dashes. Sets the live URL. |
| **Lunar Channel** | Select | Links the store to a product catalog. Only products assigned to this channel appear in the store. |
| **Store Type** | Select | Affects default section behavior and tagging |
| **Store is Active** | Toggle | Instantly takes the storefront live or offline |

**Store Types:**

| Value | Label | Best For |
|-------|-------|----------|
| `school` | School / Spirit Wear | K-12, booster clubs, cheer/sports |
| `corporate` | Corporate / Business | Uniforms, branded merch, promo items |
| `fundraiser` | Fundraiser / Booster | Fundraiser pop-ups, limited-window stores |
| `general` | General | Catch-all for mixed or custom use |

> **Subdomain rules:** Only use lowercase letters, numbers, and hyphens. No spaces. No dots.
> Example: `lincoln-high` becomes `lincoln-high.dreamstudiosolutions.com`

---

### 4.2 Branding Tab

Controls the store's visual identity — logo, navigation layout, colors, and typography.

#### Logo Upload

- Upload any image (PNG, JPG, SVG recommended)
- Stored at `storage/app/public/store-logos/`
- Displays in the storefront header at all times

#### Logo / Nav Position

Controls where the logo sits in the navigation bar:

| Value | Label | Description |
|-------|-------|-------------|
| `left` | Logo Left (default) | Logo on the far left, nav links to the right |
| `center` | Logo Centered | Logo centered, nav links flanking it |
| `right` | Logo Right | Logo on the far right, nav links to the left |

See [Section 6 — Navigation Layout Options](#6-navigation-layout-options) for visual diagrams.

---

### 4.3 Colors & Typography

#### Theme Colors

Three color slots are available. All three are injected into the storefront as CSS custom properties.

| Field | CSS Variable | Default | Purpose |
|-------|-------------|---------|---------|
| **Primary Color** | `--brand-primary` | `#2C2C2C` | Main backgrounds, headers, dominant UI elements |
| **Secondary Color** | `--brand-secondary` | `#FFC20E` | Buttons, highlights, calls-to-action |
| **Accent Color** | `--brand-accent` | `#3273DC` | Links, badges, hover states |

Use the color picker or type in a hex code directly.

#### Typography

| Field | Description |
|-------|-------------|
| **Font** | Select from the curated list below |
| **Custom Font Override** | Enter any valid Google Fonts name to override the selection (e.g. `Nunito`) |

**Available Fonts:**

| Option Key | Label | Character |
|------------|-------|-----------|
| `Inter` | Modern (Inter) | Clean, readable, neutral — good default |
| `Roboto` | Professional (Roboto) | Familiar, corporate-safe |
| `Merriweather` | Authoritative (Merriweather) | Serif — serious, editorial |
| `Titillium Web` | Branded (Titillium Web) | Tech-forward, geometric |
| `Oswald` | Sporty (Oswald) | Condensed, athletic energy |
| `Playfair Display` | Elegant (Playfair Display) | High-end, fashion-forward |

> The **Custom Font Override** field accepts any name from [fonts.google.com](https://fonts.google.com).
> If set, it replaces the Font dropdown selection entirely.

---

### 4.4 Banner Tab

Controls a site-wide announcement strip that appears above the navigation.

| Field | Type | Description |
|-------|------|-------------|
| **Show Announcement Banner** | Toggle | Turns the banner on or off |
| **Banner Message** | Text (max 255 chars) | The message shown to all visitors |

> The banner field is hidden until the toggle is enabled.
> Use this for deadlines, sale announcements, store open/close windows.

---

### 4.5 Features Tab

Enables or disables major optional modules. Only enabled features are rendered in the storefront.

| Key | Label | What It Does |
|-----|-------|--------------|
| `calendar` | Event Calendar | Shows a full event listing section on applicable pages |
| `countdown` | Event Countdown Timer | Displays a live countdown clock to the next scheduled event |
| `roster` | Roster / Photo Grid | Shows a photo grid of team members, staff, or participants |

> These act as global on/off switches. An event or roster section will not render if its
> corresponding feature is not checked here, even if the page layout includes it.

---

### 4.6 Events Tab

Manages the event list that powers both the calendar section and countdown timers.
Each event is an independent row. Add as many events as needed.

**Per-Event Fields:**

| Field | Type | Description |
|-------|------|-------------|
| **Event Name** | Text | Required. Displayed as the event title |
| **Date & Time** | DateTime | Required. Used for sorting and countdown calculation |
| **Location** | Text | Optional. Shown beneath the event name |
| **Show Countdown** | Toggle | If on, this event drives the countdown timer section |

> Only one event should have **Show Countdown** enabled at a time.
> The countdown timer always targets the nearest enabled event by date.

---

### 4.7 Roster Tab

Manages a photo grid of people — team members, staff, grade classes, departments.

**Per-Person Fields:**

| Field | Type | Description |
|-------|------|-------------|
| **Photo** | Image | Uploaded to `storage/app/public/store-roster/` |
| **Name** | Text | Required. Displayed below the photo |
| **Grade / Department** | Text | Optional sub-label (e.g. "Grade 5" or "Marketing Team") |

> The grid renders in 2-column layout by default and is fully responsive.

---

## 5. Section Layout Templates

Each storefront page is built from an ordered stack of **sections**. The sections array is stored in the `store_pages` table and determines what the visitor sees and in what order.

Available section keys and their visual layout:

---

### `hero`

Full-width image banner with overlay headline and call-to-action button.

```
┌─────────────────────────────────────────────────────────────────┐
│░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░│
│░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░│
│░░░░░░░░░░         STORE HEADLINE GOES HERE          ░░░░░░░░░░░│
│░░░░░░░░░░       Supporting tagline or message       ░░░░░░░░░░░│
│░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░│
│░░░░░░░░░░░░░░░░░░  [ Shop Now → ]  ░░░░░░░░░░░░░░░░░░░░░░░░░░░░│
│░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░│
│░░░░░░░░░░░░░░░░░░░░ Full-width background image ░░░░░░░░░░░░░░░│
└─────────────────────────────────────────────────────────────────┘
  100% viewport width — full bleed, 100vh default height
```

---

### `banner`

A slim announcement strip. Driven by the **Banner Tab** toggle and message.

```
┌─────────────────────────────────────────────────────────────────┐
│  ★  Orders close Friday at midnight — Don't miss out!  ★       │
└─────────────────────────────────────────────────────────────────┘
  Secondary color background — single line of text — full width
```

---

### `catalog`

The main product grid powered by the Lunar Channel assigned to this store.
Includes facet filtering, search, and pagination.

```
┌─────────────────────────────────────────────────────────────────┐
│  Shop Products                              [ 🔍 Search... ]    │
│  ─────────────────────────────────────────────────────────────  │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐             │
│  │  [  img  ]  │  │  [  img  ]  │  │  [  img  ]  │             │
│  │  Product A  │  │  Product B  │  │  Product C  │             │
│  │   $22.00    │  │   $18.50    │  │   $30.00    │             │
│  │ [Add to Cart│  │ [Add to Cart│  │ [Add to Cart│             │
│  └─────────────┘  └─────────────┘  └─────────────┘             │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐             │
│  │  [  img  ]  │  │  [  img  ]  │  │  [  img  ]  │             │
│  │  Product D  │  │  Product E  │  │  Product F  │             │
│  │   $15.00    │  │   $25.00    │  │   $12.00    │             │
│  │ [Add to Cart│  │ [Add to Cart│  │ [Add to Cart│             │
│  └─────────────┘  └─────────────┘  └─────────────┘             │
│                                                                 │
│                   ◀ 1  2  3 ... ▶                               │
└─────────────────────────────────────────────────────────────────┘
  3-column responsive grid — collapses to 1-col on mobile
  Only renders products from the assigned Lunar Channel
```

---

### `countdown`

A live countdown clock targeting the nearest event with **Show Countdown** enabled.
Requires the `countdown` feature to be toggled on under the **Features** tab.

```
┌─────────────────────────────────────────────────────────────────┐
│                                                                 │
│              Spring Spirit Week Ends In...                      │
│                                                                 │
│   ┌────────┐    ┌────────┐    ┌────────┐    ┌────────┐         │
│   │   03   │    │   14   │    │   22   │    │   08   │         │
│   │  DAYS  │    │ HOURS  │    │  MIN   │    │  SEC   │         │
│   └────────┘    └────────┘    └────────┘    └────────┘         │
│                                                                 │
│                   Friday, May 9 · Gymnasium                     │
│                                                                 │
└─────────────────────────────────────────────────────────────────┘
  Updates live in the browser — no page refresh needed
  Disappears automatically when the target date passes
```

---

### `events`

A full event listing card grid. Shows all events in date order.
Requires the `calendar` feature to be toggled on under the **Features** tab.

```
┌─────────────────────────────────────────────────────────────────┐
│  Upcoming Events                                                │
│  ─────────────────────────────────────────────────────────────  │
│  ┌─────────────────────────────┐  ┌──────────────────────────┐  │
│  │ MAY  │ Spirit Night         │  │ MAY  │ Jersey Order Due  │  │
│  │  9   │ Friday, 6:00 PM      │  │  15  │ Last day to order │  │
│  │      │ Gymnasium            │  │      │ Online only       │  │
│  └─────────────────────────────┘  └──────────────────────────┘  │
│  ┌─────────────────────────────┐  ┌──────────────────────────┐  │
│  │ JUN  │ End of Year Parade   │  │ JUN  │ Pickup Day        │  │
│  │  3   │ Tuesday, 10:00 AM    │  │  12  │ Front office      │  │
│  │      │ Main Hallway         │  │      │ 8AM – 3PM         │  │
│  └─────────────────────────────┘  └──────────────────────────┘  │
└─────────────────────────────────────────────────────────────────┘
  2-column card grid — sorted ascending by event_date
```

---

### `roster`

A photo grid of team members, staff, or participants.
Requires the `roster` feature to be toggled on under the **Features** tab.

```
┌─────────────────────────────────────────────────────────────────┐
│  Meet The Team                                                  │
│  ─────────────────────────────────────────────────────────────  │
│  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐          │
│  │  [  photo  ] │  │  [  photo  ] │  │  [  photo  ] │          │
│  │  Jordan T.   │  │  Casey M.    │  │  Riley K.    │          │
│  │   Grade 5    │  │   Grade 5    │  │  Marketing   │          │
│  └──────────────┘  └──────────────┘  └──────────────┘          │
│  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐          │
│  │  [  photo  ] │  │  [  photo  ] │  │  [  photo  ] │          │
│  │  Alex R.     │  │  Sam W.      │  │  Drew P.     │          │
│  │   Grade 6    │  │   Grade 6    │  │  Coaching    │          │
│  └──────────────┘  └──────────────┘  └──────────────┘          │
└─────────────────────────────────────────────────────────────────┘
  3-column grid — name and meta label below each photo
```

---

### Section Ordering

The `sections` array in the database controls both which sections appear and the order they render top-to-bottom on the page. Example home page layout:

```json
["banner", "hero", "countdown", "catalog", "events", "roster"]
```

The page renders those sections in that exact sequence:

```
┌──────────────────────────────────┐
│  NAVIGATION + LOGO               │  ← Always present (not a section)
├──────────────────────────────────┤
│  banner   ← slim announcement    │
├──────────────────────────────────┤
│  hero     ← full-width image     │
├──────────────────────────────────┤
│  countdown ← live timer          │
├──────────────────────────────────┤
│  catalog  ← product grid         │
├──────────────────────────────────┤
│  events   ← event cards          │
├──────────────────────────────────┤
│  roster   ← photo grid           │
├──────────────────────────────────┤
│  FOOTER                          │  ← Always present (not a section)
└──────────────────────────────────┘
```

---

## 6. Navigation Layout Options

The **Logo Position** setting in the Branding tab controls the header layout.

### `left` — Logo Left (Default)

Best for most stores. Logo anchors the left; nav links flow right.

```
┌─────────────────────────────────────────────────────────────────┐
│  [LOGO]   Home   Shop   Events   About         🛒 Cart (2)      │
└─────────────────────────────────────────────────────────────────┘
```

---

### `center` — Logo Centered

Premium feel. Nav links wrap around a centered logo.

```
┌─────────────────────────────────────────────────────────────────┐
│  Home   Shop         [LOGO]         Events   About   🛒 Cart    │
└─────────────────────────────────────────────────────────────────┘
```

---

### `right` — Logo Right

Uncommon but available. Nav links left, logo anchors right.

```
┌─────────────────────────────────────────────────────────────────┐
│  🛒 Cart   Home   Shop   Events   About             [LOGO]      │
└─────────────────────────────────────────────────────────────────┘
```

---

## 7. Super Admin Tools

Accessible via **Storefronts** in the left sidebar. These affect all stores.

---

### 7.1 Global CSS Overrides

**Path:** Storefronts → Global CSS Overrides

Inject raw CSS into every storefront simultaneously without a code deploy.
Use this to hotfix layout issues, apply brand corrections, or test style changes
across all tenants instantly.

**Fields:**

| Field | Description |
|-------|-------------|
| **Name** | Internal label for the override (e.g. "Fix nav gap – April 2026") |
| **Target Component** | Optional. For your reference only — does not filter injection. |
| **CSS** | Raw CSS block injected into the `<head>` of every storefront |
| **Active** | Toggle to enable or disable the override without deleting it |

**Example:**

```css
.store-nav {
    padding-top: 4px;
}

.catalog-grid {
    gap: 1.5rem;
}
```

> Changes take effect immediately — the cache is cleared automatically on save or delete.
> Disable (toggle off) rather than delete if you may need the override again.

---

### 7.2 Bulk Inventory

**Path:** Storefronts → Bulk Inventory

Marks a product variant as out of stock or back in stock across every store channel
that carries it — in a single action. Useful for sold-out items or re-stocks.

**Fields:**

| Field | Options | Description |
|-------|---------|-------------|
| **Product** | Searchable dropdown | Select the Lunar product |
| **Variant** | Searchable dropdown | Appears after a product is selected |
| **Action** | Out of Stock / Restore In Stock | Sets quantity to `0` or `99` |

> Click **Apply to All Stores** — a confirmation modal will appear before processing.
> The update runs as a background job (`BulkUpdateInventoryJob`).
> This affects every channel carrying the variant — it cannot be scoped to a single store.

---

## 8. CSS Variables Reference

These variables are available in any Global CSS Override or custom theme stylesheet.
They are set per-store from the Branding tab color pickers.

| Variable | Set By | Default | Usage |
|----------|--------|---------|-------|
| `--brand-primary` | Primary Color | `#2C2C2C` | Backgrounds, headers, dominant elements |
| `--brand-secondary` | Secondary Color | `#FFC20E` | Buttons, CTAs, highlights |
| `--brand-accent` | Accent Color | `#3273DC` | Links, badges, hover states |

**Usage example in a Global CSS Override:**

```css
.hero-section {
    background-color: var(--brand-primary);
    border-bottom: 4px solid var(--brand-secondary);
}

a:hover {
    color: var(--brand-accent);
}
```

---

## 9. Store URL Preview

From the **Storefronts → Stores** table, any store can be previewed directly:

- Click the **Visit Store** button (arrow icon) on any row — opens the live URL in a new tab.
- The **Subdomain** column is copyable — click it to copy the full URL to clipboard.

You can also preview a store before DNS is set up using the preview route:

```
https://dreamstudiosolutions.com/preview/{subdomain}
```

This renders the full storefront in context using the subdomain's settings without requiring a real DNS subdomain to be configured — useful during client onboarding and QA.

---

*For developer documentation on the middleware, routing, and Lunar integration, see `docs/white-labeling.md`.*
