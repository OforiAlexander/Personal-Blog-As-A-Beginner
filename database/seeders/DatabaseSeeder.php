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

        Post::factory(3)->create();

        // $user = User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $personal = Category::create([
        //     'name' => "Personal",
        //     'slug' => 'personal',
        // ]);

        // $family = Category::create([
        //     'name' => "Family",
        //     'slug' => 'family',
        // ]);

        // $hobby = Category::create([
        //     'name' => "Hobby",
        //     'slug' => 'hobby',
        // ]);

        // //Post table creating 

        // Post::create([
        //     'title' => "My Personal Post",
        //     "slug" => "my-personal-post",
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'excerpt' => 'this is the excerpt oof the work post, just something alittle long so it does not matter',
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam, odit inventore culpa expedita dolore officiis
        //     magnam saepe modi adipisci nesciunt. Libero earum labore voluptatibus iure ab repellat sequi, obcaecati totam
        //     dignissimos tempore exercitationem eveniet aliquam aperiam nulla illum? Laborum deleniti adipisci eos voluptatem at,
        //     et totam quo, tempore, officia commodi molestias ea tempora neque hic! Dolorem, in corporis atque odio placeat odit
        //     voluptate quaerat facere rem libero quod aliquid ullam, eum ratione ea quidem, sunt sequi minus eaque fuga iste?
        //     Officiis nulla illo quis? Velit, nulla. Dicta iure sint, rem fugiat, ex quasi voluptatibus nostrum laboriosam esse
        //     enim aperiam quia consequatur numquam ducimus repudiandae velit similique vitae sed consequuntur. Iste voluptatibus
        //     accusamus exercitationem magni ad officia sequi quaerat odio enim sit? Eos, modi molestiae, ullam nemo iste qui
        //     dolore, illum doloribus magni esse eligendi. Provident vero, molestias error aut ut magnam ratione perferendis unde,
        //     omnis odit tempore voluptatum distinctio?",

        // ]);
        // Post::create([
        //     'title' => "My Family Post",
        //     "slug" => "my-family-post",
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'excerpt' => 'this is the excerpt oof the work post, just something alittle long so it does not matter',
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam, odit inventore culpa expedita dolore officiis
        //     magnam saepe modi adipisci nesciunt. Libero earum labore voluptatibus iure ab repellat sequi, obcaecati totam
        //     dignissimos tempore exercitationem eveniet aliquam aperiam nulla illum? Laborum deleniti adipisci eos voluptatem at,
        //     et totam quo, tempore, officia commodi molestias ea tempora neque hic! Dolorem, in corporis atque odio placeat odit
        //     voluptate quaerat facere rem libero quod aliquid ullam, eum ratione ea quidem, sunt sequi minus eaque fuga iste?
        //     Officiis nulla illo quis? Velit, nulla. Dicta iure sint, rem fugiat, ex quasi voluptatibus nostrum laboriosam esse
        //     enim aperiam quia consequatur numquam ducimus repudiandae velit similique vitae sed consequuntur. Iste voluptatibus
        //     accusamus exercitationem magni ad officia sequi quaerat odio enim sit? Eos, modi molestiae, ullam nemo iste qui
        //     dolore, illum doloribus magni esse eligendi. Provident vero, molestias error aut ut magnam ratione perferendis unde,
        //     omnis odit tempore voluptatum distinctio?",

        // ]);
        // Post::create([
        //     'title' => "My Hobby Post",
        //     "slug" => "my-hobby-post",
        //     'user_id' => $user->id,
        //     'category_id' => $hobby->id,
        //     'excerpt' => 'this is the excerpt oof the work post, just something alittle long so it does not matter',
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam, odit inventore culpa expedita dolore officiis
        //     magnam saepe modi adipisci nesciunt. Libero earum labore voluptatibus iure ab repellat sequi, obcaecati totam
        //     dignissimos tempore exercitationem eveniet aliquam aperiam nulla illum? Laborum deleniti adipisci eos voluptatem at,
        //     et totam quo, tempore, officia commodi molestias ea tempora neque hic! Dolorem, in corporis atque odio placeat odit
        //     voluptate quaerat facere rem libero quod aliquid ullam, eum ratione ea quidem, sunt sequi minus eaque fuga iste?
        //     Officiis nulla illo quis? Velit, nulla. Dicta iure sint, rem fugiat, ex quasi voluptatibus nostrum laboriosam esse
        //     enim aperiam quia consequatur numquam ducimus repudiandae velit similique vitae sed consequuntur. Iste voluptatibus
        //     accusamus exercitationem magni ad officia sequi quaerat odio enim sit? Eos, modi molestiae, ullam nemo iste qui
        //     dolore, illum doloribus magni esse eligendi. Provident vero, molestias error aut ut magnam ratione perferendis unde,
        //     omnis odit tempore voluptatum distinctio?",

        // ]);
    }
}
