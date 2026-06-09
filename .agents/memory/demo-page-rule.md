---
name: Demo page rule
description: x-sections.* components must never appear on demo.blade.php; the demo page is for x-ui.* atomic components only.
---

## Rule

Never add `x-sections.*` Blade components to `resources/views/pages/demo.blade.php`.

**Why:** The demo page is the brand style guide for atomic UI components (`x-ui.*`). Section components are full-page layout sections with real copy, images, and data. Embedding them on the demo page bloats the page, makes it slow, and was explicitly prohibited by the project owner.

**How to apply:**
- New `x-ui.*` components → add a numbered section (§NN) to `demo.blade.php`
- New `x-sections.*` components → add directly to the relevant page(s) only
- If a section component needs live reference, note the page URL in a comment — do not embed it
