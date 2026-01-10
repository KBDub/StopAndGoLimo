<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DisableThrottle
{
    public function handle(Request $request, Closure $next, ...$args): Response
    {
        return $next($request);
    }
}
