<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreparticipationRequest;
use App\Http\Requests\UpdateparticipationRequest;
use App\Models\participation;
use App\Models\evenement;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function create(Evenement $evenement)
    {
        return view('participation.create', compact('evenement'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Participation::create($request->all());
        return redirect('/evenements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function show(participation $participation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function edit(participation $participation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateparticipationRequest  $request
     * @param  \App\Models\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateparticipationRequest $request, participation $participation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(participation $participation)
    {
        //
    }
}
