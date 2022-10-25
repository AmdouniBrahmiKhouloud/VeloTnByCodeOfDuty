<?php

namespace App\Http\Controllers;

use App\Models\Magasin;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magasins = Magasin::all();

        return view('magasins.index', compact('magasins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('magasins.create');
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
            'location'  => 'required',
        ]);
        Magasin::create($request->all());

        return redirect('/magasins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magasin $magasin
     * @return \Illuminate\Http\Response
     */
    public function show(Magasin $magasin)
    {
        return view('magasins.show', compact('magasin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magasin $magasin
     * @return \Illuminate\Http\Response
     */
    public function edit(Magasin $magasin)
    {
        return view('magasins.edit', compact('magasin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Magasin $magasin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magasin $magasin)
    {
        $this->validate($request, [
            'name' => 'required',
            'location'  => 'required',
        ]);
        $magasin->update($request->all());

        return redirect('/magasins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magasin $magasin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magasin $magasin)
    {
        $magasin->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
