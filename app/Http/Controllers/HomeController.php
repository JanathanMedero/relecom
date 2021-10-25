<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function us()
    {
        return view('us');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

}
