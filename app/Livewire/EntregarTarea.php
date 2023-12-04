<?php

namespace App\Livewire;

use App\Models\Tarea;
use App\Notifications\NuevaEntrega;
use Livewire\Component;
use Livewire\WithFileUploads;

class EntregarTarea extends Component
{
	use WithFileUploads;
	public $tarea;
	public $pdf;

	protected $rules = [
		'pdf' => 'required|mimes:pdf'
	];

	public function mount(Tarea $tarea){
		$this->tarea = $tarea;
	}

	public function subirTarea(){
		$this->validate();

		//almacenar archivo
		$pdf = $this->pdf->store('public/archivos');
		$datos['pdf']=str_replace('public/archivos', '', $pdf);

		//notificacion
		$this->tarea->admin->notify(new NuevaEntrega($this->tarea->id, $this->tarea->tarea, auth()->user()->id));
		
		//guardar
		$this->tarea->profesionals()->create([
			'user_id'=>auth()->user()->id,
			'pdf'=>$datos['pdf']
		]);


		session()->flash('mensaje', 'Tu archivo se guardó se realizó con éxito.');
		return redirect()->back();
	}

    public function render()
    {
        return view('livewire.entregar-tarea');
    }
}
