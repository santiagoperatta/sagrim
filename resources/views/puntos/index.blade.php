<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis Tareas') }}
        </h2>
    </x-slot>

	@if (session()->has('mensaje'))
		<div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
			{{session('mensaje')}}
		</div>
	@endif

    <div class="py-12">
		<livewire:mostrar-tareas/>
    </div>
</x-app-layout>
