<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');

    }
    public function layouts()
    {
        return view('site.layouts');

    }
    public function game()
    {
        return view('site.game');
    }

}
