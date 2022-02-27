<?php

namespace App\Http\Middleware;
//use App\Http\Middleware\Session;
use Closure;
use Illuminate\Http\Request;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // print_r(Session()->get('logData'));
        if (empty(Session()->get('logData'))) {
            return redirect('/create');
        };
        return $next($request);
    }
}
