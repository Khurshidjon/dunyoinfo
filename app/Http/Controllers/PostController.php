<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Intervention\Image\Facades\Image as Image;

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
        $categories = Category::where('status', 'published')->get();
        return view('backend.posts.create', [
            'categories' => $categories,
        ]);
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
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title_uz);
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
        $post->author_id = \Auth::id();
        $post->status =  $request->get('status');
        $post->category_id = 1 * $request->get('category');
        if ($request->get('banner') == "on"){
            $post->banner = 1;
        }else{
            $post->banner = 0;
        }
        dd($post->banner);
        $file = $request->file('image');

        if($file){

            $filenamewithextension = $request->file('image')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.time().'.'.$extension;

            //small thumbnail name
            $smallthumbnail = $filename.time().'.'.$extension;

            //medium thumbnail name
            $mediumthumbnail = $filename.time().'.'.$extension;

            //large thumbnail name
            $largethumbnail = $filename.time().'.'.$extension;

            //Upload File
            $request->file('image')->storeAs('public/images', $filenametostore);

            $request->file('image')->storeAs('public/images/thumbnailSmall', $smallthumbnail);
            $request->file('image')->storeAs('public/images/thumbnailMedium', $mediumthumbnail);
            $request->file('image')->storeAs('public/images/thumbnailLarge', $largethumbnail);

            //create small thumbnail
            $smallthumbnailpath = public_path('storage/images/thumbnailSmall/'. $smallthumbnail);
            $this->createThumbnail($smallthumbnailpath, 270, 225);

            //create medium thumbnail
            $mediumthumbnailpath = public_path('storage/images/thumbnailMedium/'. $mediumthumbnail);
            $this->createThumbnail($mediumthumbnailpath, 572, 350);

            //create large thumbnail
            $largethumbnailpath = public_path('storage/images/thumbnailLarge/'. $largethumbnail);
            $this->createThumbnail($largethumbnailpath, 450, 258);

            $post->image = $filenametostore;
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post has been created successfully');
    }

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
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
