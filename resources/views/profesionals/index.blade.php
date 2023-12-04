<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-center">Correccion de "{{$tarea->tarea}}"</h1>
                    <div class="flex flex-col">
                        <ul class="divide-y divide-gray-200">
                            @forelse ($tarea->profesionals as $profesional)
                                <li class="p-3 flex items-start justify-between">
                                    <div>
                                        <p class="text-xl font-medium text-gray-800">
                                            {{$profesional->user->name}}
                                        </p>
                                        <p class="text-sm text-gray-600">
                                            {{$profesional->user->email}}
                                        </p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <a href="{{route('profesionals.index', $tarea)}}" class="text-center bg-green-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                                            Aprobar
                                        </a>
                                        <a href="{{route('profesionals.index', $tarea)}}" class="text-center bg-red-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                                            Desaprobar
                                        </a>
                                        <a class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm
                                                leading-5 font-medium rounded-full text-gray-700 bg-white hover-bg-gray-50"
                                           href="{{ asset('storage/archivos/' . $profesional->pdf) }}"
                                           target="_blank"
                                           rel="noreferrer noopener">
                                            Ver Archivo
                                        </a>
                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-center text-sm text-gray-600">No hay archivos cargados aun</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>