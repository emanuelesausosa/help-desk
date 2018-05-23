<?php

use Faker\Generator as Faker;
use App\OrganizacionData;
use App\Organizacion;

/*
 * $table->string('direccion', 255);
            $table->string('telefono', 12);
            $table->string('extension', 6);
            $table->string('sitio_web', 255);
            $table->longText('notas');
 * */

$factory->define(OrganizacionData::class, function (Faker $faker) {
    return [
        'id' => Organizacion::all()->random()->id,
        'direccion' => $faker->address(),
        'telefono' => $faker->phoneNumber(),
        'extension' => $faker->text(6),
        'sitio_web' => $faker->url(),
        'notas' => $faker->text()
    ];
});
