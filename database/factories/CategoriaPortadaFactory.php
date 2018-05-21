<?php

use Faker\Generator as Faker;

$factory->define(App\CategoriaPortada::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(50),
        'descripcion' => $faker->text(255)
    ];
});
