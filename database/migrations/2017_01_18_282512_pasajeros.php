<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pasajeros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pasajeros',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_pasajero')->unique();
            $table->string('tipoDocumento');
            $table->string('nroDocumento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->string('nacionalidad');
            $table->string('fechaNacimiento');
            $table->string('telefono');
            $table->string('email');
            $table->integer('id_pasajero')->unsigned();

            $table->foreign('id_pasajero')->references('id')->on('reservas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('pasajeros');
    }
}
