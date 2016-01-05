<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                switch ($guard) {
                    case 'web_sellers':
                        $path = 'vendedor/entrar';
                        break;
                    
                    default:
                        $path = 'comprador/entrar';
                        break;
                }

                return redirect()->guest($path);
            }
        }

        return $next($request);
    }
}
