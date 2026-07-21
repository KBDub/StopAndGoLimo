---
name: Alpine :style empty string clears inline styles
description: Binding :style to an empty string '' in Alpine v3 wipes the element's entire inline style attribute, causing styled buttons to turn invisible.
---

## The rule
Never bind `:style="condition ? 'some:value;' : ''"` when the element also has a static `style="..."` attribute. The empty string branch silently clears ALL inline styles on the element.

**Why:** Alpine v3's `:style` binding, when given a string, sets `el.style.cssText`. An empty string resets cssText entirely, stripping every inline style including background, color, padding, etc.

**How to apply:** When you need to conditionally apply style changes alongside a static style, always use object syntax so Alpine only touches the specific properties you care about:

```html
{{-- WRONG — empty string clears the entire style= attribute --}}
:style="submitting ? 'opacity:0.65; cursor:not-allowed;' : ''"

{{-- CORRECT — object syntax only mutates the named properties --}}
:style="{ opacity: submitting ? '0.65' : '1', cursor: submitting ? 'not-allowed' : 'pointer' }"
```

The symptom is a button that disappears entirely (transparent text, transparent background, no border) while sibling elements with `border` remain visible. This is especially subtle on dark backgrounds where invisible text on an invisible background produces no visual artifact.
