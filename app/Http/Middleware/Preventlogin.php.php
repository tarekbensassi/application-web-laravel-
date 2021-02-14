<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PreventloginPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch (Auth::user()->role) {
                case 'superAdmin':
                    return redirect()->intended(route('admin'));
                    break;
                case 'responsable':
                    return redirect()->intended(route('responsable.dashboard'));
                    break;
                case 'personnel':
                    return redirect()->intended(url('/'));
                    break;
            }

        }
        return $next($request);
    }
}
