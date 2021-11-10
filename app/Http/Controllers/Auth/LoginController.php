<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $remember = $request->remember ? true : false;

        $authValid = Auth::guard('web')->validate(['email' => $request->email, 'password' => $request->password]);
        
        if($authValid){
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password],$remember)) {

                // return response()->json(route('conta'), 200);
                return redirect()->route('conta');
            }
        }else{
            // return response()->json(['invalid' => 'Email ou Senha invalidos'], 422);
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
        return redirect()->route('login');
    }
}
