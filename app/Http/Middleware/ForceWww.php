<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceWww
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->getHost() === 'top5pct.com') {
            return redirect(
                'https://www.top5pct.com' . $request->getRequestUri(),
                302
            );
        }

        return $next($request);
    }
}
