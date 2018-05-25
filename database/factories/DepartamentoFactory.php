<?php
/*
 * $table->integer('p_id')->unsigned()->nullable();
            $table->string('administrador', 50);
            $table->string('nombre', 50);
            $table->longText('firma');
 * */
use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
    return [
        'p_id' =>  App\Departamento::all()->random(),
        'administrador' => $faker->name(),
        'nombre' => $faker->text(50),
        'firma' => $faker->text(500)
    ];
});
