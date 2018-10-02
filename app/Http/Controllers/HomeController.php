<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function site()
    {
        return view('home');
    }

    public function admin(){
        return view('home_admin');
    }
}
