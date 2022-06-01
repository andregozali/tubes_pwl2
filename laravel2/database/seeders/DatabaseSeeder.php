<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Budi',
            'username' => 'budigaming',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Database',
            'slug' => 'database'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Data Algorithm',
            'slug' => 'data-algorithm'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Hacker',
            'slug' => 'hacker'
        ]);


        Post::factory(30)->create();



        User::create([
            'name' => 'Admin',
            'username' => 'admin123',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
    }
}
