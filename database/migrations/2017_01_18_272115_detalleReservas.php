<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleReservas',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('fecha')->unique();
            $table->string('hora_salida');
            $table->string('cantidad');
            $table->string('precioTotalReserva');
            $table->integer('id_ruta')->unsigned();
            $table->integer('id_reserva')->unsigned();
            $table->integer('id_ticket')->unsigned();

            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_reserva')->references('id')->on('reservas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_ticket')->references('id')->on('tickets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('detalleReservas');
    }
}
