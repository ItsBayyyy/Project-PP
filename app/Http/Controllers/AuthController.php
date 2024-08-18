<?php

namespace App\Http\Controllers;

use App\Models\Auth as AuthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = AuthModel::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.form');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        if (FacadesAuth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            Cookie::queue('username', $credentials['username'], 43200);
            Cookie::queue('login_status', 'login sukses', 43200);
            return redirect()->intended('/');
        
        } else if (FacadesAuth::attempt(['email' => $credentials['username'], 'password' => $credentials['password']])) {
            $user = FacadesAuth::getProvider()->retrieveByCredentials(['email' => $credentials['username']]);
            $request->session()->regenerate();
            Cookie::queue('username', $user->username, 43200);
            Cookie::queue('login_status', 'login sukses', 43200); 
            return redirect()->intended('/');
        }
    
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
    
}
