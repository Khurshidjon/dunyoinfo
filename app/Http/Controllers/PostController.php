<?php

namespace App\Http\Controllers;

use App\Post;
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
        $posts = Post::latest()->paginate(15);
        return view('backend.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $post = new Post();
        $post->title_uz = $request->title_uz;
        $post->title_cyrl = $request->title_cyrl;
        $post->title_ru = $request->title_ru;
        $post->title_en = $request->title_en;
        $post->description_uz = $request->description_uz;
        $post->description_cyrl = $request->description_cyrl;
        $post->description_ru = $request->description_ru;
        $post->description_en = $request->description_en;
        $post->body_uz = $request->body_uz;
        $post->body_cyrl = $request->body_cyrl;
        $post->body_ru = $request->body_ru;
        $post->body_en = $request->body_en;
        $post->status = $request->get('status');
        $filename = $request->file('image');
        if($filename){
            $post->image = $filename->store('Posts'.'/'.date('fY'), 'public');
        }
        $post->save();
        return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
