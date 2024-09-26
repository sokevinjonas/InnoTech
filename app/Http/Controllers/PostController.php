<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();

        // Retourner la vue avec les données
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Post::getFrStatuses();
        $categories = PostCategory::all(['id', 'name']);

        return view('admin.posts.create', compact('statuses', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        $data['comments_enabled'] = $request->filled('comments_enabled');
        $data['category_id'] = $data['category'];

        $data['slug'] = Str::slug($data['title']);

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        if ($data['status'] === Post::PUBLISHED)
            $data['published_at'] = now();

        Post::create($data);

        return to_route('admin.posts.index')->with('success', 'Post creer !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post) {}

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
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('admin.posts.index')->with('success', 'Post supprimer !');
    }
}
