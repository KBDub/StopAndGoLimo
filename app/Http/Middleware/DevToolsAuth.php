<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class DevToolsAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->get('devtools_authed') === true) {
            return $next($request);
        }

        $redirectTo = $request->fullUrl();

        return redirect('/devtools-login?redirect_to=' . urlencode($redirectTo));
    }
}
