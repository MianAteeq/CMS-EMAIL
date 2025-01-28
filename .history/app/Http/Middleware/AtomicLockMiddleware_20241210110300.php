<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AtomicLockMiddleware
{
    public function handle($request, Closure $next)
    {
        // Generate a unique identifier for the request (could be based on user or request body)
        $requestIdentifier = $this->getRequestIdentifier($request);

        // Check if this identifier is already in the cache
        if (Cache::has($requestIdentifier)) {
            // If the request is in cache, it means it was recently processed
            return response()->json(['error' => 'Duplicate request detected'], 400);
        }

        // Store the identifier in the cache with a short expiration (e.g., 5 seconds)
        Cache::put($requestIdentifier, true, now()->addSeconds(5));

        // Proceed with the request
        return $next($request);
    }

    /**
     * Generate a unique identifier for the request.
     *
     * You can customize this to include things like user ID, request URL, or request body.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function getRequestIdentifier($request)
    {
        // You can base this identifier on the user ID, request path, and method to make it unique per user and action
        $userId = auth()->id() ?: 'guest'; // Use guest if not authenticated
        $requestPath = $request->path();
        $requestMethod = $request->method();

        // Create a unique hash based on the user, path, and method (or customize further)
        return Str::slug($userId . ':' . $requestPath . ':' . $requestMethod);
    }
}
