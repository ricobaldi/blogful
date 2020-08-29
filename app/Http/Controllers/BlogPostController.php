<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests\StoreBlogPostRequest;
use Illuminate\Validation\ValidationData;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('blogposts', BlogPost::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPostRequest $request)
    {
        $validatedData = $request->validated();
        BlogPost::create($validatedData);
        $request->session()->flash('status', 'Blog post was created');

        return redirect()->route('blogposts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogpost)
    {
        return view('posts.show')->with('blogpost', $blogpost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogpost)
    {
        return view('posts.edit')->with('blogpost', $blogpost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPostRequest $request, BlogPost $blogpost)
    {
        $validatedData = $request->validated();
        $blogpost->update($validatedData);
        $request->session()->flash('status', 'Blog post was updated');

        return redirect()->route('blogposts.index')->with('blogposts', BlogPost::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BlogPost $blogpost)
    {
        $blogpost->delete();
        $request->session()->flash('status', 'Blog post was deleted');

        return redirect()->route('blogposts.index')->with('blogposts', BlogPost::all());
    }
}
