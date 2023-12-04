<?php

namespace App\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class EditarTarea extends Component
{
	public $tarea_id;
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

	//pasar valores old a form de edit
	public function mount(Tarea $tarea){
		$this->tarea_id = $tarea->id;
		$this->expediente = $tarea->expediente;
		$this->tarea = $tarea->tarea;
		$this->comitente = $tarea->comitente;
		$this->ultimo_envio = $tarea->ultimo_envio;
		$this->ultima_correccion = $tarea->ultima_correccion;
	}

	
	public function editarTarea(){
		$datos = $this->validate();

		$tarea = Tarea::find($this->tarea_id);

		//Asignar valores
		$tarea->expediente = $datos['expediente'];
		$tarea->tarea = $datos['tarea'];
		$tarea->comitente = $datos['comitente'];
		$tarea->ultimo_envio = $datos['ultimo_envio'];
		$tarea->ultima_correccion = $datos['ultima_correccion'];

		$tarea->save();

		//Crear un msj
		session()->flash('mensaje', 'La tarea se edito correctamente');

		//Redireccionar usuario
		return redirect()->route('tareas.index');

	}
	
    public function render()
    {
        return view('livewire.editar-tarea');
    }
}
