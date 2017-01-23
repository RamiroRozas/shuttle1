<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Traslados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traslados',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_traslado')->unique();
            $table->string('hora');
            $table->datetime('fecha');
            $table->string('ruta');
            $table->integer('id_proveedor')->unsigned();
            $table->integer('id_ticket')->unsigned();

            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('traslados');
    }
}
