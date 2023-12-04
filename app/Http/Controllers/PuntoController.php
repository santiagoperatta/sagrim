<?php

namespace App\Http\Controllers;

use App\Models\Punto;
use App\Models\Tarea;
use Illuminate\Http\Request;

class PuntoController extends Controller
{
	public function create()
    {
		//$this->authorize('create', Tarea::class);
		return view('puntos.create');
    }
}
