<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Quote Request</title>
<style>
    body { margin: 0; padding: 0; background: #f4f4f4; font-family: Arial, sans-serif; }
    .wrap { max-width: 600px; margin: 32px auto; background: #ffffff; border: 1px solid #e0e0e0; }
    .header { background: #0b1f3a; padding: 28px 32px; }
    .header h1 { margin: 0; color: #c9a84c; font-size: 20px; font-weight: 700; letter-spacing: 0.5px; }
    .header p { margin: 4px 0 0; color: #d0d8e4; font-size: 13px; }
    .body { padding: 32px; }
    .ref { display: inline-block; background: #f7f2e8; border: 1px solid #c9a84c; color: #0b1f3a; font-size: 13px; font-weight: 700; padding: 6px 14px; margin-bottom: 28px; letter-spacing: 1px; }
    h2 { margin: 0 0 16px; font-size: 15px; color: #0b1f3a; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #c9a84c; padding-bottom: 6px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 28px; }
    td { padding: 8px 0; font-size: 14px; vertical-align: top; }
    td.label { color: #666666; width: 38%; font-weight: 700; }
    td.value { color: #1a1a1a; }
    .note { background: #f9f9f9; border-left: 3px solid #c9a84c; padding: 12px 16px; font-size: 13px; color: #444444; line-height: 1.6; margin-bottom: 28px; }
    .cta { text-align: center; margin-bottom: 28px; }
    .cta a { display: inline-block; background: #0b1f3a; color: #c9a84c; text-decoration: none; font-size: 14px; font-weight: 700; padding: 12px 28px; letter-spacing: 0.5px; }
    .footer { background: #f4f4f4; padding: 18px 32px; font-size: 12px; color: #888888; text-align: center; border-top: 1px solid #e0e0e0; }
</style>
</head>
<body>
<div class="wrap">

    <div class="header">
        <h1>New Quote Request</h1>
        <p>Stop &amp; Go Airport Shuttle Service Inc.</p>
    </div>

    <div class="body">

        <div class="ref">REF: {{ $quote->reference }}</div>

        <h2>Contact Information</h2>
        <table>
            <tr>
                <td class="label">Name</td>
                <td class="value">{{ $quote->contact_name }}</td>
            </tr>
            <tr>
                <td class="label">Phone</td>
                <td class="value">{{ $quote->contact_phone }}</td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td class="value"><a href="mailto:{{ $quote->contact_email }}" style="color:#0b1f3a;">{{ $quote->contact_email }}</a></td>
            </tr>
        </table>

        <h2>Trip Details</h2>
        <table>
            <tr>
                <td class="label">Vehicle Type</td>
                <td class="value">{{ $quote->payload['vehicle_type'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="label">Passengers</td>
                <td class="value">{{ $quote->payload['passengers'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="label">Pickup Location</td>
                <td class="value">{{ $quote->payload['pickup_location'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="label">Destination</td>
                <td class="value">{{ $quote->payload['destination'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="label">Booking Date</td>
                <td class="value">
                    @if(!empty($quote->payload['booking_date']))
                        {{ \Carbon\Carbon::parse($quote->payload['booking_date'])->format('F j, Y') }}
                    @else
                        Not specified
                    @endif
                </td>
            </tr>
        </table>

        @if(!empty($quote->payload['additional_info']))
        <h2>Additional Information</h2>
        <div class="note">{{ $quote->payload['additional_info'] }}</div>
        @endif

        <div class="cta">
            <a href="mailto:{{ $quote->contact_email }}?subject=Re: Your Quote Request ({{ $quote->reference }})">
                Reply to {{ $quote->contact_name }}
            </a>
        </div>

    </div>

    <div class="footer">
        Stop &amp; Go Airport Shuttle Service Inc. &mdash; (815) 585-6922 &mdash; newlenoxlimoservice.com<br>
        This is an automated notification. Reference: {{ $quote->reference }}
    </div>

</div>
</body>
</html>
