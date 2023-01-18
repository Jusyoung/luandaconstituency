<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
        public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect()->intended(route('admin-dashboard'));
            }
            if ($guard == "mp" && Auth::guard($guard)->check()) {
            return redirect()->intended(route('mp-dashboard'));
            }
            if ($guard == "mca" && Auth::guard($guard)->check()) {
            return redirect()->intended(route('mca-dashboard'));
            }
            if ($guard == "chief" && Auth::guard($guard)->check()) {
            return redirect()->intended(route('chief-dashboard'));
            }
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
            if ($guard == "subchief" && Auth::guard($guard)->check()) {
            return redirect()->intended(route('subchief-dashboard'));
            }
            if ($guard == "resident" && Auth::guard($guard)->check()) {
            return redirect()->intended(route('resident-dashboard'));
            }
            if ($guard == "student" && Auth::guard($guard)->check()) {
            return redirect()->intended(route('student-dashboard'));
            }

            return $next($request);
        }
}



