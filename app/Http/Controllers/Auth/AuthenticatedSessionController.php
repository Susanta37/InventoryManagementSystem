<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        // dd($request->all(),$request->user());
        $loggedInUser=$request->user()->usertype;
        if($loggedInUser==='okcl'){
             return redirect()->intended(route('okcl.dashboard',absolute:false));
            }
        elseif($loggedInUser==='dlc'){
                return redirect()->intended(route('dlc.dashboard',absolute:false));
               }
        elseif($loggedInUser==='lc'){
                return redirect()->intended(route('dashboard',absolute:false));
                }
       
        // if($request->user()->usertype==='okcl'){
        //     return redirect('admin/dashboard');
        // }
        // else if($request->user()->usertype==='dlc'){
        //     return redirect('dlc/dashboard');
        // }
       
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
