<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_ruta')->unique();
            $table->string('nombre');
            $table->string('origen');
            $table->string('destino');
            $table->integer('id_ciudad')->unsigned();

            $table->foreign('id_ciudad')->references('id')->on('ciudades')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('rutas');
    }
}
