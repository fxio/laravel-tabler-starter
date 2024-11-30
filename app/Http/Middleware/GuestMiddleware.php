<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->isActive()) {
            if (Auth::user()->isAdmin()) {
                return redirect()->intended(route('admin.index', absolute: false));
            } else {
                return redirect()->intended(route('user.index', absolute: false));
            }
        }

        return $next($request);
    }
}
