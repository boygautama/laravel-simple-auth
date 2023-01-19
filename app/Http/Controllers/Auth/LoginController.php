<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function Login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
       
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            } elseif (auth()->user()->type == 'serah') {
                return redirect()->route('serah.home');
            } else {
                return redirect()->route('home');

            }
        } else {
            return redirect()->route('login')
                ->with('error', 'terjadi kesalahan, user atau password anda');
        }
    }
    public function username()
    {
        return 'username';
    }
}
