<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminAuthenticate
{
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check($request) && Auth::user()->role == 0){
            return $next($request);
            
        }else{
            alert()->error('Fail', 'Logon fail, incorrect email or password !');
            return redirect()->route('logon.index');
        }
    }
}