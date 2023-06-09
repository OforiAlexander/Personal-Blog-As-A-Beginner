<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        //  return view('post', ['post' =>  $category->posts]); 
        $post = $category->posts;
        return view('home', ['posts' => $post]);
    }
}
