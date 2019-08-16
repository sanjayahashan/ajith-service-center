<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function showroom(){
        return view('showroom');
    }
    public function reserv(){
        return view('user.dashboard');
    }

}
