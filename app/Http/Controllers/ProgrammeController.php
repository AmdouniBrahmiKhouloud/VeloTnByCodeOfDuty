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
        ]);

        Programme::create($request->all());

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
        $programme->update($request->all());

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
