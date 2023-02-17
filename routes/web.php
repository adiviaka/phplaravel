<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home',[
        "title" => "Home"
    ]);
})->name('login');

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Adivia Khusnul Aisha",
        "email" => "adiviaka@gmail.com"
    ]);
});
Route::apiresource("users", PostController::class);
// Route::get('/blog', function () {
//     return view('posts',[
//         "title" => "Blog",
//         "posts" => Post::all()
//     ]);
// });

Route::controller(PostController::class)->group(function(){
    Route::get('/blog', 'index');
    Route::get('/posts/{slug}', 'show');
});
// Route::get('posts/{slug}', function($slug)
// {
//     return view('post', [
//         "title" => "Single Post",
//         "post" => Post::find($slug)
//     ]);
// });