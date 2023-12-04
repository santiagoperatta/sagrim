<div class="md:justify-center p-5">
	<form class="md:w-2/3 space-y-5" wire:submit.prevent='crearPunto'>
		<div class="mb-2">
			<x-input-label for="nombre_punto" :value="__('Nombre del punto')" />
			<x-text-input id="nombre_punto" class="block w-full" type="text"  wire:model="nombre_punto"/>
			<x-input-error :messages="$errors->get('nombre_punto')"/>
		</div>

		<label>
			<input type="checkbox" name="required"> Requerido
		</label>
	
	</form>
</div>