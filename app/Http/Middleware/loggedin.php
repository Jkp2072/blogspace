<?php

namespace App\Http\Middleware;

use Closure;

class loggedin
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
        if(session()->has('Loggeduser') && (url('/login') == $request->url() || url('/register') == $request->url() )){
            return back();
        }
        return $next($request);
    }
}
