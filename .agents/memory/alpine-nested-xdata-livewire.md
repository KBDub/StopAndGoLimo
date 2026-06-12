---
name: Alpine nested x-data in Livewire components
description: Nested x-data scopes inside Livewire-rendered Blade components cause scope resolution failures.
---

## Rule
Inside any Blade component that is rendered by Livewire (or inside a Livewire page), do not add new nested `x-data` scopes for secondary interactive state (copy-icon toggle, show/hide more, etc.).

**Why:** Livewire v3 bundles Alpine and manages its own scope initialization lifecycle. Adding a child `x-data` (e.g. `x-data="{ rCopied: false }"`) inside an element that is itself inside a parent `x-data` scope causes Alpine to fail resolving the child's properties — producing `Alpine Expression Error: rCopied is not defined` even though the property is declared in the nearest ancestor.

**How to apply:** Use vanilla JS `onclick`/`ondblclick` handlers for any new interactive state on page-management components (copy buttons, show-more toggles, double-click events). Reserve Alpine `x-data` only for top-level accordion state (`expanded`, `open`, `pagesOpen`) that was already working before Livewire's scope chain was involved.
