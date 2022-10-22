<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = Programme::all();

        return view('programmes.index', compact('programmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description'  => 'required',
            'pointDepart'=> 'required',
            'distance'=> 'required|integer',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('images'), $filename);
        $programme = new Programme();
        $programme->name = $request->all()['name'];
        $programme->description = $request->all()['description'];
        $programme->pointDepart = $request->all()['pointDepart'];
        $programme->distance = $request->all()['distance'];
        $programme->image = $filename ;
        $programme->save();

        // Programme::create($request->all());

        return redirect('/programmes');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programme $programme
     * @return \Illuminate\Http\Response
     */
    public function show(Programme $programme)
    {
        return view('programmes.show', compact('programme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programme $programme
     * @return \Illuminate\Http\Response
     */
    public function edit(Programme $programme)
    {
        return view('programmes.edit', compact('programme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Programme $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programme $programme)
    {
        $this->validate($request, [
            'name' => 'required',
            'description'  => 'required',
            'pointDepart'=> 'required',
            'distance'=> 'required|integer',
        ]);
        $file= $request->file('image');
        if ($file) {
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $programme->image = $filename;
        }
        $programme->name = $request->all()['name'];
        $programme->description = $request->all()['description'];
        $programme->pointDepart = $request->all()['pointDepart'];
        $programme->distance = $request->all()['distance'];
        $programme->save();
        return redirect('/programmes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programme $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        $programme->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
