<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // return response()->json(Post::all(), 200);
        return view('posts',[
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
