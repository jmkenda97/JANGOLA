<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\FavouriteCar;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\CarFeature; 
use App\Models\CarType; 
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

    $cars=Car::where('publish_at','<',now())
    ->orderBy('publish_at','desc')
    ->limit(30)
    ->get();
  
 return view('index',['cars'=>$cars]);
}
    
 
}
    
 