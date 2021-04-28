<?php

namespace App\Http\Middleware;

use Closure;

class authc
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // middleware for checking logged in condition for profile page
    public function handle($request, Closure $next)
    {
        if(!session()->has('Loggeduser')){
            return redirect('login')->with('fail','you must login to access');
        }
        return $next($request);
    }
}
