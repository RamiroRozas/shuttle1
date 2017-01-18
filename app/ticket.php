<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model {

	protected $fillable = ['cod_ticket', 'codigoQR','precioUnitario'];
}