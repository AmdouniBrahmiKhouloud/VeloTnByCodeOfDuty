<?php

namespace App\Http\Controllers;

use App\Models\Balade;
use App\Models\Velo;
use App\Models\Programme;
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
        $programmes = Programme::whereNull('balade_id')->get();
        return view('balades.create',compact('velos'),compact('programmes'));
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
            'starting_hour'  => 'required|before:ending_hour|after:2 hours',
            'ending_hour'=> 'required',
            'places'=> 'required|integer',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('images'), $filename);
        $balade = new Balade();
        $balade->name = $request->all()['name'];
        $balade->starting_hour = $request->all()['starting_hour'];
        $balade->ending_hour = $request->all()['ending_hour'];
        $balade->places = $request->all()['places'];
        $balade->image = $filename ;
        $balade->save();
        foreach ($request->all()['velo'] as $velo_id) {
            $velo = Velo::where('id',$velo_id)->get()[0];
            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($balade);
            $velo->balade_id = $balade->id ;
            $velo->save();
        }
        foreach ($request->all()['programme'] as $programme_id) {
            $programme = Programme::where('id',$programme_id)->get()[0];
            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($balade);
            $programme->balade_id = $balade->id ;
            $programme->save();
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
        $velos = Velo::whereNull('balade_id')->orWhere('balade_id', $balade->id)->get();
        $programmes = Programme::whereNull('balade_id')->orWhere('balade_id',$balade->id)->get();
        return view('balades.edit', compact('balade', 'velos','programmes'));
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
        
        $file= $request->file('image');
        if ($file) {
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $balade->image = $filename;
        }

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
        foreach ($request->all()['programme'] as $programme_id) {
            $programme = Programme::where('id',$programme_id)->get()[0];

            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($balade);
            $programme->balade_id = $balade->id ;
            $programme->save();
        }
        // $balade->update($request->all());

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

    public function indexFront()
    {
        $balades = Balade::all();

        return view('front.balade', compact('balades'));
    }


    public function programmeByBalade($id)
    {
        $balade= Balade::find($id);
        $programmes = $balade->programmes()->get();

        return view('front.programme', compact('programmes'));
    }
    
}
