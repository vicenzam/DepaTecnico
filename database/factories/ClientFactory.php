<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'nombre'   => $faker->sentence(2),
		'cedula'   => $faker->text(10),
		'telefono' => $faker->text(10),	
		'email'    => $faker->text(30),
    ];
});
