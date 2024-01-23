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
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Wahyu Rahayu',
        //     'email' => 'wahyu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Cindy',
        //     'email' => 'cindy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> <p>Perspiciatis, provident corporis facere dolor amet quaerat natus, est nostrum deserunt enim dolore, doloremque error sit! Officia placeat, maiores animi facilis itaque modi cum incidunt dolorum repudiandae labore tenetur asperiores perferendis</p> <p>velit maxime at ab ipsam ex delectus assumenda consectetur quod necessitatibus corrupti unde. Deleniti cum distinctio corporis accusantium, consequuntur quia blanditiis impedit aliquam, rem in nostrum, inventore reiciendis sed cupiditate dolor ab! Culpa veritatis, quae ipsa eos maiores repudiandae earum eius amet tempora commodi quos error quas nobis quibusdam, nisi natus. Quos, accusantium fuga! Illo odio voluptatum itaque maxime? Itaque, quam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> <p>Perspiciatis, provident corporis facere dolor amet quaerat natus, est nostrum deserunt enim dolore, doloremque error sit! Officia placeat, maiores animi facilis itaque modi cum incidunt dolorum repudiandae labore tenetur asperiores perferendis</p> <p>velit maxime at ab ipsam ex delectus assumenda consectetur quod necessitatibus corrupti unde. Deleniti cum distinctio corporis accusantium, consequuntur quia blanditiis impedit aliquam, rem in nostrum, inventore reiciendis sed cupiditate dolor ab! Culpa veritatis, quae ipsa eos maiores repudiandae earum eius amet tempora commodi quos error quas nobis quibusdam, nisi natus. Quos, accusantium fuga! Illo odio voluptatum itaque maxime? Itaque, quam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> <p>Perspiciatis, provident corporis facere dolor amet quaerat natus, est nostrum deserunt enim dolore, doloremque error sit! Officia placeat, maiores animi facilis itaque modi cum incidunt dolorum repudiandae labore tenetur asperiores perferendis</p> <p>velit maxime at ab ipsam ex delectus assumenda consectetur quod necessitatibus corrupti unde. Deleniti cum distinctio corporis accusantium, consequuntur quia blanditiis impedit aliquam, rem in nostrum, inventore reiciendis sed cupiditate dolor ab! Culpa veritatis, quae ipsa eos maiores repudiandae earum eius amet tempora commodi quos error quas nobis quibusdam, nisi natus. Quos, accusantium fuga! Illo odio voluptatum itaque maxime? Itaque, quam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> <p>Perspiciatis, provident corporis facere dolor amet quaerat natus, est nostrum deserunt enim dolore, doloremque error sit! Officia placeat, maiores animi facilis itaque modi cum incidunt dolorum repudiandae labore tenetur asperiores perferendis</p> <p>velit maxime at ab ipsam ex delectus assumenda consectetur quod necessitatibus corrupti unde. Deleniti cum distinctio corporis accusantium, consequuntur quia blanditiis impedit aliquam, rem in nostrum, inventore reiciendis sed cupiditate dolor ab! Culpa veritatis, quae ipsa eos maiores repudiandae earum eius amet tempora commodi quos error quas nobis quibusdam, nisi natus. Quos, accusantium fuga! Illo odio voluptatum itaque maxime? Itaque, quam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
