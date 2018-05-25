<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->integer('depto_id')->unsigned();
            $table->integer('topico_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->string('direccion_ip');
            $table->string('origen_peticion');
            $table->dateTime('fecha_vence');
            $table->dateTime('fecha_vence_std');
            $table->dateTime('fecha_respondido');
            $table->dateTime('fecha_cerrado');
            $table->timestamps();

            /*FKs*/
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('estado_id')->references('id')->on('ticket_estados');
            $table->foreign('depto_id')->references('id')->on('departamentos');
            $table->foreign('topico_id')->references('id')->on('topicos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
