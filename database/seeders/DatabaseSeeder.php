<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Adivia Khusnul Aisha',
            'email' => 'adiviaka@gmail.com',
            'password' => bcrypt('adiviaka')
        ]);
        User::create([
            'name' => 'Alya Zahra Fatikha',
            'email' => 'alyasemarang@gmail.com',
            'password' => bcrypt('alyasemarang')
        ]);
        User::create([
            'name' => 'Farrel Ahmad Yudhitia',
            'email' => 'farrelay@gmail.com',
            'password' => bcrypt('farrelay')
        ]);
        User::create([
            'name' => 'David Edy Putra Pratama',
            'email' => 'davidepp@gmail.com',
            'password' => bcrypt('davidepp')
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);
        
        Post::create([
            'title' => 'First post',
            'slug' => 'first-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus.',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus. Perspiciatis ullam, suscipit dolore rem inventore molestias fugit ipsam.</p><p> Tempore soluta, quas doloribus eaque minima numquam quia pariatur voluptates corrupti excepturi. Soluta magni totam dolorem enim deleniti, eos reprehenderit voluptas animi sed fuga ratione dolores nostrum minima corrupti asperiores consequuntur placeat repudiandae magnam expedita eaque ipsa facere consectetur. Facere dignissimos eaque porro, hic sed facilis fugit at dolor perferendis totam deserunt, tempore dolore architecto tempora praesentium doloribus? Incidunt alias vitae culpa, inventore nemo cupiditate dolorem ratione ducimus corporis excepturi tempore?</p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Second post',
            'slug' => 'second-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus.',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus. Perspiciatis ullam, suscipit dolore rem inventore molestias fugit ipsam.</p><p> Tempore soluta, quas doloribus eaque minima numquam quia pariatur voluptates corrupti excepturi. Soluta magni totam dolorem enim deleniti, eos reprehenderit voluptas animi sed fuga ratione dolores nostrum minima corrupti asperiores consequuntur placeat repudiandae magnam expedita eaque ipsa facere consectetur. Facere dignissimos eaque porro, hic sed facilis fugit at dolor perferendis totam deserunt, tempore dolore architecto tempora praesentium doloribus? Incidunt alias vitae culpa, inventore nemo cupiditate dolorem ratione ducimus corporis excepturi tempore?</p>',
            'category_id' => 1,
            'user_id' => 2,
        ]);
        Post::create([
            'title' => 'Third post',
            'slug' => 'third-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus.',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus. Perspiciatis ullam, suscipit dolore rem inventore molestias fugit ipsam.</p><p> Tempore soluta, quas doloribus eaque minima numquam quia pariatur voluptates corrupti excepturi. Soluta magni totam dolorem enim deleniti, eos reprehenderit voluptas animi sed fuga ratione dolores nostrum minima corrupti asperiores consequuntur placeat repudiandae magnam expedita eaque ipsa facere consectetur. Facere dignissimos eaque porro, hic sed facilis fugit at dolor perferendis totam deserunt, tempore dolore architecto tempora praesentium doloribus? Incidunt alias vitae culpa, inventore nemo cupiditate dolorem ratione ducimus corporis excepturi tempore?</p>',
            'category_id' => 2,
            'user_id' => 3,
        ]);
        Post::create([
            'title' => 'Fourth post',
            'slug' => 'fourth-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus.',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus. Perspiciatis ullam, suscipit dolore rem inventore molestias fugit ipsam.</p><p> Tempore soluta, quas doloribus eaque minima numquam quia pariatur voluptates corrupti excepturi. Soluta magni totam dolorem enim deleniti, eos reprehenderit voluptas animi sed fuga ratione dolores nostrum minima corrupti asperiores consequuntur placeat repudiandae magnam expedita eaque ipsa facere consectetur. Facere dignissimos eaque porro, hic sed facilis fugit at dolor perferendis totam deserunt, tempore dolore architecto tempora praesentium doloribus? Incidunt alias vitae culpa, inventore nemo cupiditate dolorem ratione ducimus corporis excepturi tempore?</p>',
            'category_id' => 3,
            'user_id' => 4,
        ]);
        Post::create([
            'title' => 'Fifth post',
            'slug' => 'fifth-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus.',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla iusto voluptatem dicta id dolorem itaque tempore recusandae atque est delectus. Perspiciatis ullam, suscipit dolore rem inventore molestias fugit ipsam.</p><p> Tempore soluta, quas doloribus eaque minima numquam quia pariatur voluptates corrupti excepturi. Soluta magni totam dolorem enim deleniti, eos reprehenderit voluptas animi sed fuga ratione dolores nostrum minima corrupti asperiores consequuntur placeat repudiandae magnam expedita eaque ipsa facere consectetur. Facere dignissimos eaque porro, hic sed facilis fugit at dolor perferendis totam deserunt, tempore dolore architecto tempora praesentium doloribus? Incidunt alias vitae culpa, inventore nemo cupiditate dolorem ratione ducimus corporis excepturi tempore?</p>',
            'category_id' => 3,
            'user_id' => 2,
        ]);
    }

}
