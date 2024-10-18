<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }
}
