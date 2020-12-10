<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class myAuth
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
        if(!auth()->check && !auth()->user()->id == request()->get('id'))
        {
            dd("you are not allowed to see this");
        }

        return $next($request);
    }
}
