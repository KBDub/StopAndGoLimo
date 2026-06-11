---
name: Approved decorative SVG icon exception
description: Thumbs-up SVG approved for x-sections.our-mission; branding §3.5 otherwise bans all decorative icons.
---

## Rule
Branding requirements §3 rule 5 bans all decorative SVG icons. Font Awesome 6 is the only approved icon library and only for functional location/contact indicators (map pin, phone).

## Approved exception
The user explicitly approved inline thumbs-up SVG icons for the `x-sections.our-mission` "Safety First" bullet list.

**SVG used (Material Design thumbs-up, 18×18, viewBox="0 0 24 24"):**
```svg
<path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 9 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2z"/>
```
Rendered in `color: var(--champagne)` via `fill="currentColor"`.

**Why:** User confirmed this specific icon in this specific component context. Do not extend this exception to other components without a new explicit approval.

**How to apply:** Only use this SVG in `x-sections.our-mission`. Any other component needing a decorative icon must get fresh user approval before using it.
