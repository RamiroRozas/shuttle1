<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model {
	protected $table = 'hoteles';

	protected $fillable = ['cod_hotel','nombre','direccion','telefono','email'];
}