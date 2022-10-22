<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::all();

        return view('evenements.index', compact('evenements'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $evenements = Evenement::all();

        return view('front.events', compact('evenements'));
    }

    /**
     * Show the form for creating a new resource.
     *
  * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('evenements.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required|date|after:today',
            'time_debut' => 'required|before:time_fin',
            'time_fin' => 'required|after:time_debut',
            'nbr_place' => 'required|gt:2',
            'prix' => 'required|gte:0',
            'image' => 'required',
            'description'=> 'required',
        ]);

        if ($request->hasFile('image')) {


            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $imageName = time().'.'.$request->image->extension();
            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->image->move(public_path('images'), $imageName);


            Evenement::create([...$request->all(), "image" => $imageName]);
        }


        return redirect('/evenements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        return view('evenements.edit', compact('evenement'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required|date|after:today',
            'time_debut' => 'required|before:time_fin',
            'time_fin' => 'required|after:time_debut',
            'nbr_place' => 'required|gt:2',
            'prix' => 'required|gte:0',
            'image' => 'required',
            'description'=> 'required',
        ]);
        if ($request->hasFile('image')) {


            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $imageName = time().'.'.$request->image->extension();
            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->image->move(public_path('images'), $imageName);
            $evenement->update([...$request->all(), "image" => $imageName]);
        }
        else{
            $evenement->update($request->all());

        }

        return redirect('/evenements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
