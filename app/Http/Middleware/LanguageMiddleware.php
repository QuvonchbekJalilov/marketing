<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        // Tilni sessiyadan oling yoki default tilni o'rnating
        $locale = Session::get('locale', config('app.locale'));
//        dd($locale);
        App::setLocale($locale);

        return $next($request);
    }
}
