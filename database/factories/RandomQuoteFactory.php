<?php

use Faker\Generator as Faker;

$factory->define(\App\RandomQuote::class, function (Faker $faker) {
    return [
        'quote' => $faker->text (350),
        'autor_name' => $faker->name,
        'autor_surname' => $faker -> text(15),

    ];
});
