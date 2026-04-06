<?php

namespace App\Livewire\Ui;

use Livewire\Attributes\Rule;
use Livewire\Component;

/**
 * ─────────────────────────────────────────────────────────────────────────────
 * Livewire Component : ContactForm
 * Location           : app/Livewire/Ui/ContactForm.php
 * View               : resources/views/livewire/ui/contact-form.blade.php
 * Route alias        : livewire:ui.contact-form
 *
 * Handles validation, submission, and success-state signaling for the
 * x-ui.contact-modal anonymous Blade component.
 *
 * On success it:
 *   1. Sets $submitted = true  → view renders the success state
 *   2. Dispatches 'contact-form-submitted' as a browser event so the
 *      parent Alpine scope in x-ui.contact-modal can auto-close the modal.
 *   3. Resets all public form fields.
 *
 * Mail integration:
 *   Uncomment the Mail::to(...)->send(...) line and create an appropriate
 *   Mailable class (e.g. App\Mail\ContactFormSubmitted) to wire up email.
 *   The config key 'mail.contact_address' is used as the recipient;
 *   add it to config/mail.php or .env as MAIL_CONTACT_ADDRESS.
 * ─────────────────────────────────────────────────────────────────────────────
 */
class ContactForm extends Component
{
    // ── Form fields ────────────────────────────────────────────────────────

    #[Rule('required|string|min:2|max:100')]
    public string $name = '';

    #[Rule('required|email|max:150')]
    public string $email = '';

    #[Rule('nullable|regex:/^[\+\(\)\d\s\-\.]{7,25}$/')]
    public string $phone = '';

    #[Rule('required|in:custom-apparel,business-signs,vehicle-graphics,decals-stickers,promotional-items,other')]
    public string $service = '';

    #[Rule('required|string|min:10|max:2000')]
    public string $message = '';

    // ── State ──────────────────────────────────────────────────────────────

    /** Flips to true after a successful submission; drives the success view. */
    public bool $submitted = false;

    // ── Computed ───────────────────────────────────────────────────────────

    /**
     * Human-readable service label for the success confirmation message.
     */
    public function getServiceLabelProperty(): string
    {
        return match ($this->service) {
            'custom-apparel'     => 'Custom Apparel',
            'business-signs'     => 'Business Signs',
            'vehicle-graphics'   => 'Vehicle Graphics',
            'decals-stickers'    => 'Decals & Stickers',
            'promotional-items'  => 'Promotional Items',
            default              => 'Other / General Inquiry',
        };
    }

    // ── Actions ────────────────────────────────────────────────────────────

    /**
     * Real-time validation as the user types (Livewire v3 wire:model.live).
     * Validates only the field that just changed to avoid premature errors.
     */
    public function updated(string $field): void
    {
        $this->validateOnly($field);
    }

    /**
     * Final form submission — full validation → optional mail → success state.
     */
    public function submit(): void
    {
        $validated = $this->validate();

        // ── Send notification email ────────────────────────────────────────
        // Uncomment and adjust once your Mailable is created:
        //
        // \Illuminate\Support\Facades\Mail::to(
        //     config('mail.contact_address', env('MAIL_CONTACT_ADDRESS', 'info@top5pct.com'))
        // )->send(new \App\Mail\ContactFormSubmitted([
        //     'name'    => $validated['name'],
        //     'email'   => $validated['email'],
        //     'phone'   => $this->phone ?: '—',
        //     'service' => $this->serviceLabel,
        //     'message' => $validated['message'],
        // ]));
        // ──────────────────────────────────────────────────────────────────

        // Flip to success view
        $this->submitted = true;

        // Notify the Alpine modal shell to start its auto-close timer
        $this->dispatch('contact-form-submitted');

        // Clear fields so re-opening the modal shows a fresh form
        $this->reset(['name', 'email', 'phone', 'service', 'message']);
    }

    /**
     * Allow the user (or the modal shell) to reset back to the empty form.
     */
    public function resetForm(): void
    {
        $this->submitted = false;
        $this->reset(['name', 'email', 'phone', 'service', 'message']);
        $this->resetValidation();
    }

    // ── Render ─────────────────────────────────────────────────────────────

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.ui.contact-form');
    }
}
