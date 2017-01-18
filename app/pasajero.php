<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class pasajero extends Model {

	protected $fillable = ['cod_pasajero', 'tipoDocumento','nroDocumento','nombres','apellidos','sexo','nacionalidad','fechaNacimiento','telefono','email'];
}