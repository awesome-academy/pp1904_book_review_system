<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');
    $category_id = DB::table('categories')->pluck('id');

    return [
        'user_id' => $faker->randomElement($user_id),
        'short_desc' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'slug' => $faker->unique()->slug(5),
        'title' => $faker->name(),
        'category_id' => $faker->randomElement($category_id),
        'image' => $faker->imageUrl($width = 1170, $height = 700),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
