<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post{

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug){
        return static::all()->where('slug', $slug)->first();
    }

    public static function findOrFail($slug){
        $post = static::find($slug);
        if(!$post){
            abort(404);
        }
        return $post;
    }

    public static function all(){
        return cache()->rememberForever('post.all', function(){
            return collect(glob(resource_path('posts') . '/*.html'))
                -> map(fn($file) => YamlFrontMatter::parse(file_get_contents($file)))
                -> map(fn($document) => new Post(
                    $document->title, 
                    $document->excerpt, 
                    $document->date, 
                    $document->body(), 
                    $document->slug
            ))
            -> sortByDesc('date');
        });

    }
}
