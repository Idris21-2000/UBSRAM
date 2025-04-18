<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
        /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/ussd',        // Exact match
        '/ussd/*',      // Wildcard for sub-routes
        '/africastalking*', // If using AfricasTalking webhooks
    ];
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}
