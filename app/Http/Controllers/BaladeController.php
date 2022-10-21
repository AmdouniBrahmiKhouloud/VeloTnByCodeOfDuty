<?php

namespace App\Http\Controllers;

use App\Models\Balade;
use App\Models\Velo;
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
        
        $velos = Velo::whereNull('balade_id')->get();
        return view('balades.create',compact('velos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $balade = new Balade();
        $balade->name = $request->all()['name'];
        $balade->starting_hour = $request->all()['starting_hour'];
        $balade->ending_hour = $request->all()['ending_hour'];
        $balade->places = $request->all()['places'];
        $balade->save();
        foreach ($request->all()['velo'] as $velo_id) {
            $velo = Velo::where('id',$velo_id)->get()[0];
            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($balade);
            $velo->balade_id = $balade->id ;
            $velo->save();
        }
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
