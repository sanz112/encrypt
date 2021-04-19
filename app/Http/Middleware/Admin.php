<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::user()->usertype=="ADMIN"){
            return $next($request);
        } else {
            return redirect('/dashboard')->with('status', 'You are not permitted to view this session because you are not an Admin');
        }

    }
}
