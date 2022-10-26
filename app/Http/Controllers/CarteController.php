<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function facture(Request $request){
        $locations = Location::where('user_id',auth()->user()->getAuthIdentifier())->where('isPaid', '=', false)->get();
        $facture= new Facture();
        $facture->datefacturation = new \DateTime();
        $facture->montant=strval($request->total);
        $facture->reference=Str::random(9);
        $facture->save();
        foreach ($locations as $location){
            $location->isPaid=true;
            $location->facture_id=$facture->id;
            $location->save();
        }
        return redirect('stripe/'.$facture->id);
    }
}
