<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $posts = $user->posts;

        return view('admin.post', compact('posts'));
    }
}
