<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $post = Post::latest();
        if (request('search')) {
            $post
            ->where('title', 'like' , '%' . request('search'). '%')
            ->orWhere('body', 'like' , '%' . request('search'). '%');
        }
        return view('home', ['posts' => $post->paginate(3)]);
    }

    public function show(Post $post)
    {
        return view("post", ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {

        $attributes = request()->validate([
            'excerpt' => 'required',
            'thumbnail' => 'required|image',
            'title' => 'required',
            'body' => 'required',
            'slug' => ['required', Rule::unique('posts', 'id')],
            'category_id' => ['required', Rule::exists('categories', 'id')]

        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
    }
}
//  Auth::id()