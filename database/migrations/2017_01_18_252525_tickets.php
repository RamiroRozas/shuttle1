<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_ticket')->unique();
            $table->string('codigoQR');
            $table->string('precioUnitario');

            $table->integer('detalleReserva')->unsigned();
            $table->integer('id_pasajero')->unsigned();


            $table->foreign('detalleReserva')->references('id')->on('detalleReservas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_pasajero')->references('id')->on('pasajeros')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('tickets');
    }
}
