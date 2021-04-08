<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsRedactor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_id == 1 && Auth::check() || Auth::user()->role_id == 2 && Auth::check() || Auth::user()->role_id == 3 && Auth::check()){
            return $next($request);
        } else {
            return redirect()->back()->withErrors("Vous n'avez pas accès à cette partie du site!");        
        }
    }
}
