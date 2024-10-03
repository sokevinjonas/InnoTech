<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', Post::PUBLISHED)->paginate(4);

        return view('public.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        return view('public.blog.show');
    }

    public function category($slug)
    {


        return view('public.blog.category');
    }
}
