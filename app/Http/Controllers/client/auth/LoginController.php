<?php

namespace App\Http\Controllers\client\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Client login sahifasi
    public function showClientLoginForm()
    {
        return view('client.auth.login');
    }

    protected function login(Request $request, $role)
    {
        $credentials = $request->only('email', 'password');
        $credentials['role'] = $role;

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
