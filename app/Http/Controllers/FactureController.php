<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index(Request $request)
    {
        $factures = Facture::all();
        //dd($factures);
        return view('facture.index',compact('factures'));
    }
    public function listLocationParFacture(Facture $facture){
        $locations=$facture->locations()->get();
        return view('facture.listLocationParFacture',compact('locations'));
    }
}
