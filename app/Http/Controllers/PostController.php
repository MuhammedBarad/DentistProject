<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = post::all();
       return view('backend.Posts.AllPosts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Posts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|min:3|max:30',
            'auther' => 'required|min:3|max:25',
            'description' => 'required|min:3|max:100',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(348 , 379 )->save('upload/postImage/'.$name_gen);
        $save_url = 'upload/postImage/'.$name_gen;
        post::create([
            'full_name'=>$request->full_name,
            'auther'=>$request->auther,
            'description'=>$request->description,
            'image'=>$save_url,
        ]);
        return redirect('/posts')->with('message','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = post::findOrFail($id);
        return view('backend.Posts.showPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = post::findOrFail($id);
        return view('backend.Posts.editPost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'full_name' => 'required|min:3|max:30',
            'auther' => 'required|min:3|max:25',
            'description' => 'required|min:3|max:100',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(348 , 379 )->save('upload/postImage/'.$name_gen);
        $save_url = 'upload/postImage/'.$name_gen;
        $post = post::findOrFail($id);
        $post->update([
            'full_name'=>$request->full_name,
            'auther'=>$request->auther,
            'description'=>$request->description,
            'image'=>$save_url
        ]);
        return redirect('/posts')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = post::findOrFail($id);
        $post->delete();
        return redirect('/posts')->with('message','Deleted Successfully');
    }
}
