---
name: Nested button breaks Alpine scope
description: A <button> inside another <button> is invalid HTML and causes Alpine expression errors.
---

## Rule
Never place a `<button>` element inside another `<button>` element in any Blade component.

**Why:** Browsers silently restructure invalid nested-button HTML during DOM parsing. The inner button gets ejected from its position, breaking Alpine's parent→child scope traversal. The result is `Alpine Expression Error: X is not defined` for variables that ARE defined in the nearest ancestor `x-data` — because after restructuring, that ancestor is no longer an ancestor.

**How to apply:** When a card header or row needs both an expand toggle and a secondary action (copy icon, etc.), use a flex wrapper div containing two sibling buttons — the toggle as `flex-1` and the action as `shrink-0`. Never nest the action button inside the toggle button even if visually it looks like it belongs inside.
