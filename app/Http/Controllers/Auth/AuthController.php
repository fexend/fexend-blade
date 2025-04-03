<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

final class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function loginPost(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
