<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleReserva extends Model {

	protected $fillable = ['fecha', 'hora_salida','cantidad','precioTotalReserva'];
}