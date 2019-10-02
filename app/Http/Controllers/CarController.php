<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function categories(){
        $categories = [
            1=>'Benz',
            2=>'BMW',
            3=>'Hyundi',
            4=>'GM'
        ];
        return view('car.categories',compact('categories'));
    }

    public function carClasses($categoryId){
        return view('car.car_classes',compact('categoryId'));
    }

    public function order($carId,$customerName){
        return view('car.order',compact('carId','customerName'));
    }
}
