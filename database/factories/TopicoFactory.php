<?php

use Faker\Generator as Faker;

/*
 * $table->integer('p_id')->unsigned();
            $table->text('nombre', 50);
            $table->longText('notas');
            $table->boolean('es_activo');
            $table->boolean('es_publico');
            $table->integer('sla_id')->unsigned();
            $table->integer('prioridad_id')->unsigned();
 * */

$factory->define(App\Topico::class, function (Faker $faker) {
    return [
        'p_id' =>  App\Topico::all()->random(),
        'nombre' => $faker->name(),
        'notas' => $faker->text(50),
        'es_activo' => $faker->boolean(),
        'es_publico' => $faker->boolean(),
        'sla_id' => App\Sla::all()->random(),
        'prioridad_id' => App\TicketPrioridad::all()->random()
    ];
});
