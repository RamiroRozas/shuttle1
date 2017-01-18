<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class conductor extends Model {

	protected $fillable = ['cod_conductor', 'nombre','direccion','dni','telefono','edad'];
}