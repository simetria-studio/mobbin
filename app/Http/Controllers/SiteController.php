<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');

    }
    public function layouts()
    {
        $layouts = Layout::get();
        return view('site.layouts', get_defined_vars());

    }
    public function game()
    {
        return view('site.game');
    }

}
