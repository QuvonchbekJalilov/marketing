<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
   
    public function handle(Request $request, Closure $next)
    {

        if (auth()->user()->role_id == 1) {
            return $next($request);
        }

        return abort(403, 'You are not admin to enter this information');
    }
}
