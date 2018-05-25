<?php

use Faker\Generator as Faker;

/*
 * $table->string('nombre', 50);
            $table->string('es_activo');
 * */

$factory->define(App\TicketEstado::class, function (Faker $faker) {
    return [
        "nombre" => $faker->text(50),
        "es_activo" => $faker->boolean()
    ];
});
