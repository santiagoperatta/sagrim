<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
					<h1 class="my-10 text-3xl font-bold text-center mb-10">Mis Notificaciones</h1>
					<div class="divide-y divide-gray-200 w-full">
						@forelse ( $notificaciones as $notificacion )
							<div class="p-5 lg:flex lg:justify-between lg:items-center">
								<div>
									<p>Tienes un nuevo interesado en:
										<span>{{$notificacion->data['nombre_tarea']}}</span>
									</p>
									<p class="font-bold">
										<span>{{$notificacion->created_at->diffForHumans()}}</span>
									</p>
								</div>
								<div class="mt-5 lg:mt-0">
									<a href="{{route('profesionals.index', $notificacion->data['id_tarea'])}}" class="p-3 bg-green-600 text-sm font-bold text-white rounded-lg uppercase">
										Corregir
									</a>
								</div>
							</div>
							<hr>
						@empty
							<p class="text-center text-gray-600">No hay notificaciones nuevas</p>
						@endforelse
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>