<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenMiddleware
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
        if($request->session()->has('forbidden')){
            return $next($request);
        }else{
            return redirect('/sn/login');
        }
        
    }
}
