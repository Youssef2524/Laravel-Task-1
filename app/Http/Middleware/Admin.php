<?php

namespace App\Http\Middleware;

// use auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$stutes): Response
    {
        // if (Auth()->user()->stutes==1) {
        //     return $next($request);
        //     // return view('admin')
        //     return redirect()->route('admin');
        // }
        // else{
        //     return redirect()->route('home');

        // }
    }
}
