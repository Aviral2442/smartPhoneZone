<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {           
        // if (Session::has('adminEmail') && Session::has('adminEmail')) {
        if (Session::has('adminEmail')) {
            return $next($request);
        } else {
            return redirect()->route('admin.login')->with('error', 'You must be logged in to view this page');
        }
    }
}
