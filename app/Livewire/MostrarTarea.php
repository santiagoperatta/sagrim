<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarTarea extends Component
{
	public $tarea;
	
    public function render()
    {
        return view('livewire.mostrar-tarea');
    }
}
