---
name: Full company name rule
description: Always use the full legal name in copy; short name is restricted to logo/nav/social only.
---

**Rule:** Always use **"Stop & Go Airport Shuttle Service, Inc."** in all website copy, page content, section text, headings, meta descriptions, structured data, alt text, and documentation.

**Why:** The client confirmed this explicitly. The full name carries SEO weight and legal brand identity. The short name dilutes both.

**How to apply:**
- Body copy, headings, meta descriptions, structured data → full name only.
- Logo text, nav bar, social media handles → "Stop & Go Limo" is acceptable there only.
- Never use "Stop & Go Limo" in any on-page rendered text outside of the logo/nav.
- `config/client.php` has both: `business_name` (full) and `business_name_short` (short). Always reach for `business_name` in copy contexts.
