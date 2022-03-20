<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {    //To bypass login 
        if($request->path()=="login" && $request->session()->has('user'))
        {
            return redirect('/');
        }
            //To bypass register 
        if($request->path()=="register" && $request->session()->has('user'))
        {
            return redirect('/');
        }
            //while not login, it was giving error when we tried to access this link
        if($request->path()=="cartlist" && !$request->session()->has('user'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}     