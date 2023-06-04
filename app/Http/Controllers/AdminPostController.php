<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
   public function index()
   {
    return view('admin.post',[
        'posts'=>Post::paginate(50)
    ]);
   }
}
