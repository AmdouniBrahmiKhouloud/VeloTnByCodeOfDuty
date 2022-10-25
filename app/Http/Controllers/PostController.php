<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('front.news', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($association)
    {

        return view('posts.create', compact('association'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Association $association)
    {         // Form validation
        $this->validate($request, [
            'title' => 'required',
            'details'=>'required',
            'image' => 'required|mimes:jpeg,bmp,png',

        ]);


        if ($request->hasFile('image')) {
        $request->validate([
            'image' => 'mimes:jpeg,bmp,png'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $association->posts()->save(Post::create([...$request->all(), "image" => $imageName]));
    }
        return redirect('/association');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        //
    }
}
