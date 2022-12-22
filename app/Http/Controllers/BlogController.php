<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= Blog::all();
        $comment = Comment::all();
        // $comment_size= sizeof($comment);
        return view('blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs= Blog::all();
        return view('create')->with('blogs',$blogs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        if($request->hasFile('image')){

            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('blog', $filename);
            $blog->image=$filename;
        }

        // dd($blog);
        $blog->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog , $id)
    {
        $blogs = Blog::all()->where('id',$id);

        return view('update')->with('blogs',$blogs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog,$id)
    {
        $blog = Blog::find($id);   
        $blog->title = $request->title;
        $blog->description= $request->description;


        if($request->hasFile('image')){
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('blog', $filename);
            $blog->image=$filename;
        }

        $blog->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog,$id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back();
    }
}
