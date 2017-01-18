<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class terminal extends Model {

	protected $fillable = ['cod_terminal', 'nombre','direccion'];
}