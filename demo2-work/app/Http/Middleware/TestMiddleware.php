<?php
namespace App\Http\Middleware;

use Closure;

class TestMiddleware
{
    public function handle($request,Closure $next){
      if(!session()->has('user'))
      {
        return redirect('/indexdenglu');
      }
        return $next($request);
    }
}