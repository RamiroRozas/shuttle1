<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class reserva extends Model {

	protected $fillable = ['cod_reserva', 'fechaReserva','precioTotalGeneral'];
}