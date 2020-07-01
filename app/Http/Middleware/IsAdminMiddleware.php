<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class IsAdminMiddleware
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
        if (!User::isAdmin($request->user())){
            return response('Not Authorized', 401);
        }
        return $next($request);
    }
}
