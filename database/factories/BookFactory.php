<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $category_id = DB::table('categories')->pluck('id');
    $author_id = DB::table('authors')->pluck('id');
    $publishing_company_id = DB::table('publishing_companies')->pluck('id');

    return [
        'title' => $faker->lastName(),
        'user_rate_total' => $faker->numberBetween($min = 100, $max = 200),
        'slug' => $faker->unique()->slug(5),
        'category_id' => $faker->randomElement($category_id),
        'detail' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'image' => '/img/book/book ('.$faker->unique()->numberBetween($min = 1, $max = 159).').jpg',
        'public_date' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        'author_id' => $faker->randomElement($author_id),
        'publishing_company_id'=> $faker->randomElement($publishing_company_id),
        'created_at' => $faker->dateTime($max = 'now'),
    ];
});
