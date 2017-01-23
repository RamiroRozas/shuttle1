<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\aeropuertos;
use Illuminate\Http\Request;

class AeropuertosController extends Controller
{
    public function index(Request $request)
	{
		$aeropuertos = \App\Models\aeropuerto ::get();
		return response()->json([
			"msg"->"Success",
			"aeropuertos"->$aeropuertos->toArray();
			],200)
	}
}
