<?php

namespace App\Http\Middleware;

use Closure;

class JsonRequest
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
        if($request->isJson()){
            return $next($request);
        }
        return response()->json(['ok' => false, 'message' => 'Unauthorized Headers'], 400);
    }
}
