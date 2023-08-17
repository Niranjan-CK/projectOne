<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();
        $user = User::factory()->create();

        $mobile = Category::create([
            'name' => 'Mobile',
            'slug' => 'mobile'
        ]);

        $laptop = Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id'=>$laptop->id,
            'title' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'excerpt'=> 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eaque dolorem cumque at delectus laudantium animi, officia reprehenderit vel facilis officiis minus blanditiis quaerat velit libero voluptatum incidunt dolores nam.'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id'=>$mobile->id,
            'title' => 'Samasung flip 5',
            'slug' => 'flip5',
            'excerpt'=> 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eaque dolorem cumque at delectus laudantium animi, officia reprehenderit vel facilis officiis minus blanditiis quaerat velit libero voluptatum incidunt dolores nam.'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id'=>$mobile->id,
            'title' => 'iphone 15',
            'slug' => 'i15',
            'excerpt'=> 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eaque dolorem cumque at delectus laudantium animi, officia reprehenderit vel facilis officiis minus blanditiis quaerat velit libero voluptatum incidunt dolores nam.'
        ]);
        
        Post::create([
            'user_id'=> $user->id,
            'category_id'=>$laptop->id,
            'title' => 'TUF',
            'slug' => 'tuf',
            'excerpt'=> 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eaque dolorem cumque at delectus laudantium animi, officia reprehenderit vel facilis officiis minus blanditiis quaerat velit libero voluptatum incidunt dolores nam.'
        ]);
    }
}
