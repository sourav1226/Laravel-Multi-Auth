<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $id=Auth::user()->id;
        $user = User::find($id);
        $state_id=$user->state;
        $city_id=$user->city;
        $state=State::find($state_id);
        $city=City::find($city_id);
      
        return view('dashboard',compact('user','state','city'));
    }

    public function change_img()
    {
        return view('change');
    }
}
