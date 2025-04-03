<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;

final class RegisterController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function registerPost(RegisterRequest $request)
    {

        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        auth()->login($user);

        return redirect()->route('dashboard');
    }
}
