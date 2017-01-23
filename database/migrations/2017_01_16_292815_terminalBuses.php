<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TerminalBuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminalBuses',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_terminal')->unique();
            $table->string('nombre');
            $table->string('direccion');
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
        Schema::drop('terminalBuses');
    }
}
