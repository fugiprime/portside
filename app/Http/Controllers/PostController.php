<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|in:text,video',
            'video_url' => 'required_if:type,==,video|url'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->type = $request->type;
        $post->video_url = $request->video_url;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
