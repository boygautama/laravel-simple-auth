<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
   
    public function handle(Request $request, Closure $next, $userType)    {

            if(auth()->user()->type == $userType){
                            return $next($request);
            }
    //   echo      auth()->user()->type."<br>".$userType;
        return response()->json(['Anda Tidak Memiliki Hak Akses ke Page ini.']);
             /* return response()->view('errors.check-permission'); */
    }
}
