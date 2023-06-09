<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditPostController extends Controller
{
    public function edit(Post $post)
    {
        return view('admin.edit.post', [
            'posts' => $post
        ]);
    }

    public function update(Post $post)
    {
        //   dd(request()->file('thumbnail')->store('thumbnails'));
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'excerpt' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'body' => 'required'
        ]);
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);
        return back();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
