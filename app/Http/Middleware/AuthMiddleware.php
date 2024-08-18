<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika pengguna belum login dan bukan di halaman root
        if (!Auth::check() && $request->path() != '/') {
            return redirect()->route('login.form');
        }

        return $next($request);
    }
}
