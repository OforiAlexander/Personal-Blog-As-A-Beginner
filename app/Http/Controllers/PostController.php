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
        return view('home', ['posts' =>  Post::latest()->get()]);
    }

    public function show(Post $post)
    {
        return view("post", ['post' =>$post]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {


        dd(request()->file('thumbnail'));
    //    $path = request()->file('thumbnail')->store('thumbnails');
    //    return 'done'. $path;
        //  $attributes = request()->validate([
        //       'excerpt' => 'required',
        //       'title' => 'required',
        //       'body' => 'required',
        //       'slug' => ['required', Rule::unique('posts', 'id')],
        //       'category_id' => ['required', Rule::exists('categories', 'id')]

        //   ]);

        //   $attributes['user_id'] = Auth::id();
        //   Post::create($attributes);

        //   return redirect('/');
        
    // ddd(request()->all());
    }
}
