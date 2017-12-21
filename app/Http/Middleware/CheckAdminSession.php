<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckAdminSession
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
        echo 'vv'.$request->session()->exists('admin');die;


        if ( ! $request->session()->exists('admin')) {

            return redirect(SITE_URL);
        }
            return $next($request);
     }
}
