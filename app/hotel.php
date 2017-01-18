<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model {

	protected $fillable = ['cod_hotel', 'nombre','direccion','telefono','email'];
}