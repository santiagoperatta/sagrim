<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class ProfesionalsController extends Controller
{
    public function index(Tarea $tarea){
		return view('profesionals.index', [
			'tarea' => $tarea
		]);
	}
}
