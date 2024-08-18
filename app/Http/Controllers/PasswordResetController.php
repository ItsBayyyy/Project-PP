<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class PasswordResetController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }

    public function searchAccount(Request $request)
    {
        $request->validate(['username' => 'required']);
        $user = User::where('email', $request->username)
            ->orWhere('username', $request->username)
            ->first();
        
        if ($user) {
            $verification_code = rand(100000, 999999);
            $user->verification_code = $verification_code;
            $user->save();

            Mail::send('emails.verification-code', ['code' => $verification_code], function($message) use ($user) {
                $message->to($user->email);
                $message->subject('Your Password Reset Verification Code');
            });

            Session::put('user_email', $user->email);
            return redirect()->route('enter-verification-code');
        } else {
            return back()->withErrors(['username' => 'User not found.']);
        }
    }

    public function showVerificationCodeForm()
    {
        return view('enter-verification-code');
    }

    public function verifyCode(Request $request)
    {
        $request->validate(['verification_code' => 'required|numeric']);
        $email = Session::get('user_email');
        $user = User::where('email', $email)->first();

        if ($user && $user->verification_code == $request->verification_code) {
            Session::put('verification_passed', true);
            return redirect()->route('new-password-form');
        } else {
            return back()->withErrors(['verification_code' => 'Invalid verification code.']);
        }
    }

    public function showNewPasswordForm()
    {
        if (!Session::get('verification_passed')) {
            return redirect()->route('forgot-password-form')->withErrors(['access' => 'Unauthorized access.']);
        }
        return view('new-password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8',
        ]);

        $email = Session::get('user_email');
        $user = User::where('email', $email)->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->verification_code = null;
            $user->save();

            Session::forget('user_email');
            Session::forget('verification_passed');

            return redirect()->route('login')->with('status', 'Password has been reset.');
        } else {
            return back()->withErrors(['password' => 'Failed to reset password.']);
        }
    }
}
