<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\PublishingCompany;
use Faker\Generator as Faker;

$factory->define(PublishingCompany::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'slug' => $faker->unique()->slug(5),
    ];
});
