<?php

namespace App\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class CrearTarea extends Component
{
	public $expediente;
	public $tarea;
	public $comitente;
	public $ultimo_envio;
	public $ultima_correccion;

	protected $rules = [
		'expediente' => 'required',
		'tarea' => 'required',
		'comitente' => 'required',
		'ultimo_envio' => 'required',
		'ultima_correccion' => 'required',
	];

	
	public function crearTarea(){
		$datos = $this->validate();

		//Crear tarea
		Tarea::create([
			'expediente'=> $datos['expediente'],
			'tarea'=> $datos['tarea'],
			'comitente'=> $datos['comitente'],
			'ultimo_envio'=> $datos['ultimo_envio'],
			'ultima_correccion'=> $datos['ultima_correccion'],
			'user_id' => auth()->user()->id,
		]);

		//Crear un msj
		session()->flash('mensaje', 'La tarea se publico correctamente');

		//Redireccionar usuario
		return redirect()->route('tareas.index');

	}
	
    public function render()
    {
        return view('livewire.crear-tarea');
    }
}
