<?php

use Faker\Generator as Faker;

$factory->define(App\Reception::class, function (Faker $faker) {
    return [
        'technical_id' => rand(1,10),
        'nombre_cliente'   => $faker->sentence(2),
        'telefono' => $faker->text(10), 
        'fecharecepcion' => $faker->date(), 
        'problema' => $faker->text(80), 
        'equipo' => $faker->text(80), 
        'observacion' => $faker->text(80), 
        'estado' => $faker->randomElement(['INGRESADO', 'REVISION', 'ENTREGADO']),
    ];
});
