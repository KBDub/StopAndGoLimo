# Branding Requirements
## Top 5 Percent Custom Signage & Apparel

---

## Brand Overview

A premium custom signage and apparel business requiring a high-end, sophisticated digital presence that conveys quality craftsmanship and luxury aesthetics. The brand identity should appeal to discerning clients seeking custom business signage, promotional products, and branded apparel.

---

## Component Architecture (MANDATORY)

All HTML elements must use Laravel Blade Components with the `x-` prefix syntax.

### Component Usage Rules

1. **All pages must use Blade components** - No inline HTML for reusable elements
2. **Component naming convention:** `x-<type>.<name>` (e.g., `x-layout.navigation-bar`)
3. **Props must be typed** - Use `@props` directive for all component parameters
4. **SSR-enabled** - All components render server-side for SEO

### Component Naming Conventions (MANDATORY)

| Component Type | Naming Pattern | Example |
|----------------|----------------|---------|
| **Sections** | `x-sections.<name>` | `x-sections.hero`, `x-sections.our-services` |
| **CTA Sections** | `x-sections.cta-<name>` | `x-sections.cta-ready-to-get-started` |
| **Layout** | `x-layout.<name>` | `x-layout.navigation-bar`, `x-layout.footer` |
| **UI Elements** | `x-ui.<name>` | `x-ui.button-charcoal-gold` |

### Standard Section Padding

**All sections use `py-10` for vertical padding.**

```blade
<section class="py-10 bg-white">
    <!-- Section content -->
</section>
```

### Required Layout Components

| Component | Usage | File Path |
|-----------|-------|-----------|
| `x-layout.top-notification-bar` | Deal of the day, promotions | `resources/views/components/layout/top-notification-bar.blade.php` |
| `x-layout.navigation-bar` | Main site navigation | `resources/views/components/layout/navigation-bar.blade.php` |
| `x-layout.footer` | Site footer | `resources/views/components/layout/footer.blade.php` |

### Section Components

| Component | Usage | File Path |
|-----------|-------|-----------|
| `x-sections.hero` | Hero banner | `resources/views/components/sections/hero.blade.php` |
| `x-sections.our-services` | Services grid | `resources/views/components/sections/our-services.blade.php` |
| `x-sections.why-choose-us` | Trust badges | `resources/views/components/sections/why-choose-us.blade.php` |
| `x-sections.design-it-yourself` | Design tool promo | `resources/views/components/sections/design-it-yourself.blade.php` |
| `x-sections.cta-ready-to-get-started` | Contact CTA | `resources/views/components/sections/cta-ready-to-get-started.blade.php` |

### UI Button Components

| Component | Normal State | Hover State |
|-----------|--------------|-------------|
| `x-ui.button-charcoal-gold` | Charcoal bg, Gold text | Dark Charcoal bg |
| `x-ui.button-white-charcoal` | White bg, Charcoal text | Linen bg, Blue text |
| `x-ui.button-gold-white` | Gold bg, White text | Dark Gold bg |
| `x-ui.button-blue-white` | Blue bg, White text | Dark Blue bg |

### Example Page Structure

```blade
<body>
    <x-layout.top-notification-bar message="Free Shipping on Orders Over $50!" />
    <x-layout.navigation-bar currentPage="home" />
    
    <main>
        <x-sections.hero />
        <x-sections.our-services />
        <x-sections.why-choose-us />
        <x-sections.design-it-yourself />
        <x-sections.cta-ready-to-get-started />
    </main>
    
    <x-layout.footer />
</body>
```

Reference: [Laravel Blade Components Documentation](https://laravel.com/docs/11.x/blade#components)

---

## Color Palette

The palette consists of **5 core brand colors + white**, each with up to 3 variants (light, default, dark), plus **3 semantic colors** for functional UI states.

### Core Brand Colors (5 + White)

#### Olive
Headline lead-in text, subheadings, accent text

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Default | Olive | `#A39822` | 163, 152, 34 | 55°, 65%, 39% |

#### Sunburst Gold
Primary CTAs, brand moments, accents, creative sections

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Light | Sunburst Light | `#FFD93D` | 255, 217, 61 | 48°, 100%, 62% |
| Default | Sunburst Gold | `#FFC20E` | 255, 194, 14 | 45°, 100%, 53% |
| Dark | Sunburst Dark | `#E6A500` | 230, 165, 0 | 43°, 100%, 45% |

#### Azure Blue
Secondary CTAs, links, professional sections, informational badges

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Light | Azure Light | `#5A9AE8` | 90, 154, 232 | 213°, 77%, 63% |
| Default | Azure Blue | `#3273DC` | 50, 115, 220 | 217°, 72%, 53% |
| Dark | Azure Dark | `#2558A8` | 37, 88, 168 | 217°, 64%, 40% |

#### Soft Linen
Hero section, main backgrounds, breathing room, footer background

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Light | Linen Light | `#FAF9F5` | 250, 249, 245 | 48°, 33%, 97% |
| Default | Soft Linen | `#F2F0E6` | 242, 240, 230 | 50°, 27%, 93% |
| Dark | Linen Dark | `#E8E5D8` | 232, 229, 216 | 48°, 28%, 88% |

#### Charcoal
Navigation bar background, all body text and headers

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Light | Charcoal Light | `#555555` | 85, 85, 85 | 0°, 0%, 33% |
| Default | Charcoal | `#2C2C2C` | 44, 44, 44 | 0°, 0%, 17% |
| Dark | Charcoal Dark | `#1A1A1A` | 26, 26, 26 | 0°, 0%, 10% |

#### White
Cards, containers, alternating backgrounds

| Variant | Name | Hex Code | RGB | HSL |
|---------|------|----------|-----|-----|
| Default | White | `#FFFFFF` | 255, 255, 255 | 0°, 0%, 100% |

### Semantic Colors (3)

| Color | Hex Code | RGB | HSL | Usage |
|-------|----------|-----|-----|-------|
| Success | `#4CAF50` | 76, 175, 80 | 122°, 39%, 49% | Form success states, confirmations |
| Warning | `#F9A825` | 249, 168, 37 | 37°, 95%, 56% | Warning notifications, cautions |
| Error | `#C62828` | 198, 40, 40 | 0°, 66%, 47% | Form errors, alerts, destructive actions |

### Color Hierarchy

1. **Sunburst Gold (#FFC20E):** Primary brand color - Primary CTAs, brand moments, accents
2. **Azure Blue (#3273DC):** Secondary brand color - Secondary CTAs, links, professional sections, informational badges
3. **Soft Linen (#F2F0E6):** Background color - Hero section, main backgrounds, breathing room
4. **Charcoal (#2C2C2C):** Text and navigation color - All body text, headers, navigation bar background
5. **White (#FFFFFF):** Container color - Cards, containers, alternating backgrounds

### Section Background Rules

- **Primary Section Background:** Soft Linen `#F2F0E6`
- **Alternate Section Background:** White `#FFFFFF`
- **Content Sections:** Alternate between Soft Linen and White

### Navigation Bar Requirements (MANDATORY)

**Navigation bar uses Charcoal (#2C2C2C) background with white text.**

- **Navigation Background:** Charcoal `#2C2C2C`
- **Navigation Text:** White `#FFFFFF`
- **Navigation Active Link:** Sunburst Gold `#FFC20E`
- **Navigation Hover:** Sunburst Light `#FFD93D`

### Footer Requirements (MANDATORY)

**Footer uses Soft Linen (#F2F0E6) background.**

- **Footer Background:** Soft Linen `#F2F0E6`
- **Footer Text:** Charcoal `#2C2C2C`
- **Footer Links:** Azure Blue `#3273DC`
- **Footer Link Hover:** Azure Dark `#2558A8`

### Hero Section Requirements

**Hero section uses White (#FFFFFF) background.**

- **Hero Background:** White `#FFFFFF`
- **Hero Headline:** Charcoal `#2C2C2C`
- **Hero Subheadline/Lead-in:** Olive `#A39822`
- **Hero Primary CTA:** Charcoal background, Gold text
- **Hero Secondary CTA:** White background, Charcoal text with border

### Text Color Guidelines

- **On Soft Linen (#F2F0E6):** Use Charcoal `#2C2C2C` for body text
- **On White (#FFFFFF):** Use Charcoal `#2C2C2C` for body text
- **On Sunburst Gold (#FFC20E):** Use Charcoal `#2C2C2C` for maximum contrast
- **On Azure Blue (#3273DC):** Use White `#FFFFFF` for buttons and headers
- **Links on light backgrounds:** Use Azure Blue `#3273DC`, hover Azure Dark `#2558A8`

---

## Typography

### Font Families

**Primary Font:** `"Titillium Web", sans-serif`
- Use for: All headings (H1-H5), body text, navigation, buttons, forms
- Weights: 300 (Light), 400 (Regular), 600 (SemiBold), 700 (Bold)
- Source: Google Fonts
- Style: Modern, technical sans-serif with excellent readability

**Fallback Stack:** `"Titillium Web", Arial, sans-serif`

### Font Import
```css
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap');
```

### Typography Scale

| Element | Font | Size (Desktop) | Size (Mobile) | Weight | Line Height | Letter Spacing |
|---------|------|----------------|---------------|--------|-------------|----------------|
| H1 | Titillium Web | 32px | 28px | 700 | 1.2 | 0em |
| H2 | Titillium Web | 24px | 22px | 700 | 1.3 | 0em |
| H3 | Titillium Web | 20px | 18px | 600 | 1.3 | 0em |
| H4 | Titillium Web | 18px | 16px | 600 | 1.4 | 0em |
| H5 | Titillium Web | 16px | 15px | 600 | 1.4 | 0.01em |
| Body Large | Titillium Web | 18px | 16px | 400 | 1.7 | 0em |
| Body | Titillium Web | 16px | 15px | 400 | 1.6 | 0em |
| Body Small | Titillium Web | 14px | 13px | 400 | 1.5 | 0.01em |
| Caption | Titillium Web | 12px | 11px | 400 | 1.4 | 0.02em |
| Button | Titillium Web | 14px | 13px | 600 | 1 | 0.05em |
| Nav Link | Titillium Web | 14px | 13px | 600 | 1 | 0.02em |

---

## Brand Voice & Messaging

### Tone Characteristics
- **Professional:** Convey expertise and reliability
- **Refined:** Sophisticated language without being pretentious
- **Confident:** Assertive but approachable
- **Quality-focused:** Emphasize craftsmanship and attention to detail

### Key Messaging Pillars
1. **Craftsmanship:** Highlighting quality materials and techniques
2. **Customization:** Tailored solutions for every client
3. **Reliability:** Fast turnaround without compromising quality
4. **Local Excellence:** Community-focused, personal service

---

## Logo Usage Guidelines

### Clear Space
- Minimum clear space around logo: Height of the "5" character on all sides
- Never crowd the logo with other elements

### Minimum Size
- Print: 1 inch width minimum
- Digital: 120px width minimum

### Color Variants
- Primary: White on dark backgrounds
- Secondary: Charcoal (#2C2C2C) on light backgrounds
- Accent: Sunburst Gold (#FFC20E) for premium applications

### Logo Asset
- **Source:** `https://top5pct.com/images/footer-images-top5percent-joliet/top5-logo.gif`

---

## Imagery Style

### Photography Direction
- High-contrast, editorial-style product photography
- Clean, uncluttered backgrounds (white, black, or neutral)
- Dramatic lighting emphasizing texture and detail
- Lifestyle shots showing products in professional contexts

### Image Treatment
- Subtle desaturation for cohesive look
- High clarity and sharpness
- Consistent color grading across all imagery
- Shadows should be deep but retain detail

### Do's
- Use high-resolution images (minimum 2x for retina)
- Maintain consistent aspect ratios within galleries
- Show products from multiple angles
- Include close-up detail shots

### Don'ts
- Avoid busy or distracting backgrounds
- No low-quality or pixelated images
- Avoid over-saturated colors
- No stock photos that look generic

---

## Visual References

### Inspiration Sources
1. **KITH** - Minimalist product presentation, clean grid layouts
2. **A-COLD-WALL** - Industrial luxury aesthetic, bold typography
3. **Top5pct.com** - Local business authenticity with premium feel
4. **Hypebeast** - Editorial product showcases
5. **END Clothing** - Sophisticated e-commerce UX

### Mood Keywords
- Minimalist
- Premium
- Sophisticated
- Clean
- Modern
- Professional
- Refined
- Elevated

---

## Semantic HTML Requirements

### Heading Hierarchy (H2-H5 Preference)
- **Use heading tags (H2-H5) instead of generic `<p>` tags** for all text that serves as a title, label, or section identifier
- Reserve `<p>` tags strictly for body paragraph content
- This improves SEO, accessibility, and document structure

| Element | Tag | Usage |
|---------|-----|-------|
| Page Title | `<h1>` | One per page, main page title only |
| Section Titles | `<h2>` | Major sections (Services, Products, About) |
| Subsection Titles | `<h3>` | Card titles, feature headings |
| Item Labels | `<h4>` | Product names, testimonial names |
| Minor Headings | `<h5>` | Captions with emphasis, small labels |
| Body Text | `<p>` | Paragraphs of descriptive content only |

### Example Structure
```html
<section>
    <h2>Our Services</h2>
    <div class="service-card">
        <h3>Custom Signage</h3>
        <h4>Business Signs</h4>
        <p>High-quality materials for lasting impressions.</p>
    </div>
</section>
```

---

## Button Styles

| Type | Background | Text | Border | Padding |
|------|------------|------|--------|---------|
| Primary | Sunburst Gold (#FFC20E) | Charcoal (#2C2C2C) | None | 16px 32px |
| Secondary | Azure Blue (#3273DC) | White (#FFFFFF) | None | 16px 32px |
| Tertiary | Transparent | Charcoal (#2C2C2C) | 1px Charcoal (#2C2C2C) | 16px 32px |
| Link Button | Transparent | Azure Blue (#3273DC) | None | 8px 0 |

### Button States
- **Hover:** Slight scale (1.02) + shadow increase
- **Active:** Scale (0.98) + deeper shadow
- **Disabled:** 50% opacity, no pointer events
- **Focus:** 2px Azure Blue (#3273DC) outline for accessibility

---

## Form Element Styles

- **Input Height:** 48px
- **Border:** 1px solid Border Gray (#E0E0E0)
- **Border Focus:** 2px solid Azure Blue (#3273DC)
- **Border Radius:** 2px
- **Background:** White (#FFFFFF)
- **Label Style:** Above input, Titillium Web font, 600 weight, Charcoal (#2C2C2C)
- **Placeholder:** Charcoal Light (#555555)
- **Error State:** 2px solid Error (#C62828), error message below in Error color
- **Success State:** 2px solid Success (#4CAF50)

---

## Animation & Transition Styles

### Standard Transitions
- **Duration:** 200-300ms for UI elements
- **Easing:** `cubic-bezier(0.4, 0, 0.2, 1)` (ease-out)
- **Properties:** opacity, transform, background-color

### Hover Effects
- **Buttons:** Slight scale (1.02) + shadow increase
- **Cards:** Image zoom (1.05) within container
- **Links:** Underline animation from left to right

### Scroll Animations
- **Trigger:** When element enters viewport (50% visible)
- **Effect:** Fade up with subtle Y translation (20px)
- **Stagger:** 100ms delay between sequential elements

### Loading States
- Skeleton screens for content loading
- Smooth fade-in when content appears
- Spinner with Sunburst Gold (#FFC20E) accent for form submission

---

## Footer Branding

- **Background:** Soft Linen (#F2F0E6)
- **Text Color:** Charcoal (#2C2C2C)
- **Secondary Text:** Charcoal Light (#555555)
- **Link Color:** Azure Blue (#3273DC), Sunburst Gold (#FFC20E) on hover
- **Dividers:** Border Gray (#E0E0E0)
- **Copyright Text:** Caption size, Charcoal Light (#555555)

---

## CSS Custom Properties (Variables)

### Complete Variable Definition

```css
:root {
  /* ===================
     COLOR VARIABLES
     =================== */
  
  /* Core Brand Colors */
  --color-sunburst-gold: #FFC20E;
  --color-sunburst-gold-rgb: 255, 194, 14;
  --color-azure-blue: #3273DC;
  --color-azure-blue-rgb: 50, 115, 220;
  --color-soft-linen: #F2F0E6;
  --color-soft-linen-rgb: 242, 240, 230;
  --color-charcoal: #2C2C2C;
  --color-charcoal-rgb: 44, 44, 44;
  --color-white: #FFFFFF;
  
  /* Semantic Color Aliases */
  --color-primary: var(--color-sunburst-gold);
  --color-secondary: var(--color-azure-blue);
  --color-background: var(--color-soft-linen);
  --color-text: var(--color-charcoal);
  
  /* Links */
  --color-link: var(--color-azure-blue);
  --color-link-hover: #2563c4;
  
  /* Gray Scale */
  --color-charcoal-light: #555555;
  --color-gray-light: #F5F5F5;
  --color-gray-border: #E0E0E0;
  
  /* Functional Colors */
  --color-success: #4CAF50;
  --color-error: #C62828;
  --color-info: var(--color-azure-blue);
  --color-warning: #F9A825;
  
  /* ===================
     TYPOGRAPHY VARIABLES
     =================== */
  
  /* Font Families */
  --font-primary: 'Titillium Web', Arial, sans-serif;
  --font-fallback: Arial, sans-serif;
  
  /* Font Weights */
  --font-weight-light: 300;
  --font-weight-regular: 400;
  --font-weight-semibold: 600;
  --font-weight-bold: 700;
  
  /* Font Sizes - Desktop */
  --font-size-h1: 32px;
  --font-size-h2: 24px;
  --font-size-h3: 20px;
  --font-size-h4: 18px;
  --font-size-h5: 16px;
  --font-size-body-lg: 18px;
  --font-size-body: 16px;
  --font-size-body-sm: 14px;
  --font-size-caption: 12px;
  --font-size-button: 14px;
  --font-size-nav: 14px;
  
  /* Font Sizes - Mobile (use with media queries) */
  --font-size-h1-mobile: 28px;
  --font-size-h2-mobile: 22px;
  --font-size-h3-mobile: 18px;
  --font-size-h4-mobile: 16px;
  --font-size-h5-mobile: 15px;
  --font-size-body-mobile: 15px;
  
  /* Line Heights */
  --line-height-heading: 1.2;
  --line-height-subheading: 1.3;
  --line-height-body: 1.6;
  --line-height-body-lg: 1.7;
  --line-height-tight: 1;
  
  /* Letter Spacing */
  --letter-spacing-tight: -0.01em;
  --letter-spacing-normal: 0;
  --letter-spacing-wide: 0.02em;
  --letter-spacing-button: 0.05em;
  
  /* ===================
     SPACING VARIABLES
     =================== */
  
  /* Base Unit: 4px */
  --spacing-unit: 4px;
  
  /* Spacing Scale */
  --spacing-1: 4px;    /* 1 unit */
  --spacing-2: 8px;    /* 2 units */
  --spacing-3: 12px;   /* 3 units */
  --spacing-4: 16px;   /* 4 units */
  --spacing-5: 20px;   /* 5 units */
  --spacing-6: 24px;   /* 6 units */
  --spacing-8: 32px;   /* 8 units */
  --spacing-10: 40px;  /* 10 units */
  --spacing-12: 48px;  /* 12 units */
  --spacing-16: 64px;  /* 16 units */
  --spacing-20: 80px;  /* 20 units */
  --spacing-24: 96px;  /* 24 units */
  
  /* Section Spacing */
  --section-padding-y: 80px;
  --section-padding-y-mobile: 48px;
  --section-gap: 64px;
  --section-gap-mobile: 40px;
  
  /* Container */
  --container-max-width: 1280px;
  --container-padding: 24px;
  --container-padding-mobile: 16px;
  
  /* ===================
     BORDER & RADIUS
     =================== */
  
  --border-width: 1px;
  --border-width-thick: 2px;
  --border-radius: 2px;
  --border-radius-md: 4px;
  --border-radius-lg: 8px;
  --border-radius-full: 9999px;
  
  /* ===================
     SHADOWS
     =================== */
  
  --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
  --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.15);
  
  /* ===================
     TRANSITIONS
     =================== */
  
  --transition-fast: 150ms;
  --transition-normal: 200ms;
  --transition-slow: 300ms;
  --transition-easing: cubic-bezier(0.4, 0, 0.2, 1);
  
  /* Shorthand Transitions */
  --transition-default: var(--transition-normal) var(--transition-easing);
  --transition-color: color var(--transition-default);
  --transition-background: background-color var(--transition-default);
  --transition-transform: transform var(--transition-default);
  --transition-opacity: opacity var(--transition-default);
  --transition-all: all var(--transition-default);
  
  /* ===================
     Z-INDEX SCALE
     =================== */
  
  --z-dropdown: 100;
  --z-sticky: 200;
  --z-fixed: 300;
  --z-modal-backdrop: 400;
  --z-modal: 500;
  --z-popover: 600;
  --z-tooltip: 700;
  
  /* ===================
     COMPONENT SPECIFIC
     =================== */
  
  /* Buttons */
  --btn-padding-x: 32px;
  --btn-padding-y: 16px;
  --btn-font-size: var(--font-size-button);
  --btn-font-weight: var(--font-weight-semibold);
  --btn-border-radius: var(--border-radius);
  
  /* Inputs */
  --input-height: 48px;
  --input-padding-x: 16px;
  --input-border-color: var(--color-gray-border);
  --input-focus-border-color: var(--color-primary);
  --input-border-radius: var(--border-radius);
  
  /* Cards */
  --card-padding: var(--spacing-6);
  --card-border-radius: var(--border-radius-md);
  --card-shadow: var(--shadow-md);
  
  /* Navigation */
  --nav-height: 80px;
  --nav-height-mobile: 64px;
  --nav-background: var(--color-soft-linen);
  --nav-text-color: var(--color-charcoal);
  --nav-active-color: var(--color-sunburst-gold);
  
  /* Footer */
  --footer-background: var(--color-soft-linen);
  --footer-text-color: var(--color-charcoal);
  --footer-link-color: var(--color-azure-blue);
}

/* Dark mode overrides (if needed) */
@media (prefers-color-scheme: dark) {
  :root {
    /* Add dark mode variable overrides here if implementing dark mode */
  }
}
```

### Tailwind CSS Integration

For use with Tailwind CSS, extend the theme in `tailwind.config.js`:

```javascript
module.exports = {
  theme: {
    extend: {
      colors: {
        // Core Brand Colors
        'sunburst-gold': '#FFC20E',
        'azure-blue': '#3273DC',
        'soft-linen': '#F2F0E6',
        'charcoal': '#2C2C2C',
        // Semantic Aliases
        primary: '#FFC20E',
        secondary: '#3273DC',
        // Supporting Colors
        'charcoal-light': '#555555',
        'gray-light': '#F5F5F5',
        'gray-border': '#E0E0E0',
        // Functional Colors
        success: '#4CAF50',
        error: '#C62828',
        warning: '#F9A825',
        info: '#3273DC',
      },
      fontFamily: {
        sans: ['Titillium Web', 'Arial', 'sans-serif'],
      },
      fontSize: {
        'h1': ['32px', { lineHeight: '1.2', fontWeight: '700' }],
        'h2': ['24px', { lineHeight: '1.3', fontWeight: '700' }],
        'h3': ['20px', { lineHeight: '1.3', fontWeight: '600' }],
        'h4': ['18px', { lineHeight: '1.4', fontWeight: '600' }],
        'h5': ['16px', { lineHeight: '1.4', fontWeight: '600' }],
      },
      spacing: {
        '18': '72px',
        '22': '88px',
      },
      borderRadius: {
        'sm': '2px',
      },
    },
  },
}
```
