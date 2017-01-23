<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleRutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleRutas',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('horaSalida');
            $table->string('precioNiño');
            $table->string('precioAdulto');

            $table->integer('id_ruta')->unsigned();
            

            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('detalleRutas');
    }
}
