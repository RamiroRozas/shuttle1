<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class estacion extends Model {

	protected $fillable = ['cod_estacion', 'nombre','direccion'];
}