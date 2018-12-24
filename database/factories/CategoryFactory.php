<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'categories' => $faker->text(10),
        'key' => $faker->text(10),
    ];
});
