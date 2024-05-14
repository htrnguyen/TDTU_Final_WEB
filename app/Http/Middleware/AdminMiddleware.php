<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
{
    if (Auth::check()) {
        Log::info('User is authenticated', ['user' => Auth::user()]);
        if (json_encode(Auth::user()->role) === 'admin') {
            Log::info('User is admin', ['user' => Auth::user()]);
            return $next($request);
        }
        Log::info('User is not admin', ['user' => Auth::user()]);
    } else {
        Log::info('User is not authenticated');
    }

    return redirect()->route('login_admin');
}

}
