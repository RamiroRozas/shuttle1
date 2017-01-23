<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\hotel;
use Illuminate\Http\Request;

class HotelesController extends Controller
{
    public function index(Request $request)
	{
		if ($request->ajax()) {
            $hotel = hotel::all();	
            return response()->json($hotel);
            
        }
        return view('administrador.hoteles');


	}
}
