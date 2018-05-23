<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizacion_data', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('direccion', 255);
            $table->string('telefono', 20);
            $table->string('extension', 6);
            $table->string('sitio_web', 255);
            $table->longText('notas');
            $table->timestamps();

            // add foreign key
            $table->foreign('id')->references('id')->on('organizaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizacion_data');
    }
}
