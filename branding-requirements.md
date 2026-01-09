# Branding Requirements
## Top 5 Percent Custom Signage & Apparel

---

## Brand Overview

A premium custom signage and apparel business requiring a high-end, sophisticated digital presence that conveys quality craftsmanship and luxury aesthetics. The brand identity should appeal to discerning clients seeking custom business signage, promotional products, and branded apparel.

---

## Color Palette

### Primary Colors

| Color Name | Hex Code | RGB | Usage |
|------------|----------|-----|-------|
| Jet Black | `#0A0A0A` | 10, 10, 10 | Primary backgrounds, headers |
| Pure White | `#FFFFFF` | 255, 255, 255 | Primary text on dark, clean sections |
| Charcoal | `#1A1A1A` | 26, 26, 26 | Secondary backgrounds, cards |

### Secondary Colors

| Color Name | Hex Code | RGB | Usage |
|------------|----------|-----|-------|
| Warm Gray | `#2D2D2D` | 45, 45, 45 | Borders, dividers |
| Light Gray | `#F5F5F5` | 245, 245, 245 | Light section backgrounds |
| Medium Gray | `#888888` | 136, 136, 136 | Secondary text, captions |

### Accent Colors

| Color Name | Hex Code | RGB | Usage |
|------------|----------|-----|-------|
| Champagne Gold | `#C9A962` | 201, 169, 98 | CTAs, highlights, premium accents |
| Soft Gold | `#D4AF37` | 212, 175, 55 | Hover states, icons |
| Muted Bronze | `#8B7355` | 139, 115, 85 | Tertiary accents |
| Royal Blue | `#3273DC` | 50, 115, 220 | Links, interactive elements, secondary CTAs |

### Functional Colors

| Color Name | Hex Code | Usage |
|------------|----------|-------|
| Success | `#2E7D32` | Form success states |
| Error | `#C62828` | Form errors, alerts |
| Info | `#1565C0` | Informational elements |

---

## Typography

### Primary Font Family

**Heading Font:** `"Playfair Display"` or `"Cormorant Garamond"`
- Use for: H1, H2, featured quotes, brand statements
- Weights: 400 (Regular), 500 (Medium), 600 (SemiBold), 700 (Bold)
- Style: Elegant serif conveying luxury and refinement

### Secondary Font Family

**Body Font:** `"Inter"` or `"Helvetica Neue"`
- Use for: Body text, navigation, buttons, forms
- Weights: 300 (Light), 400 (Regular), 500 (Medium), 600 (SemiBold), 700 (Bold)
- Style: Clean, modern sans-serif for readability

### Tertiary Font Family

**Accent Font:** `"Montserrat"`
- Use for: Subheadings, labels, button text, navigation
- Weights: 400 (Regular), 500 (Medium), 600 (SemiBold), 700 (Bold)
- Style: Geometric sans-serif for modern sophistication

### Typography Scale

| Element | Font | Size (Desktop) | Size (Mobile) | Weight | Line Height | Letter Spacing |
|---------|------|----------------|---------------|--------|-------------|----------------|
| H1 | Playfair Display | 72px | 40px | 700 | 1.1 | -0.02em |
| H2 | Playfair Display | 48px | 32px | 600 | 1.2 | -0.01em |
| H3 | Montserrat | 32px | 24px | 600 | 1.3 | 0em |
| H4 | Montserrat | 24px | 20px | 500 | 1.4 | 0.01em |
| H5 | Montserrat | 18px | 16px | 500 | 1.4 | 0.02em |
| Body Large | Inter | 18px | 16px | 400 | 1.7 | 0em |
| Body | Inter | 16px | 15px | 400 | 1.6 | 0em |
| Body Small | Inter | 14px | 13px | 400 | 1.5 | 0.01em |
| Caption | Inter | 12px | 11px | 400 | 1.4 | 0.02em |
| Button | Montserrat | 14px | 13px | 600 | 1 | 0.1em |
| Nav Link | Montserrat | 13px | 12px | 500 | 1 | 0.08em |

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
- Secondary: Black on light backgrounds
- Accent: Gold foil for premium applications

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
| Primary | Gold (#C9A962) | Black (#0A0A0A) | None | 16px 32px |
| Secondary | Transparent | White (#FFFFFF) | 1px white | 16px 32px |
| Tertiary | Transparent | Gold (#C9A962) | None | 8px 0 |
| Link Button | Transparent | Royal Blue (#3273DC) | None | 8px 0 |

### Button States
- **Hover:** Slight scale (1.02) + shadow increase
- **Active:** Scale (0.98) + deeper shadow
- **Disabled:** 50% opacity, no pointer events
- **Focus:** 2px gold outline for accessibility

---

## Form Element Styles

- **Input Height:** 56px
- **Border:** 1px solid Medium Gray (#888888)
- **Border Focus:** 2px solid Champagne Gold (#C9A962)
- **Background:** Transparent or Light Gray (#F5F5F5)
- **Label Style:** Above input, small caps, Montserrat font
- **Placeholder:** Medium Gray (#888888), italic
- **Error State:** 2px solid Error (#C62828), error message below in Error color
- **Success State:** 2px solid Success (#2E7D32)

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
- Spinner with Gold accent for form submission

---

## Footer Branding

- **Background:** Jet Black (#0A0A0A)
- **Text Color:** Pure White (#FFFFFF)
- **Link Color:** Medium Gray (#888888), Gold on hover
- **Dividers:** Warm Gray (#2D2D2D)
- **Copyright Text:** Caption size, Medium Gray
