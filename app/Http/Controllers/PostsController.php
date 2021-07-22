<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostsCreateRequest;

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
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post['slug'] = Str::slug($request->title, '-');
        $post->user_id = Auth()->user()->id;
        $post->category_id = $request->input('category_id');

        //Photo
        if ($file = $request->file('photo_id')) {
            $filename = time() . $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $name = substr($name, 0, -4);
            $file->move('posts/images/', $filename);
            $photo = Photo::create(['file' => $filename, 'name' => $name]);
            $post['photo_id'] = $photo->id;
        }

        $post->save();

        return redirect('/blogs')->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::with(['category', 'photo', 'user'])->where('slug', $slug)->first();
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('blog.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(PostsCreateRequest $request, $id)
    {

        $post = Post::findOrFail($id);
        $input = $request->only(['category_id', 'title', 'description', 'photo_id']);
        if ($file = $request->file('photo_id') == '') {
            $input = $request->except(['photo_id', '_token', '_method']);
        }elseif($file = $request->file('photo_id')) {
            $file = $request->file('photo_id');
            $filename = time() . $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $name = substr($name, 0, -4);
            $file->move('/posts/images/', $filename);
            $photo = Photo::create(['file' => $filename, 'name' => $name]);
            $input['photo_id'] = $photo->id;
        }
        $input['slug'] = Str::slug($request->title, '-');

        $post->update($input);

        return redirect('/blogs')
            ->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $path = str_replace('\\', '/', public_path());
        $image = '/posts/images/' . $post->photo->file;

        if (file_exists($path.$image)) {
            unlink($path.$image);
            //? Delete posts photo also in Photo database
            Photo::where('id', $post->photo_id)->delete();
            $post->delete();
            return redirect('/blogs')->with('message', 'Your post has been deleted!');
        } else {
            $post->delete();
            return redirect('/blogs')->with('message', 'Your post has been deleted!');
        }

    }

}

