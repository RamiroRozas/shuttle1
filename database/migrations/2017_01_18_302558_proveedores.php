<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_proveedor')->unique();
            $table->string('razonSocial');
            $table->string('telefono');
            $table->string('responsable');
            $table->string('direccion');
            $table->integer('id_detalleReserva')->unsigned();

            $table->foreign('id_detalleReserva')->references('id')->on('detalleReservas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('proveedores');
    }
}
