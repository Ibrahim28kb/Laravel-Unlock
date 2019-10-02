<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function whoWeAre(){
        return view('pages.who_we_are');
    }
}
