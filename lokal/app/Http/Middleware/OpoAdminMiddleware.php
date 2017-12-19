<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;


class OpoAdminMiddleware
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
        if (Auth::check() && $rolee == 'admin'){
        //if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        } 

        return redirect ('hometown');
    }
}
