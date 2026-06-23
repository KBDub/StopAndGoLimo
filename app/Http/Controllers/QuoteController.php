<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\QuoteSubmitted;
use App\Models\CustomOrderRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class QuoteController extends Controller
{
    public function submit(Request $request): RedirectResponse
    {
        $ip = $request->ip();

        // ── reCAPTCHA v2 Invisible verification ───────────────────────────────
        // Only enforced in production — dev domains are not registered with Google
        $recaptchaSecret = config('services.recaptcha.secret_key');
        if ($recaptchaSecret && app()->environment('production')) {
            $token  = $request->input('g_recaptcha_response', '');
            $verify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => $recaptchaSecret,
                'response' => $token,
                'remoteip' => $ip,
            ]);
            $result = $verify->json();

            if (!($result['success'] ?? false)) {
                Log::warning('[QuoteController] reCAPTCHA failed', [
                    'ip'            => $ip,
                    'error-codes'   => $result['error-codes'] ?? [],
                    'token_present' => !empty($token),
                ]);
                return back()->withInput()->withErrors(['form' => 'We could not verify your submission. Please try again.']);
            }

            Log::info('[QuoteController] reCAPTCHA passed', [
                'ip'          => $ip,
                'hostname'    => $result['hostname'] ?? null,
                'challenge_ts' => $result['challenge_ts'] ?? null,
            ]);
        }

        // ── Honeypot check ────────────────────────────────────────────────────
        if ($request->filled('sg_website')) {
            $fakeRef = 'SG-QT-' . strtoupper(Str::random(8));
            Log::warning('[QuoteController] Honeypot triggered — bot submission discarded', [
                'ip'        => $ip,
                'reference' => $fakeRef,
            ]);
            return redirect()
                ->route('get-a-quote')
                ->with('quote_success', true)
                ->with('quote_name', 'there')
                ->with('quote_reference', $fakeRef);
        }

        // ── Validation ────────────────────────────────────────────────────────
        Log::info('[QuoteController] Validation started', ['ip' => $ip]);

        $validated = $request->validate([
            'name'             => 'required|string|max:150',
            'phone'            => 'required|string|max:50',
            'email'            => 'required|email|max:255',
            'vehicle_type'     => 'required|string|max:100',
            'passengers'       => 'required|string|max:20',
            'pickup_location'  => 'required|string|max:255',
            'destination'      => 'required|string|max:255',
            'booking_date'     => 'required|date|after_or_equal:today',
            'additional_info'  => 'nullable|string|max:5000',
        ]);

        Log::info('[QuoteController] Validation passed', [
            'ip'           => $ip,
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'vehicle_type' => $validated['vehicle_type'],
            'booking_date' => $validated['booking_date'],
        ]);

        // ── Database save ─────────────────────────────────────────────────────
        $reference = 'SG-QT-' . strtoupper(Str::random(8));

        try {
            $quote = CustomOrderRequest::create([
                'reference'     => $reference,
                'order_type'    => 'quote',
                'contact_name'  => $validated['name'],
                'contact_email' => $validated['email'],
                'contact_phone' => $validated['phone'],
                'payload'       => $validated,
                'status'        => 'pending',
                'submitted_at'  => now(),
            ]);

            Log::info('[QuoteController] DB save successful', [
                'reference' => $reference,
                'id'        => $quote->id,
                'email'     => $validated['email'],
            ]);
        } catch (\Throwable $e) {
            Log::error('[QuoteController] DB save FAILED', [
                'reference' => $reference,
                'error'     => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
            ]);
            return back()->withInput()->withErrors(['form' => 'There was a problem saving your request. Please try again.']);
        }

        // ── Email notification ────────────────────────────────────────────────
        $notifyEmail = config('mail.quote_notify_email', env('QUOTE_NOTIFY_EMAIL'));

        if ($notifyEmail) {
            try {
                Mail::to($notifyEmail)->send(new QuoteSubmitted($quote));
                Log::info('[QuoteController] Notification email sent', [
                    'reference' => $reference,
                    'to'        => $notifyEmail,
                    'host'      => config('mail.mailers.smtp.host'),
                    'port'      => config('mail.mailers.smtp.port'),
                    'scheme'    => config('mail.mailers.smtp.scheme'),
                ]);
            } catch (\Throwable $e) {
                Log::error('[QuoteController] Email send FAILED', [
                    'reference' => $reference,
                    'to'        => $notifyEmail,
                    'host'      => config('mail.mailers.smtp.host'),
                    'port'      => config('mail.mailers.smtp.port'),
                    'scheme'    => config('mail.mailers.smtp.scheme'),
                    'error'     => $e->getMessage(),
                ]);
            }
        } else {
            Log::warning('[QuoteController] No notify email configured — email skipped', [
                'reference' => $reference,
            ]);
        }

        // ── Success ───────────────────────────────────────────────────────────
        $firstName = explode(' ', trim($validated['name']))[0];

        Log::info('[QuoteController] Submission complete', [
            'reference'  => $reference,
            'first_name' => $firstName,
            'ip'         => $ip,
        ]);

        return redirect()
            ->route('get-a-quote')
            ->with('quote_success', true)
            ->with('quote_name', $firstName)
            ->with('quote_reference', $reference);
    }
}
