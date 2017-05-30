<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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

        // return $next($request)
        //   ->header('Access-Control-Allow-Origin', '*')
        //   ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        //   ->header('Access-Control-Allow-Headers', 'content-type, Access-Control-Allow-Headers, x-xsrf-token, Authorization, X-Requested-With');
        //Here we put our client domains
       $trusted_domains = ["http://localhost:4200"];

       if(isset($request->server()['HTTP_ORIGIN'])) {
           $origin = $request->server()['HTTP_ORIGIN'];

           if(in_array($origin, $trusted_domains)) {
               header('Access-Control-Allow-Origin: ' . $origin);
               header('Access-Control-Allow-Headers: Origin, Content-Type, x-xsrf-token, Authorization');
           }
       }

       return $next($request);
    }
}
