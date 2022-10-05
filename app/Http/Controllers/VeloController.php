<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use Illuminate\Http\Request;

class VeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $velos = Velo::all();

        return view('velos.index', compact('velos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('velos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Velo::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Velo $velo
     * @return \Illuminate\Http\Response
     */
    public function show(Velo $velo)
    {
        return view('velos.show', compact('velo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Velo $velo
     * @return \Illuminate\Http\Response
     */
    public function edit(Velo $velo)
    {
        return view('velos.edit', compact('velo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Velo $velo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Velo $velo)
    {
        $velo->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Velo $velo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Velo $velo)
    {
        $velo->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
