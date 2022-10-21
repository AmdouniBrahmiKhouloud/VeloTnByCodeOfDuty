<?php

namespace App\Http\Controllers;

use App\Models\Balade;
use Illuminate\Http\Request;

class BaladeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balades = Balade::all();

        return view('balades.index', compact('balades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('balades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Balade::create($request->all());

        return redirect('/balades');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\balade $balade
     * @return \Illuminate\Http\Response
     */
    public function show(Balade $balade)
    {
        return view('balades.show', compact('balade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\balade $balade
     * @return \Illuminate\Http\Response
     */
    public function edit(Balade $balade)
    {
        return view('balades.edit', compact('balade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\balade $balade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balade $balade)
    {
        $balade->update($request->all());

        return redirect('/balades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\balade $balade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balade $balade)
    {
        $balade->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
