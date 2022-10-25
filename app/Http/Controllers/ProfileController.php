<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\updateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile')->with('user',auth()->user());
    }
    public function update(updateProfileRequest $request){
        $user = auth()->user();
        $user->update([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'region'=>$request->region,
            'address'=>$request->address,
        ]);
        session()->flash('success',"User Profile updated successfully");
        return redirect()->back();
    }
}
