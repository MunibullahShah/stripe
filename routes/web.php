<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile(
        resource_path("posts/third-post.html")
    );
//    return view('posts', [
//        'posts' => \App\Models\Post::all()
//    ]);
});

Route::get("posts/{post}", function ($slug) {
    //find a post by slug and pass it to view called "post".


    return view('post', [
        'post' => \App\Models\Post::find($slug)
    ]);


})->where('post', '[A-z_\-]+');
