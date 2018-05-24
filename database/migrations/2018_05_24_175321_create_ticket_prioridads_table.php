<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketPrioridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_prioridades', function (Blueprint $table) {
            $table->increments('id');
            $table->text('prioridad', 50);
            $table->text('nombre', 50);
            $table->longText('notas');
            $table->text('prioridad_color', 20);
            $table->integer('prioridad_urgencia')->unsigned();
            $table->boolean('es_publico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_prioridades');
    }
}
