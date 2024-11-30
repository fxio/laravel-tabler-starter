<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ?string $role = null): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // If no type is specified (like on welcome page), redirect based on user type
        if (!$role) {
            return match(Auth::user()->role) {
                'admin' => redirect()->route('admin.index'),
                default => redirect()->route('user.index'),
            };
        }

        // If type is specified, check if user has permission
        if (Auth::user()->role !== $role) {
            return match(Auth::user()->role) {
                'admin' => redirect()->route('admin.index'),
                default => redirect()->route('user.index'),
            };
        }

        return $next($request);
    }
}
