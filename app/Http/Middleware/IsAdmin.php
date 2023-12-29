<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
   public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if ($user && ($user->is_admin == 1 || $user->is_admin == 2 || $user->is_admin == 3)) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', "You don't have admin access.");
    }
}
