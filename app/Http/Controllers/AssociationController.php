<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use App\Models\User;
use Twilio\Rest\Client;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associations = Association::all();
        return view('associations.index', compact('associations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('associations.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
        'name' => 'required',
        'type'=>'required',
        'email' => 'required|email',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
        'adress' => 'required'
    ]);
        Association::create($request->all());
        return redirect('/association');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
       // return view('associations.show', compact('velo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        return view('associations.edit', compact('association'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association)
    {
        $association->update($request->all());
        return redirect('/association');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
        $association->delete();
        return back()->with('message', 'item deleted successfully');
    }


    public function ShowMembersList($association)
    {
        $search=$request['search'] ?? "";
        if($search==""){
            $users = User::all();
        }
        return view('associations.AffectMember', compact('users','search','association'));
    }


    public function SearchMembersFilter(Request $request,$association)
    {
        $search=$request['search'] ?? "";
        if($search!=""){
            $users=User::where('name','LIKE',"%$search%")
                ->orWhere('email','LIKE',"%$search%")
                ->get();
        }
        else {
            $users = User::all();
        }
        return view('associations.AffectMember', compact('users','search','association'));
    }

    public function addSelectedUserToAssociation(Association $association,  $user)
    {
        $numb="+21629162035";
        //$association->users()->get()
        $user1 = User::find($user);

        $user1->association()->associate( $association);
        $user1->save();

        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($user1->phone,
            ['from' => $twilio_number, 'body' => "vous etes affecté a une association"] );


        return redirect('/association');
    }

    public function export()
    {
        return dd("ee");
       // return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function listUsersPerAsssociation(Association $association)
    {
        $users=$association->users()->get();
        return view('associations.UsersPerAssociation', compact('users'));

    }
}
