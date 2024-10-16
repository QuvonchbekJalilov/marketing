<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class setLang
{
    public function handle(Request $request, Closure $next)
    {
        $lang = session('lang', 'uz');
        App::setLocale($lang);

        return $next($request);
    }
}
