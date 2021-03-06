<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_reserva')->unique();
            $table->datetime('fechaReserva');
            $table->string('precioTotalGeneral');
            $table->string('id_representante');

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
        Schema::drop('reservas');
    }
}
