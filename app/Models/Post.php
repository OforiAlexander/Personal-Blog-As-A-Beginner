<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    use HasFactory;

    public static function find($slug)
    {
        $path = resource_path("post/{$slug}");
        if (!file_exists($path)) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("post.{$slug}", 1200, fn () => file_get_contents($path));
    }

    public static function get_all()
    {
        $files = file::files(resource_path("post/"));
        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }
}
