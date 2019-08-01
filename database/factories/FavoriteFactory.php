<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Favorite;
use Faker\Generator as Faker;

$factory->define(Favorite::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');

    return [
        'user_id' => $faker->randomElement($user_id),
        'name' => $faker->name(),
    ];
});
