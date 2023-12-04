<div class="p-10">
    <div class="mb-5 flex">
        <div class="flex-1 mr-4">
            <h3 class="font-bold text-xl text-gray-800 my-3">
                {{$tarea->tarea}}
            </h3>
            <div>
                <p>Comitente: {{$tarea->comitente}}</p>
                <p>Expediente: {{$tarea->expediente}}</p>
            </div>
        </div>
        <div>
            @cannot('create', App\Models\Tarea::class)
                <livewire:entregar-tarea
				:tarea="$tarea"
				/>
            @endcannot
        </div>
    </div>
</div>
