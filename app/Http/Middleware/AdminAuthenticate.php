<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
class AdminAuthenticate

 

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         
        if (\Auth::guard('admin')->user()) {
            if( \Auth::guard('admin')->user()->reset_password)
            {
                return redirect()->route('admin.profile',['profile_type'=>'change_password'])->with('failure','Please Update Password, For security reasons');
            }
            
            return $next($request);
        }else{
               return redirect('/admin/signin');


        }

     }
}
