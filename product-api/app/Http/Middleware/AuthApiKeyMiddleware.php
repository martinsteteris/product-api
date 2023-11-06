<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthApiKeyMiddleware
{
    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('x-api-key');

        if ($apiKey !== config('auth.api.product-api-key')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
