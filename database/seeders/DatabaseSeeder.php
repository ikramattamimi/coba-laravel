<?php

namespace Database\Seeders;

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
        User::factory(5)->create();
        Category::factory(2)->create();
        Post::factory(20)->create();

        // Category::create([
        //     "name" => "Programming",
        //     "slug" => "programming"
        // ]);
        
        // Category::create([
        //     "name" => "Web Programming",
        //     "slug" => "web-programming"
        // ]);

        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus numquam cum laudantium! Natus nihil dignissimos quidem, qui voluptatem ullam provident.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nisi, blanditiis iusto reprehenderit voluptate placeat alias molestiae beatae nihil delectus explicabo, voluptatum cum repudiandae temporibus illum asperiores similique praesentium? Expedita corporis natus ut ducimus molestiae dolores dolore, repellat quas!</p><p>Natus cupiditate doloremque enim, adipisci, aut dignissimos commodi ratione iste ullam eveniet sit esse eligendi iure fugiat id similique recusandae est! Magnam doloribus adipisci ea repudiandae, laborum voluptate, laudantium consectetur sint dignissimos laboriosam veniam, nemo itaque perferendis modi sunt sed ut fuga quibusdam inventore hic facere libero? Modi quaerat suscipit ratione, doloremque unde nulla, atque impedit dolorem, maxime laborum ullam illum quo? Ad veniam quidem rem libero, doloremque maiores at soluta ducimus dolores molestias commodi enim cum expedita, fugiat accusantium quod.</p>",
        //     "category_id" => "1",
        //     "user_id" => "1",
        // ]);
        
        // Post::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus numquam cum laudantium! Natus nihil dignissimos quidem, qui voluptatem ullam provident.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nisi, blanditiis iusto reprehenderit voluptate placeat alias molestiae beatae nihil delectus explicabo, voluptatum cum repudiandae temporibus illum asperiores similique praesentium? Expedita corporis natus ut ducimus molestiae dolores dolore, repellat quas!</p><p>Natus cupiditate doloremque enim, adipisci, aut dignissimos commodi ratione iste ullam eveniet sit esse eligendi iure fugiat id similique recusandae est! Magnam doloribus adipisci ea repudiandae, laborum voluptate, laudantium consectetur sint dignissimos laboriosam veniam, nemo itaque perferendis modi sunt sed ut fuga quibusdam inventore hic facere libero? Modi quaerat suscipit ratione, doloremque unde nulla, atque impedit dolorem, maxime laborum ullam illum quo? Ad veniam quidem rem libero, doloremque maiores at soluta ducimus dolores molestias commodi enim cum expedita, fugiat accusantium quod.</p>",
        //     "category_id" => "1",
        //     "user_id" => "2",
        // ]);

        // Post::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus numquam cum laudantium! Natus nihil dignissimos quidem, qui voluptatem ullam provident.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nisi, blanditiis iusto reprehenderit voluptate placeat alias molestiae beatae nihil delectus explicabo, voluptatum cum repudiandae temporibus illum asperiores similique praesentium? Expedita corporis natus ut ducimus molestiae dolores dolore, repellat quas!</p><p>Natus cupiditate doloremque enim, adipisci, aut dignissimos commodi ratione iste ullam eveniet sit esse eligendi iure fugiat id similique recusandae est! Magnam doloribus adipisci ea repudiandae, laborum voluptate, laudantium consectetur sint dignissimos laboriosam veniam, nemo itaque perferendis modi sunt sed ut fuga quibusdam inventore hic facere libero? Modi quaerat suscipit ratione, doloremque unde nulla, atque impedit dolorem, maxime laborum ullam illum quo? Ad veniam quidem rem libero, doloremque maiores at soluta ducimus dolores molestias commodi enim cum expedita, fugiat accusantium quod.</p>",
        //     "category_id" => "2",
        //     "user_id" => "1",
        // ]);
    }
}
