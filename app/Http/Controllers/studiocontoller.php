<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class studiocontoller extends Controller
{
    public function index(){
        // return $url = route('profile');
        // return Redirect::route('profile', ['id' => 10]);

        return view('index');
    }

    public function aboutus(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('service');
    }
}
