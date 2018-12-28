<?php

use Faker\Generator as Faker;

$factory->define(App\RandomImage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(320, 320),
    ];
});
