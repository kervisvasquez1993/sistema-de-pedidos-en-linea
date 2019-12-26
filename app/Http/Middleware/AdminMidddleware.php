<?php

namespace App\Http\Middleware;

use Closure;

class AdminMidddleware
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
        if (!auth()->check()){
            return redirect('login');
        }
        if (!auth()->user()->admin){
            return redirect('login');
        }

        return $next($request);
    }
}
