<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $category_id = DB::table('categories')->pluck('id');

    return [
        'title' => $faker->name(),
        'user_rate_total' => $faker->numberBetween($min = 100, $max = 200),
        'slug' => $faker->unique()->slug(5),
        'category_id' => $faker->randomElement($category_id),
        'detail' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'public_date' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        'author' => $faker->name(),
        'publishing_company'=> $faker->company(),
    ];
});
