<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function create()
    {
        $state = State::all();
        $city=City::join('states','cities.state_id','states.id')
            ->select('cities.*','states.name')
            ->get();
        return view('business.add_business',compact('state','city'));
    }
    public function getCity($state_id){
        $city=City::where('state_id',$state_id)->get();
        return json_encode($city);
    }

}
