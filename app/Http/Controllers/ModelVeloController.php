<?php

namespace App\Http\Controllers;

use App\Models\Model_Velo;
use Illuminate\Http\Request;

class ModelVeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model_Velos = Model_Velo::all();

        return view('model_Velos.index', compact('model_Velos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('model_Velos.create');
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
        ]);
        Model_Velo::create($request->all());

        return redirect('/models');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model_Velo $model_Velo
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Velo $model_Velo)
    {
        return view('model_Velos.show', compact('model_Velo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model_Velo $model_Velo
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Velo $model_Velo)
    {
        return view('model_Velos.edit', compact('model_Velo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Model_Velo $model_Velo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Velo $model_Velo)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $model_Velo->update($request->all());

        return redirect('/models');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model_Velo $model_Velo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Velo $model_Velo)
    {
        $model_Velo->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
