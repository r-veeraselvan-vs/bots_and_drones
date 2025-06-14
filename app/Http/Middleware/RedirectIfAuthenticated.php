<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
             if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect('/admin/home');
            }
            if (Auth::guard($guard)->check()) {
                 $enquiry_id = Session::get('contact_id');
                 if( $enquiry_id==null)
                {
                     if(Session::get('shop_url')!=null)
                    {
                         return redirect('wishlist/'.Session::get('wishlist')."/".Session::get('wishlist_type')); 
                    }
                    elseif(Auth::user()->seller=="N")
                    {
                       return redirect()->route('enquiry.buyer.list'); 
                    }
                    else if(Auth::user()->seller==null)
                    {
                       return redirect()->route('enquiry.buyer.list'); 
                    }
                    else
                    {
                        return redirect()->route('product.list'); 
                    }
                }
                else
                {
                     
                    return redirect()->route('contact', [$enquiry_id]);
                 
                }
            }
             
        }

        return $next($request);
    }
}
