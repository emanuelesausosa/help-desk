<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidoPortadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_portadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('encabezado', 50);
            $table->longText('contenido');
            $table->string('creado_por', 50);
            $table->boolean('activo');
            $table->integer('organizacion_id')->unsigned();
            $table->integer('categoria_portada_id')->unsigned();
            $table->timestamps();

            // llave foranea de categoria content
            $table->foreign('organizacion_id')->references('id')->on('organizaciones');
            // llave foranea de organizacion
            $table->foreign('categoria_portada_id')->references('id')->on('categoria_portadas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenido_portadas');
    }
}
