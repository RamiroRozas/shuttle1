<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conductores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_conductor');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('dni');
            $table->string('telefono');
            $table->string('edad');
            $table->integer('id_proveedor')->unsigned();

            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('conductores');
    }
}
