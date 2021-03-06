<?php

namespace App\Http\Middleware;

use Closure;

class adminMiddleware
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
        $user=$request->user();
        if($user && $user->id_admin === 1)
        {
        return $next($request);
        }   
        else{
        return redirect()->route('homepage');
        }
    }
}
