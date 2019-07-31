<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\FavoriteDetail;
use Faker\Generator as Faker;

$factory->define(FavoriteDetail::class, function (Faker $faker) {
    $favorite_id = DB::table('favorites')->pluck('id');
    $book_id = DB::table('books')->pluck('id');

    return [
        'favorite_id' => $faker->randomElement($favorite_id),
        'book_id' => $faker->randomElement($book_id),
    ];
});
