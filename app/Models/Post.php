<?php
namespace App\Models;

class Post{
    public static function find($slug){
        if (! file_exists($path = resource_path('posts\\' . $slug . '.html'))) {
            abort(404);
        }
        return cache()->remember("post/" . $slug, 1200, fn() => file_get_contents($path));
    }
}
