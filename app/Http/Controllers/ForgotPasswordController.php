<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forgetPassword');
    }
    public function submitForgetPasswordForm()
    {

    }
    public function showResetPasswordForm()
    {

    }
    public function submitResetPasswordForm()
    {

    }
}
