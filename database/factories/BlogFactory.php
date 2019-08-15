<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');
    $book_id = DB::table('books')->pluck('id');

    return [
        'user_id' => $faker->randomElement($user_id),
        'book_id' => $faker->randomElement($book_id),
        'slug' => $faker->unique()->slug(5),
        'title' => $faker->name(),
        'user_rate_total' => $faker->numberBetween($min = 100, $max = 200),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
