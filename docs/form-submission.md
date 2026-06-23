# Quote Form Submission — Implementation Reference

## Overview

The quote form on `/get-a-quote` (component `x-sections.free-instant-quote`) is fully implemented. Submissions are validated, saved to the database, and trigger an email notification to the business owner via GoDaddy SMTP.

---

## Files

| Role | File |
|---|---|
| Page | `resources/views/pages/get-a-quote.blade.php` |
| Form component | `resources/views/components/sections/free-instant-quote.blade.php` |
| Controller | `app/Http/Controllers/QuoteController.php` |
| Mailable | `app/Mail/QuoteSubmitted.php` |
| Email template | `resources/views/emails/quote-submitted.blade.php` |
| Routes | `routes/main-site.php` |
| Model | `app/Models/CustomOrderRequest.php` |
| Database table | `custom_order_requests` |

---

## Request Flow

```
User submits form (POST /get-a-quote)
  → CSRF verified by Laravel middleware
  → QuoteController::submit()
      → Validate fields
      → Save to custom_order_requests (order_type='quote', status='pending')
      → Mail::to(QUOTE_NOTIFY_EMAIL)->send(new QuoteSubmitted($quote))
  → Redirect GET /get-a-quote
      → session('quote_success') shows reference number to user
```

---

## Form Fields

| Field | Name | Required | Notes |
|---|---|---|---|
| Full name | `name` | Yes | |
| Phone | `phone` | Yes | |
| Email | `email` | Yes | validated as email |
| Vehicle type | `vehicle_type` | Yes | select — 11 options |
| Passengers | `passengers` | Yes | select — 1 through 13+ |
| Pickup location | `pickup_location` | Yes | added during implementation |
| Destination | `destination` | No | |
| Booking date | `booking_date` | No | date input |
| Additional info | `additional_info` | No | textarea |

All fields use `old()` so values are repopulated on a validation failure redirect.

---

## Database

Records are saved to `custom_order_requests` using the shared `CustomOrderRequest` model.

| Column | Value |
|---|---|
| `reference` | `SG-QT-` + 8 random uppercase chars (e.g. `SG-QT-AB12CD34`) |
| `order_type` | `quote` |
| `contact_name` | from `name` field |
| `contact_email` | from `email` field |
| `contact_phone` | from `phone` field |
| `payload` | full validated array (all fields) |
| `status` | `pending` |
| `submitted_at` | `now()` |

---

## Email Notification

**Mailable:** `App\Mail\QuoteSubmitted`
**Template:** `resources/views/emails/quote-submitted.blade.php`
**Subject:** `New Quote Request — SG-QT-XXXXXXXX`
**Recipient:** `QUOTE_NOTIFY_EMAIL` secret

The email is a self-contained HTML document styled in navy/champagne matching the brand. It contains:
- Reference number badge
- Contact section: name, phone, email (with `mailto:` link)
- Trip section: vehicle type, passengers, pickup, destination, booking date
- Additional information block (only shown if provided)
- "Reply to [Name]" button that opens a pre-addressed reply email

---

## Mail Configuration

All mail settings are stored in Replit Secrets and shared env vars — nothing sensitive is in `.env`.

| Key | Where | Value |
|---|---|---|
| `MAIL_MAILER` | shared env var | `smtp` |
| `MAIL_SCHEME` | shared env var | `smtps` (required for port 465 — Symfony mailer uses `smtps`, not `ssl`) |
| `MAIL_HOST` | shared env var | `smtp.secureserver.net` |
| `MAIL_PORT` | shared env var | `465` |
| `MAIL_USERNAME` | shared env var | `vincent@newlenoxlimoservice.com` |
| `MAIL_FROM_ADDRESS` | shared env var | `vincent@newlenoxlimoservice.com` |
| `MAIL_FROM_NAME` | shared env var | `Stop and Go Airport Shuttle` |
| `MAIL_PASSWORD` | Replit Secret | GoDaddy email password |
| `QUOTE_NOTIFY_EMAIL` | Replit Secret | Recipient address for new quote alerts |

**Critical:** Symfony's SMTP transport requires the scheme `smtps` for SSL connections on port 465. Using `ssl` throws `UnsupportedSchemeException`. Do not change this.

---

## Dev Environment Limitation

Replit's sandbox blocks outbound SMTP (ports 465 and 587 both time out). This means:

- In **development**: `Mail::send()` will hang then fail with a connection timeout. Use `MAIL_MAILER=log` locally to write emails to `storage/logs/laravel.log` for inspection without sending.
- In **production** (deployed): GoDaddy SMTP works correctly. The first real submission will deliver the notification email.

To test locally, override the mailer inline in the artisan shell or set `MAIL_MAILER=log` temporarily.

---

## User-Facing Feedback

**Success** — shown after redirect when `session('quote_success')` is set:
- Champagne left-border box with the message "Your quote request was sent!"
- Reference number displayed (e.g. `SG-QT-AB12CD34`)
- "We will follow up with you shortly."

**Validation errors** — shown when `$errors->any()`:
- Red left-border box listing each error
- All previously entered values are repopulated via `old()`

---

## CAPTCHA

The form still shows a placeholder block ("reCAPTCHA will load here"). reCAPTCHA v3 is not yet implemented. To add it:

1. Register a v3 site at [google.com/recaptcha](https://www.google.com/recaptcha)
2. Add `RECAPTCHA_SITE_KEY` and `RECAPTCHA_SECRET_KEY` as Replit Secrets
3. Load the v3 JS in the form, inject a hidden `g-recaptcha-response` token on submit
4. Verify the token in `QuoteController::submit()` before saving

---

## Reference Prefix Convention

| Form | Controller | Prefix |
|---|---|---|
| General contact modal | `ContactController::sendMessage` | `T5P-MSG-` |
| Apparel custom order | `CustomOrderController::submit` | `T5P-` |
| Limo quote | `QuoteController::submit` | `SG-QT-` |

The `T5P-` prefixes are leftover from the project this site was scaffolded from. All limo-specific submissions use `SG-` prefixes.
