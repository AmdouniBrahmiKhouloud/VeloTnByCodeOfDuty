<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Velo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == '0'){
            $locations = Location::where('user_id',auth()->user()->getAuthIdentifier())
                ->orderBy('date')
                ->get();
            }
        else{
            $locations = Location::all();
        }

        return view('location.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $velos = Velo::all();
        return view('location.create',compact('velos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'velo'=>'required',
            'date' => 'required|after:tomorrow',
            'hours' => 'required|numeric|min:1|not_in:0',
        ], [
            'Velo.required' => 'Select cycle is required.',
            'hours.required' => 'Hours field is required.',
            'date.required' => 'date field is required.',
            'date.after:tomorrow' => 'Date field must be after tomorrow.'
        ]);
        $id_velo=$request->velo;
        $hours = $request->hours;
        $velo = Velo::find($id_velo);
        $location = New Location();
        $location->date = $request->date;
        $location->hours = $request->hours;
        $location->isPaid = false;
        $location->price=$velo->price*$hours;
        $location->velo_id=$request->velo;
        $location->user_id=auth()->user()->getAuthIdentifier();
        $location->save();
        return redirect('location');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $velos = Velo::all();
        return view('location.edit',compact('location','velos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $this->validate($request, [
            'velo'=>'required',
            'date' => 'required|after:tomorrow',
            'hours' => 'required|numeric|min:1|not_in:0',
        ], [
            'Velo.required' => 'Select cycle is required.',
            'hours.required' => 'Hours field is required.',
            'date.required' => 'date field is required.',
            'date.after:tomorrow' => 'Date field must be after tomorrow.'
        ]);
        $id_velo=$request->velo;
        $hours = $request->hours;
        $velo = Velo::find($id_velo);$location->date = $request->date;
        $location->hours = $request->hours;
        $location->isPaid = false;
        $location->price=$velo->price*$hours;
        $location->velo_id=$request->velo;
        $location->user_id=auth()->user()->getAuthIdentifier();
        $location->save();
        return redirect('/location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return back()
            ->with('success','reservation deleted successfully.');;
    }
}
