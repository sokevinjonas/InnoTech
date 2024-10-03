<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('public.blog.index');
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
