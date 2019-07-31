<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Rate;
use Faker\Generator as Faker;

$factory->define(Rate::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');
    $post_id= DB::table('books')->pluck('id');
    $post_type = ['App\Models\Book', 'App\Models\Blog'];

    return [
        'user_id' => $faker->randomElement($user_id),
        'rate_point' => $faker->numberBetween($min = 01, $max = 05),
        'post_id' => $faker->randomElement($post_id),
        'post_type' => $faker->randomElement($post_type),
    ];
});
