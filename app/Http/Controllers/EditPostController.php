<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class EditPostController extends Controller
{
    public function edit(Post $post)
    {
        return view('admin.edit.post',[
            'posts'=> $post
        ]);
    }

    public function update()
    {
        return 'working';
    }
}
