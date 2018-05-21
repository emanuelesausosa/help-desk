<?php

use Faker\Generator as Faker;
use App\Organizacion;
use App\CategoriaPortada;

$factory->define(App\ContenidoPortada::class, function (Faker $faker) {
    return [
        'encabezado' => $faker->title(50),
        'contenido' => $faker->text(500),
        'creado_por' => $faker->text(50),
        'activo' => $faker->boolean(),
        'organizacion_id' => Organizacion::all()->random()->id,
        'categoria_portada_id' => CategoriaPortada::all()->random()->id
    ];
});
