<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AtomicLockMiddleware
{
    public function handle(Request $request, Closure $next, $prefix = null): Response
    {
        // Ensure that no duplicate request is being processed
        $this->ensureSingleRequest($request);

        // Proceed with the original request
        $response = $next($request);

        // Release the lock after the request is processed
        $this->releaseSingleRequest($request);

        return $response;
    }

    /**
     * Generate a unique key for the request.
     */
    public function requestKey(Request $request): string
    {
        return 'atomic_lock_middleware_' . $this->suffix($request);
    }

    /**
     * Handle request termination and release lock.
     */
    public function terminate(Request $request, Response $response): void
    {
        $this->releaseSingleRequest($request);
    }

    /**
     * Ensure that only one request is processed at a time by locking it.
     */
    private function ensureSingleRequest($request): void
    {
        // Check if the request is already locked
        if (Cache::has($this->requestKey($request))) {
            throw new HttpException(
                429, // HTTP status code for "Too Many Requests"
                __('Multiple duplicate request. Wait until the previous request is completed.')
            );
        }

        // Lock the request for 60 seconds
        Cache::put($this->requestKey($request), 'this signature has been consumed', 60);
    }

    /**
     * Release the lock after the request is processed.
     */
    private function releaseSingleRequest($request): void
    {
        Cache::forget($this->requestKey($request));
    }

    /**
     * Generate a unique prefix for the request based on URL and other parameters.
     */
    private function suffix(Request $request): string
    {
        $prefix = 'global';

        // You can add custom logic here to modify the suffix, such as user IDs or other identifiers

        return md5($request->url()) . '_' . $prefix;
    }
}
