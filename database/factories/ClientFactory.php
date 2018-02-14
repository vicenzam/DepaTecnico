<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
		'nombre'   => $faker->sentence(1),
		'apellido' => $faker->sentence(1),
		'cedula'   => $faker->text(10),
		'telefono' => $faker->text(10),	
		'email'    => $faker->text(30),
    ];
});
