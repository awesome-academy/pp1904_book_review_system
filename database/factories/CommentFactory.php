<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');
    $post_id= DB::table('blogs')->pluck('id');
    $post_type ='App\Models\Blog';
    if(rand(0, 1)){
        $post_id= DB::table('books')->pluck('id');
        $post_type = 'App\Models\Book';
    }

    return [
        'user_id' => $faker->randomElement($user_id),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'post_id' => $faker->randomElement($post_id),
        'post_type' => $post_type,
        'parent_id' => $faker->numberBetween($min = 01, $max = 20),
    ];
});
