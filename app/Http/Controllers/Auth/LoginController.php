<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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

                return response()->json(route('home'), 200);
            }
        }else{
            return response()->json(['invalid' => 'Email ou Senha invalidos'], 422);
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
        return redirect()->route('login');
    }
}
