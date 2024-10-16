<?php

namespace App\Http\Controllers\provider\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Provider login sahifasi
    public function showProviderLoginForm()
    {
        return view('provider.auth.login.index');
    }

    // Provider login qilish
    public function providerLogin(Request $request)
    {
        return $this->providerLoginHandler($request);
    }

    // Provider login funksiyasi (providers_manager jadvali uchun)
    // AuthController.php
    protected function providerLoginHandler(Request $request)
    {
        $request->validate([
            'manager_email' => 'required|email',
            'manager_password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt
        ([
            'email' => $request->manager_email,
            'password' => $request->manager_password,])) {
                
            // If successful, regenerate session to prevent session fixation attacks
            $request->session()->regenerate();
                if (auth()->user()->role_id == 2){
                    return redirect()->route('providers.profile');
                } else {
                    return redirect()->route('provider.home');
                }
        }

        return back()->withErrors([
            'manager_email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Logout qilish
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
