<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Dlc
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(Auth::user()->usertype != 'dlc'){
        //     return redirect('/');
        // }
        // return $next($request);
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $userRole=Auth::user()->usertype;

        if($userRole==='okcl')
        {
            return redirect()->route('okcl.dashboard'); 
        }
        elseif($userRole==='dlc'){
            return $next($request);
           
        }
        elseif($userRole==='lc'){
            return redirect()->route('dashboard'); 
        }
    }
}
