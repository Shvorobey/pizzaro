<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'body' => $faker->text(1200),
        'cover' => $faker->imageUrl(1619, 827),
        'user_id' => 1,
    ];
});
