<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next, $role)
{
    if (! $request->user()->hasRole($role)) {
        return abort(403, "No tienes permisos para entrar en este sitio");
    }
        return $next($request);
    }
}
