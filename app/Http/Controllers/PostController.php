<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->with('category', 'author');



        return view('posts.index', [
            'posts' => $posts->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()

        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post

        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {



        $attributes =
            request()->validate([
                'title' => ['required'],
                'slug' => ['required', 'unique:posts,slug'],
                'excerpt' => ['required'],
                'body' => ['required'],
                'category_id' => ['required', 'exists:categories,id']
            ]);


        $attributes['user_id'] = auth()->id();
        Post::create($attributes);

        return redirect('/')->with('success', 'Your Post has been created.');
    }
}
