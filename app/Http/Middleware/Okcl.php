<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Okcl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(Auth::user()->usertype != 'okcl'){
        //     return redirect('/');
        // }

        if(!Auth::check()){
            return redirect()->route('login');
        }
        $userRole=Auth::user()->usertype;

        if($userRole==='okcl')
        {
        return $next($request);
        }
        elseif($userRole==='dlc'){
            return redirect()->route('dlc.dashboard'); 
        }
        elseif($userRole==='lc'){
            return redirect()->route('dashboard'); 
        }
    }
}
