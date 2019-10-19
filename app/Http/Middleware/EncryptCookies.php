<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as BaseEncrypter;

class EncryptCookies extends BaseEncrypter
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];

//    public function handle($request, \Closure $next)
//    {
//        if ( ! $request->ajax())
//            return response('Forbidden.', 403);
//
//        return $next($request);
//    }
}

