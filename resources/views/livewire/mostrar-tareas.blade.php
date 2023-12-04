<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @forelse ($tareas as $tarea)
            <div class="mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col sm:flex-row items-start sm:items-center justify-between">
                <div class="p-4 text-gray-900">
                    <a href="{{route('tareas.show', $tarea->id)}}" class="text-center text-xl font-bold">
                        {{ $tarea->tarea }}
                    </a>
                    <p class="">
                        Expediente: <strong>{{ $tarea->expediente }}</strong>
                    </p>
                </div>

                <div class="p-4 flex gap-3 items-start">
                    <a href="{{route('profesionals.index', $tarea)}}" class="text-center bg-gray-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                        Corregir
                    </a>
					
                    <a href="{{route('tareas.edit', $tarea->id)}}" class="text-center bg-blue-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                        Editar
                    </a>

                    <a href="#" class="text-center bg-red-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                        Eliminar
                    </a>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No creaste ninguna tarea aún</p>
        @endforelse
    </div>

    <div class="flex justify-center mt-10">
        {{$tareas->links()}}
    </div>
</div>
