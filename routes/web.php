<?php

use Illuminate\Support\Facades\Route;
use App\models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('posts');
});

Route::get('/post/{post}', function ($slug) {
    //Find the post with the slug $slug and pass it to the view called post.blade.php
    $post = Post::find($slug);
    return view('post', ['post' => $post]);
})->where('post', '[A-z_\-]+');
