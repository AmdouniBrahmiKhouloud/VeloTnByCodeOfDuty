<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    public function index()
    {
        $locations = Location::where('user_id',auth()->user()->getAuthIdentifier())->where('isPaid', '=', false)->get();
        return view('location.carte',compact('locations'));
    }
    public function cancel(Location $location){
        $location->delete();
        return back()
            ->with('success','reservation deleted successfully.');
    }
}
