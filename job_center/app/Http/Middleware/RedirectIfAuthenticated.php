<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $guards = array_keys(config('auth.guards'));
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect('/'); // Hoặc trang bạn muốn chuyển hướng đến
            }
        }

        return $next($request);
    }
}