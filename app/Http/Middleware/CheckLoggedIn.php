<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoggedIn
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
        // Pre-Middleware Action
        if(!isset($_SESSION['userId'])) {
            return redirect('/');
        }

        $response = $next($request);

        // Post-Middleware Action

        return $response;
    }
}
