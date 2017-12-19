<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class LoginOraMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $rolee = Auth::user()->role;
        
        if (Auth::check() && ($rolee == 'admin' || $rolee == 'user')){
            return $next($request);
        } 
        return redirect ()-> route ('/login') ;
    }
}
