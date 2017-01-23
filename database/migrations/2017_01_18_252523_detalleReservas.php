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
            $table->datetime('fecha');
            $table->string('hora_salida');
            $table->string('cantidad');
            $table->string('origen');
            $table->string('destino');
            $table->string('precioTotalReserva');

            $table->integer('id_ruta')->unsigned();
            $table->integer('id_reserva')->unsigned();

            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_reserva')->references('id')->on('reservas')->onDelete('cascade')->onUpdate('cascade');
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
