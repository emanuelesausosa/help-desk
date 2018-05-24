<?php

use Faker\Generator as Faker;

/*
 * $table->text('prioridad', 50);
            $table->text('nombre', 50);
            $table->longText('notas');
            $table->text('prioridad_color', 20);
            $table->integer('prioridad_urgencia')->unsigned();
            $table->boolean('es_publico');
 * */

$factory->define(App\TicketPrioridad::class, function (Faker $faker) {
    return [
        'prioridad' => $faker->text(20),
        'nombre' => $faker->text(20),
        'notas' => $faker->text(100),
        'prioridad_color' => $faker->text(20),
        'prioridad_urgencia' => $faker->randomNumber(),
        'es_publico' => $faker->boolean()
    ];
});
