<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    /* Security that if User is NOT logged or registered on the website, user can only see index and the show pages!
    So user can not create or edit a post! */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $posts = Post::all(); */
        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')
            ->get()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('posts/images'), $newImageName);

        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post['slug'] = Str::slug($request->title, '-');
        $post->image_path = $newImageName;
        $post->user_id = Auth()->user()->id;

        $post->save();

        return redirect('/blog')->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)
            ->first()
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)
            ->first()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $post = Post::where('slug', $slug);
        $input = $request->except('image_path', '_token', '_method');
        $input['slug'] = Str::slug($request->title, '-');
        $post->update($input);

        return redirect('/blog')
            ->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
        ->with('message', 'Your post has been deleted!');
    }
}

