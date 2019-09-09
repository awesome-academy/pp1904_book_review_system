<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');

    return [
        'user_id' => $faker->randomElement($user_id),
        'short_desc' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'slug' => $faker->unique()->slug(5),
        'title' => $faker->name(),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
