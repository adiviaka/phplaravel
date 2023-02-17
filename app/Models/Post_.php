<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
// extends Model
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Adivia Khusnul Aisha",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, doloremque, inventore excepturi consequatur consectetur libero praesentium dolor et deleniti nemo harum animi ipsam? At dolor omnis vero voluptatibus sunt mollitia, veritatis blanditiis, velit, ullam enim quibusdam dicta quis quia excepturi! Unde repellat expedita cum eligendi odit fugit, maxime accusantium cupiditate vitae facere porro atque recusandae velit quia est sapiente quidem doloribus saepe sunt ullam dolorum nulla non? Cumque sapiente aspernatur officiis suscipit necessitatibus reiciendis delectus voluptas saepe earum harum. Unde, veritatis labore beatae repudiandae ad molestias doloribus fugit suscipit cupiditate nesciunt exercitationem autem culpa reiciendis laudantium. Quas aliquam iure facere."
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Alya Zahra Fatikha",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo adipisci iusto eum fugiat, eligendi consequatur voluptates ipsa debitis illum sequi aperiam, molestias vel. Eum assumenda consectetur in sequi quae inventore illum, suscipit voluptate odio. Voluptatibus ducimus quam sunt nemo est. Dolor non dignissimos animi fuga, aliquid maiores quidem ea, optio deserunt delectus recusandae dolorem sed ex dolores laboriosam possimus rem id debitis nam tempora! Ex debitis recusandae commodi culpa iure velit doloribus reiciendis dignissimos porro illo, nesciunt facilis aliquid quaerat."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
    //         $post = [];
    //         foreach ($posts as $p) {
    //         if($p["slug"] === $slug){
    //         $post = $p;
    //     }
    // }
        return $posts->firstWhere('slug', $slug);
    }
}
