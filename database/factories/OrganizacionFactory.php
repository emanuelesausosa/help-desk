<?php

use Faker\Generator as Faker;

$factory->define(App\Organizacion::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(50),
        'administrador' => $faker->text(50),
        'notas' => $faker->text(255)
    ];
});
