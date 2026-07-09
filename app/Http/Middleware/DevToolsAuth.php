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
        $user = config('devtools.user');
        $pass = config('devtools.pass');

        if (
            !$user ||
            !$pass ||
            $request->getUser() !== $user ||
            $request->getPassword() !== $pass
        ) {
            return response('Unauthorized', 401, [
                'WWW-Authenticate' => 'Basic realm="Dev Tools"',
            ]);
        }

        return $next($request);
    }
}
