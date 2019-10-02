<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        return view('home.welcome');
    }

    public function services(){
        return view('pages.services');
    }

    public function welcome($name='islam'){
        $projectName = 'ACT Project';
        $year = date('Y');
        return view('home.welcome',compact('name','projectName','year'));
    }


}
