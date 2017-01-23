<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hoteles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteles',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_hotel')->unique();
            $table->string('nombre');
            $table->string('razonSocial');
            $table->string('ruc');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('tipo');
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
        Schema::drop('hoteles');
    }
}
