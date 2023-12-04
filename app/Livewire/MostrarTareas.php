<?php

namespace App\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class MostrarTareas extends Component
{
	
    public function render()
    {
		$tareas = Tarea::where('user_id', auth()->user()->id)->paginate(10);
		return view('livewire.mostrar-tareas', [
			'tareas' => $tareas
		]);
    }
}
