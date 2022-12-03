<?php

namespace App\Http\Middleware;

use Closure;

class IsSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!(auth()->user()->rolr->role == "superadmin")) {
            return redirect()->route('accueil')->with("warning", "Vous n'êtes pas authorizer à effectuer cette action");
        }
        return $next($request);
    }
}
