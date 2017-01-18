<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model {

	protected $fillable = ['cod_proveedor', 'razonSocal','telefono','responsable','direecion'];
}