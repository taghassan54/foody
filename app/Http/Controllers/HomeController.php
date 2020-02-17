<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodTruck;
use App\Cities;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(auth()->user()->role);
        if(auth()->check() && auth()->user()->role==1){
            return view('cpanel');
        }elseif (auth()->check() && auth()->user()->role==2) {
                $foodtrucks= auth()->user()->foodtrucks;
                return view('admin.foodtruck.select',compact('foodtrucks'));
        }
        else{
            $foodtrucks=FoodTruck::all();
            $cities=Cities::all();
            return view('welcome',compact('foodtrucks','cities'));
        }

    }
}
