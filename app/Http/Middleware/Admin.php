<?php

namespace App\Http\Middleware;
use App\Product;

use Closure;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {	if(!Auth::user()){
			return redirect()->guest('login');
		}
		if(Auth::user()->role_id!=1){
			return redirect()->guest('auth/login');
		}
		$products=Product::where('photo',NULL)->count();
		$request->merge(compact('products'));
        return $next($request);
    }
}
