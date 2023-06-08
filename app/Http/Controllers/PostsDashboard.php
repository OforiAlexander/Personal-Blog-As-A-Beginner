<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsDashboard extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        
        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('dashboard', [
            'posts' => $posts->paginate(3)
        ]);
    }
}
