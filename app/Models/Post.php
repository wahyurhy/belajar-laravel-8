<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wahyu Rahayu",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis culpa officia vero cupiditate, id veniam ut odio corrupti! Vel, placeat ut. Ex laboriosam iusto voluptas culpa rerum? Iure pariatur eius dolore libero! Non sequi vero assumenda vitae provident in laudantium quis ad iure eveniet voluptate veniam id voluptatem dolores, ratione dolore nihil dolor, qui deserunt. Blanditiis inventore repudiandae explicabo, perferendis, illum id est provident corrupti fugiat cum autem ducimus minima dicta tenetur maxime, laudantium sunt labore rem? Praesentium, illum dolorum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Martin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam at consequatur a sit, perspiciatis hic excepturi iusto atque illo, ad ducimus aliquid officiis laborum consequuntur tempora facere sint distinctio nemo magnam obcaecati nisi! Vel, quisquam cumque ullam voluptates laboriosam fuga commodi voluptate magnam tenetur aspernatur? Eius vitae magnam repellat eos rem. Exercitationem repudiandae ex rerum itaque harum veritatis quos commodi, modi cupiditate eum ratione error fugiat totam nihil porro molestias consectetur eos aperiam libero aspernatur excepturi, hic placeat facere perspiciatis. Ratione, perferendis, explicabo sed dolore harum reiciendis sequi quod dolorem voluptate deleniti quasi distinctio eligendi, repudiandae obcaecati unde quae soluta."
        ],
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
