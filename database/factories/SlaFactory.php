<?php

use Faker\Generator as Faker;
use App\Sla;

/*
 * $table->integer('periodo_gracia')->unsigned();
            $table->string('nombre', 50);
            $table->longText('notas');
 * */

$factory->define(App\Sla::class, function (Faker $faker) {
    return [
        'periodo_gracia' => $faker->randomNumber(),
        'nombre' => $faker->text(50),
        'notas' => $faker->text(100)
    ];
});
