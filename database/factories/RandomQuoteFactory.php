<?php

use Faker\Generator as Faker;

$factory->define(\App\RandomQuote::class, function (Faker $faker) {
    return [
        'quote' => $faker->text(500),
        'autor_name' => $faker->name,
        'autor_surname' => $faker->text(20),

    ];
});
