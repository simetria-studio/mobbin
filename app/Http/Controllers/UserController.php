<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index()
    {
        return view('site.me');
    }

    public function nameAlt(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->back();
    }

    public function password(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|min:6|max:20|confirmed'
        ], [
            'password.required'=>'Este campo é obrigatório',
            'password.confirmed'=>'As senhas digitadas não são iguais',
        ]);
        $user = User::find($id);
        $user->update([
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->back();
    }
}
