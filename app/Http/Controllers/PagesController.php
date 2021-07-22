<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        //? Take 3 from the latest created blog post and show them on homepage
        $recentPosts = Post::with(['user', 'category', 'photo'])->latest('created_at', 'DESC')->take(3)->get();
        return view('index', compact('recentPosts'));
    }
}
