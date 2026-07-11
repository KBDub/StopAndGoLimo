<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Developer Access</title>
<style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #0b1f3a;
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    .card {
        width: 100%;
        max-width: 380px;
        background: #112240;
        border: 1px solid rgba(255,255,255,0.10);
        padding: 40px 36px;
    }
    h1 {
        font-size: 18px;
        font-weight: 700;
        color: #c9a84c;
        margin-bottom: 6px;
        letter-spacing: 0.3px;
    }
    p.sub {
        font-size: 13px;
        color: #8a9bb5;
        margin-bottom: 28px;
    }
    label {
        display: block;
        font-size: 12px;
        font-weight: 600;
        color: #8a9bb5;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        margin-bottom: 6px;
    }
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        background: #0b1f3a;
        border: 1px solid rgba(255,255,255,0.15);
        color: #e8edf3;
        font-size: 14px;
        outline: none;
        margin-bottom: 18px;
    }
    input:focus {
        border-color: #c9a84c;
    }
    button[type="submit"] {
        width: 100%;
        padding: 11px;
        background: #c9a84c;
        color: #0b1f3a;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.4px;
        border: none;
        cursor: pointer;
        margin-top: 4px;
    }
    button[type="submit"]:hover {
        background: #d4b866;
    }
    .error {
        background: rgba(220,38,38,0.12);
        border: 1px solid rgba(220,38,38,0.35);
        color: #fca5a5;
        font-size: 13px;
        padding: 10px 12px;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<div class="card">
    <h1>Developer Access</h1>
    <p class="sub">Stop &amp; Go Airport Shuttle Service, Inc. — restricted area</p>

    @if(session('devtools_error'))
        <div class="error">{{ session('devtools_error') }}</div>
    @endif

    <form method="POST" action="/devtools-login">
        @csrf
        <input type="hidden" name="redirect_to" value="{{ request('redirect_to', '/page-management') }}">

        <label for="dt_user">Username</label>
        <input type="text" id="dt_user" name="dt_user" autocomplete="username" autofocus required>

        <label for="dt_pass">Password</label>
        <input type="password" id="dt_pass" name="dt_pass" autocomplete="current-password" required>

        <button type="submit">Sign in</button>
    </form>
</div>
</body>
</html>
