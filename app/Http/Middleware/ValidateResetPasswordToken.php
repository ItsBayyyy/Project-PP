<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ValidateResetPasswordToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->query('token');

        if (!$token) {
            return redirect()->route('login')->withErrors(['message' => 'Invalid reset token.']);
        }

        $passwordReset = DB::table('password_resets')->where('token', $token)->first();

        if (!$passwordReset || Carbon::parse($passwordReset->created_at)->addMinutes(60)->isPast()) {
            return redirect()->route('login')->withErrors(['message' => 'Invalid or expired reset token.']);
        }

        $request->merge(['email' => $passwordReset->email]);

        return $next($request);
    }
}
