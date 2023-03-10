<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
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

    // public function show($slug){
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => Post::find($slug)
    //     ]);
    // }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function category(Category $category){
            return view('category',[
                "title" => $category->name,
                "posts" => $category->posts,
                "category" => $category->name
            ]);
    }

    public function categories(){
        return view('categories',[
            "title" => "Post Categories",
            "categories" => Category::all()
        ]);
    }
}
