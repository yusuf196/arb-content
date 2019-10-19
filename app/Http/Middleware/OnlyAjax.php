<?php

namespace App\Http\Middleware;

class OnlyAjax{


    public function handle($request, \Closure $next)
    {
        if ( $request->ajax() || $request->wantsJson())
            return response('Forbidden.', 403);

        return $next($request);
    }
}

