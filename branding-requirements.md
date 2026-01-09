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
| Primary Gold | `#CDBF2B` | 205, 191, 43 | Primary brand color, CTAs, highlights |
| Background White | `#FFFFFF` | 255, 255, 255 | Page backgrounds, clean sections |
| Text Black | `#000000` | 0, 0, 0 | Primary text, headings |

### Accent Colors

| Color Name | Hex Code | RGB | Usage |
|------------|----------|-----|-------|
| Accent Blue | `#3273DC` | 50, 115, 220 | Links, interactive elements, secondary CTAs |

### Supporting Colors

| Color Name | Hex Code | RGB | Usage |
|------------|----------|-----|-------|
| Dark Gray | `#333333` | 51, 51, 51 | Footer backgrounds, dark sections |
| Medium Gray | `#666666` | 102, 102, 102 | Secondary text, captions |
| Light Gray | `#F5F5F5` | 245, 245, 245 | Light section backgrounds, borders |
| Border Gray | `#E0E0E0` | 224, 224, 224 | Subtle borders, dividers |

### Functional Colors

| Color Name | Hex Code | Usage |
|------------|----------|-------|
| Success | `#2E7D32` | Form success states |
| Error | `#C62828` | Form errors, alerts |
| Info | `#3273DC` | Informational elements (uses Accent Blue) |

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
- Secondary: Black on light backgrounds
- Accent: Primary Gold (#CDBF2B) for premium applications

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
| Primary | Primary Gold (#CDBF2B) | Black (#000000) | None | 16px 32px |
| Secondary | Transparent | Black (#000000) | 1px Dark Gray (#333333) | 16px 32px |
| Tertiary | Transparent | Accent Blue (#3273DC) | None | 8px 0 |
| Link Button | Transparent | Accent Blue (#3273DC) | None | 8px 0 |

### Button States
- **Hover:** Slight scale (1.02) + shadow increase
- **Active:** Scale (0.98) + deeper shadow
- **Disabled:** 50% opacity, no pointer events
- **Focus:** 2px Primary Gold (#CDBF2B) outline for accessibility

---

## Form Element Styles

- **Input Height:** 48px
- **Border:** 1px solid Border Gray (#E0E0E0)
- **Border Focus:** 2px solid Primary Gold (#CDBF2B)
- **Border Radius:** 2px
- **Background:** White (#FFFFFF)
- **Label Style:** Above input, Titillium Web font, 600 weight
- **Placeholder:** Medium Gray (#666666)
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
- Spinner with Primary Gold (#CDBF2B) accent for form submission

---

## Footer Branding

- **Background:** Dark Gray (#333333)
- **Text Color:** White (#FFFFFF)
- **Link Color:** Light Gray, Primary Gold (#CDBF2B) on hover
- **Dividers:** Medium Gray (#666666)
- **Copyright Text:** Caption size, Light Gray
