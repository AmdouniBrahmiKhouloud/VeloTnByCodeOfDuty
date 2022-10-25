<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use App\Models\Magasin;
use App\Models\Model_Velo;
use Illuminate\Http\Request;

use App\Exports\VelosExport;
use Maatwebsite\Excel\Facades\Excel;
use \PDF;

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
        $models = Model_Velo::all();
        $magasins = Magasin::all();

        return view('velos.create',compact('models'),compact('magasins'));
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
            'reference' => 'required',
            'price' => 'required',
            'description' => 'required',
            'nbr_place' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
       
       $file= $request->file('image');
       $filename= date('YmdHi').$file->getClientOriginalName();
       $file-> move(public_path('images'), $filename);
       $data = [] ;
       $data['reference'] = $request->all()['reference'];
       $data['price'] = $request->all()['price'];
       $data['description'] = $request->all()['description'];
       $data['nbr_place'] = $request->all()['nbr_place'];
       $data['magasin_id'] = $request->all()['magasin'];
       $data['model_id'] = $request->all()['model'];
       $data['image'] = $filename;

       Velo::create($data);

       return redirect('/velo');
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
        $models = Model_Velo::all();
        $magasins = Magasin::all();
        return view('velos.edit',compact('velo','models', 'magasins'));
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
        $this->validate($request, [
            'reference' => 'required',
            'price' => 'required',
            'description' => 'required',
            'nbr_place' => 'required',
        ]);
        $file= $request->file('image');
        if ($file) {
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $velo->image = $filename;
        }

        $velo->reference = $request->all()['reference'];
        $velo->price = $request->all()['price'];
        $velo->description = $request->all()['description'];
        $velo->nbr_place = $request->all()['nbr_place'];
        $velo->magasin_id = $request->all()['magasin'];
        $velo->model_id = $request->all()['model'];
        $velo->save();

        return redirect('/velo');
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

    public function export() 
    {
        return Excel::download(new VelosExport, 'velos.xlsx');
    }

    public function export_pdf() 
    {
        $velos = Velo::all();

        $pdf = PDF::loadView('velos.pdf', compact('velos'))->setPaper('A4');
        // download PDF file with download method
        return $pdf->download('velos.pdf');
    }
}
