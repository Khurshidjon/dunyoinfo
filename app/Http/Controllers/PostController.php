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
        // dd($post->banner);
        $file = $request->file('image');

        if($file){

            $filenamewithextension = $request->file('image')->getClientOriginalName();
            $filenamewithextension = str_replace(' ', '-', $filenamewithextension);
            // dd($filenamewithextension);
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.time().'.'.$extension;

            //small thumbnail name
            $thumbnail450x258 = $filename.time().'.'.$extension;

            //medium thumbnail name
            $thumbnail371x208 = $filename.time().'.'.$extension;

            //large thumbnail name
            $thumbnail472x270 = $filename.time().'.'.$extension;
            $thumbnail270x225 = $filename.time().'.'.$extension;
            $thumbnail95x95 = $filename.time().'.'.$extension;
            $thumbnail600x600 = $filename.time().'.'.$extension;

            //Upload File
            
            $request->file('image')->storeAs('public/images', $filenametostore);

            $request->file('image')->storeAs('public/images/450x258', $thumbnail450x258);
            $request->file('image')->storeAs('public/images/371x208', $thumbnail371x208);
            $request->file('image')->storeAs('public/images/472x270', $thumbnail472x270);
            $request->file('image')->storeAs('public/images/270x225', $thumbnail270x225);
            $request->file('image')->storeAs('public/images/95x95', $thumbnail95x95);
            $request->file('image')->storeAs('public/images/600x600', $thumbnail600x600);

            //create small thumbnail
            $thumbnail450x258path = public_path('storage/images/450x258/'. $thumbnail450x258);
            $this->createThumbnail($thumbnail450x258path, 450, 258);

            //create medium thumbnail
            $thumbnail371x208path = public_path('storage/images/371x208/'. $thumbnail371x208);
            $this->createThumbnail($thumbnail371x208path, 371, 208);

            //create large thumbnail
            $thumbnail472x270path = public_path('storage/images/472x270/'. $thumbnail472x270);
            $this->createThumbnail($thumbnail472x270path, 472, 270);

            //create small thumbnail
            $thumbnail270x225path = public_path('storage/images/270x225/'. $thumbnail270x225);
            $this->createThumbnail($thumbnail270x225path, 270, 225);

            //create medium thumbnail
            $thumbnail95x95path = public_path('storage/images/95x95/'. $thumbnail95x95);
            $this->createThumbnail($thumbnail95x95path, 95, 95);

            //create large thumbnail
            $thumbnail600x600path = public_path('storage/images/600x600/'. $thumbnail600x600);
            $this->createThumbnail($thumbnail600x600path, 600, 600);


            $post->image = $filenametostore;
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post has been created successfully');
    }

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->fit($width, $height, function ($constraint) {
            $constraint->upsize();
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
