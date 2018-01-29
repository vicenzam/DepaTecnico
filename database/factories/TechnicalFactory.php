<?php

use Faker\Generator as Faker;

$factory->define(App\Technical::class, function (Faker $faker) {
    return [
        'nombre'   => $faker->sentence(2)
    ];
});
