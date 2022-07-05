<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Ikram Muhammad Bukhori Attamimi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolor tempora saepe. Animi ex eaque iure aperiam ipsa dolore non, quia voluptatem veritatis culpa perferendis a, quaerat qui mollitia exercitationem numquam molestiae! Iste dicta, dolorum tempore, ipsum nesciunt dignissimos praesentium quod ullam commodi maxime asperiores doloremque quas veritatis at. Nam pariatur, laboriosam deserunt omnis est, corrupti reprehenderit velit hic neque consectetur accusamus soluta, minima cupiditate dolorum repudiandae voluptate fugiat labore doloribus eos repellendus facere suscipit maxime. Beatae iste tempore totam."
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Thoriq Fadhillah A",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi, esse delectus illum quos aperiam animi porro accusantium, debitis culpa, quod exercitationem voluptatibus minus officia itaque perspiciatis modi obcaecati omnis expedita eaque veniam? Fugit impedit excepturi distinctio animi natus, vitae blanditiis asperiores maxime perferendis ipsam architecto possimus corrupti repellendus, autem fuga aliquid pariatur magnam, tempore sequi esse! Ipsam cum repellendus illum rem incidunt eum dolor! Eius doloremque itaque est numquam? Optio consectetur et nesciunt tempora, laborum quam aperiam, ipsam laudantium sit nihil a. Eaque veniam commodi, ad repellat possimus quos excepturi optio libero, et neque cupiditate animi quia ipsam unde."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
