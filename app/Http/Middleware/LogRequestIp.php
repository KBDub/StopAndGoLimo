<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogRequestIp
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (!$request->is('_debugbar*', 'livewire/update', 'up')) {
            Log::info('request', [
                'ip'     => $request->ip(),
                'method' => $request->method(),
                'path'   => $request->path(),
                'status' => $response->getStatusCode(),
            ]);
        }

        return $response;
    }
}
