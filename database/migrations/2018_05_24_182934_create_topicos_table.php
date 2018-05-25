<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p_id')->unsigned()->nullable();
            $table->text('nombre', 50);
            $table->longText('notas');
            $table->boolean('es_activo');
            $table->boolean('es_publico');
            $table->integer('sla_id')->unsigned();
            $table->integer('prioridad_id')->unsigned();
            $table->timestamps();

            //FKs
            $table->foreign('p_id')->references('id')->on('topicos');
            $table->foreign('sla_id')->references('id')->on('slas');
            $table->foreign('prioridad_id')->references('id')->on('ticket_prioridades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topicos');
    }
}
