<?php

namespace App\Http\Middleware\qian;

use Closure;

class DengMiddlewar
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
        if ($request->session()->has('denglu')) {
            return $next($request);
        } else {
            return redirect('/sn/login');
        }
    }
}
