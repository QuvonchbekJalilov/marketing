<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageAuthController extends Controller
{
        // Umumiy login sahifasi
        public function showLoginForm()
        {
            return view('frontend.auth.login');
        }
    
        // Client login sahifasi
        public function showClientLoginForm()
        {
            return view('auth.login-client');
        }
    
        // Provider login sahifasi
        public function showProviderLoginForm()
        {
            return view('auth.provider.login.index');
        }
    
        // Marketer login sahifasi
        public function showMarketerLoginForm()
        {
            return view('auth.login-marketer');
        }
    
        // Client login qilish
        public function clientLogin(Request $request)
        {
            return $this->login($request, 'client');
        }
    
        // Provider login qilish
        public function providerLogin(Request $request)
        {
            return $this->providerLoginHandler($request);
        }
    
        // Marketer login qilish
        public function marketerLogin(Request $request)
        {
            return $this->login($request, 'marketer');
        }
    
        // Umumiy login funksiyasi (Client va Marketer uchun)
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
    
        // Provider login funksiyasi (providers_manager jadvali uchun)
        // AuthController.php
        protected function providerLoginHandler(Request $request)
        {
            $request->validate([
                'manager_email' => 'required|email',
                'manager_password' => 'required|string',
            ]);
    
            // Attempt to authenticate the user
            if (Auth::attempt([
                'email' => $request->manager_email,
                'password' => $request->manager_password,
            ])) {
                // If successful, regenerate session to prevent session fixation attacks
                $request->session()->regenerate();
    
                // Redirect to intended page or a specific route
                return redirect()->route('provider.dashboard');
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
