<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManualAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->session()->has('user_id')) {
            return redirect()->route('login')
                ->withErrors(['auth' => 'Please log in to access the dashboard.']);
        }

        return $next($request);
    }
}
