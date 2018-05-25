<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_data', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('asunto');
            $table->integer('prioridad_id')->unsigned()->nullable();
            $table->timestamps();

            //$table->foreign('id')->references('id')->on('tickets');
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
        Schema::dropIfExists('ticket_data');
    }
}
