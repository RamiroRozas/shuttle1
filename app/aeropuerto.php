<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class aeropuerto extends Model {

	protected $fillable = ['cod_aeropuerto', 'nombre','direccion'];
}